<?php if(!defined("__XE__"))exit;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/document/tpl/filter','manage_checked_document.xml');$__xmlFilter->compile(); ?>
<!--#Meta:modules/document/tpl/js/document_admin.js--><?php $__tmp=array('modules/document/tpl/js/document_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<form action="./" method="get" id="fo_management"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="document" />
	<input type="hidden" name="type" value="" />
	<div class="x_modal-header">
		<h1><?php echo $__Context->lang->cmd_manage_document ?></h1>
	</div>
	<div class="x_modal-body x_form-horizontal" style="max-height:none">
		<?php if(count($__Context->document_list)==0){ ?>
		<p><?php echo $__Context->lang->msg_not_selected_document ?></p>
		<?php }else{ ?>
		<div class="x_control-group">
			<div class="x_control-label"><?php echo $__Context->lang->checked_count ?>(<?php echo count($__Context->document_list) ?>)</div>
			<div class="x_controls">
				<ul style="margin-top:5px">
					<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->key=>$__Context->document){ ?><li class="document_list">
						<input type="hidden" name="cart" value="<?php echo $__Context->document->document_srl ?>" /><?php echo $__Context->document->getTitle() ?> <i class="vr">|</i> <?php echo $__Context->document->getNickName() ?>
					</li><?php } ?>
				</ul>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="_target_module"><?php echo $__Context->lang->move_target_module ?></label>
			<div class="x_controls">
				<span class="x_input-append">
					<input type="hidden" name="target_module" id="target_module" value="<?php echo $__Context->module_srl ?>" />
					<input type="text" name="_target_module" id="_target_module" value="<?php echo $__Context->mid ?>(<?php echo $__Context->browser_title ?>)" readonly="readonly" />
					<a href="<?php echo getUrl('','module','module','act','dispModuleSelectList','id','target_module','type','single') ?>" onclick="popopen(this.href,'ModuleSelect');return false;" class="x_btn"><?php echo $__Context->lang->cmd_select ?></a>
				</span>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="target_category"><?php echo $__Context->lang->category ?></label>
			<div class="x_controls">
				<select id="target_category" name="target_category"></select>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="message_content"><?php echo $__Context->lang->cmd_send_message ?></label>
			<div class="x_controls" style="margin-right:14px">
				<textarea name="message_content" id="message_content" rows="4" cols="42" style="width:100%"></textarea>
			</div>
		</div>
	</div>
	<div class="x_modal-footer">
		<span class="x_btn-group x_pull-left">
			<button type="button" class="x_btn" onclick="doManageDocument('trash');"><?php echo $__Context->lang->cmd_trash ?></button>
			<button type="button" class="x_btn" onclick="doManageDocument('delete');"><?php echo $__Context->lang->cmd_delete ?></button>
		</span>
		<span class="x_btn-group x_pull-right">
			<button type="button" class="x_btn x_btn-inverse" onclick="doManageDocument('move');"><?php echo $__Context->lang->cmd_move ?></button>
			<button type="button" class="x_btn x_btn-inverse" onclick="doManageDocument('copy');"><?php echo $__Context->lang->cmd_copy ?></button>
		</span>
	</div>
	<?php } ?>
</form>