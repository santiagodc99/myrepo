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
  echo "<td>". $i. "</td></br>";
}
echo "</tr></table>";
// --------------------------------------------
echo "4to punto</br></br>";
for ($i=2; $i<=100 ; $i=$i+2) {
  echo $i. "</br>";
}

 ?>
