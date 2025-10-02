<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <?php
      $fetchMyAdminData = $this->db->query("SELECT * FROM admin_directory WHERE portal_uid = '{$_SESSION['acitveAdmin']}'");
      foreach ($fetchMyAdminData->result() as $row)
      {
        $portalUID = $row->portal_uid;
      }
    ?>

    <div class="container mt-4">
      <form method="POST" action="<?php echo base_url('passwordUpdate'); ?>">
      <div class="mb-3">
        <label class="form-label">Active User</label>
        <input type="text" class="form-control" id="activeUserUID" name="activeUserUID" value="<?php echo $portalUID; ?>" readonly>
      </div>

      <div class="mb-3">
        <label class="form-label">Set New Password</label>
        <input type="text" class="form-control" id="newPassword" name="newPassword">
      </div>

      <div class="mb-3">
       <label class="form-label">Confirm New Password</label>
        <input type="text" class="form-control" id="cnfPassword" name="cnfPassword">
      </div>

      

      <button type="submit" class="btn btn-primary" name="updatePassword">Submit</button>
    </form>

    </div>
    
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>