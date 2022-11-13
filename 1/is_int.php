<?php
$values = array(23, "A", 23.5, true, 1, "22", 0, false);
foreach ($values as $value) {
    echo "is_int(";
    var_export($value); 
    echo ") = ";
    var_dump(is_int($value. "<br>"));
}
?>