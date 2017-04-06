<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>'ned Make announcements</title>
    <meta name="description" content="A Bootstrap 4 admin dashboard theme that will get you started. The sidebar toggles off-canvas on smaller screens. This example also include large stat blocks, modal and cards. The top navbar is controlled by a separate hamburger toggle button." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">



    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
	  <link href="//storage.googleapis.com/code.getmdl.io/1.0.1/material.min.js"rel="stylesheet" />
	  <link href="//fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet" />
	  <link href="//storage.googleapis.com/code.getmdl.io/1.0.1/material.teal-red.min.css"rel="stylesheet" />
	<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700"rel="stylesheet" />
	  
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Material Design Lite -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	  
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="stylesheet" href="css/stylecal.css" />
	  
  </head>
  <body >
    <nav class="navbar navbar-fixed-top navbar-toggleable-sm navbar-inverse bg-primary mb-3"  >
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="flex-row d-flex">
        <a class="navbar-brand mb-1" href="announcements.php">Verticalned</a>
        <button type="button" class="hidden-md-up navbar-toggler" data-toggle="offcanvas" title="Toggle responsive left sidebar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse" id="collapsingNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="announcements.php">Home <span class="sr-only">Home</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profile.php">Profile</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="notes.php">Notes</a>
            </li>
			<li class="nav-item active">
                <a class="nav-link" href="calendar.php">Calender</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="" data-target="#myModal" data-toggle="modal">Logout</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid" id="main">
    <div class="row row-offcanvas row-offcanvas-left">
        <div class="col-md-3 col-lg-2 sidebar-offcanvas" id="sidebar" role="navigation">
            <ul class="nav flex-column pl-1">
                <li class="nav-item"><a class="nav-link" href="#">Menu</a></li>
                <li class="nav-item"><a class="nav-link" href="#">One</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Two</a></li>
                <li class="nav-item"><a class="nav-link" href="">Three</a></li>
                <li class="nav-item"><a class="nav-link" href="">Nav item</a></li>
                <li class="nav-item"><a class="nav-link" href="">Another</a></li>
                <li class="nav-item"><a class="nav-link" href="">Nav item</a></li>
                <li class="nav-item"><a class="nav-link" href="">One more</a></li>
            </ul>
        </div>
        <!--/col-->

        <div class="col-md-9 col-lg-10 main">

                   <h1 class="display-2 hidden-xs-down">
            Notes
            </h1>
            <a id="more"></a>
            <hr>
            <h2 class="sub-header">Uploaded notes</h2>
            
                    
					
					<div class="container">
  <ul class="nav nav-justified">
      <li><a class="text-center" href="#"><i class="fa fa-tag fa-5x"></i> <br>Tags</a></li>
    <li><a class="text-center" href="#"><i class="fa fa-bookmark fa-5x"></i> <br>Tasks</a></li>
    <li><a class="text-center" href="#"><i class="fa fa-camera fa-5x"></i> <br>Photos</a></li>
    <li><a class="text-center" href="#"><i class="fa fa-map-marker fa-5x"></i> <br>Tour</a></li>
    <li><a class="text-center" href="#"><i class="fa fa-music fa-5x"></i> <br>Tunes</a></li>
    <li><a class="text-center" href="#"><i class="fa fa-book fa-5x"></i> <br>Books</a></li>
    <li><a class="text-center" href="#"><i class="fa fa-film fa-5x"></i> <br>Videos</a></li>
  </ul>
</div>

<div class="container">
    <hr>
	<div id="calendar"></div>
</div>
		</div>
<!--/.container-->
<footer class="container-fluid">
    <p class="text-right small">©2016-2017 Company</p>
</footer>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Logout</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            <div class="modal-body">
                Are You sure that you want to log out?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary-outline" data-dismiss="modal">Yes</button>
            </div>
        </div>
    </div>
</div>
    <!--scripts loaded here-->
    <script>
		$('#textarea1').val('New Text');
  $('#textarea1').trigger('autoresize');
		</script>
	  
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
    
	  <script>
		  $.getScript('http://arshaw.com/js/fullcalendar-1.6.4/fullcalendar/fullcalendar.min.js',function(){
  
  var date = new Date();
  var d = date.getDate();
  var m = date.getMonth();
  var y = date.getFullYear();
  
  $('#calendar').fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay'
    },
    editable: true,
    events: [
      {
        title: 'All Day Event',
        start: new Date(y, m, 1)
      },
      {
        title: 'Long Event',
        start: new Date(y, m, d-5),
        end: new Date(y, m, d-2)
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: new Date(y, m, d-3, 16, 0),
        allDay: false
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: new Date(y, m, d+4, 16, 0),
        allDay: false
      },
      {
        title: 'Meeting',
        start: new Date(y, m, d, 10, 30),
        allDay: false
      },
      {
        title: 'Lunch',
        start: new Date(y, m, d, 12, 0),
        end: new Date(y, m, d, 14, 0),
        allDay: false
      },
      {
        title: 'Birthday Party',
        start: new Date(y, m, d+1, 19, 0),
        end: new Date(y, m, d+1, 22, 30),
        allDay: false
      },
      {
        title: 'Click for Google',
        start: new Date(y, m, 28),
        end: new Date(y, m, 29),
        url: 'http://google.com/'
      }
    ]
  });
})
	  </script>
	  
	  
    <script src="js/scripts.js"></script>
  </body>
</html>