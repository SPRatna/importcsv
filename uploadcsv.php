<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin | Dashboard</title>
	<link rel="stylesheet" href="<?php echo base_url();?>public/suraj/bootstrap.min.css">
	<script type="text/javascript" src="<?php echo base_url();?>public/suraj/jquery.min.css"></script>
	<script type="text/javascript" src="<?php echo base_url();?>public/suraj/popper.min.css"></script>	
	<script type="text/javascript" src="<?php echo base_url();?>public/suraj/bootstrap.min.css"></script>
</head>
<body>
	<div class="container-fluid">
	  <div class="jumbotron">
	  	<a href="<?php echo base_url().'admin/login/logout';?>" class="btn btn-outline-danger float-right mt-n3">Logout</a>
	    <h1 class="text-center">Administrator Dashboard</h1>
	    <p class="text-center">Developed by Suraj Prakash Ratna</p>
	  </div>     
	</div>
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-12">
     <form action="<?php echo site_url();?>index.php/admin/csv/uploadData" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <div class="form-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input"  name="userfile" id="userfile">
                <label class="custom-file-label" for="userfile">Choose file</label>
            </div> 
        </div>
        <div class="form-group">
           <button type="submit" name="submit" class="btn btn-info">Import CSV File</button> 
        </div>
    </form>   
    </div></div></div>
    <script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
</body>
</html>
