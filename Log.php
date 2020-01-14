<?php
class Log
{
    private static $logs = [];

    public static function logVozilo(Vozilo $vozilo): void
    {
        $date = date('Y.m.d H:i');
        $log_text = "[$date] Kreiran $vozilo";
        self::$logs[] = $log_text;
    }

    public static function logNaplataPutarine(Radnik $radnik, Vozilo $vozilo): void
    {
        $date = date('Y.m.d H:i');
        $naplaceno = $vozilo->getCenaPutarine();
        $full_ime_radnika  = $radnik->getIme() . " " . $radnik->getPrezime();
        $log_text = "[$date] Naplaceno $naplaceno od strane $full_ime_radnika za $vozilo";
        self::$logs[] = $log_text;
    }

    public static function getLogs(): array
    {
        return self::$logs;
    }
}
