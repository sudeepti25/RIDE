<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $bio=$_POST['bio'];
    $skills=$_POST['skills'];
    $experience=$_POST['experience'];
            $sql="insert into portfolio(name,email,phone,bio,skills,experience) values('$name','$email','$phone','$bio','$skills','$experience')";
            $result=mysqli_query($con,$sql);
            if($result){
                //echo "login successful";
                $success=1;
            }else{
                die(mysqli_error($con));
            }
        }
    
?>
