<?php
session_start(); // This must be the very first line of the script
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <br>
    <div class="row justify-content-center align-items-center vh-100">
        <div class="card" style="max-width: fit-content;">
            <div class="card-body">
                Welcome Home User: 
                <?php
                if (isset($_SESSION['userData']) && $_SESSION['userData'] != '') {
                    echo htmlspecialchars($_SESSION['userData']);
                } else {
                    header('Location: sign_in.php');
                    exit();
                }
                ?>

                <br>
                <br>
                <div class="row justify-content-center align-items-center">
                <a href="exit.php" class="btn btn-danger">Log Out</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>