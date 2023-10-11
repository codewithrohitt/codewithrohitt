<?php
session_start();
require 'dbcon.php';
?>
<?php include('includes/header.php');?>
    <div class="container mt-5">
       <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Patient Edit
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                    <?php 
                    if(isset($_GET['id']))
                    {
                        $patient_id = mysqli_real_escape_string($con,$_GET['id']);
                        $query = "SELECT * FROM patients WHERE id='$patient_id' ";
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            $patient = mysqli_fetch_array($query_run);
                            ?>


                        <form action="code.php" method="POST">
                            <input type="hidden" name="patient_id" value="<?= $patient['id']; ?>">
                            <div class="mb-3">
                                <label>Patient Name</label>
                                <input type="text" name="name" value="<?=$patient['name'];?>" class="form-control" placeholder="e.g:- Rohit Singh" Required>
                            </div>
                            <div class="mb-3">
                                <label>Patient Email</label>
                                <input type="email" name="email" value="<?=$patient['email'];?>" class="form-control" placeholder="e.g:- rohit12@gmail.com" Required>
                            </div>
                            
                            <div class="mb-3">
                                <label>Address</label>
                                <input type="text" name="address" value="<?=$patient['address'];?>" class="form-control" placeholder="e.g:-123,Bhestan" required>
                            </div>
                            <div class="mb-3">
                                <label>ZIP Code</label>
                                <input type="number" name="code" value="<?=$patient['code'];?>" class="form-control" placeholder=" 39XX23"required>
                            </div>
                            
                            <div class="mb-3">
                                <label>City, State</label>
                                <input type="text" name="city" value="<?=$patient['city'];?>" class="form-control" placeholder="city, state" required>
                            </div>
                            <div class="mb-3">
                                <label>Phone</label>
                                <input type="phone" name="state" value="<?=$patient['phone'];?>" class="form-control" placeholder="70XX40XX55"required>
                            </div>
                            <div class="mb-3">
                                <label>Date Of Birth</label>
                                <input type="date" name="dob" value="<?=$patient['dob'];?>" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Registration Date</label>
                                <input type="date" name="regdate" value="<?=$patient['regdate'];?>" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="myfile">Select a Reports File:</label><br>
                                <input type="file" id="myfile" value="<?=$patient['myfile'];?>" name="myfile" required><br>
                                
                            </div>
                            <div class="mb-3">
                                <label>Patient Gender</label><br>
                                <input type="radio" name="gender" value="<?=$patient['gender'];?>" value="male"> Male<br>
                                <input type="radio" name="gender" value="<?=$patient['gender'];?>" value="female"> Female

                            </div>
                            <div class="mb-3">
                                <label>Is the patient younger than 18?</label><br>
                                <input type="text" name="adult" value="<?=$patient['adult'];?>" class="form-control" placeholder="Yes or No" required>
                            </div>
                            
                            <div class="mb-3">
                                <label>Taking any medications, currently?</label><br>
                                <input type="text" name="medicine" value="<?=$patient['medicine'];?>" class="form-control" placeholder="Yes or No" required>
                                
                            </div>
                            <div class="mb-3">
                                <button type="Submit" name="update_patient" class="btn btn-primary">
                                     Update Patient

                                </button>
                            </div>
                            
                        </form>

                        

                        <?php
                        }
                        else
                        {
                              echo"<h4> No Such Id Found </h4>";
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('includes/footer.php');?>