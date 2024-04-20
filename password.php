<?php


$firstRule = $secondRule = $thirdRule = $fourthRule = false;

$password = readline('Inserisci password: ');

if (strlen($password) >= 8) {
    $firstRule = true;
}
for ($i = 0; $i < strlen($password); $i++) {
    if (is_numeric($password[$i])) {
        $secondRule = true;
        break;
    }
}

for ($i = 0; $i < strlen($password); $i++) {
    if (ctype_upper($password[$i])) {
        $thirdRule = true;
        break; 
    }
}

$specialChars = ['!', '#', '+', '%', '?', '@'];

for ($i = 0; $i < strlen($password); $i++) {
    if (in_array($password[$i], $specialChars)) {
        $fourthRule = true;
        break; 
    }
}

if ($firstRule==true&&$secondRule==true&&$thirdRule==true&&$fourthRule==true) {
    echo "la password è valida";
}
else {
    echo "la password non è valida";
}
