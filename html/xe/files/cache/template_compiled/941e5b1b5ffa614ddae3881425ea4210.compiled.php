<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/point/tpl/js/point_admin.js--><?php $__tmp=array('modules/point/tpl/js/point_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<section class="section">
	<h1><?php echo $__Context->lang->point ?></h1>
	<form action="./" method="post" id="fo_point" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="point" />
		<input type="hidden" name="act" value="procPointAdminInsertPointModuleConfig" />
		<input type="hidden" name="target_module_srl" value="<?php echo $__Context->module_config['module_srl']?$__Context->module_config['module_srl']:$__Context->module_srls ?>" />
		<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" />
		
		<div class="x_control-group">
			<label for="insert_document" class="x_control-label"><?php echo $__Context->lang->point_insert_document ?></label>
			<div class="x_controls">
				<input type="number" name="insert_document" id="insert_document" value="<?php echo $__Context->module_config['insert_document'] ?>" /> <?php echo $__Context->module_config['point_name'] ?>
			</div>
		</div>
		<div class="x_control-group">
			<label for="insert_comment" class="x_control-label"><?php echo $__Context->lang->point_insert_comment ?></label>
			<div class="x_controls">
				<input type="number" name="insert_comment" id="insert_comment" value="<?php echo $__Context->module_config['insert_comment'] ?>" /> <?php echo $__Context->module_config['point_name'] ?>
			</div>
		</div>
		<div class="x_control-group">
			<label for="upload_file" class="x_control-label"><?php echo $__Context->lang->point_upload_file ?></label>
			<div class="x_controls">
				<input type="number" name="upload_file" id="upload_file" value="<?php echo $__Context->module_config['upload_file'] ?>" /> <?php echo $__Context->module_config['point_name'] ?>
			</div>
		</div>
		<div class="x_control-group">
			<label for="download_file" class="x_control-label"><?php echo $__Context->lang->point_download_file ?></label>
			<div class="x_controls">
				<input type="number" name="download_file" id="download_file" value="<?php echo $__Context->module_config['download_file'] ?>" /> <?php echo $__Context->module_config['point_name'] ?>
			</div>
		</div>
		<div class="x_control-group">
			<label for="read_document" class="x_control-label"><?php echo $__Context->lang->point_read_document ?></label>
			<div class="x_controls">
				<input type="number" name="read_document" id="read_document" value="<?php echo $__Context->module_config['read_document'] ?>" /> <?php echo $__Context->module_config['point_name'] ?>
			</div>
		</div>
		<div class="x_control-group">
			<label for="voted" class="x_control-label"><?php echo $__Context->lang->point_voted ?></label>
			<div class="x_controls">
				<input type="number" name="voted" id="voted" value="<?php echo $__Context->module_config['voted'] ?>" /> <?php echo $__Context->module_config['point_name'] ?>
			</div>
		</div>
		<div class="x_control-group">
			<label for="blamed" class="x_control-label"><?php echo $__Context->lang->point_blamed ?></label>
			<div class="x_controls">
				<input type="number" name="blamed" id="blamed" value="<?php echo $__Context->module_config['blamed'] ?>" /> <?php echo $__Context->module_config['point_name'] ?>
			</div>
		</div>
		<div class="x_clearfix btnArea">
			<button class="x_btn x_btn-warning x_pull-left" type="button" onclick="doPointReset('<?php echo $__Context->module_config['module_srl']?$__Context->module_config['module_srl']:$__Context->module_srls ?>')"><?php echo $__Context->lang->cmd_reset ?></button>
			<span class="x_pull-right">
				<input class="x_btn x_btn-primary" type="submit" value="<?php echo $__Context->lang->cmd_save ?>">
			</span>
		</div>
	</form>
</section>
