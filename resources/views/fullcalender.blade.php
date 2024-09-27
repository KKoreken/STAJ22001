<!DOCTYPE html>
<html>
<head>
    <title>Laravel FullCalendar Tutorial - raviyatechnical</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
</head>
<body>
<div class="container">
    <h1>Laravel FullCalendar Örnek - raviyatechnical</h1>
    <div id='calendar'></div>
</div>

<script>
    $(document).ready(function () {
        var SITEURL = "{{ url('/') }}";

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#calendar').fullCalendar({
            editable: true,
            events: SITEURL + "/load-events",
            displayEventTime: true, // Saatleri göster
            timeFormat: 'HH:mm', // Saat formatı, 24 saatlik
            locale: 'tr', // Türkçe dilini belirtiyoruz
            eventRender: function (event, element, view) {
                if (event.allDay === 'true') {
                    event.allDay = true;
                } else {
                    event.allDay = false;
                }
            },
            selectable: false, // Etkinlik eklemeyi kapat
            selectHelper: false, // Seçim yardımcısını kapat
            eventClick: function (event) {
                var editUrl = SITEURL + '/panel/etkinlik-duzenle/' + event.id;
                window.location.href = editUrl;
            }
        });
    });

    function displayMessage(message) {
        toastr.success(message, 'Etkinlik');
    }
</script>
</body>
</html>
