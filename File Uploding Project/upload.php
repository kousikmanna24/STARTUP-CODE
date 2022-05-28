<?php

include 'dbcon.php';

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $file = $_FILES['file'];

    //print_r($file);
    $filename = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];

    if($fileerror == 0){
        $destfile = 'Upload_img/'.$filename;
        //echo "$destfile";
        move_uploaded_file($filepath, $destfile);

        $insertquery = "insert into upload_file(email, uploded_file) values('$email', '$destfile')";
        $query = mysqli_query($conn,$insertquery);

        if($query){
            header('Location: http://localhost/PHP%20Project/File%20Uploding%20Project/index.php');
            echo "Inserted Successfully";

        }else{
            echo "Something Went Wrong";
        }

    }
}else{
    echo "No Button Has been clicked";
}

?>
