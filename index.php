	
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
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
      </ul>
    </div>
  </div>
</nav>

  
<div class="row">
  <div class="col-sm-6">
  <h4>Ph</h4>
  	<span id="counter"><?php echo $data['counter']; ?></span>
  </div>
  <div class="col-sm-6">
  	<img width="80%" src="vehicle.jpeg">
  </div>
</div>




<script type="text/javascript">
$(document).ready(function() {	
    function update(){
        var current = $('#counter').text();
        var sum = Number(current) + 3;
        var dataString = 'sum='+sum;
 
        $.ajax({
            type: "POST",
            url: "save.php",
            data: dataString,
            success: function(response) {
                $('#counter').text(response);
            }
        });
    }
    setInterval(update, 1000);
});
</script>

</body>
</html>


