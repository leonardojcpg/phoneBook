<?php
include_once("templates/header.php");
?>

<div>
    <?php if (isset($printMsg) && $printMsg != "") : ?>
    <p id="msg"><?= $printMsg ?></p>
    <?php endif; ?>

    <h1 id="main-title">My PhoneBook</h1>

    <?php if (count($contacts) > 0) : ?>
    <p>Has Contacts</p>
    <?php else : ?>
    <p id="empty-list-text">There's no contacts on your PhoneBook.
        <a href="<?= $BASE_URL ?>create.php">Click here to add a contact !</a>
    </p>
    <?php endif; ?>
</div>

<?php
include_once("templates/footer.php");
?>