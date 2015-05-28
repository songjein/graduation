<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/document/tpl/js/document_admin.js--><?php $__tmp=array('modules/document/tpl/js/document_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/document/tpl/filter','insert_extra_var.xml');$__xmlFilter->compile(); ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/document/tpl/filter','delete_extra_var.xml');$__xmlFilter->compile(); ?>
<?php if($__Context->selected_var_idx && $__Context->extra_keys[$__Context->selected_var_idx]){ ?>
    <?php  $__Context->selected_var = $__Context->extra_keys[$__Context->selected_var_idx]  ?>
<?php } ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/document/tpl/extra_keys/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<?php if($__Context->type == 'insertExtraForm' || $__Context->selected_var_idx){ ?>
	<section class="section">
		<h1><?php echo $__Context->lang->extra_vars ?></h1>
		<?php Context::addJsFile("modules/document/ruleset/insertExtraVar.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="./" method="post" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertExtraVar" />
			<input type="hidden" name="module" value="document" />
			<input type="hidden" name="act" value="procDocumentAdminInsertExtraVar" />
			<input type="hidden" name="module_srl" value="<?php echo $__Context->module_srl ?>" />
			<input type="hidden" name="var_idx" value="<?php echo $__Context->selected_var_idx ?>" />
			<input type="hidden" name="success_return_url" value="<?php echo getUrl('type', '') ?>" />
			<input type="hidden" name="xe_validator_id" value="modules/document/tpl/extra_keys/1" />
			<div class="x_control-group">
				<label class="x_control-label" for="eid"><?php echo $__Context->lang->eid ?></label>
				<div class="x_controls">
					<input type="text" name="eid" id="eid" value="<?php echo $__Context->selected_var->eid ?>" placeholder="Ex) extra_vars_1" />
					<p class="x_help-inline"><?php echo $__Context->lang->about_extra_vars_eid_value ?></p>
				</div>
			</div>
			<div class="x_control-group">
				<label class="x_control-label" for="lang_name"><?php echo $__Context->lang->column_name ?></label>
				<div class="x_controls">
					<input type="text" name="name" id="name" value="<?php if(strpos($__Context->selected_var->name, '$user_lang->') === false){;
echo $__Context->selected_var->name;
}else{;
echo htmlspecialchars($__Context->selected_var->name, ENT_COMPAT | ENT_HTML401, 'UTF-8', false);
} ?>" class="lang_code" placeholder="Ex) Your favorite color." />
				</div>
			</div>
			<div class="x_control-group">
				<label class="x_control-label" for="type"><?php echo $__Context->lang->column_type ?></label>
				<div class="x_controls">
					<select name="type" id="type">
						<?php if($__Context->lang->column_type_list&&count($__Context->lang->column_type_list))foreach($__Context->lang->column_type_list as $__Context->k=>$__Context->v){ ?><option value="<?php echo $__Context->k ?>"<?php if($__Context->selected_var->type == $__Context->k){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->column_type_list[$__Context->k] ?></option><?php } ?>
					</select>
				</div>
			</div>
			<div class="x_control-group">
				<label class="x_control-label"><?php echo $__Context->lang->is_required ?></label>
				<div class="x_controls">
					<label class="x_inline" for="is_required_y"><input type="radio" name="is_required" id="is_required_y" value="Y"<?php if($__Context->selected_var->is_required == 'Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->yes ?></label>
					<label class="x_inline" for="is_required_n"><input type="radio" name="is_required" id="is_required_n" value="N"<?php if($__Context->selected_var->is_required != 'Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->not ?></label>
				</div>
			</div>
			<div class="x_control-group">
				<label class="x_control-label" for="default"><?php echo $__Context->lang->default_value ?></label>
				<div class="x_controls">
					<input type="text" name="default" id="default" value="<?php echo $__Context->selected_var->default ?>" placeholder="Ex) Red, Green, Blue" />
					<p class="x_help-inline"><?php echo $__Context->lang->about_extra_vars_default_value ?></p>
				</div>
			</div>
			<div class="x_control-group">
				<label class="x_control-label" for="lang_desc"><?php echo $__Context->lang->description ?></label>
				<div class="x_controls">
					<input type="text" name="desc" id="desc" value="<?php echo $__Context->selected_var->desc ?>" class="lang_code" placeholder="Ex) Displayed as your choice." />
				</div>
			</div>
			<div class="x_control-group">
				<label class="x_control-label"><?php echo $__Context->lang->cmd_search ?></label>
				<div class="x_controls">
					<label class="x_inline" for="search_y"><input type="radio" name="search" id="search_y" value="Y"<?php if($__Context->selected_var->search=='Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->yes ?></label>
					<label class="x_inline" for="search_n"><input type="radio" name="search" id="search_n" value="N"<?php if($__Context->selected_var->search!='Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->not ?></label>
				</div>
			</div>
			<div class="x_clearfix btnArea">
				<div class="x_pull-left">
					<a class="x_btn" href="<?php echo getUrl('type','','selected_var_idx','') ?>"><?php echo $__Context->lang->cmd_back ?></a>
				</div>
				<div class="x_pull-right">
					<?php if($__Context->selected_var){ ?>
					<button type="submit" class="x_btn x_btn-primary"><?php echo $__Context->lang->cmd_modify ?></button>
					<?php }else{ ?>
					<button type="submit" class="x_btn x_btn-primary"><?php echo $__Context->lang->cmd_insert ?></button>
					<?php } ?>
				</div>
			</div>
		</form>
	</section>
<?php }else{ ?>
<section class="section">
	<div class="x_clearfix">
		<div class="x_btn-group x_pull-right">
			<a class="x_btn" href="<?php echo getUrl('type','insertExtraForm','selected_var_idx','') ?>"><?php echo $__Context->lang->cmd_insert ?></a>
		</div>
	</div>
	<table class="x_table x_table-striped x_table-hover">
		<thead>
			<tr class="nowr">
				<th><?php echo $__Context->lang->no ?></th>
				<th><?php echo $__Context->lang->eid ?></th>
				<th><?php echo $__Context->lang->column_name ?></th>
				<th><?php echo $__Context->lang->column_type ?></th>
				<th><?php echo $__Context->lang->default_value ?></th>
				<th><?php echo $__Context->lang->is_required ?></th>
				<th><?php echo $__Context->lang->cmd_search ?></th>
				<th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			<?php if($__Context->extra_keys&&count($__Context->extra_keys))foreach($__Context->extra_keys as $__Context->key=>$__Context->val){ ?>
			<tr>
				<td<?php if($__Context->val->desc){ ?> rowspan="2"<?php } ?>><?php echo $__Context->val->idx ?></td>
				<td><?php echo $__Context->val->eid ?></td>
				<td class="nowr"><strong><?php echo $__Context->val->name ?></strong></td>
				<td class="nowr"><?php echo $__Context->lang->column_type_list[$__Context->val->type] ?></td>
				<td><?php echo $__Context->val->default ?>&nbsp;</td>
				<td class="nowr"><?php if($__Context->val->is_required=='Y'){ ?><strong>Y</strong><?php }else{ ?>N<?php } ?></td>
				<td class="nowr"><?php if($__Context->val->search=='Y'){ ?><strong>Y</strong><?php }else{ ?>N<?php } ?></td>
				<td class="nowr" style="text-align:right">
					<?php if($__Context->val->idx > 1){ ?>
						<button type="button" class="x_icon-arrow-up" onclick="moveVar('up','<?php echo $__Context->module_srl ?>','<?php echo $__Context->val->idx ?>')"><?php echo $__Context->lang->cmd_move_up ?></button>
					<?php } ?>
					<?php if(count($__Context->extra_keys) > $__Context->val->idx){ ?>
						<button type="button" class="x_icon-arrow-down" onclick="moveVar('down','<?php echo $__Context->module_srl ?>','<?php echo $__Context->val->idx ?>')"><?php echo $__Context->lang->cmd_move_down ?></button>
					<?php } ?>
					<a href="<?php echo getUrl('selected_var_idx',$__Context->val->idx) ?>" class="x_icon-wrench"><?php echo $__Context->lang->cmd_modify ?></a>
					<button type="button" class="x_icon-trash" onclick="return doDeleteExtraKey('<?php echo $__Context->module_srl ?>','<?php echo $__Context->val->idx ?>');"><?php echo $__Context->lang->cmd_delete ?></button>
				</td>
			</tr>
			<?php if($__Context->val->desc){ ?><tr>
				<td colspan="7"><?php echo $__Context->val->desc ?></td>
			</tr><?php } ?>
			<?php } ?>
		</tbody>
	</table>
	<div class="x_clearfix">
		<div class="x_pull-right">
			<a class="x_btn" href="<?php echo getUrl('type','insertExtraForm','selected_var_idx','') ?>"><?php echo $__Context->lang->cmd_insert ?></a>
		</div>
	</div>
</section>
<?php } ?>
<form id="fo_delete" name="fo_delete" method="post" action="./"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="module_srl" value="" />
<input type="hidden" name="var_idx" value="" />
</form>
