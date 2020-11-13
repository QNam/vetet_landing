<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap&subset=vietnamese">
        
        <link rel="shortcut icon" href="imgs/favicon.png">
    
        <title>Vé Tết</title>
        <style>
            * { margin: 0; padding: 0; font-family: Cabin }
            body { overflow: hidden }
            .banner {
                position: relative;
            }
            .banner__content {
                position: absolute;
                width: 100%;
                top: calc(50% - 32px);
                text-align: center
            }

            .banner__content h2 {
                color: #ffffff;
                font-size: 64px;
            }
        </style>
    </head>
    <body>
    <div class="banner">
        <img src="imgs/banner.png" style="width: 100%; height: 100vh; object-fit: cover" alt="">
        <div class="banner__content">
            <h2>COOMING SOON</h2>
        </div> 
    </div>
    </body>
</html>
