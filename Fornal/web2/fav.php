<html>
<head><title>Your Favorite</title></head>
<body>
    <?php
       echo "Thanks for your selection ";
       echo $_POST['username'];
       echo "<br>";
       echo "You really enjoyed ";
       echo $_POST["dish"];
       echo "<br>";
       echo " -especially with a nice ";
       echo $_POST['color'];
       echo " wine"; 
    ?>
</body>
</html>