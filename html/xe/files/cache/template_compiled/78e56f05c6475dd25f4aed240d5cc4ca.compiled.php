<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/layout/tpl','header.html') ?>
<!--#Meta:modules/layout/tpl/js/adminList.js--><?php $__tmp=array('modules/layout/tpl/js/adminList.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<script>
xe.lang.confirm_delete = '<?php echo $__Context->lang->confirm_delete ?>';
</script>
<?php if($__Context->layout_info->layout != 'faceoff'){ ?><div class="x_clearfix">
	<div class="x_btn-group x_pull-right">
		<a href="#insertLayout" class="x_btn modalAnchor"><?php echo $__Context->lang->cmd_insert ?></a>
	</div>
</div><?php } ?>
<?php  $__Context->isDeletable = count($__Context->layout_list) > 1 ? TRUE : FALSE ?>
<table class="x_table x_table-striped x_table-hover">
	<thead>
		<tr>
			<th scope="col" class="nowr"><?php echo $__Context->lang->no ?></th>
			<th scope="col" class="nowr"><?php echo $__Context->lang->title ?></th>
			<th scope="col" class="nowr"><?php echo $__Context->lang->regdate ?></th>
			<th scope="col" class="nowr"><?php echo $__Context->lang->cmd_setup ?></th>
			<th scope="col" class="nowr"><?php echo $__Context->lang->cmd_edit ?></th>
			<th scope="col" class="nowr"><?php echo $__Context->lang->cmd_copy ?></th>
			<th scope="col" class="nowr"><?php echo $__Context->lang->cmd_delete ?></th>
		</tr>
	</thead>
	<tbody>
		<?php if($__Context->layout_list&&count($__Context->layout_list))foreach($__Context->layout_list as $__Context->no=>$__Context->layout){ ?><tr>
			<td class="nowr"><?php echo $__Context->no+1 ?></td>
			<td class="title"><?php echo $__Context->layout->title ?></td>
			<td class="nowr"><?php echo zdate($__Context->layout->regdate, "Y-m-d") ?></td>
			<td class="nowr"><a href="<?php echo getUrl('act', 'dispLayoutAdminModify', 'layout_srl', $__Context->layout->layout_srl) ?>"><?php echo $__Context->lang->cmd_setup ?></a></td>
			<td class="nowr"><a href="<?php echo getUrl('act', 'dispLayoutAdminEdit', 'layout_srl', $__Context->layout->layout_srl) ?>"><?php echo $__Context->lang->cmd_edit ?></a></td>
			<td class="nowr"><a href="<?php echo getUrl('', 'module', 'layout', 'act', 'dispLayoutAdminCopyLayout', 'layout_srl', $__Context->layout->layout_srl) ?>" onclick="popopen(this.href);return false;" title="<?php echo $__Context->lang->cmd_copy ?>"><?php echo $__Context->lang->cmd_copy ?></a></td>
			<td class="nowr">
				<?php if($__Context->isDeletable){;
Context::addJsFile("modules/layout/ruleset/deleteLayout.xml", FALSE, "", 0, "body", TRUE, "") ?><form class="layout_delete_form"  action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="deleteLayout" />
					<input type="hidden" name="module" value="layout" />
					<input type="hidden" name="act" value="procLayoutAdminDelete" />
					<input type="hidden" name="layout_srl" value="<?php echo $__Context->layout->layout_srl ?>" />
					<input class="x_btn x_btn-link" type="submit" value="<?php echo $__Context->lang->cmd_delete ?>" />
					<input type="hidden" name="xe_validator_id" value="modules/layout/tpl/layout_instance_list/1" />
				</form><?php } ?>
			</td>
		</tr><?php } ?>
	</tbody>
</table>
<?php if($__Context->layout_info->layout != 'faceoff'){ ?><div class="x_clearfix">
	<div class="x_btn-group x_pull-right">
		<a href="#insertLayout" class="x_btn modalAnchor"><?php echo $__Context->lang->cmd_insert ?></a>
	</div>
</div><?php } ?>
<section id="insertLayout" class="x_modal">
	<?php Context::addJsFile("modules/layout/ruleset/insertLayout.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="./" method="post"  class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertLayout" />
		<input type="hidden" name="module" value="layout" />
		<input type="hidden" name="act" value="procLayoutAdminInsert" />
		<input type="hidden" name="layout" value="<?php echo $__Context->layout_info->layout ?>" />
		<input type="hidden" name="_layout_type" value="<?php echo $__Context->type ?>" />
		<input type="hidden" name="success_return_url" value="<?php echo getUrl('act', 'dispLayoutAdminInstanceList') ?>" />
		<input type="hidden" name="xe_validator_id" value="modules/layout/tpl/layout_instance_list/2" />
		<div class="x_modal-header">
			<h1><?php echo $__Context->lang->cmd_insert ?></h1>
		</div>
		<div class="x_modal-body">
			<div class="x_control-group">
				<label class="x_control-label"><?php echo $__Context->lang->layout ?></label>
				<div class="x_controls" style="padding-top:3px">
					<?php echo $__Context->layout_info->title ?> ver <?php echo $__Context->layout_info->version ?> (<?php echo $__Context->layout_info->layout ?>)
				</div>
			</div>
			<?php if($__Context->layout_info->path){ ?><div class="x_control-group">
				<label class="x_control-label"><?php echo $__Context->lang->path ?></label>
				<div class="x_controls" style="padding-top:3px">
					<?php echo $__Context->layout_info->path ?>
				</div>
			</div><?php } ?>
			<?php if($__Context->layout_info->description){ ?><div class="x_control-group">
				<label class="x_control-label"><?php echo $__Context->lang->description ?></label>
				<div class="x_controls" style="padding-top:3px">
					<?php echo $__Context->layout_info->description ?>
				</div>
			</div><?php } ?>
			<div class="x_control-group">
				<label class="x_control-label"><?php echo $__Context->lang->author ?></label>
				<div class="x_controls" style="padding-top:3px">
					<?php if($__Context->layout_info->author&&count($__Context->layout_info->author))foreach($__Context->layout_info->author as $__Context->author_info){ ?>
						<?php if($__Context->author_info->homepage){ ?>
						<a href="<?php echo $__Context->author_info->homepage ?>" target="_blank"><?php echo $__Context->author_info->name ?></a>
						<?php }else{ ?>
						<?php echo $__Context->author_info->name ?>
						<?php } ?>
					<?php } ?>
				</div>
			</div>
			<div class="x_control-group">
				<label class="x_control-label"><?php echo $__Context->lang->title ?></label>
				<div class="x_controls">
					<input type="text" name="title" value="" />
					<p class="x_help-inline"><?php echo $__Context->lang->about_title ?></p>
				</div>
			</div>
		</div>
		<div class="x_modal-footer">
			<button type="button" class="x_btn x_pull-left" data-hide="#insertLayout"><?php echo $__Context->lang->cmd_close ?></button>
			<span class="x_btn-group x_pull-right">
				<button type="submit" class="x_btn x_btn-primary"><?php echo $__Context->lang->cmd_insert ?></button>
			</span>
		</div>
	</form>
</section>
