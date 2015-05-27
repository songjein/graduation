<?php if(!defined("__XE__"))exit;
if($__Context->layout_info->colorset=='blue' || !$__Context->layout_info->colorset){ ?><!--#Meta:m.layouts/colorCode/css/Blue/layout.css--><?php $__tmp=array('m.layouts/colorCode/css/Blue/layout.css','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<?php if($__Context->layout_info->colorset=='gray'){ ?><!--#Meta:m.layouts/colorCode/css/Gray/layout.css--><?php $__tmp=array('m.layouts/colorCode/css/Gray/layout.css','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<?php if($__Context->layout_info->colorset=='red'){ ?><!--#Meta:m.layouts/colorCode/css/Red/layout.css--><?php $__tmp=array('m.layouts/colorCode/css/Red/layout.css','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<?php if($__Context->layout_info->colorset=='orange'){ ?><!--#Meta:m.layouts/colorCode/css/Orange/layout.css--><?php $__tmp=array('m.layouts/colorCode/css/Orange/layout.css','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<?php if($__Context->layout_info->colorset=='ngreena'){ ?><!--#Meta:m.layouts/colorCode/css/nGreenA/layout.css--><?php $__tmp=array('m.layouts/colorCode/css/nGreenA/layout.css','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<?php if($__Context->layout_info->colorset=='ngreenb'){ ?><!--#Meta:m.layouts/colorCode/css/nGreenB/layout.css--><?php $__tmp=array('m.layouts/colorCode/css/nGreenB/layout.css','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<!--#Meta:common/js/jquery.min.js--><?php $__tmp=array('common/js/jquery.min.js','','','-1000000');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:m.layouts/colorCode/js/layout.js--><?php $__tmp=array('m.layouts/colorCode/js/layout.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="skip"><a href="#ct">Skip to Content</a></div>
<header class="lo_head">
	<a href="<?php echo $__Context->layout_info->index_url ?>" class="btn_home">Home</a>
<?php if($__Context->layout_info->menu->main_menu->menu_srl){ ?>
	<?php if($__Context->act=='dispMenuMenu'){ ?>
	<a class="btn_menu" href="#" onclick="history.back(); return false;" title="<?php echo $__Context->lang->cmd_back ?>"><span class="b">Back</span></a>
	<?php }else{ ?>
	<a class="btn_menu" href="<?php echo getUrl('act','dispMenuMenu','menu_srl',$__Context->layout_info->menu->main_menu->menu_srl) ?>" title="<?php echo $__Context->lang->menu ?>"><span class="m">Menu</span></a>
	<?php } ?>
<?php } ?>
<?php if($__Context->layout_info->logo_image){ ?>
	<h1 class="title"><a href="<?php echo $__Context->layout_info->index_url ?>" class="img"><img src="<?php echo $__Context->layout_info->logo_image ?>"<?php if($__Context->layout_info->index_title){ ?> alt="<?php echo $__Context->layout_info->index_title ?>"<?php };
if(!$__Context->layout_info->index_title && Context::getSiteTitle()){ ?> alt="<?php echo Context::getSiteTitle() ?>"<?php } ?> /></a></h1>
<?php }elseif($__Context->layout_info->index_title){ ?>
	<h1 class="title"><span class="txt"><?php echo $__Context->layout_info->index_title ?></span></h1>
<?php } ?>
</header>
<hr class="head_hr" />
<section id="ct" class="ct">
<?php echo $__Context->content ?>
</section>
<footer class="lo_foot">
	<ul class="link">
	<?php if($__Context->is_logged){ ?>
	<li><a href="<?php echo getUrl('act','dispMemberLogout') ?>"><?php echo $__Context->lang->cmd_logout ?></a></li>
	<li><a href="<?php echo getUrl('act', 'dispMemberInfo') ?>"><?php echo $__Context->lang->cmd_view_member_info ?></a></li>
	<?php }elseif($__Context->act!='dispMemberLoginForm'){ ?>
	<li><a href="<?php echo getUrl('act','dispMemberLoginForm') ?>" ><?php echo $__Context->lang->cmd_login ?>...</a></li>
	<?php } ?>
	<li><a href="<?php echo getUrl('m',0) ?>">PC</a></li>
	<?php if(count($__Context->lang_supported)>1){ ?><li class="lang off">
		<a href="#" onclick="return false;" title="<?php echo $__Context->lang_type ?>"><?php echo $__Context->lang_supported[$__Context->lang_type] ?> <i class="icon_arr_draw"></i></a>
		<ul class="lang_lst">
		<?php if($__Context->lang_supported&&count($__Context->lang_supported))foreach($__Context->lang_supported as $__Context->key=>$__Context->val){ ?>
			<?php if($__Context->key != $__Context->lang_type){ ?><li><a href="<?php echo getUrl('act',$__Context->oldact,'l',$__Context->key) ?>"><?php echo $__Context->val ?></a></li><?php } ?>
		<?php } ?>
		</ul>
	</li><?php } ?>
	</ul>
	<p class="cr"><?php echo $__Context->layout_info->footer_title ?></p>
</footer>
