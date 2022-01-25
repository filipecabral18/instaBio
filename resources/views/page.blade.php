<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>

    <style type="text/css">
        body{
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            padding: 20px;
            font-family: Helvetica, Arial;
            background:linear-gradient($bg);
            color: {{$font_color}};
            
        }
        .profileImage img{
            width: 400px;
        }
        .profileTitle{
            font-size: 17px;
            font-weight: bold;
            margin-top: 10px;
        }
        .profileDescription{
            font-size: 15px;
            margin-top: 5px;
        }
        .linkArea{
            width:100%;
            margin:50px 0;
        }
        .banner{
            color: {{$font_color}};
        }

    </style>

</head>
<body>
    <div class="profileImage">
        <img src="{{$profile_image}}"/>
    </div>
    <div class="profileTitle">
        {{$title}}
    </div>
    <div class="profileDescription">
        {{$description}}
    </div>
    <div class="linkArea">

    </div>
    @if(!empty($fb_pixel))
    <div>
        Este é o seu Pixel Facebook: {{$fb_pixel}}
    </div>
    @endif
    <footer class="banner">
        Feito com ♥ Por Filipe cabral
    </footer>
    
</body>
</html>