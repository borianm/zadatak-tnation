<?php
class Autobus extends Vozilo
{
    public function __construct(string $brend, string $model, string $boja)
    {
        parent::__construct($brend, $model, $boja);
        Log::logVozilo($this);
    }

    public function getCenaPutarine(): int
    {
        return 300;
    }

    public function __toString(): string
    {
        return 'Autobus ' . $this->brend . ' ' . $this->model . ' ' . $this->boja . ' boja';
    }
}
