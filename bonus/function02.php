<?php 

//Lunghezza password
$password_length = isset($_GET['password_length']) ? (int)$_GET['password_length'] : 0;

// Array con tipo di carrateri da uttilizare nel password
$array_charters = [];

$uppercase_letter = range('A','Z');
$lowercase_letter = range('a','z');
$array_number = range('0','9');
$array_symbols = str_split("'[@_!#$%^&*()<>?/|}{~:]']");   

if (isset($_GET['has_uppercase_letter'])) {
    array_push($array_charters, $uppercase_letter);
};
if (isset($_GET['has_lowercase_letter'])) {
    array_push($array_charters, $lowercase_letter);
};
if (isset($_GET['has_number'])) {
    array_push($array_charters, $array_number);
};
if (isset($_GET['has_symbols'])) {
    array_push($array_charters, $array_symbols);
};

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
function getPassword($password_length, $array_charters){

    $array_charters = $array_charters;

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
$password = implode("", getPassword($password_length, $array_charters));

?>