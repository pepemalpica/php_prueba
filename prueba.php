<?php

if ( isset($_POST['number']) ){

    $result;
    $msg;
    $number = $_POST['number'];

    if( isPar($number) ){
        $result = factorial( $number );
        $msg = "El número: ".$number." es par, y el resultado de su factorial es: ".$result;
    }else{
        $result = factorialSuma( $number );
        $msg = "El número: ".$number." es impar, y el resultado de su factorial con suma es: ".$result;
    }

    header ("Location: index.php?msg=".$msg);
    exit();

}

function isPar( $mNumber ){
    return $mNumber % 2 == 0;
}

function factorial( $mNumber ){
    if( $mNumber <= 1 ){
        return 1;
    }else{
        return $mNumber * factorial( $mNumber - 1);
    }
}

function factorialSuma( $mNumber ){
    if( $mNumber <= 1 ){
        return 1;
    }else{
        return $mNumber + factorialSuma( $mNumber - 1);
    }
}







