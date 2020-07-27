<?php


namespace App;


class Money
{
    private float $amount;
    private Currency $currency;

    public function __construct($amount, $currency)
    {
        $this->setCurrency($currency);
        $this->setAmount($amount);
    }

    public function add(self $amount):float
    {
        if($this->currency->getIsoCode() === $amount->getCurrency()->getIsoCode()){
            return $this->amount + $amount->getAmount();
        }

        throw new \InvalidArgumentException();
    }

    public function equals(self $amount):bool
    {
        return $this->amount === $amount->getAmount() &&
               $this->currency->getIsoCode() === $amount->getCurrency()->getIsoCode();
    }

    private function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    private function setCurrency($currency): void
    {
        $this->currency = $currency;
    }

    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }


}
