<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NH9G33K');</script>
    <!-- End Google Tag Manager -->
    <meta name="description" content="The Minecraft Hosting offers the best minecraft server hosting & cheap prices. We offer cheap & quality minecraft server hosting with good quality server.">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="minecraft hosting, minecraft server hosting, free minecraft server hosting, free minecraft hosting,best minecraft hosting, cheap minecraft hosting, best minecraft hosting, the minecraft hosting, best minecraft server hosting, minecrafthosting, hosting para minecraft, host de minecraft, host para minecraft, host minecraft">
    <meta name="author" content="The Minecraft Hosting">
    <title>The Minecraft Hosting: Client Area Login</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:400,300,900">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Start Alexa Certify Javascript -->
    <script type="text/javascript">
    _atrk_opts = { atrk_acct:"EYtUn1QolK10Y8", domain:"theminecrafthosting.com",dynamic: true};
    (function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
    </script>
    <noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=EYtUn1QolK10Y8" style="display:none" height="1" width="1" alt="" /></noscript>
    <!-- End Alexa Certify Javascript -->
    <link href="https://theminecrafthosting.com/whmcs/templates/six/css/all.min.css?v=e043d9" rel="stylesheet">
    <link href="https://theminecrafthosting.com/whmcs/templates/six/css/custom.css" rel="stylesheet">
    <style type="text/css">
    html, body {
        height: 100%;
        min-height: 100%;
        background: #fff;
        overflow: hidden;
    }
    #video {
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    #video-out{
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: none;
        position: absolute;
        left: 0px;
        top: 0px;
        z-index: 25565;
    }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#contenedor").delay(750).fadeIn(2000);
            $("form").submit(function(){
                $("#video-out").show().delay(1000);
                });
        });
    </script>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NH9G33K"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <video loop muted autoplay playsinline id="video"></video>
    <video muted autoplay id="video-out" src="../video/login-end.mp4"></video>
<div class="col-xs-12 main-content" style="position: relative;height: 100%;width: 100%;display: none;" id="contenedor">
    <div class="logincontainer" style="margin: auto;position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);width: inherit;padding: 30px;background-color: #ffffff87;border-radius: 25px;">
        <div class="header-lined text-center">
            <img src="../img/theminecrafthosting.com_logo.svg" class="img-responsive" alt="The Minecraft Hosting Logo" style="max-width: 85px; margin: auto;">
            <h1>Login</h1>
        </div>
        <div class="providerLinkingFeedback"></div>
        <div class="row">
            <div class="col-sm-12">
                <form method="post" action="https://theminecrafthosting.com/whmcs/dologin.php" class="login-form" role="form">
                    <input type="hidden" name="token" value="89f1666b3c1176c2adbe1f10d558f981a592c1d8">
                    <div class="form-group">
                        <label for="inputEmail">Correo Electrónico</label>
                        <input type="email" name="username" class="form-control" id="inputEmail" placeholder="Enter email" autofocus="">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Contraseña</label>
                        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" autocomplete="off">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="rememberme"> Recuerdame
                        </label>
                    </div>
                    <div align="center">
                        <input id="login" type="submit" class="btn btn-primary" value="Login"> <a href="https://theminecrafthosting.com/whmcs/pwreset.php" class="btn btn-default">Olvidé mi contraseña...</a>
                    </div>
                </form>
            </div>
            <div class="col-sm-5 hidden">
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var vid = "qR_UvRDO3Ns",
        streams,
        video_focused = true,
        video_tag = $("#video"),
        video_obj = video_tag.get(0);
    $.getJSON("https://query.yahooapis.com/v1/public/yql", {
        q: "select * from csv where url='https://www.youtube.com/get_video_info?video_id=" + vid + "'",
        format: "json"
    }, function(data) {
        if (data.query.results) {
            streams = parse_youtube_meta(data.query.results.row.col0);
            video_tag.attr({
                src: streams['1440p'] || streams['1080p'] || streams['720p']
            });

            document.addEventListener("visibilitychange", function() {
                video_focused = !video_focused ? video_obj.play() : video_obj.pause();
            });
        }
    });

    function parse_youtube_meta(rawdata) {
        var data = parse_str(rawdata),
            streams = (data.url_encoded_fmt_stream_map + ',' + data.adaptive_fmts).split(','),
            result = {};
    $.each(streams, function(n, s) {
        var stream = parse_str(s),
            itag = stream.itag * 1,
            quality = false,
            itag_map = {18: '360p', 22: '720p', 37: '1080p', 38: '3072p', 82: '360p3d', 83: '480p3d', 84: '720p3d', 85: '1080p3d', 133: '240pna', 134: '360pna', 135: '480pna', 136: '720pna', 137: '1080pna', 160: '144pna', 264: '1440pna', 139: "48kbps", 140: "128kbps", 141: "256kbps"};
        if (itag_map[itag]) result[itag_map[itag]] = stream.url;
    });
        return result;
    };

    function parse_str(str) {
        return str.split('&').reduce(function(params, param) {
            var paramSplit = param.split('=').map(function(value) {
                return decodeURIComponent(value.replace('+', ' '));
            });
            params[paramSplit[0]] = paramSplit[1];
            return params;
        }, {});
    }
    </script>
    <!-- Start of LiveChat (www.livechatinc.com) code -->
    <script type="text/javascript">
    window.__lc = window.__lc || {};
    window.__lc.license = 6255571;
    (function() {
      var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
      lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
    })();
    </script>
    <!-- End of LiveChat code -->
</body>
</html>
