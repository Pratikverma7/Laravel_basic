<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- section start -->
</head>
<body>
	
<br>
<br>
<br>
<section>
  <div class="container-fluid">
    <div class="container">
      <table class="table shadow table-striped" enctype="multipart/form-data">
        <thead class="bg-primary">
          <tr>
            <th>S.no</th>           
            <th>Student Name</th>
            <th>college</th>
            <th>email</th>
            <th>Phone</th>
            <th>Action</th>
          </tr>
          @foreach($data as $a)
        </thead>
        <tbody class="bg-light">
          
          <tr>
            <td scope="row">{{$a->id}}</td>          
            <td scope="row">{{$a->name}}</td>
            <td scope="row">{{$a->college}}</td>
            <td scope="row">{{$a->email}}</td>
            <td scope="row">{{$a->phone}}</td>

          
            <td>
                
                <a href=""><button class="btn btn-info">Edit</button></a>              
                <a href=""><button class="btn btn-danger">Delete</button></a>
              </td>
          </tr>
        
        </tbody>
 @endforeach
      </table>
    </div>
  </div>
</section>
<!-- <section close> -->
</body>
</html>