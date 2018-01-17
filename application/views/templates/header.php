<!DOCTYPE html>
<html>
<head>
	<title>Conjure</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/yeti/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/file.css">
	<script src="http://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
    <style type="text/css">
        .post-date{
            background-color: #f4f4f4;
            padding: 4px 3px;
            border-radius: 2px;
            margin-bottom: 10px;
        }

        footer{
            background-color:#0c1a1e;
            min-height:350px;
            bottom: 0;
        }

        .footerleft { margin-top:50px; padding:0 36px; }
        .logofooter { margin-bottom:10px; font-size:25px; color:#fff; font-weight:700;}

        .footerleft p { color:#fff; font-size:12px !important; font-family: 'Open Sans', sans-serif; margin-bottom:15px;}
        .footerleft p i { width:20px; color:#999;}


        .paddingtop-bottom {  margin-top:50px;}
        .footer-ul { list-style-type:none;  padding-left:0px; margin-left:2px;}
        .footer-ul li { line-height:29px; font-size:12px;}
        .footer-ul li a { color:#a0a3a4; transition: color 0.2s linear 0s, background 0.2s linear 0s; }
        .footer-ul i { margin-right:10px;}
        .footer-ul li a:hover {transition: color 0.2s linear 0s, background 0.2s linear 0s; color:#ff670f; }

        .social:hover {
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -o-transform: scale(1.1);
        }




        .icon-ul { list-style-type:none !important; margin:0px; padding:0px;}
        .icon-ul li { line-height:75px; width:100%; float:left;}
        .icon { float:left; margin-right:5px;}


        .copyright { min-height:40px; background-color:#000000;}
        .copyright p { text-align:left; color:#FFF; padding:10px 0; margin-bottom:0px;}
        .heading7 { font-size:21px; font-weight:700; color:#d9d6d6; margin-bottom:22px;}
        .post p { font-size:12px; color:#FFF; line-height:20px;}
        .post p span { display:block; color:#8f8f8f;}
        .bottom_ul { list-style-type:none; float:right; margin-bottom:0px;}
        .bottom_ul li { float:left; line-height:40px;}
        .bottom_ul li:after { content:"/"; color:#FFF; margin-right:8px; margin-left:8px;}
        .bottom_ul li a { color:#FFF;  font-size:12px;}
    </style>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
   	<div class="navbar-header">
			<a class="navbar-brand" style="font-size: 27px; padding-top: 20px;" href="/"><strong>Conjure</strong></a>
		</div>
      	<div class="navbar" style="padding-top: 10px;">
      		<ul class="nav navbar-nav navbar-left">
      			<li><a href="<?php echo base_url(); ?>">Home</a></li>
				<li><a href="<?php echo base_url(); ?>posts">Articles</a></li>
				<li><a href="<?php echo base_url(); ?>categories">Category</a></li>
				<li><a href="<?php echo base_url(); ?>about">About</a></li>
		    	
      		</ul>
			<ul class="nav navbar-nav navbar-right">
                <?php if(!$this->session->userdata('logged_in')): ?>
                    <li><a href="<?php echo base_url(); ?>users/login" style="border:solid 2px #fff; margin-right: 5px; color: #000; background-color: #fff; ">Login</a></li>
                    <li><a href="<?php echo base_url(); ?>users/register"style="border:solid 2px #fff; margin-right: 5px; ">Register</a></li>
                <?php endif; ?>
                <?php if($this->session->userdata('logged_in')): ?>
                <li><a href="<?php echo base_url(); ?>posts/create">Create New Post</a></li>
				<li><a href="<?php echo base_url(); ?>categories/create">Create New Category</a></li>
                <li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
		        <?php endif; ?>
            </ul>
		</div>
    </div>
</nav>

<div class="container">
    <?php if($this->session->flashdata('post_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('post_updated')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('category_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('post_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('login_failed')): ?>
    <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('user_loggedin')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
    <?php endif; ?>
