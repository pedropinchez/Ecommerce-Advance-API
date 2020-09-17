<?php

namespace Modules\Promotional\Repositories;

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

    public function updatePollOption($id, $data)
    {
        $pollOption = PollOption::where('poll_id', $id)->first();
        if($pollOption) {
            $pollOption->update($data);
        }

        return $pollOption;
    }

    public function getPollOption($customerId)
    {

    }
}
