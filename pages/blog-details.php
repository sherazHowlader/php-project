<?php include 'header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-capitalize"> <?php echo $single_blogs['title'] ?> </h1>
                <hr>
                <div class="d-flex justify-content-center">
                    <img src="assets/image/<?php echo $single_blogs['image'] ?>" alt="" width="70%" height="450">
                </div>
                <p class="mt-4 blog_des"><?php echo $single_blogs['description'] ?></p>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
