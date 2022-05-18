<?php
$newName="";
$alert=FALSE;
$Showmsg=FALSE;
include 'dbconnect.php';

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $title=$_POST['title'];
    $description=$_POST['description'];

    $sql="SELECT * FROM `topic` WHERE title='$title'";
    $result=mysqli_query($conn,$sql);
    $numrow=mysqli_num_rows($result);
    if($numrow==0)
    {    
        if(isset($_FILES['image']))
        {
        
           $img_name=$_FILES['image']['name'];
           $oldName=$_FILES['image']['name'];
        
           $img_name=preg_replace("/\s+/","_",$img_name);
        
           $img_type=$_FILES['image']['type'];
           $img_tmp_name=$_FILES['image']['tmp_name'];
           $img_error=$_FILES['image']['error'];
           $img_size=$_FILES['image']['size'];
        
        
            $img_ext=pathinfo($img_name,PATHINFO_EXTENSION);
            $img_name=pathinfo($img_name,PATHINFO_FILENAME);
        
            $newName=$img_name.date("mjYHis").".".$img_ext;
        
           move_uploaded_file($img_tmp_name,"others/".$newName);

           $sql="INSERT INTO `topic` (`sl`, `title`, `describtion`, `imgname`, `date_Time`) VALUES (NULL, '$title', '$description', '$newName', current_timestamp())";
    
           $result=mysqli_query($conn,$sql);
           if($result)
           {
               $Showmsg=TRUE;
               // echo "<h1>Insert successfull ✌</h1>";
           }
        
        }
        // $sql="INSERT INTO `topic` (`sl`, `title`, `describtion`, `imgname`, `date_Time`) VALUES (NULL, '$title', '$description', '$newName', current_timestamp())";
    
        // $result=mysqli_query($conn,$sql);
        // if($result)
        // {
        //     $Showmsg=TRUE;
        //     // echo "<h1>Insert successfull ✌</h1>";
        // }
    }
    else 
    {
        $alert=TRUE;
    }


}


?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Upload Center | SC</title>
</head>

<body>
    <?php include 'navbar.php';  ?>
    <?php
    if($Showmsg==TRUE)
    {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Successfull!</strong> Title and description (Picture ) Uploaded.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    if($alert==TRUE)
    {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Warning!</strong> Title already present.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }

    ?>
    <div class="container my-5">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="titleTopic" class="form-label"><b>Title </b></label>
                <input type="text" name="title" class="form-control" id="titleTopic" required>
                <div id="emailHelp" class="form-text"><em>Give the correct Title to the topic.</em></div>
            </div>

            <div class="form-floating mb-3">
                <textarea class="form-control" name="description" placeholder="Leave a comment here"
                    id="floatingTextarea2" style="height: 100px" required></textarea>
                <label for="floatingTextarea2">Description</label>
            </div>

            <div class="mb-3">
               
                <label for="image">Your Topic Related Image.</label> <br>
                <input type="file" name="image" id="image" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
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