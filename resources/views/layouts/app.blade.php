<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('/viber image.png') }}">

        <title>クラフトマン</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
        
        html {
            font-size: 20px;
            font-family: "Mplus 1p";
            height: 100%;
            
        }
        
        body {
             font-family: "Mplus 1p";
            min-height: 100%;
          　display: flex;
          　flex-direction: column;
        }
        
        li{
            list-style : none;
        }
        
                    
        /* item */
        .media .form-body {
            height: 70px;
        }
        .media .form-heading {
            height: 250px;
        }
        .media .form-heading img {
            height: 230px;
           object-fit: cover;
           border-radius: 8px;
        }
        
        /*詳細ページ完成イメージ*/
        .showimg {
            height: 400px;
            max-width: 600px; 
        }
        
         .media .form-body img {
            height: 200px;
            max-width: 300px;
        }
        
       .form-group{
           margin-bottom: 40px;
       }
        
        .media-object {
          opacity: 1;
          display: block;
          width: 100%;
          height: auto;
          transition: .5s ease;
          backface-visibility: hidden;
        }
        .media-object:hover {
            opacity: 0.6;
            transition: 0.7s;
        }
        
        
        /*user*/
        
        
       
       
        
        
        /* want */
        .btn-pink300{
            color: #bc4e59;
            background-color: #fff;
            font-size: 30px;
        }
        
        .btn-white{
            color: #000;
            background-color: #fff;
            font-size: 30px;
        }
                    
        .middle {
          opacity: 1;
          position: absolute;
          top: 50%;
          left: 80%;
          transform: translate(-50%, -50%);
          -ms-transform: translate(-50%, -50%);
          text-align: center;
        }
        
        main {
          display: flex;
          flex-direction: column;
         
        }

        .main-movie{
            background-size: cover;
            text-align: center;
            position: relative;
            
        }
         
        .main-movie video {
            margin: 0 auto;
            z-index: 1;
            width: 100%;
        }
        
        .navbar {
            color: black;
            background-color: #cc9966;
            height: 30px;
            opacity: 0.9;
        }
        
        nav .dropdown-menu {
            padding: 0px;
        }
        
        nav .dropdown-menu .divider{
            font-weight: 10;
            margin: 0;
        }
        
        nav li{
            background-color: #cc9966;
        }
        
        footer{
            height:99px;
        }
        
        footer .bg1 {
            background-color: #cc9966;
            opacity: 0.5;
            height:33px;
        }
        
        footer .bg2 {
            background-color: #cc9966;
            opacity: 0.7;
            height:33px;
        }
        
        footer .bg3 {
            background-color: #cc9966;
            height:33px;
        }
        
        img {
            max-width: 100%;
        }

        /*フォントまだ変えられない*/
  
        .navbar-left img{
          width:45px;
          height:45px;
        }
        
        .image-small{
            width: 25px;
            height:15px;
        }
        
        body
        {
          display: flex;
          flex-direction: column;
        }
         
        footer {
          margin-top: auto;
        }


        </style>
    <link href="https://fonts.googleapis.com/earlyaccess/mplus1p.css" rel="stylesheet">   
    </head>
    
    
    <body>
      @include('commons.navbar')  
        <main class="col-xs-12 clearfix">

            <div>
                @yield('cover')
            </div>
            <div class="container">
                @include('commons.error_messages')
                @yield('content')
            </div>
           
        </main>
        <br>

         @include('commons.footer')

    </body>
</html>