<?php if(!defined("__XE__"))exit;?><!--#Meta:layouts/user_layout/user_layout.css--><?php $__tmp=array('layouts/user_layout/user_layout.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="user_layout">
	<div class="header">
		<h1>Site Logo</h1>
		<form action="<?php echo getUrl() ?>" method="get" class="search"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
			<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
			<input type="hidden" name="act" value="IS" />
			<input type="text" name="is_keyword" value="<?php echo $__Context->is_keyword ?>" title="<?php echo $__Context->lang->cmd_search ?>" />
			<input type="submit" value="<?php echo $__Context->lang->cmd_search ?>" />
		</form>
		<hr />
		<div class="gnb">
			.gnb
			<ul>
				<?php if($__Context->global_menu->list&&count($__Context->global_menu->list))foreach($__Context->global_menu->list as $__Context->key1=>$__Context->val1){ ?><li<?php if($__Context->val1['selected']){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a>
					<?php if($__Context->val1['list']){ ?><ul>
						<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li<?php if($__Context->val2['selected']){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?></a></li><?php } ?>
					</ul><?php } ?>
				</li><?php } ?>
			</ul>
		</div>
	</div>
	<hr />
	<div class="body">
		<div class="lnb">
			<div class="account">
				<img widget="login_info" skin="xe_official" />
			</div>
			<hr />
			.lnb
			<?php if($__Context->global_menu->list&&count($__Context->global_menu->list))foreach($__Context->global_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected']){ ?><h2><a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a></h2><?php }} ?>
			<?php if($__Context->global_menu->list&&count($__Context->global_menu->list))foreach($__Context->global_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected'] && $__Context->val1['list']){ ?><ul>
				<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li<?php if($__Context->val2['selected']){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?></a>
					<?php if($__Context->val2['list']){ ?><ul>
						<?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){ ?><li<?php if($__Context->val3['selected']){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val3['link'] ?></a>
						</li><?php } ?>
					</ul><?php } ?>
				</li><?php } ?>
			</ul><?php }} ?>
		</div>
		<hr />
		<div class="content">.content<?php echo $__Context->content ?></div>
	</div>
	<hr />
	<div class="footer">.footer</div>
</div>
