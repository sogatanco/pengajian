$(document).ready(function(){
    $.ajax({
        type:'get',
        url:'api/all',
        success:function(response){
            console.log(response)
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
                events: response,
                eventClick: function(event, jsEvent, view) {
                    $('.event-title').html(event.title);
                    $('.event-body').html(event.description);
                    $('.oleh').html(event.oleh);
                    $('.detail').html(`<a href="`+event.id+`" class="btn btn-primary">View Detail <span class="fas fa-angle-double-right"></span></a>`)
                    $('#modal-view-event').modal();
                }
            })
        }
    });

});