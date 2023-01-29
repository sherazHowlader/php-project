<?php include 'header.php'; ?>

<div id="slider" class="carousel carousel-dark slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#slider" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">

        <div class="carousel-item active" data-bs-interval="1800">
            <img src="https://i.pinimg.com/736x/b5/d0/0b/b5d00b454a6d058744a80de860ea1c48.jpg" class="d-block w-100"
                 style="height: 650px">
            <div class="carousel-caption d-none d-md-block">
                <h5> Wellcome to our website </h5>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, quidem! </p>
            </div>
        </div>
							<?php foreach ($blogs as $blog) { ?>
           <div class="carousel-item" data-bs-interval="1800">
               <img src="assets/image/<?php echo $blog['image'] ?>" class="d-block w-100" style="height: 650px">
               <div class="carousel-caption d-none d-md-block">
                   <h5 class="text-info"><?php echo $blog['title'] ?></h5>
                   <a class="btn btn-danger" href="action.php?page=blog-details&&id=<?php echo $blog['id'] ?>"><b>Read
                           More...</b></a>
               </div>
           </div>
							<?php } ?>
    </div>
    <button class="carousel-control-prev " type="button" data-bs-target="#slider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<section class="py-5 bg-info">
    <div class="container">
        <h1 class="text-center mb-4"> Customer Review </h1>
        <div class="row">
											<?php foreach ($reviews as $review) { ?>
               <div class="col-md-4">
                   <div class="card mb-2">
                       <div class="card-body">
                           <p> <?php echo $review['opinion']; ?> </p>
                           <div class="d-flex justify-content-end">
                               <small style="font-variant: small-caps;font-weight: bold">~<?php echo $review['name']; ?></small>
                           </div>
                       </div>
                   </div>
               </div>
											<?php } ?>
        </div>
    </div>
</section>

<section class="py-5 bg-success">
    <div class="container">
        <h1 class="text-center mb-4 text-info"> Our Recent Post </h1>
        <div class="row">
				<?php foreach ($blogs as $blog) { ?>
               <div class="col-md-4">
                   <div class="card mb-2" style="height: 550px">
                       <img src="assets/image/<?php echo $blog['image'] ?>" height="350" width="100%">
                       <div class="card-body">
                           <h3 class="text-center"> <?php echo $blog['title'] ?> </h3>
                           <hr/>
                           <p><?php echo substr($blog['description'], 0, 100) . '....'; ?></p>
                           <p> Lorem ipsum dolor sit amet. </p>

                           <div class="d-flex justify-content-end">
                               <a class="btn btn-outline-info"
                                  href="action.php?page=blog-details&&id=<?php echo $blog['id'] ?>"><b>Read More...</b></a>
                           </div>
                       </div>
                   </div>

               </div>
											<?php } ?>
        </div>
    </div>
</section>

<section class="py-5 bg-secondary">
    <div class="container">
        <h1 class="text-center mb-4 text-white"> Last Week Post </h1>
        <div class="row">
											<?php foreach ($oldBlogs as $oldBlog) { ?>
               <div class="col-md-6">
                   <div class="card mb-2">
                       <div class="card-body">
                           <div class="row">
                               <div class="col-md-6">
                                   <img src="assets/image/<?php echo $oldBlog['image'] ?>" height="100%" width="100%">
                               </div>

                               <div class="col-md-6">
                                   <h3 class="text-center"> <?php echo $oldBlog['title'] ?> </h3>
                                   <p><?php echo substr($oldBlog['description'], 0, 70) . '....'; ?></p>

                                   <div class="d-flex justify-content-end">
                                       <a class="btn btn-outline-warning"
                                          href="action.php?page=blog-details&&id=<?php echo $oldBlog['id'] ?>"><b>Read
                                               More...</b></a>
                                   </div>
                               </div>
                           </div>


                       </div>
                   </div>

               </div>
											<?php } ?>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>
