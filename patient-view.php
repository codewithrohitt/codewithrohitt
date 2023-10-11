<?php
require 'dbcon.php';
?>
<?php include('includes/header.php');?>
    <div class="container mt-5">
       
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Patient View Details
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
                            
                            <div class="mb-3">
                                <label>Patient Name</label>
                                <p class="form-control" >
                                <?=$patient['name'];?>

                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Patient Email</label>
                                <p class="form-control" >
                                <?=$patient['email'];?>
                            

                                </p>
                            </div>
                            
                            <div class="mb-3">
                                <label>Address</label>
                                <p class="form-control" >
                                <?=$patient['address'];?>
                            

                                </p>
                                
                            </div>
                            <div class="mb-3">
                                <label>ZIP Code</label>
                                <p class="form-control" >
                                <?=$patient['code'];?>
                            

                                </p>
                            </div>
                            
                            <div class="mb-3">
                                <label>City, State</label>
                                <p class="form-control" >
                                <?=$patient['city'];?>
                            

                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Phone</label>
                                <p class="form-control" >
                                <?=$patient['phone'];?>
                            

                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Date Of Birth</label>
                                <p class="form-control" >
                                <?=$patient['dob'];?>
                            

                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Registration Date</label>
                                <p class="form-control" >
                                <?=$patient['regdate'];?>
                            

                                </p>
                            </div>
                            <div class="mb-3">
                                <label for="myfile">Select a Reports File:</label><br>
                                <p class="form-control" >
                                <?=$patient['myfile'];?>
                            

                                </p>
                                
                            </div>
                            <div class="mb-3">
                                <label>Patient Gender</label><br>
                                <p class="form-control" >
                                <?=$patient['gender'];?>
                            

                                </p>

                            </div>
                            <div class="mb-3">
                                <label>Is the patient younger than 18?</label><br>
                                <p class="form-control" >
                                <?=$patient['adult'];?>
                            

                                </p>
                            </div>
                            
                            <div class="mb-3">
                                <label>Taking any medications, currently?</label><br>
                                <p class="form-control" >
                                <?=$patient['medicine'];?>
                            

                                </p>
                                
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