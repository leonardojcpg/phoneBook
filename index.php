<?php
include_once("templates/header.php");
?>

<div>
    <?php if (isset($printMsg) && $printMsg != "") : ?>
    <p id="msg"><?= $printMsg ?></p>
    <?php endif; ?>

    <h1 id="main-title">My PhoneBook</h1>

    <?php if (count($contacts) > 0) : ?>
    <table class="table" id="contacts-table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Observations</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($contacts as $contact): ?>
            <tr>
                <td scope="row"><?= $contact['id'] ?></td>
                <td scope="row"><?= $contact['name'] ?></td>
                <td scope="row"><?= $contact['phone'] ?></td>
                <td scope="row"><?= $contact['observations'] ?></td>

                <td>
                    <a href="#">
                        <i class="fas fa-eye check-icon"></i>
                        <i class="fas fa-edit edit-icon"></i>
                        <button type="submit" class="fas fa-times delete-icon"></button>
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php else : ?>
    <p id="empty-list-text">There's no contacts on your PhoneBook.
        <a href="<?= $BASE_URL ?>create.php">Click here to add a contact !</a>
    </p>
    <?php endif; ?>
</div>

<?php
include_once("templates/footer.php");
?>