<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<title>Home</title>


<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

body{
	background-color: #d9d9d9;
}
*{
	margin:0;
	padding:0;
	box-sizing: border-box;
}

/*Welcome*/
#welcome{
	margin:10px 0px;
	background-color: #f2f2f2;
	width: 100%;
	padding: 40px 60px;
}

.quote_img{
	width:100%;
	height: 700px;
}

.welcome-para{
	padding: 40px 60px;
}
.welcome-text{
	font-family: STIX Two;
	font-size: 30px;
	color: #24478f;
	text-align: center;
	font-weight: bold;

}
.welcome-content{
	font-size: 15px;
	text-align: center;
	color: #8c8c8c;
}


/*Footer*/
.footer-container{
  margin:0;
  padding:0;
  box-sizing: border-box;
	max-width: 1170px;
	margin:auto;
}
.footer-row{
  margin:0;
  padding:0;
  box-sizing: border-box;
	display: flex;
	flex-wrap: wrap;
}
ul{
	list-style: none;
}
.footer{
  line-height: 1.5;
  font-family: 'Poppins', sans-serif;
	background-color: #24262b;
    padding: 70px 0;
}
.footer-col{
  margin:0;
  padding:0;
  box-sizing: border-box;
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
	font-size: 18px;
	color: #ffffff;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #e91e63;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 300;
	color: #bbbbbb;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover{
	color: #ffffff;
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(255,255,255,0.2);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #ffffff;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #24262b;
	background-color: #ffffff;
}

/*responsive*/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}
.carousel-container{
	height: 600px;
  
}


</style>
    
</head>

<body>
<div class=”header”>  
@yield('content')
</div>
</body>

</html>


