<?php
// Variables
// $name = 'chris';
// echo $name;
// $daysInWeek = 7;
// $daysInWeek = 8;
// echo $text = 'There are ' . $daysInWeek . ' days in a week.';
// echo $text;

// Strings
// $message = 'It\'s a lovely day today';
// echo $message;
// $name = 'Chris';
// $message = $name . ' said "learning PHP is fun".';
// echo $message;
// echo "<a href=\"#\">Link</a>";
// echo '<a href="http://www.google.com">Link</a>';

// Integers and Floats
// $daysInWeek = -1800;
// $pi = 3.141;
// $bankBalance = 1.2e6;
// echo 'Your bank balance is $' . $bankBalance;

// Booleans
// $fileIsUploaded = true; //true, false, 1, 0, -1 is not a value
// if($fileIsUploaded) {
// 	echo 'Your file was uploaded.';
// }
// $isInt = is_int(1);
// if($isInt) {
// 	echo 'that is an integer.';
// }
// var_dump(is_int('chris')); //false
// var_dump(is_int(1)); //true

// Array Basics
// $names = ['chris', 'luke', 'dan'];
// var_dump($names);
// echo $names[0];
// $names[] = 'ash';
// var_dump($names);
// echo $names[3];

// Diving Into Arrays
// $people = [
// 	'chris' => 26,
// 	'billy' => 21
// ];
// var_dump($people);
// echo $people['billy'];
// $users = [
// 	[
// 		'username' => 'alex',
// 		'email' => 'alex@codecourse.com',
// 		'likes' => ['food', 'code']
// 	],
// 	[
// 		'username' => 'billy',
// 		'email' => 'billy@codecourse.com',
// 		'likes' => ['food', 'books']
// 	],
// 	[
// 		'username' => 'josh',
// 		'email' => 'josh@codecourse.com',
// 		'likes' => ['reading', 'cooking']
// 	]
// ];
// var_dump($users);
// echo $users[1]['username'];
// echo '<pre>', var_dump($users), '</pre>';
// echo $users[1]['email'];
// echo $users[0]['likes'][0];
// foreach($users as $user) {
// 	var_dump($user);
// 	echo $user['username'] . '<br/>';
// }
// $users[2] = 'josh';
// $users[1]['likes'][1] = 'dogs'; //change values to properties
// $users[1]['about'] = 'I am learning to code.';
// echo '<pre>', var_dump($users), '</pre>';

// Data Types: NULL 
// $name = null;
// var_dump($name);
// $name = 'chris';
// unset($name);
// echo $name;
// var_dump($name);

// Concatenation
// $weather = 'sunny';
// $degrees = 30.5;
// $status = "The current weather is {$weather} and it's {$degrees}* degrees"; //variable parsing
// echo $status;
// var_dump($status);
// $name = 'chris';
// echo 'My name is ' , $name; //comma notation

// IF statements and operators: IF statement basics
// $dayOfWeek = 4;
// $daysOfWeek = [
// 	1 => 'Monday',
// 	2 => 'Tuesday',
// 	3 => 'Wednesday'
// ];
//var_dump(array_keys($daysOfWeek));
// if(in_array($dayOfWeek, array_keys($daysOfWeek))) {
// 	echo $daysOfWeek[$dayOfWeek];
// } else {
// 	echo 'That is not a valid day.';
// }
// $name = 'Chris';
// if($name) {
// 	echo 'Your name is ' . $name;
// 	if(strlen($name) > 10) {
// 		echo '. Oh, and you have a very long name';
// 	}
// }
// $name = 'Christopher Thomas';
// if(!$name) {
// 	return;
// }
// echo 'Your name is ' . $name . '';
// if(strlen($name) > 10) {
// 	echo '. Oh, and you have a long name.';
// }
// if(false) {
// 	echo 'This will always be run.';
// }

// IF statements and operators: Logical operators
// $username = 'chris';
// $password = 'ilovefood';
// if($username == 'chris' && $password == 'ilovefood') {
// 	echo 'You are in!';
// }
// $dayOfWeek = 1;
// $workingThatWeekend = false;
// if(($dayOfWeek == 6 || $dayOfWeek == 7) && !$workingThatWeekend) {
// 	echo 'You have a day off!';
// }

// IF statements and operators: Comparison operators
// $uploaded = -5;
// if($uploaded === true) {
// 	echo 'Uploaded';
// }
$tablesAvailable = true;
if($tablesAvailable !== true) {
	echo 'No tables available';
}
