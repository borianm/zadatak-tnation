<?php
class Kamion extends Vozilo implements Prikolica
{
    private $prikolica;

    public function __construct(string $brend, string $model, string $boja, bool $prikolica)
    {
        parent::__construct($brend, $model, $boja);
        $this->prikolica = $prikolica;
        Log::logVozilo($this);
    }

    public function setPrikolica(bool $prikolica): void
    {
        $this->prikolica = $prikolica;
    }

    public function getPrikolica(): bool
    {
        return $this->prikolica;
    }

    public function getCenaPutarine(): int
    {
        if ($this->prikolica) {
            return 450;
        } else {
            return 350;
        }
    }

    public function __toString(): string
    {
        $s = 'Kamion ' . $this->brend . ' ' . $this->model . ' ' . $this->boja . ' boja';
        if ($this->prikolica) {
            $s .= ' sa prikolicom';
        } else {
            $s .= ' bez prikolice';
        }
        return $s;
    }
}
