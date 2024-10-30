<!DOCTYPE html>
<html>
    <head>
        <title>DWES Tarea 2</title>
    </head>
    <body>

        <h2>♢ DWES Tarea 2 ♢</h2>

        <?php
            // Mostrar en pantalla las siguientes frases en líneas diferentes
            echo "Nombre: Sonia Enjuto Gil <br>";
            echo "NIF: 51489452L <br>";
            echo "El código del script php siempre se incluye entre las etiquetas &lt;?php y ?&gt; <br>";
        ?>

        <h3>♢ Variables ♢</h3>
        <?php
            // Declaración e inicialización de variables
            $entera = 10;
            $decimal = 8.22;
            $booleana = true;
            $cadena = "cadena";
            const CONSTANTE = 3.14;

            // Mostrar en pantalla todas los valores de las variables
            echo "Variable entera: " .$entera. "<br>";
            echo "Variable decimal: " .$decimal. "<br>";
            echo "Variable booleana verdadera en número: " .$booleana. "<br>";
            // Operador ternario para que el valor booleano se vea como "true" y no como un 1
            echo "Variable booleana verdadera en letras: " .($booleana ? 'true' : 'false'). "<br>";
            echo "Variable cadena: " .$cadena. "<br>";
            echo "Constante: " .CONSTANTE. "<br>";
            // Sumar la variable entera y la decimal
            echo "<h3>♢ Sumar la variable entera y la decimal ♢</h3>";
            echo "Suma: " .$entera. " + " .$decimal. " = " .($entera + $decimal);
        ?>

    </body>
</html>
