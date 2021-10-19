<?php 
    include "koneksi.php";
    session_start();
    // $name=$_POST['name'];
    $date_birth=$_POST['date_birth'];
    $address=$_POST['address'];
    $age=$_POST['age'];
    $education=$_POST['education'];
    $gender=$_POST['gender'];
    $phone_number=$_POST['phone_number'];
    $id_class=$_POST['id_class'];
    $phone_number=$_POST['phone_number'];
    $email=$_POST['email'];

    $update=mysqli_query($conn,"update user set date_birth='".$date_birth."',address='".$address."', age='".$age."', education='".$education."', gender='".$gender."', phone_number='".$phone_number."', id_class='".$id_class."' where email = '".$email."' ") ;
    if($update){
        echo "<script>alert('Success set your profile');location.href='signin.php';</script>";
    }else{
        echo "<script>alert('Fail set your profile');location.href='set-profile.php';</script>";
    }

?>