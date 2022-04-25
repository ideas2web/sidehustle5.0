<?php
//Program to calculate electric bills
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$units = $_POST['units'];
if (empty($units)){
  echo "Enter a value for units";
}
//echo $units;
if ($units <= 50)
{
  $cost = $units * 3.50;
  echo "Cost of power is " . $cost;
}
elseif ($units > 50 && $units <= 100) {
  $cost = $units * 4.00;
  echo "Cost of power is " . $cost;
}
elseif ($units > 100 && $units <= 250) {
  $cost = $units * 5.20;
  echo "Cost of power is " . $cost;
}
elseif ($units > 250){
  $cost = $units * 6.50;
  echo "Cost of power is " . $cost;
}
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h4>Program to calculate electric bills</h4>
    <form class="" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      <input type="text" name="units" value="">
      <input type="submit">
    </form>
  </body>
</html>
