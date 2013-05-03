<!DOCTYPE html>
<html lang="zh">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?=(empty($page_title) ? '' : "{$page_title} - ") . SITE_NAME?></title>
	<meta name="keywords" content="<?=$mata_keywords?>">
	<meta name="description" content="<?=$mata_description?>">
	<?php $this->load->view('include/seg_header'); ?>
</head>
<body>
<?php $this->load->view('include/seg_navbar'); ?>
<div class="container">
	<?php $this->load->view('include/seg_crumb'); ?>
	<div class="row">
		<div class="span3">
			left
		</div>
		<div class="span6"><?=$main_content?></div>
		<div class="span3">
			right
		</div>
	</div>
</div>
<?php $this->load->view('include/seg_footer'); ?>
<?php $this->load->view('include/seg_back_to_top'); ?>
</body>
</html>