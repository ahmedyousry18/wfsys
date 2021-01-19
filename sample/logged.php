<?php



?>
<!DOCTYPE html>


<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap All in One Navbar</title>
<link href="https://fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
	body {
		background: #eeeeee;
	}
    .form-inline {
        display: inline-block;
    }
	.navbar {		
		background: #fff;
		padding-left: 16px;
		padding-right: 16px;
		border-bottom: 1px solid #d6d6d6;
		box-shadow: 0 0 4px rgba(0,0,0,.1);
	}
	.nav img {
		border-radius: 50%;
		width: 36px;
		height: 36px;
		margin: -8px 0;
		float: left;
		margin-right: 10px;
	}
	.navbar .navbar-brand {
		color: #555;
		padding-left: 0;
		padding-right: 50px;
		font-family: 'Merienda One', sans-serif;
	}
	.navbar .navbar-brand i {
		font-size: 20px;
		margin-right: 5px;
	}
	.search-box {
        position: relative;
    }	
    .search-box input {
		box-shadow: none;
        padding-right: 35px;
        border-radius: 3px !important;
    }
	.search-box .input-group-addon {
        min-width: 35px;
        border: none;
        background: transparent;
        position: absolute;
        right: 0;
        z-index: 9;
        padding: 7px;
		height: 100%;
    }
    .search-box i {
        color: #a0a5b1;
		font-size: 19px;
    }
	.navbar ul li i {
		font-size: 18px;
	}
	.navbar .dropdown-menu i {
		font-size: 16px;
		min-width: 22px;
	}
	.navbar .dropdown.open > a {
		background: none !important;
	}
	.navbar .dropdown-menu {
		border-radius: 1px;
		border-color: #e5e5e5;
		box-shadow: 0 2px 8px rgba(0,0,0,.05);
	}
	.navbar .dropdown-menu li a {
		color: #777;
		padding: 8px 20px;
		line-height: normal;
	}
	.navbar .dropdown-menu li a:hover, .navbar .dropdown-menu li a:active {
		color: #333;
	}	
	.navbar .dropdown-menu .material-icons {
		font-size: 21px;
		line-height: 16px;
		vertical-align: middle;
		margin-top: -2px;
	}
	.navbar .badge {
		background: #f44336;
		font-size: 11px;
		border-radius: 20px;
		position: absolute;
		min-width: 10px;
		padding: 4px 6px 0;
		min-height: 18px;
		top: 5px;
	}
	.navbar ul.nav li a.notifications, .navbar ul.nav li a.messages {
		position: relative;
		margin-right: 10px;
	}
	.navbar ul.nav li a.messages {
		margin-right: 20px;
	}
	.navbar a.notifications .badge {
		margin-left: -8px;
	}
	.navbar a.messages .badge {
		margin-left: -4px;
	}	
	.navbar .active a, .navbar .active a:hover, .navbar .active a:focus {
		background: transparent !important;
	}
	@media (min-width: 1200px){
		.form-inline .input-group {
			width: 300px;
			margin-left: 30px;
		}
	}
	@media (max-width: 1199px){
		.form-inline {
			display: block;
			margin-bottom: 10px;
		}
		.input-group {
			width: 100%;
		}
	}
	
	
	<style>
  

