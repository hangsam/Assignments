<?php 
$data = file_get_contents("laptop.json");

// echo $data."<br>";

$j_data = json_decode($data, true);

echo "<pre>";
print_r($j_data);
echo "</pre>";

$file = fopen("laptop.csv", "a");

foreach($j_data as $row) {
    is_string($row);
    fputcsv($file, $row);
}
fclose($file);
?>