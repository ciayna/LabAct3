    <!-- Products Start -->
    <div id="shop" class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Shop</h6>
                <h1 class="display-5 text-uppercase mb-0">Products For Your Best Friends</h1>
            </div>
            <div class="owl-carousel product-carousel">
            <?php foreach ($product as $pr): ?>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">

                        <img class="img-fluid mb-4" src="<?php echo base_url() . "/img/" . $pr['productImg']; ?>" alt="">
                        <h6 class="text-uppercase"><?= $pr['productName']; ?></h6>
                        <h6 class="text-primary mb-0"><?= $pr['productDescription'] ?></h6>
                        <label>Category</label>
                        <h6 class="text-primary mb-0"><?= $pr['productCategory'] ?></h6>
                        <label>Quantity</label>
                        <h6 class="text-primary mb-0"><?= $pr['productQuantity'] ?></h6>
                        <label>Price</label>
                        <h6 class="text-primary mb-0"><?= $pr['productPrice'] ?></h6>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-primary py-2 px-3" href=""><i class="bi bi-cart"></i></a>
                            <a class="btn btn-primary py-2 px-3" data-product-id="<?= $pr['id'] ?>" href="/productview"><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- Products End -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
