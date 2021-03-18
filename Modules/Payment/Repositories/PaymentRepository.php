<?php

namespace Modules\Payment\Repositories;

use Modules\Payment\Entities\PaymentMethod;

class PaymentRepository
{

    public function getPaymentMethods()
    {
        return PaymentMethod::get();
    }

}
