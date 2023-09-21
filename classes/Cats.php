<?php
class Cats
{
    use AnimalTrait;
    public function __construct(string $taglia, int $eta, bool $sterilizzato)
    {

        $this->icon = '<i class="fa-solid fa-cat"></i>';
        $this->taglia = $taglia;
        $this->eta = $eta;
        $this->sterilizzato = $sterilizzato;
    }
}
