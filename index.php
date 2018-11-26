	
<!DOCTYPE html>
<html lang="en">
<head>
<title>Aguada Blanca</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Aguada Blanca</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Inicio</a></li>
      </ul>
    </div>
  </div>
</nav>

  
<div class="row">
  	<center><h3>Probe Data</h3></center>
  	<br>
  <div class="col-sm-6">
  
	  <div class="row-fluid">
	    <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-4"> Ph:</label>
      <div class="col-sm-8">
		<input type="text" class="form-control" id="ph" placeholder="Loading ..." >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-4"> Conductivity:</label>
      <div class="col-sm-8">
		<input type="text" class="form-control" placeholder="0" >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-4"> Turbidity:</label>
      <div class="col-sm-8">
		<input type="text" class="form-control" placeholder="0" >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-4"> RDO:</label>
      <div class="col-sm-8">
		<input type="text" class="form-control" placeholder="0" >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-4"> TSS:</label>
      <div class="col-sm-8">
		<input type="text" class="form-control" placeholder="0" >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-4"> Nitrate:</label>
      <div class="col-sm-8">
		<input type="text" class="form-control" placeholder="0" >
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-4"> Ammonium:</label>
      <div class="col-sm-8">
		<input type="text" class="form-control" placeholder="0" >
      </div>
    </div>
    
  </form>
  
	</div>
		  	
  </div>
  
  <div class="col-sm-6">
  	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d9199.644229532669!2d-71.3381293308248!3d-16.239018912103933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1ses-419!2spe!4v1543189027399" width="530" height="360" frameborder="0" style="border:0" allowfullscreen></iframe>


  </div>
  
</div>

<hr>

<div class="row">
  	<center><h3>Vehicle Data</h3></center>
  	<br>  	
  <div class="col-sm-6">


  
	  <div class="row-fluid">
	    <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-4"> Speed:</label>
      <div class="col-sm-8">
		<input type="text" class="form-control" id="ph" placeholder="Loading ..." >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-4"> Roll:</label>
      <div class="col-sm-8">
		<input type="text" class="form-control" placeholder="0" >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-4"> Pitch:</label>
      <div class="col-sm-8">
		<input type="text" class="form-control" placeholder="0" >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-4"> Yaw:</label>
      <div class="col-sm-8">
		<input type="text" class="form-control" placeholder="0" >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-4"> Latitude:</label>
      <div class="col-sm-8">
		<input type="text" class="form-control" placeholder="0" >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-4"> Longitude:</label>
      <div class="col-sm-8">
		<input type="text" class="form-control" placeholder="0" >
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-4"> Temperature:</label>
      <div class="col-sm-8">
		<input type="text" class="form-control" placeholder="0" >
      </div>
    </div>
    
	<div class="form-group">
      <label class="control-label col-sm-4"> Baterry:</label>
      <div class="col-sm-8">
		<input type="text" class="form-control" placeholder="0" >
      </div>
    </div>
    
  </form>
  
	</div>
		  	
  </div>
  
  <div class="col-sm-6">
    	<img width="80%" src="vehicle.jpeg">

  </div>
  
</div>



<script type="text/javascript">
$(document).ready(function() {	
    function update(){
        var dataString = "";
 
        $.ajax({
            type: "POST",
            url: "save.php",
            data: dataString,
            success: function(response) {
                $('#ph').val(response);
            }
        });
    }
    setInterval(update, 1000);
});
</script>

</body>
</html>


