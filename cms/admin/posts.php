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

                     <?php 
                     if(isset($_GET['Source'])){
                        $source = $_GET['Source'];
                     }
                     else{
                        $source = '';
                     }

                     switch($source){
                        case '34';
                        echo 'Nice 34';
                        break;

                        case '120';
                        echo 'Nice 120';
                        break;

                        case '200';
                        echo 'Nice 200';
                        break;

                        default;
                        include ('includes/view_all_posts.php');
                        break;
                     }
                     
                     
                     
                     ?>
                       
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
       
             <!-- /#page-wrapper -->

<?php include('includes/admin_footer.php') ;?>


