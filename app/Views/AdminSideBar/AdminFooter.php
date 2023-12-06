<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
    </div>
</footer>

</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="plugins/sparklines/sparkline.js"></script>
<script src="<?php echo base_url()?>public/js/custom.js"></script>
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="dist/js/adminlte.js"></script>
<script src="dist/js/pages/dashboard.js"></script>
<script src="<?= base_url(); ?>plugins/fullcalendar/main.js"></script>

<!-- <script src="dist/js/adminlte.min.js"></script> -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

<script>
    $(document).ready(function() {
        $("#toggle-table5").click(function() {
            $("#faculty-table5").toggle("");
            $("#faculty-table").hide();
            $("#faculty-table4").hide();
            $("#faculty-table2").hide();

        });



        $("#toggle-table2").click(function() {
            $("#faculty-table2").toggle("");
            $("#faculty-table").hide();
            $("#faculty-table4").hide();
            $("#faculty-table5").hide();

        });

        $("#toggle-table4").click(function() {
            $("#faculty-table4").toggle("");
            $("#faculty-table").hide();
            $("#faculty-table2").hide();

        });


        $("#toggle-table").click(function() {
            $("#faculty-table").toggle("");
            $("#faculty-table4").hide();
            $("#faculty-table2").hide();

        });

        $("#toggle-table6").click(function() {
            $("#faculty-table6").toggle("");



        });
        $(".coundd_demo").click(function() {
            $("#coundd_demo-payment-table").toggle("");
            $("#pending-demo-table").hide();
            $("#comp-payment-table").hide();
            $("#unattended-tabal").hide();

        });


        $(".pend-demo").click(function() {
            $("#pending-demo-table").toggle("");
            $("#comp-payment-table").hide();
            $("#coundd_demo-payment-table").hide();
            $("#unattended-tabal").hide();


        });
        $(".UnattendedList").click(function() {
            $("#unattended-tabal").toggle("");
            $("#comp-payment-table").hide();
            $("#coundd_demo-payment-table").hide();
            $("#pending-demo-table").hide();

        });
        $(".comp-payment").click(function() {
            $("#comp-payment-table").toggle("");
            $("#pending-demo-table").hide();
            $("#coundd_demo-payment-table").hide();
            $("#unattended-tabal").hide();

        });

        var groupSessionTable = $('#groupSessionTable').DataTable();
        $('#selectedRowsTable').hide();

        $('#groupSessionTable tbody').on('change', '.select-checkbox', function() {
            var rowData = $(this).closest('tr');
            var rowId = rowData.data('id');

            if ($(this).prop('checked')) {
                var clonedRow = rowData.clone();
                clonedRow.find('td:first-child input').remove();
                $('#selectedRowsBody').append(clonedRow);
            } else {
                $('#selectedRowsBody tr[data-id="' + rowId + '"]').remove();
                updateRowNumbers();
            }

            var hasSelectedRows = $('#selectedRowsBody tr').length > 0;
            $('#selectedRowsTable').toggle(hasSelectedRows);
        });

        $('#postSelectedRows').on('click', function() {
            var selectedRowIds = [];
            $('#selectedRowsBody tr').each(function() {
                var rowId = $(this).data('id');
                selectedRowIds.push(rowId);
            });
            $('#selectedRowsTable').append('<input type="hidden" name="selectedRowIds" value="' +
                selectedRowIds.join(',') + '">');
        });

        $('#courseSearch').on('input', function() {
            groupSessionTable.columns(3).search(this.value).draw();
        });

        $('#subCourseSearch').on('input', function() {
            groupSessionTable.columns(4).search(this.value).draw();
        });

        function updateRowNumbers() {
            $('#selectedRowsBody tr').each(function(index) {
                $(this).find('td:first-child').text(index + 1);
            });
        }


    });

    function showStudentTable(button) {
        // Hide all tables with class "table"
        var tables = document.querySelectorAll('.table');
        for (var i = 0; i < tables.length; i++) {
            tables[i].style.display = 'none';
        }

        // Show the student assignment table
        document.getElementById('student-assignment-table').style.display = 'table';
    }
    document.addEventListener('DOMContentLoaded', function() {
        var buttons = document.querySelectorAll('.group-button');
        var recordsContainers = document.querySelectorAll('.group-records');
        if (recordsContainers.length > 0) {
            recordsContainers[0].style.display = 'block';
        }
        buttons.forEach(function(button) {
            button.addEventListener('click', function() {
                var group = this.getAttribute('data-group');
                var clickedRecordsContainer = document.querySelector('[data-group-id="' +
                    group + '-records"]');
                recordsContainers.forEach(function(container) {
                    if (container === clickedRecordsContainer) {
                        container.style.display = 'block';
                    } else {
                        container.style.display = 'none';
                    }
                });
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            // Your FullCalendar configuration options here
            // ...

            eventDrop: function(info) {
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
                    success: function(response) {
                        console.log('Event updated and saved to the database.');
                    },
                });
            },
        });

        calendar.render();
    });
