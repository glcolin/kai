<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title><?php echo $page_title;?></title>
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/jquery.bxslider.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/style.css" />
	<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery.bxslider.js"></script>
</head>
<body>
	<div class="header">
	<div class="mycontainer">
			<div class="row">
			  <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
			  	<a href=""></a><img src="<?php echo base_url();?>public/images/logo.png" alt="" />
			  </div>
			  <div class="col-md-8 col-xs-8 col-sm-8 col-lg-8">
			  	<ul class="nav nav-pills" role="tablist">
			  		<li><a href="<?php echo site_url('kai/index');?>">Index</a></li>
			  		<li class="dropdown">
			          <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Photo<span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			            <li><a href="<?php echo site_url('kai/photo');?>">Food</a></li>
			          </ul>
			        </li>
			        <li><a href="<?php echo site_url('kai/video');?>">Video</a></li>
			        <li><a href="<?php echo site_url('kai/testimonials');?>">Testimonials</a></li>
			        <li><a href="<?php echo site_url('kai/about');?>">About me/Service</a></li>
			        <li><a href="<?php echo site_url('kai/contact');?>">Contact</a></li>
			        <li><a href="http://kailiublog.com/" target="_blank">Blog</a></li>
			  	</ul>
		
			  </div>
			</div>
		</div>
	</div>