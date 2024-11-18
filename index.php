<?php


echo "<br><h2>Problema de Lista Invertida</h2><br>";

// Ejecutando la función
$listaOriginal = [1,2,3,4,5,6,7,8,9,10];

//echo "Entrada: $limite<br>";
print_r("Entrada: <br>");
print_r($listaOriginal);

echo "<br><br>Salida: <br>";

listaInvertidad($listaOriginal);


// Función para obtener el array invertido
function listaInvertidad($listaOriginal) {
    //existe esta funcion.. pero es demasiado facil.. mi Coach Kenia no creo que le guste que la use
    //print_r(array_reverse($listaOriginal));

    $listaInvertida = [];
    $longitud = count($listaOriginal);
    for ($i = $longitud - 1; $i >= 0; $i--) {
        $listaInvertida[] = $listaOriginal[$i];
    }
    print_r($listaInvertida);
    
    return $listaInvertida;
}





echo "<br><h2>Problema de Suma de Números Pares</h2><br>";
//Crea un script que sume todos los números pares en un array de números enteros.

// declarando el array de enteros
$arrayEnteros = [1,2,3,4,5,6,7,8,9,10];

//echo "Entrada: $limite<br>";
print_r("Entrada: <br>");
print_r($arrayEnteros);

echo "<br><br>Salida: <br>";

$sumaEnteros = sumaNumerosPares($arrayEnteros);
print_r($sumaEnteros);


// Funcion para obtener la suma de los numeros pares
function sumaNumerosPares($arrayEnteros) {
    //inicializando la suma
    $suma = 0;
    //recorriendo el array para sumar los numeros pares
    foreach ($arrayEnteros as $numero) {
        if ($numero % 2 == 0) {
            $suma += $numero;
        }
    }
    return $suma;
}



//este problema estaba tambien en la practica #1
echo "<br><h2>Problema de Frecuencia de Caracteres</h2><br>";

$cadenaFrecuencia = "estoy viendo la nba y programando";

echo "Entrada: $cadenaFrecuencia<br>";

echo "<br>Salida: <br>";
frecuenciaCaracteres($cadenaFrecuencia);


// funcion para verificar la frecuencia de caracteres
function frecuenciaCaracteres($cadena) {
    // definimos un array para almacenar la frecuencia de los caracteres
    $frecuencia = [];
    // convirtiendo la cadena en un array
    $cadenaToArray = str_split($cadena);
    foreach ($cadenaToArray as $caracter) {
        // si el caracter ya existe en el array, incrementamos su frecuencia.
        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++;
        } else {
            // si no existe inicializamos la frecuencia en 1, y el caracter como clave
            $frecuencia[$caracter] = 1;
        }
    }
    // imprimiendo la frecuencia de los caracteres, con echo no funciona..
   print_r($frecuencia);
}



echo "<br><h2>Problema de Bucle Anidado</h2><br>";
//Escribe un programa que utilice bucles anidados para imprimir un patrón de asteriscos en forma de pirámide.

$caracterParaLaForma = "*";

echo "Entrada: $caracterParaLaForma<br>";

echo "<br>Salida: <br>";
$imprimirPatron = bucleAnidado($caracterParaLaForma);
echo $imprimirPatron;



// funcion para utilizar un bucle anidado.
function bucleAnidado($caracterParaLaForma) {
    $patronParaImprimir = "";
    //definimos un espacio en blanco para utilizarlo en el patron
    $espacioEnBlanco = " ";
    //definimmos un contacdor para saber cuantos caracteres imprimir
    $countCaracterParaImprimir = 1;
    //definimos el maximo de caracteres a imprimir (ultima fila)
    $maximoCaracteres = 11;
    for ($i = 0; $i < ceil($maximoCaracteres / 2); $i++) {

        //
        $mitadFila = floor($maximoCaracteres / 2);
        $posicionInicial = $mitadFila - floor($countCaracterParaImprimir / 2);
        //echo "posicion inicial: $posicionInicial<br>";

        for ($j = 0; $j < $maximoCaracteres; $j++) {
            if ($j >= $posicionInicial && $j < $posicionInicial + $countCaracterParaImprimir) {
                $patronParaImprimir .= $caracterParaLaForma;
            } else {
                $patronParaImprimir .= ' ';
            }
            

            //$patronParaImprimir .= $caracterParaLaForma;
        }
        $patronParaImprimir .= "<br>";
        $countCaracterParaImprimir += 2;
    }
   return $patronParaImprimir;
}


?>