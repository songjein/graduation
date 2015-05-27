<?php if(!defined("__XE__"))exit;?><!--#Meta:widgets/login_info/skins/default/default.login.css--><?php $__tmp=array('widgets/login_info/skins/default/default.login.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('widgets/login_info/skins/default','logout.xml');$__xmlFilter->compile(); ?>
<!--#Meta:widgets/login_info/skins/default/default.login.js--><?php $__tmp=array('widgets/login_info/skins/default/default.login.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="account">
	<ul class="info">
		<li><a href="<?php echo getUrl('act','dispMemberInfo','member_srl','') ?>" title="<?php echo $__Context->lang->last_login ?>: <?php echo zDate($__Context->logged_info->last_login, "Y-m-d") ?>" class="user"><?php echo $__Context->logged_info->nick_name ?></a></li>
		<?php if($__Context->logged_info->is_admin == 'Y'){ ?><li>
			<a href="<?php echo getUrl('', 'module','admin') ?>" title="<?php echo $__Context->lang->admin ?>" class="admin"><?php echo $__Context->lang->cmd_management ?></a>
		</li><?php } ?>
		<li><a href="<?php echo getUrl('act','dispMemberLogout') ?>" class="logout"><?php echo $__Context->lang->cmd_logout ?></a></li>
	</ul>
</div>
