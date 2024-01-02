<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    //zde je kralovstvi PHP
    echo "<h1>Nadpis</h1>";
    ?>

    <p>Toto je zac ciste HTML</p>

    <?php
    $scoreUzivatele = rand(1, 100);

    if ($scoreUzivatele == 0) {
        echo "Ještě nemáte žádne body.";
    }else if ($scoreUzivatele >= 80) {
        echo "Gratulujeme, splnili jste test!";
    }else if ($scoreUzivatele >= 50) {
        echo "Bohužel jste test nesplnili. Můžete opakovat.";
    }else {
        echo "Bohužel nemáte dost bodu na opravný test";
    }

    //while, for, foreach
    echo "<hr>";
    echo "<br>";
    $pocitadlo = 0;
    while ($pocitadlo < 5) {
        echo rand(-100, 100);
        echo "<br>";
        $pocitadlo++;
    }
    echo "<hr>";
    for ($i = 0; $i < 5; $i++) {
        echo "Ahoj<br>";
    }
    echo "<hr>";
    $poleOvoce = ["citron", "pomeranc", "jablko", "mango"];
    $poleZelenina = array("cibule", "mrkev", "cuketa", "celer", "okurka");
    foreach ($poleOvoce AS $ovoce) {
        echo $ovoce;
        echo "<br>";
    }
    echo "<hr>";
    //chceme pomoci cyklu vypsat ul seznam zeleniny
    echo "<ul>";
    foreach ($poleZelenina AS $zelenina) {
        //template string
        echo "<li>$zelenina</li>";
    }
    echo "</ul>";
    echo "<hr>";

    //pole
    //pridame ananas do $poleOvoce
    $poleOvoce[] = "ananas";

    //echo umi vypsat jen stirngy a cisla(int a float a double)
    //pole, objekt, boolean echo neumi 
    echo $poleOvoce; //chyba!!!

    //pokud se chcme podivat na obahs promenne tak pouzijeme funkci var_dump()
    var_dump($poleOvoce);
    //pro produkcni web musite vsechny var_dumpy smazat


    //vypsat polozku cuketa
    echo $poleZelenina[2];
    //Dneska je XXX ve sleve.
    echo "Dneska je $poleZelenina[2] ve sleve.";

    //misto ciselnych indexu muze pole mit textove klice

    $poleOsoba = array(
        "krestniJmeno" => "Tony",
        "rokNarozeni" => 1992,
        "jeZivy" => true,
        "hobby" => ["plavani", "baskytara", "programovani"],
        "vyska" => 162.5
    );

    //Uzivatel xxx se narodil v roce yyy.
    echo "<br>";
    echo "Uzivatel {$poleOsoba["krestniJmeno"]} se narodil v roce {$poleOsoba["rokNarozeni"]}.";

    echo "<br>";
    echo "Cau!!!";
    ?>
</body>
</html>