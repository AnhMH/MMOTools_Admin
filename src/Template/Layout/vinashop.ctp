<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>MMO Tools</title>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    
    <!-- Facebook open graph tags -->
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="hoanganhonline"/>
    <meta property="og:url" content="<?php echo $current_url;?>"/>
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>

    <!-- Twitter card tags -->
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="hoanganhonline"/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:description" content=""/>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo $BASE_URL;?>/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="<?php echo $BASE_URL;?>/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $BASE_URL;?>/css/fonts.css" rel="stylesheet">
    <link href="<?php echo $BASE_URL;?>/plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="<?php echo $BASE_URL;?>/plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="<?php echo $BASE_URL;?>/plugins/jquery.ui/smoothness/jquery-ui-1.10.1.custom.css" rel="stylesheet" >
    <link href="<?php echo $BASE_URL;?>/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
    <link href="<?php echo $BASE_URL;?>/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo $BASE_URL;?>/plugins/jquery-datatable/extensions/responsive/css/dataTables.responsive.css" rel="stylesheet">
    <link href="<?php echo $BASE_URL;?>/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
    <link href="<?php echo $BASE_URL;?>/plugins/elfinder/css/elfinder.min.css" rel="stylesheet" >
    <link href="<?php echo $BASE_URL;?>/plugins/material-design-preloader/md-preloader.css" rel="stylesheet" />
    <link href="<?php echo $BASE_URL;?>/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <link href="<?php echo $BASE_URL;?>/plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="<?php echo $BASE_URL;?>/plugins/emojionearea/emojionearea.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php echo $BASE_URL;?>/css/style.css" rel="stylesheet">
    <link href="<?php echo $BASE_URL;?>/css/themes/all-themes.css" rel="stylesheet" />
    <link href="<?php echo $BASE_URL;?>/css/custom.css" rel="stylesheet">
    <script src="<?php echo $BASE_URL;?>/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript">
        var PATH       = '<?php echo $BASE_URL;?>';
        var BASE       = '<?php echo $BASE_URL;?>';
        var CURRENT_URL= '<?php echo $current_url;?>';
        var list_chart = [];
        var token      = '<?php echo $this->request->getParam('_csrfToken');?>';
        var module     = '';
        var Lang = {};
        Lang["yes"]     = '<?php echo __('Yes')?>';
        Lang["deleted"] = '<?php echo __('Deleted')?>';
        Lang["selectoneitem"] = '<?php echo __('Select at least one item')?>';
        Lang["selectonemedia"] = '<?php echo __('Select at least one Page/Group/Profile/Friend')?>';
        Lang["emptyTable"] = '<?php echo __('No data available in table')?>';
        Lang["processing"] = '<?php echo __('Processing')?>';
    </script>
</head>

<body class="theme-blue">
    <!-- Page Loader -->
    <!-- <div class="page-loader-wrapper">
        <div class="loader">
            <div class="md-preloader pl-size-md">
                <svg viewbox="0 0 75 75">
                    <circle cx="37.5" cy="37.5" r="33.5" class="pl-red" stroke-width="4" />
                </svg>
            </div>
            <p><?php echo __('Please wait...')?></p>
        </div>
    </div> -->
    <div class="page-loader-action">
        <div class="loader">
            <div class="md-preloader pl-size-md">
                <svg viewbox="0 0 75 75">
                    <circle cx="37.5" cy="37.5" r="33.5" class="pl-red" stroke-width="4" />
                </svg>
            </div>
            <p><?php echo __('Please wait...')?></p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <?php echo $this->element('header');?>
    <?php echo $this->element('sidebar');?>
    
    <section class="content">
        <div class="container-fluid">
<!--            <div class="alert alert-warning">
                <strong><?php echo __('Notice')?></strong> <?php echo __('Please buy one of packages to use')?>
            </div>-->
            <?= $this->fetch('content') ?>
        </div>
    </section>

    <!-- Modal Save-->
    <div class="modal fade" id="modal-save" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-blue-grey">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><?php echo __('title')?></h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control save_title"/>
                    </div>   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-modal-save"><i class="fa fa-floppy-o" aria-hidden="true"></i> <?php echo __('save')?></button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-category" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-blue-grey">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><?php echo __('title')?></h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control category_title"/>
                    </div>   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-modal-add-category"><i class="fa fa-floppy-o" aria-hidden="true"></i> <?php echo __('Add new')?></button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxeHZ6PYqXBLNzYbrFmCW0uovg_PpuXjM&sensor=false&libraries=places" type="text/javascript"></script>
    <script src="<?php echo $BASE_URL;?>/plugins/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo $BASE_URL;?>/plugins/jquery.ui/jquery.ui.min.js"></script>
    <script src="<?php echo $BASE_URL;?>/plugins/momentjs/moment.js"></script>
    <script src="<?php echo $BASE_URL;?>/plugins/geocomplete/jquery.geocomplete.js"></script>
    <script src="<?php echo $BASE_URL;?>/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="<?php echo $BASE_URL;?>/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="<?php echo $BASE_URL;?>/plugins/gmaps/gmaps.js"></script>
    <script src="<?php echo $BASE_URL;?>/plugins/highcharts/highcharts.js"></script>
    <script src="<?php echo $BASE_URL;?>/plugins/countid/jquery.countdown.min.js"></script>
    <script src="<?php echo $BASE_URL;?>/plugins/elfinder/js/elfinder.full.js"></script>
    <script src="<?php echo $BASE_URL;?>/plugins/elfinder/js/jquery.dialogelfinder.js"></script>
    <script src="<?php echo $BASE_URL;?>/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?php echo $BASE_URL;?>/plugins/jquery-datatable/extensions/responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo $BASE_URL;?>/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo $BASE_URL;?>/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?php echo $BASE_URL;?>/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?php echo $BASE_URL;?>/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?php echo $BASE_URL;?>/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?php echo $BASE_URL;?>/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?php echo $BASE_URL;?>/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?php echo $BASE_URL;?>/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
    <script src="<?php echo $BASE_URL;?>/plugins/bootstrap-notify/bootstrap-notify.js"></script>
    <script src="<?php echo $BASE_URL;?>/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="<?php echo $BASE_URL;?>/plugins/node-waves/waves.js"></script>
    <script type="text/javascript" src="<?php echo $BASE_URL;?>/plugins/emojionearea/emojionearea.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo $BASE_URL;?>/js/admin.js"></script>
    <script src="<?php echo $BASE_URL;?>/js/analytics.js"></script>
    <script src="<?php echo $BASE_URL;?>/js/script.js?<?php echo time();?>"></script>
</body>

</html>