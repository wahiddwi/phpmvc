<div class="container" mt-3>

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btnCreate" data-toggle="modal" data-target="#formModal">
            Create Product
            </button>
            <br><br>
            <h3>List Products</h3>
            <ul class="list-group">
                    <?php foreach ($data['product'] as $product) : ?>
                    <li class="list-group-item">
                        <?= $product['product_name'] ?>
                        <a href="<?= BASEURL; ?>/product/delete/<?= $product['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin ingin menghapus ?');">delete</a>
                        <a href="<?= BASEURL; ?>/product/edit/<?= $product['id']; ?>" class="badge badge-success float-right ml-1 editModal" data-toggle="modal" data-target="#formModal" data-id="<?= $product['id'] ?>">Edit</a>
                        <a href="<?= BASEURL; ?>/product/detail/<?= $product['id']; ?>" class="badge badge-primary float-right ml-1">detail</a>
                    </li>
                    <?php endforeach; ?>
                </ul>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle">Create Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form action="<?= BASEURL; ?>/product/create" method="POST">
      <input type="hidden" name="id" id="id">
        <div class="form-group">
            <label for="product_name">Product Name</label>
            <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Fill Product Name">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Fill Price Product">
        </div>
        <div class="form-group">
            <label for="description">Example textarea</label>
            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
        </div>
      </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>