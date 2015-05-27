<?php if(!defined("__XE__"))exit;
$__Context->lang_type = Context::getLangType();
	$__Context->ssl_actions = Context::getSSLActions();
	$__Context->css_files=Context::getCssFile();
	$__Context->js_files=Context::getJsFile();
 ?>
<!DOCTYPE html>
<html lang="<?php echo $__Context->lang_type ?>">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
<title><?php echo Context::getBrowserTitle() ?></title>
<?php if($__Context->css_files&&count($__Context->css_files))foreach($__Context->css_files as $__Context->key => $__Context->css_file){ ?>
	<?php if($__Context->css_file['targetie']){ ?><!--[if <?php echo $__Context->css_file['targetie'] ?>]><?php } ?>
	<link rel="stylesheet" href="<?php echo $__Context->css_file['file'] ?>"<?php if($__Context->css_file['media'] != 'all'){ ?> media="<?php echo $__Context->css_file['media'] ?>"<?php } ?> />
	<?php if($__Context->css_file['targetie']){ ?><![endif]--><?php } ?>
<?php } ?>
<?php if($__Context->js_files&&count($__Context->js_files))foreach($__Context->js_files as $__Context->key => $__Context->js_file){ ?>
	<?php if($__Context->js_file['targetie']){ ?><!--[if <?php echo $__Context->js_file['targetie'] ?>]><?php } ?>
	<script src="<?php echo $__Context->js_file['file'] ?>"></script>
	<?php if($__Context->js_file['targetie']){ ?><![endif]--><?php } ?>
<?php } ?>
<!--[if lt IE 9]><script src="/xe/common/js/html5.js"></script><![endif]-->
<?php if($__Context->rss_url){ ?>
<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo $__Context->rss_url ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom" href="<?php echo $__Context->atom_url ?>" />
<?php } ?>
<?php if($__Context->general_rss_url){ ?>
<link rel="alternate" type="application/rss+xml" title="Site RSS" href="<?php echo $__Context->general_rss_url ?>" />
<link rel="alternate" type="application/atom+xml" title="Site Atom" href="<?php echo $__Context->general_atom_url ?>" />
<?php } ?>
<?php if($__Context->favicon_url){ ?><link rel="shortcut icon" href="<?php echo $__Context->favicon_url ?>" /><?php } ?>
<?php if($__Context->mobicon_url){ ?><link rel="apple-touch-icon" href="<?php echo $__Context->mobicon_url ?>" /><?php } ?>
<?php echo Context::getHtmlHeader() ?>
<script>
//<![CDATA[
var current_url = "<?php echo $__Context->current_url ?>";
var request_uri = "<?php echo $__Context->request_uri ?>";
<?php if($__Context->vid){ ?>var xeVid = "<?php echo $__Context->vid ?>";<?php } ?>
var current_mid = "<?php echo $__Context->mid ?>";
var waiting_message = "<?php echo $__Context->lang->msg_call_server ?>";
var ssl_actions = new Array(<?php if(count($__Context->ssl_actions)){ ?>"<?php echo implode('","',array_keys($__Context->ssl_actions)) ?>"<?php } ?>);
var default_url = "<?php echo Context::getDefaultUrl() ?>";
<?php if(Context::get('_http_port')){ ?>var http_port = <?php echo Context::get("_http_port") ?>;<?php } ?>
<?php if(Context::get('_https_port')){ ?>var https_port = <?php echo Context::get("_https_port") ?>;<?php } ?>
<?php if(Context::get('_use_ssl') && Context::get('_use_ssl') == 'always'){ ?>var enforce_ssl = true;<?php } ?>
//]]>
</script>
</head>
<body<?php echo Context::getBodyClass() ?>>
<?php echo Context::getBodyHeader() ?>
<?php echo $__Context->content ?>
<?php echo Context::getHtmlFooter() ?>
<?php  $__Context->js_body_files = Context::getJsFile('body')  ?>
<?php if($__Context->js_body_files&&count($__Context->js_body_files))foreach($__Context->js_body_files as $__Context->key => $__Context->js_file){ ?>
	<?php if($__Context->js_file['targetie']){ ?><!--[if <?php echo $__Context->js_file['targetie'] ?>]><?php } ?>
	<script src="<?php echo $__Context->js_file['file'] ?>"></script>
	<?php if($__Context->js_file['targetie']){ ?><![endif]--><?php } ?>
<?php } ?>
</body>
</html>
