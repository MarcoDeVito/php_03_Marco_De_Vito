<?php



function checkFirstRule($password)
{
    if (strlen($password) >= 8) {
        return true;
    }
    echo "la password deve avere almeno 8 caratteri\n";
    return false;
}


function checkSecondRule($password)
{
    for ($i = 0; $i < strlen($password); $i++) {
        if (is_numeric($password[$i])) {
            return true;
        }
    }
    echo "la password deve contenere almeno un numero\n";
    return false;
}



function checkThirdRule($password)
{
    for ($i = 0; $i < strlen($password); $i++) {
        if (ctype_upper($password[$i])) {
            return true;
        }
    }
    echo "la password deve contenere almeno una maiuscola\n";
    return false;
}



function checkFourthRule($password)
{
    $specialChars = ['!', '#', '+', '%', '?', '@'];

    for ($i = 0; $i < strlen($password); $i++) {
        if (in_array($password[$i], $specialChars)) {
            return true;
        }
    }
    echo "la password deve contenere almeno un carattere speciale\n";
    return false;
}




function checkPassword()
{
    $password = readline('Inserisci password: ');
    $firstRule = checkFirstRule($password);
    $secondRule = checkSecondRule($password);
    $thirdRule = checkThirdRule($password);
    $fourthRule = checkFourthRule($password);
    if ($firstRule && $secondRule && $thirdRule && $fourthRule) {
        echo "la password è valida\n";
        return true;
    } else {
        echo "la password non è valida\n";
        return false;
    }
}

function insertPswInf(){
$correctPsw=false;

do {
    
    $correctPsw=checkPassword();
    
} while (!$correctPsw);
}

function insertPswLimit($num){

for ($i=0; $i < $num; $i++) { 
    $correctPsw=checkPassword();
    if ($correctPsw) {
      break; 
    }
}
}

insertPswLimit(3);