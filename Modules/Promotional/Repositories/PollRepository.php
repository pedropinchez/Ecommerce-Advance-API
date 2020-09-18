<?php

namespace Modules\Promotional\Repositories;

use App\Helpers\StringHelper;
use Modules\Promotional\Entities\Poll;
use Modules\Promotional\Entities\PollOption;

class PollRepository
{
    public function pollList()
    {
        return Poll::get();
    }

    public function view($id)
    {
        return Poll::where('id', $id)->orWhere('slug', $id)->first();
    }

    public function store($data)
    {
        $data['slug'] = $this->generateSlug($data['title']);
        return Poll::create($data);
    }

    public function update($id, $data)
    {
        $poll = Poll::where('id', $id)->orWhere('slug', $id)->first();
        if($poll) {
            $poll->update($data);
        }

        return $poll;
    }

    public function destroy($id)
    {
        $poll = Poll::where('id', $id)->orWhere('slug', $id)->first();
        if($poll) {
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
        if($pollOption) {
            $pollOption->update($data);
        }

        return $pollOption;
    }

    public function deletePollOption($id)
    {
        $pollOption = PollOption::where('id', $id)->first();
        if($pollOption) {
            $pollOption->delete();
            return true;
        } else {
            return false;
        }
    }

    public function getCustomerPolls($customerId)
    {

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
