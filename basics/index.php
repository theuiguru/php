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
// $tablesAvailable = false;
// if($tablesAvailable !== true) {
// 	echo 'No tables available';
// }
// $maxRoomsAllowed = 5;
// $roomsRequested = 7;
// $roomsAvailable = 20;
// if(($roomsRequested >= $roomsAvailable) || ($roomsRequested >= $maxRoomsAllowed)) {
// 	echo 'Please choose less rooms.';
// } else {
// 	echo 'Your booking is complete.';
// }

// IF statements and operators: Switch
// switch(2) {
// 	case 1: 
// 		echo 'The value is one.';
// 		break;
// 	case 2: 
// 		echo 'The value is two.';
// 		break;
// 	default:
// 		echo 'The value is unknown';
// 		break;
// }
// $weather = 'sunny';
// $color = null;
// switch(true) {
// 	case $weather == 'sunny':
// 		$color = 'blue';
// 		break;
// 	case $weather == 'cloudy':
// 		$color = 'grey';
// 		break;
// 	default:
// 		break;
// }
// echo $color;

// Arithmetic: Basic Arithmetic
// $views = 0;
// $views++; or $views--;
// echo $views;
// $totalLessons = 30;
// $completedLessons = 7;
// $percentageComplete = number_format(($completedLessons / $totalLessons) * 100, 2);
// echo "You've completed {$percentageComplete}% of this course.";
// $balance = 500;
// $cost = 25;
// echo $balance = $balance - $cost;
// $points = 0;
// $points += 10;
// echo $points;
// $a = 10;
// $b = 8;
// echo $a % $b;
// $rows = 10;
// for($row = 1; $row <= $rows; $row++) {
// 	if($row % 2 === 0) {
// 		echo 'Even';
// 	} else {
// 		echo 'Odd';
// 	}
// }
// $a = 10;
// echo $a ** 2; // 10 * 10

// Looping: The FOR loop
// for($x = 1; $x <= 10; $x++) {
// 	echo $x . '<br>';
// }
// $totalItems = 250;
// $itemsPerPage = 25;
// $pageCount = ceil($totalItems / $itemsPerPage); // ceil() or floor()
// if($pageCount >= 1) {
// 	for($i = 1; $i <= $pageCount; $i++) {
// 		echo '<a href="?page=' . $i . '">' . $i . '</a> '; 
// 	}
// }
// $names = ['alex', 'billy', 'dale', 'tabby'];
// for($i = 0; $i < count($names); $i++) {
// 	echo $names[$i] . '<br>';
// }

// Looping: The WHILE and DO WHILE loops
// $currentNumber = 1;
// $endAt = 10;
// $incrementBy = 1;
// while($currentNumber <= $endAt) {
// 	echo $currentNumber . '<br>';
// 	$currentNumber += $incrementBy;
// }
// $numberIwant = 3;
// echo rand(1,6);
// while(($diceRoll = rand(1, 6)) !== $numberIwant) {
// 	echo "You rolled a {$diceRoll}, we need a {$numberIwant}<br>";
// }
// echo "You rolled a {$numberIwant}";
// do {
// 	echo 'This will be run at least once.';
// } while(false);

// Looping: The FOREACH loop
// $names = ['alex', 'billy', 'dale'];
// foreach($names as $index => $name) {
// 	echo $index . ': ' . $name . '<br>';
// }
// $topics = [
// 	[
// 		'id' => 1,
// 		'title' => 'The best way to learn PHP?',
// 		'posts' => [
// 			['body' => 'Practice a lot!'],
// 			['body' => 'Work on a project.']
// 		]
// 	],
// 	[
// 		'id' => 2,
// 		'title' => 'How do I use a foreach loop?',
// 		'posts' => [
// 			['body' => 'Just watch this part.']
// 		]
// 	]
// ];
// foreach($topics as $topic) {
// 	echo '<h1>' . $topic['title'] . '</h1>';
// 	foreach($topic['posts'] as $post) {
// 		echo '<p>' . $post['body'] . '</p>';
// 	}
// }

