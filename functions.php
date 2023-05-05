<?php

session_start();
if (isset($_GET['length'])) {
    $length = $_GET['length'];
    $number = $_GET['number'] ?? true;
    $down_case = $_GET['down_case'] ?? true;
    $upper_case = $_GET['upper_case'] ?? true;
    $symbols = $_GET['symbols'] ?? true;
    $ripetition = $_GET['ripetition'] ?? true;

    $password = generateRandomString($length);
    $_SESSION['password'] = $password; // string
    //header('Location: ' . "./show.php");
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
        if ($value) {
            $charactersList .= $charactersType[$key];
        }
    }
    var_dump($charactersList);
    return $charactersList;
}

function generateRandomString($length)
{
    $characters = composeCharactersList();
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
