<?php
$uri = new \CodeIgniter\HTTP\URI(current_url(true));
$pages = $uri->getSegments();
$page = $uri->getSegment(count($pages));
?>
<footer class="main-footer">
 
    <strong>Copyright &copy; 2023-2024 <a href="https://mitech">MI-TECH</a>.</strong> All rights reserved.
  </footer>
</div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="<?php echo base_url()?>public/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url()?>public/js/dataTables.bootstrap4.js"></script>
  <script src="<?php echo base_url()?>public/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url()?>public/js/dataTables.responsive.min.js"></script>
  <!-- <script src="plugins/jquery/jquery.min.js"></script> -->
  <script src="<?php echo base_url()?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url()?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <script src="<?php echo base_url()?>dist/js/adminlte.min.js"></script>
  <script src="<?php echo base_url()?>public/js/custom.js"></script>
  <!-- <script src="<?php echo base_url()?>dist/js/demo.js"></script> -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
   <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script src="<?php echo base_url()?>dist/js/adminlte.js"></script>
    <script src="<?php echo base_url()?>plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="<?php echo base_url()?>plugins/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url()?>plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="<?php echo base_url()?>plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <script src="<?php echo base_url()?>plugins/chart.js/Chart.min.js"></script>
    <!-- <script src="<?php echo base_url()?>dist/js/pages/dashboard2.js"></script> -->
            <script src="<?php echo base_url()?>plugins/fullcalendar/main.js"></script>

    <script src="<?php echo base_url()?>plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url()?>plugins/moment/moment.min.js"></script>
    <?php
        if ($page == 'FacultysidebarShedule' || $page == 'fetchTofacultyShuduleSidebar') { ?>
             <script src="plugins/jquery/jquery.min.js"></script> 

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <?php } ?>
    <script type="text/javascript">
        $(document).ready(function() {
            
            $("input[name='datetimes']").daterangepicker({},
                function(start, end, label) {
                    let startDate = start.format("YYYY-MM-DD").toString();
                    let endDate = end.format("YYYY-MM-DD").toString();

                    document.getElementById("startDate").innerHTML =
                        "Start date: " + startDate;
                    document.getElementById("endDate").innerHTML = "End date: " + endDate;

                }
            );
            
    
        });
    </script>
     <script  type="text/javascript">
        const showTableLink = document.getElementById('showTableLink');
        if (showTableLink) {
            showTableLink.addEventListener('click', function() {
                var table = document.getElementById('studentTable');
                if (table.style.display === 'none') {
                    table.style.display = 'table';
                } else {
                    table.style.display = 'none';
                }
            });
        }
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleButton = document.getElementById("toggle-button");
            const toggleContent = document.getElementById("toggle-content");
            if (toggleButton) {
                toggleButton.addEventListener("click", function() {
                    if (toggleContent.style.display === "none") {
                        toggleContent.style.display = "block";
                    } else {
                        toggleContent.style.display = "none";
                    }
                });
            }
        });
    </script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const addAppointmentButton = document.getElementById("addAppointment");
        if (addAppointmentButton) {
            const formDatesInput = document.getElementById("form_date");
                const currentDate = new Date().toISOString().split("T")[0];
                formDatesInput.min = currentDate;
            
            const formTimeInput = document.getElementById("form_time");
            const toTimeInput = document.getElementById("to_time");

            const selectedAppointmentsContainer = document.querySelector("#selectedAppointments table tbody");

            // Set min time for "form_time" input based on current time
            const currentHour = new Date().getHours();
            const currentMinute = new Date().getMinutes();
            const currentTimeString = `${currentHour.toString().padStart(2, "0")}:${currentMinute.toString().padStart(2, "0")}`;
            formTimeInput.min = currentTimeString;

            formTimeInput.addEventListener("input", function() {
                toTimeInput.min = this.value;
                toTimeInput.value = this.value; // Automatically set "to_time" to match "form_time"
            });
            addAppointmentButton.addEventListener("click", function() {
                const selectedformDate = formDatesInput.value;
                const selectedformTime = formTimeInput.value;
                const selectedtoTime = toTimeInput.value;

                if (selectedformDate && selectedformTime && selectedtoTime) {
                    const tr = createTableRow(selectedformDate, selectedformTime, selectedtoTime);
                    selectedAppointmentsContainer.appendChild(tr);

                    formDatesInput.value = "";
                    formTimeInput.value = "";
                    toTimeInput.value = "";
                }
            });
        }

        function createTableRow(formdate, formtime, totime) {
            const tr = document.createElement("tr");
            const formdateTd = document.createElement("td");
            const formtimeTd = document.createElement("td");
            const totimeTd = document.createElement("td");

            formdateTd.textContent = formdate;
            formtimeTd.textContent = formtime;
            totimeTd.textContent = totime;

            tr.appendChild(formdateTd);
            tr.appendChild(formtimeTd);
            tr.appendChild(totimeTd);

            return tr;
        }

        const appointmentForm = document.getElementById("appointmentForm")
        if(appointmentForm){
            document.getElementById("appointmentForm").addEventListener("submit", function(event) {
                event.preventDefault();

                const selectedDateInputs = selectedAppointmentsContainer.querySelectorAll("td:first-child");
                const formTimeInputs = selectedAppointmentsContainer.querySelectorAll("td:nth-child(2)");
                const toTimeInputs = selectedAppointmentsContainer.querySelectorAll("td:last-child");

                const selectedAppointments = [];

                selectedDateInputs.forEach((dateTd, index) => {
                    selectedAppointments.push({
                        date: dateTd.textContent,
                        formTime: formTimeInputs[index].textContent,
                        toTime: toTimeInputs[index].textContent
                    });
                });

                const selectedAppointmentsJSON = JSON.stringify(selectedAppointments);

                const hiddenInput = document.createElement("input");
                hiddenInput.type = "hidden";
                hiddenInput.name = "selected_appointments";
                hiddenInput.value = selectedAppointmentsJSON;
                this.appendChild(hiddenInput);

                this.submit();
            });
        }
    });

    
