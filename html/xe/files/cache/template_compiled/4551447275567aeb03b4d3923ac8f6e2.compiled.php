<?php if(!defined("__XE__"))exit;?><script>
<?php if($__Context->msg){ ?>
	parent.alertUploadMessage('<?php echo $__Context->msg ?>');
<?php }else{ ?>
	parent.afterUploadConfigImage('<?php echo $__Context->name ?>', '<?php echo $__Context->fileName ?>', '<?php echo $__Context->tmpFileName ?>');
<?php } ?>
</script>
