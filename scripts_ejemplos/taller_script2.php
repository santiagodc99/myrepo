<html>
  <head>
    <title>Trabajo</title>
  </head>
      <body>
        <table border="0" align="center">
          <form name="frm1" action="taller_script2.php" method="post">
          <tr>
            <center><b><font face="Times new Roman" size="15" color="BLACK">script2</font></b></center><br>
          </tr>

          <tr>
            <td><font face="Times new Roman" size="5" color="BLACK">Ingrese un numero</font><br>
            <input type="number" name= "num1" requeried><br><br></td>
          </tr>

          <tr>
            <td align="center"><input type="submit" value="Obtener"><br></td></td>
          </tr>
        </form>
        </table>

      </body>
</html>

<?php
$n1= $_POST ['num1'];
echo "Numero digitado: ".$n1;
echo "<br>Tabla 1<br>";
echo "<table border=1><tr>";
 $i = 1;
 while($i <= $n1){
   if ($i%2==0){
       echo "<td>".  $i. "</td>";
   }else{
       echo "<td>". $i. "</td>";
   }

   $i++;
 }
 echo "</tr></table>";
//--------------------------------------------
echo "<br>Tabla 2<br>";
echo "<table border=1><tr>";
 $i = $n1;
 while($n1 = $i){
   if ($i%2==0){
       echo "<td>".  $i. "</td>";
   }else{
       echo "<td>". $i. "</td>";
   }
     $i--;
 }
echo "</tr></table>";


?>
