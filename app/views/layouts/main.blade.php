<?php $page_name =  str_replace(' ', '', $__env->yieldContent('page_name'));?>
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
  <div id="sideMenu">
    
  </div>

  <div id="<?php echo $page_name; ?>" class="body-content">
    <div class="header-menu">
      <ul class="list-header-menu">
        @if(!Auth::check())
          <li id="loginBtn"><a href="#">Login</a></li>
        @else
          <li><a href="dashboard">Dashboard</a></li>
        @endif  
      </ul>
    </div>
    @yield('content')
  </div>


    {{ HTML::script('static/js/vendor/jquery.js') }}
    {{ HTML::script('static/js/foundation.min.js') }}
    {{ HTML::script('static/js/login.js') }}
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
