<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TGLD | Welcome</title>

    <!-- CSS -->
    {{ HTML::style('static/css/foundation.css') }}
    {{ HTML::style('static/css/styles.css') }}

    <!-- JS --> 
    {{ HTML::script('static/js/vendor/modernizr.js') }}

  </head>
  <body>
    
    
    {{ HTML::script('static/js/vendor/jquery.js') }}
    {{ HTML::script('static/js/foundation.min.js') }}
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
