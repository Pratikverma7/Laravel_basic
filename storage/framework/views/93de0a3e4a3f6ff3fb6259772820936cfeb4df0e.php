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
      <form  method ="POST" action="<?php echo e(url('banner/insert')); ?>">
          <?php echo csrf_field(); ?>
         <label>Name : </label>
         <input type="text" name="name" placeholder="name" class="form-control">
         <br>
         <br>

         <label>College : </label>
           <select name="college" class="form-control">
             <option >select</option>
             <option value="rjit">Rustamji Institute of Technology</option>
             <option value="mits">Madhav institue of Technology</option>
             <option value="itm">Indian institue of information Technology</option>
             <option value="other">ITM</option>
             <option value="other">Others</option>

         </select>
         <br>
         <br>
           
           <label>Degination: </label>
        <select name="position" class="form-control">
          <option>select</option>
          <option value="admin">Admin</option>
          <option value="student">Student</option>
          <option value="teacher">Teacher</option>
          <option value="staff">Staff</option>
          <option value="principal">Principal</option>

        </select>
         <br>
         <br>
         <label>Phone : </label>
         <input type="text" name="phone"  class="form-control">
         <br>
         <br>
         <label>E-mail : </label>
         <input type="text" name="email"  class="form-control">
         <br>
         <br>
          <label>Gender : </label>
         <input type="radio" name="gender" id="male" value="male" > Male
         <input type="radio" name="gender" id="female" value="female" > Female
         <br>
         <br>
         <label>Qualification : </label>
         <input type="checkbox" name="qualification" value="12th" > 12 <sup> th</sup>
         <input type="checkbox" name="qualification" value="10th" > 10 <sup> th</sup>
         <input type="checkbox" name="qualification" value="UG" > U.G
         <input type="checkbox" name="qualification" value="PG" > P.G
         <input type="checkbox" name="qualification" value="P.hd" > P.hd


         <br>
         <br><label>Image : </label>
         <input type="file" name="image" placeholder="address" class="form-control">
         <br>
         <br>       
       <button class="btn btn-info" type="submit">Submit</button>
         </form>
    </div>
  </div>
</body>
</html><?php /**PATH C:\Users\pratik verma\Desktop\laravel fresh\laravel_basic\resources\views/banner/index.blade.php ENDPATH**/ ?>