</script>

<script>
    $(function() {

        /* initialize the external events
        -----------------------------------------------------------------*/
        function ini_events(ele) {
            ele.each(function() {

                // create an Event Object (https://fullcalendar.io/docs/event-object)
                // it doesn't need to have a start or end
                var eventObject = {
                    title: $.trim($(this).text()) // use the element's text as the event title
                }

                // store the Event Object in the DOM element so we can get to it later
                $(this).data('eventObject', eventObject)

                // make the event draggable using jQuery UI
                $(this).draggable({
                    zIndex: 1070,
                    revert: true, // will cause the event to go back to its
                    revertDuration: 0 //  original position after the drag
                })

            })
        }

        ini_events($('#external-events div.external-event'))

        /* initialize the calendar
        -----------------------------------------------------------------*/
        //Date for the calendar events (dummy data)
        var date = new Date()
        var d = date.getDate(),
            m = date.getMonth(),
            y = date.getFullYear()

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
                    backgroundColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
                    borderColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
                    textColor: window.getComputedStyle(eventEl, null).getPropertyValue('color'),
                };
            }
        });

        var facultyEvents = [
            <?php if (!empty($FacultysheduleData)) {
                foreach ($FacultysheduleData as $data) { ?> {
                        title: '<?= $data->faculty_name; ?> - <?= $data->start_time; ?> to <?= $data->end_time; ?>',
                        start: '<?= $data->date; ?>T<?= $data->start_time; ?>',
                        end: '<?= $data->date; ?>T<?= $data->end_time; ?>',
                        faculty_id: '<?= $data->faculty_register_id; ?>',
                    },
            <?php }
            } ?>
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
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            themeSystem: 'bootstrap',
            events: facultyEvents,
            editable: true,
            droppable: true,
            drop: function(info) {
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

        var currColor = '#3c8dbc'
        $('#color-chooser > li > a').click(function(e) {
            e.preventDefault()
            currColor = $(this).css('color')
            $('#add-new-event').css({
                'background-color': currColor,
                'border-color': currColor
            })
        })
        $('#add-new-event').click(function(e) {
            e.preventDefault()
            var val = $('#new-event').val()
            if (val.length == 0) {
                return
            }

            var event = $('<div />')
            event.css({
                'background-color': currColor,
                'border-color': currColor,
                'color': '#fff'
            }).addClass('external-event')
            event.text(val)
            $('#external-events').prepend(event)

            ini_events(event)
            $('#new-event').val('')
        })
    })
