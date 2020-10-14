<?php
include("_header.html");
echo "<div class=\"row\">";
echo "<div class=\"col s6\">";
include("_body.html");
echo "</div>";

if(isset($_POST['promedio'])){
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    $n3 = $_POST['num3'];
    $n4 = $_POST['num4'];
    $n5 = $_POST['num5'];

    $array=array($n1,$n2,$n3,$n4,$n5);
    SORT($array);
    echo "<div>";
    echo "<span class=\"Promedio\"></span>";
    echo "<p>";
    echo promedio($array);
    echo "</p>";
    echo "</div>";

}
if(isset($_POST['mediana'])){
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    $n3 = $_POST['num3'];
    $n4 = $_POST['num4'];
    $n5 = $_POST['num5'];

    $array=array($n1,$n2,$n3,$n4,$n5);
    SORT($array);
    echo "<div>";
    echo "<span class=\"Mediana\"></span>";
    echo "<p>";
    echo mediana($array);
    echo "</p>";
    echo "</div>";

}
if(isset($_POST['lista'])){
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    $n3 = $_POST['num3'];
    $n4 = $_POST['num4'];
    $n5 = $_POST['num5'];

    $array=array($n1,$n2,$n3,$n4,$n5);
    SORT($array);
    
    echo "<div>";
    echo "<span class=\"Mediana\"></span>";
    echo "<p>";
    lista($array);
    echo "</p>";
    echo "</div>";

}
if(isset($_POST['tabla'])){
    $num = $_POST['num'];
 
    echo "<div>";
    echo "<span class=\"Mediana\"></span>";
    echo "<p>";
    tabla($num);
    echo "</p>";
    echo "</div>";

}

function promedio($array){

    echo "<caption><strong>Promedio</strong></caption><br>";
    $aux = 0;
    $size = 5;

    for($i=0; $i < $size; $i++){
        $aux = $aux + $array[$i];
    }
    $prom = $aux/$size;

    return($prom);
}

function mediana($array){
    echo "<caption><strong>Mediana</strong></caption><br>";
    sort($array);
    return $array[sizeof($array)/2];
  }

function lista($array){
    $size = count($array);
    echo "Promedio:". promedio($array)."<br>" ;
    echo "Mediana: " . mediana($array)."<br>";
    $sum=0;
    echo "<ul> Ascendente:";
    for($i = 0; $i < $size; $i++){
        $aux = $array[$i];
        $sum +=$array[$i];
        echo "<li>" .$array[$i] ."</li>" ;        
    }
    echo "</ul>";
    
    rsort($array);
    echo "<ul> Descendente:";
    for($i = 0; $i < $size; $i++){
        $aux = $array[$i];
        echo "<li>" .$array[$i] ."</li>" ;        
    }
    echo "</ul>";
}

function tabla($num){
    echo "<div>";
    echo "<caption><strong>Tabla de numeros al cuadrado y al cubo</strong></caption>";
    echo "<table>";
    for($i = 1; $i <= $num; $i++){
        echo "<tr>";
        echo "<td>" . $i . "</td>";
        echo "<td>" . pow($i,2) . "</td>";
        echo "<td>" . pow($i,3) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
}

echo "</div>";


include("_footer.html");
?>
