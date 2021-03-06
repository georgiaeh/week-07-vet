<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous"
    />
    <title>@yield("title")</title>
  </head>
  <body>
    <div class="container">
    <header>
        @include("_partials/header")
    </header>

    <main class="mt-4">
        @yield("content")
    </main>

    <footer class="mt-4 navbar navbar-light bg-light">
        @include("_partials/footer")
    </footer>
    </div>
  </body>
</html>