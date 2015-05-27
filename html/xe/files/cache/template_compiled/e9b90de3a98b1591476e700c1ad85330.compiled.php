<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/tpl','header.html') ?>
<!--#Meta:modules/module/tpl/js/multi_order.js--><?php $__tmp=array('modules/module/tpl/js/multi_order.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/board/tpl/board_insert/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<?php Context::addJsFile("modules/board/ruleset/insertBoard.xml", FALSE, "", 0, "body", TRUE, "") ?><form  class="x_form-horizontal" action="./" method="post" enctype="multipart/form-data"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertBoard" />
	<input type="hidden" name="module" value="board" />
	<input type="hidden" name="act" value="procBoardAdminInsertBoard" />
	<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
	<input type="hidden" name="module_srl" value="<?php echo $__Context->module_info->module_srl ?>" />
	<?php if($__Context->mid || $__Context->module_srl){ ?><input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" /><?php } ?>
	<?php if($__Context->logged_info->is_admin != 'Y'){ ?><input type="hidden" name="board_name" value="<?php echo $__Context->module_info->mid ?>" /><?php } ?>
	<input type="hidden" name="xe_validator_id" value="modules/board/tpl/board_insert/1" />
	<section class="section">
		<h1><?php echo $__Context->lang->subtitle_primary ?></h1>
		<?php if($__Context->logged_info->is_admin == 'Y'){ ?><div class="x_control-group">
			<label class="x_control-label" for="board_name"><?php echo $__Context->lang->mid ?></label>
			<div class="x_controls">
				<input type="text" name="board_name" id="board_name" value="<?php echo $__Context->module_info->mid ?>" />
				<a href="#module_name_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="module_name_help" class="x_help-block" hidden><?php echo $__Context->lang->about_mid ?></p>
			</div>
		</div><?php } ?>
		<div class="x_control-group">
			<label class="x_control-label" for="lang_browser_title"><?php echo $__Context->lang->browser_title ?></label>
			<div class="x_controls">
				<input type="text" name="browser_title" id="browser_title" value="<?php if(strpos($__Context->module_info->browser_title, '$user_lang->') === false){;
echo $__Context->module_info->browser_title;
}else{;
echo htmlspecialchars($__Context->module_info->browser_title);
} ?>" class="lang_code" />
				<a href="#browser_title_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="browser_title_help" class="x_help-block" hidden><?php echo $__Context->lang->about_browser_title ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="layout_srl"><?php echo $__Context->lang->layout ?></label>
			<div class="x_controls">
				<select name="layout_srl" id="layout_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->layout_list&&count($__Context->layout_list))foreach($__Context->layout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->module_info->layout_srl== $__Context->val->layout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
				</select>
				<a href="#layout_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="layout_help" class="x_help-block" hidden><?php echo $__Context->lang->about_layout ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="skin"><?php echo $__Context->lang->skin ?></label>
			<div class="x_controls">
				<select name="skin" id="skin" style="width:auto">
					<?php if($__Context->skin_list&&count($__Context->skin_list))foreach($__Context->skin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->skin== $__Context->key || (!$__Context->module_info->skin && $__Context->key=='default')){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="lang_header_text"><?php echo $__Context->lang->header_text ?></label>
			<div class="x_controls">
				<textarea name="header_text" id="header_text" class="lang_code" rows="8" cols="42" placeholder="<?php echo $__Context->lang->about_header_text ?>"><?php if(strpos($__Context->module_info->header_text, '$user_lang->') === false){;
echo $__Context->module_info->header_text;
}else{;
echo htmlspecialchars($__Context->module_info->header_text);
} ?></textarea>
				<a href="#header_text_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="header_text_help" class="x_help-block" hidden><?php echo $__Context->lang->about_header_text ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="lang_footer_text"><?php echo $__Context->lang->footer_text ?></label>
			<div class="x_controls">
				<textarea name="footer_text" id="footer_text" class="lang_code" rows="8" cols="42" placeholder="<?php echo $__Context->lang->about_footer_text ?>"><?php if(strpos($__Context->module_info->footer_text, '$user_lang->') === false){;
echo $__Context->module_info->footer_text;
}else{;
echo htmlspecialchars($__Context->module_info->footer_text);
} ?></textarea>
				<a href="#footer_text_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="footer_text_help" class="x_help-block" hidden><?php echo $__Context->lang->about_footer_text ?></p>
			</div>
		</div>
	</section>
	<section class="section">
		<h1><?php echo $__Context->lang->mobile_settings ?></h1>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->mobile_view ?></label>
			<div class="x_controls">
				<label class="x_inline" for="use_mobile"><input type="checkbox" name="use_mobile" id="use_mobile" value="Y"<?php if($__Context->module_info->use_mobile == 'Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->about_mobile_view ?></label>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="mlayout_srl"><?php echo $__Context->lang->mobile_layout ?></label>
			<div class="x_controls">
				<select name="mlayout_srl" id="mlayout_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->mlayout_list&&count($__Context->mlayout_list))foreach($__Context->mlayout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->module_info->mlayout_srl== $__Context->val->layout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
				</select>
				<a href="#mobile_layout_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="mobile_layout_help" class="x_help-block" hidden><?php echo $__Context->lang->about_layout ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="mskin"><?php echo $__Context->lang->mobile_skin ?></label>
			<div class="x_controls">
				<select name="mskin" id="mskin">
					<?php if($__Context->mskin_list&&count($__Context->mskin_list))foreach($__Context->mskin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->mskin== $__Context->key || (!$__Context->module_info->skin && $__Context->key=='default')){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
				<a href="#mobile_skin_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="mobile_skin_help" class="x_help-block" hidden><?php echo $__Context->lang->about_skin ?></p>
			</div>
		</div>
	</section>
	<section class="section collapsed">
		<h1><?php echo $__Context->lang->subtitle_advanced ?></h1>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->cmd_list_setting ?></label>
			<div class="x_controls">
				<?php $__Context->list = array_keys($__Context->list_config) ?>
				<input type="hidden" name="list" value="<?php echo implode(',', $__Context->list) ?>" />
				<p style="padding:3px 0 0 0"><?php echo $__Context->lang->about_list_config ?></p>
				<div style="display:inline-block">
					<select class="multiorder_show" size="8" multiple="multiple" style="width:220px;vertical-align:top;margin-bottom:8px">
						<?php if($__Context->extra_vars&&count($__Context->extra_vars))foreach($__Context->extra_vars as $__Context->key=>$__Context->val){;
if(!$__Context->list_config[$__Context->key]){ ?><option value="<?php echo $__Context->key ?>"><?php echo $__Context->val->name ?></option><?php }} ?>
					</select><br />
					<button type="button" class="x_btn multiorder_add" style="vertical-align:top"><?php echo $__Context->lang->cmd_insert ?></button>
				</div>
				<div style="display:inline-block">
					<select class="multiorder_selected" size="8" multiple="multiple" style="width:220px;vertical-align:top;margin-bottom:8px">
						<?php if($__Context->list_config&&count($__Context->list_config))foreach($__Context->list_config as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"><?php echo $__Context->val->name ?></option><?php } ?>
					</select><br />
					<span class="x_btn-group">
						<button type="button" class="x_btn multiorder_up" style="vertical-align:top"><?php echo $__Context->lang->cmd_move_up ?></button>
						<button type="button" class="x_btn multiorder_down" style="vertical-align:top"><?php echo $__Context->lang->cmd_move_down ?></button>
						<button type="button" class="x_btn multiorder_del" style="vertical-align:top"><?php echo $__Context->lang->cmd_delete ?></button>
					</span>
				</div>
				<script>
					xe.registerApp(new xe.MultiOrderManager('list'));
				</script>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->order_type ?></label>
			<div class="x_controls">
				<select name="order_target" id="order_target" title="<?php echo $__Context->lang->order_target ?>">
					<?php if($__Context->order_target&&count($__Context->order_target))foreach($__Context->order_target as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->order_target== $__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val ?></option><?php } ?>
				</select>
				<select name="order_type" id="order_type" title="<?php echo $__Context->lang->order_type ?>">
					<option value="asc"<?php if($__Context->module_info->order_type != 'desc'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->order_asc ?></option>
					<option value="desc"<?php if($__Context->module_info->order_type == 'desc'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->order_desc ?></option>
				</select>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="list_count"><?php echo $__Context->lang->list_count ?></label>
			<div class="x_controls">
				<input type="text" name="list_count" id="list_count" value="<?php echo $__Context->module_info->list_count?$__Context->module_info->list_count:20 ?>" style="width:30px" />
				<p class="x_help-inline"><?php echo $__Context->lang->about_list_count ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="search_list_count"><?php echo $__Context->lang->search_list_count ?></label>
			<div class="x_controls">
				<input type="text" name="search_list_count" id="search_list_count" value="<?php echo $__Context->module_info->search_list_count?$__Context->module_info->search_list_count:20 ?>" style="width:30px" />
				<p class="x_help-inline"><?php echo $__Context->lang->about_search_list_count ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="page_count"><?php echo $__Context->lang->page_count ?></label>
			<div class="x_controls">
				<input type="text" name="page_count" id="page_count" value="<?php echo $__Context->module_info->page_count?$__Context->module_info->page_count:10 ?>" style="width:30px" />
				<p class="x_help-inline"><?php echo $__Context->lang->about_page_count ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->except_notice ?></label>
			<div class="x_controls">
				<label class="x_inline" for="except_notice"><input type="checkbox" name="except_notice" id="except_notice" value="Y"<?php if($__Context->module_info->except_notice != 'N'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->about_except_notice ?></label>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->use_anonymous ?></label>
			<div class="x_controls">
				<label class="x_inline" for="use_anonymous"><input type="checkbox" name="use_anonymous" id="use_anonymous" value="Y"<?php if($__Context->module_info->use_anonymous == 'Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->about_use_anonymous ?></label>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->consultation ?></label>
			<div class="x_controls">
				<label class="x_inline" for="consultation"><input type="checkbox" name="consultation" id="consultation" value="Y"<?php if($__Context->module_info->consultation == 'Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->about_consultation ?></label>
			</div>
		</div>
<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->protect_content ?></label>
			<div class="x_controls">
				<label class="x_inline" for="protect_content"><input type="checkbox" name="protect_content" id="protect_content" value="Y"<?php if($__Context->module_info->protect_content == 'Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->about_protect_content ?></label>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->status ?></label>
			<div class="x_controls">
				<input type="hidden" name="use_status[]" value="PUBLIC" />
				<label class="x_inline"><input type="checkbox" name="" value="" checked="checked" disabled="disabled" /> <?php echo $__Context->document_status_list['PUBLIC'] ?></label>
				<?php if($__Context->document_status_list&&count($__Context->document_status_list))foreach($__Context->document_status_list as $__Context->key=>$__Context->value){ ?>
					<?php if($__Context->key != 'PRIVATE' && $__Context->key != 'TEMP' && $__Context->key != 'PUBLIC'){ ?>
						<label class="x_inline" for="<?php echo $__Context->key ?>"><input type="checkbox" name="use_status[]" id="<?php echo $__Context->key ?>" value="<?php echo $__Context->key ?>"<?php if(@in_array($__Context->key, $__Context->module_info->use_status) || ($__Context->key == 'PUBLIC' && !$__Context->module_srl)){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->value ?></label>
					<?php } ?>
				<?php } ?>
				<p class="x_help-block"><?php echo $__Context->lang->about_use_status ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="admin_mail"><?php echo $__Context->lang->admin_mail ?></label>
			<div class="x_controls">
				<input type="text" name="admin_mail" id="admin_mail" value="<?php echo $__Context->module_info->admin_mail ?>" />
				<a href="#admin_mail_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="admin_mail_help" class="x_help-block" hidden><?php echo $__Context->lang->about_admin_mail ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="module_category_srl"><?php echo $__Context->lang->module_category ?></label>
			<div class="x_controls">
				<select name="module_category_srl" id="module_category_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->module_category&&count($__Context->module_category))foreach($__Context->module_category as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->module_category_srl == $__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
				<a href="#module_category_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="module_category_help" class="x_help-block" hidden><?php echo $__Context->lang->about_module_category ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="description"><?php echo $__Context->lang->description ?></label>
			<div class="x_controls">
				<textarea name="description" id="description" rows="4" cols="42" placeholder="<?php echo $__Context->lang->about_description ?>" style="vertical-align:top"><?php echo htmlspecialchars($__Context->module_info->description) ?></textarea>
				<a href="#description_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="description_help" class="x_help-block" hidden><?php echo $__Context->lang->about_description ?></p>
			</div>
		</div>
	</section>
	<div class="x_clearfix btnArea">
		<div class="x_pull-left">
			<a href="<?php echo getUrl('act', 'dispBoardAdminContent') ?>" type="button" class="x_btn"><?php echo $__Context->lang->cmd_cancel ?></a>
		</div>
		<div class="x_pull-right">
			<button class="x_btn x_btn-primary" type="submit"><?php echo $__Context->lang->cmd_registration ?></button>
		</div>
	</div>
</form>
<style>.g11n{vertical-align:top !important}</style>
