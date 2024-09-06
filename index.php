<?php

require_once 'functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <div class="container-fluid bg-black vh-100">
        <div class="container h-100">
            <div class="row pt-5">
                <div class="col-6 offset-3 text-center text-white border border-danger p-4">
                    <h1>PHP Strong Password Generator</h1>
                    <h3 class="pt-1">Genera la tua password!</h3>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6 offset-3 text-center text-white border border-danger p-4">
                    <form class="d-flex justify-content-between pb-3" action="index.php" method="get">
                        <label for="password">Lunghezza Password</label>
                        <input type="number" name="password" id="password" class="form-control w-25" min="1">
                        <button type="submit" class="btn btn-primary">Genera Password</button>
                    </form>
                    <?php if (isset($password)) { echo "<h4>La tua password è: $password</h4>"; } ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>