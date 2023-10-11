<?php
session_start();
?>
<?php include('includes/header.php');?>
    <div class="container mt-5">
       <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Patient Add
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <div class="mb-3">
                                <label>Patient Name</label>
                                <input type="text" name="name" class="form-control" placeholder="e.g:- Rohit Singh" Required>
                            </div>
                            <div class="mb-3">
                                <label>Patient Email</label>
                                <input type="email" name="email" class="form-control" placeholder="e.g:- rohit12@gmail.com" Required>
                            </div>
                            
                            <div class="mb-3">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" placeholder="e.g:-123,Bhestan" required>
                            </div>
                            <div class="mb-3">
                                <label>ZIP Code</label>
                                <input type="number" name="code" class="form-control" placeholder=" 39XX23"required>
                            </div>
                            
                            <div class="mb-3">
                                <label>City, State</label>
                                <input type="text" name="city" class="form-control" placeholder="city, state" required>
                            </div>
                            <div class="mb-3">
                                <label>Phone</label>
                                <input type="phone" name="state" class="form-control" placeholder="70XX40XX55"required>
                            </div>
                            <div class="mb-3">
                                <label>Date Of Birth</label>
                                <input type="date" name="dob" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Registration Date</label>
                                <input type="date" name="regdate" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="myfile">Select a Reports File:</label><br>
                                <input type="file" id="myfile" name="myfile" required><br>
                                
                            </div>
                            <div class="mb-3">
                                <label>Patient Gender</label><br>
                                <input type="radio" name="gender" value="male"> Male<br>
                                <input type="radio" name="gender" value="female"> Female

                            </div>
                            <div class="mb-3">
                                <label>Is the patient younger than 18?</label><br>
                                <input type="text" name="adult" class="form-control"placeholder="Yes or No" required>
                            </div>
                            
                            <div class="mb-3">
                                <label>Taking any medications, currently?</label><br>
                                <input type="text" name="medicine" class="form-control" placeholder="Yes or No" required>
                                
                            </div>
                            <div class="mb-3">
                                <button type="Submit" name="save_patient" class="btn btn-primary"> Save Patient</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/footer.php');?>