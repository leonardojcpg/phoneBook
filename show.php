<?php 

    include_once("templates/header.php")
?>

<div class="container" id="view-contact-container">
    <?php include_once("templates/backButton.html") ?>
    <h1 id="main-title"><?= $contact['name'] ?></h1>
    <p class="bold"><b>Telefone:</b></p>
    <p><?= $contact['phone'] ?></p>
    <p class="bold"><b>Observações:</b></p>
    <p><?= $contact['observations'] ?></p>
</div>

<?php 

    include_once("templates/footer.php")

?>