// Looping: Breaking and continuing
// $names = ['alex', 'billy', 'dale'];
// foreach($names as $name) {
// 	echo $name . "<br>";
// 	break;
// }
// $users = [
// 	['username' => 'alex'],
// 	['username' => 'billy'],
// 	['username' => 'dale'],
// 	['username' => 'ashley'],
// 	['username' => 'mabel'],
// 	['username' => 'josh']
// ];
// $toFind = 'alex';
// $result = null;
// foreach($users as $user) {
// 	if($user['username'] === $toFind) {
// 		$result = $user;
// 		break;
// 	}
// }
// var_dump($result);
// $toSkip = 'dale';
// foreach($users as $user) {
// 	if($user['username'] === $toSkip) {
// 		continue;
// 	}
// 	echo $user['username'] . '<br>';
// }
// $users = [
// 	[
// 		'username' => 'alex',
// 		'likes' => ['cats', 'food']
// 	],
// 	[
// 		'username' => 'billy',
// 		'likes' => ['code', 'cats', 'food']
// 	],
// 	[
// 		'username' => 'dale',
// 		'likes' => ['code', 'cats', 'music']
// 	]
// ];
// $toFind = 'code';
// $found = null;
// foreach($users as $user) {
// 	foreach($user['likes'] as $like) {
// 		if($like === $toFind) {
// 			$found = $user;
// 			break 2;
// 		}
// 	}
// }
// var_dump($found);

// Dumping
// $names = ['alex' => 27, 'billy' => 23];
// $users = [
// 	['name' => 'alex', 'age' => 27],
// 	['name' => 'billy', 'age' => 23]
// ];
// echo '<pre>' . var_dump($users) . '</pre>';
// echo '<pre>' . print_r($users) . '</pre>';

// Functions: Function basics
// function fullName() {
// 	return 'Chris Thomas';
// }
// echo $fullName = fullName();
// function fullName($firstName, $lastName, separator = ' ') {
// 	return "{$firstName}{$separator}{$lastName}";
// }
// $fullName = fullName('Chris', 'Thomas', '_');
// echo $fullName;
// $fullName = function($firstName, $lastName, $separator = ' ') {
// 	return "{$firstName}{$separator}{$lastName}";
// };
// echo $fullName('Chris', 'Thomas');

// Functions: Function flexibility
// function fullName($firstName, $lastName = null, separator = '_') {
// 	if(trim($firstName) ==='') {
// 		return;
// 	}
// 	if($lastName === null) {
// 		return $firstName;
// 	}
// 	return "{$firstName}{$separator}{$lastName}";
// }
// var_dump(fullName('Chris', 'Thomas'));

// Functions: func_get_args
// function add(array $numbers) {
// 	$total = 0;
// 	foreach($numbers as $number) {
// 		$total += $number;
// 	}
// 	return $total;
// }
// $numbers = [5, 10, 10, 1];
// echo add($numbers);
// function add() {
// 	// var_dump(func_get_args());
// 	// $total = 0;
// 	// foreach(func_get_args() as $number) {
// 	// 	if(!is_numeric($number)) {
// 	// 		continue;
// 	// 	}
// 	// 	$total += $number;
// 	// }
// 	// return $total;
// 	return array_sum(func_get_args());
// }
// echo add(5, 10, 10);
// echo add(5, 10, 10, '1Chris');

// Functions: Let's talk about scope
// $config = [
// 	'separator' => '_'
// ];
// $fullName = function ($firstName, $lastName) use ($config) {
// 	// global $config;
// 	return "{$firstName}{$config['separator']}{$lastName}";
// }
// echo fullName("Chris", "Thomas");

// Breaking up files
// include 'hello.php';
// require 'goodbye.php';
// echo 'The rest of our code.';
// include_once 'hello.php';
// require_once 'hello.php';
// require_once "functions/user.php";
// echo fullName('Chris', 'Thomas');

