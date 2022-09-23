<?php
    include_once 'header.php';
?>

<section class="signup-form">
    <div class="form">
        <form action="includes/signup.inc.php" method="post">
            <h2>Register</h2>
            <label for="nameInput" class="form__label">First name</label>
            <input class="form__input" type="text" name="name" placeholder="First name..." id="nameInput">

            <label for="emailInput" class="form__label">Email</label>
            <input type="text" name="email" placeholder="Email..." id="emailInput">

            <label for="usernameInput" class="form__label">Username</label>
            <input type="text" name="uid" placeholder="Username..." id="usernameInput">

            <label for="pwdInput" class="form__label">Password</label>
            <input type="password" name="pwd" placeholder="Password..." id="pwdInput">

            <label for="repeatPwdInput" class="form__label">Retype password</label>
            <input type="password" name="pwdrepeat" placeholder="Retype password..." id="repeatPwdInput">
        </form>
        <div class="button__holder">
            <button type="submit" name="submit" id="submitButton">Sign up</button>
        </div>

    </div>
    <div class="error__box">
    <?php
    if(isset($_GET["error"]))
    {
        if($_GET["error"] == "emptyinput")
        {
           echo "<p>Fill in all fields!</p>"; 
        }
        else if($_GET["error"] == "invaliduid")
        {
            echo "<p>Invalid username!</p>"; 
        }
        else if($_GET["error"] == "invalidemail")
        {
            echo "<p>Please enter a valid email</p>"; 
        }
        else if($_GET["error"] == "passwordmismatch")
        {
            echo "<p>Fill in all fields!</p>"; 
        }
        else if($_GET["error"] == "uidexists")
        {
            echo "<p>Username already exists.</p>"; 
        }
        else if($_GET["error"] == "stmtfailed")
        {
            echo "<p>Something went wrong.</p>"; 
        }
        else if($_GET["error"] == "none")
        {
            echo "<p>Sign up successful.</p>"; 
        }
    }
    ?>
</div>

</section>

<?php
    include_once 'footer.php';
?>

