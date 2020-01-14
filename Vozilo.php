<?php
abstract class Vozilo
{
    protected $brend, $model, $boja;

    public function __construct(string $brend, string $model, string $boja)
    {
        $this->brend = $brend;
        $this->model = $model;
        $this->boja = $boja;
    }

    abstract public function getCenaPutarine(): int;

    public function setBrend(string $brend)
    {
        $this->brend = $brend;
    }

    public function getBrend(): string
    {
        return $this->brend;
    }

    public function setModel(string $model)
    {
        $this->model = $model;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function setBoja(string $boja)
    {
        $this->boja = $boja;
    }

    public function getBoja(): string
    {
        return $this->boja;
    }

    abstract public function __toString(): string;
}
