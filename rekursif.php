<form method="post">
    Angka : 
    <input type="number" name="angka">
    <input type="submit" value="Submit">
</form>
<?php
  $angka = $_POST['angka'];

      function rekursif_piramid($i, $j){
          if ($i > 0) {
              if ($j > 0) {
                  echo "* ";
                  $j--;
                  rekursif_piramid($i, $j);
              }
              else {
                  echo "<br>";
                  $i--;
                  rekursif_piramid($i, $i);
              }
          }
      }
      rekursif_piramid($angka, $angka);

  // ================================================================================== //
      echo "<br>";
  // ================================================================================== //

      function rekursif_angka($i, $j, $angka){
          if ($i <= $angka) {
              if ($j <= $i) {
                  echo "$j ";
                  $j++;
                  rekursif_angka($i, $j, $angka);
              }
              else {
                  echo "<br>";
                  $i++;
                  rekursif_angka($i, 1, $angka);
              }
          }
      }
      rekursif_angka(1, 1, $angka);
?>
