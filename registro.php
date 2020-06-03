<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
	<style>
	body{
	background-color: #525252;
	}
	.centered-form{
	margin-top: 60px;
	}

	.centered-form .panel{
	background: rgba(255, 255, 255, 0.8);
	box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
	}
	</style>
<body>
	
	<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Por Favor Registrese 
			    			<small>
			    			<?php
			    				 date_default_timezone_set('America/Mexico_City');
                                
                                ?> | <script type="text/javascript">
          //<![CDATA[
          function makeArray() {
          for (i = 0; i<makeArray.arguments.length; i++)
          this[i + 1] = makeArray.arguments[i];}
          var months = new makeArray('Enero','Febrero','Marzo','Abril','Mayo',
          'Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
          var date = new Date();
          var day = date.getDate();
          var month = date.getMonth() + 1;
          var yy = date.getYear();
          var year = (yy < 1000) ? yy + 1900 : yy;
          document.write("" + day + " de " + months[month] + " del " + year);
          //]]>
          </script></script> | 

			    			 </small></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form"  method="post" action="sendmail2.php" >
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="nombres" id="nombres" class="form-control input-sm" placeholder="Nombres">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="apellidos" id="apellidos" class="form-control input-sm" placeholder="Apellidos">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Direccion de Correos">
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			    						<input type="text" name="comercio" id="comercio" class="form-control input-sm" placeholder="Nombre Comercio">
			    					</div>
			    				</div>
<!--
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
			    					</div>
			    				</div>
-->
			    			</div>
			    			
			    			<input type="submit" value="Registrar" class="btn btn-info btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>

</body>
</html>