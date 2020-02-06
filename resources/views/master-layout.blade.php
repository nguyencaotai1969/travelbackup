<!DOCTYPE html>
<html lang="en">
<head>
    <title> @yield('title')</title>
    <link REL="SHORTCUT ICON" HREF="{{asset('img/logo.png')}}">
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="travel, du lich gia re,travel.com.vn,travel vivu ,du lich ,travel viet nam,du lịch việt nam" />
    <meta name="description"content="travel.net, du lich gia re đi đâu ,du lịch hợp lý,tour du lịch giá rẻ" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css
">
    <link
        href="https://fonts.googleapis.com/css?family=Baloo|Charm|IBM+Plex+Serif|Lobster|Playfair+Display&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Baloo|Baloo+Paaji|Charm|IBM+Plex+Serif|Lobster|Pattaya|Playfair+Display&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}">
</head>
<body>
@include('header')
@yield('content')
@include('footer')
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('js/footer.js')}}">
<script type="text/javascript" src="{{asset('js/footer.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
@yield('js')
</body>
</html>

