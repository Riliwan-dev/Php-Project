<?php include('includes/admin_header.php') ;?>

    <div id="wrapper">

        <!-- Navigation -->
       
        
        <?php include('includes/admin_navigation.php') ;?>


        <div id="page-wrapper">


            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                        <h1 class="page-header">
                            Welcome To Admin Page
                            <small>Author</small>
                        </h1>

                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Author</th>
                                    <th>Title</th>
                                    <th>Categories</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Tags</th>
                                    <th>Comments</th>
                                    <th>Date</th>
                                </tr>
                            </thead>

                            <tbody>
                            <?php 
                             $query = "SELECT * FROM posts";
                            $select_posts = mysqli_query($conn,$query);
                            while($row = mysqli_fetch_assoc($select_posts)){ 

                                $post_id = $row['post_id'];
                                $post_author = $row['post_author'];
                                $post_title = $row['post_title'];
                                $post_category_id = $row['post_categories_id'];
                                $post_status = $row['post_status'];
                                $post_image = $row['post_image'];
                                $post_tags = $row['post_tags'];
                                $post_comment_count = $row['post_comment_count'];
                                $post_date = $row['post_date'];

                                echo "<tr>";
                                echo "<td>$post_id</td>";
                                echo "<td>$post_author</td>";
                                echo "<td>$post_title</td>";
                                echo "<td>$post_category_id</td>";
                                echo "<td>$post_status</td>";
                                echo "<td>$post_image</td>";
                                echo "<td>$post_tags</td>";
                                echo "<td>$post_comment_count</td>";
                                echo "<td>$post_date </td>";
                                echo "<td></td>";
                                echo "</tr>";

                            }?> 

                            <!-- Alternative code -->
                            <!-- <tr> -->

                                <!-- <td><?php //echo $post_id;?></td>
                                <td><?php// echo $post_author;?> </td>
                                <td><?php //echo $post_title;?> </td>
                                <td><?php //echo $post_category_id;?> </td>
                                <td><?php// echo $post_status;?></td>
                                <td><?php //echo $post_image;?></td>
                                <td><?php //echo $post_tags;?></td>
                                <td><?php// echo $post_comment_count;?></td>
                                <td><?php// echo $post_date;?></td> -->
                          
                                <!-- <td><?php// echo {'post_categories_id'}?></td> -->

                                <?php// }?>
                            <!-- </tr> -->
                            <!-- End Alternative code -->


                        </tbody>
                        </table>

                       
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
       
             <!-- /#page-wrapper -->

<?php include('includes/admin_footer.php') ;?>