</script>
<script>
    document.getElementById("showVideoContainer").addEventListener("click", function() {
        document.getElementById("videoContainer").style.display = "block";
        document.getElementById("rescheduleContainer").style.display = "none";
        document.getElementById("imageContainer").style.display = "none";
    });

    document.getElementById("showImageContainer").addEventListener("click", function() {
        document.getElementById("imageContainer").style.display = "block";
        document.getElementById("rescheduleContainer").style.display = "none";
        document.getElementById("videoContainer").style.display = "none";

    });
    document.getElementById("showRescheduleContainer").addEventListener("click", function() {
        document.getElementById("rescheduleContainer").style.display = "block";
        document.getElementById("videoContainer").style.display = "none";
        document.getElementById("imageContainer").style.display = "none";
    });
    </script>
    
      <script>
        
        document.getElementById("showVideoContainer").addEventListener("click", function() {
            document.getElementById("videoContainer").style.display = "block";
            document.getElementById("FacultyVideoContainer").style.display = "none"; // Hide FacultyVideoContainer
        });

        document.getElementById("showFacultyVideoContainer").addEventListener("click", function() {
            document.getElementById("videoContainer").style.display = "none"; // Hide videoContainer
            document.getElementById("FacultyVideoContainer").style.display = "block";
        });
    </script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        var userTypeSelect = document.getElementById("inputUserType");
        var studentFormElements = document.getElementById("studentFormElements");
        var facultyFormElements = document.getElementById("facultyFormElements");
        var selectAllStudentsCheckbox = document.getElementById("selectAllStudents");
        var selectAllFacultyCheckbox = document.getElementById("selectAllFaculty");

        function toggleFormElementsVisibility() {
            var userType = userTypeSelect.value;

            studentFormElements.style.display = "none";
            facultyFormElements.style.display = "none";

            if (userType === "student" || userType === "both") {
                studentFormElements.style.display = "block";
            }

            if (userType === "faculty" || userType === "both") {
                facultyFormElements.style.display = "block";
            }
        }

        userTypeSelect.addEventListener("change", function () {
            toggleFormElementsVisibility();
        });

        selectAllStudentsCheckbox.addEventListener("change", function () {
            var studentCheckboxes = document.querySelectorAll('input[name="selected_students[]"]');
            studentCheckboxes.forEach(function (checkbox) {
                checkbox.checked = selectAllStudentsCheckbox.checked;
            });
        });

        selectAllFacultyCheckbox.addEventListener("change", function () {
            var facultyCheckboxes = document.querySelectorAll('input[name="selected_faculty[]"]');
            facultyCheckboxes.forEach(function (checkbox) {
                checkbox.checked = selectAllFacultyCheckbox.checked;
            });
        });

        toggleFormElementsVisibility();
    });
</script>
      <script>
            $(document).ready(function() {
                var groupSessionTable = $('#groupSessionTable').DataTable();
                $('#selectedRowsTable').hide();
                $('#groupSessionTable tbody').on('change', '.select-checkbox', function() {
                    if ($(this).prop('checked')) {
                        var rowData = $(this).closest('tr').clone();
                        rowData.find('td:first-child input').remove();
                        $('#selectedRowsBody').append(rowData);
                    } else {
                        var rowIndex = $(this).closest('tr').index();
                        $('#selectedRowsBody tr').eq(rowIndex).remove();
                    }
                    updateRowNumbers();
                    var hasSelectedRows = $('#selectedRowsBody tr').length > 0;
                    $('#selectedRowsTable').toggle(hasSelectedRows);
                });

                function toggleGroupNameInputVisibility() {
                    var hasSelectedRows = $('#selectedRowsBody tr').length > 0;
                    $('#groupNameContainer').toggle(hasSelectedRows);
                }
                toggleGroupNameInputVisibility();
                $('#groupSessionTable tbody').on('change', '.select-checkbox', function() {
                    toggleGroupNameInputVisibility();
                });
                $('#postSelectedRows').on('click', function() {
                    var selectedRowIds = [];
                    $('#selectedRowsBody tr').each(function() {
                        var rowId = $(this).attr('data-id');
                        selectedRowIds.push(rowId);
                    });
                    $('#selectedRowsTable').append('<input type="hidden" name="selectedRowIds" value="' +
                        selectedRowIds.join(',') + '">');
                });
                $('#courseSearch').on('input', function() {
                    groupSessionTable.columns(3).search(this.value).draw();
                });
                $('#subCourseSearch').on('input', function() {
                    groupSessionTable.columns(4).search(this.value).draw();
                });
            });

            function updateRowNumbers() {
                $('#selectedRowsBody tr').each(function(index) {
                    $(this).find('td:first-child').text(index + 1);
                });
            }
        </script>

  
