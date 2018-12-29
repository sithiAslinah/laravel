<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/favicon.png">
<link media="all" type="text/css" rel="stylesheet" href="http://localhost/login/public/css/userbar.css">
  @yield('header') 
</head>
<body> 
  @include('user.cont')
 

  <section id="" class="" style="margin-left:20%;">
  @yield('member')
  </section>
 <script src="http://localhost/login/public/js/nav.js"></script>
 @include('user.footer')
</body>
</html>