// POST and GET superglobals
// var_dump($_GET);
// echo $_GET['slug'];
// $page = $_GET['page'];
// $searchTerm = $_GET['search'];
// $pages = 10;
// echo '<h3>Searching for: ' . $searchTerm . '</h3>';
// echo '<p>You are on page ' . $page . '</p>';
// for($i = 1; $i <= $pages; $i++) {
// 	echo '<a href="?search=' . $searchTerm . '&page=' . $i . '">' . $i . '</a> ';
// }
// if(isset($_GET['search'])) {
// 	$searchTerm = $_GET['search'];
// 	echo '<h3>Searching for: ' . $searchTerm . '</h3>';
// }
?>
<!-- <!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Document</title></head><body>
	<form action="signin.php" method="post">
		<label for="username">Username:</label>
		<input type="text" name="username" id="username">
		<label for="password">Password:</label>
		<input type="password" name="password" id="password">
		<button type="submit">Sign in</button>
	</form>
</body></html> -->

<?php
// The ternary operator
// echo $_GET['page'];
// $page = 1;
// if(isset($_GET['page'])) {
// 	$page = $_GET['page'];
// }
// echo $page;
// echo $page = isset($_GET['page']) ? $_GET['page'] : 1;
// echo $page = $_GET['page'] ?? 1;
// $balance = 10;
// if($balance === 0) {
// 	$balance = 'zero';
// }
// $availableBalance = $balance ?: 'zero';
// echo 'Your available balance is ' . $availableBalance;

// Commenting
// Define the person's name
// $name = 'Chris'; // Define the person's name
/*
 * 	This function takes a string and strips the whitespace.
 *	More text.
function removeWhitespace() {}
*/

// Finding PHP functions
// echo var_dump(strlen('Chris'));
// $name1 = '      Chris     ';
// $name2 = '......Chris.....';
// $name3 = '       Chris';
// echo strtoupper($name);
// echo strtolower($name);
// echo trim($name, '.');
// echo ltrim($name);
// $name = 'Chris';
// $name = 'alexander';
// echo substr($name, 0, ceil(strlen($name) / 2));
// $page = $_GET['page'] ?? 1;
// if(empty(trim($page))) {
// 	$page = 1;
// }
// echo $page;
// $number = 5.65435345634;
// $number = 1000000000;
// echo number_format($number, 0, ',', '_');
// header('Location: page.php'); // form submission for a user redirecting to a page

//Practical projects: Submitting a form below
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="name.php" method="post">
		<label for="name">Your name:</label>
		<input type="text" name="name" id="name">
		<button type="submit">Greet me</button>
	</form>
</body>
</html> -->


<?php
// Practical projects: Random quote generator
// $quotes = [
// 	[
// 		"author" => "Dr. Roopleen",
// 		"text" => "If you have a dream, don’t just sit there. Gather courage to believe that you can succeed and leave no stone unturned to make it a reality."
// 	],
// 	[
// 		"author" => "Richard Parkes Cordock",
// 		"text" => "You must expect failure as part of your journey of success, failure and success go hand in hand, you cannot have one without the other."
// 	],
// 	[
// 		"author" => "Michael Jordan",
// 		"text" => "You have to expect things of yourself before you can do them."
// 	],
// 	[
// 		"author" => "Maya Angelou",
// 		"text" => "I've learned that you shouldn't go through life with a catcher's mitt on both hands; you need to be able to throw something back."
// 	],
// 	[
// 		"author" => "Sharon Salzberg",
// 		"text" => "You yourself, as much as anybody in the entire universe, deserve your love and affection."
// 	]
// ];
// $quote = array_rand($quotes);
// var_dump($quote);
// die();
// $quote = $quotes[rand(0, count($quotes) - 1)];
// $quote = $quotes[array_rand($quotes)];
// $quoteText = $quote['text'];
// $quoteAuthor = $quote['author'];
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Random Quote</title>
</head>
<body>
	<blockquote>
		<h2>&ldquo;<?= $quoteText ?>&rdquo;</h2>
		<strong>- <?php //echo $quoteAuthor ?></strong>
	</blockquote>
</body>
</html> -->

<?php
// Practical projects: Build an image gallery
// $directory = opendir('images');
// while($imageFile = readdir($directory)) {
// 	var_dump($imageFile);
// }
require 'directoryreader.php';
$images = directoryReader('images');
if(!$images) {
	die('Could not load files.');
}
// var_dump($images);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gallery</title>
</head>
<body>
	<?php foreach ($images as $image): ?>
		<img src="<?php echo $image; ?>">
	<?php endforeach ?>
</body>
</html>