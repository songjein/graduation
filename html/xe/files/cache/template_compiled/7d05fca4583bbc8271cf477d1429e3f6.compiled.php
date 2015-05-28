<?php if(!defined("__XE__"))exit;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/document/tpl/filter','delete_category.xml');$__xmlFilter->compile(); ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/document/tpl/filter','move_category.xml');$__xmlFilter->compile(); ?>
<!--#JSPLUGIN:ui.tree--><?php Context::loadJavascriptPlugin('ui.tree'); ?>
<!--#Meta:modules/document/tpl/js/document_category.js--><?php $__tmp=array('modules/document/tpl/js/document_category.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#JSPLUGIN:ui.colorpicker--><?php Context::loadJavascriptPlugin('ui.colorpicker'); ?>
<script>
    var category_title = "<?php echo $__Context->lang->category ?>";
</script>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/document/tpl/category_list/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<div id="menu">
	<ul class="simpleTree">
		<li class="root" id='tree_0'><span><?php echo $__Context->lang->category ?></span></li>
	</ul>
</div>
<div class="btnArea">
	<button type="button" onclick="doReloadTreeCategory('<?php echo $__Context->module_info->module_srl ?>')" class="x_btn"><?php echo $__Context->lang->cmd_remake_cache ?></button>
</div>
<script>
	var simpleTreeCollection;
	var max_menu_depth = 999;
	var lang_confirm_delete = "<?php echo $__Context->lang->confirm_delete ?>";
	var xml_url = "<?php echo $__Context->category_xml_file ?>";
	jQuery(function($){
		Tree(xml_url);
	});
</script>
<section class="x_modal x" id="__category_info" hidden>
	<?php Context::addJsFile("modules/document/ruleset/insertCategory.xml", FALSE, "", 0, "body", TRUE, "") ?><form  id="fo_category" action="./" method="post" class="x_form x_form-horizontal" style="margin:0"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertCategory" />
		<input type="hidden" name="module" value="document" />
		<input type="hidden" name="act" value="procDocumentInsertCategory" />
		<input type="hidden" name="module_srl" value="<?php echo $__Context->module_info->module_srl ?>" />
		<input type="hidden" name="xml_file" value="<?php echo $__Context->category_xml_file ?>" />
		<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" />
		<input type="hidden" name="parent_srl" value="<?php echo $__Context->category_info->parent_srl ?>" />
		<input type="hidden" name="category_srl" value="<?php echo $__Context->category_info->category_srl ?>" />
		<input type="hidden" name="xe_validator_id" value="modules/document/tpl/category_list/1" />
		<div class="x_modal-header">
			<h1><?php echo $__Context->lang->category ?></h1>
		</div>
		<div class="x_modal-body">
			<div id="__parent_category_info" class="x_control-group">
				<label class="x_control-label"><?php echo $__Context->lang->parent_category_title ?></label>
				<div class="x_controls">
					<span id="__parent_category_title" style="display:inline-block;padding:3px 0 0 0"></span>
				</div>
			</div>
			<div class="x_control-group">
				<label class="x_control-label" for="lang_category_title"><?php echo $__Context->lang->category_title ?></label>
				<div class="x_controls">
					<input type="text" class="lang_code" name="category_title" id="category_title" value="" />
				</div>
			</div>
			<div class="x_control-group">
				<label class="x_control-label" for="category_color"><?php echo $__Context->lang->category_color ?></label>
				<div class="x_controls">
					<span class="x_input-append"><input type="text" class="color-indicator" name="category_color" id="category_color" value="" /></span>
					<a href="#categoy_color_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
					<p id="categoy_color_help" hidden style="margin:8px 0 0 0"><?php echo $__Context->lang->about_category_color ?></p>
				</div>
			</div>
			<div class="x_control-group">
				<label class="x_control-label" for="lang_category_description"><?php echo $__Context->lang->category_description ?></label>
				<div class="x_controls">
					<textarea name="category_description" class="lang_code" id="category_description" rows="8" cols="42"></textarea>
					<span class="x_help-block"><?php echo $__Context->lang->about_category_description ?></span>
				</div>
			</div>
			<div class="x_control-group category_groups">
				<label class="x_control-label"><?php echo $__Context->lang->category_group_srls ?></label>
				<div class="x_controls">
					<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->key=>$__Context->val){ ?><label class="x_inline" for="group_<?php echo $__Context->key ?>"><input type="checkbox" name="group_srls[]" value="<?php echo $__Context->key ?>" id="group_<?php echo $__Context->key ?>" /> <?php echo $__Context->val->title ?></label><?php } ?>
					<span class="x_help-block"><?php echo $__Context->lang->about_category_group_srls ?></span>
				</div>
			</div>
			<div class="x_control-group">
				<label class="x_control-label"><?php echo $__Context->lang->expand ?></label>
				<div class="x_controls">
					<label class="x_inline" for="expand"><input type="checkbox" name="expand" value="Y" id="expand" /> <?php echo $__Context->lang->about_expand ?></label>
				</div>
			</div>
		</div>
		<div class="x_modal-footer">
			<button type="button" class="x_btn x_pull-left" data-hide="#__category_info"><?php echo $__Context->lang->cmd_close ?></button>
			<button type="submit" class="x_btn x_btn-primary x_pull-right"><?php echo $__Context->lang->cmd_save ?></button>
		</div>
	</form>
</section>
