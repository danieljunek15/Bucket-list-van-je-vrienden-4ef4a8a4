<?php
echo "> hoeveel van je vrienden zal ik vragen voor hun droom.". PHP_EOL;
$aantal = readline(">");

echo "> je gaat $aantal vrienden toevoegen.". PHP_EOL;

if (!is_numeric($aantal)) {
    exit("> OOF '$aantal' niet geldig destroy DESTROY EXTERMINATE!!!");
}

    $arr = array();
    for ($nummar = 1; $nummar <= $aantal; $nummar++){
        echo "> hoe heet je?". PHP_EOL;
        $person = readline(">");

        echo "> wat is je droom". PHP_EOL;
        $dream = readline(">");
        $arr[$person] = $dream;

    } 

echo "> Dit is wat je toegevoegt hebt:", PHP_EOL;
foreach($arr as $person => $dream){
    echo "> $person droom is $dream.". PHP_EOL;
}   