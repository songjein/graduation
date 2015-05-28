<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/message/m.skins/default/message.css--><?php $__tmp=array('modules/message/m.skins/default/message.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="bd">
	<div class="hx h2">
		<h2><?php echo $__Context->system_message ?></h2>
	</div>
	<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/message/m.skin/default/system_message/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
		<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
	</div><?php } ?>
	<div class="co">
		<?php if(!$__Context->is_logged){ ?>
        <?php  Context::addJsFile("./common/js/jquery.js", true, '', -100000)  ?>
        <?php  Context::addJsFile("./common/js/js_app.js", true, '', -100000)  ?>
        <?php  Context::addJsFile("./common/js/x.js", true, '', -100000)  ?>
        <?php  Context::addJsFile("./common/js/common.js", true, '', -100000)  ?>
        <?php  Context::addJsFile("./common/js/xml_handler.js", true, '', -100000)  ?>
        <?php  Context::addJsFile("./common/js/xml_js_filter.js", true, '', -100000)  ?>
		<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/message/m.skins/default/filter','openid_login.xml');$__xmlFilter->compile(); ?>
		<div class="mLogin">
			<?php Context::addJsFile("./files/ruleset/login.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="<?php echo getUrl('','act','procMemberLogin') ?>" method="post"  class="ff"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="@login" />
			<input type="hidden" name="module" value="member" />
			<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" />
			<input type="hidden" name="xe_validator_id" value="modules/message/m.skin/default/system_message/1" />
				<fieldset>
					<ul>
						<?php if($__Context->member_config->identifier == 'user_id'){ ?><li><label for="uid"><?php echo $__Context->lang->user_id ?></label><input type="text" name="user_id" id="uid" required autofocus /></li><?php } ?>
						<?php if($__Context->member_config->identifier != 'user_id'){ ?><li><label for="uid"><?php echo $__Context->lang->email_address ?></label><input type="email" name="user_id" id="uid" required autofocus /></li><?php } ?>
						<li><label for="upw"><?php echo $__Context->lang->password ?></label><input type="password" name="password" id="upw" value="" /></li>
					</ul>
					<p>
						<input type="checkbox" name="keep_signed" id="keepid" value="Y" />
						<label for="keepid"><?php echo $__Context->lang->keep_signed ?></label>
					</p>
					<div class="message info" id="keep_msg" style="display:none;">
						<p><?php echo $__Context->lang->about_keep_warning ?></p>
					</div>
					<input type="submit" value="<?php echo $__Context->lang->cmd_login ?>" class="bn dark" />
					<ul class="hp">
						<li><a href="<?php echo getUrl('','act','dispMemberFindAccount') ?>"><span><?php echo $__Context->lang->cmd_find_member_account ?></span></a></li>
						<li><a href="<?php echo getUrl('','act','dispMemberSignUpForm') ?>"><span><?php echo $__Context->lang->cmd_signup ?></span></a></li>
					</ul>
				</fieldset>
			</form>
		</div>
		<?php } ?>
		<?php if($__Context->is_logged){ ?>
		<div class="logOut">
			<a href="<?php echo getUrl('act','dispMemberLogout','module','') ?>" class="bn dark"><?php echo $__Context->lang->cmd_logout ?></a>
		</div>
		<?php } ?>
	</div>
</div>
<script>
jQuery(function($){
	var keep_msg = $('#keep_msg');
	keep_msg.hide();
	$('#keepid').change(function(){
		if($(this).is(':checked')){
			keep_msg.slideDown(200);
		} else {
			keep_msg.slideUp(200);
		}
	});
});
</script>