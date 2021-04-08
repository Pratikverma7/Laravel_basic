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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- section start -->
<br>
<br>
<br>
<section>
  <div class="container-fluid">
    <div class="container shadow">
      <div class="card bg-info">
        <br>
        <h5 style="padding-left: 20px"> Profile :     <img src="<?php echo e(asset('upload/'. $a->image)); ?>" / height="150px" width="160px"></h5>
        <div class="card-body bg-light">
         <h5 class="text-dark ">Registration Id :<?php echo e($a->id); ?></h5>
         <h5 class="text-dark "> Name : <?php echo e($a->name); ?></h5>
         <h5 class="text-dark">Email :<?php echo e($a->email); ?></h5>
         <h5 class="text-dark ">Phone : <?php echo e($a->phone); ?></h5>
         <h5 class="text-dark ">Post : <?php echo e($a->post); ?></h5>
         <h5 class="text-dark">Gender : <?php echo e($a->gender); ?></h5>
         <h5 class="text-dark ">Education : <?php echo e($a->education); ?></h5>
          
        </div>
      </div>
       
    </div>
  </div>
</section>
<!-- <section close> -->
</body>
</html><?php /**PATH C:\Users\pratik verma\Desktop\laravel fresh\laravel_basic\resources\views/Member/show.blade.php ENDPATH**/ ?>