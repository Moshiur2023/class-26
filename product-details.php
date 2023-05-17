<?php include 'header.php' ?>
<section class="py-5">
    <div class="container">
        <div class="card">
            <div class="row">
                <div class="col-md-4">
                    <img src="assets/image/<?php echo $product['image']?> " alt="" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <h4><?php echo $product['name']?></h4>
                    <h6><?php echo $product['category_name']?></h6>
                    <h6>brand name</h6>
                    <p><?php echo $product['price']?></p>
                    <p><?php echo $product['description']?></p>
                </div>

            </div>

        </div>

    </div>
</section>



<?php include 'footer.php' ?>
