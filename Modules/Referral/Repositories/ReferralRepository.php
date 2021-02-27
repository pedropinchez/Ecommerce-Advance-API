<?php

namespace Modules\Referral\Repositories;

use Carbon\Carbon;
use Modules\Referral\Entities\Referral;

class ReferralRepository
{

    /**
     * Store a referral data
     *
     * @param int $referee_id - Who Registered
     * @param int $referrer_id - By Whom Registered
     * @param string $source_link
     * @return object referral object which has been created
     */
    public function store($referee_id, $referrer_id, $source_link = "")
    {
        $data['referee_id'] = $referee_id;
        $data['referrer_id'] = $referrer_id;
        $data['source_link'] = $source_link;
        $data['referral_date_time'] = Carbon::now();
        $referral = Referral::where('referee_id', $referee_id)
        ->where('referrer_id', $referrer_id)
        ->createOrUpdate($data);
        return $referral;
    }
}
