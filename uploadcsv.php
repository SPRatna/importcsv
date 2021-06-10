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
     <form action="<?php echo site_url();?>index.php/admin/csv/uploadData" method="post" enctype="multipart/form-data" name="form1" id="form1"> 
        <table>
            <tr>
                <td> Choose your file: </td>
                <td>
                    <input type="file" class="form-control" name="userfile" id="userfile"  align="center"/>
                </td>
                <td>
                    <div class="col-lg-offset-3 col-lg-9">
                        <button type="submit" name="submit" class="btn btn-info">Save</button>
                    </div>
                </td>
            </tr>
        </table> 
    </form>   
    </div>
   
</script>
</body>
</html>