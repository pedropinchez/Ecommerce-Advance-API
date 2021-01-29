<?php

namespace Modules\Auth\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class Sms extends Model
{
    public static function sendSMS($number, $otp)
    {
        if(!Config::get('app.is_sms_send')) return true; // Just for dev testing mode

        $message_sent = "OTP - ".$otp."\nExpired in 5 minutes.\nMaccaf Ecommerce.";
            try{
                $soapClient = new \SoapClient("https://api2.onnorokomSMS.com/sendSMS.asmx?wsdl");
                $paramArray = array(
                    'userName' => "01710375684",
                    'userPassword' => "788e2ea892",
                    'mobileNumber' => $number,
                    'smsText' => $message_sent,
                    'type' => "TEXT",
                    'maskName' => '',
                    'campaignName' => '',
                );
                $value = $soapClient->__call("OneToOne", array($paramArray));
                return true;
            } catch (\Exception $e) {
                return false;
            }
    }
}
