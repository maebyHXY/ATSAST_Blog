<?php if(!class_exists("View", false)) exit("no direct access allowed");?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
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
            ul {
                width: 100%;
                padding: 0;
                margin: 0;
                list-style: none;
            }
            ul li i {
                font-size: 13px;
                width: 15px;
                margin-right: 15px;
            }
            ul li:hover i {
                color: #21CCFC;
            }
            ul,li,ol,dl.dt,dd{
                list-style: none;
            }
            #all::-webkit-scrollbar { width: 0 !important }
            #blog-nav{
                margin:0 auto;
                background-color:rgba(251, 114, 153, 0.9);
            }
            #main-card{
                height:45rem;
                margin-top:30px;
            }
            #cutdown{
                display: -webkit-box; 
                -webkit-line-clamp: 8; 
                -webkit-box-orient: vertical; 
                overflow: hidden;
                white-space: pre-line;
            }
            #all{
                height:45rem;
                -webkit-overflow-scrolling:auto;
                overflow-y:auto;
                white-space: nowrap;
            }
            #text-show{
                width:95%;
                margin-left:20px;
                margin-top:16px;
            }
            .container-f{
                width: 100%;
                margin-right: auto;
                margin-left: auto;
            }
            .container-f .card{
                box-shadow: -1px 4px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
            }
            .container{
                width: 1200px;
                margin: 0 auto;
                height: 90%;
                margin-top: 30px;
            }
            .container .left_box{
                width: 160px;
                position: relative;
                float:left;
                box-shadow: -1px 4px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
            }
            .container .left_box .aside{
                background: #fff;
                border-bottom: 1px solid #e9eaeb;
                height: 64px;
                width: 100%;
                line-height: 65px;
                box-sizing: border-box;
                margin-bottom: 1px;
            }
            .container .left_box input[type='radio'] {
                display: none;
            }
            .container .left_box .aside input[type='radio']:checked ~ .content {
                max-height: 300px;
                opacity: 1;
                overflow-y: auto;
                -webkit-overflow-scrolling:auto;
                white-space: nowrap;
                background: #fff;
                border-bottom: 1px solid #e9eaeb;
                box-shadow: -1px 4px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
                width: 160px;
                line-height: 65px;
                box-sizing: border-box;
                padding-left: 20px;
                margin-bottom: 1px;
            }
            .container .left_box .aside label {
                position: relative;
                cursor: pointer;
                -webkit-transition: background 0.3s ease-in-out;
                -moz-transition: background 0.3s ease-in-out;
                -ms-transition: background 0.3s ease-in-out;
                transition: background 0.3s ease-in-out;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                -o-user-select: none;
                user-select: none;
            }
            .container .left_box .aside .font{
                font-size: 20px;
                padding-left: 20px;
                color: rgba(0,0,0,.87);
            }
            .container .left_box .aside .content {
                max-height: 0;
                -webkit-transition: all 0.4s;
                -moz-transition: all 0.4s;
                -ms-transition: all 0.4s;
                transition: all 0.4s;
                opacity: 0;
                position: relative;
                overflow-y: hidden;
            }
            *, *:before, *:after {
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            }
        </style>
    </head>
    <body>
        <div class="container-f">
            <div class="card" id="blog-nav">
                    <a class="navbar-brand" href="http://<?php echo htmlspecialchars($MAIN_PAGE, ENT_QUOTES, "UTF-8"); ?>" style="margin-left:110px;margin-top:4px;margin-bottom: 4px;font-size: 40px;color:#fff;">ATSAST BLOG</a>
            </div>
            <div class="container">
                <div class="left_box">
                    <div class="aside">
                        <input type="radio" name="accordion-1" id="author" />
                        <label for="author"><span class="font">Rp12138<!----></span></label>
                        <div class="content">
                            <ul>
                                <li><img src="/src/image/science.jpg" width="120px" height="180px"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="aside">
                        
                    </div>
                    
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    </body>
</html>