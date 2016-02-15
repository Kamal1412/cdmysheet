<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <title>Login Form</title>
     <!--link the bootstrap css file-->
     <!--link the bootstrap css file-->
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
     <style type="text/css">
     .colbox {
          margin-left: 0px;
          margin-right: 0px;
     }
<style>
header{
background:#0000FF;
float:0;
left:0;
width:100%;
z-index:999;
position:fixed;
height:50px
}
body{
background-color:#F5F5F5;
text-align: center;
border-color: #559FC2
}
 h1{
margin-left: 5%

}
h2{
padding: 30px 35px;
margin: -10px -50px;
text-align:center;
border-radius: 10px 10px 0 0;
}	
.login{
margin:0% 35%; 
}
@media (min-width: 1200px){
.container {
     width: auto !important;

}
}
@media (min-width: 992px){
.container {
     width: auto !important;
}
}
@media (min-width: 768px){
.container {
     width: auto !important; 
}
}
.container {
     padding-right: 0px !important; 
     padding-left: 0px !important; 
     margin-right: 0px !important; 
     margin-left: 0px !important; 
}
     </style>
</head>

     <!--Header-->
<div id="wrapperHeader">
       <div id="header"> 
    </div> 
</div>
  <!--body-->
<body> 
<div class="row" style="background-color:#F5F5F5">
<div class="container">
     <div class="row">
          <div class="col-lg-16 col-sm-16">
		  <div class="col-md-16 site-nav">
            <nav class="navbar navbar-default" role="navigation" style="background-color:#849BBA;border-color: #559FC2;">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--         <a class="navbar-brand" href="#"></a>
-->
                </div>
             <h1>CDMYSHEET</h1>
			   </div>
		  </div>
		  </div>
		   
<div class="container">
     <div class="row">
	  <div class="col-lg-4 col-sm-4 well login">
		 <?php 
          $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
          echo form_open("login/index", $attributes);?>
          <fieldset>
		        <h2>Login</h2>
               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
               <label for="txt_username" class="control-label">Username</label>
			   </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="txt_username" name="txt_username" placeholder="Username" type="text" value="<?php echo set_value('txt_username'); ?>" />
                    <span class="text-danger"><?php echo form_error('txt_username'); ?></span>
               </div>
               </div>
               </div>
               
               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
               <label for="txt_password" class="control-label">Password</label>
			   </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="txt_password" name="txt_password" placeholder="Password" type="password" value="<?php echo set_value('txt_password'); ?>" />
                    <span class="text-danger"><?php echo form_error('txt_password'); ?></span>
               </div>
               </div>
               </div>
			   
			  <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
			    <label for="txt_domain" class="control-label">Domain</label>
                </div>
			    <div class="col-lg-8 col-sm-8">
			 <select class="form-control" id="txt_domain" name="txt_domain" placeholder="domain" type="doamin" value="<?php echo set_value('txt_domain'); ?>" />
                <span class="text-danger"><?php echo form_error('txt_domain');?></span>
			   <option value="DSmart">DSmart</option>
			   <option value="Cybyte">Cybyte</option>
			   </div>
			    </div>
				</div>
			 
		<p class="remember_me">
          <label>
             <label>
                <input type="checkbox" name="remember_me" id="remember_me">
                  keep me logged in
                </label>
                  </label>
				  </p>
						     
               <div class="col-lg-12 col-sm-12 text-center">
			<div class="form-group">
                    <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Login" />
                    <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-default" value="Cancel" />
					</div>
               </div>
			   <div>
				<a href="#">Forgot Password?</a>
				</div>
          </fieldset>
          <?php echo form_close(); ?>
          </div>
     </div>
</div>
     
<!--load jQuery library-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--load bootstrap.js-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>