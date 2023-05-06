<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . "/assets/head.php" ?>

<body class="bg-primary">
    <?php include __DIR__ . "/assets/header.php" ?>

    <main id="app_main">
        <div class="container">
            <div id="view_card" class="card shadow col-4 mt-4 m-auto">
                <div class="card-body text-center">
                    <h4>La password generata è:</h4>
                    <h3 class="text-danger"><?= $_SESSION["password"] ?></h3>
                    <div class="text-center"><a class="btn btn-primary mt-3" href="index.php" role="button">Try again</a> </div>
                </div>
                <!-- /#card-body -->
            </div>
            <!-- /#view_card -->
        </div>
        <!-- /.container -->
    </main>
    <!-- /#app_main -->
</body>

</html>