<?php

include 'dbconnect.php';

if($_SERVER['REQUEST_METHOD']=='GET')
{
    $id=$_GET['id'];

}


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Reply to our question </title>
</head>

<body>

    <?php include 'navbar.php';  ?>

    <div class="container md-5 my-3"></div>
    <div class="container md-4">
        <div class="p-1 mb-4 bg-light rounded-3 md-4">
            <div class="container-fluid py-1 md-4">
                <h3 class="display-5 fw-bold">Change topic or description</h3>
                <p>This is some content from a media component. You can replace this with any content and adjust it as
                    needed.</p>
                <p><em>Created by: </em><strong>Suvendu</strong></p>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- name="title" -->
        <h3 class="text-center">Choice Any One</h3>
        <div class="p-1 mb-4 bg-light rounded-3 md-4 text-center">
            <a href="chnageTitle.php?id=<?php echo "$id"; ?>" class="btn btn-primary">Change Title</a>
            Click Button
            <a href="chnageDescription.php?id=<?php echo "$id"; ?>" class="btn btn-primary">Change Description</a>

        </div>
    </div>

    <div class="container">
        <marquee>
            <h3 class="text-center">Change Title Or Description</h3>
        </marquee>
    </div>

    <div class="container">
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Change Title Or Description</h1>
                <p class="col-md-8 fs-4">Be the first person to Change Title Or Description.</p>
            </div>
        </div>
    </div>


    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

</body>

</html>