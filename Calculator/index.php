<?php
  include "includes/autoloader.inc.php"
?>
<!doctype html>
<html>
  <head>
    <title>PHP Calculator</title>
  </head>

  <body>

    <h2>Calculator</h2>
    <br>
      <form method="POST">
          <input type="number" name="num1Inserted"  placeholder="First Number" required name="price" min="0" value="0" step="any"><br>
          <input type="number" name="num2Inserted" placeholder="Second Number" required name="price" min="0" value="0" step="any">
          <select name="calInserted">
            <option value="add">Add</option>
            <option value="sub">Subtract</option>
            <option value="mul">Multiply</option>
            <option value="div">Divide</option>
          </select>
          <button type="submit">Calculate</button><br><br>
      </form>

      <?php
        include "includes/calc.inc.php";
      ?>
  </body>
</html>