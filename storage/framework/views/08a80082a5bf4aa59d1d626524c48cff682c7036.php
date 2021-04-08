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
<body>
	<div class="container-fluid">
		<div class="container col-lg-8 m-auto d-block bg-light">
			<form  method ="POST" action="<?php echo e(url('teacher/update')); ?>">
	        <?php echo csrf_field(); ?>
	        <input type="text" name="id"  value="<?php echo e($data->id); ?>">
	       <label>Name : </label>
	       <input type="text" name="name" placeholder="name" class="form-control" value="<?php echo e($data->name); ?>">
	       <br>
	       <br>

	       <label>College : </label>
           <select name="college" class="form-control"  value="<?php echo e($data->college); ?>">
    	       <option >select</option>
    	       <option value="rjit" <?php if($data->college=='rjit'): ?> selected <?php endif; ?>>Rustamji Institute of Technology</option>
    	       <option value="mits"  <?php if($data->college=='mits'): ?> selected <?php endif; ?>>MITS</option>
    	       <option value="itm"  <?php if($data->college=='itm'): ?> selected <?php endif; ?>>ITM</option>
    	       <option value="other"  <?php if($data->college=='other'): ?> selected <?php endif; ?>>Others</option>
    	   </select>
    	   <br>
    	   <br>
           
           <label>Branch: </label>
	      <select name="branch" class="form-control"  value="<?php echo e($data->branch); ?>">
	      	<option>select</option>
	      	<option value="I.T">I.T</option>
	      	<option value="C.S">C.S</option>
	      	<option value="E.C">E.C</option>
	      	<option value="E.E">E.E</option>
	      	<option value="M.E">M.E</option>

	      </select>
	       <br>
	       <br>
	       <label>Salary : </label>
	       <input type="text" name="salary"  class="form-control"  value="<?php echo e($data->salary); ?>">
	       <br>
	       <br>
    	   <label>Subject : </label>
	       <select name="subject" class="form-control" placeholder="Subject"  value="<?php echo e($data->subject); ?>">
	       	<option >select</option>
	       	<option value="O.S">Operating System</option>
	       	<option value="C.N">Computer Network</option>
	       	<option value="D.S">Data structure</option>
	       	<option value="DBMS">DBMS</option>

	       </select>
	       <br>
	       <br>
           <label>address : </label>
	       <input type="text" name="address" placeholder="address" class="form-control"  value="<?php echo e($data->address); ?>">
	       <br>
	       <br>
	       <label>Phone : </label>
	       <input type="text" name="phone" placeholder="address" class="form-control"  value="<?php echo e($data->phone); ?>">
	       <br>
	       <br><label>Email: </label>
	       <input type="text" name="email" placeholder="address" class="form-control"  value="<?php echo e($data->email); ?>">
	       <br>
	       <br>
	       <label>Gender : </label>
	       <input type="radio" name="gender" id="male" > Male
	       <input type="radio" name="gender" id="female" > Female
	       <br>
	       <br>

	     
           <button class="btn btn-info" type="submit">Submit</button>
         </form>
		</div>
	</div>
</body>
</html><?php /**PATH C:\Users\pratik verma\Desktop\laravel fresh\laravel_basic\resources\views/teacher/edit.blade.php ENDPATH**/ ?>