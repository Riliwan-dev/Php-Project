
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
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
    <label for="post_tags">Post Tags</label>
    <input type="text" class="btn btn-primary" name="post_tags" type="submit" name="create_post" value="Publish Post">
</div>

</form>

  
</body>
</html>