</body>

</html>







<!-- <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
    </div>
</footer> -->

<!-- <script src="<?= base_url(); ?>plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?= base_url(); ?>dist/js/adminlte.min.js"></script> -->
<!-- <script src="<?= base_url(); ?>dist/js/demo.js"></script> -->
<!-- <script src="<?= base_url(); ?>plugins/jquery-ui/jquery-ui.min.js"></script> -->
<script>
    //$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- <script src="<?= base_url(); ?>plugins/chart.js/Chart.min.js"></script>
<script src="<?= base_url(); ?>plugins/sparklines/sparkline.js"></script>
<script src="<?= base_url(); ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url(); ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="<?= base_url(); ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="<?= base_url(); ?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url(); ?>plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?= base_url(); ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?= base_url(); ?>plugins/summernote/summernote-bs4.min.js"></script>
<script src="<?= base_url(); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?= base_url(); ?>dist/js/adminlte.js"></script> -->
<!-- <script src="<?= base_url(); ?>dist/js/pages/dashboard.js"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<!-- student creatate gropup -->
<!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->
<!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script> -->
<!-- <...> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
<!-- <script src="<?= base_url(); ?>plugins/fullcalendar/main.js"></script>
<script> -->
<!--    
    $(document).ready(function() {
        $("#toggle-table5").click(function() {
            $("#faculty-table5").toggle("");
            $("#faculty-table").hide();
            $("#faculty-table4").hide();
            $("#faculty-table2").hide();

        });



        $("#toggle-table2").click(function() {
            $("#faculty-table2").toggle("");
            $("#faculty-table").hide();
            $("#faculty-table4").hide();
            $("#faculty-table5").hide();

        });

        $("#toggle-table4").click(function() {
            $("#faculty-table4").toggle("");
            $("#faculty-table").hide();
            $("#faculty-table2").hide();

        });


        $("#toggle-table").click(function() {
            $("#faculty-table").toggle("");
            $("#faculty-table4").hide();
            $("#faculty-table2").hide();

        });

        $("#toggle-table6").click(function() {
            $("#faculty-table6").toggle("");



        });
        $(".coundd_demo").click(function() {
            $("#coundd_demo-payment-table").toggle("");
            $("#pending-demo-table").hide();
            $("#comp-payment-table").hide();
            $("#unattended-tabal").hide();

        });


        $(".pend-demo").click(function() {
            $("#pending-demo-table").toggle("");
            $("#comp-payment-table").hide();
            $("#coundd_demo-payment-table").hide();
            $("#unattended-tabal").hide();


        });
        $(".UnattendedList").click(function() {
            $("#unattended-tabal").toggle("");
            $("#comp-payment-table").hide();
            $("#coundd_demo-payment-table").hide();
            $("#pending-demo-table").hide();

        });
        $(".comp-payment").click(function() {
            $("#comp-payment-table").toggle("");
            $("#pending-demo-table").hide();
            $("#coundd_demo-payment-table").hide();
            $("#unattended-tabal").hide();

        });


    });
</script> -->

<!-- <script>
    function showStudentTable(button) {
        // Hide all tables with class "table"
        var tables = document.querySelectorAll('.table');
        for (var i = 0; i < tables.length; i++) {
            tables[i].style.display = 'none';
        }

        // Show the student assignment table
        document.getElementById('student-assignment-table').style.display = 'table';
    }
    </script> -->
