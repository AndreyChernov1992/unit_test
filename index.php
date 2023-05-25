<!DOCTYPE html>
<html>
<head>
<title>Reverse Form</title>
<meta charset="utf-8" />
</head>
<body>
Your reversed string: <?php

require_once __DIR__ . "/vendor/autoload.php";

use App\App\Reverse;

$str = "";
if(isset($_POST["string"])){
  
    $str = $_POST["string"];
}

$reverse = new Reverse($str);

echo $reverse->reverse($str);
?>
<h3>Input form</h3>
<form method="POST">
    <p>String: <input type="text" name="string" /></p>
    <input type="submit" value="Send">
</form>
</body>
</html>
