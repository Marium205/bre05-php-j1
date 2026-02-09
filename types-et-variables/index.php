<?php
$nb = 42;
echo $nb;

echo "<br>";

$str = "La vie l'univers et tout le reste";
echo $str;

echo "<br>";

$nbstr = "Nombre : $nb -- Texte : $str";
echo $nbstr;

echo "<hr>";

$nb_tab = [10, 4.5, 32, 7.8, 100];
echo "<pre>";
print_r($nb_tab);
echo "</pre>";
$str_tab = ["chat", "chien", "lapin", "renard"];
echo "<pre>";
print_r($str_tab);
echo "</pre>";

echo "<hr>";
$animal = [
    "species" => "chat",
    "name" => "curly",
    "age" => 10
    ];
echo "<pre>";
print_r($animal);
echo "</pre>";

$data = 42.0;
echo "$data <br>";

$int = (int) $data;
echo "$int <br>";

$str = (string) $int;
echo "$str <br>";
?>
