<!DOCTYPE html>
<html>
<head>
	<title>MyPortfolio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,  initial-scale=1.0, user-scalable=yes" >
<!--css-->	
<link rel="stylesheet" type="text/css" href="css_styles\webproject.css">
<link rel="stylesheet" type="text/css" href="js_files/css/galeria.css">
<!--javascript-->
<script type="text/javascript" src="js_files/jquery.js"></script>
<script type="text/javascript" src="js_files/scripts.js"></script>

<script type="text/javascript">var _siteRoot='/main.blade.php',_root='/main.blade.php';
</script> 		  
</head>
<body>
<style type="text/css">

table{
		width: 500px;
		background-color: rgba(54, 54, 54, 0.35);
		margin-right: auto;
		margin-left: auto;
		margin-top: 100px;
		border: 1px outset rgba(24, 24, 24, 0.85);
		font-family: verdana, sans-serif;
		color: #ffffff;
	}
body { 
	  background-color: #111211; 
      background-repeat: no-repeat;
      background-image: url(../css_styles/images/carwide.jpg);
      background-size: 100%;
	 }	

#h1create{
		  width: all;
		  height: 50px;
		  font-family: verdana, sans-serif;
		  text-align: center;
		  font-style: italic;
		  color: #ffffff;
		  background-color: #262522;
		  text-shadow: 5px 5px 5px rgba(180, 255, 132, 1);
		  box-shadow: 30px 0px 30px #ffffff, -30px 0px 30px #ffffff;
		  transition: 0.3s;
		 }
#h1create:hover {color: yellow;
          transform: scale(1);
          box-shadow:  30px 0px 30px #ff0000, -30px 0px 30px #ff0000;
         }  

.footcreate{
			margin-top: 260px;
			font-family: verdana, sans-serif;
			color: #ffffff;
			text-align: center;
			}
@media all and (min-width: 600px) and (max-width: 1023px)
{
 table{
 	   width: 100%;
 	   font-size: 10px;
 	   background-color: rgba(54, 54, 54, 0.35);
	   margin-right: auto;
	   margin-left: auto;
	   margin-top: 100px;
	   border: 1px outset rgba(24, 24, 24, 0.85);
	   font-family: verdana, sans-serif;
	   color: #ffffff;
 	  }
 body{
 	  background-size: 100%;
 	 }
 #h1create{
 		  font-size: 100%;	
		  font-family: verdana, sans-serif;
		  text-align: center;
		  color: #ffffff;
		  background-color: #262522;
		 } 		 	 
 .footcreate{
			margin-top: 90%;
			font-family: verdana, sans-serif;
			color: #ffffff;
			text-align: center;
			} 	  
}

@media all and (max-width: 599px)
{
 table{
 	   width: 100%;
 	   font-size: 10px;
 	   background-color: rgba(54, 54, 54, 0.35);
	   margin-right: auto;
	   margin-left: auto;
	   margin-top: 10px;
	   border: 1px outset rgba(24, 24, 24, 0.85);
	   font-family: verdana, sans-serif;
	   color: #ffffff;
 	  }
 body{
 	  background-size: 100%;
 	 }
  #h1create{
 		  font-size: 90%;	
		  font-family: verdana, sans-serif;
		  font-style: italic;
		  text-align: center;
		  color: #ffffff;
		  background-color: #262522;
		 }	 
 .footcreate{
			margin-top: 50%;
			font-family: verdana, sans-serif;
			color: #ffffff;
			text-align: center;
			} 
}
</style>	
<div>
	@yield("Head")
</div>
<div>
	@yield("Middle")
</div>	

<div>
	@yield("Foot")
</div>
<script src="../scripts.js"></script>
<script src="../ie6.js"></script>
<script src="../jquery.js"></script>
</body>
</html>