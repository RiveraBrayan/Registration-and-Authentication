<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <br>
    <div class="row justify-content-center align-items-center vh-100">
        <div class="card" style="max-width: fit-content;">
            <div class="card-body">
                <form method="post" class="needs-validation my-4" novalidate autocapitalize="none" autocomplete="off">
                    <div class="mb-3">
                        <label for="frmEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="frmEmail" name="frmEmail" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="frmPassword" class="form-label">Email address</label>
                        <input type="password" class="form-control" id="frmPassword" name="frmPassword">
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <button type="submit" class="btn btn-success">Sign Up</button>
                        <br>
                        <br>
                        <a href="sign_in.php" class="btn btn-primary">Sign In</a>
                    </div>
                    <?php
                        require_once "../controllers/admins.controller.php";

                        $sign_in = new AdminsController();
                        $sign_in->sign_up();  
                    ?>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>