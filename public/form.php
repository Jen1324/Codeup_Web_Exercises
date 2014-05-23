<!DOCTYPE html>
<html>



<body>
    <?php
        var_dump($_GET);
        echo "<br>";
        var_dump($_POST);
    ?>

    <h2>User Login:</h2>


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
        
           
        </p>


        <p>
            <textarea name="post_body" rows="10" cols="30">
Have feedback? Leave it here!</textarea>
        </p>

            

             <br><br>
             <input type="submit" name="Log In" value="Log In" <button type="button">Click Me!</button>
             <input type="hidden" name="hidden_input" value="hidden_value">

    </form>


       <p><h2>Compose an Email:</h2></p>


    <form method="POST">

       <p>
       <label>To: <input id="to" name="to" type="email" placeholder="Insert email to"></label></p>
       <p>
       <label>From: <input id="from" name="from" type="email" placeholder="Insert email from"></label></p>
       <p>
       <label>Subject: <input id="subject" name="subject" type="text" placeholder="Enter subject matter"></label></p>
       <p>
       <label>Message:<textarea name="message_body" rows="10" cols="30"></textarea></p>




<input type="submit" name="Send" value="Send">





    </form>





</body>









</html>