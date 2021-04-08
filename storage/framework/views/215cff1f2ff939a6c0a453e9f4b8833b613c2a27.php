<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body class="bg-warning">
	<br><br>
  <div class="container-fluid">  
  	<div class="container bg-light">
  		<h3 class="text-dark text-center">
  			Staff Registration
  		</h3>
  		<br>
  		<form method="POST" action="<?php echo e(url('member/update')); ?>" enctype="multipart/form-data">
  			 <?php echo csrf_field(); ?>
         
          <div class="form-row">
                  <div class="form-group col-md-6">
                  <label>Name</label>
                  <input type="text" class="form-control"  placeholder="name" name="name" value="<?php echo e($a->name); ?>">
                   </div>
                <div class="form-group col-md-6">
                <label >Email</label>
                <input type="text" class="form-control"  placeholder="Email" name="email" value="<?php echo e($a->email); ?>">
                </div>
          </div>
      <div class="form-group">
      <label >Degination</label>
      <select type="text" class="form-control"  placeholder="choose" name="post">
      	<option>Select </option>
      	<option value="admin" <?php if($a->post=='admin'): ?> selected <?php endif; ?>>Admin</option>
      	<option value="student" <?php if($a->post=='student'): ?> selected <?php endif; ?>>Student</option>
      	<option value="staff" <?php if($a->post=='staff'): ?> selected <?php endif; ?>>Staff</option>
      	<option value="teacher" <?php if($a->post=='teacher'): ?> selected <?php endif; ?>>Teacher</option>

      </select>
      </div>

       <div class="form-group">
      <label >Phone</label>
      <input type="number" class="form-control"  placeholder="phone " name="phone" value="<?php echo e($a->phone); ?>">
      </div>

     <div class="form-row">
     <div class="form-group col-md-6">
      <label>Gender : </label>
      <input type="radio" id="male" value="male" name="gender" <?php if($a->gender=='male'): ?> checked <?php endif; ?>> Male
      <input type="radio" id="female" value="female" name="gender" <?php if($a->gender=='female'): ?> checked <?php endif; ?>> Female
      <input type="radio" id="other" value="other" name="gender" <?php if($a->gender=='other'): ?> checked <?php endif; ?>> Other

    </div>

    <div class="form-group col-md-6">
      <label>Education : </label>
      <input type="checkbox"   value="12th" name="education[]" <?php if(strpos($a->education,'12th')!==false): ?> checked <?php endif; ?> > 12th
      <input type="checkbox"   value="U.G" name="education[]" <?php if(strpos($a->education,'U.G')!==false): ?> checked <?php endif; ?> > U.G
      <input type="checkbox"   value="P.G" name="education[]"  <?php if(strpos($a->education,'P.G')!==false): ?> checked <?php endif; ?>> P.G       
    </div>

      <div class="form-group">
      <label >Image</label>
      <input type="file"  name="image">
      <img src="<?php echo e(asset('upload/'. $a->image)); ?>" / height="100px" width="100px">
      </div>
   </div>
  <button type="submit" class="btn btn-primary" name="submit">UPDATE</button>
</form>
<br><br>
  	</div>
  </div>
</body>
</html><?php /**PATH C:\Users\pratik verma\Desktop\laravel fresh\laravel_basic\resources\views/Member/edit.blade.php ENDPATH**/ ?>