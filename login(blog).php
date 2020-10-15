<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
	display:flex;
	justify-content:center;
	align-items:center;
	width:100%; height:98vh;
	background:url('./images/coding.jpg') no-repeat;
	background-position:center;
	background-size:cover;
}
.main{
	text-align:center;height:565px; width:465px;
	<!--padding-top:30px;-->
	
	padding-top:30px;
	padding-bottom:30px;
	padding-right:30px;
	padding-left:30px;
	background:transparent;
	border-radius:8px;
	box-shadow:5px 5px 5px rgba(32,32,32,0.8),inset 3px 3px 3px rgba(41,41,41,0.9);
}
body {font-family: Arial,Roboto, sans-serif;}* {font-size:22px;}
* {box-sizing: border-box;}
.input-container {
  display: -ms-flexbox; /* IE10 */
  display:flex;
  width: 100%;
  margin-bottom: 20px;
  height:30%;
}
.container {
	color:white;
  position: relative;
  border-radius: 10px;
  padding: 10px 10px 10px 0px;
} 
.col {
  width: 100%;
  margin: auto;
  padding: 0 50px;
  margin-top: 5px;
  
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
<!--.insta {
  background-color:rgb(218,38,92);
  color: white;
  text-decoration: none;
  padding-top:5px;
  padding-bottom:5px;
}
.insta:hover{background:rgb(187,16,68)}
.fb {
	height:30px;
  background-color: #0f6faa;
  color: white;
  text-decoration: none;
  padding-top:5px;
  padding-bottom:5px;
}
.fb:hover{background:dodgerblue;}
.youtube {
  background-color:tomato;
  color: white;
  text-decoration: none;
  padding-top:5px;
  padding-bottom:5px;
}
.youtube:hover{background:#e61919;}-->

.input-container {
 filter:invert(1) hue-rotate(180deg);
  width: 100%;
  margin-top: 8%;
  margin-bottom: 8px;
}

.icon {
  padding: 10px;
  background: dodgerblue;  
  color: white;
  min-width: 40px;
  height:8%;
  text-align: center;
}

.input-field {
  width: 80%; height:45px;
  margin:auto;
  margin-bottom:16px;
  border-radius:50px;
  border:1px solid #330099;
  padding: 10px 20px;
  font-size:16px;
  outline: none;
  transition:0.5s;
}

.input-field:focus {
  border: 4px solid cyan;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 25px 25px;
  cursor: pointer;
  width: 100%;
  opacity: 0.8;
  padding: 10px;
  border: none;
  border-radius: 23px;
  margin: 5px 5px;
  display: inline;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; 
}
input:hover,
.btn:hover,.btn1:hover{
	opacity:1;
}
.btn1{display: inline-block;
  color:white;
  padding: 25px 25px;
  /*float:left;*/
  border: none;
  cursor: pointer;
  text-decoration: none;
  width: 100%;
  opacity: 0.6;
  }
 p{color:white;}
<!--span{
	cursor:pointer;
	width:50px;height:50px;
	font-size:20px;
	}-->

</style>
</head>
<body>

	<div class="main">
<form action="/action_page.php" style="max-width:500px;margin:auto">
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="usrnm" >
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="psw">
  </div>

  <button type="submit" class="btn" name="login"><center>Login</center></button>
 <!-- <p>or login with</p>-->
  <div class="container">
  <div class="col">
  
   <!--     <a href="www.instagram.com" class="insta">
          <span class="fa fa-instagram fa-fw" ></span>instagram     
        </a>
		<a href="www.facebook.com" class="fb">
          <span class="fa fa-facebook fa-fw"></span>
        <a href="www.youtube.com" class="youtube">
		<span class="fa fa-youtube fa-fw"></span>youtube
        </a>
      </div>-->
	  
	 <div class="row">
    <div class="col">
      <a href="signup(blog).php" class="btn1">Sign Up</a>
    </div>
    <div class="col">
      <a href="#" class="btn1">Forgot password?</a>
    </div>
    </div>
  </div>
</div>
</div>

</form>

</body>
</html>
 
