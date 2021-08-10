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
<title>Course</title>
</head>
<body>

<style type="text/css" >
@import url('@import url('https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&family=Merienda:wght@700&display=swap');');

body{
	background-color:	 #f2f2f2;
}
*{
	margin:0;
	padding:0;
	box-sizing: border-box;
}
/*heading*/
.heading{
	font-family: 'Merienda', cursive;
	padding: 30px 60px;
	font-size: 35px;
}

.cat{
	padding-left: 20px;
}

.cat-btn-active{
	background-color: black; /* Green */
  border: none;
  color: white;
  padding: 8px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}

.cat-btn-disabled{
  border: none;
  color: #a6a6a6;
  padding: 8px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}

.cat-btn-disabled:hover{
	background-color:#a6a6a6;
  border: none;
  color: white;
  padding: 8px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}



/*course*/
hr.solid {
  border-top: 1px solid #bbb;
}
.course{
		padding: 20px 30px 30px;
}

.course-card{
/*	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
	transition: 0.3s;*/
	width: 21rem;
}

.course-card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.course-img{
height: 200px;
}

.course-body{
	padding: 0px 10px;
}

.course-title{
	font-family: 'Caveat', cursive;
	font-size: 15px;
	text-align: left;
	font-weight: bold;
}

.course-duration{
		color:#00b359;
		font-size: 13px;
}

.course-duration-text{
	font-size: 13px;
}

.course-des{
	font-size: 14px;
	color:#a6a6a6;

}

.course-star{
	padding: 7px 0px;
	font-size: 10px;
}

.checked {
  color: orange;
}

.course-entrol{
	color:#00995c;
	font-size: 13px;
	text-align: right;
text-decoration:none;
padding-right: 0px;
}


/*footer*/



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

</style>
    
</head>
    
    <body>
    <div class="header">  
    @yield('content')
    </div>
    </body>
    
</html>