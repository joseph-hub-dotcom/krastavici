<?php
session_start();

?>

<?php
$krastavici = $_SESSION['krastavici'];
$domati = $_SESSION['domati'];
$zelka = $_SESSION['zelka'];

$vk1 = $krastavici*60;
$vk2 = $domati*50;
$vk3 = $zelka*40;

$vk = $vk1+$vk2+$vk3;
$kod = 10*11+2001;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Детали:</h3>
    <?php echo "$krastavici x 60" . "= $vk1" ?><br>
    <?php echo "$domati x 50" . "= $vk2" ?><br>
    <?php echo "$zelka x 40" . "= $vk3" ?><br>
    <hr>
    <?php echo "ВКУПНО: $vk" ?><br>
    <?php echo "Вашиот код е: $kod" ?>

</body>
</html>