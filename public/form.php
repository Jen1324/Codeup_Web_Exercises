<!DOCTYPE html>
<html>



<body>
    <?php
        var_dump($_GET);
        var_dump($_POST);
    ?>

    <form method="POST" action="">
        <p>
            <label for="username">Username</label>
            <input id="username" name="username" type="text">
        </p>
        <p>
            <label for="password">Password</label>
            <input id="password" name="password" type="password">
        </p>
        <p>
            <label for="remember">Remember Me?</lable>
            <input id="remember" name="memory" type="checkbox">

            <input type="submit">
        </p>
    </form>

</body>









</html>