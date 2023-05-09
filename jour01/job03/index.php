<?php
    $foo = true;
    echo $foo;
    echo "<br>";
    $entier = 1234;
    echo $entier;
    echo "<br>";
    $str = "ceci est une chaîne simple";
    echo $str;
    echo "<br>";
    $virgule = 1.234;
    echo $virgule;
    echo "<br>";
?>

<!DOCTYPE html>  
<html>  
<table align = "left" border = "1" cellpadding = "3" cellspacing = "0">  
<tr>  
  <header>
<td>type</td>  
<td>nom</td>  
<td>valeur</td>
</tr>  
</header>
<body>
<?php    
  echo "<tr>";
              echo "<td>variable</td>";
              echo "<td>boolean</td>";
              echo "<td>$foo</td>";
      echo "</tr>"; 
              echo "<td>variable</td>";
              echo "<td>entier</td>";
              echo "<td>$entier</td>";
      echo "</tr>";
              echo "<td>variable</td>";
              echo "<td>chaîne de caractères</td>";
              echo "<td>$str</td>";
      echo "</tr>";
              echo "<td>variable</td>";
              echo "<td>nombre à virgule flottante</td>";
              echo "<td>$virgule</td>";
      echo "</tr>";
?>    
</table>  
</body>  
</html>  