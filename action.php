<?php
require_once 'vendor/autoload.php';
use App\classes\Category;
use App\classes\Blog;
use App\classes\CustomerReview;

$category = new Category();
$categories = $category->getAllCategory();

if (isset($_GET['page'])){
    if ($_GET['page'] == 'home'){
        $blog = new Blog();
        $blogs = $blog->getLastThreeBlog();

								$haha = new Blog();
        $oldBlogs = $haha->getfirstFourBlog();

								$CR = new CustomerReview();
								$reviews = $CR->getAllReview();

        $title = 'Home';
        include 'pages/home.php';
    }elseif ($_GET['page'] == 'about'){
        $title = 'About Us';
        include 'pages/about.php';
    }elseif ($_GET['page'] == 'category'){
        $categoryId = $_GET['id'];
        $blog = new Blog();
        $categoryBlogs = $blog->getBlogByCategoryId($categoryId);

        $title = 'Category';
        include 'pages/category.php';
    }
    elseif ($_GET['page'] == 'blog-details'){
        $blogId = $_GET['id'];
        $blog = new Blog();
        $single_blogs = $blog->getBlogId($blogId);

        $title = 'Blog- Details';
        include 'pages/blog-details.php';
    }elseif ($_GET['page'] == 'contact'){
        $title = 'Contact';
        include 'pages/contact.php';
    }
}