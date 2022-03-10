<?php
if (!isset($_SESSION["newsession"]))
{
    header("Location:index.php?page=connection&test");
    
}
else
{
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon profil</title>
</head>
<body>
    
<h6>Votre compte</h6>
</body>
</html>
<?php
}
?>