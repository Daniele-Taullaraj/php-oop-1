<?php
class Movies
{
    public $titolo;
    public $lingua;
    public $durata;

    public function __construct($titolo, $lingua, $durata)
    {
        $this->titolo = $titolo;
        $this->lingua = $lingua;
        $this->durata = $durata;
    }
}