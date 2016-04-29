<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A layout example that shows off a blog page with a list of posts.">
  <title>Blog &ndash; Layout Examples &ndash; Pure</title>
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

  <!--[if lte IE 8]>

  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">

  <![endif]-->
  <!--[if gt IE 8]><!-->
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
  <!--<![endif]-->
  <!--[if lte IE 8]>
  <link rel="stylesheet" href="css/layouts/blog-old-ie.css">
  <![endif]-->
  <!--[if gt IE 8]><!-->
  <link rel="stylesheet" href="css/blog.css">
  <link rel="stylesheet" href="../css/blog.css">
  <!--<![endif]-->

</head>
<body>
  <div id="layout" class="pure-g">
    <div class="sidebar pure-u-1 pure-u-md-1-4">
      <div class="header">
        <h1 class="brand-title">World talent consulting</h1>
        <h2 class="brand-tagline">Marketing Average</h2>

        <nav class="nav">
          <ul class="nav-list">
            <li class="nav-item">
              <a class="pure-button" href="{{ route('company_dashboard_path') }}">Main</a>
            </li>
            <li class="nav-item">
              <a class="pure-button" href="{{ route('company_menu_path') }}">Dashboard</a>
            </li>
            <li class="nav-item">

              <a class="pure-button" href="{{ route('auth_destroy_path') }}">Logout</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>

    <div class="content pure-u-1 pure-u-md-3-4">

      @yield('content')
    </div>
  </div>
</body>
</html>
