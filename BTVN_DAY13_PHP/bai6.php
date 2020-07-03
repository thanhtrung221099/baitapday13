<?php
$keys = array(
    "field1" => "first",
    "field2" => "second",
    "field3" => "third",
);

$values = array(
    "field1value" => "dinosaur",
    "field2value" => "pig",
    "field3value" => "platypus",
);

$keyandvalues = array_merge($keys, $values);
echo "<pre>";
print_r($keyandvalues);
echo "</pre>";
?>