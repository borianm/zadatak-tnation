<?php
class Radnik implements NaplataPutarine
{
    private $naplatna_stanica, $ime, $prezime, $naplaceno = 0;

    public function __construct(NaplatnaStanica $naplatna_stanica, string $ime, string $prezime)
    {
        $this->naplatna_stanica = $naplatna_stanica;
        $this->ime = $ime;
        $this->prezime = $prezime;
        if ($naplatna_stanica != null) {
            $this->naplatna_stanica->addRadnik($this);
        }
    }

    public function setNaplatnaStanica(NaplatnaStanica $naplatna_stanica)
    {
        $this->naplatna_stanica->removeRadnik($this);
        $this->naplatna_stanica = $naplatna_stanica;
        if ($naplatna_stanica != null) {
            $this->naplatna_stanica->addRadnik($this);
        }
    }

    public function getNaplatnaStanica(): NaplatnaStanica
    {
        return $this->naplatna_stanica;
    }

    public function setIme(string $ime)
    {
        $this->ime = $ime;
    }

    public function getIme(): string
    {
        return $this->ime;
    }

    public function setPrezime(string $prezime)
    {
        $this->prezime = $prezime;
    }

    public function getPrezime(): string
    {
        return $this->prezime;
    }

    public function naplatiPutarinu(Vozilo $vozilo): void
    {
        $this->naplaceno += $vozilo->getCenaPutarine();
        Log::logNaplataPutarine($this, $vozilo);
    }

    public function getNaplaceno(): int
    {
        return $this->naplaceno;
    }
}
