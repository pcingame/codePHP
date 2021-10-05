<?php

$age = array("Peter"=>"35", "Bob"=>40, "Max"=>20);
echo "Peter is ".$age['Peter']." years old";
echo "\n";
$student = array("Name"=>"Phương", "Physics"=>"9", "Math"=>"9", "English"=>"9");
foreach ($student as $item =>$item_value)
{
    echo $item.": ".$item_value."\n";

}

?>