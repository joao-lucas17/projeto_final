<aside class="main-sidebar sidebar-dark-primary ">
    <!-- Brand Logo -->
     <style>
            .img-logo{
                width: 60px;
                margin-left: 15px;
            }
            
            .img-icone{
                margin-right: 10px;
            }
        </style>
    
    <a href="<?= site_url() ?>" class="brand-link">
        <div class="img-logo">
            <span class="brand-text font-weight-light"><h4>NutriIF</h4></span>
        </div>
    </a>

    <!-- Sidebar -->    
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-header">CADASTROS</li>
                <li class="nav-item">
                    <a href="<?= site_url("user/index") ?>" class="nav-link">
                        <img src="<?= base_url("bootstrap/img/usuario.png") ?>" class="img-icone"/>
                        <p>Usuários</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url("alimento/index") ?>" class="nav-link">
                        <img src="<?= base_url("bootstrap/img/alimento.png") ?>" class="img-icone"/>
                        <p>Alimentos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url("cardapio/index") ?>" class="nav-link">
                        <img src="<?= base_url("bootstrap/img/cardapio.png") ?>" class="img-icone"/>
                        <p>Cardápio</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url("refeicao/index") ?>" class="nav-link">
                        <img src="<?= base_url("bootstrap/img/refeicao.png") ?>" class="img-icone"/>
                        <p>Refeição</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url("desperdicio/index") ?>" class="nav-link">
                        <img src="<?= base_url("bootstrap/img/desperdicio.png") ?>" class="img-icone"/>
                        <p>Desperdício</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url("configuracoes/index") ?>" class="nav-link">
                        <img src="<?= base_url("bootstrap/img/config.png") ?>" class="img-icone"/>
                        <p>Configurações</p>
                    </a>
                </li>
                <li class="nav-header">RELATÓRIOS</li>
                <li class="nav-item">
                     <a href="<?= site_url("relatorio/desperdicio") ?>" class="nav-link">
                        <img src="<?= base_url("bootstrap/img/relatorio.png") ?>" class="img-icone"/>
                        <p>Escrito</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url("relatorio/grafico") ?>" class="nav-link">
                        <img src="<?= base_url("bootstrap/img/grafico.png") ?>" class="img-icone"/>
                        <p>Gráfico</p>
                    </a>
                </li>
                <li class="nav-header">SISTEMA</li>
                <li class="nav-item">
                    <a href="<?= site_url("login/sair") ?>" class="nav-link">
                        <img src="<?= base_url("bootstrap/img/sair.png") ?>" class="img-icone"/>
                        <p>Sair</p>
                    </a>
                </li>
                
            </ul>
                
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>