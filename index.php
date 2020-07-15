<?php require 'functions.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php siteName(); ?> | <?php pageTitle(); ?></title>
      <style type="text/css">
      body.bg {
           background: url("img/14.jpg") no-repeat center center;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover; 
          }
    .page-signin-modal {
      position: relative;
      top: auto;
      right: auto;
      bottom: auto;
      left: auto;
      z-index: 1;
      display: block;
    }
    .page-signin-form-group { position: relative; }
    .page-signin-icon {
      position: absolute;
      line-height: 21px;
      width: 36px;
      border-color: rgba(0, 0, 0, .14);
      border-right-width: 1px;
      border-right-style: solid;
      left: 1px;
      top: 9px;
      text-align: center;
      font-size: 15px;
    }
    html[dir="rtl"] .page-signin-icon {
      border-right: 0;
      border-left-width: 1px;
      border-left-style: solid;
      left: auto;
      right: 1px;
    }
    html:not([dir="rtl"]) .page-signin-icon + .page-signin-form-control { padding-left: 50px; }
    html[dir="rtl"] .page-signin-icon + .page-signin-form-control { padding-right: 50px; }
    #page-signin-forgot-form {
      display: none;
    }
    .page-signin-modal > .modal-dialog { margin: 30px 10px; }
    @media (min-width: 544px) {
      .page-signin-modal > .modal-dialog { margin: 60px auto; }
    }
  </style>
	<meta property="og:image" content="img/avt.png">
	<meta property="og:image:type" content="image/jpeg">
	<meta property="og:image:width" content="200">
	<meta property="og:image:height" content="200">
		<link rel="icon" href="img/icon.png">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" class="px-demo-stylesheet-bs">
    <link href="css/pixeladmin.min.css" rel="stylesheet" type="text/css" class="px-demo-stylesheet-core">
    <link href="css/widgets.min.css" rel="stylesheet" type="text/css">
    <link href="css/demo.css" rel="stylesheet" type="text/css">
    <link href="css/adminflare.min.css" rel="stylesheet" type="text/css">
    <link href="css/font/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/icon/ionicons.min.css" rel="stylesheet" type="text/css">
    <link href="css/pixeladmin.min-blessed1.css" rel="stylesheet" type="text/css">
	
	
		<script src="js/jquery/3.1.1/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	

	</head>
<body class="bg">

 
					
				
					
				<nav class="navbar px-navbar">
    <!-- Header -->
    <div class="navbar-header">
      <a class="navbar-brand px-demo-brand" href="?page=home"><span class="px-demo-logo bg-primary"><span class="px-demo-logo-1"></span><span class="px-demo-logo-2"></span><span class="px-demo-logo-3"></span><span class="px-demo-logo-4"></span><span class="px-demo-logo-5"></span><span class="px-demo-logo-6"></span><span class="px-demo-logo-7"></span><span class="px-demo-logo-8"></span><span class="px-demo-logo-9"></span></span>CKC HCMUS</a>
    </div>


    <!-- Collect the nav links, forms, and other content for toggling -->
    
		<div class="collapse navbar-collapse" id="px-demo-navbar-collapse">
      <ul class="nav navbar-nav">
<!-- 				 <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size:17px;font-weight:bold;"><i class="fa fa-list"></i>&nbsp;Result mail</a>
				</li>
				
				<li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size:17px;font-weight:bold;"><i class="fa fa-search-plus"></i>&nbsp;Add linkedin</a>
				</li> -->
				
  <!--      <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories</a>
           <div class="dropdown-multi-column">
            <ul class="dropdown-menu dropdown-column col-md-4">
              <li class="dropdown-header">Business</li>
              <li><a href="#">Design &amp; Urban Ecologies</a></li>
              <li><a href="#">Fine Art</a></li>
              <li><a href="#">Fashion Design</a></li>
              <li><a href="#">Strategic Design</a></li>
            </ul>
            <ul class="dropdown-menu dropdown-column col-md-4">
              <li class="dropdown-header">Liberal Arts</li>
              <li><a href="#">Anthropology</a></li>
              <li><a href="#">Media Studies</a></li>
              <li><a href="#">Philosophy</a></li>
            </ul>
            <ul class="dropdown-menu dropdown-column col-md-4">
              <li class="dropdown-header">Social Sciences</li>
              <li><a href="#">Food Studies</a></li>
              <li><a href="#">Journalism</a></li>
              <li><a href="#">Non Profit Management</a></li>
            </ul>
          </div> -->
 <!--         </li>

        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bookmark m-r-1"></i>Links</a>
         <ul class="dropdown-menu">
            <li class="dropdown-toggle">
              <a href="">Products</a>
              <ul class="dropdown-menu">
                <li><a href="#">All</a></li>
                <li><a href="#">Popular</a></li>
                <li><a href="#">Recent</a></li>
                <li><a href="#">Featured</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-plus m-r-1"></i>Add product</a></li>
              </ul>
            </li>
            <li class="dropdown-toggle">
              <a href="">Users</a>
              <ul class="dropdown-menu">
                <li><a href="#">All</a></li>
                <li><a href="#">Recent</a></li>
                <li><a href="#">Banned</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-user-plus m-r-1"></i>Create user</a></li>
              </ul>
            </li>
            <li class="dropdown-toggle">
              <a href="">Blog</a>
              <ul class="dropdown-menu">
                <li><a href="#">All</a></li>
                <li><a href="#">Popular</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-edit m-r-1"></i>New blog post</a></li>
              </ul>
            </li>
            <li class="divider"></li>
            <li><a href="#">Overview</a></li>
          </ul> -->
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
				<li>
          <a href="?page=anhdep2" style="font-size:17px;font-weight:bold;"><i class="fa fa-picture-o"></i>&nbsp;&nbsp;Beautiful scene</a>
				</li>
				<li>
          <a href="?page=sharebookmark" style="font-size:17px;font-weight:bold;"><i class="fa fa-bookmark"></i>&nbsp;&nbsp;Bookmark</a>
				</li>
				<li>
          <a href="?page=companylist" style="font-size:17px;font-weight:bold;"><i class="fa fa-building"></i>&nbsp;&nbsp;List Company</a>
				</li>

				<li>
          <a href="?page=view" style="font-size:17px;font-weight:bold;"><i class="fa fa-list"></i>&nbsp;&nbsp;Result mail</a>
				</li>
				
				<li>
          <a href="?page=addlinkedin" style="font-size:17px;font-weight:bold;"><i class="fa fa-search-plus"></i>&nbsp;&nbsp;Add linkedin</a>
        </li>
        <li>
          <a href="?page=addlinkedin" style="font-size:17px;font-weight:bold;"><i class="fa fa-search-plus"></i>&nbsp;&nbsp;Detail of owner</a>
				</li>
			
