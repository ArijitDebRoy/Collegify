<?php
session_start();
error_reporting(0);
if(isset($_SESSION['login_user'])){
header("location: reg.php");
}
else{
?>



<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Collegify</title>
        <!--<link rel="stylesheet" href="res/css/bootstrap.css">--> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="res/css/Gtext.css"/>
        <link type="text/css" rel="stylesheet" href="res/css/progress.css"/>
        <style>
            input{
                border-bottom: 1px solid #000000;
            }
            .bttn{
        background-color:transparent;
	-moz-border-radius:28px;
	-webkit-border-radius:28px;
	border:3px solid #e2c326;
	display:inline-block;
	cursor:pointer;
	color:#000000;
	font-family:Arial;
	font-size:17px;
	text-decoration:none;
    margin-bottom: 10px;   
	padding: 8px 20px;
}
.bttn:hover {
	background-color:#f4e842;

}
.bttn:active {
	position:relative;
	top:1px;
}
        </style>
    </head>
    <body>

        <img src="res/img/back.jpg" alt="" style="width:100vw;height:100vh;position:fixed;z-index:-1;opacity:0.5">

        <div class="container" id="content">
            
                <div class="col-lg-4 col-lg-offset-4" style="background-color: white;box-shadow: 5px 5px 5px;padding-left: 5vh; padding-right:5vh;padding-bottom:5vh; margin-top:8vh">
                    <div id="loder" style="display:none;margin-bottom:-20px;margin-left:-2vw;margin-right:-2vw">
                    <div class="progress auto-progress" style="height: 5px;">
                        <div class="progress-bar progress-bar-striped active bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="height :5px;background-color:darkblue">
      
                        </div>
                    </div>  
                    </div>
                    <div style="padding-top:5vh">
                    <div style="background-color: #e2c226;height: 70px; padding: 1px 2px 1px 10px;">
                       <center> <img src="res/img/logo.png" alt="Brand Logo" width="150" height="70"></center>
                       
                    </div>
                    <br><br>
                    <P style="font-size: 4vmin;color: darkblue">Hi Admin,</P>
                    <br>
                    <center><p id="ack" style="color:red"></p></center>
                    <br>
                    <form id="login"  action="login.php" method="post">
                        <div class="group">      
                            <input id="in3" type="text" style="width: 100%" name="userid" >
                            <span class="highlight" style="width: 100%"></span>
                            <span class="bar" style="width: 100%"></span>
                            <label id='lbl1' class="">Enter your User ID</label>
                        </div>
                        <div class="group">      
                            <input id="in4" type="password" style="width: 100%" name="pass" >
                            <span class="highlight" style="width: 100%"></span>
                            <span class="bar" style="width: 100%"></span>
                            <label id='lbl2' class="">Enter your Password</label>
                        </div>
                        <br>
                        <div class="row" style="margin-top: 1px;margin-bottom: 20px">
                            <div class="col-md-8" style="padding-top:1vh">
                                <!--<a href="">Forgot Password?</a>-->
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="bttn" style="width:100%; color:black" id="login">LogIn</button>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
           </div>
    
        <!-- JQuery 3.2.1 -->
        <script type="text/javascript" src="res/js/jquery-3.2.1.js"></script>
        <!-- Bootstrap -->
        <script type="text/javascript" src="res/js/bootstrap.js"></script>
        <!-- Main -->
<!--        <script type="text/javascript" src="res/js/main.js"></script>-->
        <script>
            $(document).ready(function () {
                $('#login').on('submit',function (e) {
                e.preventDefault();
                $('#ack').html("");
//                 var chk=$("#in1").val();
//                    console.log(chk);
                $.ajax({
                    url: "res/php/login.php",
                    type: "POST",
                    data: {
                        userid: $('#in3').val(),
                        pass: $('#in4').val(),
                    },

                    success: function (data) {
                        if (data.includes('true')){
                            console.log(data);
                            window.location.href = 'reg.php';
                        //$('#login-form').submit();
                        }else
                        $('#ack').html(data);

                    }
                });
            });
                
                $(document).ajaxStart(function () {
                $("#loder").css("display", "block");
                    });
                    $(document).ajaxComplete(function () {

                    $("#loder").css("display", "none");
                   clearInput();
                    });
           
        $('#in3').blur(function () {

        if ($(this).val() !== '')
            $('#lbl1').addClass('used');

        else
            $('#lbl1').removeClass('used');

    });
    $('#in4').blur(function () {

        if ($(this).val() !== '')
            $('#lbl2').addClass('used');

        else
            $('#lbl2').removeClass('used');

    });
            });
            function clearInput() {      /*this jQuery function used to clear all fields after submission*/
    
        $('#in4').val('');
   
            }
            
        </script>
    </body>

</html>

<?php
}
?>
