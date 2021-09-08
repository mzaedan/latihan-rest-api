<?php

// $mahasiswa = [
// 	[
// 		"nama" => "Zaedan",
// 		"nrp" => "123",
// 		"emial" => "Zaedan@gmail.com"
// 	],
// 	[
// 		"nama" => "Zidan",
// 		"nrp" => "123",
// 		"emial" => "Zidan@gmail.com"
// 	]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=perpus_yii2','root','');

$db = $dbh->prepare('SELECT * FROM kategori');
$db->execute();

$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data =  json_encode($mahasiswa);
echo $data

?>