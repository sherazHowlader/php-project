<!DOCTYPE html>
<html lang="en">
<head>
	<title> <?php echo $title ?> </title>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1"/>
	<meta name="description" content=""/>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
		<a class="navbar-brand" href="action.php?page=home">
            <img src="https://logos-world.net/wp-content/uploads/2020/12/Lays-Logo.png" alt="" height="50" width="100">
        </a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="menu">
			<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="action.php?page=home">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="action.php?page=about">About</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Blog Category
					</a>
					<ul class="dropdown-menu">
						<?php foreach ($categories as $category) { ?>
							<li>
								<a class="dropdown-item"
								   href="action.php?page=category&&id=<?php echo $category['id'] ?>"
								>
									<?php echo $category['name'] ?>
								</a>
							</li>
						<?php } ?>
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled">Contact</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
