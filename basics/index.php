<?php
// Variables
// $daysInWeek = 7;
// echo $text = 'There are ' . $daysInWeek . ' days in a week.';

// Strings
// $message = 'It\'s a lovely day today';
// echo $message;
// $name = 'Chris';
// $message = $name . ' said "learning PHP is fun".';
// echo $message;
// echo "<a href=\"#\">Link</a>";
// echo '<a href="http://www.google.com">Link</a>';

// Integers and Floats
// $pi = 3.141;
// $bankBalance = 1.2e6;
// echo 'Your bank balance is $' . $bankBalance;

// Booleans
// $fileIsUploaded = false;
// if($fileIsUploaded) {
// 	echo 'Your file was uploaded.';
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
// $users[1]['likes'][1] = 'dogs';
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