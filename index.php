<?php
    include_once 'header.php';
?>

<section class="index-intro">
        <?php 
            if(isset($_SESSION["useruid"]))
            {
                            echo "<p>Logged in as " . $_SESSION["useruid"] . "</p>";
            }
        ?>
        <h1>Header</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis alias provident dignissimos
        voluptatem dolorem perspiciatis quisquam? Saepe minima quod voluptatem in explicabo commodi ipsam rem totam eveniet. Dolor, dicta id.
        </p>
    </section>

    <section class="index-categories">
        <h2>Some Basic Categories</h2>
        <div class="index-categories-list">
            <h3>Things</h3>
        </div>
        <div class="index-categories-list">
            <h3>Things</h3>
        </div>
        <div class="index-categories-list">
            <h3>Things</h3>
        </div>
        <div class="index-categories-list">
            <h3>Things</h3>
        </div>
    </section>

<?php
    include_once 'footer.php';
?>

