<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <title>CodeSchool</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">
	
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 <script src="ajax.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">CodeSchool</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> Login Student
                                    
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> Teachers
                                  
                                </div>
                            </a>
                        </li>
                                               
                        

                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>

                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="level1.php"><i class="fa fa-bar-chart-o fa-fw"></i>Profile</a>
						</li>
                        <li>
                            <a href="practice.php"><i class="fa fa-table fa-fw"></i> Learn</a>
                        </li>
                        <li>
                            <a href="dashboard.php"><i class="fa fa-edit fa-fw"></i>Practice</a>
                        </li>
                        
				   </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
<!--start of my need-->

 
      <div id="page-wrapper">
           <div class="col-lg-12">
                    <h1 class="page-header">Level 0</h1>
                </div>
		<div class="container-fluid" id="field">
		<button type="button1" class="btn btn-info btn-large btn-block"  data-target="#demo1" data-toggle="collapse">Test for WPM</button>
		<div id="demo1" class="collapse"><br>
			<!--<a  href="">Check here for typing test</a>-->
			<iframe style="padding:10px" width="1000" height="300" src="https://10fastfingers.com/widgets/ttembeddable/?dur=60&rand=1&words=Abc" frameborder="0"></iframe>
			<p>Enter the Marks</p>
			<input type="integer" id="wpm_marks">
			<br>
			<br>
			<input type="submit" id="submit_wpm" class="btn btn-primary " >
			<br>
		</div>
		<br>
		<br>	
		<button type="button2" class="btn btn-info btn-large btn-block"  data-target="#demo2" data-toggle="collapse">Test for Aptitude level</button>
		
		<div id="demo2" class="collapse"><br>
				<!--<a  href="">Check here for typing test</a>-->
			<a href="https://docs.google.com/forms/d/1cXMxytS7xkIjePsiCDxLRH5RMzs5FXM9MRb3avoHrTw/viewform?viewscore=AE0zAgBWFsYExVv_HjeSa8TDnJeBJ9KnHbwXCTBJQP5DW6M8HdoVxchCx8XNMA&edit_requested=true#responses">Fill the form </a>
			<p>Enter the marks </p>
			<input type="number" id="marks">
			<br>
			<p>Enter Your Marks proof (Link of Result)</p>
			<input type="url" id="link">
			<br>
			<br>
			
			<input type="submit" id="submit" class="btn btn-primary ">
		</div>
		<br>	
		<button type="button3" class="btn btn-info btn-large btn-block"  data-target="#demo3">Test for 50 competitive and logical question</button>
		<br>
		<br>	
		<button type="button4" class="btn btn-info btn-large btn-block" data-toggle="collapse" data-target="#demo4">Test for Basic Algorithm</button>
		<br>
		<br>	
		<div id="demo4" class="collapse">
		<br>
		<button type="button5" class="btn btn-info"  data-target="#demo">Searching</button><br>
		<br>	
		<button type="button6" class="btn btn-info"  data-target="#dem">Sorting</button>
		</div>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
