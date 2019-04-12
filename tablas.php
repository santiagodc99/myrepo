<html>
    <head>
        <meta charset="UTF-8">
        <title>Quiz 3</title>

    </head>

    <body>

        </table>
        <br><br>
        <table  class="active">
             Tabla:
        </table>
        <br>
        <table border="1" class="table table-hover table-bordered ">
        <?php

            echo ("<tr>");




            for($j=1; $j<11; $j++) {
            //  if ($j%3==0){
            //      echo "<td bgcolor='#64EB6E'>".  $aux = $j. "</td>";
            //  }
            for ($i = 1; $i < 11; $i++) {

              if ($i%3==0 || $j%3==0){
                  echo "<td bgcolor='#64EB6E'>".  $aux = $j*$i. "</td>";
              }else{
                  echo "<td bgcolor='yellow' , font='blue'>". $aux = $j*$i. "</td>";

              }

              //  echo ("<td>");
              //  $aux = $j*$i;
              //  echo "$aux";
              //  echo ("</td>");
            }


            echo ("</tr>");
            }

        ?>
        </table>
    </body>
</html>
