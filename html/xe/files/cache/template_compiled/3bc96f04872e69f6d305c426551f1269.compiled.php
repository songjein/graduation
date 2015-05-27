<?php if(!defined("__XE__"))exit;?><!--#Meta:common/js/jquery.min.js--><?php $__tmp=array('common/js/jquery.min.js','','','-1000000');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/member/m.skins/default/css/mlogin.css--><?php $__tmp=array('modules/member/m.skins/default/css/mlogin.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="bd">
<div class="hx h2">
	<h2><?php echo $__Context->lang->cmd_login ?></h2>
</div>
	<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/member/m.skin/default/login_form/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
		<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
	</div><?php } ?>
	<form action="./" method="POST" class="ff"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="member" />
		<input type="hidden" name="act" value="procMemberLogin" />
		<input type="hidden" name="redirect_url" value="<?php echo getUrl('act','') ?>" />
		<input type="hidden" name="xe_validator_id" value="modules/member/m.skin/default/login_form/1" />
		<ul>
			<li><label for="id"><?php if($__Context->identifier == 'user_id'){;
echo $__Context->lang->user_id;
}else{;
echo $__Context->lang->email_address;
} ?></label><input name="user_id" type="<?php if($__Context->identifier == 'user_id'){ ?>text<?php }else{ ?>email<?php } ?>" id="id" value="" /></li>
			<li><label for="pw"><?php echo $__Context->lang->password ?></label><input name="password" type="password" id="pw" value="" /></li>
		</ul>
		<div class="hp" id="keep_msg" style="display:none;">
			<p><?php echo $__Context->lang->about_keep_warning ?></p>
		</div>
		<div class="bna">
			<div class="fl"><input name="keep_signed" type="checkbox" value="Y" id="autoLogin" /> <label for="autoLogin"><?php echo $__Context->lang->keep_signed ?></label></div>
			<div class="fr"><button type="submit" class="bn dark"><?php echo $__Context->lang->cmd_login ?></button></div>
		</div>
		<ul class="hp">
			<li><a href="<?php echo getUrl('','act','dispMemberFindAccount') ?>"><span><?php echo $__Context->lang->cmd_find_member_account ?></span></a></li>
			<li><a href="<?php echo getUrl('','act','dispMemberSignUpForm') ?>"><span><?php echo $__Context->lang->cmd_signup ?></span></a></li>
		</ul>
	</form>
</div>
<script>
jQuery(function($){
	var keep_msg = $('#keep_msg');
	keep_msg.hide();
	$('#autoLogin').change(function(){
		if($(this).is(':checked')){
			keep_msg.slideDown(200);
		} else {
			keep_msg.slideUp(200);
		}
	});
});
</script>
