<!DOCTYPE html>

<head>
    <!--[if lt IE 9]>
    <script src="/templates/padraogoverno01/js/html5shiv.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?= base_url("public/dist/css/bootstrap_gov.min.css") ?>" type='text/css'/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/grocery_crud/themes/bootstrap/css/flexigrid.css") ?>">
    <link rel="stylesheet" href="<?= base_url("public/dist/css/template-verde.css") ?>" type='text/css'/>
    <link rel="stylesheet" href="https://portal.ifs.ifsuldeminas.edu.br/templates/padraogoverno01/css/icones-bmp-verde.css" type='text/css'/>
    <link rel="stylesheet" href="<?= base_url("public/dist/css/font-awesome.min.css") ?>" type='text/css'/>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" type='text/css'/>
    
    <!--[if lt IE 10]>
    <link rel="stylesheet" href="/templates/padraogoverno01/css/ie.css" />
    <![endif]-->
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="/templates/padraogoverno01/css/ie8.css" />
    <![endif]-->
    <!--[if lt IE 8]>
    <link rel="stylesheet" href="/templates/padraogoverno01/css/ie7.css" />
    <link rel="stylesheet" href="/font-awesome/css/font-awesome-ie7.min.css" />
    <![endif]-->    
    <base href="https://portal.ifs.ifsuldeminas.edu.br/" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Nutriif</title>
    <link href="/templates/padraogoverno01/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link href="https://portal.ifs.ifsuldeminas.edu.br/index.php/component/search/?Itemid=101&amp;format=opensearch" rel="search" title="Buscar IFSULDEMINAS - Campus Inconfidentes" type="application/opensearchdescription+xml" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/components/com_k2/css/k2.css?v=2.8.0" rel="stylesheet" type="text/css" />
    <link href="https://portal.ifs.ifsuldeminas.edu.br/templates/padraogoverno01/html/mod_banners/css/banner-rotativo-home.css" rel="stylesheet" type="text/css" />
    <script type="application/json" class="joomla-script-options new">{"csrf.token":"1d1559977d3bc819de0a9a56b07a26dc","system.paths":{"root":"","base":""}}</script>
    <script src="/media/jui/js/jquery.min.js?77f7d0b156fa3bb90e6529f9c17fe414" type="text/javascript"></script>
    <script src="/media/jui/js/jquery-noconflict.js?77f7d0b156fa3bb90e6529f9c17fe414" type="text/javascript"></script>
    <script src="/media/jui/js/jquery-migrate.min.js?77f7d0b156fa3bb90e6529f9c17fe414" type="text/javascript"></script>
    <script src="/media/k2/assets/js/k2.frontend.js?v=2.8.0&amp;sitepath=/" type="text/javascript"></script>
    <script src="/media/jui/js/bootstrap.min.js?77f7d0b156fa3bb90e6529f9c17fe414" type="text/javascript"></script>
    <script src="https://portal.ifs.ifsuldeminas.edu.br/templates/padraogoverno01/html/mod_banners/js/banner-rotativo-home.js" type="text/javascript"></script>
    
    <!-- Youtube Gallery Hot Video Switch -->
                <script type="text/javascript">
    //<![CDATA[
var YoutubeGalleryVideoSources1 = ["youtube"];
var YoutubeGalleryPlayer1 = new Array;
YoutubeGalleryPlayer1[0] = '<!-- youtube player --><div id="YoutubeGallerySecondaryContainer1">***code_begin***<div onclick="ygimagehot1=document.getElementById(*quote*ygvideoplayerhot1*quote*);ygimagehot1.style.display=*quote*block*quote*;this.style.display=*quote*none*quote*" style="position:relative;width:430px;height:245px;padding:0;"><img src="/****youtubegallery-video-customimage****" style="cursor:pointer;width:430px;height:245px;padding:0;" /><div style="position:absolute;width:100px;height:100px;left:165px;top:72px;"><img src="/components/com_youtubegallery/images/play.png" style="border:none!important;cursor:pointer;width:100px;height:100px;padding:0;" /></div></div><div id="ygvideoplayerhot1" style="display:none">***code_end***<iframe width="430" height="245" src="https://www.youtube.com/embed/****youtubegallery-video-id****?autoplay=0&amp;hl=en&amp;fs=1&amp;showinfo=1&amp;iv_load_policy=3&amp;rel=0&amp;loop=0&amp;border=1&amp;controls=1&amp;start=****youtubegallery-video-startsecond****&amp;end=****youtubegallery-video-endsecond****" frameborder="1" id="youtubegalleryplayerid_1" onLoad="YoutubeGalleryAutoResizePlayer1();" allowfullscreen></iframe>***code_begin***</div>***code_end***</div>';
for (var i = 0; i < YoutubeGalleryPlayer1.length; i++)
{
var player_code = YoutubeGalleryPlayer1[i];
player_code = player_code.replace(/\*quote\*/g, '\'');
YoutubeGalleryPlayer1[i] = player_code;
}

function YoutubeGalleryCleanCode1(playercode)
{
do{
var b = playercode.indexOf("***code_begin***");
var e = playercode.indexOf("***code_end***");
if (b != - 1 && e != - 1)
        playercode = playercode.substr(0, b) + playercode.substr(e + 14);
}while (b != - 1 && e != - 1)
        return playercode;
}

