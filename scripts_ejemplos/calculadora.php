<center>Calculadora basica</center>
<?php


  $n1 = $_POST['num1'];
  $n2 = $_POST['num2'];
  $op = $_POST['operar'];

/*  echo "Numero 1:". $n1;
  echo "<br>Numero 2:". $n2;
  echo "<br>Operacion:". $op;
*/
switch ($op) {
  case 'sum':
    echo "La suma es:". ($n1+$n2);
    break;
  case 'res':
    echo "La resta es:". ($n1-$n2);
    break;
  case 'mult':
    echo "La multiplicacion es:". ($n1*$n2);
    break;
  case 'div':
    echo "La division es:". ($n1/$n2);
    break;
  default:
    echo "opcion incorrecta";
    break;

    //Condicionales


    /*  if ($op == "sum") -- funcional
        echo "La suma es:". ($n1+$n2);
      elseif ($op == "res")
        echo "La resta es:". ($n1-$n2);
      else
        echo ".:: opcion incorrecta";

*/



 ?>
