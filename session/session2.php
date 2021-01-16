<?php
session_start();
?>

<html>
<body>
    <?php
    echo "Favorite colour is '".$_SESSION['favcolor']."'<br>";
    echo "Favorite food is '".$_SESSION['favfood']."'";
    ?>
</body>
</html>