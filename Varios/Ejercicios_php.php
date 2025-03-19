<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8"
        <title> Ejercicios PHP</title>
    </head>
    <body>
        <h1>Josué David Acosta Castrillón</h1>
        <h2>Ficha:2834910</h2>
        <h3>ADSO -SENA</h3>
        <h4> 2024 <h4/>
        <section>
            <h3>Ejercicio 1</h3>

            <?php
            echo "¡Hola, mundo! Este es mi primer script en PHP usando el comando \"echo\".";
            ?>
        </section>

        <section>
            <h3>Ejercicio 2 </h3>
            <?php
                $nombre = "Josue";
                $edad = 31;
                $ciudad = "Copacabana";

                echo "<p> Hola, mi nombre es $nombre. Tengo $edad años y vivo en $ciudad. </p>";
                echo '<p> En este ejercicio usamos las variables almacenadas en ' . $nombre  . $edad  . $ciudad . ' para generar dos strings separados en parrafos.</p>';
                echo '<p> podemos usar puntos para concatenar strings y contenido de variables</p>'
            ?>
        </section>

        <section>
            <h3> Ejercicio 3 </h3>
            <?php
            echo "Vamos a generar una variable llamada edad y vamos a verificar si edad es mayor a 18";
            $edad = 17;

            if ($edad >= 18){
                echo "<p> con $edad años, eres mayor de edad </p>";
            } else {
                echo "<p> con $edad años, eres menor de edad </p>";
            }
            ?>
        </section>

        <section>
            <h3>Ejercicio 4 </h3>
            <?php
            echo "En este ejercicio vamos a explorar el uso de for y foreach ";
            echo "<p>Numeros del 1 al 10 usando ciclo for</p>";
            for ($i = 1; $i <= 10; $i++){
                echo "<p>Número $i </p>";
            }
            ?>
        </section>

        <section> 
            <h3>Ejercicio 5 </h3>
            <?php
            echo "Vamos a hacer un for sobre los elementos de una lista";
            $nombres = ["Pedro", "Juan","Maria", "Jose","Jesus","Simon","Alberto","Ana"];
            foreach ($nombres as $nombre){
                echo "<p>Nombre: $nombre </p>";
            }
            ?>
        </section>

        <section> 
            <h3>Ejercicio 6</h3>
            <?php
            echo "<p>Vamos a crear una función para calcular el área de un rectángulo</p>";
            function calculararea($base,$altura){
                return $base*$altura;
            }

            $base = 10;
            $altura = 4.5;
            $area = calculararea($base,$altura);
            echo "El area del cuadrilátero de base $base y altura $altura es $area";
            ?>
        </section>

        <section> 
            <h3> Ejercicio 7 </h3>
            <?php
            echo "Vamos a hacer una funciòn que genera un saludo dependiendo de de la hora y el nombre de la persona";
            function generarsaludo($nombre,$hora){
                if ($hora < 12){
                    return "Buenos días, $nombre";
                } elseif ($hora < 18){
                    return "Buenas tardes, $nombre";
                } else {
                    return "Buenas noches";
                }
            }

            $nombre = "Josue";
            $hora = date("H");
            $saludo = generarsaludo($nombre, $hora);
            echo "<p> $saludo </p>"
            ?>
        </section>

        <section> 
            <h3>Ejercicio 8 </h3>
            <?php
            echo "Vamos a generar una función que determina si un número dado es paro o impar";

            function paridad($numero){
                return $numero % 2 == 0 ? "par" : "impar";
            }

            $numero = 14;

            echo "<p>El número $numero es " . paridad($numero) . "</p> " 
            ?>
        </section>
            

        <section>
        <h3>Ejercicio 9</h3> 
            <?php
            echo "Aquí vamos a trabajar con un arreglo de números y strings";

            $numeros = [5,3,7,1,23,0,12,3,-1];

            echo "<h4> Arreglo Original </h4>";
            echo "<p>" . implode(", ", $numeros) . "</p>";
            
            array_push($numeros, 7);
            echo "Agregamos un 7 al final";
            echo "<p>" . implode(", ", $numeros) . "</p>";

            sort($numeros);
            echo "<h4> Arreglo ordenado de forma ascendente </h4>";
            echo "<p>" . implode(", ", $numeros) . "</p>";

            $numero = 8;
            echo "Vamos a buscar si el número 8 está en el arreglo";

            if (in_array($numero, $numeros)){
                echo "<p> El número $numero se encuentra en el arreglo </p>.";
            } else {
                echo "<p> El número $numero no está en el arreglo. </p>";
            }

            ?>
        </section>

        <section>
        <h3>Ejercicio 10 </h3> 
            <?php
            echo "Vamos a crear un diccionario con nombres y edades";

            $personas = [
                "juan" => 39,
                "maria" => 43,
                "pedrito" => 4,
                "ana maria" => 23
            ];

            echo "Elementos del diccionario";
            foreach ($personas as $nombre => $edad){
                echo "<p> $nombre tiene $edad años.</p>";
            }


            echo "<h4> Ordenar por edades </h4>";
            asort($personas);
            foreach ($personas as $nombre => $edad){
                echo "<p> $nombre tiene $edad años.</p>";
            }
            ?>
        </section>

   
        <section>
        <h3>Ejercicio 11</h3> 
            <?php
            echo "Operaciones matemáticas con php";
            $num1 = 12;
            $num2 = 4;

            $suma = $num1 + $num2;
            $resta = $num1 - $num2;
            $multiplicacion = $num1 * $num2;
            $division = $num1 / $num2;

            echo "<p>La suma de $num1 y $num2 es: $suma</p>";
            echo "<p>La resta de $num1 y $num2 es: $resta</p>";
            echo "<p>La multiplicación de $num1 y $num2 es: $multiplicacion</p>";
            echo "<p>La división de $num1 entre $num2 es: $division</p>";
            ?>
        </section>
       
        <section>
        <h3>Ejercicio 12</h3> 
            <?php
            echo "En este ejercicio hacemos manipulaciones de texto";

            $texto = "Hola, bienvenidos a mi página web";

            echo "<h4> Texto original </h4>";
            echo "<p> $texto </p>";

            $longitud = strlen($texto);
            echo "<p> La longitud del texto es de $longitud caracteres. </p>";

            $mayusculas = strtoupper($texto);
            echo "<p> Texto en mayusculas: $mayusculas </p>";

            $minusculas = strtolower($texto);
            echo "<p> Texto en minusculas: $minusculas </p>";

            $reemplazo = str_replace("Hola", "Buenas", $texto);
            echo "<p>Texto con reemplazo: $reemplazo </p>";
            ?>
        </section>

        <section>
        <h3>Ejercicio 13</h3> 
            <?php
            echo "En este ejercicio vamos a jugar con las fechas y horas";
            $fechahoraactual = date("Y-m-d H:i:s");
            echo "<p> Fecha y hora actual: $fechahoraactual </p>";

            $fechaactual = date("d/m/Y");
            echo "<p> Fecha actual: $fechaactual</p>";

            $diasemana = date("l");
            echo "<p> Hoy es: $diasemana</p>";


            ?>
        </section>

        <section>
    <h3>Ejercicio 14</h3>
    <h4>Tabla de multiplicar del 1 al 10</h4>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>X</th>
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<th>$i</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<th>$i</th>"; 
                for ($j = 1; $j <= 10; $j++) {
                    $resultado = $i * $j;
                    echo "<td>$resultado</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</section>

        <section>
        <h3>Ejercicio 15 </h3>
            <form method="post" action ="">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required><br>

                <label for="edad">Edad:</label>
                <input type="number" id="edad" name="edad" required><br>

                <button type="submit">Enviar</button>
            </form>    
        </section>
        
        
        <section>
            <?php
            echo "Vamos a incorporar un formulario para hacer un saludo personalizado";
            if ($_SERVER["REQUEST_METHOD"] === "POST"){
                $nombre = htmlspecialchars($_POST["nombre"]);
                $edad = (int) $_POST["edad"];
            
            if ($edad >=18){
                echo "<p> Hola, $nombre. Con $edad años, eres mayor de edad.</p>";
            }else {
                echo "<p> Hola, $nombre. Con $edad años, eres menor de edad";
            }
        }
            ?>
        </section>


    </body>
</html>