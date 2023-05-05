<?php

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
    foreach ($charactersType as $type) {
        $charactersList .= $type;
    }
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

$length = $_GET['length'];

$randomString = generateRandomString($length);
