
        <!-- Start: Sidebar -->
        <aside id="sidebar_left" class="nano nano-primary">
            <div class="nano-content">


                <!-- sidebar menu -->
                <ul class="nav sidebar-menu">
                    <li class="sidebar-label pt20">Home</li>

                    <li class="active">
                        <a href="<?php echo base_url() ?>">
                            <span class="glyphicons glyphicons-home"></span>
                            <span class="sidebar-title">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-label pt15">Áreas</li>
                    <li>
                        <a class="accordion-toggle" href="#">
                            <span class="glyphicons glyphicons-fire"></span>
                            <span class="sidebar-title">Kardex</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li>
                                <a href="<?php echo base_url() ?>c_kardex/in">
                                    <span class="glyphicons glyphicons-book"></span> Ingreso </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>c_kardex/out">
                                    <span class="glyphicons glyphicons-show_big_thumbnails"></span> Salida</a>
                            </li>
                            <li>
                                <a class="accordion-toggle" href="#">
                                    <span class="glyphicons glyphicons-fire"></span>
                                    <span class="sidebar-title">Detalles</span>
                                    <span class="caret"></span>
                                </a>
                            
                                <ul class="nav sub-nav">
                                    <li>
                                        <a href="<?php echo base_url() ?>c_kardex/indet">
                                            <span class="glyphicons glyphicons-sampler"></span> Ingreso </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url() ?>c_kardex/outdet">
                                            <span class="glyphicons glyphicons-sampler"></span> Salida </a>
                                    </li>
                                </ul>
                            </li>    
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>c_produccion">
                            <span class="glyphicons glyphicons-cup"></span>
                            Producción
                            
                        </a>
<!--                         <ul class="nav sub-nav">
                            <li>
                                <a href="admin_forms-elements.html">
                                    <span class="glyphicons glyphicons-edit"></span> Admin Elements </a>
                            </li>
                            <li>
                                <a href="admin_forms-widgets.html">
                                    <span class="glyphicons glyphicons-calendar"></span> Admin Widgets </a>
                            </li>
                            <li>
                                <a href="admin_forms-layouts.html">
                                    <span class="glyphicons glyphicons-more_windows"></span> Admin Layouts </a>
                            </li>
                            <li>
                                <a href="admin_forms-wizard.html">
                                    <span class="glyphicons glyphicons-magic"></span> Admin Wizard </a>
                            </li>
                        </ul> -->
                    </li>
                    <li>
                        <a class="accordion-toggle" href="#">
                            <span class="glyphicons glyphicons-cup"></span>
                            <span class="sidebar-title">Administración</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li>
                                <a href="admin_forms-elements.html">
                                    <span class="glyphicons glyphicons-edit"></span> Usuarios </a>
                            </li>
                            <li>
                                <a href="admin_forms-widgets.html">
                                    <span class="glyphicons glyphicons-calendar"></span> Clientes </a>
                            </li>
                            <li>
                                <a href="admin_forms-layouts.html">
                                    <span class="glyphicons glyphicons-more_windows"></span> Proveedores </a>
                            </li>
                            <li>
                                <a href="admin_forms-wizard.html">
                                    <span class="glyphicons glyphicons-magic"></span> Productos</a>
                            </li>
                            <li>
                                <a href="admin_forms-layouts.html">
                                    <span class="glyphicons glyphicons-more_windows"></span> Materiales </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="accordion-toggle" href="#">
                            <span class="glyphicons glyphicons-cup"></span>
                            <span class="sidebar-title">Reporte</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li>
                                <a href="admin_forms-elements.html">
                                    <span class="glyphicons glyphicons-edit"></span> Admin Elements </a>
                            </li>
                            <li>
                                <a href="admin_forms-widgets.html">
                                    <span class="glyphicons glyphicons-calendar"></span> Admin Widgets </a>
                            </li>
                            <li>
                                <a href="admin_forms-layouts.html">
                                    <span class="glyphicons glyphicons-more_windows"></span> Admin Layouts </a>
                            </li>
                            <li>
                                <a href="admin_forms-wizard.html">
                                    <span class="glyphicons glyphicons-magic"></span> Admin Wizard </a>
                            </li>
                        </ul>
                    </li>

                </ul>
                <div class="sidebar-toggle-mini">
                    <a href="#">
                        <span class="fa fa-sign-out"></span>
                    </a>
                </div>
            </div>
        </aside>