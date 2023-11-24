<?php

include __DIR__ . '/function02.php';

session_start();

if ($password) {
    $_SESSION['password'] = $password;
    header('Location: ./password.php');
  }

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
    <section class="get-password py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="mb-3">Password generator</h1>
                            <form action="" method="GET">
                                <label for="customRange3" class="form-label d-flex justify-content-between">Choose length of password<span class="fw-bold " id="rate_val">1</span></label>
                                <input 
                                    name="password_length"
                                    onchange=updateValue(this) 
                                    type="range" class="form-range" 
                                    min="1" 
                                    max="100" 
                                    step="1"
                                    default value="1"
                                    id="customRange3"
                                >
                                <p class="fw-bold">Type of password</p>
                                <p><?php echo $password?></p>
                                <ul style="list-style: none; padding: 0;">
                                    <li>
                                        <input id="has_uppercase_letter" type="checkbox" name="has_uppercase_letter">
                                        <label for="has_uppercase_letter" class="form-label">Uppercase letter</label>
                                    </li>
                                    <li>
                                        <input id="has_lowercase_letter" type="checkbox" name="has_lowercase_letter">
                                        <label for="has_lowercase_letter" class="form-label">Lowercase letter</label>
                                    </li>
                                    <li>
                                        <input id="has_number" type="checkbox" name="has_number">
                                        <label for="has_number" class="form-label">Number</label>
                                    </li>
                                    <li>
                                        <input id="has_symbols" type="checkbox" name="has_symbols">
                                        <label for="has_symbols" class="form-label">Symbols</label>
                                    </li>
                                    <li>
                                        <input id="has_all" type="checkbox" name="has_all">
                                        <label for="has_all" class="form-label">ALL</label>
                                    </li>
                                </ul>
                                <input type="submit" value="Genera" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    

    <script src="app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>