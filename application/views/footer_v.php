<div class="footer">
    <div class="pull-right">
        10GB of <strong>250GB</strong> Free.
    </div>
    <div>
        <strong>Copyright</strong> 4nesia Company &copy; 2018
    </div>
</div>

</div>
</div>

<script>
        $(document).ready(function() {

            $('.footable').footable();
            $('.footable2').footable();

        });

</script>

<!-- datepicker script -->
<script type="text/javascript">
//Date picker
$("#yearpicker").datepicker( {
      format: " yyyy",
      viewMode: "years",
      minViewMode: "years"
    });
    $("#yearpicker2").datepicker( {
      format: " yyyy",
      viewMode: "years",
      minViewMode: "years"
    });
    $("#yearpickerEdit").datepicker( {
      format: " yyyy",
      viewMode: "years",
      minViewMode: "years"
    });
    $("#yearpicker2Edit").datepicker( {
      format: " yyyy",
      viewMode: "years",
      minViewMode: "years"
    });
    $("#datepicker").datepicker( {
      format: 'dd/mm/yyyy'
    });
    $("#datepicker2").datepicker( {
      format: 'dd/mm/yyyy'
    });
    $("#datepicker3").datepicker( {
      format: 'dd/mm/yyyy'
    });
    $("#datepicker4").datepicker( {
      format: 'dd/mm/yyyy'
    });
    $("#datepicker5").datepicker( {
      format: 'dd/mm/yyyy'
    });
    $("#datepicker6").datepicker( {
      format: 'dd/mm/yyyy'
    });
</script>

<!-- Page-Level Scripts -->
<script>
      /*
       $(document).ready(function(){
           $('.dataTables-example').DataTable({
               pageLength: 10,
               responsive: true,
               dom: 'lTfrtip',
               buttons: [
                   { extend: 'copy'},
                   {extend: 'csv'},
                   {extend: 'excel', title: 'ExampleFile'},
                   {extend: 'pdf', title: 'ExampleFile'},

                   {extend: 'print',
                    customize: function (win){
                           $(win.document.body).addClass('white-bg');
                           $(win.document.body).css('font-size', '10px');

                           $(win.document.body).find('table')
                                   .addClass('compact')
                                   .css('font-size', 'inherit');
                   }
                   }
               ]

           });

       }),

       $(document).ready(function(){
           $('.datatabeltagihan').DataTable({
               pageLength: 10,
               responsive: true,
               dom: 'lTfrtip',
               buttons: [
                   { extend: 'copy'},
                   {extend: 'csv'},
                   {extend: 'excel', title: 'ExampleFile'},
                   {extend: 'pdf', title: 'ExampleFile'},

                   {extend: 'print',
                    customize: function (win){
                           $(win.document.body).addClass('white-bg');
                           $(win.document.body).css('font-size', '10px');

                           $(win.document.body).find('table')
                                   .addClass('compact')
                                   .css('font-size', 'inherit');
                   }
                   }
               ]

           });

       });
       */

   </script>

<script>

    $(document).ready(function () {

        // Add slimscroll to element
        $('.scroll_content').slimscroll({
            height: '200px'
        })

        $('.scroll_jadwal').slimscroll({
            height: '500px'
        })

    });

</script>

<script>
    $(document).ready(function() {

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });

        /* initialize the external events
         -----------------------------------------------------------------*/


        $('#external-events div.external-event').each(function() {

            // store data so the calendar knows to render an event upon drop
            $(this).data('event', {
                title: $.trim($(this).text()), // use the element's text as the event title
                stick: true // maintain when user navigates (see docs on the renderEvent method)
            });

            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 1111999,
                revert: true,      // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
            });

        });


        /* initialize the calendar
         -----------------------------------------------------------------*/
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
            droppable: true, // this allows things to be dropped onto the calendar
            drop: function() {
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
            },
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


    });

</script>

</body>

</html>
