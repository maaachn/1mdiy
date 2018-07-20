<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>クラフトマン</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


        <link rel="stylesheet" href="css/style2.css">
        <link rel="stylesheet" href="css/style1.css">

        
      
        
        <style>
        body {
            font-size: 20px;
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
            height: 200px;
            max-width: 300px;
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
        
        

.main-movie{

    background-size: cover;
    text-align: center;
    position: relative;
    /*overflow: hidden;*/
}
 
.main-movie video {
    margin: 0 auto;
    z-index: 1;
    width: 100%;
}

.navbar {
    background-color: rgba(170,170,0,0.5)	;
    color: #006600;
}

 


        </style>
       
    </head>
    
    
    <body>
      @include('commons.navbar')  
        <main>

            <div>
                @yield('cover')
            </div>
            <div class="container">
                @include('commons.error_messages')
                @yield('content')
            </div>
        </main>

        @include('commons.footer')

    </body>
</html>