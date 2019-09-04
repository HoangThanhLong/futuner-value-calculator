<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Futuner Value Calculator</h1>
<form method = "post">
    Inventment Amount: <input type="text" name="Inventment">
    <br><br>
    Yearly Interest Rate: <input type="text" name="interest"> %/year
    <br><br>
    Number of Years: <input type="text" name="number">
    <br><br>
    <input type="submit" value="Calculate Discount">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $amount = $_POST["Inventment"];
    $inventment = $_POST["Inventment"];
    $interest = $_POST["interest"];
    $number = $_POST["number"];
}
for ($i = 0; $i < $number; $i++){
    $inventment += $inventment*($interest/100);
}
echo "$" . $amount."<br>";
echo $interest . "%" . "<br>";
echo $number . "<br>";
echo $inventment;
?>
</body>
</html>
