<?php
class Automobil extends Vozilo
{
    public function __construct(string $brend, string $model, string $boja)
    {
        parent::__construct($brend, $model, $boja);
        Log::logVozilo($this);
    }

    public function getCenaPutarine(): int
    {
        return 240;
    }

    public function __toString(): string
    {
        return 'Automobil ' . $this->brend . ' ' . $this->model . ' ' . $this->boja . ' boja';
    }
}
