<?php
session_start();

if (!isset($_SESSION['login_user'])) {
    header('Location: index.php');
} else {
    $user_check = $_SESSION['login_user'];
    //echo $user_check;
    ?>



<html>
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Collegify</title>
        <link rel="stylesheet" href="res/css/bootstrap.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/css/bootstrap-select.min.css">    
         <link href="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
</head>
<style>
                .brand-logo img{
                    margin: -10px 0 0 15px !important;
                }   
                 .input-group{
                margin-bottom: 10px;
            }.form-group{
                margin-bottom: 10px;
            }
    .tab button{
        background-color:transparent;
	-moz-border-radius:28px;
	-webkit-border-radius:28px;
	border:4px solid #e2c326;
	display:inline-block;
	cursor:pointer;
	color:#000000;
	font-family:Arial;
	font-size:17px;
	text-decoration:none;
    margin-bottom: 10px;   
	padding: 30px 30px;
}
.tab button:hover {
	background-color:transparent;
    box-shadow: 3px 3px 3px black;
}
.tab button:active {
	position:relative;
	top:1px;
}
.tabcontent {
    display: none;
}
     .bttn{
        background-color:#e2c226;
	-moz-border-radius:28px;
	-webkit-border-radius:28px;
	border: none;
	display:inline-block;
	cursor:pointer;
	color:#000000;
	font-family:Arial;
	font-size:17px;
	text-decoration:none;
    margin-bottom: 10px;   
	padding: 15px 40px;
}
.bttn:hover {
	background-color:#f4e842;
}
.bttn:active {
	position:relative;
	top:1px;
}
    #myBtn {
                display: none;
                position: fixed;
                bottom: 20px;
                right: 30px;
                z-index: 99;
                border: none;
                outline: none;
                background-color: transparent;
                color: white;
                cursor: pointer;
                padding: 15px;
                border-radius: 10px;
            }

            #myBtn:hover {
                background-color: transparent;
            }
</style>
<body>
            <div class="navbar navbar-default navbar-fixed-top" role="navigation" style="padding: 1vw;background-color: white">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                            <div class="brand-logo">
                                <img src="res/img/logo.png" alt="Brand Logo" width="170" height="40">
                            </div>
                        </a>
                    </div>
                    <div class="navbar-collapse collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li><a href="search.php" style="color: black"><b>SEARCH-n-FIND</b></a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user" style="color: black"></i><b><?php echo " " . "$user_check"; ?></b> <span class="caret" style="color: black"></span></a>
                                <ul class="dropdown-menu">
                                    
                                    <li><a href="res/php/logout.php">Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    
            <div style="margin-top: 12vh;background-color: #e2c226;padding-top:20px;padding-bottom: 20px ">
                <center><img alt="student" src="res/img/factor.png" width="120" height="120"></center>
                <center><p style="font-size: 9vmin;color: darkblue;"><b>             STUDENT INFORMATION</b></p></center>
    </div>
                
                <form method="post" action="" id="registration">
                <div class="container" style="margin-top: 5vh">
                    <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                <input class="form-control" type="text" name="date" id="date" placeholder="Date" data-provide="datepicker"/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                <input class="form-control" type="text" name="counselor" id="counselor" value="<?php echo $user_check; ?>" onkeyup="valName('smname', 2)" disabled/>
                            </div>
                        </div>
<!--
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input class="form-control" type="text" name="slname" id="slname" placeholder="Last Name" onkeyup="valName('slname', 1)" />
                            </div>
                        </div>    
