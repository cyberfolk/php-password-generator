<?php

session_start();

// Reset error to false
$_SESSION["error"] = false;
$_SESSION["errorLength"] = false;
$_SESSION["errorCheckbox"] = false;

// I cant use isset() becaus $_GET is always set.
// But when the code start $_GET contains an empty value.
// containing an empty array is different from having a null value
// With this IF i make sure that $_GET contains somethings
// That is, I make sure that the forum is filled in   
if (!empty($_GET)) {
    // Check if the form has been filled in correctly - otherwise I set the error flags
    errorCheck();
    // If error is false the code continues
    if (empty($_SESSION["error"])) {
        $charList = composeCharList();
        $password = generatePassword($charList);
        $_SESSION['password'] = $password; // string
        header('Location: result.php');
    } else {
        header('Location: error.php');
    }
}

/* --- FUNCTION ------------------------------- */
function errorCheck()
{
    // Set error if length is null
    if (empty($_GET["length"])) {
        $_SESSION["error"] = true;
        $_SESSION["errorLength"] = true;
    }

    // Set error if no checkbox is selected
    if (empty($_GET["char_type_box"])) {
        $_SESSION["error"] = true;
        $_SESSION["errorCheckbox"] = true;
    }
}

function composeCharList()
{
    $charList = "";
    $charType =  [
        'numbers' => '0123456789',
        'down_case' => 'abcdefghijklmnopqrstuvwxyz',
        'upper_case' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
        'symbols' => "`~!@#$%^&*()_+-=[]{};\':\",./<>?'",

    ];
    foreach ($_GET["char_type_box"] as $char_checked) {
        $charList .= $charType[$char_checked]; // the multiple checkbox array contains only the values of checkboxes set true
    }
    return $charList;
}

function generatePassword($charList)
{
    $password = '';
    for ($i = 0; $i < $_GET["length"]; $i++) {
        $maxIndex = strlen($charList) - 1;
        $randomIndex = rand(0, $maxIndex);
        $password .= $charList[$randomIndex]; //  Add character corresponding at the random Index

        if (($_GET["avoid_ripetition"])) {
            $charList = substr_replace($charList, '', $randomIndex, 1); // remove the value of randomIndex from charList so that the character cannot be reused
        }
    }
    return $password;
}
