<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
    <style>
           .row {
        margin-left: 213px;
        height:auto;
        width: auto;
        
    }
    .table-container {
      margin-left: 213px; /* Position the table on the right side */
    margin-right: 20px; /* Add some spacing from the right edge of the page */
}

/* CSS for the custom table */
.custom-table {
    border-collapse: collapse;
    width: 100%;
}

.custom-table th, .custom-table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
}

.custom-table th {
    background-color: #f2f2f2;
    color: #333;
}

.custom-table tr:nth-child(even) {
    background-color: #f2f2f2;
}

.custom-table tr:nth-child(odd) {
    background-color: #fff;
}
    .cal{
      width: 160px!important;
      margin-left: 229px;
    }
    </style>
       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="plugins/fullcalendar/main.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <?php  echo view('FacultySidebar2.php');?>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?php echo base_url()?>today" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>


            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?php echo base_url('logout'); ?>" class="nav-link">Logout</a>
            </li>


        </ul>

    </nav>
    <!-- <div class="container">
        <div class="row" >
            
        <input type="date" class="cal" id="date" >
        </div>
    </div> 
     <div id="responseDiv">

    </div>
   
    <script> -->
<!-- $(document).ready(function() {
    $('#date').on('input', function() {
        var date = $(this).val();

        $.ajax({
            type: 'POST',
            url: '<?=base_url(); ?>AdminController/getdate',
            data: {date: date},
            success: function(response) {
                $("#responseDiv").html(response);
            },
            error: function() {
                alert('Not OKay');
            }
        });
    });
});
</script> -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Calendar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Calendar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="">
            <div class="sticky-top mb-3">
              <div >
                <!-- <div class="card-header">
                  <h4 class="card-title">Draggable Events</h4>
                </div> -->
                <div class="card-body">
                  <!-- the events -->
                  <div id="external-events">
                    <!-- <div class="external-event bg-success">Lunch</div>
                    <div class="external-event bg-warning">Go home</div>
                    <div class="external-event bg-info">Do homework</div>
                    <div class="external-event bg-primary">Work on UI design</div>
                    <div class="external-event bg-danger">Sleep tight</div> -->
                    <div class="checkbox">
                      <!-- <label for="drop-remove">
                        <input type="checkbox" id="drop-remove">
                        remove after drop
                      </label> -->
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
             
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-body p-0">
                <!-- THE CALENDAR -->
                <div id="calendar"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        // Your FullCalendar configuration options here
        // ...

        eventDrop: function (info) {
            var eventId = info.event.id;
            var newStart = info.event.start;
            var newEnd = info.event.end;
            var title = info.event.title;

            $.ajax({
                url: '/save-event', // Make sure this URL matches your CodeIgniter route
                type: 'POST',
                data: {
                    id: eventId,
                    title: title,
                    start: newStart,
                    end: newEnd,
                },
                success: function (response) {
                    console.log('Event updated and saved to the database.');
                },
            });
        },
    });

    calendar.render();
});
</script>
  <script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery UI -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/fullcalendar/main.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {

        // create an Event Object (https://fullcalendar.io/docs/event-object)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    ini_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()

    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendar.Draggable;

    var containerEl = document.getElementById('external-events');
    var checkbox = document.getElementById('drop-remove');
    var calendarEl = document.getElementById('calendar');

    // initialize the external events
    // -----------------------------------------------------------------

    new Draggable(containerEl, {
      itemSelector: '.external-event',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText,
          backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),
        };
      }
    });

    var facultyEvents = [
    <?php if(!empty($FacultysheduleData)) {
        foreach($FacultysheduleData as $data) { ?>
            {
               
                start     : '<?=$data->date; ?>T<?=$data->start_time; ?>',
                end       : '<?=$data->date; ?>T<?=$data->end_time; ?>',
                faculty_id     : '<?=$data->faculty_id; ?>',
            },
    <?php }} ?>
];


var colorMap = {};

facultyEvents.forEach(function(event) {
    var facultyId = event.faculty_id;

    if (!colorMap[facultyId]) {
        colorMap[facultyId] = getRandomColor();
    }

    event.backgroundColor = colorMap[facultyId];
    event.borderColor = colorMap[facultyId];
    event.textColor = getContrastColor(colorMap[facultyId]); // Set text color
});

function getContrastColor(hexColor) {
    var r = parseInt(hexColor.substring(1, 3), 16);
    var g = parseInt(hexColor.substring(3, 5), 16);
    var b = parseInt(hexColor.substring(5, 7), 16);
    var brightness = (r * 299 + g * 587 + b * 114) / 1000;

    return brightness > 128 ? '#000000' : '#FFFFFF';
}

// Rest of your code remains the same...


function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

var calendar = new Calendar(calendarEl, {
  headerToolbar: {
    left  : 'prev,next today',
    center: 'title',
    right : 'dayGridMonth,timeGridWeek,timeGridDay'
  },
  themeSystem: 'bootstrap',
  events: facultyEvents,
  editable  : true,
  droppable : true,
  drop      : function(info) {
    if (checkbox.checked) {
      info.draggedEl.parentNode.removeChild(info.draggedEl);
    }
  }
});

calendar.render();



    // $('#calendar').fullCalendar()

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    // Color chooser button
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      // Save color
      currColor = $(this).css('color')
      // Add color effect to button
      $('#add-new-event').css({
        'background-color': currColor,
        'border-color'    : currColor
      })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      // Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      // Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.text(val)
      $('#external-events').prepend(event)

      // Add draggable funtionality
      ini_events(event)

      // Remove event from text input
      $('#new-event').val('')
    })
  })
</script>
</body>
</html>