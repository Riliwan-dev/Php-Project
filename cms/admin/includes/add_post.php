 <?php 
 if(isset($_POST['create_post'])){
    $post_title = $_POST['title'];
    $post_category_id = $_POST['post_category_id'];
    $post_author = $_POST['author'];
    $post_status = $_POST['post_status'];

    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];

    $post_tags = $_POST['post_tags'];
    $post_content = $_POST['post_content'];
    $post_date = date('d-m-y');
    $post_comment_count = 4;


    move_uploaded_file($post_image_temp, "../image/$post_image");

    INSERT INTO `posts`(`post_id`, `post_categories_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10])



 }
 
 
 
 ?>
 
 
 <form action="" method="post" enctype="multipart/form-data">

<div class="from-group">
    <label for="Title">Post Title</label>
    <input type="text" class="form-control" name="title">
</div>

<div class="from-group">
    <label for="post_category">Post Category Id</label>
    <input type="text" class="form-control" name="post_category_id">
</div>


<div class="from-group">
    <label for="Title">Post Author</label>
    <input type="text" class="form-control" name="author">
</div>

<div class="from-group">
    <label for="post_status">Post Status</label>
    <input type="text" class="form-control" name="post_status">
</div>

<div class="from-group">
    <label for="post_image">Post Image</label>
    <input type="file" name="image">
</div>

<div class="from-group">
    <label for="post_tags">Post Tags</label>
    <input type="text" class="form-control" name="post_tags">
</div>

<div class="from-group">
    <label for="post_content">Post Content</label>
    <textarea type="text" class="form-control" name="post_content" id="" cols="30" rows="10">
</textarea>
</div>

<div class="from-group">
    <input type="submit" class="btn btn-primary" name="create_post" value="Publish Post">
</div>

</form> 