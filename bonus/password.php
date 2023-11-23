<?php

include __DIR__ . '/function.php';

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <section class="password-view py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Il tuo password è: </h5>
                            <p class="card-text my-3"><?php echo $_SESSION['password']?></p>
                            <p><a href="closeSession.php" class="btn btn-primary">Go home</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
