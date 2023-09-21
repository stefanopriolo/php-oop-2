<?php
trait AnimalTrait
{
    protected $img;
    protected $icon;

    public function getImg()
    {
        return $this->img;
    }

    public function getIcon()
    {
        return $this->icon;
    }
}
