<?php  
    $orgDate = "09-09-2021";  
    $newDate = date("m-d-Y", strtotime($orgDate));  
    echo "New date format is: ".$newDate. " (MM-DD-YYYY)";  
?>  
<?php
$pastDate = 'October 12 2022';
$pastDate = str_replace(",","",$pastDate);

$date = new DateTime($pastDate);
$new_date_format = $date->format('Y-m-d');

echo $new_date_format; ?>