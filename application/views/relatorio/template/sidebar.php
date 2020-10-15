<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
     <style>
            .img-logo{
                width: 60px;
                margin-right: 15px;
            }
            
            .img-icone{
                margin-right: 10px;
            }
        </style>
    
    <a href="<?= site_url() ?>" class="brand-link">
        <span class="brand-text font-weight-light">RELATÓRIO DE DESPERDÍCIO</span>
    </a>

    <!-- Sidebar -->    
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-header">OPÇÕES DE RELATÓRIO</li>
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
                
                
            </ul>
                
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>