<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page 2</title>
</head>
<body>

<h1>Page 2</h1>

<a href="page1.php">Page 1</a>
<a href="page2.php">Page 2</a>

<?php
$name = 'Page 2 Name Shishir';
echo "<h2>". $_SESSION['user_name'] . "</h2>";


echo '<pre>';
print_r($_SESSION);

echo '</pre>';


?>
    
    
</body>
</html>