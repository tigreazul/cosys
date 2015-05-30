<?php $this->load->view('html/v_head.php')?>

<body class="dashboard-page sb-l-o sb-r-c">

    <!-- Start: Main -->
    <div id="main">

        <?php $this->load->view('html/v_header.php') ?>

        <?php $this->load->view('html/v_panel.php') ?>

        <!-- Start: Content -->
        <section id="content_wrapper">
            <!-- Start: Topbar -->
            <header id="topbar">
                <div class="topbar-left">
                    <ol class="breadcrumb">
                        <li class="crumb-active">
                            <a href="dashboard.html">Cosys</a>
                        </li>
                        <li class="crumb-icon">
                            <a href="dashboard.html">
                                <span class="glyphicon glyphicon-home"></span>
                            </a>
                        </li>
                        <li class="crumb-link">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="crumb-trail">Dashboard</li>
                    </ol>
                </div>
            </header>
            <!-- End: Topbar -->
                        <!-- begin: .admin-form -->
                        <div class="admin-form">

                            <div id="p1" class="panel heading-border">

                                <div class="panel-body bg-light">
                                    <form method="post" action="#" id="form-ui">
                                        <div class="section-divider mb40" id="spy1">
                                            <span>Form UI Elements</span>
                                        </div>
                                        <!-- .section-divider -->

                                        <!-- Input Icons -->
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="section">
                                                    <label class="field prepend-icon">
                                                        <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Input icon left">
                                                        <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="section">
                                                    <label class="field prepend-icon">
                                                        <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Input icon left">
                                                        <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="section">
                                                    <label class="field prepend-icon">
                                                        <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Input icon left">
                                                        <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Input Formats -->
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="section">
                                                    <label class="field prepend-icon">
                                                        <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Input icon left">
                                                        <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="section">
                                                    <label class="field prepend-icon">
                                                        <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Input icon left">
                                                        <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="section">
                                                    <label class="field prepend-icon">
                                                        <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Input icon left">
                                                        <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Multi Selects -->
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="section">
                                                    <label class="field select">
                                                        <select id="country" name="country">
                                                            <option value="">Select with single arrow</option>
                                                            <option value="AL">Albania</option>
                                                            <option value="DZ">Algeria</option>
                                                        </select>
                                                        <i class="arrow"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="section">
                                                    <label class="field select">
                                                        <select id="location" name="location">
                                                            <option value="">Select with double arrows</option>
                                                            <option value="AL">Albania</option>
                                                            <option value="DZ">Algeria</option>
                                                        </select>
                                                        <i class="arrow double"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="section">
                                                    <label class="field select">
                                                        <select id="location" name="location" disabled>
                                                            <option value="">Select with double arrows</option>
                                                            <option value="AL">Albania</option>
                                                            <option value="DZ">Algeria</option>
                                                        </select>
                                                        <i class="arrow double"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- end .section section -->

                                        <!-- end .form-body section -->
                                        <div class="panel-footer">
                                            <button type="submit" class="button btn-primary">Proceed to confirm</button>
                                        </div>
                                        <!-- end .form-footer section -->
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end: .admin-form -->

        </section>
        <!-- End: Content-Wrapper -->

    </div>
    <!-- End: Main -->

<?php $this->load->view('html/v_foot.php')?>
