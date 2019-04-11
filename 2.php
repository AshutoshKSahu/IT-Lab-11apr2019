<?php
$str="     Hello World! ";
echo "Without trim: " . $str;
echo "<br>";
echo "With trim: " . trim($str);
echo "<br>";
$str2="This contains \ characters \ ";
echo "With  slash: " . $str2 . "<br/>";
echo "Without slash " . stripslashes($str2);
?>
