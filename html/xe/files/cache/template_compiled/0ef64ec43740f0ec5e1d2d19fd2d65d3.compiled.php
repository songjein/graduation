<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/point/tpl/js/point_admin.js--><?php $__tmp=array('modules/point/tpl/js/point_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="x_page-header">
	<h1><?php echo $__Context->lang->point ?> <?php echo $__Context->lang->cmd_management ?> <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_member_point" target="_blank"><?php echo $__Context->lang->help ?></a></h1>
</div>
<?php if($__Context->module=='admin'){ ?><ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->act=='dispPointAdminConfig'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispPointAdminConfig') ?>"><?php echo $__Context->lang->cmd_point_config ?></a></li>
	<li<?php if($__Context->act=='dispPointAdminModuleConfig'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispPointAdminModuleConfig') ?>"><?php echo $__Context->lang->cmd_point_module_config ?></a></li>
	<li<?php if($__Context->act=='dispPointAdminPointList'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispPointAdminPointList') ?>"><?php echo $__Context->lang->cmd_point_member_list ?></a></li>
</ul><?php } ?>
