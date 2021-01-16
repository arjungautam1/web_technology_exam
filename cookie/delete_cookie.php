<!DOCTYPE html>
<html>
<?php
setcookie("user","",time()-3600);
?>
<body>
<?php

echo "Cookie 'user' is deleted.";

?>
</body>

</html>