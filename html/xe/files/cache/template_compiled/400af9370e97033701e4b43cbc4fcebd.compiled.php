<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/integration_search/skins/default','header.html') ?>
<?php  $__Context->output = $__Context->search_result['document']  ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/integration_search/skins/default','document.html') ?>
<?php if(count($__Context->output->data)){ ?>
<div class="isMore"><a href="<?php echo getAutoEncodedUrl('where','document','page',1) ?>">more</a></div>
<?php } ?>
<?php  $__Context->output = $__Context->search_result['comment']  ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/integration_search/skins/default','comment.html') ?>
<?php if(count($__Context->output->data)){ ?>
<div class="isMore"><a href="<?php echo getAutoEncodedUrl('where','comment','page',1) ?>">more</a></div>
<?php } ?>
<?php  $__Context->output = $__Context->search_result['trackback']  ?>
<?php  $__Context->search_target = 'title';  ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/integration_search/skins/default','trackback.html') ?>
<?php if(count($__Context->output->data)){ ?>
<div class="isMore"><a href="<?php echo getAutoEncodedUrl('where','trackback','page',1) ?>">more</a></div>
<?php } ?>
<?php  $__Context->output = $__Context->search_result['multimedia']  ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/integration_search/skins/default','multimedia.html') ?>
<?php if(count($__Context->output->data)){ ?>
<div class="isMore"><a href="<?php echo getAutoEncodedUrl('where','multimedia','page',1) ?>">more</a></div>
<?php } ?>
<?php  $__Context->output = $__Context->search_result['file']  ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/integration_search/skins/default','file.html') ?>
<?php if(count($__Context->output->data)){ ?>
<div class="isMore"><a href="<?php echo getAutoEncodedUrl('where','file','page',1) ?>">more</a></div>
<?php } ?>
