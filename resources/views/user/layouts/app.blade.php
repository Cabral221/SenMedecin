<!DOCTYPE html>
<html lang="en zxx" class="no-js">

<head>
  @include('user/layouts/head')
  @yield('head')
</head>
<body>
  
  @include('user/layouts/header')
  
  @yield('main-content')
  
  @include('user/layouts/footer')
  @yield('js')
  
</body>

</html>
