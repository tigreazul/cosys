<?php $this->load->view('include/v_head'); ?>
<body class="form-input-page">

    <!-- Start: Main -->
    <div id="main">

        <!-- Start: Header -->
        <?php $this->load->view('include/v_header'); ?>
        <!-- End: Header -->

        <!-- Start: Sidebar -->
        <?php $this->load->view('include/v_panel'); ?>
        <!-- End: Sidebar -->

        <!-- Start: Content -->
        <section id="content_wrapper">

            <!-- Start: Topbar -->
            <?php $this->load->view('include/miga'); ?>
            <!-- End: Topbar -->

            <div id="content">
                <div class="row">

                    <div class="col-md-12">

                        <div class="panel">
                            <div class="panel-heading">
                                <span class="panel-title">Fields Options</span>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="inputSmall">Small</label>
                                        <div class="col-lg-10">
                                            <input id="inputSmall" class="form-control input-sm" type="text" placeholder=".input-sm">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="inputDefault">Default</label>
                                        <div class="col-lg-10">
                                            <input id="inputDefault" class="form-control" type="text" placeholder="default style">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="inputLarge">Large</label>
                                        <div class="col-lg-10">
                                            <input id="inputLarge" class="form-control input-lg" type="text" placeholder=".input-lg">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-md-2 text-right">Input Lengths</label>
                                        <div class="col-xs-2">
                                            <input type="text" class="form-control" placeholder=".col-xs-2">
                                        </div>
                                        <div class="col-xs-3">
                                            <input type="text" class="form-control" placeholder=".col-xs-3">
                                        </div>
                                        <div class="col-xs-5">
                                            <input type="text" class="form-control" placeholder=".col-xs-4">
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="form-group">
                                        <label for="inputInline" class="col-lg-2 control-label">Inline Help Text</label>
                                        <div class="col-lg-5">
                                            <input id="inputInline" type="text" class="form-control" placeholder="Text Field">
                                        </div>
                                        <div class="col-lg-4 pl5">
                                            <span class="help-block mt5"><i class="fa fa-bell"></i> A block of help text!</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputHelp" class="col-lg-2 control-label">Help Text</label>
                                        <div class="col-lg-10">
                                            <input id="inputHelp" type="text" class="form-control" placeholder="Text Field">
                                            <span class="help-block mt5"><i class="fa fa-bell"></i> A block of help text that can help the user</span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>
        <!-- End: Content -->

    </div>
    <!-- End: Main -->

    <?php $this->load->view('include/v_foot'); ?>
</body>

</html>
