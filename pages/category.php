<?php include 'header.php'; ?>


<section class="py-5 bg-success">
	<div class="container">
		<div class="row">
            <?php foreach ($categoryBlogs as $categoryBlog) { ?>
				<div class="col-md-4">
					<div class="card " style="height: 550px">
						<img src="assets/image/<?php echo $categoryBlog['image'] ?>" height="350" width="100%">
						<div class="card-body">
							<h3 class="text-center"> <?php echo $categoryBlog['title'] ?> </h3>
							<hr/>
							<p><?php echo substr($categoryBlog['description'], 0, 100) . '....'; ?></p>
							<p> Lorem ipsum dolor sit amet </p>
                            <div class="d-flex justify-content-end">
							    <a class="btn btn-info" href="action.php?page=blog-details&&id=<?php echo $categoryBlog['id'] ?>">Read More...</a>
                            </div>
						</div>
					</div>

				</div>
            <?php } ?>
		</div>
	</div>
</section>


<?php include 'footer.php'; ?>
