<!DOCTYPE html>

<head>
    <!--[if lt IE 9]>
    <script src="/templates/padraogoverno01/js/html5shiv.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?= base_url("public/dist/css/bootstrap_gov.min.css") ?>" type='text/css'/>
    <link rel="stylesheet" href="<?= base_url("public/dist/css/template-verde.css") ?>" type='text/css'/>
    <link rel="stylesheet" href="<?= base_url("public/dist/css/icones-bmp-verde.css") ?>" type='text/css'/>
    <link rel="stylesheet" href="<?= base_url("public/dist/css/font-awesome.min.css") ?>" type='text/css'/>
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
        YoutubeGalleryPlayer1[0] =   '<!-- youtube player --><div id="YoutubeGallerySecondaryContainer1">***code_begin***<div onclick="ygimagehot1=document.getElementById(*quote*ygvideoplayerhot1*quote*);ygimagehot1.style.display=*quote*block*quote*;this.style.display=*quote*none*quote*" style="position:relative;width:430px;height:245px;padding:0;"><img src="/****youtubegallery-video-customimage****" style="cursor:pointer;width:430px;height:245px;padding:0;" /><div style="position:absolute;width:100px;height:100px;left:165px;top:72px;"><img src="/components/com_youtubegallery/images/play.png" style="border:none!important;cursor:pointer;width:100px;height:100px;padding:0;" /></div></div><div id="ygvideoplayerhot1" style="display:none">***code_end***<iframe width="430" height="245" src="https://www.youtube.com/embed/****youtubegallery-video-id****?autoplay=0&amp;hl=en&amp;fs=1&amp;showinfo=1&amp;iv_load_policy=3&amp;rel=0&amp;loop=0&amp;border=1&amp;controls=1&amp;start=****youtubegallery-video-startsecond****&amp;end=****youtubegallery-video-endsecond****" frameborder="1" id="youtubegalleryplayerid_1" onLoad="YoutubeGalleryAutoResizePlayer1();" allowfullscreen></iframe>***code_begin***</div>***code_end***</div>';
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
            playercode = playercode.replace("autoplay=0","autoplay = 1");

                    document.getElementById("YoutubeGallerySecondaryContainer1").innerHTML = playercode;
            if (playercode.indexOf("<!--DYNAMIC PLAYER-->") != - 1)
                    eval("youtubegallery_updateplayer_" + videosource + "_1(videoid,true)");
            var tObj = document.getElementById("YoutubeGalleryVideoTitle1");
            var dObj = document.getElementById("YoutubeGalleryVideoDescription1");
		
                    if(tObj)
                    {
                            tObj.innerHTML=title;
                    }
		
                    if(dObj)
                    {
                            dObj.innerHTML=description;
                    }
		
            }
    //]]>	
    </script>
    <link rel="image_src" href="https://img.youtube.com/vi/b2I51wKU7_U/0.jpg" />
    <link rel="image_src" href="https://img.youtube.com/vi/79V6zEEjn0U/0.jpg" />
    <link rel="image_src" href="https://img.youtube.com/vi/ehizUR45HBY/0.jpg" />

    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href='<?= base_url("public/dist/css/fontes.css") ?>'  rel='stylesheet' type='text/css'>

