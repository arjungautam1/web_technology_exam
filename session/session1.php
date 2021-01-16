<?php
session_start();
?>

<html>
<body>
    <?php
    $_SESSION['favcolor']="red";
    $_SESSION['favfood']="momo";
    echo "Session variables are set";
    ?>
</body>
</html>