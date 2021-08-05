<!DOCTYPE html>
<html>
<head>
<title>Admin Login & Register Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        
<style type="text/css" >
*{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
.hero{
    height: 100%;
    width: 100%;
    background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(724055733047bec21ad96ce4dad37013.jpg);
    background-position: center;
    background-size: cover;
    position: absolute;

}

.form-box{
    width: 380px;
    height: 480px;
    position: relative;
    margin: 6% auto;
    background: #fff;
    padding: 5px;
    overflow: hidden;
}

.button-box{
    width: 220px;
    margin: 25px auto;
    position: relative;
    /* box-shadow: 0 0 20px 9px #da4c141f; */
    border-radius: 30px;
}

.toggle-btn{
    padding: 10px 30px;
    /* cursor: pointer; */
    background: transparent;
    border: 0;
    outline: none;
    position: relative;
}

#btn{
    top: 0;
    left: 0;
    position: absolute;
    width: 240px;
    height: 100%;
    background: linear-gradient(to right, #ff105f, #ffad06);
    border-radius: 2px;
    transition: .5s;
}

.social-icons{
    margin: 30px auto;
    text-align: center;
}

.social-icons img{
    margin: 30px;
}

.input-group{
    top: 180px;
    position: absolute;
    width: 280px;
    transition: .5s;
}

.input-field{
    width: 100%;
    padding: 10px 0;
    margin: 5px 0;
    border-left: 0;
    border-top: 0;
    border-right: 0;
    border-bottom: 1px solid #999;
    outline: none;
    background: transparent;
}

.submit-btn{
    width: 85%;
    padding: 10px 30px;
    cursor: pointer;
    display: block;
    margin: auto;
    background: linear-gradient(to right, #ff105f, #ffad06);
    border: 0;
    outline: none;
    border-radius: 30px
}

.check-box{
    margin: 30px 10px 30px 0;
}
span{
    color: #777;
    font-size: 12px;
    bottom: 68px;
    position: absolute;
}

#Login{
    left: 50px;
}
#Register{
    left: 450px;
}

</style>

</head>
<body>
<div class="hero">  
@yield('content')
</div>

</body>

<script>
    var x= document.getElementById("Login");
    // var y= document.getElementById("Register");
    var z= document.getElementById("btn")

    // function Register(){
    //     x.style.left = "-400px";
    //     y.style.left = "50px";
    //     z.style.left = "110px";
    // }
    function Login(){
        x.style.left = "50px";
        // y.style.left = "450px";
        z.style.left = "0";
    }
</script>