<?php

namespace Modules\Auth\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Otp extends Model
{
    public $fillable = [
        'phone_no',
        'otp',
        'expire_date',
    ];

    public static function updateOTP($otpData, $otp, $number)
    {
        if(!is_null($otpData)){
            $otpData->otp = $otp;
            $otpData->expire_date =  Carbon::now()->addMinutes(5);
            $otpData->save();
        }else{
            $otpData = Otp::create([
                'phone_no' => $number,
                'otp' => $otp,
                'expire_date' => Carbon::now()->addMinutes(5),
            ]);
        }
    }
}
