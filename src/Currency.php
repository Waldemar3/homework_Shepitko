<?php


namespace App;


class Currency
{
    private string $isoCode;

    public function __construct($currency)
    {
        $this->setIsoCode($currency);
    }

    public function equals(Currency $currency):bool
    {
        return $this->isoCode === $currency->getIsoCode();
    }

    private function setIsoCode($isoCode):void
    {
        if(!(new \NumberFormatter('ru_RU', \NumberFormatter::CURRENCY))->formatCurrency(0, $isoCode)){
            throw new \InvalidArgumentException();
        }

        $this->isoCode = $isoCode;
    }

    public function getIsoCode():string
    {
        return $this->isoCode;
    }
}