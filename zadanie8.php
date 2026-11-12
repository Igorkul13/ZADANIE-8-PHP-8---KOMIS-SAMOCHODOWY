<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
header('Content-Type: text/html; charset=utf-8');

$samochody = [
    [
        'marka' => 'Toyota',
        'model' => 'Corolla',
        'rokProdukcji' => 2019,
        'cena' => 75000,
        'przebieg' => 95000,
        'paliwo' => 'benzyna',
        'moc' => 132
    ],
    [
        'marka' => 'Volkswagen',
        'model' => 'Golf',
        'rokProdukcji' => 2021,
        'cena' => 98000,
        'przebieg' => 45000,
        'paliwo' => 'benzyna',
        'moc' => 150
    ],
    [
        'marka' => 'BMW',
        'model' => '320d',
        'rokProdukcji' => 2018,
        'cena' => 85000,
        'przebieg' => 120000,
        'paliwo' => 'diesel',
        'moc' => 190
    ],
    [
        'marka' => 'Audi',
        'model' => 'A4',
        'rokProdukcji' => 2020,
        'cena' => 110000,
        'przebieg' => 80000,
        'paliwo' => 'benzyna',
        'moc' => 150
    ],
    [
        'marka' => 'Skoda',
        'model' => 'Octavia',
        'rokProdukcji' => 2022,
        'cena' => 105000,
        'przebieg' => 35000,
        'paliwo' => 'diesel',
        'moc' => 150
    ],
    [
        'marka' => 'Ford',
        'model' => 'Focus',
        'rokProdukcji' => 2017,
        'cena' => 55000,
        'przebieg' => 145000,
        'paliwo' => 'diesel',
        'moc' => 120
    ],
    [
        'marka' => 'Hyundai',
        'model' => 'i30',
        'rokProdukcji' => 2020,
        'cena' => 78000,
        'przebieg' => 60000,
        'paliwo' => 'benzyna',
        'moc' => 140
    ],
    [
        'marka' => 'Kia',
        'model' => 'Ceed',
        'rokProdukcji' => 2023,
        'cena' => 115000,
        'przebieg' => 15000,
        'paliwo' => 'benzyna',
        'moc' => 160
    ],
    [
        'marka' => 'Renault',
        'model' => 'Megane',
        'rokProdukcji' => 2016,
        'cena' => 48000,
        'przebieg' => 160000,
        'paliwo' => 'diesel',
        'moc' => 130
    ],
    [
        'marka' => 'Opel',
        'model' => 'Astra',
        'rokProdukcji' => 2019,
        'cena' => 62000,
        'przebieg' => 110000,
        'paliwo' => 'benzyna',
        'moc' => 125
    ],
    [
        'marka' => 'Mercedes-Benz',
        'model' => 'Klasa C',
        'rokProdukcji' => 2015,
        'cena' => 92000,
        'przebieg' => 175000,
        'paliwo' => 'diesel',
        'moc' => 170
    ],
    [
        'marka' => 'Volvo',
        'model' => 'XC60',
        'rokProdukcji' => 2018,
        'cena' => 125000,
        'przebieg' => 130000,
        'paliwo' => 'diesel',
        'moc' => 190
    ],
    [
        'marka' => 'Nissan',
        'model' => 'Qashqai',
        'rokProdukcji' => 2021,
        'cena' => 89000,
        'przebieg' => 50000,
        'paliwo' => 'benzyna',
        'moc' => 140
    ],
    [
        'marka' => 'Mazda',
        'model' => '6',
        'rokProdukcji' => 2017,
        'cena' => 74000,
        'przebieg' => 135000,
        'paliwo' => 'benzyna',
        'moc' => 165
    ],
    [
        'marka' => 'Peugeot',
        'model' => '3008',
        'rokProdukcji' => 2020,
        'cena' => 99000,
        'przebieg' => 70000,
        'paliwo' => 'diesel',
        'moc' => 130
    ],
    [
        'marka' => 'Fiat',
        'model' => 'Tipo',
        'rokProdukcji' => 2018,
        'cena' => 45000,
        'przebieg' => 105000,
        'paliwo' => 'benzyna',
        'moc' => 95
    ],
    [
        'marka' => 'Dacia',
        'model' => 'Duster',
        'rokProdukcji' => 2022,
        'cena' => 76000,
        'przebieg' => 30000,
        'paliwo' => 'benzyna',
        'moc' => 130
    ],
    [
        'marka' => 'Honda',
        'model' => 'Civic',
        'rokProdukcji' => 2016,
        'cena' => 63000,
        'przebieg' => 140000,
        'paliwo' => 'benzyna',
        'moc' => 182
    ],
    [
        'marka' => 'Alfa Romeo',
        'model' => 'Giulia',
        'rokProdukcji' => 2019,
        'cena' => 108000,
        'przebieg' => 85000,
        'paliwo' => 'diesel',
        'moc' => 180
    ],
    [
        'marka' => 'Seat',
        'model' => 'Leon',
        'rokProdukcji' => 2020,
        'cena' => 82000,
        'przebieg' => 65000,
        'paliwo' => 'benzyna',
        'moc' => 150
    ]
];

$kryteriumSortowania = 'cena'; 

usort($samochody, function($a, $b) use ($kryteriumSortowania) {
    if ($kryteriumSortowania === 'marka') {
        $wynik = strcasecmp($a['marka'], $b['marka']);
        return $wynik !== 0 ? $wynik : strcasecmp($a['model'], $b['model']);
    } elseif ($kryteriumSortowania === 'rok') {
        return $b['rokProdukcji'] <=> $a['rokProdukcji'];
    } else {
        return $a['cena'] <=> $b['cena'];
    }
});

