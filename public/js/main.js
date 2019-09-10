$(document).ready(function(){
    var jadwal=[
        {
            title: 'Barber',
            description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
            start: '2019-07-07',
            end: '2019-07-07',
            className: 'fc-bg-default',
            icon : "circle"
        },
        {
            title: 'Flight Paris',
            description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
            start: '2019-08-08T14:00:00',
            end: '2019-08-08T20:00:00',
            className: 'fc-bg-deepskyblue',
            icon : "cog",
            allDay: false
        }
    ];
    $("#calendar").fullCalendar({
        themeSystem:"bootstrap4",
        businessHours:false,
        defaultView:"month",
        editable:false,
        header:{
            left:"title",
            center:"month,agendaWeek,agendaDay",
            right:"prev,next"
        },
        events: jadwal,
        eventClick: function(event, jsEvent, view) {
            $('.event-title').html(event.title);
            $('.event-body').html(event.description);
            $('.eventUrl').attr('href',event.url);
            $('#modal-view-event').modal();
        }
    })
});