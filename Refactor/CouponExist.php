<?php

require_once 'AbstractCouponValidator.php';

class CouponExist extends AbstractCouponValidator
{
    public function validate($code)
    {
        if (!$this->coupon->isActive($code)){
            throw new Exception('Code not active');
        }

        echo 'Coupon is active'. PHP_EOL;

        return $this->goToNextValidator($code);
    }
}
