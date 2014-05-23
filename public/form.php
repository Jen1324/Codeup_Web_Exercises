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
            <input id="username" name="username" type="text" placeholder="Username" required>
        </p>
        <p>
            <label for="password">Password</label>
            <input id="password" name="password" type="password" placeholder="Password">
        </p>
        <p>
            <label for="remember">Remember Me?</lable>
            <input id="remember" name="memory" type="checkbox">
            <br><br>
            <input type="submit" name="Log In" value="Log In" <button type="button">Click Me!</button>
        </p>
    </form>

</body>









</html>