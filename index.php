<?php

//Lunghezza password
$password_length = isset($_GET['password_length']) ? (int)$_GET['password_length'] : 0;
var_dump($password_length);

// Funzione per creare random index di un array
function randomIndex($array){
    $min = 0;
    $max = count($array) - 1; 
    $random_index = rand($min, $max);
    return $random_index;
}

// Funzione restituisce un elemento random di un array
function getRandomElementArray($array) {
    $index = randomIndex($array);
    $element = $array[$index];
    return $element;
};

// Funzione crea password in base alla lunghezza richiesta
function getPassword($password_length){
    // I dati da uttilizare per creazione del password
    $uppercase_letter = range('A','Z');
    $lowercase_letter = range('a','z');
    $array_number = range('0','9');
    $array_symbols = str_split("'[@_!#$%^&*()<>?/|}{~:]']");
        
    // Array con tutti i charateri da utilizzare per creare password
    $array_charters = [
        $uppercase_letter,
        $lowercase_letter,
        $array_number,
        $array_symbols
    ];

    $password = [];
    // Ciclo per assegnare un charattere diverso con ogni giro
    for($i = 0; $i < $password_length; $i++){
        $index_type_charter = randomIndex($array_charters);
        // $charter = $array_charters[$index_type_charter][rand(0, count($array_charters[$index_type_charter]) - 1)];
        $charter = getRandomElementArray($array_charters[$index_type_charter]);
        array_push($password, $charter);
    }

    return $password;
};

// Password
$password = implode("", getPassword($password_length));

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

    <section class="get-password">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Password: <?php print_r($password)?></h1>
                    <form action="" method="GET">
                        <label>Choose a password:</label>
                        <select name="password_length">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                        </select>   
                        <br><br>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>