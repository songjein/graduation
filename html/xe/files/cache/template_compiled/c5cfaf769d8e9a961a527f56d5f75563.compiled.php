<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/skins/default','common_header.html') ?>
<h1><?php echo $__Context->lang->msg_rechecked_password ?></h1>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/member/skins/default/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<p><?php echo $__Context->lang->about_rechecked_password ?></p>
<?php Context::addJsFile("modules/member/ruleset/recheckedPassword.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="./index.php" method="post" ><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="recheckedPassword" />
	<input type="hidden" name="act" value="procMemberModifyInfoBefore" />
	<input type="hidden" name="module" value="member" />
	<input type="hidden" name="xe_validator_id" value="modules/member/skins/default/1" />
	<div>
		<input type="email" value="<?php echo $__Context->identifierValue ?>" readonly title="<?php echo $__Context->lang->email ?>" />
	</div>
	<span class="input-append">
		<input type="password" name="password" required placeholder="<?php echo $__Context->lang->password ?>" title="<?php echo $__Context->lang->password ?>" />
		<input type="submit" value="<?php echo $__Context->lang->cmd_confirm ?>" class="btn btn-inverse" />
	</span>
</form>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/skins/default','common_footer.html') ?>
