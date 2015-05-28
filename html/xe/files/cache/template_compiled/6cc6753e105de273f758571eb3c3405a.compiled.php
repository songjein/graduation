<?php if(!defined("__XE__"))exit;?><!--#Meta:layouts/xe_official/js/xe_official.js--><?php $__tmp=array('layouts/xe_official/js/xe_official.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->layout_info->colorset=='default' || !$__Context->layout_info->colorset){ ?><!--#Meta:layouts/xe_official/css/default.css--><?php $__tmp=array('layouts/xe_official/css/default.css','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<?php if($__Context->layout_info->colorset=='white'){ ?><!--#Meta:layouts/xe_official/css/white.css--><?php $__tmp=array('layouts/xe_official/css/white.css','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<?php if($__Context->layout_info->colorset=='black'){ ?><!--#Meta:layouts/xe_official/css/black.css--><?php $__tmp=array('layouts/xe_official/css/black.css','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<?php if($__Context->layout_info->background_image){ ?><style>
body{background:url(<?php echo $__Context->layout_info->background_image ?>) repeat-x left top;}
</style><?php } ?>
<?php if(!$__Context->layout_info->colorset){;
$__Context->layout_info->colorset = "default";
} ?>
<div class="xe">
	<div class="header">
		<h1>
			<?php if($__Context->layout_info->logo_image){ ?><a href="<?php echo $__Context->layout_info->index_url ?>"><img src="<?php echo $__Context->layout_info->logo_image ?>" alt="logo" border="0" /></a><?php } ?>
			<?php if(!$__Context->layout_info->logo_image){ ?><a href="<?php echo $__Context->layout_info->index_url ?>"><?php echo $__Context->layout_info->logo_image_alt ?></a><?php } ?>
		</h1>
		<div class="language">
			<strong title="<?php echo $__Context->lang_type ?>"><?php echo $__Context->lang_supported[$__Context->lang_type] ?></strong> <button type="button" class="toggle"><img src="/xe/layouts/xe_official/images/<?php echo $__Context->layout_info->colorset ?>/buttonLang.gif" alt="Select Language" width="87" height="15" /></button>
			<ul class="selectLang">
				<?php if($__Context->lang_supported&&count($__Context->lang_supported))foreach($__Context->lang_supported as $__Context->key=>$__Context->val){;
if($__Context->key!= $__Context->lang_type){ ?><li><button type="button" onclick="doChangeLangType('<?php echo $__Context->key ?>');return false;"><?php echo $__Context->val ?></button></li><?php }} ?>
			</ul>
		</div>
		<div class="gnb">
			<ul>
				<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){ ?><li<?php if($__Context->val1['selected']){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a>
					<?php if($__Context->val1['list']){ ?><ul>
						<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li<?php if($__Context->val2['selected']){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?></a></li><?php } ?>
					</ul><?php } ?>
				</li><?php } ?>
			</ul>
		</div>
		<form action="<?php echo getUrl() ?>" method="post" class="iSearch"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
			<?php if($__Context->vid){ ?><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><?php } ?>
			<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
			<input type="hidden" name="act" value="IS" />
			<input type="hidden" name="search_target" value="title_content" />
			<input name="is_keyword" type="text" class="iText" title="keyword" />
			<input type="image" src="/xe/layouts/xe_official/images/<?php echo $__Context->layout_info->colorset ?>/buttonSearch.gif" alt="<?php echo $__Context->lang->cmd_search ?>" class="submit" />
		</form>
	</div>
	<div class="body">
		<div class="lnb">
			<img widget="login_info" skin="xe_official" colorset="<?php echo $__Context->layout_info->colorset ?>" />
			<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected']){ ?><h2><a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a></h2><?php }} ?>
			<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected'] && $__Context->val1['list']){ ?><ul class="locNav">
				<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li<?php if($__Context->val2['selected']){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?></a>
					<?php if($__Context->val2['list']){ ?><ul>
						<?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){ ?><li<?php if($__Context->val3['selected']){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val3['link'] ?></a></li><?php } ?>
					</ul><?php } ?>
				</li><?php } ?>
			</ul><?php }} ?>
		</div>
		<div class="content xe_content">
			<?php echo $__Context->content ?>
		</div>
	</div>
	<div class="footer">
		<p><a href="http://xpressengine.com/" target="_blank">Powered by <strong>XE</strong></a></p>
	</div>
</div>
