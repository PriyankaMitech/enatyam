var Calendar = FullCalendar.Calendar;
var events = [];

$(function() {
    if (!!scheds) {
       console.log(scheds)
        Object.keys(scheds).map(k => {
            var row = scheds[k];
            var startDate = moment(row.start_date);
            var endDate = moment(row.end_date);
            for (var currentDay = startDate.clone(); currentDay.isSameOrBefore(endDate); currentDay.add(1, 'day')) {
                if (row.days.includes(currentDay.format('dddd'))) {
                    events.push({
                        id: row.id,
                        title: row.title,  // Assuming you want to use the title property
                        start: currentDay.format('YYYY-MM-DD') + ' ' + row.start_time,
                        end: currentDay.format('YYYY-MM-DD') + ' ' + row.end_time
                    });
                }
            }
        });
    }

    var calendar = new Calendar(document.getElementById('calendar'), {
        headerToolbar: {
            left: 'prev,next today',
            right: 'dayGridMonth,dayGridWeek,list',
            center: 'title',
        },
        selectable: true,
        themeSystem: 'bootstrap',
        events: events,
        eventClick: function (info) {
            var _details = $('#event-details-modal');
            var id = info.event.id;

            if (!!scheds[id]) {
                _details.find('#title').text(scheds[id].title);

                // Check if the description is a valid URL
                var description = scheds[id].description;
                var isUrl = /^(ftp|http|https):\/\/[^ "]+$/.test(description);

                if (isUrl) {
                    // If it's a URL, create a clickable link
                    _details.find('#description').html('<a href="' + description + '" target="_blank">' + description + '</a>');
                } else {
                    // If not a URL, display the plain text
                    _details.find('#description').text(description);
                }

                _details.find('#start').text(scheds[id].start_time);
                _details.find('#end').text(scheds[id].end_time);
                _details.find('#edit,#delete').attr('data-id', id);
                _details.modal('show');
            } else {
                alert("Event is undefined");
            }
        },
        eventDidMount: function(info) {

        },
        editable: true
    });

    calendar.render();

    // Form reset listener
    $('#schedule-form').on('reset', function() {
        $(this).find('input:hidden').val('')
        $(this).find('input:visible').first().focus()
    })

    // Edit Button
    $('#edit').click(function() {
        var id = $(this).attr('data-id')
        if (!!scheds[id]) {
            var _form = $('#schedule-form')
            console.log(String(scheds[id].start_datetime), String(scheds[id].start_datetime).replace(" ", "\\t"))
            _form.find('[name="id"]').val(id)
            _form.find('[name="title"]').val(scheds[id].title)
            _form.find('[name="description"]').val(scheds[id].description)
            _form.find('[name="start_datetime"]').val(String(scheds[id].start_datetime).replace(" ", "T"))
            _form.find('[name="end_datetime"]').val(String(scheds[id].end_datetime).replace(" ", "T"))
            $('#event-details-modal').modal('hide')
            _form.find('[name="title"]').focus()
        } else {
            alert("Event is undefined");
        }
    })

    // Delete Button / Deleting an Event
    $('#delete').click(function() {
        var id = $(this).attr('data-id')
        if (!!scheds[id]) {
            var _conf = confirm("Are you sure to delete this scheduled event?");
            if (_conf === true) {
                location.href = "./delete_schedule.php?id=" + id;
            }
        } else {
            alert("Event is undefined");
        }
    });
});
