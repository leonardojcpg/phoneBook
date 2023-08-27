<?php
include_once("templates/header.php")

?>
<div class="container">
    <?php include_once("templates/backButton.html") ?>
    <h1 id="main-title">Edit Contact</h1>

    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="type" value="<?= $contact["id"] ?>">

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Type contact name"
                value="<?= $contact["name"] ?>" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Type contact phone"
                value="<?= $contact["phone"] ?>" required>
        </div>
        <div class="form-group">
            <label for="observations">Observations:</label>
            <textarea type="text" class="form-control" id="observations" name="observations"
                placeholder=" Type any note" rows="3"><?= $contact["observations"] ?>
            </textarea>
        </div>

        <button type="submit" class="btn btn-primary" style="margin-top:1rem;">Update</button>

    </form>
</div>

<?php

include_once("templates/footer.php")
?>