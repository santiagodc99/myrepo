

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

echo "<br><br>punto 8<br>";
$par=0;
$impar=0;
for ($i=1;$i<=10;$i++) {
    $al = rand(1,100);
    if ($al%2==0) {
      $par=$par+1;
    }
    else {
      $impar=$impar+1;
    }
    echo $al." ";
    }
    echo "<table border =1>";
    echo "<Br><Br><tr><td>Pares: </td><td> ".$par." </td></tr>";
    echo "<tr> <td>Impares: </td><td> ".$impar." </td></tr>";
echo "</table>";

echo "<br><br>punto 9<br>";
$par1=0;
$impar1=0;
$par2=0;
$impar2=0;
  echo "<table border=1>";
for ($i=1;$i<=10;$i++) {
    $rand = rand(-100,100);
      echo "<td>".$rand." </td>";

    if($rand > 0  &&  ($rand%2)==0){
      $par1=$par1+1;
    }else if ($rand > 0  && (($rand%3)==0 || ($rand%3)!=0)) {
    $impar1=$impar1+1;
  }
  if($rand < 0  &&  ($rand%2)==0){
    $par2=$par2+1;
  }else if ($rand < 0  && (($rand%3)==0 || ($rand%3)!=0)) {
  $impar2=$impar2+1;
}
}
echo "</table>";

  echo "<br><br>";
  echo "<table border=1>";
  echo "<tr><td>Postivos pares: </td> <td>".$par1."</td></tr>";
  echo "<tr><td>Postivos impares: </td> <td>".$impar1."</td></tr>";
  echo "<tr><td>Negativos pares: </td> <td>".$par2."</td></tr>";
  echo "<tr><td>Negativos impares: </td> <td>".$impar2."</td></tr>";
echo "</table>";
 ?>
