<?php

namespace Modules\Promotional\Repositories;

use App\Helpers\StringHelper;
use App\Helpers\UploadHelper;
use Illuminate\Support\Facades\DB;
use Modules\Promotional\Entities\Poll;
use Modules\Promotional\Entities\PollOption;
use Modules\Promotional\Entities\PollResponse;

class PollRepository
{
    public function pollList()
    {
        $query = Poll::orderBy('id', 'desc');
        if (request()->search) {
            $query->where('title', 'like', '%' . request()->search . '%');
            $query->orWhere('slug', 'like', '%' . request()->search . '%');
            $query->orWhere('description', 'like', '%' . request()->search . '%');
        }
        if (request()->isPaginated) {
            $paginateNo = request()->paginateNo ? request()->paginateNo : 20;
            return $query->paginate($paginateNo);
        } else {
            return $query->get();
        }
    }

    public function view($id)
    {
        return Poll::with('pollResponse', 'options' , 'options.item')
        ->where('id', $id)
        ->orWhere('slug', $id)
        ->first();
    }

    public function store($data)
    {
        $data['slug'] = $this->generateSlug($data['title']);
        if (isset($data['image'])) {
            $data['image'] = UploadHelper::upload('image',  $data['image'], 'polls-' . '-' . time(), 'images/polls');
        }
        $poll = Poll::create($data);
        if (count($data['options']) > 0) {
            foreach ($data['options'] as $key => $value) {
                $value['value'] = $value['value'];
                $value['item_id'] = $value['item_id'];
                $value['poll_id'] = $poll->id;
                PollOption::create($value);
            }
        }
    }

    public function update($id, $data)
    {
        $poll = Poll::where('id', $id)->orWhere('slug', $id)->first();
        if ($poll) {

            if (isset($data['image'])) {
                $data['image'] = UploadHelper::update('image',  $data['image'], 'polls-' . '-' . time(), 'images/polls', $poll->image);
            }

            $poll->update($data);

            // Delete if deleted selected
            if (isset($data['deleted_options']) && count($data['deleted_options']) > 0) {
                foreach ($data['deleted_options'] as $value) {
                    $this->deletePollOption($value['id']);
                }
            }

            // Insert or Update
            if (count($data['options']) > 0) {
                foreach ($data['options'] as $key => $value) {
                    if(isset($value['item_id']))
                        $value['item_id'] = $value['item_id'];

                    $value['value'] = $value['value'];
                    $value['poll_id'] = $poll->id;

                    if(isset($value['id'])){
                        // $value['id'] = $value['id'];
                        $this->updatePollOption($value['id'], $value);
                    }else{
                        PollOption::create($value);
                    }
                }
            }
        }

        return $poll;
    }

    public function destroy($id)
    {
        $poll = Poll::where('id', $id)->orWhere('slug', $id)->first();
        if ($poll) {
            $poll->delete();
            return true;
        } else {
            return false;
        }
    }

    public function createPollOption($data)
    {
        return PollOption::create($data);
    }

    public function getPollOptionRow($id)
    {
        return PollOption::find($id);
    }

    public function updatePollOption($id, $data)
    {
        $pollOption = PollOption::where('id', $id)->first();
        if ($pollOption) {
            $pollOption->update($data);
        }

        return $pollOption;
    }

    public function deletePollOption($id)
    {
        $pollOption = PollOption::where('id', $id)->first();
        if ($pollOption) {
            $pollOption->delete();
            return true;
        } else {
            return false;
        }
    }

    public function createPollResponse($data)
    {
        return PollResponse::create($data);
    }

    public function getCustomerPolls($customerId)
    {
        $attendedPoll = PollResponse::with(['poll'])->where('user_id', $customerId)->get();
        return $attendedPoll;
    }

    /**
     * @param $value
     * @return string|string[]|null
     * @throws Exception
     * @throws \Exception
     * generate slug
     */
    public function generateSlug($value)
    {
        return StringHelper::createSlug($value, 'Modules\Promotional\Entities\Poll', 'slug');
    }
}
