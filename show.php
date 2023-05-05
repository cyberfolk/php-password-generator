<?php
session_start();
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

        <div id="view_card" class="card shadow col-4 mt-4 m-auto">
            <div class="card-body text-center">
                <h4>La password generata è:</h4>
                <h3 class="text-danger"><?= $_SESSION["password"] ?></h3>
            </div>
            <!-- /#card-body -->
        </div>
        <!-- /#view_card -->
    </div>
    <!-- /.container -->
</body>

</html>