<?php include 'header.php' ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product){ ?>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <img src="assets/image/library.png" alt="" class="img-fluid">
                    </div>
                    <div class="card-body">
                            <h4<?php echo $product['name']?></h4>
                            <p><?php echo $product['description']?></p>
                            <p><?php echo $product['price']?></p>
                        <hr>
                        <a href="action.php?page=details&id=<?php echo $product['id']?>" class="btn btn-primary">Details</a>

                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include 'footer.php' ?>
