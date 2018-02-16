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
	padding: 6px 20px;
}
.bttn:hover {
	background-color:#f4e842;

}
.bttn:active {
	position:relative;
	top:1px;
}
        .fx{
            position: fixed;
            bottom: -8px;
            right: 5px;
        }
         #myBtn {
                display: none;
                position: fixed;
                bottom: 50px;
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
        .table th {
   text-align: center;   
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
                            <li><a href="reg.php" style="color: black"><b>REGISTER!</b></a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user" style="color: black"></i><b><?php echo " " . $user_check; ?></b><span class="caret" style="color: black"></span></a>
                                <ul class="dropdown-menu">
                                    
                                    <li><a href="res/php/logout.php">Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        
        
        
            <form id="track">
        
            <div  style="margin-top: 13vh">
                    <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-search fa-fw"></i></span>
                                <input class="form-control" type="text" name="search" id="search" placeholder="Search with ID/Name/College/e-mail etc." />
                            </div>
                        </div>
                        </div>
                </div>
        
        
        
    
            <div style="margin-top: 1vh;margin-bottom: 2vh; background-color: #e2c226;padding-top:20px;padding-bottom: 20px;width: 100vw">
                <center><img alt="student" src="res/img/search.png" width="120" height="120"></center>
                <center><p style="font-size: 9vmin;color: darkblue;"><b>             DATA FINDER</b></p></center>
            </div>
                
                
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-5">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                <input class="form-control" type="text" name="start" id="start" placeholder="Start Date" data-provide="datepicker"/>
                            </div>
                        </div>
                        
                         <div class="col-lg-5">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                <input class="form-control" type="text" name="end" id="end" placeholder="End Date" data-provide="datepicker"/>
                            </div>
                        </div>
                        <center>
                        <div class="col-lg-2">
                                <button type="submit" class="bttn">
                                <span><i class="fa fa-search fa-fw"></i></span>
                                </button>
                            </div>
                            </center>
                        </div>
                        </div>
                </div>
                
              
            </form>
        
        
        
        
        
         <div class="table-responsive" style="display: none;" id="info">          
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th colspan="5">Student's Info</th>
                                            <th colspan="3">Contact Details</th>
                                            <th colspan="2">Academic Details</th> 
                                            <th colspan="4">Overall (%)</th> 
                                            <th rowspan="2">Schedule</th>
                                            <th rowspan="2">Del</th>
                                            <th colspan="3">Graduation</th>
                                            <th colspan="3">Post Graduation</th>
                                            <th colspan="7">Other Details</th>
                                            
                                        </tr>
                                        <tr>
                                            <th>Id</th>
                                            <th>Date</th>
                                            <th>Name</th>
                                            <th>Counselor</th>
                                            <th>Addr</th>
                                            <th>Ph</th>
                                            <th>Parent's ph</th>
                                            <th>email</th>
                                            <th>Institute</th>
                                            <th>XI-XII board</th>
                                            <th>IX</th>
                                            <th>X</th>
                                            <th>XI</th>
                                            <th>XII</th>
                                            <th>Date</th>
                                            <th>%</th>
                                            <th>Stream</th>
                                            <th>Date</th>
                                            <th>%</th>
                                            <th>Stream</th>
                                            <th>Exams</th>
                                            <th>Activity</th>
                                            <th>Major</th>
                                            <th>destination</th>
                                            <th>Q1</th>
                                            <th>Q2</th>
                                            <th>Ans.</th>
                                                                                        
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
        <button class="fx" id="agnd" type="button" style="background-color:#e2c326;color: blue;font-size: 17px;border: none;padding: 6px 20px" data-target= "#meet" data-toggle= "modal"><B>TODAY'S AGENDA</B></button>
        <div id="schedule" class="modal fade" role="dialog">

                <div class="modal-dialog modal-md">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" onclick="">&times;</button>
                            <h4 class="modal-title">Scheduler</h4>
                        </div>
                        <div class="modal-body text-center" style="padding: 10px; vertical-align: middle">
                            <div class="row">
                             
                        <div class="col-lg-10 col-lg-offset-1">
                         <div class="col-lg-6">
                             <p style="padding-top: 5px"><b>Schedule a meeting on </b></p>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar-check-o fa-lg fa-fw"></i></span>
                                <input class="form-control" type="text" name="sh" id="sh" placeholder="Date" data-provide="datepicker"/>
                            </div>
                        </div>
                        
                        </div>
                                
                        </div>
                              <div class="row">
                             
                        <div class="col-lg-10 col-lg-offset-1">
                         <div class="col-lg-1">
                             <p style="padding-top: 5px"><b>with </b></p>
                        </div>
                        
                        <div class="col-lg-5">
                            <p style="padding-top: 5px" id="sname"><b> </b></p>
                        </div>
                             <div class="col-lg-1">
                             <p style="padding-top: 5px"><b>ID: </b></p>
                        </div>
                        
                        <div class="col-lg-5">
                            <p style="padding-top: 5px" id="mid"><b> </b></p>
                        </div>
                        
                        </div>
                                
                        </div>
                            <center><p id="ack" style="color: blue"></p></center>
                            <center><button id="cupdate" class="bttn">Update</button></center>
                           
                        </div>
                        <div class="modal-footer" style="">

                        </div>
                    </div>

                </div>
            </div>
        <div id="meet" class="modal fade" role="dialog">

                <div class="modal-dialog modal-md">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" onclick="">&times;</button>
                            <h4 class="modal-title">You have Meetings with</h4>
                        </div>
                        <div class="modal-body text-center" style="padding: 10px; vertical-align: middle">
                           
         <div class="table-responsive" style="display: none;" id="sview">          
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Ph</th>
                                            <th>Parent's ph</th>
                                            <th>email</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                            <center><p id="amsg" style="color: blue"></p></center>
                        </div>
                           
                        </div>
                        <div class="modal-footer" style="">

                        </div>
                    </div>

                </div>
           
        
        <center><p style="color: blue;font-size: 20px" id="msg"></p></center>
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-circle-o-up fa-3x" style="color: #e2c226"></i></button>
    
       
        
         <section id="footer">
            <div class="container-fluid"  style="background-color: #0c0c07;padding: 20px;margin-top: 20vh">
                <div class="row">
                    <div class="col-lg-4 text-center">
                        <p style="color: white">Copyright <i class="fa fa-copyright"></i> 2018 <a href="#">Collegify</a></p>
                    </div>
                </div>
            </div>
        </section>
        
        
    
    
    
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
              
                     $('#start').datetimepicker({
                        useCurrent: false,
                        format: 'YYYY-MM-DD'
                    });
                     $('#end').datetimepicker({
                        useCurrent: false,
                        format: 'YYYY-MM-DD'
                    });
                    $('#sh').datetimepicker({
                        useCurrent: false,
                        format: 'YYYY-MM-DD'
                    });
              
                    $("#track").on('submit', function (event) {
                    event.preventDefault();

                    $('#info').slideUp();
                    $('#info').find('tbody').remove();
                       
                    $.post('res/php/view.php', {search:$("#search").val(),start:$("#start").val(),end:$("#end").val()}, function (data,status) {
                        if(status=="success"){
                                    
                                        if (data !== 'none')
                                        {
                                            var rs = JSON.parse(data);
                                            $("#msg").html("");
                                                                         console.log(rs);
                                            var $tbody = $('<tbody>');
//                                            var l=rs.length;
//                                            console.log(rs[0].std_id);
                                            for (var i = 0; i < rs.length; i++)
                                            {
                                                var $tr = $('<tr>');
                                                $tr.append($('<td>').html(rs[i].std_id));
                                                $tr.append($('<td>').html(rs[i].date1));
                                                $tr.append($('<td>').html(rs[i].name));
                                                $tr.append($('<td>').html(rs[i].counselor));
                                                $tr.append($('<td>').html(rs[i].addr));
                                                $tr.append($('<td>').html(rs[i].ph1));
                                                $tr.append($('<td>').html(rs[i].ph2));
                                                $tr.append($('<td>').html(rs[i].email));
                                                $tr.append($('<td>').html(rs[i].cllg));
                                                $tr.append($('<td>').html(rs[i].board));
                                                $tr.append($('<td>').html(rs[i].ix));
                                                $tr.append($('<td>').html(rs[i].x));
                                                $tr.append($('<td>').html(rs[i].xi));
                                                $tr.append($('<td>').html(rs[i].xii));
                                                
                                                var $schedule_btn = $('<button>').addClass('bttn').text('Schedule').attr({
                                            "data-target": '#schedule',
                                            "data-toggle": 'modal',
                                            "value": rs[i].std_id,
                                            "name": 'schedule',
                                            "onclick": 'Schedule(this.value)'
                                        }).html('<span><i class="fa fa-calendar-check-o fa-lg fa-fw"></i></span>');
                                        $tr.append($('<td>').html($schedule_btn));
                                        var $delete_btn = $('<button>').addClass('bttn').text('Delete').attr({
    //                                        "data-target": '#updateModal',
    //                                        "data-toggle": 'modal',
                                            "id": rs[i].std_id,
                                            "name": 'delete',
                                            "onclick": 'del(this.id)'
                                        }).html('<span><i class="fa fa-trash fa-lg fa-fw"></i></span>');
                                        $tr.append($('<td>').html($delete_btn));
                                                
                                            $tr.append($('<td>').html(rs[i].gdate));
                                            $tr.append($('<td>').html(rs[i].gp));
                                            $tr.append($('<td>').html(rs[i].gstream));
                                            $tr.append($('<td>').html(rs[i].pgdate));
                                            $tr.append($('<td>').html(rs[i].pgp));
                                            $tr.append($('<td>').html(rs[i].pgstram));
                                            $tr.append($('<td>').html(rs[i].exam));
                                            $tr.append($('<td>').html(rs[i].tarea));
                                            $tr.append($('<td>').html(rs[i].major));
                                            $tr.append($('<td>').html(rs[i].dest));
                                            $tr.append($('<td>').html(rs[i].q1));
                                            $tr.append($('<td>').html(rs[i].q2));
                                            $tr.append($('<td>').html(rs[i].ans));
                                                 $tr.appendTo($tbody);
                                            }
                                            $tbody.insertAfter('#info thead');

                                            $('#info').slideDown();
                                        }
                             else if(data == "none"){
                            $("#msg").html("Result not found!!!");
                        }
                        }
                       

                                });
                    });
              
                    $("#agnd").on('click', function (event) {
                    event.preventDefault();

                    $('#sview').slideUp();
                    $('#sview').find('tbody').remove();
                    var d = new Date();
                    var m = d.getUTCMonth() + 1;
                    var inpd = d.getFullYear() + '-' + m + '-' + d.getDate();   
                    $.post('res/php/agenda.php', {inpd: inpd}, function (data,status) {
                        if(status=="success"){
                                    
                                        if (data !== 'none')
                                        {
                                            var rs = JSON.parse(data);
                                            $("#amsg").html("");
                                             //                             console.log(rs);
                                            var $tbody = $('<tbody>');
//                                            var l=rs.length;
//                                            console.log(rs[0].std_id);
                                            for (var i = 0; i < rs.length; i++)
                                            {
                                                var $tr = $('<tr>');
                                                $tr.append($('<td>').html(rs[i].std_id));
                                           
                                                $tr.append($('<td>').html(rs[i].name));
                                               
                                                $tr.append($('<td>').html(rs[i].ph1));
                                                $tr.append($('<td>').html(rs[i].ph2));
                                                $tr.append($('<td>').html(rs[i].email));
                                                $tr.appendTo($tbody);
                                            }
                                            $tbody.insertAfter('#sview thead');

                                            $('#sview').slideDown();
                                        }
                             else if(data == "none"){
                            $("#amsg").html("No Scheduled Meeting!!!");
                        }
                        }
                       

                                });
                    });
             

                $('#cupdate').click(function (e) {
                    e.preventDefault();
                    //console.log($('#ptime').val());
                    $.ajax({
                        url: "res/php/testUpdate.php",
                        type: "POST",
                        data: {
                            schedule: $('#sh').val(),
                            std_id: $('#mid').html(),
                           
                        },

                        success: function (data) {
                            $('#ack').html(data);

                        }
                    });
                });

                 
                });
             function Schedule(id) {
                  //   console.log(id);
                 $("#ack").html("");
                    $.ajax({
                        url: "res/php/update.php",
                        method: "POST",
                        dataType: "JSON",
                        data: {
                            update: id,
                        },

                        success: function (data) {
                            var obj = JSON.parse(JSON.stringify(data));
                            console.log(obj[0].schedule);
                            $('#sh').val(obj[0].schedule);
                            $('#sname').html(obj[0].name);
                            $('#mid').html(obj[0].std_id);   
                        },
                         error: function (data){
                        console.log(data);
                    }
                       
                    });
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
            
            
            function del(id) {
                    //console.log(elem.value);
                    //AJAX
                 $.ajax({
                        url: "res/php/delete.php",
                        method: "POST",
                        data: {
                            del: id,
                        },

                        success: function (data) {
                            if(data == "true"){
                          $("#"+id).closest('tr').remove();  }
                        }
                     });

                }
        </script>
    </body>
</html>

<?php
}
?>