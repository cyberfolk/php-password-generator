<?php
session_start();
if ($_SESSION["errorLength"]) {
    $errorLength = "Please insert a valid length";
}
if ($_SESSION["errorCheckbox"]) {
    $errorCheckbox .= "Please select at least one type of allowed character";
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . "/assets/head.php" ?>

<body>
    <?php include __DIR__ . "/assets/header.php" ?>

    <main id="app_main">
        <div class="container">
            <div id="view_card" class="card shadow col-4 mt-4 m-auto">
                <div class="card-body">
                    <div class="alert alert-danger" role="alert">
                        <strong>ERROR: </strong>
                        <div><?= $errorLength ?></div>
                        <div><?= $errorCheckbox ?></div>
                    </div>
                    <!-- /.alert -->
                    <div class="text-center"><a class="btn btn-primary" href="index.php" role="button">Try again</a> </div>
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