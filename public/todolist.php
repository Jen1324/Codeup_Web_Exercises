<!DOCTYPE html>

<html>


<head>
	<title>TODO List</title>
</head>


<body>

	 <?php
        var_dump($_GET);
        echo "<br>";
        var_dump($_POST);
    ?>


<h1>TODO List</h1>

<ul>
<li>todo 1</li>
<li>todo 2</li>
<li>todo 3</li>
<li>todo 4</li>
<li>todo 5</li>
</ul>

<h2>Add items to the todo list.</h2>

<form method="POST">

<label name="list"> Items:</label>
<input id="list" name="list" type="text">
<input type="submit" value=Submit>

</form>







</body>

</html>