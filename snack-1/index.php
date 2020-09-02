<!-- Snack 1:
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

<?php

$giornata = [
    "Match1" => [
        "teamHome" => "Carpegna Prosciutto Basket Pesaro",
        "teamAway" => "Pompea Fortitudo Bologna",
        "punteggioHome" => "72",
        "punteggioAway" => "80"
    ],
    "Match2" => [
        "teamHome" => "Dolomiti Energia Trentino",
        "teamAway" => "OriOra Pistoia",
        "punteggioHome" => "88",
        "punteggioAway" => "75"
    ],
    "Match3" => [
        "teamHome" => "Segafredo Virtus Bologna",
        "teamAway" => "Virtus Roma",
        "punteggioHome" => "74",
        "punteggioAway" => "67"
    ],
    "Match4" => [
        "teamHome" => "Germani Basket Brescia",
        "teamAway" => "Grissin Bon Reggio Emilia",
        "punteggioHome" => "90",
        "punteggioAway" => "82"
    ],
    "Match5" => [
        "teamHome" => "Umana Reyer Venezia",
        "teamAway" => "Allianz Pallacanestro Trieste",
        "punteggioHome" => "78",
        "punteggioAway" => "73"
    ],
    "Match6" => [
        "teamHome" => "Happy Casa Brindisi",
        "teamAway" => "S.Bernardo-Cinelandia Cantù",
        "punteggioHome" => "64",
        "punteggioAway" => "69"
    ],
    "Match7" => [
        "teamHome" => "Openjobmetis Varese",
        "teamAway" => "Banco di Sardegna Sassari",
        "punteggioHome" => "52",
        "punteggioAway" => "74"
    ],
    "Match8" => [
        "teamHome" => "Dè Longhi Treviso",
        "teamAway" => "A X Armani Exchange Milano",
        "punteggioHome" => "53",
        "punteggioAway" => "75"
    ],
];

foreach ($giornata as $match => $details) {
  echo $match . "<br>" . $details['teamHome'] . " - " . $details['teamAway'] . ": " . $details['punteggioHome'] . "-" . $details['punteggioAway'];
  echo "<br>";
}

?>
