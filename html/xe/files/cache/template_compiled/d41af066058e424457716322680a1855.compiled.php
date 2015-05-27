<?php if(!defined("__XE__"))exit;?><!--#Meta:m.layouts/simpleGray/mx.css--><?php $__tmp=array('m.layouts/simpleGray/mx.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="eg hd">
	<h1 class="h1"><a href="<?php echo $__Context->layout_info->index_url ?>"><?php echo $__Context->layout_info->index_title ?></a></h1>
	<?php if($__Context->layout_info->menu->main_menu->menu_srl){ ?>
	<div class="fr"><a href="<?php echo getUrl('act','dispMenuMenu','menu_srl',$__Context->layout_info->menu->main_menu->menu_srl) ?>" class="bn"><?php echo $__Context->lang->menu ?></a></div>
	<?php } ?>
</div>
<?php echo $__Context->content ?>
<ul class="eg ft">
	<?php if($__Context->is_logged){ ?>
	<li class="fl"><a href="<?php echo getUrl('act','dispMemberLogout') ?>"><?php echo $__Context->lang->cmd_logout ?></a></li>
	<li class="fl"><a href="<?php echo getUrl('act', 'dispMemberInfo') ?>"><?php echo $__Context->lang->cmd_view_member_info ?></a></li>
	<?php }elseif($__Context->act!='dispMemberLoginForm'){ ?>
	<li class="fl"><a href="<?php echo getUrl('act','dispMemberLoginForm') ?>"><?php echo $__Context->lang->cmd_login ?>...</a></li>
	<?php } ?>
	<li class="fr"><a href="<?php echo getUrl('m',0) ?>">PC</a></li>
	<?php if(count($__Context->lang_supported)>1){ ?><li class="fr"><a href="<?php echo getUrl('act','dispModuleChangeLang','oldact',$__Context->act) ?>">LANG</a></li><?php } ?>
</ul>
<p class="cr"><?php echo $__Context->layout_info->index_title ?></p>
