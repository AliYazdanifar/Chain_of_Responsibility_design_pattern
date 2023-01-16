<?php


abstract class AbstractCouponValidator
{
    protected $coupon;

    protected $nextRule;

    public function __construct(Coupon $coupon)
    {
        $this->coupon = $coupon;
    }

    public function setNextRule($validator)
    {
        $this->nextRule = $validator;
    }

    protected function goToNextValidator($code)
    {
        if ($this->nextRule == null){

            return true;
        }

        return $this->nextRule->validate($code);
    }

    abstract public function validate($code);

}
