<?php
require_once 'AnimalTrait.php';


class Dogs
{
    use AnimalTrait;
    public function __construct(string $taglia, int $eta, bool $sterilizzato)
    {

        $this->icon = '<i class="fa-solid fa-dog"></i>';
        $this->taglia = $taglia;
        $this->eta = $eta;
        $this->sterilizzato = $sterilizzato;
    }
}
