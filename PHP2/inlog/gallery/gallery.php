<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gallery opdracht</title>
    <h1> Crypto Afbeeldingen </h1>
<style>
<?php include 'css/style.css'; ?>
</style>

</head>
<body>
    <?php
    for ($i = 1; $i <=9; $i++){
        echo "<img class = 'blue' src='images/crypto".$i.".jpeg'>";
    }
    ?>
</style>    
</body>
</html>