function obliczWiek($rokProdukcji) {
    $aktualnyRok = (int)date('Y');
    return $aktualnyRok - $rokProdukcji;
}

function pobierzKategorie($wiek) {
    if ($wiek <= 3) {
        return "samochód prawie nowy";
    } elseif ($wiek >= 4 && $wiek <= 7) {
        return "samochód kilkuletni";
    } elseif ($wiek >= 8 && $wiek <= 15) {
        return "samochód używany";
    } else {
        return "samochód zabytkowy lub starszy";
    }
}

function wyszukajSamochody($samochody, $maksymalnaCena) {
    echo "<h3>WYNIKI WYSZUKIWANIA (Cena do: {$maksymalnaCena} zł)</h3>";
    $znalezione = 0;
    
    foreach ($samochody as $auto) {
        if ($auto['cena'] <= $maksymalnaCena) {
            echo "{$auto['marka']} {$auto['model']} - {$auto['cena']} zł<br>";
            $znalezione++;
        }
    }
    
    if ($znalezione === 0) {
        echo "<p>Nie znaleziono żadnego samochodu w tej cenie.</p>";
    }
    echo "<hr>";
}

function wyswietlStatystykiMarki($samochody, $szukanaMarka) {
    $liczba = 0;
    $sumaCen = 0;
    
    foreach ($samochody as $auto) {
        if (strcasecmp($auto['marka'], $szukanaMarka) === 0) {
            $liczba++;
            $sumaCen += $auto['cena'];
        }
    }
    
    echo "<h3>STATYSTYKA DLA MARKI: {$szukanaMarka}</h3>";
    if ($liczba > 0) {
        $srednia = round($sumaCen / $liczba);
        echo "Liczba modeli w komisie: {$liczba}<br>";
        echo "Średnia cena modeli {$szukanaMarka}: {$srednia} zł<br>";
    } else {
        echo "Brak samochodów marki {$szukanaMarka} w ofercie.<br>";
    }
    echo "<hr>";
}

function najdrozszySamochod($samochody) {
    if (empty($samochody)) return null;
    $najdrozszy = $samochody[0];
    foreach ($samochody as $auto) {
        if ($auto['cena'] > $najdrozszy['cena']) {
            $najdrozszy = $auto;
        }
    }
    return $najdrozszy;
}

function najtanszySamochod($samochody) {
    if (empty($samochody)) return null;
    $najtanszy = $samochody[0];
    foreach ($samochody as $auto) {
        if ($auto['cena'] < $najtanszy['cena']) {
            $najtanszy = $auto;
        }
    }
    return $najtanszy;
}

function obliczSredniaCene($samochody) {
    if (empty($samochody)) return 0;
    $sumaCen = 0;
    foreach ($samochody as $auto) {
        $sumaCen += $auto['cena'];
    }
    return round($sumaCen / count($samochody));
}

echo "================================<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KOMIS SAMOCHODOWY<br>";
echo "================================<br>";
echo "<small>Aktualne sortowanie: <b>" . htmlspecialchars($kryteriumSortowania) . "</b></small><br><br>";

foreach ($samochody as $auto) {
    $wiek = obliczWiek($auto['rokProdukcji']);
    $kategoria = pobierzKategorie($wiek);
    
    echo "<strong>{$auto['marka']} {$auto['model']}</strong><br>";
    echo "Rok produkcji: {$auto['rokProdukcji']}<br>";
    echo "Cena: {$auto['cena']} zł<br>";
    echo "Przebieg: {$auto['przebieg']} km<br>";
    echo "Paliwo: {$auto['paliwo']}<br>";
    echo "Moc: {$auto['moc']} KM<br>";
    echo "Wiek: {$wiek} lat<br>";
    echo "Kategoria: {$kategoria}<br>";
    echo "<br>--------------------------------<br><br>";
}

wyszukajSamochody($samochody, 60000);
wyswietlStatystykiMarki($samochody, 'Audi');

$liczbaSamochodow = count($samochody);
$sredniaCena = obliczSredniaCene($samochody);
$autoNajdrozsze = najdrozszySamochod($samochody);
$autoNajtansze = najtanszySamochod($samochody);

$liczbaDiesli = 0;
$liczbaPo2020 = 0;
$liczbaNiskiPrzebieg = 0;

foreach ($samochody as $auto) {
    if (strtolower($auto['paliwo']) === 'diesel') {
        $liczbaDiesli++;
    }
    if ($auto['rokProdukcji'] > 2020) {
        $liczbaPo2020++;
    }
    if ($auto['przebieg'] < 100000) {
        $liczbaNiskiPrzebieg++;
    }
}

echo "================================<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;STATYSTYKI<br>";
echo "================================<br>";
echo "Liczba samochodów: {$liczbaSamochodow}<br>";
echo "Średnia cena: {$sredniaCena} zł<br>";
echo "Najdroższy: {$autoNajdrozsze['marka']} {$autoNajdrozsze['model']} ({$autoNajdrozsze['cena']} zł)<br>";
echo "Najtańszy: {$autoNajtansze['marka']} {$autoNajtansze['model']} ({$autoNajtansze['cena']} zł)<br>";
echo "Samochody diesel: {$liczbaDiesli}<br>";
echo "Samochody po 2020 roku: {$liczbaPo2020}<br>";
echo "Przebieg poniżej 100000 km: {$liczbaNiskiPrzebieg}<br>";
echo "================================<br>";
?>
    
</body>
</html>