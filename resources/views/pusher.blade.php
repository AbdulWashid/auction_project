<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher("{{ env('PUSHER_APP_KEY') }}", {
      cluster: "{{ env('PUSHER_APP_CLUSTER') }}",
      encrypted: true
    });

    var channel = pusher.subscribe('abdul-message');
    channel.bind('abdul-event', function(data) {
        console.log(data);
    });
  </script>
</head>
<body>
  <h1>Pusher Test</h1>
</body>