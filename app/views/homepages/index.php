<?php require_once APPROOT . '/views/includes/header.php'; ?>

<!-- Voor het centreren van de container gebruiken we het boorstrap grid -->
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h3><?php echo $data['title']; ?></h3>

            <a href="<?= URLROOT; ?>/Magazijn/index">Òverzicht Magazijn Jamin</a> 

        </div>
        <div class="col-3"></div>
    </div>

</div>




<?php require_once APPROOT . '/views/includes/footer.php'; ?>