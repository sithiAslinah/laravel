<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Pagr</title>
  {{Html::style('css/userbar.css')}}
</head>
<body>
   <section id="container" class="">
    @include('user.cont')
   </section>
   {{Html::script('js/nav.js')}}
</html>