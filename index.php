<?php
    session_start();
    require 'dbcon.php';

?>

<?php include('includes/header.php');?>
    
  <div class="container mt-4">

  <?php include('message.php'); ?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Patient Details
              <a href="patient-create.php" class="btn btn-primary float-end">Add Patient</a>
            </h4>
          </div>
          <div class="card-body">
          <input type="text" placeholder="Search..">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Patient Name</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>ZIP Code</th>
                  <th>City</th>
                  <th>Phone</th>
                  <th>D.O.B</th>
                  <th>Registration Date</th>
                  <th>Report File</th>
                  <th>Gender</th>
                  <th>Adult</th>
                  <th>Medicine</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    $query = "SELECT * FROM patients";
                    $query_run = mysqli_query($con, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                       foreach($query_run as $patient)
                       {
                          ?>
                           <tr>
                                  <td><?=$patient['id']; ?></td>
                                  <td><?=$patient['name']; ?></td>
                                  <td><?=$patient['email']; ?></td>
                                  <td><?=$patient['address']; ?></td>
                                  <td><?=$patient['code']; ?></td>
                                  <td><?=$patient['city']; ?></td>
                                  <td><?=$patient['phone']; ?></td>
                                  <td><?=$patient['dob']; ?></td>
                                  <td><?=$patient['regdate']; ?></td>
                                  <td><?=$patient['myfile']; ?></td>
                                  <td><?=$patient['gender']; ?></td>
                                  <td><?=$patient['adult']; ?></td>
                                  <td><?=$patient['medicine']; ?></td>
                                  <td>
                                    <a href="patient-view.php?id=<?= $patient['id']; ?>" class="btn btn-info btn-sm">View</a>
                                    <a href="patient-edit.php?id=<?= $patient['id']; ?>" class="btn btn-success btn-sm">Edit </a>
                                    
                                    <form action="code.php" method="POST" class="d-inline">
                                          <button type="submit" name="delete_patient" value="<?=$patient['id'];?>" class="btn btn-danger btn-sm">Delete</a>

                                    </form>
                                  </td>
                             </tr>
                             <?php
                       }

                    }
                    else
                    {
                        echo "<h5> NO Record Found </h5>";
                    }

                ?>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include('includes/footer.php');?>

    