<!-- <script>
        const assignButtons = document.querySelectorAll('.assign-button');

        assignButtons.forEach(button => {
            button.addEventListener('click', function() {
                const row = this.closest('tr');
                const dropdown = row.querySelector('.teacher-dropdown');

                if (dropdown.style.display === 'none' || dropdown.style.display === '') {
                    dropdown.style.display = 'block';
                } else {
                    dropdown.style.display = 'none';
                }
            });
        });
    </script>
      <script>
        $('#showVideoContainer').click( function() {
            $('#videoContainer').style.display = "block";
            $('#rescheduleContainer').style.display = "none";
            $('#imageContainer').style.display = "none";
        })
        $('#showImageContainer').click( function() {
            $('#imageContainer').style.display = "block";
            $('#rescheduleContainer').style.display = "none";
            $('#videoContainer').style.display = "none";
        })
        $('#showRescheduleContainer').click( function() {
            $('#rescheduleContainer').style.display = "block";
            $('#videoContainer').style.display = "none";
            $('#imageContainer').style.display = "none";
        })
        // document.getElementById("showVideoContainer").click( function() {
        //     document.getElementById("videoContainer").style.display = "block";
        //     document.getElementById("rescheduleContainer").style.display = "none";
        //     document.getElementById("imageContainer").style.display = "none";
        // });

        // document.getElementById("showImageContainer").addEventListener("click", function() {
        //     document.getElementById("imageContainer").style.display = "block";
        //     document.getElementById("rescheduleContainer").style.display = "none";
        //     document.getElementById("videoContainer").style.display = "none";

        // });
        // document.getElementById("showRescheduleContainer").addEventListener("click", function() {
        //     document.getElementById("rescheduleContainer").style.display = "block";
        //     document.getElementById("videoContainer").style.display = "none";
        //     document.getElementById("imageContainer").style.display = "none";
        // });
    </script> -->
<!-- <script>
              

              document.addEventListener('DOMContentLoaded', function() {
                  populateYearDropdown();
              });

              function populateYearDropdown() {
                  var currentYear = new Date().getFullYear();
                  var selectYear = document.getElementById('selectYear');

                //   for (var i = currentYear; i >= currentYear - 10; i--) {
                //       var option = document.createElement('option');
                //       option.value = i;
                //       option.text = i;
                //       selectYear.add(option);
                //   }
              }

              function viewAttendance() {
                  var selectedYear = document.getElementById('selectYear').value;
                  var selectedMonth = document.getElementById('selectMonth').value;

                  // Perform actions such as fetching attendance data based on the selected year and month
                  // You may use AJAX to send a request to the server for fetching data
                  // Example: fetchAttendanceData(selectedYear, selectedMonth);

                  // For demonstration purposes, let's assume attendance data is an array of objects
                  var attendanceData = [{
                          day: '2023-03-01',
                          status: 'Present'
                      },
                      {
                          day: '2023-03-05',
                          status: 'Absent'
                      },
                      // Add more data as needed
                  ];

                  displayAttendanceTable(attendanceData);
              }

              function displayAttendanceTable(attendanceData) {
                  var tableContainer = document.getElementById('attendanceTableContainer');
                  tableContainer.innerHTML = ''; // Clear previous content

                  if (attendanceData.length === 0) {
                      tableContainer.innerHTML = '<p>No attendance data available for the selected month.</p>';
                      return;
                  }

                  // Create a Bootstrap table
                  var table = document.createElement('table');
                  table.className = 'table table-bordered';

                  // Create the table header
                  var thead = document.createElement('thead');
                  var headerRow = document.createElement('tr');
                  var headers = ['Date', 'Status'];

                  headers.forEach(function(headerText) {
                      var th = document.createElement('th');
                      th.textContent = headerText;
                      headerRow.appendChild(th);
                  });

                  thead.appendChild(headerRow);
                  table.appendChild(thead);

                  // Create the table body
                  var tbody = document.createElement('tbody');

                  attendanceData.forEach(function(entry) {
                      var row = document.createElement('tr');

                      var dateCell = document.createElement('td');
                      dateCell.textContent = entry.day;
                      row.appendChild(dateCell);

                      var statusCell = document.createElement('td');
                      statusCell.textContent = entry.status;
                      row.appendChild(statusCell);

                      tbody.appendChild(row);
                  });

                  table.appendChild(tbody);

                  // Append the table to the container
                  tableContainer.appendChild(table);
              }
          </script>
          <script>
        
        $('#showVideoContainer').click( function() {
            $('#videoContainer').style.display = "block";
            $('#FacultyVideoContainer').style.display = "none";
        })
        $('#showFacultyVideoContainer').click( function() {
            $('#videoContainer').style.display = "none";
            $('#FacultyVideoContainer').style.display = "block";
        })
    </script> -->
