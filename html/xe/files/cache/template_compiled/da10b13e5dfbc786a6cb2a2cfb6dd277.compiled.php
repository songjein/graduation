<?php if(!defined("__XE__"))exit;?><!--#Meta:widgets/login_info/skins/default/default.login.css--><?php $__tmp=array('widgets/login_info/skins/default/default.login.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('widgets/login_info/skins/default','login.xml');$__xmlFilter->compile(); ?>
<!--#Meta:widgets/login_info/skins/default/default.login.js--><?php $__tmp=array('widgets/login_info/skins/default/default.login.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php Context::addJsFile("./files/ruleset/login.xml", FALSE, "", 0, "body", TRUE, "") ?><form id="fo_login_widget" action="<?php echo getUrl('','act','procMemberLogin') ?>" method="post"  class="account"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="@login" />
	<a href="#acField"><?php echo $__Context->lang->cmd_login ?></a>
	<fieldset id="acField">
		<h2><?php echo $__Context->lang->cmd_login ?></h2>
		<input type="hidden" name="act" value="procMemberLogin" />
		<input type="hidden" name="success_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
		<input type="hidden" name="xe_validator_id" value="widgets/login_info/skins/default/login_form/1" />
		<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'widgets/login_info/skins/default/login_form/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
			<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
		</div><?php } ?>
		<div class="idpw">
			<?php if($__Context->member_config->identifier != 'email_address'){ ?><label for="user_id"><?php echo $__Context->lang->user_id ?></label><?php } ?>
			<?php if($__Context->member_config->identifier != 'email_address'){ ?><input name="user_id" id="user_id" type="text" required /><?php } ?>
			<?php if($__Context->member_config->identifier == 'email_address'){ ?><label for="user_id"><?php echo $__Context->lang->email_address ?></label><?php } ?>
			<?php if($__Context->member_config->identifier == 'email_address'){ ?><input name="user_id" id="user_id" type="email" required /><?php } ?>
			<label for="user_pw"><?php echo $__Context->lang->password ?></label>
			<input name="password" id="user_pw" type="password" required />
			<p class="keep">
				<input type="checkbox" name="keep_signed" id="keep_signed" value="Y" />
				<label for="keep_signed"><?php echo $__Context->lang->keep_signed ?></label>
			</p>
			<p class="warning"><?php echo $__Context->lang->about_keep_warning ?></p>
		</div>
		<input type="submit" value="<?php echo $__Context->lang->cmd_login ?>" />
		<ul class="help">
			<li><a href="<?php echo getUrl('act','dispMemberSignUpForm') ?>"><?php echo $__Context->lang->cmd_signup ?></a></li>
			<li><a href="<?php echo getUrl('act','dispMemberFindAccount') ?>"><?php echo $__Context->lang->cmd_find_member_account ?></a></li>
		</ul>
	</fieldset>
</form>
