<?php
class NaplatnaStanica
{
    private static $instance = null;
    private $radnici = [];

    private function __construct()
    { }

    public static function getInstance(): NaplatnaStanica
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getRadnici(): array
    {
        return $this->radnici;
    }

    public function addRadnik(Radnik $radnik): void
    {
        $this->radnici[] = $radnik;
    }

    public function removeRadnik(Radnik $radnik): void
    {
        foreach ($this->radnici as $key => $_radnik) {
            if ($radnik == $_radnik) {
                unset($this->radnici[$key]);
                break;
            }
        }
    }

    public function getNaplacenoUkupno(): int
    {
        $naplaceno = 0;
        foreach ($this->radnici as $radnik) {
            $naplaceno += $radnik->getNaplaceno();
        }
        return $naplaceno;
    }
}
