<?php

session_start();
if (isset($_GET['length'])) {
    $length = $_GET['length'];
    $number = $_GET['number'] ?? false;
    $down_case = $_GET['down_case'] ?? false;
    $upper_case = $_GET['upper_case'] ?? false;
    $symbols = $_GET['symbols'] ?? false;
    $allow_ripetition = $_GET['allow_ripetition'] ?? false;

    $password = generateRandomString($length, $allow_ripetition);
    $_SESSION['password'] = $password; // string
    header('Location: ' . "./show.php");
}

/* --- FUNCTION ------------------------------- */
function composeCharactersList()
{
    //TODO IMPLEMENT LOGIC
    $charactersList = "";
    $charactersType =
        [
            'number' => '0123456789',
            'down_case' => 'abcdefghijklmnopqrstuvwxyz',
            'upper_case' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
            'symbol' => "0123456789!@#$%^&*()",
        ];
    foreach ($_GET as $key => $value) {
        if ($value) { // value of input is true
            $charactersList .= $charactersType[$key]; // charactersList gain a value of charactersType corresponding at key. if that value is null add nothing
        }
    }
    return $charactersList;
}

function generateRandomString($length, $allow_ripetition)
{
    $charactersList = composeCharactersList();
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $maxIndex = strlen($charactersList) - 1;
        $randomIndex = rand(0, $maxIndex);
        $randomString .= $charactersList[$randomIndex];

        if (!($allow_ripetition)) { // if false remove the value of randomIndex from charactersList - to avoid repetition
            $charactersList = substr_replace($charactersList, '', $randomIndex, 1);
        }
    }
    return $randomString;
}
