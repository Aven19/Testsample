<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>Career</title>


<link rel="stylesheet" type="text/css" href="http://localhost/ci_intro/assets/css/bootstrap.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<body>
  <?php
  if($this->uri->segment(2)=="inserted")
  { 
    echo '<p class="text-success">Data Inserted</p>';
  }
  ?>

  
  

  <form method="post" action="<?php echo site_url('Test/form_validation');?>" enctype="multipart/form-data" />
    <fieldset>
      <legend>Career</legend>
      <div class="container">
<div id="drop-container"></div> 
<div class="form-group">
    
    </div>
   
       <div class="col-sm-6">
      <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control" name="Name" placeholder="Enter Full Name" >
      <span class="text-danger"><?php echo form_error('Name');?></span>
      

    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="Email" aria-describedby="emailHelp" placeholder="Enter email" >
      <span class="text-danger"><?php echo form_error('Email');?></span>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

    </div>

  

    <div class="form-group">
      <label for="exampleSelect1">Job Title</label>
      <select class="form-control" id="exampleSelect1" name="Job" >
        <option>Web Developer</option>
        <option>Android Developer</option>
        <option>ios Developer</option>
      </select>
      <span class="text-danger"><?php echo form_error('Job');?></span>
    </div>

    <div class="form-group">
      <label for="name">Age</label>

      <input type="number" class="form-control" min="0" max="100" step="1" name="Age" >
       <span class="text-danger"><?php echo form_error('Age');?></span>
    </div>

    <div class="form-group">
      <label for="exampleSelect1">Gender</label>
      <select class="form-control" id="exampleSelect1" name="Gender" >
        <option>Male</option>
        <option>Female</option>       
      </select>
     <span class="text-danger"><?php echo form_error('Gender');?></span>
    </div>

<div class="form-group">
<label for="phone">Phone</label>

<input type="tel" id="phone" name="Phone"
       pattern="[0-9]{10}" placeholder="0123456789" class="form-control">
       <span class="text-danger"><?php echo form_error('Phone');?></span>
     </div>

    
    <div class="form-group">
      <label for="exampleTextarea">Address</label>
      <textarea class="form-control" id="exampleTextarea" rows="3" name="Address"></textarea>
      <span class="text-danger"><?php echo form_error('Address');?></span>
    </div>
    <div class="form-group">
      <label for="exampleInputFile">Upload Resume</label>

  
      <input type="file" name="Filesresume" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" >
      <span class="text-danger"><?php echo form_error('Filesresume');?></span>


      <small id="fileHelp" class="form-text text-muted">We'l try to reach us in case of any requirements.</small>
    </div>
  

    
    <button type="submit" value="submit" class="btn btn-primary">Submit</button>
   
  </div>
</fieldset>
</form>
	
</head>
</html>