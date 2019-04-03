<html>
<head>
  <title>Taller</title>
  <link rel= "icon" type= "image/ico" href="icons/calculator.png"/>
</head>
<body >
<center><b><font face="Verdana" size="15" color="BLACK">Desarrollo Taller</font></b></center><br>
<table border="0" align="center">
  <form name="frm1" action= "calculadora.php" method= "post">
    <tr>
              <td><b><font face="Arial" color="BLACK">Total de numeros generados:</font></b><br>
              <input type="text" name= "num1" required><br><br></td>
            </tr>
            <tr>
                      <td><b><font face="Arial" color="BLACK">Total de numeros generados:</font></b><br>
                      <input type="text" name= "num1" required><br><br></td>
                    </tr>

                        </form>
</table>

</body>
</html>


<?php

echo "<b>1er punto</b></br></br>";
echo "<table border=1>";
echo "<tr><td>". "1</br>". "</td></tr>";
echo "<tr><td>". "2</br>". "</td></tr>";
echo "<tr><td>". "3</br>". "</td></tr>";
echo "<tr><td>". "4</br>". "</td></tr>";
echo "<tr><td>". "5</br>". "</td></tr>";
echo "<tr><td>". "6</br>". "</td></tr>";
echo "<tr><td>". "7</br>". "</td></tr>";
echo "<tr><td>". "8</br>". "</td></tr>";
echo "<tr><td>". "9</br>". "</td></tr>";
echo "<tr><td>". "10</br>". "</td></tr>";
echo  "</table>";
// ----------------------------------------
echo "</br><b>2do punto</b></b></br></br>";
echo "Lista de numeros con for</br>";
echo "<table border=1>";
for ($i=1; $i<=10 ; $i=$i+1) {
  echo "<tr><td>". $i."</td></tr>";
}
echo "</table>";

echo "</br>Lista de numeros con while";
echo "<table border=1><tr>";
$a=1;

while ($a <= 10) {
  if ($a%2==0){
      echo "<td bgcolor='yellow'>".  $a. "es par</td>";
  }else{
      echo "<td bgcolor='cyan'>". $a. "es impar</td>";
  }

  $a++; //$a = $a+1;
}
echo "</tr></table>";
// ---------------------------------------------
echo "3er punto</b></br></br>";
echo "<table border=1><tr>";
for ($i=1; $i<=100 ; $i=$i+1) {
  echo "<td>". $i. "</td>";
}
echo "</tr></table>";
// --------------------------------------------

echo "4to punto</br></br>";
echo "<table border=1><tr>";
for ($i=2; $i<=100 ; $i=$i+2) {
  echo "<td>". $i. "</td>";
}
echo "</tr></table>";

echo "</br>5to punto";
echo "<table border=1><tr>";
for ($i=1; $i<=10 ; $i=$i+1) {
  echo "<td>". rand(1,10)."</td>";
}
echo "</tr></table>";
echo "6to punto</br></br>";
$suma=0; //incializamos la suma como cero
for($i=1;$i<=100;$i++){
$suma +=$i; //por cada ciclo sumamos el valor de $i a lo que llevamos en $suma
 //imprimimos sus valores
echo "la suma es:". $suma. "</br>" ;
}

echo "7to punto</br></br>";
echo "<table border=1><tr>";
$x = 3;
for ($i=0; $i<=100 ; $i=$i+1) {
  if($i%$x==0){
    echo "<td>". $i. "</td>";
  }

}
echo "</tr></table>";

echo "</br>8to punto";
$n1 = $_POST['num1'];
$n2 = $_POST['num2'];
$op = $_POST['operar'];
echo "<table border=1><tr>";
for ($i=1; $i<=10 ; $i=$i+1) {
  echo "<td>". rand(1,100)."</td>";
}
echo "</tr></table>";
 ?>
