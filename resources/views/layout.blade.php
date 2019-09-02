<html lang="en">
  <head>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Title</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
      <style>
          .is-complete {
              text-decoration: line-through;
          }
      </style>
      <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>

    <div class="container">
      @yield('content')
    </div>

    <footer class="footer">
        <div class="content has-text-centered">
            <p><strong>Laracast | Projects:</strong> Laravel 5.7 From Scratch</p>
        </div>
    </footer>
  </body>
</html>