<!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        var buttons = document.querySelectorAll('.group-button');
        var recordsContainers = document.querySelectorAll('.group-records');
        if (recordsContainers.length > 0) {
            recordsContainers[0].style.display = 'block';
        }
        buttons.forEach(function(button) {
            button.addEventListener('click', function() {
                var group = this.getAttribute('data-group');
                var clickedRecordsContainer = document.querySelector('[data-group-id="' +
                    group + '-records"]');
                recordsContainers.forEach(function(container) {
                    if (container === clickedRecordsContainer) {
                        container.style.display = 'block';
                    } else {
                        container.style.display = 'none';
                    }
                });
            });
        });
    });
    </script> -->
<!-- for group -->
<!-- <script>
        $(document).ready(function () {
            var groupSessionTable = $('#groupSessionTable').DataTable();
            $('#selectedRowsTable').hide();

            $('#groupSessionTable tbody').on('change', '.select-checkbox', function () {
                var rowData = $(this).closest('tr');
                var rowId = rowData.data('id');

                if ($(this).prop('checked')) {
                    var clonedRow = rowData.clone();
                    clonedRow.find('td:first-child input').remove();
                    $('#selectedRowsBody').append(clonedRow);
                } else {
                    $('#selectedRowsBody tr[data-id="' + rowId + '"]').remove();
                    updateRowNumbers();
                }

                var hasSelectedRows = $('#selectedRowsBody tr').length > 0;
                $('#selectedRowsTable').toggle(hasSelectedRows);
            });

            $('#postSelectedRows').on('click', function () {
                var selectedRowIds = [];
                $('#selectedRowsBody tr').each(function () {
                    var rowId = $(this).data('id');
                    selectedRowIds.push(rowId);
                });
                $('#selectedRowsTable').append('<input type="hidden" name="selectedRowIds" value="' +
                    selectedRowIds.join(',') + '">');
            });

            $('#courseSearch').on('input', function () {
                groupSessionTable.columns(3).search(this.value).draw();
            });

            $('#subCourseSearch').on('input', function () {
                groupSessionTable.columns(4).search(this.value).draw();
            });

            function updateRowNumbers() {
                $('#selectedRowsBody tr').each(function (index) {
                    $(this).find('td:first-child').text(index + 1);
                });
            }
        });
    </script> -->
<!--  -->
<!-- <script>
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
</script> -->

<!-- Page specific script -->
<!-- <script>
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
    <?php if (!empty($FacultysheduleData)) {
        foreach ($FacultysheduleData as $data) { ?>
          {
              title      : '<?= $data->faculty_name; ?> - <?= $data->start_time; ?> to <?= $data->end_time; ?>',
              start      : '<?= $data->date; ?>T<?= $data->start_time; ?>',
              end        : '<?= $data->date; ?>T<?= $data->end_time; ?>',
              faculty_id : '<?= $data->faculty_register_id; ?>',
          },
    <?php }
    } ?>
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
        $('#showVideoContainer').click( function() {
            $('#videoContainer').style.display = "block";
            $('#imageContainer').style.display = "none";
            $('#facultyContainer').style.display = "none";
        })
        $('#showImageContainer').click( function() {
            $('#imageContainer').style.display = "block";
            $('#videoContainer').style.display = "none";
            $('#facultyContainer').style.display = "none";
        })
        $('#showFaculty').click( function() {
            $('#facultyContainer').style.display = "block";
            $('#videoContainer').style.display = "none";
            $('#imageContainer').style.display = "none";
        })

    </script> -->

<!-- <label for="year">Select a Year:</label>
    <select id="year"></select> -->

<script>
    // Get the current year
    var currentYear = new Date().getFullYear();

    // Get the select element
    var yearDropdown = document.getElementById("selectYear");

    // Loop to generate options for the years, you can customize the range as needed
    for (var year = currentYear; year >= 1900; year--) {
        var option = document.createElement("option");
        option.value = year;
        option.text = year;
        yearDropdown.add(option);
    }
</script>
<!-- </body>
</html> -->