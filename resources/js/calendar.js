document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {    
      initialView: 'dayGridMonth',
      locale: 'es',
      headerToolbar:{
        start: 'title',
        center: 'list',
        end: 'today dayGridMonth,timeGridWeek,timeGridDay prev,next'
      }
    });
    calendar.setOption('height', 700);
    calendar.render();
});