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



       <p>
       <label for="signup">Would you like to save a copy to your sent folder?</label>
       <label>Yes <input id="signup" name="signup" type="checkbox" value="yes" checked></lable>
       <label>No <input id="signup" name="signup" type="checkbox" value="no"></lable>
       </p>




       <p>
       <label>Do you like Monster?</label>
       <label>Yes <input name="monster[]" type="radio" value="yes"></label>
       <label>No <input name="monster[]" type="radio" value="no"></label>
       </p>
       <p>
       <label for="question">Do you like Red Bull?</label>
       <label>Yes <input name="redbull[]" type="radio" value="yes"></label>
       <label>No <input name="redbull[]" type="radio" value="no"></label>
       </p>


    <p>
       <label> What is your favorite panda?</label>
       <label>Giant<input type="checkbox" name="panda[]" value="giant"></label>
       <label>Mini<input type="checkbox" name="panda[]" value="giant"></label>
       <label>Red<input type="checkbox" name="panda[]" value="giant"></label>
       <label>Omar<input type="checkbox" name="panda[]" value="giant"></label>
    </p>



<input type="submit" name="Send" value="Send">





    </form>


<h2>Multiple Choice Test:</h2>
    <form method="POST">
    <p>
       <label>Choose your favorite colors!</label>
       <br><label>Pink<input type="checkbox" name="color[]" value="pink"></label>
       <br><label>Blue<input type="checkbox" name="color[]" value="blue"></label>
       <br><label>Red<input type="checkbox" name="color[]" value="red"></label>
       <br><label>Purple<input type="checkbox" name="color[]" value="purple"></label>
    </p>
    <p>
       <label>Choose your favorite animals!</label>
       <br><label>Cat<input type="checkbox" name="animal[]" value="cat"></label>
       <br><label>Dog<input type="checkbox" name="animal[]" value="dog"></label>
       <br><label>Bird<input type="checkbox" name="animal[]" value="bird"></label>
       <br><label>Lizard<input type="checkbox" name="animal[]" value="lizard"></label>
    </p>










    </form>





</body>









</html>