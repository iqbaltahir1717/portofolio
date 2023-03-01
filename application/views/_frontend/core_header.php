<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title><?php echo $setting[0]->setting_appname; ?></title>



	<meta name="title" content="<?php echo $setting[0]->setting_appname; ?>">

	<meta name="description" content="<?php echo $setting[0]->setting_about; ?>">

	<meta name="keywords" content="website, designer, ui, indonesia, <?php echo $setting[0]->setting_appname; ?>, <?php echo $setting[0]->setting_owner_name; ?>">

	<meta name="robots" content="index, nofollow">

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<meta name="author" content="<?php echo $setting[0]->setting_owner_name; ?>">



	<!-- Favicons -->

	<link href="<?php echo base_url(); ?>assets/core-images/<?php echo $setting[0]->setting_logo; ?>" rel="icon">

	<link href="<?php echo base_url(); ?>assets/core-images/<?php echo $setting[0]->setting_logo; ?>" rel="apple-touch-icon">

	<!-- Vendor CSS Files -->

	<link href="<?php echo base_url() ?>assets/core-front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<link href="<?php echo base_url() ?>assets/core-front/vendor/icofont/icofont.min.css" rel="stylesheet">

	<link href="<?php echo base_url() ?>assets/core-front/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

	<link href="<?php echo base_url() ?>assets/core-front/vendor/animate.css/animate.min.css" rel="stylesheet">

	<link href="<?php echo base_url() ?>assets/core-front/vendor/remixicon/remixicon.css" rel="stylesheet">

	<link href="<?php echo base_url() ?>assets/core-front/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

	<link href="<?php echo base_url() ?>assets/core-front/vendor/venobox/venobox.css" rel="stylesheet">

	<link href="<?php echo base_url() ?>assets/core-front/vendor/aos/aos.css" rel="stylesheet">

	<link href="<?php echo base_url() ?>assets/core-front/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/core-front/css/style.css" rel="stylesheet">
</head>

<style>
	.gumroad-follow-form-embed {
		zoom: 1;
	}

	.gumroad-follow-form-embed:before,
	.gumroad-follow-form-embed:after {
		display: table;
		line-height: 0;
		content: "";
	}

	.gumroad-follow-form-embed:after {
		clear: both;
	}

	.gumroad-follow-form-embed * {
		margin: 0;
		border: 0;
		padding: 0;
		outline: 0;
		box-sizing: border-box !important;
		float: left !important;
	}

	.gumroad-follow-form-embed input {
		border-radius: 0;
		/* font-family: -apple-system, ".SFNSDisplay-Regular", "Helvetica Neue", Helvetica, Arial, sans-serif; */
		font-size: 14px;
		line-height: 20px;
		background: #fff;
		border: 1px solid #ddd;
		border-right: 0;
		color: #aaa;
		padding: 20px;
		box-shadow: inset 0 1px 0 rgba(0, 0, 0, 0.02);
		text-rendering: optimizeLegibility;
		font-smoothing: antialiased;
		-webkit-appearance: none;
		-moz-appearance: caret;
		width: 65% !important;
		height: 40px !important;
	}

	.gumroad-follow-form-embed button {
		border-radius: 0;
		border-top-left-radius: 0;
		border-bottom-left-radius: 0;
		box-shadow: 0 1px 1px rgba(0, 0, 0, 0.12);
		-webkit-transition: all .05s ease-in-out;
		transition: all .05s ease-in-out;
		/* display: inline-block; */
		cursor: pointer;
		color: #fff;
		font-size: 14px;
		line-height: 100%;
		height: 41.4px !important;
		width: 35% !important;
	}
</style>