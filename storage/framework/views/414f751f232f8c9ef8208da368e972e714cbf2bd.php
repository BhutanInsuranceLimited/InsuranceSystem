<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Bhutan Insurance Limited</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
	<?php echo Html::style('public/global/plugins/font-awesome/css/font-awesome.min.css'); ?>

	<?php echo Html::style('public/global/plugins/simple-line-icons/simple-line-icons.min.css'); ?>

	<?php echo Html::style('public/global/plugins/bootstrap/css/bootstrap.min.css'); ?>

	<?php echo Html::style('public/global/plugins/uniform/css/uniform.default.css'); ?>

	<?php echo Html::style('public/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css'); ?>

	<?php echo Html::style('public/global/css/components.css'); ?>

	<?php echo Html::style('public/global/css/plugins.css'); ?>

	<?php echo Html::style('public/admin/layout/css/layout.css'); ?>

	<?php echo Html::style('public/admin/layout/css/themes/darkblue.css'); ?>

	<?php echo Html::style('public/admin/layout/css/custom.css'); ?>

	<link rel="shortcut icon" href="favicon.ico"/>
</head>
<body class="page-header-fixed page-quick-sidebar-over-content ">
<!-- BEGIN HEADER -->
<?php echo $__env->make('common.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- END HEADER -->

<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">


	<!-- BEGIN CONTENT -->
<?php echo $__env->yieldContent('content'); ?>
<!-- BEGIN FOOTER -->
<?php echo $__env->make('common.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- END FOOTER -->
<?php echo Html::script('public/global/plugins/jquery.min.js'); ?>

<?php echo Html::script('public/global/plugins/jquery-migrate.min.js'); ?>

<?php echo Html::script('public/global/plugins/jquery-ui/jquery-ui.min.js'); ?>

<?php echo Html::script('public/global/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js'); ?>

<?php echo Html::script('public/global/plugins/bootstrap/js/bootstrap.min.js'); ?>

<?php echo Html::script('public/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js'); ?>

<?php echo Html::script('public/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js'); ?>

<?php echo Html::script('public/global/plugins/jquery.blockui.min.js'); ?>

<?php echo Html::script('public/global/plugins/jquery.cokie.min.js'); ?>

<?php echo Html::script('public/global/plugins/uniform/jquery.uniform.min.js'); ?>

<?php echo Html::script('public/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js'); ?>

<?php echo Html::script('public/global/scripts/metronic.js'); ?>

<?php echo Html::script('public/admin/layout/scripts/layout.js'); ?>

<?php echo Html::script('public/admin/layout/scripts/quick-sidebar.js'); ?>

<?php echo Html::script('public/admin/layout/scripts/demo.js'); ?>

<?php echo Html::script('public/admin/layout/scripts/portlet-draggable.js'); ?>

<!-- END PAGE LEVEL SCRIPTS -->
	<script>
        jQuery(document).ready(function() {
// initiate layout and plugins
            Metronic.init(); // init metronic core components
            Layout.init(); // init current layout
            QuickSidebar.init(); // init quick sidebar
            Demo.init(); // init demo features
            PortletDraggable.init();
        });
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>