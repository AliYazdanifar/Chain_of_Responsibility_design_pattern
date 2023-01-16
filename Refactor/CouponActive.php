<?php

require_once 'AbstractCouponValidator.php';

class CouponActive extends AbstractCouponValidator
{
    public function validate($code)
    {
        if (empty($this->coupon->find($code))){

            throw new Exception('Code Not exists');
        }

        echo 'Coupon exists' . PHP_EOL;

        return $this->goToNextValidator($code);
    }
}
