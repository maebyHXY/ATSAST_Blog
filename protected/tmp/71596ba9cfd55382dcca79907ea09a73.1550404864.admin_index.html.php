<?php if(!class_exists("View", false)) exit("no direct access allowed");?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
        <title>个人资料</title>
        <style type="text/css"></style>
        <style>
            article, aside, audio, body, canvas, caption, details, div, figure, footer, header, hgroup, html, iframe, img, mark, menu, nav, object, section, span, summary, table, tbody, td, tfoot, thead, tr, video{
                border: 0;
                margin: 0;
                padding: 0;
            }
            div, span, object, iframe, img, table, caption, thead, tbody, tfoot, tr, tr, td, article, aside, canvas, details, figure, hgroup, menu, nav, footer, header, section, summary, mark, audio, video, ul, li, dl, dt, dd{
                border: 0;
                margin: 0;
                padding: 0;
            }
            a, abbr, address, b, blockquote, cit, code, dd, del, dfn, dl, dt, em, fieldset, h1, h2, h3, h4, h5, h6, hr, i, ins, label, legend, li, ol, p, pre, q, samp, small, strong, sub, sup, ul{
                border: 0;
                font-size: 100%;
                vertical-align: baseline;
                margin: 0;
                padding: 0;
            }
            body,html{
                line-height: 1.2;
            }
            *{
                box-sizing: border-box;
            }
            ul{
                list-style-type: none;
                padding: 0;
            }
            li{
                display: block;
            }
            ul,li,ol,dl.dt,dd{
                list-style: none;
            }
            .container-fluid{
                width: 100%;
                height: 100%;
                bottom: 0%;
                position: absolute;
                background: url("http://api.dujin.org/bing/1920.php") 0 / cover fixed;
            }
            .Showletters{
                top:30%;
                position: relative;
                text-align: center;
                color:snow;
            }
            .container{
                width: 1200px;
                margin: 0 auto;
                height: 90%;
                margin-top: 16px;
            }
            .container .left_box{
                width: 150px;
                position: relative;
                float:left;
                box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.05);
            }
            .container .left_box .aside li{
                height: 35px;
                width: 100%;
                line-height: 40px;
                font-size: 14px;
                color: #4d4d4d;
                padding-left: 16px;
                box-sizing: border-box;
                margin-bottom: 1px;
            }
            .container .left_box .aside{
                background: #fff;
                border-bottom: 1px solid #e9eaeb;
            }
            .container .left_box .aside li.router-link-active{
                background: #27bcf7;
                color: #fff;
            }
            .container .left_box .aside li.router-link-active .font{
                color: #fff;
            }
            .container .left_box .aside li .font{
                color: #4d4d4d;
            }
            .container .main_box{
                margin-left: 200px;
                position: relative;
                background-color: #fff;
                min-height: 95%;
                padding: 0 32px 30px;
                box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.05);
                min-height: 500px;
            }
            .container .main_box .title{
                font-size: 20px;
                color: #3d3d3d;
                font-weight: 900;
                height: 80px;
                line-height: 80px;
                border-bottom: 1px solid #e0e0e0;
            }
            .container .main_box .user_info{
                overflow: hidden;
            }
            .container .main_box .user_info .header{
                float: left;
                position: relative;
                text-align: center;
                margin-right: 16px;
                cursor: pointer;
            }
            .container .main_box .user_info .header .head{
                width: 100px;
                height: 100px;
                border-radius: 50%;
                margin: 0 auto;
                margin-top: 16px;
            }
            .container .main_box .user_info .other_info{
                position: relative;
                width: 725px;
                margin-left: 120px;
            }
            .container .main_box .user_info .other_info .info_link{
                margin-top: 16px;
                overflow: hidden;
                height: 20px;
                line-height: 20px;
            }
            .container .main_box .user_info .other_info .info_link{
                height: 20px;
                line-height: 20px;
            }
            .container .main_box .user_info .other_info .info_link .font{
                float: right;
                font-size: 14px;
                color: #27bcf7;
            }
            .container .main_box .user_info .other_info .info_hot{
                margin-top: 8px;
                margin-bottom: 16px;
            }
            .line{
                height: 1px;
                background: #e0e0e0;
            }
            .container .main_box .user_info .other_info .info_nick{
                height: 32px;
                line-height: 32px;
                overflow: hidden;
            }
            .container .main_box .user_info .other_info .info_self .common{
                height: 32px;
                line-height: 32px;
                font-size: 14px;
                color: #4d4d4d;
            }
            .container .main_box .user_info .other_info .info_self .common.last{
                margin-bottom: 8px;
            }
            .container .main_box .user_info .other_info .info_self .intro{
                font-size: 14px;
                color: #4d4d4d;
                overflow: hidden;
            }
            #gravatar-nav{
                width:60px;
                height:60px;
                border-radius:60px;
            }
            #row-nav{
                display: flex; 
                justify-content: center; 
                align-items: center;
            }
        </style>
        <script type="text/javascript">
            function appear()
            {
                $("#alert1").text("");
                $("#alert1").append("<p>1111</p>");
            }
        </script>
    </head>
    <body>
        <div style="background-color: black; color:white;">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark" style="background-color:black;opacity: 0.6;">
                <a class="navbar-brand" href="http://<?php echo htmlspecialchars($MAIN_PAGE, ENT_QUOTES, "UTF-8"); ?>">ATSAST BLOG</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <form action="http://<?php echo htmlspecialchars($MAIN_PAGE, ENT_QUOTES, "UTF-8"); ?>/search/result" method="get" class="form-inline my-2 my-lg-0 mundb-inline">
                                <input class="form-control mr-sm-2 atsast-searchBox" name="keywords" type="search" placeholder="搜索" aria-label="搜索">
                            </form>
                        </li>
                    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo htmlspecialchars($greeting, ENT_QUOTES, "UTF-8"); ?>！<?php echo htmlspecialchars($user_name, ENT_QUOTES, "UTF-8"); ?></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-header">
                                            <div class="row" id="row-nav">
                                                <img src="<?php echo htmlspecialchars($gravatar, ENT_QUOTES, "UTF-8"); ?>" class="img-thumbnail" id="gravatar-nav" />
                                                <h6>&nbsp&nbsp&nbsp<?php echo htmlspecialchars($user_name, ENT_QUOTES, "UTF-8"); ?></h6>
                                            </div>
                                            </div>
                                <a class="dropdown-item text-danger" href="http://<?php echo htmlspecialchars($MAIN_PAGE, ENT_QUOTES, "UTF-8"); ?>/account/logout">登出</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>            
        </div>
        <div class="container-fluid"></div>
        <div class="container">
            <div class="left_box">
                <ul class="aside nav nav-tabs flex-column" id="actTab" role="tablist">
                    <li class="router-link-active nav-item">
                        <a class="font" id="intro-tab" data-toggle="tab" href="#intro" role="tab" aria-controls="intro" aria-selected="true">个人资料</a>
                    </li>
                    <li class="router-link nav-item">
                        <a class="font" id="follow-tab" data-toggle="tab" href="#follow" role="tab" aria-controls="follow" aria-selected="false">关注</a>
                    </li>
                    <li class="router-link">
                        <a class="font">收藏文章</a>
                    </li>
                </ul>
                <ul class="aside">
                    <li class="router-link">
                        <a class="font" href="http://<?php echo htmlspecialchars($MAIN_PAGE, ENT_QUOTES, "UTF-8"); ?>/admin/blog">博客管理</a>
                    </li>
                </ul>
            </div>
            <div class="main_box tab-content" id="actTabContent">
                <div class="tab-pane active" id="intro" role="tabpanel" aria-labelledby="intro-tab">
                    <h3 class="title">个人资料</h3>
                    <div class="user_info">
                        <div class="header">
                            <img src="<?php echo htmlspecialchars($gravatar, ENT_QUOTES, "UTF-8"); ?>" class="head">
                        </div>
                        <div class="other_info">
                            <div class="info_link">
                                <a class="font" href="http://<?php echo htmlspecialchars($MAIN_PAGE, ENT_QUOTES, "UTF-8"); ?>/page/blog?uid=<?php echo htmlspecialchars($user_info['uid'], ENT_QUOTES, "UTF-8"); ?>">我的博客</a>
                            </div>
                            <div class="info_hot">
                                <span style="color:#4d4d4d;font-size: 14px;margin-right: 16px;">关注 0</span>
                                <span style="color:#ccc;margin-right: 16px;"></span>
                                <span style="color:#4d4d4d;font-size: 14px;margin-right: 8px;">zl币 0</span>
                                <span style="color:#27bcf7;font-size: 14px;margin: 0;cursor: pointer;">充值</span>
                            </div>
                            <div class="line"></div>
                            <div class="info_nick">
                                <span style="color:#4d4d4d;font-size: 14px;float:left;">昵称： <?php echo htmlspecialchars($user_info["username"], ENT_QUOTES, "UTF-8"); ?></span>
                                <span style="color:#27bcf7;font-size: 14px;float:right;">修改</span>
                            </div>
                            <ul class="info_self">
                                <li class="common last">性别：</li>
                                <li class="intro">
                                    <span style="float:left;">简介：</span>
                                    <span style="float:left;width: 70%"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="follow" role="tabpanel" aria-labelledby="follow-tab">
                <p>关注</p>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    </body>

</html>