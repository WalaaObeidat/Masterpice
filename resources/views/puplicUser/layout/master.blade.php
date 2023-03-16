<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Disgin Queen</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    @include('puplicUser.layout.head')
</head>
<body>

    @include('puplicUser.layout.navbar')

    @yield('showCase')

    @yield('contant')


    @include('puplicUser.layout.script')

    @include('puplicUser.layout.footer')


