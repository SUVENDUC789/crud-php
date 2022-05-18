<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Image & Topic upload center | SC</title>
</head>

<body>
    
    <?php include 'navbar.php';  ?>

    <div class="container">
        <h1 class="text-center">Your Topic and description .</h1>
        <div class="row">


            <?php

            include 'dbconnect.php';

            $sql="SELECT * FROM `topic` WHERE 1 ORDER BY `sl` DESC";
            $result=mysqli_query($conn,$sql);
            $numrow=mysqli_num_rows($result);
            for($i=0;$i<$numrow;$i++)
            {
                $row=mysqli_fetch_assoc($result);
                echo '
                <div class="col-md-4 my-3">
                <div class="card" style="width: 18rem;">
                <img src="others/'.$row['imgname'].'" class="card-img-top" alt="Image Mising"  height="250" width="50">
                <div class="card-body">
                    <h5 class="card-title">'.$row['title'].'</h5>
                    <p class="card-text ">'.$row['describtion'].'</p>
                    <a href="Update.php?id='.$row['sl'].'" class="btn btn-primary">Update Topic</a>
                    <a href="Card_delete.php?id='.$row['sl'].'" class="btn btn-danger">Delete Topic</a>
                </div>
            </div></div>

               ';
            }

    ?>
        </div>
    </div>




    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>