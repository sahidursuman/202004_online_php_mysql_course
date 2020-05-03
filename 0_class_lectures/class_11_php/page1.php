<?php
session_start();

$_SESSION['user_id'] = '';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page 1</title>
</head>
<body>
<h1>Page 1</h1>

<a href="page1.php">Page 1</a>
<a href="page2.php">Page 2</a>

<?php
echo '<pre>';
print_r($_SESSION);

echo '</pre>';
$name = 'Page 1 Name Suman';
echo "<h2>". $_SESSION['user_name'] . "</h2>";


?>
    
</body>
</html>