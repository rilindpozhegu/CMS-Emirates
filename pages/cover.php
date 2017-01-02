<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Emirates Graphic CMS</title>
    <!-- Tab Logo -->
    <link rel="icon" href="img/es_logo.png">
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Navigationbar Style -->
    <link rel="stylesheet" type="text/css" href="../dist/css/navigavbar-style.css">

    <!-- Main style -->
    <link rel="stylesheet" type="text/css" href="../dist/css/cover-page.css">


    <link href="../dist/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />


</head>

<body>

    <div id="wrapper">

<!-- Navigation Bar  -->

<?php
    include('nav.php');
?>

<!-- End Of navigationbar  -->


        <!-- Page Content -->
        <div id="page-wrapper" class="cover-wrapper">
            <div class="container">
                <div class="kv-main col-md-4">
                <p>Upload Cover Photo:</p>
                    <div class="page-header">
                    </div>
                    <form enctype="multipart/form-data">
                        <input id="file-fr" name="file-fr[]" type="file" multiple>
                    </form>
                </div>

                <div class="kv-main col-md-4">
                <p>Upload Logo:</p>
                    <div class="page-header">
                    </div>
                    <form enctype="multipart/form-data">
                        <input id="file-es" name="file-es[]" type="file" multiple>
                    </form>
                </div>

                <div class="kv-main col-md-4">
                <p>Upload Flaticon:</p>
                    <div class="page-header">
                    </div>
                    <form enctype="multipart/form-data">
                        <input id="file-al" name="file-al[]" type="file" multiple>
                    </form>
                </div>

            </div>
        </div>




    </div>    


    <!-- <script type="text/javascript" src="../dist/upload-image.js"></script> -->
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Upload image -->
    <script src="../dist/js/fileinput.js" type="text/javascript"></script>
    <script type="text/javascript" src="../dist/js/upload-image.js"></script>

   
</body>

</html>
