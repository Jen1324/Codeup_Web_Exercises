<?php

$address_book = [
    ['The White House', '1600 Pennsylvania Avenue NW', 'Washington', 'DC', '20500'],
    ['Marvel Comics', 'P.O. Box 1527', 'Long Island City', 'NY', '11101'],
    ['LucasArts', 'P.O. Box 29901', 'San Francisco', 'CA', '94129-0901']
];

$handle = fopen('address_book.csv', 'w');
foreach ($address_book as $fields) {
		fputcsv($handle, $fields);
}

fclose($handle);
echo 'Success!';

$filename = 'address_book.csv';
$handle = fopen($filename, 'r');
$address_book = [];

while(!feof($handle)) {
$row = fgetcsv($handle);
	if (is_array($row)) {
	$address_book[] = $row;
	}
}

fclose($handle)

?>

<html>
<body>
	<h1>My Address Book</h1>
	<table border='1'>
<? foreach ($address_book as $entry) : ?>
	<tr>
		<? foreach ($entry as $value) : ?>
		<td><?= $value; ?></td>
		<? endforeach; ?>
	</tr>

<? endforeach; ?>
</table>
</body>	