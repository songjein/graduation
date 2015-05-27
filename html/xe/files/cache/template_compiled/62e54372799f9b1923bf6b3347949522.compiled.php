<?php if(!defined("__XE__"))exit;?><!--#Meta:common/js/jquery.min.js--><?php $__tmp=array('common/js/jquery.min.js','','','-1000000');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:common/js/xe.min.js--><?php $__tmp=array('common/js/xe.min.js','','','-1000000');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/member/m.skins/default/css/msignup.css--><?php $__tmp=array('modules/member/m.skins/default/css/msignup.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="hx h2"><h2><?php echo $__Context->lang->cmd_find_member_account_with_email ?></h2></div>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/member/m.skin/default/find_member_account/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<?php Context::addJsFile("modules/member/ruleset/findAccount.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="./"  method="post" class="ff"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="findAccount" />
	<input type="hidden" name="module" value="member" />
	<input type="hidden" name="act" value="procMemberFindAccount" />
	<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
	<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
	<input type="hidden" name="success_return_url" value="<?php echo getUrl('act', 'dispMemberFindAccount') ?>" />
	<input type="hidden" name="xe_validator_id" value="modules/member/m.skin/default/find_member_account/1" />
	<ul>
		<li>
			<label for="email_address1"><?php echo $__Context->lang->email_address ?></label>
			<input id="email_address1" type="email" name="email_address" />
		</li>
	</ul>
	<div class="bna">
		<input type="submit" class="bn dark" value="<?php echo $__Context->lang->cmd_send_mail ?>" />
	</div>
</form>
<?php if(count($__Context->lang->find_account_question_items)>1){ ?>
	<div class="hx h2"><h2><?php echo $__Context->lang->cmd_find_member_account_with_email_question ?></h2></div>
	<p style="margin:3px 10px;color:#666"><?php echo $__Context->lang->about_find_account_question ?></p>
	<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/member/m.skin/default/find_member_account/2'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
		<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
	</div><?php } ?>
	<?php Context::addJsFile("./files/ruleset/find_member_account_by_question.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="./" method="post" class="ff" ><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="@find_member_account_by_question" />
		<input type="hidden" name="module" value="member" />
		<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
		<input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />	
		<input type="hidden" name="act" value="procMemberFindAccountByQuestion" />
		<input type="hidden" name="success_return_url" value="<?php echo getUrl('', 'act', 'dispMemberGetTempPassword') ?>" />
		<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
		<input type="hidden" name="xe_validator_id" value="modules/member/m.skin/default/find_member_account/2" />
		<ul>
			<?php if($__Context->identifier == 'user_id'){ ?><li>
				<label for="user_id2"><?php echo $__Context->lang->user_id ?></label>
				<input type="text" name="user_id" id="user_id2" />
			</li><?php } ?>
			<li>
				<label for="email_address2"><?php echo $__Context->lang->email_address ?></label>
				<input type="email" name="email_address" id="email_address2" />
			</li>
			<li>
				<label for="question"><?php echo $__Context->lang->find_account_question ?></label>
				<select id="question" name="find_account_question" style="width:290px;display:block;">
				<?php for($__Context->i=1,$__Context->c=count($__Context->lang->find_account_question_items);$__Context->i<$__Context->c;$__Context->i++){ ?>
					<option value="<?php echo $__Context->i ?>"><?php echo $__Context->lang->find_account_question_items[$__Context->i] ?></option>
				<?php } ?>
				</select>
				<input type="text" name="find_account_answer" value="" />
			</li>
		</ul>
		<div class="bna">
			<input type="submit" class="bn dark" value="<?php echo $__Context->lang->cmd_get_temp_password ?>" />
		</div>
	</form>
<?php } ?>