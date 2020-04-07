<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>eMed Nepal Ordert</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Nepal largest online retail pharmacy" />
    <meta name="keywords" content="Nepal largest online retail pharmacy, eMed Nepal" />
    <meta name="author" content="eMed Nepal" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    @include('front.partials.styles')
    @yield('styles')
    <style>
        html, body {
            height: 100%;
            margin: 0;
            background: linear-gradient(90deg, #00C9FF 0%, #92FE9D 100%);
            /*background: linear-gradient(90deg, #4b6cb7 0%, #182848 100%);*/
        }
        .order-section {
            height:100%;
        }
        .order-panel {
            margin-top: 30px;
        }

        .button-wrapper {
          position: relative;
          width: 150px;
          margin-top: 20%;
        }

        .button-wrapper span.label {
          position: relative;
          z-index: 0;
          display: inline-block;
          width: 100%;
          background: #00bfff;
          cursor: pointer;
          color: #fff;
          padding: 10px 0;
          text-transform:uppercase;
          font-size:12px;
        }

        #upload {
            display: inline-block;
            position: absolute;
            z-index: 1;
            width: 100%;
            height: 50px;
            top: 0;
            left: 0;
            opacity: 0;
            cursor: pointer;
        }
        .mt-10 {
            margin-top: 10px;
        }
        .mt-80 {
            margin-top: 80px;
        }
        .text-dark {
            color: #797E7D;
        }
        .svg-img {
            position: relative;
            left: 0%;
            right: 0%;
            top: 0%;
            bottom: 0%;
        }
        .text-white {
            color: white;
        }
        
    </style>
</head>
<body>

<div class="fh5co-loader"></div>

<div id="page">
    <x-pages.ordercompleted />
    <x-footer />
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

@include('front.partials.scripts')
@yield('scripts')
</body>
</html>

