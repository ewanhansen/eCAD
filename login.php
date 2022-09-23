<?php
    include_once 'header.php';
?>

<section class="signup-form">
    <div class="form">
    <h2>Log In</h2>
        <form action="includes/login.inc.php" method="post">
            <label for="nameInput" class="form__label">Username or Email</label>
            <input type="text" name="uid" placeholder="Username or email..." id="nameInput">
            <label for="pwdInput" class="form__label">Password</label>
            <input type="password" name="pwd" placeholder="Password..." id="pwdInput">
            <div class="button__holder">
                <button type="submit" name="submit">Log In</button>
            </div>    
        </form>
    </div>

    <?php
    if(isset($_GET["error"]))
    {
        if($_GET["error"] == "emptyinput")
        {
           echo "<p>Fill in all fields!</p>"; 
        }
        else if($_GET["error"] == "wronglogin")
        {
            echo "<p>Incorrect username or password.</p>"; 
        }

        //success is handled in login.inc.php
    }
?>

</section>

<?php
    include_once 'footer.php';
?>