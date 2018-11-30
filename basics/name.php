<?php
// echo "Hi there, {$_POST['name']}!";
// header("Location: http://localhost:8888/basics/index.php");
$name = $_POST['name'] ?? null;
if(empty(trim($name))) {
	header("Location: http://localhost:8888/basics/index.php");
}
echo "Hi there, {$_POST['name']}!";