</script>
<?php if (!$pages[1]==' chatuser') { ?>
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

            // echo "<pre>";print_r($FacultysheduleData);exit();
            foreach($FacultysheduleData as $data) { ?>
                {
                    title      : '<?=$data->full_name; ?> - <?=$data->start_time; ?> to <?=$data->end_time; ?>',
                  start      : '<?=$data->date; ?>T<?=$data->start_time; ?>',
                  end        : '<?=$data->date; ?>T<?=$data->end_time; ?>',
                  faculty_id : '<?=$data->faculty_register_id; ?>',
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
            },
            eventContent: function(arg) {
            var eventColor = arg.event.backgroundColor || ''; // Ensure eventColor is defined
            var textColor = getContrastColor(eventColor); // Calculate text color based on background brightness
            return {
                html: '<div class="fc-content" style="background-color:' + eventColor + '; padding: 2%; border-radius: 5%">' +
                      '<span class="fc-title" style="display: block; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; color: ' + textColor + ';" title="' + arg.event.title + '">' +
                        '<div class="event-title">' + arg.event.title.split(' - ')[0] + '</div>' +
                        '<div class="event-time">' + arg.event.title.split(' - ')[1] + '</div>' +
                      '</span>' +
                      '</div>',
            };
        },
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
<script>
    function showTable1() {
        document.getElementById('table1').style.display = 'table';
        document.getElementById('table2').style.display = 'none';
    }

    function showTable2() {
        document.getElementById('table1').style.display = 'none';
        document.getElementById('table2').style.display = 'table';
    }
</script>


<!-- Page specific script -->
<script>
  $(function () {
    /* BOOTSTRAP SLIDER */
    $('.slider').bootstrapSlider()

    /* ION SLIDER */
    $('#range_1').ionRangeSlider({
      min     : 0,
      max     : 5000,
      from    : 1000,
      to      : 4000,
      type    : 'double',
      step    : 1,
      prefix  : '$',
      prettify: false,
      hasGrid : true
    })
    $('#range_2').ionRangeSlider()

    $('#range_5').ionRangeSlider({
      min     : 0,
      max     : 10,
      type    : 'single',
      step    : 0.1,
      postfix : ' mm',
      prettify: false,
      hasGrid : true
    })
    $('#range_6').ionRangeSlider({
      min     : -50,
      max     : 50,
      from    : 0,
      type    : 'single',
      step    : 1,
      postfix : '°',
      prettify: false,
      hasGrid : true
    })

    $('#range_4').ionRangeSlider({
      type      : 'single',
      step      : 100,
      postfix   : ' light years',
      from      : 55000,
      hideMinMax: true,
      hideFromTo: false
    })
    $('#range_3').ionRangeSlider({
      type    : 'double',
      postfix : ' miles',
      step    : 10000,
      from    : 25000000,
      to      : 35000000,
      onChange: function (obj) {
        var t = ''
        for (var prop in obj) {
          t += prop + ': ' + obj[prop] + '\r\n'
        }
        $('#result').html(t)
      },
      onLoad  : function (obj) {
        //
      }
    })
  })
</script>

<?php }?>

</body>
</html>