
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" class="no-js" lang="pt-br" dir="ltr"> 
    <head>
        
        <link rel="stylesheet" href="<?= base_url("bootstrap/css/bootstrap_gov.min.css") ?>" type='text/css'/>
        <link rel="stylesheet" href="<?= base_url("bootstrap/css/template-verde.css") ?>" type='text/css'/>


        <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">

        
        
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="sortcut icon" href="<?= base_url("bootstrap/img/logo_guia.png")?>" type="image/jpg" />
        <title>Nutriif</title>
        
        
        
        
        <link href="<?= base_url("bootstrap/css/banner-rotativo-home.css")?>" rel="stylesheet" type="text/css" />
        <script type="application/json" class="joomla-script-options new">{"csrf.token":"5401241939fb354d1106eb27339ae6ce","system.paths":{"root":"","base":""}}</script>
        <script src="/media/jui/js/jquery.min.js?77f7d0b156fa3bb90e6529f9c17fe414" type="text/javascript"></script>
        <script src="/media/jui/js/jquery-noconflict.js?77f7d0b156fa3bb90e6529f9c17fe414" type="text/javascript"></script>
        <script src="/media/jui/js/jquery-migrate.min.js?77f7d0b156fa3bb90e6529f9c17fe414" type="text/javascript"></script>
        <script src="/media/k2/assets/js/k2.frontend.js?v=2.8.0&amp;sitepath=/" type="text/javascript"></script>
        <script src="/media/jui/js/bootstrap.min.js?77f7d0b156fa3bb90e6529f9c17fe414" type="text/javascript"></script>
        <script src="<?= base_url("bootstrap/css/banner-rotativo-home.js")?>" type="text/javascript"></script>
        <script type="text/javascript">

        </script>

        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link rel="stylesheet" href="<?= base_url("bootstrap/css/fontes.css") ?>" type='text/css'/>

        <style>
            .logo{
                width: 165px;
                margin-bottom: 25px;
            }
        </style>
    </head>
    <body>

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
                            <a href="<?= site_url("site/index") ?>" title="Campus Inconfidentes">
                                <span class="portal-title-1">Site para conscientização do desperdício</span>
                                <h1 class="portal-title corto">NUTRIIF</h1>
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
                                        <h2 class="hidden">Buscar no site</h2>
                                        <div class="input-append">
                                            <label for="portal-searchbox-field" class="hide">Busca: </label>
                                            <input type="text" id="portal-searchbox-field" class="searchField" placeholder="Buscar no site" title="Buscar no portal" name="searchword">       
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
                                <li class="item-132"><a href="/index.php/contato" >Contato</a></li><li class="item-288"><a href="https://portal.ifs.ifsuldeminas.edu.br/index.php/nti/sistemas-solucoes" >Acesso a Sistemas</a></li><li class="item-341"><a href="https://portal.ifsuldeminas.edu.br/index.php/ouvidoria" target="_blank" rel="noopener noreferrer">Ouvidoria</a></li></ul>
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
                                        <img src="<?= base_url("bootstrap/img/logo.jpg") ?>" class="logo" alt="Logo do nutriif"/>																
                                        <div class="clr"></div>
                                    </div>

                                </div>
                                <nav class="span9 ">
                                    <h2 >Links <i class="icon-chevron-up visible-phone visible-tablet pull-right"></i></h2><!-- visible-phone visible-tablet -->

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
                                                <a href="/index.php/component/banners/click/24" title="Bem-vindo ao Campus Inconfidentes">
                                                    <img src="<?= base_url("bootstrap/img/fome-principal.jpg") ?>" width="100%" alt="Bem-vindo ao Nutriif"/>
                                                </a>
                                                <div class="faixa"></div>
                                                <h1>
                                                    <a href="/index.php/component/banners/click/24">
                                                        Bem-vindo ao Nutriif
                                                    </a>
                                                </h1>
                                                <div class="clr"></div>
                                            </div>
                                            <div class="banneritem item ">
                                                <a
                                                    href="/index.php/component/banners/click/51"
                                                    title="Direção Geral completa 2 anos de trabalhos. Relatório de gestão é divulgado">
                                                    <img
                                                        src="<?= base_url("bootstrap/img/slide3.jpg") ?>"
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
                                                        src="<?= base_url("bootstrap/img/rest.jpg") ?>"
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
