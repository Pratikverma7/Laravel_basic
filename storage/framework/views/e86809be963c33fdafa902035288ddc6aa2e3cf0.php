<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- section start -->
<br>
<br>
<br>
<section>
  <div class="container-fluid">
    <div class="container">
    
           <table class="table shadow table-striped">
        <thead class="bg-info">
          <tr>
            <th>S.no</th>           
            <th> Name</th>
            <th>Phone</th>
            <th>POST</th>
            <th>Profile</th>
            <th>Action</th>
          </tr>
          <?php $__currentLoopData = $a; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        </thead>
        <tbody class="bg-light">
          
          <tr>
            <td scope="row"><?php echo e($data->id); ?></td>          
            <td scope="row"><?php echo e($data->name); ?></td>
            <td scope="row"><?php echo e($data->phone); ?></td>
            <td scope="row"><?php echo e($data->post); ?></td>

            <td scope="row"><img src="<?php echo e(asset('upload/'. $data->image)); ?>" / height="100px" width="100px"></td>          
            <td>
                <a href="<?php echo e(url('member/show/'.$data->id)); ?>"><button class="btn btn-primary">Show</button></a>              
                
                <a href="<?php echo e(url('member/edit/'.$data->id)); ?>"><button class="btn btn-warning">Edit</button></a>              
                <a href="<?php echo e(url('member/delete/'.$data->id)); ?>"><button class="btn btn-danger">Delete</button></a>
              </td>
          </tr>
       
        </tbody>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </table>
     
    </div>
  </div>
</section>
<!-- <section close> -->
</body>
</html><?php /**PATH C:\Users\pratik verma\Desktop\laravel fresh\laravel_basic\resources\views/Member/display.blade.php ENDPATH**/ ?>