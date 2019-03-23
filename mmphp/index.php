<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>php calculate</title>
</head>
<body>
  
<style>
  body {
    background: #1f2531;
    color: white;
  }

  .container {
    display: grid;
    height: 100vh;
    margin: 0;
    place-items: center;
}
</style>
<div class="container">
  
    <form>
      <input type="text" name="num1" placeholder="number 1">
      <input type="text" name="num2" placeholder="number 2">
      <select name="operator">
        <option value="none">none</option>
        <option value="add">add</option>
        <option value="subtract">subtract</option>
        <option value="multiply">multiply</option>
        <option value="divide">divide</option>
      </select>
      <hr>
      <div class="calculate">
        <button class="calc-button" type="submit" name="submit" value="submit">Calculate</button>
        <h3>The answer is:

          <?php 
            if(isset($_GET['submit'])) {
              $num1 = $_GET['num1'];
              $num2 = $_GET['num2'];
              $operator = $_GET['operator'];

              switch($operator) {
                case "none": 
                  echo 'select an operator';
                  break;
                case "add":
                  echo $num1 + $num2;
                  break;
                case "subtract":
                  echo $num1 - $num2;
                  break;
                case "Multiply":
                  echo $num1 * $num2;
                  break;
                case "divide":
                  echo $num1 / $num2;
                  break;
              }
            }
          ?>
        </h3>
      </div>
    </form>
</div>



</body>
</html>