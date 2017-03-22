<?php
session_start();
$_SESSION["favcolor"] = "red";
var_dump($_SESSION)

?>
<!DOCTYPE html>
<html>
<body>

<?php
// to change a session variable, just overwrite it
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
?>

</body>
</html>