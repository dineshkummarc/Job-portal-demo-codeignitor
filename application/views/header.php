 <html>

<head>
<title>Register Here</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../../css/style.css">
<link rel="stylesheet" href="../../css/registercss.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


<!-------------------header----------------------->
<section id="header">
<div class="menu-bar">

<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand">Demo: Job Portal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
<?php 

	if ($this->session->userdata('logged_in'))
	{
		
		if($this->session->userdata("user_type") == "employer"){
			
			echo '
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
				<li class="nav-item ">
				<a class="nav-link" href="'.base_url("Jobs").'">All Jobs</a>
			</li>';
			
			echo '<li class="nav-item ">
			<a class="nav-link" href="'.base_url("addJob").'">Add New Jobs</a>
			</li>';  
		}
		else{
			echo '
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
				<li class="nav-item ">
				<a class="nav-link" href="'.base_url().'">All Jobs</a>
			</li>';
	  	
		}
		
		echo '<li class="nav-item">
        <a class="nav-link" href="'.base_url("register/logout").'">LOGOUT</a>
		</li>
		</ul>
		</div>';
	}
	else
	{
		echo '<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item ">
			<a class="nav-link" href="'.base_url().'">All Jobs</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="'.base_url("register").'">Join Us</a>
			</li>
		</ul>
		</div>';
	
	}

?>  

</nav>

</div>
