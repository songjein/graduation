<?php if(!defined("__XE__"))exit;
Context::addJsFile("modules/module/ruleset/insertModuleSetup.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="./" method="post" class="x_form-horizontal" id="manageSelectedModuleSetup"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertModuleSetup" />
	<input type="hidden" name="module" value="module" />
	<input type="hidden" name="act" value="procModuleAdminModuleSetup" />
	<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" />
	<input type="hidden" name="module_srls" value="" />
	<input type="hidden" name="xe_validator_id" value="modules/module/tpl/manage_selected" />
	<div class="x_control-group">
		<label class="x_control-label" for="module_category_srl"><?php echo $__Context->lang->module_category ?></label>
		<div class="x_controls">
			<select name="module_category_srl" id="module_category_srl">
				<option value="" selected="selected"><?php echo $__Context->lang->keep_existing_value ?></option>
				<option value="0"><?php echo $__Context->lang->notuse ?></option>
				<?php if($__Context->module_category&&count($__Context->module_category))foreach($__Context->module_category as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->module_category_srl==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
			</select>
			<p class="x_help-inline"><?php echo $__Context->lang->about_module_category ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="layout_srl"><?php echo $__Context->lang->layout ?></label>
		<div class="x_controls">
			<select name="layout_srl" id="layout_srl">
				<option value="" selected="selected"><?php echo $__Context->lang->keep_existing_value ?></option>
				<option value="0"><?php echo $__Context->lang->notuse ?></option>
				<?php if($__Context->layout_list&&count($__Context->layout_list))foreach($__Context->layout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->module_info->layout_srl==$__Context->val->layout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
			</select>
			<p class="x_help-inline"><?php echo $__Context->lang->about_layout ?></p>
		</div>
	</div>
	<?php if(count($__Context->skin_list)){ ?><div class="x_control-group">
		<label class="x_control-label" for="skin"><?php echo $__Context->lang->skin ?></label>
		<div class="x_controls">
			<select name="skin" id="skin">
				<option value="" selected="selected"><?php echo $__Context->lang->keep_existing_value ?></option>
				<?php if($__Context->skin_list&&count($__Context->skin_list))foreach($__Context->skin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->skin==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
			</select>
			<p class="x_help-inline"><?php echo $__Context->lang->about_skin ?></p>
		</div>
	</div><?php } ?>
	<div class="x_control-group">
		<label class="x_control-label" for="use_mobile"><?php echo $__Context->lang->mobile_view ?></label>
		<div class="x_controls">
			<select name="use_mobile" id="use_mobile">
				<option value="" selected="selected"><?php echo $__Context->lang->keep_existing_value ?></option>
				<option value="Y"><?php echo $__Context->lang->use ?></option>
				<option value="N"><?php echo $__Context->lang->notuse ?></option>
			</select>
			<p class="x_help-inline"><?php echo $__Context->lang->about_mobile_view ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="mlayout_srl"><?php echo $__Context->lang->mobile_layout ?></label>
		<div class="x_controls">
			<select name="mlayout_srl" id="mlayout_srl">
				<option value="" selected="selected"><?php echo $__Context->lang->keep_existing_value ?></option>
				<option value="0"><?php echo $__Context->lang->notuse ?></option>
				<?php if($__Context->mlayout_list&&count($__Context->mlayout_list))foreach($__Context->mlayout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->module_info->mlayout_srl== $__Context->val->layout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
			</select>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="mskin"><?php echo $__Context->lang->mobile_skin ?></label>
		<div class="x_controls">
			<select name="mskin" id="mskin">
				<option value="" selected="selected"><?php echo $__Context->lang->keep_existing_value ?></option>
				<?php if($__Context->mskin_list&&count($__Context->mskin_list))foreach($__Context->mskin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->mskin== $__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
			</select>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="description"><?php echo $__Context->lang->description ?></label>
		<div class="x_controls">
			<textarea name="description" id="description" rows="8" cols="42"><?php echo htmlspecialchars($__Context->module_info->description, ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?></textarea>
			<p class="x_help-inline"><?php echo $__Context->lang->about_description ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="lang_header_text"><?php echo $__Context->lang->header_text ?></label>
		<div class="x_controls">
			<?php $__Context->use_multilang_textarea=true ?>
			<textarea id="header_text" name="header_text" class="lang_code" rows="8" cols="42"></textarea>
			<p class="x_help-inline" style="vertical-align:top"><?php echo $__Context->lang->about_header_text ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="lang_footer_text"><?php echo $__Context->lang->footer_text ?></label>
		<div class="x_controls">
			<textarea id="footer_text" name="footer_text" class="lang_code" rows="8" cols="42"></textarea>
			<p class="x_help-inline" style="vertical-align:top"><?php echo $__Context->lang->about_footer_text ?></p>
		</div>
	</div>
	<div class="btnArea">
		<input type="submit" class="x_btn x_btn-primary" value="<?php echo $__Context->lang->cmd_registration ?>" />
	</div>
</form>
