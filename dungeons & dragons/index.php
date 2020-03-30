<?php 
include("tridy.php");
?>
<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/css/uikit.min.css" />
    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit-icons.min.js"></script>
    <script src="https://kit.fontawesome.com/8669340d90.js" crossorigin="anonymous"></script>
</head>

<body>
<p>Postava: <?php echo $behavior->race ?></br>
<?php echo "pohlaví:" . $behavior->sex ?></br>
<?php echo "věk:" . $behavior->age ?></br>
<?php echo "jméno:" . $behavior->name ?></br>
<?php echo "příjmení:" . $behavior->surname ?></br>
<?php echo "životy:" . $behavior->health ?></br>
<?php echo "stamina:" . $behavior->stamina ?></br>
<?php echo "síla:" . $behavior->strength ?></br>
<?php echo "moudrost:" . $behavior->wisdom ?></br>
<?php echo "inteligence:" . $behavior->inteligence ?></br>
<?php echo "charima:" . $behavior->charisma ?></br>
<?php echo "obratnost:" . $behavior->dexerity ?></br>
</p>

</body>

</html>