<!--         <li>
          <form class="navbar-form" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search" style="width: 140px;">
            </div>
          </form>
        </li> -->

        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<?php /*session_start(); if (isset($_SESSION['username'])) { echo '<img src="img/avt.png" alt="" class="px-navbar-image">'; } */?>
            
            <span class="hidden-md"><?php /* session_start(); if (isset($_SESSION['username'])) { echo $_SESSION['username']; } else { echo "Account";}*/ ?></span>
          </a>
          <ul class="dropdown-menu">
<!--             <li><a href="pages-profile-v2.html"><span class="label label-warning pull-xs-right"><i class="fa fa-asterisk"></i></span>Profile</a></li>
            <li><a href="pages-account.html">Account</a></li>
            <li><a href="pages-messages-list.html"><i class="dropdown-icon fa fa-envelope"></i>&nbsp;&nbsp;Messages</a></li>
            <li class="divider"></li> -->
						<?php /* session_start(); if (isset($_SESSION['username'])) { echo '<li><a href="db/logout.php"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>'; } else { echo '<li><a href="?page=login"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log  In</a></li>';}*/ ?>
          </ul>
        </li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </nav>	
					
					
					
					
					
  <!--          <a class="btn btn-labeled btn-success" href="" title="Home">
              <span class="btn-label-icon left fa fa-home"></span>Home</a>  -->   
<!--             <a class="btn btn-info" href="?page=about-me">
              <span class="btn-label-icon left fa fa-info-circle fa-lg"></span>About</a> 
            <a class="btn btn-info" href="?page=products">
              <span class="btn-label-icon left fa fa-product-hunt fa-lg"></span>Products</a>  -->
<!--             <a class="btn btn-info" href="/?page=contact-us">
              <span class="btn-label-icon left fa fa-address-card"></span>Contact</a>  -->
<!--             <a class="btn btn-info" href="?page=login">
              <span class="btn-label-icon left fa fa-user fa-lg"></span>Login</a>
            <a class="btn btn-danger" onclick="logout()">
              <span class="btn-label-icon left fa fa-sign-out fa-lg"></span>Logout</a> 
            <a class="btn btn-info" href="?page=register">
              <span class="btn-label-icon left fa fa-user fa-lg"></span>Register</a>
            <a class="btn btn-info" href="?page=ThayTri_01">
              <span class="btn-label-icon left fa fa-user fa-lg"></span>Giai toan</a>
            <a class="btn btn-danger" href="?page=view">
              <span class="btn-label-icon left fa fa-reply-all"></span>View Email</a>
            <a class="btn btn-danger" onclick="checklogin()">
              <span class="btn-label-icon left fa fa-search-plus fa-lg"></span>Add help find email</a>
					<a class="btn btn-danger btn-outline btn-3d active" href="/?page=readfile">
              <span class="btn-label-icon left fa fa-file"></span>File</a> -->
<!--           <a class="btn active" href="/pages/fileshare/">
              <span class="btn-label-icon left fa fa-folder-open"></span>Folder Files</a> -->
<!--            <a class="btn btn-warning" href="/?page=upload">
              <span class="btn-label-icon left fa fa-upload"></span>Upload file</a> -->

      


    <article style="padding-top:50px;">
        <?php pageContent(); ?>
    </article>

	<script>
		function logout()
		{
      		localStorage.setItem('username', "null");
      		window.location.href = '?page=logout';
      	}
      	function checklogin()
      	{
      		if(localStorage.username=='null' || typeof localStorage.username == 'undefined')
      		{
      				window.location.href = '?page=login';
      		}
      		else
      		{
      				window.location.href = '?page=help_view';
      		}
      	}
	</script>
</body>
</html>