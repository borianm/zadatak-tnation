<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$bmw_m5 = new Automobil('BMW', 'M5', 'Bela');
$man_d26 = new Kamion('MAN', 'D26', 'Crna', false);
$scania_s730 = new Kamion('Scania', 'S730', 'Siva', true);
$volvo_9400 = new Autobus('Volvo', '9400', 'Plava');
$naplatna_stanica = NaplatnaStanica::getInstance();
$petar_markovic = new Radnik($naplatna_stanica, 'Petar', 'Markovic');
$dragan_petrovic = new Radnik($naplatna_stanica, 'Dragan', 'Petrovic');
$petar_markovic->naplatiPutarinu($bmw_m5);
$petar_markovic->naplatiPutarinu($scania_s730);
$dragan_petrovic->naplatiPutarinu($man_d26);
$dragan_petrovic->naplatiPutarinu($volvo_9400);

echo "1. " . $petar_markovic->getNaplaceno() . "<br>" .
    "2. " . $dragan_petrovic->getNaplaceno() . "<br>" .
    "3. " . $naplatna_stanica->getNaplacenoUkupno() . "<br>";
