<?php
include_once("templates/header.php")

?>
<div class="container">
    <?php include_once("templates/backButton.html") ?>
    <h1 id="main-title">Add Contact</h1>

    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="create">

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Type contact name" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Type contact phone" required>
        </div>
        <div class="form-group">
            <label for="observations">Observations:</label>
            <textarea type="text" class="form-control" id="observations" name="observations"
                placeholder=" Type any note" rows="3">
            </textarea>
        </div>

        <button type="submit" class="btn btn-primary">Register</button>

    </form>
</div>

<?php

include_once("templates/footer.php")
?>