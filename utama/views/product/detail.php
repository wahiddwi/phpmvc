<div class="container mt-5">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?= $data['product']['product_name'] ?></h5>
        <h6 class="card-subtitle mb-2 text-muted">Rp. <?= $data['product']['price'] ?></h6>
        <p class="card-text"><?= $data['product']['description'] ?></p>
        <a href="<?= BASEURL; ?>/product" class="card-link">Back</a>
    </div>
    </div>
</div>