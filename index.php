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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>strng-pwd-gnrt</title>
</head>

<body class="bg-primary">
    <div class="container">
        <h1 class="mt-4 text-center text-warning"> Strong Password Generator </h1>
        <h2 class="mt-3 text-center text-light"> Genera una password sicura </h2>
        <div id="form_card" class="card shadow col-3 mt-4 m-auto">
            <div class="card-body">
                <form action="index.php" method="get">

                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            <label for="length">Lunghezza Password</label>
                        </div>
                        <input type="number" name="length" id="length" min="3" max="10" class="form-control d-flex " placeholder="Insert number">
                    </div>
                    <!-- /.input-group #length -->
                    <div class="input-group mb-1">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox" name="symbols" id="symbols" value="">
                        </div>
                        <label for="symbols" class="form-control">Consenti Simboli</label>
                    </div>
                    <!-- /.input-group #symbols -->
                    <div class="input-group mb-1">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox" name="number" id="number" value="">
                        </div>
                        <label for="number" class="form-control">Consenti Numeri</label>
                    </div>
                    <!-- /.input-group number -->
                    <div class="input-group mb-1">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox" name="down_case" id="down_case" value="">
                        </div>
                        <label for="down_case" class="form-control">Consenti Lettere Minuscole</label>
                    </div>
                    <!-- /.input-group #down_case -->
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox" name="upper_case" id="upper_case" value="">
                        </div>
                        <label for="upper_case" class="form-control">Consenti Lettere Maiuscole</label>
                    </div>
                    <!-- /.input-group #upper_case -->

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" name="ripetition" role="switch" id="ripetition">
                        <label class="form-check-label" for="ripetition">Consenti ripetizione dei caratteri </label>
                    </div>
                    <!-- /.form-switch #ripetition -->

                    <button type="submit" class="btn btn-primary d-block m-auto">submit</button>
                </form>
            </div>
            <!-- /#card-body -->
        </div>
        <!-- /#form_card -->

        <div id="view_card" class="card shadow col-4 mt-4 m-auto">
            <div class="card-body text-center">
                <h4>La password generata è:</h4>
                <h3 class="text-danger"><?= $randomString ?></h3>
            </div>
            <!-- /#card-body -->
        </div>
        <!-- /#view_card -->
    </div>
    <!-- /.container -->
</body>

</html>