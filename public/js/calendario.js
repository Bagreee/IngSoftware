document.addEventListener('DOMContentLoaded', function() {

    let formulario = document.querySelector("form");

    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {    
      initialView: 'dayGridMonth',
      locale: 'es',
      displayEventTime:false,
      headerToolbar:{
        start: 'title',
        center: 'list',
        end: 'today dayGridMonth,timeGridWeek,timeGridDay prev,next'
      },

      events: baseURL+"/calendario/show",

      dateClick:function(info){

        formulario.reset();
        formulario.start.value=info.dateStr;
        formulario.end.value=info.dateStr;

        $("#calendario").modal("show");

      },

      eventClick:function(info){

        var evento = info.event;
        console.log(evento);

        axios.post(baseURL+"/calendario/edit/"+info.event.id).then((respuesta)=>{

          formulario.id.value = respuesta.data.id;
          formulario.id_dpto.value = respuesta.data.id_dpto;
          formulario.title.value = respuesta.data.title;
          formulario.asistentes.value = respuesta.data.asistentes;
          formulario.start.value = respuesta.data.start;
          formulario.end.value = respuesta.data.end;
          $("#calendario").modal("show");

        }).catch(

          error=>{

            if(error.response){
              console.log(error.response.data);
            }

          })

      }

    });

    calendar.setOption('height', 700);
    calendar.render();

    document.getElementById("btnGuardar").addEventListener("click", function(){

      enviarDatos("/calendario/create");

    });

    /*document.getElementById("btnEliminar").addEventListener("click", function(){

      enviarDatos("/calendario/destroy/"+formulario.id.value);

    });*/

    /*document.getElementById("btnModificar").addEventListener("click", function(){

      enviarDatos("/calendario/update/"+formulario.id.value);

    });*/

    function enviarDatos(url){

      const datos = new FormData(formulario);

      const newURL = baseURL+url;

        axios.post(newURL, datos).then((respuesta)=>{

          calendar.refetchEvents();
          $("#calendario").modal("hide");

        }).catch(

          error=>{

            if(error.response){
              console.log(error.response.data);
            }

          })

    }

});