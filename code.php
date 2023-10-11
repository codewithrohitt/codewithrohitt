<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_patient']))
{
   $patient_id = mysqli_real_escape_string($con, $_POST['delete_patient']);

   $query = "DELETE FROM patients WHERE id='$patient_id'";
   $query_run = mysqli_query($con, $query);
   
   if($query_run)
   {
      $_SESSION['message'] = "Patient Deleted Successfully";
      header("Location: index.php");
      exit(0);

   }
   else
   {
      $_SESSION['message'] = "Patient Not Deleted";
      header("Location: index.php");
      exit(0);

   }


}

if(isset($_POST['update_patient']))
{
   $patient_id = mysqli_real_escape_string($con, $_POST['patient_id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $code = mysqli_real_escape_string($con, $_POST['code']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $regdate = mysqli_real_escape_string($con, $_POST['regdate']);
    $myfile = mysqli_real_escape_string($con, $_POST['myfile']);
    $gender= mysqli_real_escape_string($con, $_POST['gender']);
    $adult = mysqli_real_escape_string($con, $_POST['adult']);
    $medicine = mysqli_real_escape_string($con, $_POST['medicine']);

    $query = "UPDATE patients SET  name='$name',email='$email',address='$address',code='$code',city='$city',phone='$phone',dob='$dob',regdate='$regdate',myfile='$myfile',gender='$gender',adult='$adult',medicine='$medicine'
        WHERE id='$patient_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
      $_SESSION['message'] = "Patient Updated Successfully";
      header("Location: index.php");
      exit(0);
    }
    else
    {
      $_SESSION['message'] = "Patient Not Updated";
      header("Location: index.php");
      exit(0);

    }






}

if(isset($_POST['save_patient']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $code = mysqli_real_escape_string($con, $_POST['code']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $regdate = mysqli_real_escape_string($con, $_POST['regdate']);
    $myfile = mysqli_real_escape_string($con, $_POST['myfile']);
    $gender= mysqli_real_escape_string($con, $_POST['gender']);
    $adult = mysqli_real_escape_string($con, $_POST['adult']);
    $medicine = mysqli_real_escape_string($con, $_POST['medicine']);

    $query = "INSERT INTO patients (name,email,address,code,city,phone,dob,regdate,myfile,gender,adult,medicine) VALUES 
       ('$name','$email','$address','$code','$city','$phone','$dob','$regdate','$myfile','$gender','$adult','$medicine')";


    $query_run = mysqli_query($con, $query);
     if($query_run)
     {
      $_SESSION['message']= "Patient Created Successfully";
      header("Location: patient-create.php");
      exit(0);
     } 
     else
     {
      $_SESSION['message']= "Patient Not Created ";
      header("Location: patient-create.php");
      exit(0);
     }


}
?>