-->
                    </div>
                </div>
                    <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                <input class="form-control" type="text" name="name" id="name" placeholder="Student Name" onkeyup="valName('sfname', 1)" />
                            </div>
                        </div>
                    </div>
                    </div>
                     <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-map fa-fw"></i></span>
                                <input class="form-control" type="text" name="addr" id="addr" placeholder="Address" onkeyup="valName('sfname', 1)" />
                            </div>
                        </div>
                    </div>
                    </div>
                      <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-4">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
                                <input class="form-control" type="text" name="ph1" id="ph1" placeholder="Phone" onkeyup="valName('sfname', 1)" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
                                <input class="form-control" type="text" name="ph2" id="ph2" placeholder="Parent's Phone" onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
                                <input class="form-control" type="text" name="email" id="email" placeholder="E-mail" onkeyup="valName('slname', 1)" />
                            </div>
                        </div>    
                    </div>
                </div>
                     <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-institution fa-fw"></i></span>
                                <input class="form-control" type="text" name="cllg" id="cllg" placeholder="School/College" onkeyup="valName('sfname', 1)" />
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-12">
                        <b>CLASS XI-XII BOARD :</b>
                        <label class="radio-inline">
                          <input type="radio" value="ISC" name="board">ISC
                        </label>
                        <label class="radio-inline">
                          <input type="radio" value="CBSC"  name="board">CBSE
                        </label>
                        <label class="radio-inline">
                          <input type="radio" value="IB"  name="board">IB
                        </label>
                            <label class="radio-inline">
                          <input type="radio" value="IGCSE" name="board">IGCSE
                        </label>
                            <label class="radio-inline">
                          <input type="radio" value="State" name="board">State
                        </label>
                        </div>
                    </div>
                    </div>
                     </div>
                    
                    <div style="margin-top: 2vh;background-color: #eff0f2;padding-top:10px;padding-bottom: 10px">
                              
                        <div class="row tab">
                    <div class="col-lg-10 col-lg-offset-1">
                        <center>
                        <div class="col-lg-3">
                            <button type="button" class="tablinks" id="ixr" onclick="openResult(event,'ix',id)">IX Result</button>
                        </div>
                        <div class="col-lg-3">
                            <button type="button" class="tablinks"  id="xr" onclick="openResult(event,'x',id)">X Result</button>
                        </div>
                            <div class="col-lg-3">
                            <button type="button" class="tablinks" id="xir" onclick="openResult(event,'xi',id)">XI Result</button>
                        </div>
                        <div class="col-lg-3">
                            <button type="button" class="tablinks"  id="xiir" onclick="openResult(event,'xii',id)" >XII Result</button>
                        </div>
                            </center>
                            </div>
                               </div> 
                        
                        <section id="ix" class="tabcontent">
                           <div class="container" style="margin-top: 5vh">
                    <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sticky-note fa-fw"></i></span>
                                <input class="form-control" type="text" name="ixs1" id="ixs1" value="Overall" disabled />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="ixp1" id="ixp1" placeholder="Percentage" onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sticky-note fa-fw"></i></span>
                                <input class="form-control" type="text" name="ixs2" id="ixs2"  value="English" disabled />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="ixp2" id="ixp2" placeholder="Percentage" onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sticky-note fa-fw"></i></span>
                                <input class="form-control" type="text" name="ixs3" id="ixs3" value="Maths"  disabled/>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="ixp3" id="ixp3" placeholder="Percentage" onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sticky-note fa-fw"></i></span>
                                <input class="form-control" type="text" name="ixs4" id="ixs4" placeholder="Subject 4" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="ixp4" id="ixp4" placeholder="Percentage"  onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sticky-note fa-fw"></i></span>
                                <input class="form-control" type="text" name="ixs5" id="ixs5" placeholder="Subject 5" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="ixp5" id="ixp5" placeholder="Percentage" onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
          </div>
                </div>
                                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sticky-note fa-fw"></i></span>
                                <input class="form-control" type="text" name="ixs6" id="ixs6" placeholder="Subject 6" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="ixp6" id="ixp6" placeholder="Percentage" onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sticky-note fa-fw"></i></span>
                                <input class="form-control" type="text" name="ixs7" id="ixs7" placeholder="Subject 7" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="ixp7" id="ixp7" placeholder="Percentage" onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sticky-note fa-fw"></i></span>
                                <input class="form-control" type="text" name="ixs8" id="ixs8" placeholder="Subject 8" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="ixp8" id="ixp8" placeholder="Percentage" onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
                    </div>
                                    </div>      
                     <center><button type="button" id="1" onclick="tabaction(id)" style="background-color: transparent;border: none;"><span><i class="fa fa-angle-up fa-4x" aria-hidden="true"></i></span></button></center>
                                
                        </div>
                            </section>
                        
                        
                        <section id="x" class="tabcontent">
                           <div class="container" style="margin-top: 5vh">
                    <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sticky-note fa-fw"></i></span>
                                <input class="form-control" type="text" name="xs1" id="xs1" value="Overall" disabled />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="xp1" id="xp1" placeholder="Percentage" onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sticky-note fa-fw"></i></span>
                                <input class="form-control" type="text" name="xs2" id="xs2" value="English" disabled />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="xp2" id="xp2" placeholder="Percentage" onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sticky-note fa-fw"></i></span>
                                <input class="form-control" type="text" name="xs3" id="xs3" value="Maths" disabled/>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="xp3" id="xp3" placeholder="Percentage"  onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sticky-note fa-fw"></i></span>
                                <input class="form-control" type="text" name="xs4" id="xs4" placeholder="Subject 4" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="xp4" id="xp4" placeholder="Percentage" onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sticky-note fa-fw"></i></span>
                                <input class="form-control" type="text" name="xs5" id="xs5" placeholder="Subject 5" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="xp5" id="xp5" placeholder="Percentage" onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
          </div>
                </div>
                                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sticky-note fa-fw"></i></span>
                                <input class="form-control" type="text" name="xs6" id="xs6" placeholder="Subject 6" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="xp6" id="xp6" placeholder="Percentage" onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sticky-note fa-fw"></i></span>
                                <input class="form-control" type="text" name="xs7" id="xs7" placeholder="Subject 7" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="xp7" id="xp7" placeholder="Percentage" onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sticky-note fa-fw"></i></span>
                                <input class="form-control" type="text" name="xs8" id="xs8" placeholder="Subject 8" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="xp8" id="xp8" placeholder="Percentage" onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
                    </div>
                </div>
                <center><button type="button" id="2" onclick="tabaction(id)" style="background-color: transparent;border: none;"><span><i class="fa fa-angle-up fa-4x" aria-hidden="true"></i></span></button></center>
                      </div>
                            </section>
                        
                        
                        <section id="xi" class="tabcontent">
                           <div class="container" style="margin-top: 5vh">
                    <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sticky-note fa-fw"></i></span>
                                <input class="form-control" type="text" name="xis1" id="xis1" value="Overall" disabled/>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="xip1" id="xip1" placeholder="Percentage" onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sticky-note fa-fw"></i></span>
                                <input class="form-control" type="text" name="xis2" id="xis2" value="English" disabled/>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="xip2" id="xip2" placeholder="Percentage"  onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sticky-note fa-fw"></i></span>
                                <input class="form-control" type="text" name="xis3" id="xis3" value="Maths" disabled/>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="xip3" id="xip3" placeholder="Percentage" onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sticky-note fa-fw"></i></span>
                                <input class="form-control" type="text" name="xis4" id="xis4" placeholder="Subject 4" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="xip4" id="xip4" placeholder="Percentage"  onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sticky-note fa-fw"></i></span>
                                <input class="form-control" type="text" name="xis5" id="xis5" placeholder="Subject 5" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="xip5" id="xip5" placeholder="Percentage" onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
          </div>
                </div>
                                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sticky-note fa-fw"></i></span>
                                <input class="form-control" type="text" name="xis6" id="xis6" placeholder="Subject 6" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="xip6" id="xip6" placeholder="Percentage" onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sticky-note fa-fw"></i></span>
                                <input class="form-control" type="text" name="xis7" id="xis7" placeholder="Subject 7" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="xip7" id="xip7" placeholder="Percentage" onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sticky-note fa-fw"></i></span>
                                <input class="form-control" type="text" name="xis8" id="xis8" placeholder="Subject 8" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="xip8" id="xip8" placeholder="Percentage" onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
                    </div>
                </div>
                 <center><button type="button" id="3" onclick="tabaction(id)" style="background-color: transparent;border: none;"><span><i class="fa fa-angle-up fa-4x" aria-hidden="true"></i></span></button></center>
             </div>
                            </section>
                        
                        
                        <section id="xii" class="tabcontent">
                           <div class="container" style="margin-top: 5vh">
                    <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sticky-note fa-fw"></i></span>
                                <input class="form-control" type="text" name="xiis1" id="xiis1" value="Overall" disabled/>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="xiip1" id="xiip1" placeholder="Percentage"  onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sticky-note fa-fw"></i></span>
                                <input class="form-control" type="text" name="xiis2" id="xiis2" value="English" disabled/>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="xiip2" id="xiip2" placeholder="Percentage" onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sticky-note fa-fw"></i></span>
                                <input class="form-control" type="text" name="xiis3" id="xiis3" value="Maths" disabled />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="xiip3" id="xiip3" placeholder="Percentage" onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sticky-note fa-fw"></i></span>
                                <input class="form-control" type="text" name="xiis4" id="xiis4" placeholder="Subject 4" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="xiip4" id="xiip4" placeholder="Percentage" onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sticky-note fa-fw"></i></span>
                                <input class="form-control" type="text" name="xiis5" id="xiis5" placeholder="Subject 5" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="xiip5" id="xiip5" placeholder="Percentage" onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
          </div>
                </div>
                                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sticky-note fa-fw"></i></span>
                                <input class="form-control" type="text" name="xiis6" id="xiis6" placeholder="Subject 6" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="xiip6" id="xiip6" placeholder="Percentage" onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sticky-note fa-fw"></i></span>
                                <input class="form-control" type="text" name="xiis7" id="xiis7" placeholder="Subject 7" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="xiip7" id="xiip7" placeholder="Percentage" onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sticky-note fa-fw"></i></span>
                                <input class="form-control" type="text" name="xiis8" id="xiis8" placeholder="Subject 8" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="xiip8" id="xiip8" placeholder="Percentage" onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
                    </div>
                </div>
                 <center><button type="button" id="4" onclick="tabaction(id)" style="background-color: transparent;border: none;"><span><i class="fa fa-angle-up fa-4x" aria-hidden="true"></i></span></button></center>
                             </div>
                            </section>
                        
                        
                    </div>
                    
                    
                    <div class="container" style="margin-top: 5vh">
                    <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                         <div class="col-lg-3">
                             <p style="padding-top: 5px"><b>GRADUATION :</b></p>
                        </div>
                        
                        <div class="col-lg-3">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                <input class="form-control" type="text" name="gdate" id="gdate" placeholder="Passout Year" data-provide="datepicker"/>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="gp" id="gp" placeholder="Percentage" onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <input class="form-control" type="text" name="gstrm" id="gstrm" placeholder="Stream" onkeyup="valName('slname', 1)" />
                            </div>
                        </div>    
                    </div>
                </div>
                        
                       <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                         <div class="col-lg-3">
                             <p style="padding-top: 5px"><b>POST GRADUATION :</b></p>
                        </div>
                        
                        <div class="col-lg-3">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                <input class="form-control" type="text" name="pgdate" id="pgdate" placeholder="Passout Year" data-provide="datepicker"/>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-percent fa-fw"></i></span>
                                <input class="form-control" type="text" name="pgp" id="pgp" placeholder="Percentage" onkeyup="valName('smname', 2)" />
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <input class="form-control" type="text" name="pgstrm" id="pgstrm" placeholder="Stream" onkeyup="valName('slname', 1)" />
                            </div>
                        </div>    
                    </div>
                </div> 
                        <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-5" style="margin-top: 10px;margin-bottom: 10px">
                        <b>TEST TAKEN :</b>
                        <label class="checkbox-inline">
                          <input type="checkbox" value="SAT" name="exam[]">SAT
                        </label>
                        <label class="checkbox-inline">
                          <input type="checkbox" value="GMAT"  name="exam[]">GMAT
                        </label>
                        <label class="checkbox-inline">
                          <input type="checkbox" value="GRE"  name="exam[]">GRE
                        </label>
                            </div>
                            <div class="col-lg-3">
                            <div class="form-group">
                                <input class="form-control" type="text" name="exam[]" id="" placeholder="Others" onkeyup="valName('slname', 1)" />
                            </div>
                        </div>  
                        
                    </div>
                    </div>
                        
                         <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea class="form-control" name="tarea" id="tarea" placeholder="Extra-Curricular Activities/Leadership(mention level if applicable)" rows="5" onkeyup="valCmnt()"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                        
                    <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                         <div class="col-lg-4">
                             <p style="padding-top: 5px"><b>INTENDED MAJOR/FIELDS OF INTEREST:</b></p>
                        </div>
                        
                        <div class="col-lg-8">
                            <div class="form-group">
                                <input class="form-control" type="text" name="major" id="major" placeholder="Enter Here" />
                            </div>
                        </div>
                        </div>
                        </div>
                        
                        <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-10" style="margin-top: 10px;margin-bottom: 10px">
                        <b>DESTINATIONS(ALL THAT APPLY):</b>
                        <label class="checkbox-inline">
                          <input type="checkbox" value="US" name="dest[]">US
                        </label>
                        <label class="checkbox-inline">
                          <input type="checkbox" value="UK"  name="dest[]">UK
                        </label>
                        <label class="checkbox-inline">
                          <input type="checkbox" value="CANADA"  name="dest[]">CANADA
                        </label>
                            <label class="checkbox-inline">
                          <input type="checkbox" value="AUSTRALIA"  name="dest[]">AUSTRALIA
                        </label>
                            <label class="checkbox-inline">
                          <input type="checkbox" value="EUROPE"  name="dest[]">EUROPE
                        </label>
                            <label class="checkbox-inline">
                          <input type="checkbox" value="SINGAPORE"  name="dest[]">SINGAPORE
                        </label>
                            </div>
                         <div class="col-lg-2">
                            <div class="form-group">
                                <input class="form-control" type="text" name="dest[]" id="" placeholder="Others" onkeyup="valName('slname', 1)" />
                            </div>
                        </div>  
                            </div>
                        </div>
                        
                        <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                         <div class="col-lg-8">
                             <p style="padding-top: 5px"><b>ARE YOU TAKING TEST PREP SERVICES FROM ROADS?</b></p>
                        </div>
                        
                        <div class="col-lg-4">
                            <label class="radio-inline">
                          <input type="radio" value="YES" name="Q1">YES
                        </label>
                        <label class="radio-inline">
                          <input type="radio" value="NO"  name="Q1">NO
                        </label>
                        </div>
                        </div>
                        </div>
                        
                        <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                         <div class="col-lg-8">
                             <p style="padding-top: 5px"><b>IF NO,ARE YOU TAKING TEST PREP SERVICES FROM ROADS?</b></p>
                        </div>
                        
                        <div class="col-lg-4">
                            <label class="radio-inline">
                          <input type="radio" value="YES" name="Q2">YES
                        </label>
                        <label class="radio-inline">
                          <input type="radio" value="NO"  name="Q2">NO
                        </label>
                        </div>
                        </div>
                        </div>
                        
                         <div class="row">
                             
                    <div class="col-lg-10 col-lg-offset-1">
                         <div class="col-lg-4">
                             <p style="padding-top: 5px"><b>IF YES,WHERE?</b></p>
                        </div>
                        
                        <div class="col-lg-8">
                            <div class="form-group">
                                <input class="form-control" type="text" name="ans" id="ans" placeholder="Enter Here" />
                            </div>
                        </div>
                        </div>
                                
                        </div>
                        
                        <div class="row" style="margin-top: 5vh" >
                            <center>
                    <div class="col-lg-4 col-lg-offset-4">
                         <div class="col-lg-6">
                             <button type="submit" class="bttn" >SUBMIT</button>
                        </div>
                        
                        <div class="col-lg-6">
                           
                                <button type="button" class="bttn" id="rfs" >REFRESH</button>
                            
                        </div>
                        </div>
                                 </center>
                        </div>
                        <center><p id="msg" style="color: blue"></p></center>
                    </div> 
                </form>
          
                <section id="footer">
            <div class="container-fluid"  style="background-color: #0c0c07;padding: 20px;margin-top: 10vh">
                <div class="row">
                    <div class="col-lg-4 text-center">
                        <p style="color: white">Copyright <i class="fa fa-copyright"></i> 2018 <a href="#">Collegify</a></p>
                    </div>
                </div>
            </div>
        </section>
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-circle-o-up fa-3x" style="color: #e2c226"></i></button>
    
    
    
    
    
        <!--         JQuery 3.2.1 -->
        <script type="text/javascript" src="res/js/jquery-3.2.1.js"></script>
        <script
			  src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>
		
        <!-- Bootstrap -->
        <script type="text/javascript" src="res/js/bootstrap.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
        <script type="text/javascript" src="res/js/bootstrap-datetimepicker.js"></script>  
        <script type="text/javascript">
          $(document).ready(function () {

                    $('#date').datetimepicker({
                        useCurrent: false,
                        format: 'YYYY-MM-DD'
                    });
                     $('#gdate').datetimepicker({
                        useCurrent: false,
                        format: 'YYYY-MM-DD'
                    });
                     $('#pgdate').datetimepicker({
                        useCurrent: false,
                        format: 'YYYY-MM-DD'
                    });
                    
               $('#registration').on('submit',function (e) {
                e.preventDefault();
              $('#msg').html("");
               //console.log("hello");
                $.ajax({
                    url: "res/php/insert.php",
                    type: "POST",
                    data: $("#registration").serialize(),
                    success: function (data) {
                        $('#registration')[0].reset(); 
                        $('#msg').html(data);                      
                    }
                });
            });
              
              $("#rfs").click(function(){
                 $('#registration')[0].reset(); 
              });
                 
                });
    function openResult(evt,cName,id) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
//    document.getElementById(cName).style.display = "block";
        $("#"+cName).slideDown("slow");
    evt.currentTarget.className += " active";
    $(".tab button").css("background-color","");
    $("#"+id).css("background-color","#e2c226");
}
    function tabaction(id){
        var j=$("#"+id).parent().closest("section").attr("id");
        //$("#"+j).css("display","none");
        $("#"+j).slideUp("slow");
        //console.log(j);
    }
        window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("myBtn").style.display = "block";
                } else {
                    document.getElementById("myBtn").style.display = "none";
                }
            }

            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }    
            
        </script>
</body>
</html>

<?php
}
?>