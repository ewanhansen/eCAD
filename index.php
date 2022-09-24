<?php
    include_once 'header.php';
?>
<body>
    <div class="container">
        <?php 
        if(isset($_SESSION["useruid"]))
        {
            echo "<p>Logged in as " . $_SESSION["useruid"] . "</p>";
        }
        ?>
        <div class="content-large">
            <h2>Features</h2>
            <p>At the moment, only the login features are implemented. To test or use the code for yourself, download the project from Github and change the database settings in 'includes/dbh.inc.php' to your data base.
                Look at the 'How to use:' section to see more.
        </div>
        <div class="content-large">
            <h2>Roadmap<h2>
                <h1>High Priority</h1>
                <li class="bullet-point-list">Thing 1</li>
                <li class="bullet-point-list">Thing 1</li>
                <li class="bullet-point-list">Thing 1</li>
                <h1>Medium Priority</h1>
                <li class="bullet-point-list">Thing 1</li>
                <li class="bullet-point-list">Thing 1</li>
                <li class="bullet-point-list">Thing 1</li>
                <h1>Low Priority</h1>
                <li class="bullet-point-list">Thing 1</li>
                <li class="bullet-point-list">Thing 1</li>
                <li class="bullet-point-list">Thing 1</li>
        </div>
        <div class="content-large">
            <h2>How to use:<h2>
            <p>To use the eCAD in it's current state, download the repository from Github. Next, make sure you have a valid server and database using something like XAMPP. In the 'includes' folder, find 'dbh.inc.php'
                and open it up using your preferred text editor. Modify the database parameters as approriate. You could also plug this into a <em>actual</em> database but you know how to do that if you have one.
            </p>
        </div>
    </div>
</body>       
        
<?php
    include_once 'footer.php';
?>