function YoutubeGalleryHotVideoSwitch1(videoid, videosource, id)
{
var i = YoutubeGalleryVideoSources1.indexOf(videosource);
if (i == - 1)
        playercode = "";
else
        playercode = YoutubeGalleryPlayer1[i];
playercode = playercode.replace("****youtubegallery-video-id****", videoid);
var title = document.getElementById("YoutubeGalleryThumbTitle1_" + id).innerHTML
        var description = document.getElementById("YoutubeGalleryThumbDescription1_" + id).innerHTML
        var link = document.getElementById("YoutubeGalleryThumbLink1_" + id).innerHTML
        var startsecond = document.getElementById("YoutubeGalleryThumbStartSecond1_" + id).innerHTML
        var endsecond = document.getElementById("YoutubeGalleryThumbEndSecond1_" + id).innerHTML
        var customimage_obj = document.getElementById("YoutubeGalleryThumbCustomImage1_" + id);
if (customimage_obj)
{
var customimage = customimage_obj.innerHTML;
var n = customimage.indexOf("_small");
if (n == - 1)
{
playercode = playercode.replace("****youtubegallery-video-customimage****", customimage);
for (i = 0; i < 2; i++)
{
playercode = playercode.replace("***code_begin***", "");
playercode = playercode.replace("***code_end***", "");
}
}
else
        playercode = YoutubeGalleryCleanCode1(playercode);
}
else
        playercode = YoutubeGalleryCleanCode1(playercode);
playercode = playercode.replace("****youtubegallery-video-link****", link);
playercode = playercode.replace("****youtubegallery-video-startsecond****", startsecond);
playercode = playercode.replace("****youtubegallery-video-endsecond****", endsecond);
playercode = playercode.replace("autoplay = 0","autoplay = 1");

        document.getElementById("YoutubeGallerySecondaryContainer1").innerHTML = playercode;
if (playercode.indexOf("<!--DYNAMIC PLAYER-->") != - 1)
        eval("youtubegallery_updateplayer_" + videosource + "_1(videoid,true)");
var tObj = document.getElementById("YoutubeGalleryVideoTitle1");                var dObj = document.getElementById("YoutubeGalleryVideoDescription1");
if (tObj)
{
tObj.innerHTML = title;
}
		
if(dObj)
{
dObj.innerHTML=description;
}
		
}
//]]>	
    </script>
    <style>
        .logo{
            width: 165px;
            margin-bottom: 25px;
        }
        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1.25rem;
        }
        .p-2 {
            padding: 0.5rem !important;
        }
        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }

        .table tbody + tbody {
            border-top: 2px solid #dee2e6;
        }

        .table-sm th,
        .table-sm td {
            padding: 0.3rem;
        }

        .table-bordered {
            border: 1px solid #dee2e6;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dee2e6;
        }

        .table-bordered thead th,
        .table-bordered thead td {
            border-bottom-width: 2px;
        }

        .table-borderless th,
        .table-borderless td,
        .table-borderless thead th,
        .table-borderless tbody + tbody {
            border: 0;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .table-hover tbody tr:hover {
            color: #212529;
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-primary,
        .table-primary > th,
        .table-primary > td {
            background-color: #b8daff;
        }

        .table-primary th,
        .table-primary td,
        .table-primary thead th,
        .table-primary tbody + tbody {
            border-color: #7abaff;
        }

        .table-hover .table-primary:hover {
            background-color: #9fcdff;
        }

        .table-hover .table-primary:hover > td,
        .table-hover .table-primary:hover > th {
            background-color: #9fcdff;
        }

        .table-secondary,
        .table-secondary > th,
        .table-secondary > td {
            background-color: #d6d8db;
        }

        .table-secondary th,
        .table-secondary td,
        .table-secondary thead th,
        .table-secondary tbody + tbody {
            border-color: #b3b7bb;
        }

        .table-hover .table-secondary:hover {
            background-color: #c8cbcf;
        }

        .table-hover .table-secondary:hover > td,
        .table-hover .table-secondary:hover > th {
            background-color: #c8cbcf;
        }

        .table-success,
        .table-success > th,
        .table-success > td {
            background-color: #c3e6cb;
        }

        .table-success th,
        .table-success td,
        .table-success thead th,
        .table-success tbody + tbody {
            border-color: #8fd19e;
        }

        .table-hover .table-success:hover {
            background-color: #b1dfbb;
        }

        .table-hover .table-success:hover > td,
        .table-hover .table-success:hover > th {
            background-color: #b1dfbb;
        }

        .table-info,
        .table-info > th,
        .table-info > td {
            background-color: #bee5eb;
        }

        .table-info th,
        .table-info td,
        .table-info thead th,
        .table-info tbody + tbody {
            border-color: #86cfda;
        }

        .table-hover .table-info:hover {
            background-color: #abdde5;
        }

        .table-hover .table-info:hover > td,
        .table-hover .table-info:hover > th {
            background-color: #abdde5;
        }

        .table-warning,
        .table-warning > th,
        .table-warning > td {
            background-color: #ffeeba;
        }

        .table-warning th,
        .table-warning td,
        .table-warning thead th,
        .table-warning tbody + tbody {
            border-color: #ffdf7e;
        }

        .table-hover .table-warning:hover {
            background-color: #ffe8a1;
        }

        .table-hover .table-warning:hover > td,
        .table-hover .table-warning:hover > th {
            background-color: #ffe8a1;
        }

        .table-danger,
        .table-danger > th,
        .table-danger > td {
            background-color: #f5c6cb;
        }

        .table-danger th,
        .table-danger td,
        .table-danger thead th,
        .table-danger tbody + tbody {
            border-color: #ed969e;
        }

        .table-hover .table-danger:hover {
            background-color: #f1b0b7;
        }

        .table-hover .table-danger:hover > td,
        .table-hover .table-danger:hover > th {
            background-color: #f1b0b7;
        }

        .table-light,
        .table-light > th,
        .table-light > td {
            background-color: #fdfdfe;
        }

        .table-light th,
        .table-light td,
        .table-light thead th,
        .table-light tbody + tbody {
            border-color: #fbfcfc;
        }

        .table-hover .table-light:hover {
            background-color: #ececf6;
        }

        .table-hover .table-light:hover > td,
        .table-hover .table-light:hover > th {
            background-color: #ececf6;
        }

        .table-dark,
        .table-dark > th,
        .table-dark > td {
            background-color: #c6c8ca;
        }

        .table-dark th,
        .table-dark td,
        .table-dark thead th,
        .table-dark tbody + tbody {
            border-color: #95999c;
        }

        .table-hover .table-dark:hover {
            background-color: #b9bbbe;
        }

        .table-hover .table-dark:hover > td,
        .table-hover .table-dark:hover > th {
            background-color: #b9bbbe;
        }

        .table-active,
        .table-active > th,
        .table-active > td {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-hover .table-active:hover {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-hover .table-active:hover > td,
        .table-hover .table-active:hover > th {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table .thead-dark th {
            color: #fff;
            background-color: #343a40;
            border-color: #454d55;
        }

        .table .thead-light th {
            color: #495057;
            background-color: #e9ecef;
            border-color: #dee2e6;
        }

        .table-dark {
            color: #fff;
            background-color: #343a40;
        }

        .table-dark th,
        .table-dark td,
        .table-dark thead th {
            border-color: #454d55;
        }

        .table-dark.table-bordered {
            border: 0;
        }

        .table-dark.table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(255, 255, 255, 0.05);
        }

        .table-dark.table-hover tbody tr:hover {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.075);
        }

        @media (max-width: 575.98px) {
            .table-responsive-sm {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
            .table-responsive-sm > .table-bordered {
                border: 0;
            }
        }

        @media (max-width: 767.98px) {
            .table-responsive-md {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
            .table-responsive-md > .table-bordered {
                border: 0;
            }
        }

        @media (max-width: 991.98px) {
            .table-responsive-lg {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
            .table-responsive-lg > .table-bordered {
                border: 0;
            }
        }

        @media (max-width: 1199.98px) {
            .table-responsive-xl {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
            .table-responsive-xl > .table-bordered {
                border: 0;
            }
        }

        .table-responsive {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .table-responsive > .table-bordered {
            border: 0;
        }
    </style>
    <link rel="image_src" href="https://img.youtube.com/vi/b2I51wKU7_U/0.jpg" />
    <link rel="image_src" href="https://img.youtube.com/vi/79V6zEEjn0U/0.jpg" />
    <link rel="image_src" href="https://img.youtube.com/vi/ehizUR45HBY/0.jpg" />

    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="<?= base_url("public/dist/css/fontes.css") ?>"  rel='stylesheet' type='text/css'>

</head>
<body class="responsivo-menor-979">

    <!-- Barra Brasil -->
    <div id="barra-brasil" style="background:#7F7F7F; height: 20px; padding:0 0 0 10px;display:block;"> 
        <div class="wrapper-barra-brasil">
        <ul id="menu-barra-temp" style="list-style:none;">
            <li style="display:inline; float:left;padding-right:10px; margin-right:10px; border-right:1px solid #EDEDED"><a href="http://brasil.gov.br" style="font-family:sans,sans-serif; text-decoration:none; color:white;">Portal do Governo Brasileiro</a></li> 
            <li><a style="font-family:sans,sans-serif; text-decoration:none; color:white;" href="http://epwg.governoeletronico.gov.br/barra/atualize.html">Atualize sua Barra de Governo</a></li>
        </ul>
        </div>
    </div>


    <a class="hide" id="topo" href="#accessibility">Ir direto para menu de acessibilidade.</a>
    <noscript>
    <div class="error minor-font">
        Seu navegador de internet está sem suporte à JavaScript. Por esse motivo algumas funcionalidades do site podem não estar acessíveis.
    </div>
    </noscript>
    <!--[if lt IE 7]><center><strong>Atenção, a versão de seu navegador não é compatível com este sítio. Atualize seu navegador.</strong></center><![endif]-->

    <div class="layout">
        <header>
            <div class="container">
                <div class="row-fluid accessibility-language-actions-container">
                    <div class="span6 accessibility-container">
                        <ul id="accessibility">
                            <li>
                                <a accesskey="1" href="<?= site_url("site/index") ?>/#content" id="link-conteudo">
                                    Ir para o conteúdo
                                    <span>1</span>
                                </a>
                            </li>
                            <li>
                                <a accesskey="2" href="<?= site_url("site/index") ?>/#navigation" id="link-navegacao">
                                    Ir para o menu
                                    <span>2</span>
                                </a>
                            </li>
                            <li>
                                <a accesskey="3" href="<?= site_url("site/index") ?>/#portal-searchbox" id="link-buscar">
                                    Ir para a busca
                                    <span>3</span>
                                </a>
                            </li>
                            <li>
                                <a accesskey="4" href="<?= site_url("site/index") ?>/#footer" id="link-rodape">
                                    Ir para o rodap&eacute;
                                    <span>4</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- fim div.span6 -->
                    <div class="span6 language-and-actions-container">
                        <h2 class="hide">Opções de acessibilidade</h2>

                        <ul class="pull-right" id="portal-siteactions">
                            <li class="item-140"><a href="/index.php/acessibilidade" accesskey="5" >Acessibilidade</a></li><li class="item-141 toggle-contraste"><a class="toggle-contraste" href="#"  accesskey="6" >Alto contraste</a></li><li class="item-142"><a href="/index.php/mapa-do-site" accesskey="7" >Mapa do site</a></li></ul>

                    </div>
                    <!-- fim div.span6 -->
                </div>
                <!-- fim .row-fluid -->
                <div class="row-fluid">
                    <div id="logo" class="span8 small">
                        <a href="https://portal.ifs.ifsuldeminas.edu.br/" title="Campus Inconfidentes">
                            <span class="portal-title-1"> INSTITUTO FEDERAL DO SUL DE MINAS GERAIS</span>
                            <h1 class="portal-title corto">Campus Inconfidentes</h1>
                            <span class="portal-description">Ministério da Educação</span>
                        </a>
                    </div>
                    <!-- fim .span8 -->
                    <div class="span4">
                        <div id="portal-searchbox" class="row">
                            <h2 class="hidden">Buscar no portal</h2>
                            <form action="/index.php" method="post" class="pull-right">
                                <fieldset>
                                    <legend class="hide">Busca</legend>
                                    <h2 class="hidden">Buscar no portal</h2>
                                    <div class="input-append">
                                        <label for="portal-searchbox-field" class="hide">Busca: </label>
                                        <input type="text" id="portal-searchbox-field" class="searchField" placeholder="Buscar no portal" title="Buscar no portal" name="searchword">       
                                        <button type="submit" class="btn searchButton"><span class="hide">Buscar</span><i class="icon-search"></i></button>
                                    </div>
                                    <input type="hidden" name="task" value="search" />
                                    <input type="hidden" name="option" value="com_search" />
                                    <!--<input type="hidden" name="Itemid" value="101" />-->
                                    <input type="hidden" name="Itemid" value="0" />
                                </fieldset>
                            </form>
                        </div>
                        <div id="social-icons" class="row">
                            <h2 class="hidden">Redes Sociais</h2>

                            <ul class="pull-right">
                                <li class="portalredes-item item-138"><a href="https://www.facebook.com/institutofederalcampusinconfidentes/" title="Facebook" target="_blank" rel="noopener noreferrer"><i class="icon-facebook-sign"><span>Facebook</span></i></a></li><li class="portalredes-item item-257"><a href="https://www.instagram.com/ifsuldeminasinconfidentes/" title="Instagram" target="_blank" rel="noopener noreferrer"><i class="icon-instagram"><span>Instagram</span></i></a></li><li class="portalredes-item item-136"><a href="https://twitter.com/IFInconfidentes" title="Twitter" target="_blank" rel="noopener noreferrer"><i class="icon-twitter-sign"><span>Twitter</span></i></a></li><li class="portalredes-item item-137"><a href="https://www.youtube.com/channel/UCpgeZdVGTOMm7NyV9MvFALw" target="_blank" rel="noopener noreferrer"><i class="icon-youtube"><span>YouTube</span></i></a></li></ul>
                        </div>

                    </div>
                    <!-- fim .span4 -->
                </div>
                <!-- fim .row-fluid -->
            </div>
            <!-- fim div.container -->
            <div class="sobre">
                <div class="container">
                    <nav class="menu-servicos pull-right">
                        <h2 class="hide">Menu de Serviços</h2>

                        <ul>
                            <li class="item-132"><a href="/index.php/contato" >Contato</a></li>
                            <li class="item-288"><a href="https://portal.ifs.ifsuldeminas.edu.br/index.php/nti/sistemas-solucoes" >Acesso a Sistemas</a></li>
                            <li class="item-341"><a href="https://portal.ifsuldeminas.edu.br/index.php/ouvidoria" target="_blank" rel="noopener noreferrer">Ouvidoria</a></li>
                            <li class="item-132"><a href="<?= site_url("relatorio/graficos") ?>" >Relatório do Desperdício</a></li>
                            <li class="item-132"><a href="<?= site_url("login/index") ?>" >Acesso Restrito Nutriif</a></li>
                        </ul>
                        <span class="hide">Fim do menu de serviços</span>
                    </nav>

                </div>
                <!-- .container -->
            </div>
            <!-- fim .sobre -->

            <style type="text/css">
                #footer-brasil {
                    background: #002907;
                    padding: 1em 0px;
                    max-width: 100%;
                }
            </style>

        </header>
        <main>
            <div class="container">

                <div class="row-fluid">
                    <div id="navigation" class="span3">
                        <a href="#" class="visible-phone visible-tablet mainmenu-toggle btn"><i class="icon-list"></i>&nbsp;Menu</a>
                        <section id="navigation-section">
                            <span class="hide">Início do menu principal</span>
                            <h2 class="hide">Logo IFSULDEMINAS - Campus Inconfidentes</h2>
                            <div class="bannergroupspan9 logo_menu_principal">

                                <div class="banneritem">
                                    <img class="logo"
                                         src="<?= base_url("bootstrap/img/logo.jpg") ?>"
                                         alt="Logo IFSULDEMINAS - Campus Inconfidentes"
                                         />
                                    <div class="clr"></div>
                                </div>

                            </div>
                            <nav class="span9 ">
                                <h2 >Destaques <i class="icon-chevron-down visible-phone visible-tablet pull-right"></i></h2><!-- visible-phone visible-tablet -->

                                <ul>
                                    <li class="item-101 current active"><a href="/index.php" ><img src="/arquivos/banners/banner_menu/acesso_rapido/botao_pagina_inicial.png" alt="Página inicial" /></a></li><li class="item-121"><a href="/index.php/noticias" ><img src="/arquivos/banners/banner_menu/acesso_rapido/botao_noticias.png" alt="Notícias" /></a></li><li class="item-295"><a href="/index.php/portal-do-aluno" ><img src="/arquivos/banners/banner_menu/acesso_rapido/botao_portal_aluno.png" alt="Portal do Aluno" /></a></li><li class="item-317"><a href="/index.php/portal-do-servidor" ><img src="/arquivos/banners/banner_menu/acesso_rapido/botao_portal_servidor.png" alt="Portal do Servidor" /></a></li><li class="item-336"><a href="https://portal.ifsuldeminas.edu.br/vestibular-proen" target="_blank" ><img src="/arquivos/banners/banner_menu/acesso_rapido/botao_vestibular.png" alt="Vestibular" /></a></li><li class="item-337"><a href="https://concurso.ifsuldeminas.edu.br/" target="_blank" ><img src="/arquivos/banners/banner_menu/acesso_rapido/botao_concurso.png" alt="Concurso" /></a></li><li class="item-358"><a href="/index.php/eventos" ><img src="/arquivos/banners/banner_menu/acesso_rapido/botao_eventos.png" alt="Eventos" /></a></li><li class="item-338 parent"><a href="/index.php/editais" ><img src="/arquivos/banners/banner_menu/acesso_rapido/botao_editais.png" alt="Editais" /></a></li></ul>
                            </nav>
                            <nav class=" span9">
                                <h2 >Institucional <i class="icon-chevron-up visible-phone visible-tablet pull-right"></i></h2><!-- visible-phone visible-tablet -->

                                <ul>
                                    <li class="item-276"><a href="https://portal.ifsuldeminas.edu.br/index.php/o-instituto" target="_blank" >O IFSULDEMINAS</a></li><li class="item-334"><a href="https://portal.ifsuldeminas.edu.br/index.php/os-campi" target="_blank" >Os Campi</a></li><li class="item-277"><a href="/index.php/sobre-o-campus" >Sobre o Campus</a></li><li class="item-342"><a href="/index.php/direcao-geral" >Direção Geral</a></li><li class="item-280"><a href="/index.php/departamentos" >Departamentos</a></li><li class="item-333"><a href="/index.php/orgaos-colegiados-02" >Órgãos Colegiados</a></li></ul>
                            </nav>
                            <nav class=" span9">
                                <h2 >Cursos <i class="icon-chevron-up visible-phone visible-tablet pull-right"></i></h2><!-- visible-phone visible-tablet -->

                                <ul>
                                    <li class="item-335"><a href="https://portal.ifsuldeminas.edu.br/index.php/como-ingressar" target="_blank" >Como Ingressar</a></li><li class="item-282"><a href="/index.php/tecnico-integrado-ao-ensino-medio" >Técnico Integrado ao Ensino Médio</a></li><li class="item-283"><a href="/index.php/graduacao" >Graduação</a></li><li class="item-323"><a href="/index.php/pos-graduacao" >Pós-Graduação</a></li></ul>
                            </nav>
                            <nav class=" span9">
                                <h2 >Calendários e Horários <i class="icon-chevron-up visible-phone visible-tablet pull-right"></i></h2><!-- visible-phone visible-tablet -->

                                <ul>
                                    <li class="item-331"><a href="/index.php/calendario-academico-02" >Calendário Acadêmico</a></li><li class="item-332"><a href="/index.php/horarios-de-aulas-02" >Horário de Aulas</a></li><li class="item-391"><a href="https://portal.ifs.ifsuldeminas.edu.br/index.php/component/content/article/67-institucional/sobre-o-campus/115-horario-dos-setores" >Horário Setores</a></li></ul>
                            </nav>
                            <nav class=" span9">
                                <h2 >IFSULDEMINAS <i class="icon-chevron-up visible-phone visible-tablet pull-right"></i></h2><!-- visible-phone visible-tablet -->

                                <ul>
                                    <li class="item-287"><a href="https://portal.ifsuldeminas.edu.br/" target="_blank" >Reitoria</a></li><li class="item-324"><a href="http://www.mch.ifsuldeminas.edu.br/" target="_blank" >Machado</a></li><li class="item-325"><a href="http://www.muz.ifsuldeminas.edu.br/" target="_blank" >Muzambinho</a></li><li class="item-326"><a href="http://www.portal.pas.ifsuldeminas.edu.br/" target="_blank" >Passos</a></li><li class="item-327"><a href="http://www.pcs.ifsuldeminas.edu.br/" target="_blank" >Poços de Caldas</a></li><li class="item-328"><a href="http://www.poa.ifsuldeminas.edu.br/" target="_blank" >Pouso Alegre</a></li><li class="item-329"><a href="http://www.cdm.ifsuldeminas.edu.br/" target="_blank" >Carmo de Minas</a></li><li class="item-291"><a href="https://portal.tco.ifsuldeminas.edu.br/" target="_blank" >Três Corações</a></li></ul>
                            </nav>
                            <nav class=" span9">
                                <h2 >SITES <i class="icon-chevron-up visible-phone visible-tablet pull-right"></i></h2><!-- visible-phone visible-tablet -->

                                <ul>
                                    <li class="item-354"><a href="https://100anos.ifs.ifsuldeminas.edu.br/portal/#barra" target="_blank" >Centenário</a></li><li class="item-356"><a href="https://nipe.ifs.ifsuldeminas.edu.br/index.php" target="_blank" >NIPE</a></li><li class="item-357"><a href="https://incetec.ifs.ifsuldeminas.edu.br/" target="_blank" >Incetec</a></li><li class="item-355"><a href="https://vespas.ifs.ifsuldeminas.edu.br/" target="_blank" >Vespas Sociais</a></li></ul>
                            </nav>
                            <nav class=" span9">
                                <h2 >Redes Sociais <i class="icon-chevron-up visible-phone visible-tablet pull-right"></i></h2><!-- visible-phone visible-tablet -->

                                <ul>
                                    <li class="item-360"><a href="https://www.facebook.com/FanfarraGabrielVilasBoas/" target="_blank" >Fanfarra</a></li><li class="item-361"><a href="https://www.facebook.com/bibliotecaifsuldeminasinconfidentes/" target="_blank" >Biblioteca Afonso Arinos</a></li><li class="item-362"><a href="https://www.facebook.com/ifsuldeminascasadasartes/?ref=br_rs" target="_blank" >Casa das Artes</a></li></ul>
                            </nav>
                            <nav class=" span9">
                                <h2 >ACESSO À INFORMAÇÃO <i class="icon-chevron-up visible-phone visible-tablet pull-right"></i></h2><!-- visible-phone visible-tablet -->

                                <ul>
                                    <li class="item-343"><a href="https://portal.ifsuldeminas.edu.br/institucional" target="_blank" >Institucional</a></li><li class="item-344"><a href="https://portal.ifsuldeminas.edu.br/index.php/acoeseprogramas2" target="_blank" >Ações e Programas</a></li><li class="item-404"><a href="https://portal.ifsuldeminas.edu.br/index.php/participacao-social" >Participação Social</a></li><li class="item-345"><a href="https://portal.ifsuldeminas.edu.br/index.php/acoes-e-programas" target="_blank" >Auditorias</a></li><li class="item-405"><a href="https://portal.ifsuldeminas.edu.br/index.php/convenios" >Convênios e Transferências</a></li><li class="item-406"><a href="https://portal.ifsuldeminas.edu.br/index.php/despesas" >Receitas e Despesas</a></li><li class="item-348"><a href="https://portal.ifsuldeminas.edu.br/index.php/licitacoes-e-contratos" target="_blank" >Licitações e Contratos</a></li><li class="item-349"><a href="/index.php/servidores" >Servidores</a></li><li class="item-350"><a href="https://portal.ifsuldeminas.edu.br/index.php/informacoes-classificadas" target="_blank" >Informações Classificadas</a></li><li class="item-351"><a href="https://portal.ifsuldeminas.edu.br/index.php/servico-de-informacao-ao-cidadao-sic" target="_blank" >Serviço de Informação ao Cidadão (SIC)</a></li><li class="item-407"><a href="https://portal.ifsuldeminas.edu.br/index.php/perguntas-frequentes" >Perguntas frequentes</a></li><li class="item-408"><a href="https://portal.ifsuldeminas.edu.br/index.php/dados-abertos" >Dados abertos</a></li><li class="item-353"><a href="https://portal.ifsuldeminas.edu.br/index.php/carta-de-servico-ao-cidadao" target="_blank" >Carta de Serviço ao Cidadão</a></li><li class="item-352"><a href="https://portal.ifsuldeminas.edu.br/index.php/gestao-de-imoveis" target="_blank" >Cartão de Imóveis</a></li><li class="item-395"><a href="/index.php/portarias" >Portarias</a></li><li class="item-437"><a href="/index.php/atos-normativos" >Atos Normativos</a></li></ul>
                            </nav>
                            <nav class="span9 ">
                                <h2 >Portal Antigo  <i class="icon-chevron-up visible-phone visible-tablet pull-right"></i></h2><!-- visible-phone visible-tablet -->

                                <ul>
                                    <li class="item-304"><a href="https://memoria.ifs.ifsuldeminas.edu.br/" target="_blank" >Acesse</a></li></ul>
                            </nav>

                            <span class="hide">Fim do menu principal</span>
                        </section>
                    </div>
                    <!-- fim #navigation.span3 -->
                    <div id="content" class="span9">
                        <section id="content-section">
                            <span class="hide">Início do conteúdo da página</span>



                            <div class="row-fluid module cabecalho_banner_rotativo">
                                <div class="carousel banner-carousel slide bannergroup cabecalho_banner_rotativo" id="banner-carousel-202">
                                    <div class="carousel-inner">
                                        <div class="banneritem item active">
                                            <a
                                                href="/index.php/component/banners/click/24"
                                                title="Temos um dos restaurantes estudantis mais bem estruturados do Brasil e nunca nos faltou alimento. Por isso, não desperdice">
                                                <img src="<?= base_url("bootstrap/img/slide3.jpg") ?>"
                                                     alt="Temos um dos restaurantes estudantis mais bem estruturados do Brasil e nunca nos faltou alimento. Por isso, não desperdice"
                                                     />
                                            </a>
                                            <div class="faixa"></div>
                                            <h1>
                                                <a href="/index.php/component/banners/click/24">
                                                   Temos um dos restaurantes estudantis mais bem estruturados do Brasil e nunca nos faltou alimento. Por isso, não desperdice !
                                                </a>
                                            </h1>
                                            <div class="clr"></div>
                                        </div>
                                        <div class="banneritem item ">
                                            <a href="/index.php/component/banners/click/51"
                                               title="No refeitório trabalham profissionais muito bem capacitados, que nos proporcionam alimentos da melhor qualidade. A receita para isso é muito amor e dedicação para com a saúde alimentar dos que frequentam o restaurante estudantil.">
                                                <img src="<?= base_url("bootstrap/img/rest.jpg") ?>"
                                                     alt="No refeitório trabalham profissionais muito bem capacitados, que nos proporcionam alimentos da melhor qualidade"
                                                     />
                                            </a>
                                            <div class="faixa"></div>
                                            <h1>
                                                <a href="/index.php/component/banners/click/51">
                                                    No refeitório trabalham profissionais muito bem capacitados, que nos proporcionam alimentos da melhor qualidade</a>
                                            </h1>
                                            <div class="clr"></div>
                                        </div>
                                        <div class="banneritem item ">
                                            <a
                                                href="/index.php/component/banners/click/53"
                                                title="Receita Federal faz nova doação de bebida para produção de álcool em gel">
                                                <img
                                                    src="https://portal.ifs.ifsuldeminas.edu.br/arquivos/banners/banner_rotativo/2020/Doação_álcool_2.jpg"
                                                    alt="Receita Federal faz nova doação de bebida para produção de álcool em gel"
                                                    />
                                            </a>
                                            <div class="faixa"></div>
                                            <h1>
                                                <a href="/index.php/component/banners/click/53">
                                                    Receita Federal faz nova doação de bebida para produção de álcool em gel </a>
                                            </h1>
                                            <div class="clr"></div>
                                        </div>

                                    </div>
                                    <ol class="carousel-indicators carousel-indicators-custom">
                                        <li data-slide-to="0" data-target="#banner-carousel-202" class="active"><a href="#" title="Bem-vindo ao NUTRIIF">0</a></li>
                                        <li data-slide-to="1" data-target="#banner-carousel-202" class=""><a href="#" title="No refeitório trabalham profissionais muito bem capacitados, que nos proporcionam alimentos da melhor qualidade">1</a></li>
                                        <li data-slide-to="2" data-target="#banner-carousel-202" class="last"><a href="#" title="Receita Federal faz nova doação de bebida para produção de álcool em gel">2</a></li>
                                    </ol>
                                </div>

                            </div>
                            <div class="row-fluid module variacao-module-04 noticias-pagina-inicial">
                                <div class="outstanding-header">	
                                    <h2 class="outstanding-title"><span>Relatório do desperdício alimentar no Campus Inconfidentes</span></h2>
                                </div>	
                                <div class="chamadas-secundarias">

                                    
                                        
                                    <div class="card-body p-2" >                                     
                                        <div class="flexigrid">
                                            <table class="table table-bordered " id="relatorio">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th><div class="text-center">Dia</div></th>
                                                        <th><div class="text-center">Refeição</div></th>
                                                        <th><div class="text-center">Cardápio</div></th>
                                                        <th><div class="text-center">Pessoas</div></th>
                                                        <th><div class="text-center">Desperdício</div></th>
                                                        <th><div class="text-center">Observação</div></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($dados as $d) : ?>
                                                        <tr>
                                                            <?php $data = explode("-", $d->dia);
                                                            $data = "$data[2]/$data[1]/$data[0]"; ?>
                                                            <td width="1%"><?= $data ?></td>
                                                            <td width="9%"><div class="text-center"><?= $d->tipo ?></div></td>
                                                            <td width="15%"><?= $d->nome ?></td>
                                                            <td width="11%"><div class="text-center"><?= $d->quantidade_pessoas ?></div></td>
                                                            <td width="1%"><div class="text-center"><?= $d->peso ?></div></td>
                                                            <td width="18%"><?= $d->observacao ?></td>
                                                        </tr>
<?php endforeach; ?>
                                                </tbody>
                                            </table>  
                                        </div>                              
                                    </div>

                                       
                                  
                                </div>	
                            </div>

                            <div class="row-fluid variacao-module-04">

                                <div class="variacao-module-04 noticias-acontece-no-campus module span6 variacao-module-00">
                                    <div class="outstanding-header">				
                                        <h2 class="outstanding-title">Gasto médio com a comida desperdiçada</h2>

                                    </div>

                                    <canvas id="barra" style="display: block; width: 213px; height: 120px;" width="173" height="126" class="chartjs-render-monitor"></canvas>
                                    <div class="outstanding-footer">
                                        <a href="https://portal.ifs.ifsuldeminas.edu.br/index.php/component/content/category/82-acontece-no-campus" class="outstanding-link">
                                            
                                        </a>	
                                    </div>




                                </div>
                                <div class="module span6">
                                    <div class="outstanding-header">				
                                        <h2 class="outstanding-title">Porcentagem de desperdício por dia</h2>
                                    </div>

                                <canvas id="pizza" style="display: block; width: 213px; height: 120px;" width="173" height="126" class="chartjs-render-monitor"></canvas>

                                    


                                    <div class="outstanding-footer">

                                    </div>


                                </div>

                            </div>
                            <div class="row-fluid variacao-module-04">

                                <div class="module span12">
                                    <div class="outstanding-header">				
                                        <h2 class="outstanding-title">Desperdício alimentar por peso em quilos</h2>

                                    </div>


                                    <!-- Começo Gráfico do peso -->
                                    

                                    <canvas id="linha" style="display: block; width: 213px; height: 120px;" width="173" height="76" class="chartjs-render-monitor"></canvas>

                                    <!-- Final do gráfico do peso -->
                                    <script language="JavaScript">
                                        //<![CDATA[
                                        window.onresize = function() { YoutubeGalleryAutoResizePlayer1(); }
                                        //]]>
                                    </script>


                                    <div class="outstanding-footer">
                                        <a href="https://www.youtube.com/channel/UCpgeZdVGTOMm7NyV9MvFALw" class="outstanding-link"><span class="text">Acesse o nosso canal</span>
                                            <span class="icon-box">                                          
                                                <i class="icon-angle-right icon-light"><span class="hide">&nbsp;</span></i>
                                            </span>
                                        </a>

                                    </div>


                                </div>

                            </div>



                            <span class="hide">Fim do conteúdo da página</span>
                        </section>
                    </div>
                    <!-- fim #content.span9 -->
                </div>
                <!-- fim .row-fluid -->
            </div>
            <!-- fim .container -->
        </main>
        <footer>
            <div class="footer-atalhos">
                <div class="container">
                    <div class="pull-right voltar-ao-topo"><a href="<?= site_url("site/index/") ?>#portal-siteactions"><i class="icon-chevron-up"></i>Voltar para o topo</a></div>
                </div>
            </div>
            <div class="container container-menus">
                <div id="footer" class="row footer-menus">
                    <span class="hide">Início da navegação de rodapé</span>

                    <div class="span3">		
                        <nav class="row servicos nav">

                            <h2>Serviços</h2>

                            <ul>
                                <li class="item-132"><a href="/index.php/contato" >Contato</a></li><li class="item-288"><a href="https://portal.ifs.ifsuldeminas.edu.br/index.php/nti/sistemas-solucoes" >Acesso a Sistemas</a></li><li class="item-341"><a href="https://portal.ifsuldeminas.edu.br/index.php/ouvidoria" target="_blank" rel="noopener noreferrer">Ouvidoria</a></li></ul>
                        </nav>					
                    </div>


                    <div class="span3">		
                        <nav class="row institucional nav">

                            <h2>Institucional</h2>

                            <ul>
                                <li class="item-276"><a href="https://portal.ifsuldeminas.edu.br/index.php/o-instituto" target="_blank" rel="noopener noreferrer">O IFSULDEMINAS</a></li><li class="item-334"><a href="https://portal.ifsuldeminas.edu.br/index.php/os-campi" target="_blank" rel="noopener noreferrer">Os Campi</a></li><li class="item-277"><a href="/index.php/sobre-o-campus" >Sobre o Campus</a></li><li class="item-342"><a href="/index.php/direcao-geral" >Direção Geral</a></li><li class="item-280"><a href="/index.php/departamentos" >Departamentos</a></li><li class="item-333"><a href="/index.php/orgaos-colegiados-02" >Órgãos Colegiados</a></li></ul>
                        </nav>					
                    </div>


                    <div class="span3">		
                        <nav class="row cursos nav">

                            <h2>Cursos</h2>

                            <ul>
                                <li class="item-335"><a href="https://portal.ifsuldeminas.edu.br/index.php/como-ingressar" target="_blank" rel="noopener noreferrer">Como Ingressar</a></li><li class="item-282"><a href="/index.php/tecnico-integrado-ao-ensino-medio" >Técnico Integrado ao Ensino Médio</a></li><li class="item-283"><a href="/index.php/graduacao" >Graduação</a></li><li class="item-323"><a href="/index.php/pos-graduacao" >Pós-Graduação</a></li></ul>
                        </nav>					
                    </div>


                    <div class="span3">		
                        <nav class="row a-rede nav">

                            <h2>A Rede</h2>

                            <ul>
                                <li class="item-287"><a href="https://portal.ifsuldeminas.edu.br/" target="_blank" rel="noopener noreferrer">Reitoria</a></li><li class="item-324"><a href="http://www.mch.ifsuldeminas.edu.br/" target="_blank" rel="noopener noreferrer">Machado</a></li><li class="item-325"><a href="http://www.muz.ifsuldeminas.edu.br/" target="_blank" rel="noopener noreferrer">Muzambinho</a></li><li class="item-326"><a href="http://www.portal.pas.ifsuldeminas.edu.br/" target="_blank" rel="noopener noreferrer">Passos</a></li><li class="item-327"><a href="http://www.pcs.ifsuldeminas.edu.br/" target="_blank" rel="noopener noreferrer">Poços de Caldas</a></li><li class="item-328"><a href="http://www.poa.ifsuldeminas.edu.br/" target="_blank" rel="noopener noreferrer">Pouso Alegre</a></li><li class="item-329"><a href="http://www.cdm.ifsuldeminas.edu.br/" target="_blank" rel="noopener noreferrer">Carmo de Minas</a></li><li class="item-291"><a href="https://portal.tco.ifsuldeminas.edu.br/" target="_blank" rel="noopener noreferrer">Três Corações</a></li></ul>
                        </nav>					
                    </div>


                    <span class="hide">Fim da navegação de rodapé</span>
                </div>
                <!-- fim .row -->
            </div>
            <!-- fim .container -->

            <!--rodape do governo-->
            <div id="footer-brasil"></div>  

            <div class="footer-ferramenta">
                <div class="container">
                    <center>
                        <p><a href="http://portal.ifs.ifsuldeminas.edu.br">IFSULDEMINAS - Campus Inconfidentes</a> </p>
                        <p> Praça Tiradentes, 416 - Centro - Inconfidentes - MG - CEP 37576-000 - Fone: (35) 3464-1200 </p>
                        <p> © 2020. Todos os direitos reservados</p>
                        <p> Desenvolvido com o CMS de c&oacute;digo aberto <a href="http://www.joomla.org">Joomla</a> </p>
                        <p><a href="https://portal.ifs.ifsuldeminas.edu.br/index.php/component/users/?view=login">Login</a
                    </center>	
                </div>
            </div>

            <div class="footer-atalhos visible-phone">
                <div class="container">
                    <span class="hide">Fim do conteúdo da página</span>
                    <div class="pull-right voltar-ao-topo"><a href="<?= site_url("site/index/") ?>"><i class="icon-chevron-up"></i>&nbsp;Voltar para o topo</a></div>
                </div>
            </div>
        </footer>
    </div>
    <!-- fim div#wrapper -->
    <!-- scripts principais do template -->
    <script src="<?= base_url("public/dist/js/bootstrap.min_governo.js") ?>"></script><noscript>&nbsp;<!-- item para fins de acessibilidade --></noscript>
    <script src="<?= base_url("public/dist/js/jquery.cookie.js") ?>"></script><noscript>&nbsp;<!-- item para fins de acessibilidade --></noscript>
    <script src="<?= base_url("public/dist/js/template.js") ?>"></script><noscript>&nbsp;<!-- item para fins de acessibilidade --></noscript>
    <!-- debug -->

    <script defer="defer" src="//barra.brasil.gov.br/barra.js" type="text/javascript"></script>
    <script src="<?= base_url("bootstrap/js/Chart.min.js") ?>"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
                                            $(document).ready(function () {
                                            $('#relatorio').DataTable();
                                            });</script>
    <script src="<?= base_url("public/dist/js/config_graph_bar.js") ?>"> </script>
    
    <script>
        var labels_grafico1 = <?= $labels_bar1 ?>;
        var dados_grafico1 = <?= $data_bar1 ?>;
        var labels_grafico2 = <?= $labels_bar2 ?>;
        var dados_grafico2 = <?= $data_bar2 ?>;
        var barra = gerar_grafico_barra_vertical("barra", labels_grafico2, dados_grafico2, "Desperdicio em reais ");
        var pizza = gerar_grafico_barra_horizontal("pizza", labels_grafico1, dados_grafico1, "Porcentagem de desperdício ");
        var linha = gerar_grafico_linha("linha", labels_grafico1, dados_grafico1);
    </script>
</body>
</html>