</head>
<body >

    <!-- Barra Brasil -->
    <div id="barra-brasil" style="background:#7F7F7F; height: 20px; padding:0 0 0 10px;display:block;"> 
        <ul id="menu-barra-temp" style="list-style:none;">
            <li style="display:inline; float:left;padding-right:10px; margin-right:10px; border-right:1px solid #EDEDED"><a href="http://brasil.gov.br" style="font-family:sans,sans-serif; text-decoration:none; color:white;">Portal do Governo Brasileiro</a></li> 
            <li><a style="font-family:sans,sans-serif; text-decoration:none; color:white;" href="http://epwg.governoeletronico.gov.br/barra/atualize.html">Atualize sua Barra de Governo</a></li>
        </ul>
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
                                <a accesskey="2" href="#navigation" id="link-navegacao">
                                    Ir para o menu
                                    <span>2</span>
                                </a>
                            </li>
                            <li>
                                <a accesskey="3" href="#portal-searchbox" id="link-buscar">
                                    Ir para a busca
                                    <span>3</span>
                                </a>
                            </li>
                            <li>
                                <a accesskey="4" href="#footer" id="link-rodape">
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
                                    <img
                                        src="https://portal.ifs.ifsuldeminas.edu.br/arquivos/banners/banner_menu/logo/logo.png"
                                        alt="Logo IFSULDEMINAS - Campus Inconfidentes"
                                        />
                                    <div class="clr"></div>
                                </div>

                            </div>
                            <nav class="span9 ">
                                <h2 >Destaques <i class="icon-chevron-up visible-phone visible-tablet pull-right"></i></h2><!-- visible-phone visible-tablet -->

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
                                                title="Bem-vindo ao Campus Inconfidentes">
                                                <img
                                                    src="https://portal.ifs.ifsuldeminas.edu.br/arquivos/banners/banner_rotativo/frente_if_site.jpg"
                                                    alt="Bem-vindo ao Campus Inconfidentes"
                                                    />
                                            </a>
                                            <div class="faixa"></div>
                                            <h1>
                                                <a href="/index.php/component/banners/click/24">
                                                    Bem-vindo ao Campus Inconfidentes				</a>
                                            </h1>
                                            <div class="clr"></div>
                                        </div>
                                        <div class="banneritem item ">
                                            <a href="/index.php/component/banners/click/51"
                                                title="Direção Geral completa 2 anos de trabalhos. Relatório de gestão é divulgado">
                                                <img
                                                    src="https://portal.ifs.ifsuldeminas.edu.br/arquivos/banners/banner_rotativo/2020/2_anos_1.jpg"
                                                    alt="Direção Geral completa 2 anos de trabalhos. Relatório de gestão é divulgado"
                                                    />
                                            </a>
                                            <div class="faixa"></div>
                                            <h1>
                                                <a href="/index.php/component/banners/click/51">
                                                    Direção Geral completa 2 anos de trabalhos. Relatório de gestão é divulgado				</a>
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
                                                    Receita Federal faz nova doação de bebida para produção de álcool em gel				</a>
                                            </h1>
                                            <div class="clr"></div>
                                        </div>

                                    </div>
                                    <ol class="carousel-indicators carousel-indicators-custom">
                                        <li data-slide-to="0" data-target="#banner-carousel-202" class="active"><a href="#" title="Bem-vindo ao Campus Inconfidentes">0</a></li>
                                        <li data-slide-to="1" data-target="#banner-carousel-202" class=""><a href="#" title="Direção Geral completa 2 anos de trabalhos. Relatório de gestão é divulgado">1</a></li>
                                        <li data-slide-to="2" data-target="#banner-carousel-202" class="last"><a href="#" title="Receita Federal faz nova doação de bebida para produção de álcool em gel">2</a></li>
                                    </ol>
                                </div>

                            </div>
                            <div class="row-fluid module variacao-module-04 noticias-pagina-inicial">
                                <div class="outstanding-header">			 	<h2 class="outstanding-title"><span>Notícias</span></h2>
                                </div>									<div class="chamadas-secundarias">

                                    <div class="module span4 capa_noticia_principal">		

                                        <a href="/index.php/component/content/article?id=1172" class="img-rounded">
                                            <img src="/arquivos/noticias/2020/1172/BANNER_300x200_VESTIBULAR-2021-1.jpg" width="230" height="136" alt="" />
                                        </a>




                                        <h3 >
                                            <a href="/index.php/component/content/article?id=1172" >
                                                Estude conosco				</a>
                                        </h3>



                                        <a href="/index.php/component/content/article?id=1172"> <p class="description">Publicados editais para ingresso nos cursos técnicos e superiores do IFSULDEMINAS em 2021
                                            </p> </a>


                                    </div>	<div class="module span8 capa_noticia_secundaria">	


                                        <h3 >
                                            <a href="/index.php/component/content/article?id=1168" >
                                                Quero Educação.2020  				</a>
                                        </h3>


                                        <a href="/index.php/component/content/article?id=1168"> <p class="description">IFSULDEMINAS tem 24 cursos superiores estrelados no Guia da Faculdade
                                            </p> </a>


                                    </div>	<div class="module span8 capa_noticia_secundaria">	


                                        <h3 >
                                            <a href="/index.php/component/content/article?id=1165" >
                                                EIDE.2020				</a>
                                        </h3>


                                        <a href="/index.php/component/content/article?id=1165"> <p class="description">IFSULDEMINAS inicia Exame Institucional de Desempenho dos Estudantes - EIDE
                                            </p> </a>


                                    </div>	<div class="module span8 capa_noticia_secundaria">	


                                        <h3 >
                                            <a href="/index.php/component/content/article?id=1002" >
                                                Atividades para alunos				</a>
                                        </h3>


                                        <a href="/index.php/component/content/article?id=1002"> <p class="description">Acesse o "Guia para Organização de Atividades Remotas" para serem feitas durante a suspensão das aulas presenciais
                                            </p> </a>


                                    </div>	<div class="module span4 no-margin">		

                                        <a href="/index.php/component/content/article?id=1171" class="img-rounded">
                                            <img src="/arquivos/noticias/2020/1171/Militares_-_Capa.jpg" width="230" height="136" alt="" />
                                        </a>




                                        <h3 >
                                            <a href="/index.php/component/content/article?id=1171" >
                                                No campus				</a>
                                        </h3>


                                        <a href="/index.php/component/content/article?id=1171"> <p class="description">Militares da Força Aérea Brasileira ministram curso de pilotagem de drone
                                            </p> </a>


                                    </div>	<div class="module span4">		

                                        <a href="/index.php/component/content/article?id=1170" class="img-rounded">
                                            <img src="/arquivos/noticias/2020/1170/Natal_Sem_Fome_-_Capa.jpg" width="230" height="136" alt="" />
                                        </a>




                                        <h3 >
                                            <a href="/index.php/component/content/article?id=1170" >
                                                Solidariedade				</a>
                                        </h3>


                                        <a href="/index.php/component/content/article?id=1170"> <p class="description">Reunião marca início da campanha "Natal Sem Fome", em Inconfidentes
                                            </p> </a>


                                    </div>	<div class="module span4">		

                                        <a href="/index.php/component/content/article?id=1162" class="img-rounded">
                                            <img src="/arquivos/noticias/2020/1162/Capa_1_-_Dosador.jpg" width="230" height="136" alt="" />
                                        </a>




                                        <h3 >
                                            <a href="/index.php/component/content/article?id=1162" >
                                                Dosadores de álcool gel				</a>
                                        </h3>


                                        <a href="/index.php/component/content/article?id=1162"> <p class="description">Campus Inconfidentes recebe doação de dosadores de álcool gel do&nbsp;Instituto Federal de São Paulo
                                            </p> </a>


                                    </div>	<div class="module span4 no-margin">		

                                        <a href="/index.php/component/content/article?id=1163" class="img-rounded">
                                            <img src="/arquivos/noticias/2020/1163/Enade.jpg" width="230" height="136" alt="" />
                                        </a>




                                        <h3 >
                                            <a href="/index.php/component/content/article?id=1163" >
                                                Enade 2019				</a>
                                        </h3>


                                        <a href="/index.php/component/content/article?id=1163"> <p class="description">Curso de Engenharia Agronômica recebe nota máxima em avaliação do Enade
                                            </p> </a>


                                    </div>	<div class="module span4">		

                                        <a href="/index.php/component/content/article?id=1154" class="img-rounded">
                                            <img src="/arquivos/noticias/2020/1154/Curso_Ordenha.jpg" width="230" height="136" alt="" />
                                        </a>




                                        <h3 >
                                            <a href="/index.php/component/content/article?id=1154" >
                                                Curso Online				</a>
                                        </h3>


                                        <a href="/index.php/component/content/article?id=1154"> <p class="description">Inscrições abertas para curso de boas práticas de ordenha e interpretação de análise de leite
                                            </p> </a>


                                    </div>	<div class="module span4">		

                                        <a href="/index.php/component/content/article?id=1107" class="img-rounded">
                                            <img src="/arquivos/noticias/2020/1107/Nota.jpg" width="230" height="136" alt="" />
                                        </a>




                                        <h3 >
                                            <a href="/index.php/component/content/article?id=1107" >
                                                Eleições Municipais				</a>
                                        </h3>


                                        <a href="/index.php/component/content/article?id=1107"> <p class="description">Por ocasião da campanha eleitoral 2020, Direção Geral do campus emite Nota de Esclarecimento
                                            </p> </a>


                                    </div>	<div class="module span4 no-margin">		

                                        <a href="/index.php/component/content/article?id=1157" class="img-rounded">
                                            <img src="/arquivos/noticias/2020/1157/Edital_Modelo_-_CAMEM.jpg" width="230" height="136" alt="" />
                                        </a>




                                        <h3 >
                                            <a href="/index.php/component/content/article?id=1157" >
                                                Eleições CEPE e CAMEN				</a>
                                        </h3>


                                        <a href="/index.php/component/content/article?id=1157"> <p class="description">Divulgada pelo IFSULDEMINAS eleições para o CEPE e para a CAMEN
                                            </p> </a>


                                    </div>	<div class="module span4">		

                                        <a href="/index.php/component/content/article?id=1134" class="img-rounded">
                                            <img src="/arquivos/noticias/2020/1134/Sem_Título-1.jpg" width="230" height="136" alt="" />
                                        </a>




                                        <h3 >
                                            <a href="/index.php/component/content/article?id=1134" >
                                                Café Mulheres de Ouro				</a>
                                        </h3>


                                        <a href="/index.php/component/content/article?id=1134"> <p class="description">Até 26 de outubro, estão abertas as inscrições para concurso de logomarca
                                            </p> </a>


                                    </div>	<div class="module span4">		

                                        <a href="/index.php/component/content/article?id=1139" class="img-rounded">
                                            <img src="/arquivos/noticias/2020/1139/Curso_Conversacao-Ingles_banner230x136.png" width="230" height="136" alt="" />
                                        </a>




                                        <h3 >
                                            <a href="/index.php/component/content/article?id=1139" >
                                                Curso de Inglês online				</a>
                                        </h3>


                                        <a href="/index.php/component/content/article?id=1139"> <p class="description">Lista contendo os nomes dos selcionados é divulgada pelo IFSULDEMINAS
                                            </p> </a>


                                    </div>
                                    <div class="outstanding-footer">
                                        <a href="/index.php/noticias" class="outstanding-link">
                                            <span class="text">Mais notícias</span>
                                            <span class="icon-box">                                          
                                                <i class="icon-angle-right icon-light"><span class="hide">&nbsp;</span></i>
                                            </span>
                                        </a>	
                                    </div>
                                </div>	
                            </div>
                            <div class="row-fluid module cabecalho_banner_rotativo">
                                <div class="carousel banner-carousel slide bannergroup cabecalho_banner_rotativo" id="banner-carousel-261">
                                    <div class="carousel-inner">
                                        <div class="banneritem item active">
                                            <a
                                                href="/index.php/component/banners/click/34" target="_blank"
                                                title="Inscreva-se para os cursos do Senar">
                                                <img
                                                    src="https://portal.ifs.ifsuldeminas.edu.br/arquivos/banners/banner_secundario/senar.jpg"
                                                    alt="Inscreva-se para os cursos do Senar"
                                                    />
                                            </a>
                                            <div class="faixa"></div>
                                            <h1>
                                                <a href="/index.php/component/banners/click/34">
                                                    Inscreva-se para os cursos do Senar				</a>
                                            </h1>
                                            <div class="clr"></div>
                                        </div>
                                        <div class="banneritem item ">
                                            <a
                                                href="/index.php/component/banners/click/35" target="_blank"
                                                title="Obtenha o certificado de conclusão de Ensino Médio">
                                                <img
                                                    src="https://portal.ifs.ifsuldeminas.edu.br/arquivos/banners/banner_secundario/encceja.jpg"
                                                    alt="Obtenha o certificado de conclusão de Ensino Médio"
                                                    />
                                            </a>
                                            <div class="faixa"></div>
                                            <h1>
                                                <a href="/index.php/component/banners/click/35">
                                                    Obtenha o certificado de conclusão de Ensino Médio				</a>
                                            </h1>
                                            <div class="clr"></div>
                                        </div>
                                        <div class="banneritem item ">
                                            <a
                                                href="/index.php/component/banners/click/36" target="_blank"
                                                title="Venha para o Campus Inconfidentes">
                                                <img
                                                    src="https://portal.ifs.ifsuldeminas.edu.br/arquivos/banners/banner_secundario/venha.jpg"
                                                    alt="Venha para o Campus Inconfidentes"
                                                    />
                                            </a>
                                            <div class="faixa"></div>
                                            <h1>
                                                <a href="/index.php/component/banners/click/36">
                                                    Venha para o Campus Inconfidentes				</a>
                                            </h1>
                                            <div class="clr"></div>
                                        </div>
                                        <div class="banneritem item ">
                                            <a
                                                href="/index.php/component/banners/click/39" target="_blank"
                                                title="Coordenação de Aperfeiçoamento de Pessoal de Nível Superior">
                                                <img
                                                    src="https://portal.ifs.ifsuldeminas.edu.br/arquivos/banners/banner_rotativo/2020/banner_capes_2.jpg"
                                                    alt="Coordenação de Aperfeiçoamento de Pessoal de Nível Superior"
                                                    />
                                            </a>
                                            <div class="faixa"></div>
                                            <h1>
                                                <a href="/index.php/component/banners/click/39">
                                                    Coordenação de Aperfeiçoamento de Pessoal de Nível Superior				</a>
                                            </h1>
                                            <div class="clr"></div>
                                        </div>
                                        <div class="banneritem item ">
                                            <img
                                                src="https://portal.ifs.ifsuldeminas.edu.br/arquivos/banners/banner_rotativo/2020/banner-750x195.png"
                                                alt="Auxílios para eventos - 2020"
                                                />
                                            <div class="faixa"></div>
                                            <h1>
                                                <a href="/index.php/component/banners/click/40">
                                                    Auxílios para eventos - 2020				</a>
                                            </h1>
                                            <div class="clr"></div>
                                        </div>
                                        <div class="banneritem item ">
                                            <a
                                                href="/index.php/component/banners/click/43" target="_blank"
                                                title="Ministério da Saúde divulga campanha de prevenção ao Coronavírus">
                                                <img
                                                    src="https://portal.ifs.ifsuldeminas.edu.br/arquivos/banners/banner_rotativo/2020/banner_Corona_virus.jpg"
                                                    alt="Ministério da Saúde divulga campanha de prevenção ao Coronavírus"
                                                    />
                                            </a>
                                            <div class="faixa"></div>
                                            <h1>
                                                <a href="/index.php/component/banners/click/43">
                                                    Ministério da Saúde divulga campanha de prevenção ao Coronavírus				</a>
                                            </h1>
                                            <div class="clr"></div>
                                        </div>
                                        <div class="banneritem item ">
                                            <a
                                                href="/index.php/component/banners/click/44" target="_blank"
                                                title="Acompanhe todo o processo do programa Auxílio Estudantil">
                                                <img
                                                    src="https://portal.ifs.ifsuldeminas.edu.br/arquivos/banners/banner_rotativo/2020/banner750x195_auxilio-estudantil-2019-20.jpg"
                                                    alt="Acompanhe todo o processo do programa Auxílio Estudantil"
                                                    />
                                            </a>
                                            <div class="faixa"></div>
                                            <h1>
                                                <a href="/index.php/component/banners/click/44">
                                                    Acompanhe todo o processo do programa Auxílio Estudantil				</a>
                                            </h1>
                                            <div class="clr"></div>
                                        </div>
                                        <div class="banneritem item ">
                                            <a
                                                href="/index.php/component/banners/click/46" target="_blank"
                                                title="Inep lança editais e candidato poderá optar por exame impresso ou digital">
                                                <img
                                                    src="https://portal.ifs.ifsuldeminas.edu.br/arquivos/banners/banner_secundario/Banner_750x195_ENEM2019.jpg"
                                                    alt="Inep lança editais e candidato poderá optar por exame impresso ou digital"
                                                    />
                                            </a>
                                            <div class="faixa"></div>
                                            <h1>
                                                <a href="/index.php/component/banners/click/46">
                                                    Inep lança editais e candidato poderá optar por exame impresso ou digital				</a>
                                            </h1>
                                            <div class="clr"></div>
                                        </div>

                                    </div>
                                    <ol class="carousel-indicators carousel-indicators-custom">
                                        <li data-slide-to="0" data-target="#banner-carousel-261" class="active"><a href="#" title="Inscreva-se para os cursos do Senar">0</a></li>
                                        <li data-slide-to="1" data-target="#banner-carousel-261" class=""><a href="#" title="Obtenha o certificado de conclusão de Ensino Médio">1</a></li>
                                        <li data-slide-to="2" data-target="#banner-carousel-261" class=""><a href="#" title="Venha para o Campus Inconfidentes">2</a></li>
                                        <li data-slide-to="3" data-target="#banner-carousel-261" class=""><a href="#" title="Coordenação de Aperfeiçoamento de Pessoal de Nível Superior">3</a></li>
                                        <li data-slide-to="4" data-target="#banner-carousel-261" class=""><a href="#" title="Auxílios para eventos - 2020">4</a></li>
                                        <li data-slide-to="5" data-target="#banner-carousel-261" class=""><a href="#" title="Ministério da Saúde divulga campanha de prevenção ao Coronavírus">5</a></li>
                                        <li data-slide-to="6" data-target="#banner-carousel-261" class=""><a href="#" title="Acompanhe todo o processo do programa Auxílio Estudantil">6</a></li>
                                        <li data-slide-to="7" data-target="#banner-carousel-261" class="last"><a href="#" title="Inep lança editais e candidato poderá optar por exame impresso ou digital">7</a></li>
                                    </ol>
                                </div>

                            </div>
                            <div class="row-fluid variacao-module-04">

                                <div class="variacao-module-04 noticias-acontece-no-campus module span6 variacao-module-00">
                                    <div class="outstanding-header">				<h2 class="outstanding-title">Acontece no Campus</h2>

                                    </div>

                                    <div class="tile-collection">
                                        <div class="tileItem">
                                            <h3>
                                                <a href="/index.php/component/content/article?id=1014">
                                                    Nova servidora entra em exercício				</a>
                                            </h3>			

                                            <p>15/04/2020 09h54</p>
                                        </div>
                                        <div class="tileItem">
                                            <h3>
                                                <a href="/index.php/component/content/article?id=985">
                                                    Doutora da UFLA ministrará palestra para servidores				</a>
                                            </h3>			

                                            <p>10/03/2020 08h32</p>
                                        </div>
                                        <div class="tileItem">
                                            <h3>
                                                <a href="/index.php/component/content/article?id=948">
                                                    Servidores dão início ao ano letivo 2020				</a>
                                            </h3>			

                                            <p>04/02/2020 11h33</p>
                                        </div>
                                        <div class="tileItem">
                                            <h3>
                                                <a href="/index.php/component/content/article?id=931">
                                                    Diretor-geral concede entrevista à Difusora Ouro Fino				</a>
                                            </h3>			

                                            <p>10/01/2020 08h01</p>
                                        </div>
                                    </div>
                                    <div class="outstanding-footer">
                                        <a href="https://portal.ifs.ifsuldeminas.edu.br/index.php/component/content/category/82-acontece-no-campus" class="outstanding-link">
                                            <span class="text">Mais</span>
                                            <span class="icon-box">                                          
                                                <i class="icon-angle-right icon-light"><span class="hide">&nbsp;</span></i>
                                            </span>
                                        </a>	
                                    </div>




                                </div>
                                <div class="module span6">
                                    <div class="outstanding-header">				<h2 class="outstanding-title">Acesso Rápido</h2>

                                    </div>



                                    <div class="custom"  >
                                        <table style="width: 100%; height: 222px;">
                                            <tbody>
                                                <tr>
                                                    <td><a href="/index.php/nti/sistemas-solucoes" target="_self"><img src="/arquivos/banners/banner_acesso_rapido/icones_pequenos/sist.jpg" alt="sist" /></a></td>
                                                    <td><a href="/index.php/component/content/article?id=169"><img src="/arquivos/banners/banner_acesso_rapido/icones_pequenos/doc.jpg" alt="doc" /></a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="https://portal.ifsuldeminas.edu.br/pro-reitoria-extensao/relacoes-internacionais"><img src="/arquivos/banners/banner_acesso_rapido/icones_pequenos/inter.jpg" alt="inter" /></a></td>
                                                    <td><a href="/index.php/component/content/article/72-acesso-rapido/259-publicacoes-artigos-cientificos" target="_blank" rel="noopener"><img src="/arquivos/banners/banner_acesso_rapido/icones_pequenos/tcc22.jpg" alt="tcc22" /></a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="https://portal.ifsuldeminas.edu.br/pro-reitoria-ensino/ead"><img src="/arquivos/banners/banner_acesso_rapido/icones_pequenos/ead.jpg" alt="ead" /></a></td>
                                                    <td><a href="/index.php/component/content/article/68-institucional/departamentos/214-licitacoes"><img src="/arquivos/banners/banner_acesso_rapido/icones_pequenos/lici.jpg" alt="lici" /></a></td>
                                                </tr>
                                            </tbody>
                                        </table></div>


                                    <div class="outstanding-footer">

                                    </div>


                                </div>

                            </div>
                            <div class="row-fluid variacao-module-04">

                                <div class="module span12">
                                    <div class="outstanding-header">				<h2 class="outstanding-title">Vídeos</h2>

                                    </div>


                                    <!-- Make it responsive to window size -->
                                    <script type="text/javascript">
                                    //<![CDATA[

                                                    function YoutubeGalleryClientWidth1() {
                                                    return YoutubeGalleryResults1 (
                                                            window.innerWidth ? window.innerWidth : 0,
                                                            document.documentElement ? document.documentElement.clientWidth : 0,
                                                            document.body ? document.body.clientWidth : 0
                                                            );
                                                    }
                                            function YoutubeGalleryScrollLeft1() {
                                            return YoutubeGalleryResults1 (
                                                    window.pageXOffset ? window.pageXOffset : 0,
                                                    document.documentElement ? document.documentElement.scrollLeft : 0,
                                                    document.body ? document.body.scrollLeft : 0
                                                    );
                                            }
                                            function YoutubeGalleryFindHorizontalOffset1(id) {
                                            var node = document.getElementById(id);
                                            var curleft = 0;
                                            var curleftscroll = 0;
                                            var scroll_left = YoutubeGalleryScrollLeft1();
                                            if (node.offsetParent) {
                                            do {
                                            curleft += node.offsetLeft;
                                            curleftscroll = 0;
                                            } while (node = node.offsetParent);
                                            var imaged_x = (curleft - curleftscroll) - scroll_left;
                                            return imaged_x;
                                            }
                                            return 0;
                                            }
                                            function YoutubeGalleryResults1(n_win, n_docel, n_body) {
                                            var n_result = n_win ? n_win : 0;
                                            if (n_docel && (!n_result || (n_result > n_docel)))
                                                    n_result = n_docel;
                                            return n_body && (!n_result || (n_result > n_body)) ? n_body : n_result;
                                            }
                                            function YoutubeGalleryAutoResizePlayer1(){
                                            var clientWidth = YoutubeGalleryClientWidth1();
                                            var playerObject = document.getElementById("youtubegalleryplayerid_1");
                                            var mainObject = document.getElementById("YoutubeGalleryMainContainer1");
                                            var parentObject = mainObject.parentNode;
                                            var parentWidth = parentObject.offsetWidth;
                                            var secondaryObject = document.getElementById("YoutubeGallerySecondaryContainer1");
                                            var playerWidth = 430;
                                            var x = YoutubeGalleryFindHorizontalOffset1("YoutubeGalleryMainContainer1");
                                            var setWidth = false;
                                            if (playerWidth > parentWidth)
                                            {
                                            playerWidth = parentWidth;
                                            setWidth = true;
                                            }


                                            if (x + playerWidth > clientWidth)
                                            {
                                            playerWidth = clientWidth - x;
                                            setWidth = true;
                                            }

                                            if (playerObject.width != playerWidth)
                                                    setWidth = true;
                                            if (setWidth)
                                            {
                                            mainObject.style.width = (playerWidth) + "px";
                                            var newH = 245 / (430 / playerWidth);
                                            secondaryObject.style.width = (playerWidth) + "px";
                                            secondaryObject.style.height = (newH) + "px";
                                            playerObject.width = (playerWidth) + "px";
                                            playerObject.height = (newH) + "px";
                                            }
                                            }

                                    //]]>
                                    </script>

                                    <a name="youtubegallery"></a>
                                    <div class="videos-container" id="YoutubeGalleryMainContainer1">
                                        <div class="span7">
                                            <!-- Video Player -->
                                            <div id="YoutubeGallerySecondaryContainer1"><iframe width="430" height="245" src="https://www.youtube.com/embed/b2I51wKU7_U?autoplay=0&amp;hl=en&amp;fs=1&amp;showinfo=1&amp;iv_load_policy=3&amp;rel=0&amp;loop=0&amp;border=1&amp;controls=1&amp;start=0&amp;end=0" frameborder="1" id="youtubegalleryplayerid_1" onLoad="YoutubeGalleryAutoResizePlayer1();" allowfullscreen></iframe></div>

                                            <div style="padding: 5px; font-size: 15px; height: 50px;"> 

                                                <h3 style=" line-height: 130%!important; color:#175210!important;"><b><span id="YoutubeGalleryVideoTitle1">Matrícula 2020</span></b></h3>

                                            </div>

                                        </div>

                                        <div class="span5">
                                            <!-- if number of videos more than 0 -->
                                            <div class="video-item row-fluid"><div class="span5" style="padding: 0 0 15px 5px"><a href="javascript:YoutubeGalleryHotVideoSwitch1('b2I51wKU7_U','youtube',213)" class="link-video-item"> <img src="https://img.youtube.com/vi/b2I51wKU7_U/0.jpg" style="width:300px;height:80px" alt="Matrícula 2020" title="Matrícula 2020" /> </a></div>
                                                <div class="span7" style="padding: 2px; font-size: 15px"><h3 style=" line-height: 130%!important; color:#175210!important;"><b><a href="javascript:YoutubeGalleryHotVideoSwitch1('b2I51wKU7_U','youtube',213)" class="link-video-item"> Matrícula 2020 </a></b></h3></div>
                                                <div id="YoutubeGalleryThumbTitle1_213" class="hide">Matrícula 2020</div><div id="YoutubeGalleryThumbDescription1_213" class="hide">Candidatos aprovados começam a fazer matrícula para 2020.</div><div id="YoutubeGalleryThumbLink1_213" class="hide">https://youtu.be/b2I51wKU7_U</div><div id="YoutubeGalleryThumbStartSecond1_213" class="hide">0</div><div id="YoutubeGalleryThumbEndSecond1_213" class="hide">0</div></div><div class="video-item row-fluid"><div class="span5" style="padding: 0 0 15px 5px"><a href="javascript:YoutubeGalleryHotVideoSwitch1('79V6zEEjn0U','youtube',212)" class="link-video-item"> <img src="https://img.youtube.com/vi/79V6zEEjn0U/0.jpg" style="width:300px;height:80px" alt="Reportagem Enfermaria" title="Reportagem Enfermaria" /> </a></div>
                                                <div class="span7" style="padding: 2px; font-size: 15px"><h3 style=" line-height: 130%!important; color:#175210!important;"><b><a href="javascript:YoutubeGalleryHotVideoSwitch1('79V6zEEjn0U','youtube',212)" class="link-video-item"> Reportagem Enfermaria </a></b></h3></div>
                                                <div id="YoutubeGalleryThumbTitle1_212" class="hide">Reportagem Enfermaria</div><div id="YoutubeGalleryThumbDescription1_212" class="hide">Mais de 1600 atendimentos somente nos 3 primeiros meses deste ano. Os números contabilizados pelo Núcleo de Saúde dos Alunos do Campus Inconfidentes revelam crescimento na procura pelos serviços médicos.</div><div id="YoutubeGalleryThumbLink1_212" class="hide">https://youtu.be/79V6zEEjn0U</div><div id="YoutubeGalleryThumbStartSecond1_212" class="hide">0</div><div id="YoutubeGalleryThumbEndSecond1_212" class="hide">0</div></div><div class="video-item row-fluid"><div class="span5" style="padding: 0 0 15px 5px"><a href="javascript:YoutubeGalleryHotVideoSwitch1('ehizUR45HBY','youtube',211)" class="link-video-item"> <img src="https://img.youtube.com/vi/ehizUR45HBY/0.jpg" style="width:300px;height:80px" alt="Reportagem Dia da Matemática" title="Reportagem Dia da Matemática" /> </a></div>
                                                <div class="span7" style="padding: 2px; font-size: 15px"><h3 style=" line-height: 130%!important; color:#175210!important;"><b><a href="javascript:YoutubeGalleryHotVideoSwitch1('ehizUR45HBY','youtube',211)" class="link-video-item"> Reportagem Dia da Matemática </a></b></h3></div>
                                                <div id="YoutubeGalleryThumbTitle1_211" class="hide">Reportagem Dia da Matemática</div><div id="YoutubeGalleryThumbDescription1_211" class="hide">Alunos de Licenciatura de Matemática do Campus Inconfidentes promovem atividade para comemorar o Dia Nacional da Matemática.</div><div id="YoutubeGalleryThumbLink1_211" class="hide">https://youtu.be/ehizUR45HBY</div><div id="YoutubeGalleryThumbStartSecond1_211" class="hide">0</div><div id="YoutubeGalleryThumbEndSecond1_211" class="hide">0</div></div><!-- Show navigation bar with 3 columns and width should be 500px. -->

                                        </div> 		
                                    </div>

                                    <!-- Make it responsive to window size -->
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
                    <div class="pull-right voltar-ao-topo"><a href="#portal-siteactions"><i class="icon-chevron-up"></i>&nbsp;Voltar para o topo</a></div>
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
                    <div class="pull-right voltar-ao-topo"><a href="#portal-siteactions"><i class="icon-chevron-up"></i>&nbsp;Voltar para o topo</a></div>
                </div>
            </div>
        </footer>
    </div>
    <!-- fim div#wrapper -->
    <!-- scripts principais do template -->
    <script src="/templates/padraogoverno01/bootstrap/js/bootstrap.min.js" type="text/javascript"></script><noscript>&nbsp;<!-- item para fins de acessibilidade --></noscript>
    <script src="/templates/padraogoverno01/js/jquery.cookie.js" type="text/javascript"></script><noscript>&nbsp;<!-- item para fins de acessibilidade --></noscript>
    <script src="/templates/padraogoverno01/js/template.js" type="text/javascript"></script><noscript>&nbsp;<!-- item para fins de acessibilidade --></noscript>
    <!-- debug -->

    <script defer="defer" src="//barra.brasil.gov.br/barra.js" type="text/javascript"></script>
</body>
</html>