// Dashboard Cards
.dashboard-cards {
  position: relative;
  padding-bottom: 50px;
  margin: 0 !important;
}
.dashboard-cards .card {
  background: #ffffff;
  display: inline-block;
  -webkit-perspective: 1000;
          perspective: 1000;
  z-index: 20;
  padding: 0 !important;
  margin: 5px 5px 10px 11%;
  position: relative;
  text-align: left;
  -webkit-transition: all 0.3s 0s ease-in;
  transition: all 0.3s 0s ease-in;
  z-index: 1;
  width: calc(33.33333333% - 10px);
  cursor: pointer;
  transition: all 0.3s ease;
}
.dashboard-cards .card:hover {
      box-shadow: 0 15px 10px -10px rgba(31, 31, 31, 0.5);
  transition: all 0.3s ease;
}
.dashboard-cards .card .card-title {
  background: #ffffff;
  padding: 20px 15px;
  position: relative;
  z-index: 0;
}
.dashboard-cards .card .card-title h2 {
  font-size: 15px;
  letter-spacing: -0.05em;
  margin: 0;
  padding: 0;
}
.dashboard-cards .card .card-title h2 small {
  display: block;
  font-size: 13px;
  margin-top: 8px;
  letter-spacing: -0.025em;
}
.dashboard-cards .card .card-description {
  position: relative;
  font-size: 14px;
  border-top: 1px solid #ddd;
  padding: 10px 15px 0 15px;
}
.dashboard-cards .card .card-actions {
  box-shadow: 0 2px 0px 0 rgba(0, 0, 0, 0.075);
  padding: 10px;
  text-align: center;
}
.dashboard-cards .card .card-flap {
  background: #d9d9d9;
  position: absolute;
  width: 100%;
  -webkit-transform-origin: top;
          transform-origin: top;
  -webkit-transform: rotateX(-90deg);
          transform: rotateX(-90deg);
}
.dashboard-cards .card .flap1 {
  -webkit-transition: all 0.3s 0.3s ease-out;
  transition: all 0.3s 0.3s ease-out;
  z-index: -1;
}
.dashboard-cards .card .flap2 {
  -webkit-transition: all 0.3s 0s ease-out;
  transition: all 0.3s 0s ease-out;
  z-index: -2;
}
.dashboard-cards.showing .card {
  cursor: pointer;
  opacity: 0.6;
  -webkit-transform: scale(0.88);
          transform: scale(0.88);
}
.dashboard-cards .no-touch .dashboard-cards.showing .card:hover {
  opacity: 0.94;
  -webkit-transform: scale(0.92);
          transform: scale(0.92);
}
.dashboard-cards .card.d-card-show {
  opacity: 1 !important;
  -webkit-transform: scale(1) !important;
          transform: scale(1) !important;
}
.dashboard-cards .card.d-card-show .card-flap {
  background: #ffffff;
  -webkit-transform: rotateX(0deg);
          transform: rotateX(0deg);
}
.dashboard-cards .card.d-card-show .flap1 {
  -webkit-transition: all 0.3s 0s ease-out;
  transition: all 0.3s 0s ease-out;
}
.dashboard-cards .card.d-card-show .flap2 {
  -webkit-transition: all 0.3s 0.2s ease-out;
  transition: all 0.3s 0.2s ease-out;
}
.dashboard-cards .card .task-count {
  width: 40px;
  height: 40px;
  position: absolute;
  top: 22px;
  right: 10px;
  background: #ecf0f1;
  text-align: center;
  line-height: 40px;
  border-radius: 100%;
  color: #333333;
  font-weight: 600;
  transition: all .2s ease;
}

// Task List
.dashboard-cards .task-list {
	padding: 0 !important;
}
.dashboard-cards .task-list li {
  padding: 10px 0;
  padding-left: 10px;
  margin: 3px 0;
	list-style-type: none;
  border-bottom: 1px solid #e9ebed;
  border-left: 3px solid #f36525;
  transition: all .2s ease;
}
.dashboard-cards .task-list li:hover {
  background: #ecf0f1;
  transition: all .2s ease;
}
.dashboard-cards .task-list li span {
  float: right;
  color: #f36525;
  margin-right: 5px;
}
.dashboard-cards.showing .card.d-card-show .task-count {
  color: #ffffff;
  background: #f36525;
  transition: all .2s ease;
}
.dashboard-cards .card-actions .btn {
	color: #333;
}
.dashboard-cards .card-actions .btn:hover {
	color: #f36525;
}
  	
  </style>

</style>
</head> 
<body>
<nav class="navbar navbar-default">
	<div class="navbar-header">
		<a class="navbar-brand" href="#"><i class="fa fa-cube"></i>Brand<b>Name</b></a>  		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
			<li class="active"><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#">Services <b class="caret"></b></a>
				<ul class="dropdown-menu">					
					<li><a href="#">Web Design</a></li>
					<li><a href="#">Web Development</a></li>
					<li><a href="#">Graphic Design</a></li>
					<li><a href="#">Digital Marketing</a></li>
				</ul>
			</li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Contact</a></li>
		</ul>

		<ul class="nav navbar-nav navbar-right">
			<li><a href="#" class="notifications"><i class="fa fa-bell-o"></i><span class="badge">1</span></a></li>
			<li><a href="#" class="messages"><i class="fa fa-envelope-o"></i><span class="badge">10</span></a></li>
			<li class="dropdown">
				<a href="#" data-toggle="dropdown" class="dropdown-toggle user-action"><img src="https://www.tutorialrepublic.com/examples/images/avatar/2.jpg" class="avatar" alt="Avatar"> Paula Wilson <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#"><i class="fa fa-user-o"></i> Profile</a></li>
					<li><a href="#"><i class="fa fa-calendar-o"></i> Calendar</a></li>
					<li><a href="#"><i class="fa fa-sliders"></i> Settings</a></li>
					<li class="divider"></li>
					<li><a href="#"><i class="material-icons">&#xE8AC;</i> Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>
</nav>

