<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    @include('layouts.links')
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">


    @include('layouts.navbar')
    @include('layouts/messages')

      @yield('content')


      </div>
    </div>
  </div>


  </body>
</html>