<div class='row dashboard-cards'>
  <div class='card col-md-4'>
    <div class='card-title'>
      <h2>
        Contact Task
        <small>You have 14 pending tasks</small>
      </h2>
    </div>
    <div class='card-flap flap1'>
      <div class='card-description'>
        <ul class='task-list'>
          <li>
            Sent Question Pending
            <span>59%</span>
          </li>
          <li>
            Sent Answer Pending
            <span>11%</span>
          </li>
          <li>
            File Attchment Pending
            <span>100%</span>
          </li>
          <li>
            Document Send Pending
            <span>7%</span>
          </li>
        </ul>
      </div>
      <div class='card-flap flap2'>
        <div class='card-actions'>
          <a class='btn' href='#'>Close</a>
        </div>
      </div>
    </div>
  </div>
  <div class='card col-md-4'>
    <div class='card-title'>
      <h2>
        Product Task
        <small>You have 101 pending tasks</small>
      </h2>
      <div class='task-count'>
        101
      </div>
    </div>
    <div class='card-flap flap1'>
      <div class='card-description'>
        <ul class='task-list'>
          <li>
            Sent Question Pending
            <span>59%</span>
          </li>
          <li>
            Sent Answer Pending
            <span>11%</span>
          </li>
          <li>
            File Attchment Pending
            <span>100%</span>
          </li>
          <li>
            Document Send Pending
            <span>7%</span>
          </li>
        </ul>
      </div>
      <div class='card-flap flap2'>
        <div class='card-actions'>
          <a class='btn' href='#'>Close</a>
        </div>
      </div>
    </div>
  </div>
  <div class='card col-md-4'>
    <div class='card-title'>
      <h2>
        Document Task
        <small>You have 9 pending tasks</small>
      </h2>
      <div class='task-count'>
        9
      </div>
    </div>
    <div class='card-flap flap1'>
      <div class='card-description'>
        <ul class='task-list'>
          <li>
            Sent Question Pending
            <span>59%</span>
          </li>
          <li>
            Sent Answer Pending
            <span>11%</span>
          </li>
          <li>
            File Attchment Pending
            <span>100%</span>
          </li>
          <li>
            Document Send Pending
            <span>7%</span>
          </li>
        </ul>
      </div>
      <div class='card-flap flap2'>
        <div class='card-actions'>
          <a class='btn' href='#'>Close</a>
        </div>
      </div>
    </div>
  </div>
  <div class='card col-md-4'>
    <div class='card-title'>
      <h2>
        Contact Task
        <small>You have 76 pending tasks</small>
      </h2>
      <div class='task-count'>
        76
      </div>
    </div>
    <div class='card-flap flap1'>
      <div class='card-description'>
        <ul class='task-list'>
          <li>
            Sent Question Pending
            <span>59%</span>
          </li>
          <li>
            Sent Answer Pending
            <span>11%</span>
          </li>
          <li>
            File Attchment Pending
            <span>100%</span>
          </li>
          <li>
            Document Send Pending
            <span>7%</span>
          </li>
        </ul>
      </div>
      <div class='card-flap flap2'>
        <div class='card-actions'>
          <a class='btn' href='#'>Close</a>
        </div>
      </div>
    </div>
  </div>
  <div class='card col-md-4'>
    <div class='card-title'>
      <h2>
        Agreement Task
        <small>You have 43 pending tasks</small>
      </h2>
      <div class='task-count'>
        43
      </div>
    </div>
    <div class='card-flap flap1'>
      <div class='card-description'>
        <ul class='task-list'>
          <li>
            Sent Question Pending
            <span>59%</span>
          </li>
          <li>
            Sent Answer Pending
            <span>11%</span>
          </li>
          <li>
            File Attchment Pending
            <span>100%</span>
          </li>
          <li>
            Document Send Pending
            <span>7%</span>
          </li>
        </ul>
      </div>
      <div class='card-flap flap2'>
        <div class='card-actions'>
          <a class='btn' href='#'>Close</a>
        </div>
      </div>
    </div>
  </div>
  <div class='card col-md-4'>
    <div class='card-title'>
      <h2>
        Audit Task
        <small>You have 24 pending tasks</small>
      </h2>
      <div class='task-count'>
        24
      </div>
    </div>
    <div class='card-flap flap1'>
      <div class='card-description'>
        <ul class='task-list'>
          <li>
            Sent Question Pending
            <span>59%</span>
          </li>
          <li>
            Sent Answer Pending
            <span>11%</span>
          </li>
          <li>
            File Attchment Pending
            <span>100%</span>
          </li>
          <li>
            Document Send Pending
            <span>7%</span>
          </li>
        </ul>
      </div>
      <div class='card-flap flap2'>
        <div class='card-actions'>
          <a class='btn' href='#'>Close</a>
        </div>
      </div>
    </div>
  </div>
</div>


</body>
</html>

<?php

require 'footer.php';

?>