<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/point/tpl','header.html') ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/point/tpl/config/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<?php Context::addJsFile("modules/point/ruleset/insertConfig.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="./" method="post" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertConfig" />
	<input type="hidden" name="module" value="point" />
	<input type="hidden" name="act" value="procPointAdminInsertConfig" />
	<input type="hidden" name="xe_validator_id" value="modules/point/tpl/config/1" />
	<section class="section">
		<h1><?php echo $__Context->lang->is_default ?></h1>
		<div class="x_control-group">
			<label for="max_level" class="x_control-label"><?php echo $__Context->lang->max_level ?></label>
			<div class="x_controls">
				<input type="number" min="0" max="1000" value="<?php echo $__Context->config->max_level ?>" name="max_level" id="max_level" />
				<?php echo $__Context->lang->about_max_level ?>
			</div>
		</div>
		<div class="x_control-group">
			<label for="point_name" class="x_control-label"><?php echo $__Context->lang->point_name ?></label>
			<div class="x_controls">
				<input type="text" value="<?php echo $__Context->config->point_name ?>" name="point_name" id="point_name" style="width:50px" />
				<?php echo $__Context->lang->about_point_name ?>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->give_point ?></label>
			<div class="x_controls">
				<input type="number" value="<?php echo $__Context->config->signup_point ?>" name="signup_point" id="signup_point" style="text-align:right" /> : 
				<label for="signup_point" class="x_inline"><?php echo $__Context->lang->point_signup ?></label>
				<br />
				<input type="number" value="<?php echo $__Context->config->login_point ?>" name="login_point" id="login_point" style="text-align:right" /> :
				<label for="login_point" class="x_inline"><?php echo $__Context->lang->cmd_login ?></label>
				<br />
				<input type="number" name="insert_document" value="<?php echo $__Context->config->insert_document ?>" id="insert_document" style="text-align:right" /> :
				<label for="insert_document" class="x_inline"><?php echo $__Context->lang->point_insert_document ?></label>
				<br />
				<input type="number" name="insert_comment" value="<?php echo $__Context->config->insert_comment ?>" id="insert_comment" style="text-align:right" /> :
				<label for="insert_comment" class="x_inline"><?php echo $__Context->lang->point_insert_comment ?></label>
				<br />
				<input type="number" name="upload_file" value="<?php echo $__Context->config->upload_file ?>" id="upload_file" style="text-align:right" /> :
				<label for="upload_file" class="x_inline"><?php echo $__Context->lang->point_upload_file ?></label>
				<br />
				<input type="number" name="download_file" value="<?php echo $__Context->config->download_file ?>" id="download_file" style="text-align:right" /> :
				<label for="download_file" class="x_inline"><?php echo $__Context->lang->point_download_file ?></label>
				<br />
				<input type="number" name="read_document" value="<?php echo $__Context->config->read_document ?>" id="read_document" style="text-align:right" /> :
				<label for="read_document" class="x_inline"><?php echo $__Context->lang->point_read_document ?></label>
				<br />
				<input type="number" name="voted" value="<?php echo $__Context->config->voted ?>" style="text-align:right" id="voted" /> :
				<label for="voted" class="x_inline"><?php echo $__Context->lang->point_voted ?></label>
				<br />
				<input type="number" name="blamed" value="<?php echo $__Context->config->blamed ?>" id="blamed" style="text-align:right" /> :
				<label for="blamed" class="x_inline"><?php echo $__Context->lang->point_blamed ?></label>
			</div>
		</div>
		<div class="x_control-group">
			<label for="level_icon" class="x_control-label"><?php echo $__Context->lang->level_icon ?></label>
			<div class="x_controls">
				<select name="level_icon" id="level_icon">
					<?php if($__Context->level_icon_list&&count($__Context->level_icon_list))foreach($__Context->level_icon_list as $__Context->key => $__Context->val){ ?>
					<option value="<?php echo $__Context->val ?>"<?php if($__Context->config->level_icon == $__Context->val){ ?> selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
					<?php } ?>
				</select>
				<span class="x_help-inline"><?php echo $__Context->lang->about_level_icon ?></span>
			</div>
		</div>
		<div class="x_control-group">
			<label for="disable_download" class="x_control-label"><?php echo $__Context->lang->disable_download ?></label>
			<div class="x_controls" style="padding-top:3px">
				<input type="checkbox" name="disable_download" id="disable_download" value="Y"<?php if($__Context->config->disable_download=='Y'){ ?> checked="checked"<?php } ?> />
				<?php echo $__Context->lang->about_disable_download ?>
			</div>
		</div>
		<div class="x_control-group">
			<label for="disable_read_document" class="x_control-label"><?php echo $__Context->lang->disable_read_document ?></label>
			<div class="x_controls" style="padding-top:3px">
				<input type="checkbox" name="disable_read_document" id="disable_read_document" value="Y"<?php if($__Context->config->disable_read_document=='Y'){ ?> checked="checked"<?php } ?> />
				<?php echo $__Context->lang->about_disable_read_document ?>
			</div>
		</div>
		<div class="x_clearfix btnArea">
			<span class="x_pull-right"><input class="x_btn x_btn-primary" type="submit" value="<?php echo $__Context->lang->cmd_save ?>" /></span>
		</div>
	</section>
	<section class="section">
		<h1><?php echo $__Context->lang->point_link_group ?></h1>
		<div class="x_clearfix" style="margin-bottom:-10px">
			<p class="x_pull-left"><?php echo $__Context->lang->about_point_link_group ?></p>
			<div class="x_pull-right">
				<label for="group_reset_y" class="x_inline"><input type="radio" name="group_reset" id="group_reset_y" value="Y"<?php if($__Context->config->group_reset != 'N'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->point_group_reset_and_add ?></label>
				<label for="group_reset_n" class="x_inline"><input type="radio" name="group_reset" id="group_reset_n" value="N"<?php if($__Context->config->group_reset == 'N'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->point_group_add_only ?></label>
			</div>
		</div>
		<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->key=>$__Context->val){ ?><div class="x_control-group">
			<label class="x_control-label" for="point_group_<?php echo $__Context->key ?>"><?php echo $__Context->val->title ?></label>
			<div class="x_controls">
				<?php if($__Context->val->is_default != 'Y'){ ?><input type="number" min="0" max="1000" value="<?php echo $__Context->config->point_group[$__Context->key] ?>" name="point_group_<?php echo $__Context->key ?>" id="point_group_<?php echo $__Context->key ?>" style="width:50px" /><?php } ?>
				<?php if($__Context->val->is_default == 'Y'){ ?><span style="display:inline-block;padding-top:3px"><?php echo $__Context->lang->default_group ?></span><?php } ?>
			</div>
		</div><?php } ?>
		<div class="x_clearfix btnArea">
			<span class="x_pull-right"><input class="x_btn x_btn-primary" type="submit" value="<?php echo $__Context->lang->cmd_save ?>" /></span>
		</div>
	</section>
	<section class="section">
<?php $__Context->point_group = @array_flip($__Context->config->point_group) ?>
		<h1><?php echo $__Context->lang->level_point ?></h1>
		<div class="x_clearfix">
			<p class="x_pull-left"><?php echo $__Context->lang->expression ?></p>
			<span class="x_pull-right x_input-append">
				<input type="text" value="<?php echo $__Context->config->expression ?>" placeholder="Math.pow(i,2) * 90" size="30" class="level_expression" />
				<button type="button" class="x_btn calc_point"><?php echo $__Context->lang->level_point_calc ?></button> 
				<button type="button" class="x_btn calc_point _reset"><?php echo $__Context->lang->cmd_exp_reset ?></button>
			</span>
		</div>
		<table class="x_table x_table-striped x_table-hover">
			<tr>
				<th scope="col"><?php echo $__Context->lang->level ?></th>
				<th scope="col"><?php echo $__Context->lang->level_icon ?></th>
				<th scope="col"><?php echo $__Context->lang->point ?></th>
				<th scope="col"><?php echo $__Context->lang->member_group ?></th>
			</tr>
			<tr>
				<td>1</td>
				<td><img src="<?php echo getUrl() ?>/modules/point/icons/<?php echo $__Context->config->level_icon ?>/1.gif" alt="1" /></td>
				<td><label for="level_step_1" style="margin:0"><input type="number" id="level_step_1" name="level_step_1" value="<?php echo $__Context->config->level_step[1] ?>" style="width:60px;text-align:right" /> <?php echo $__Context->config->point_name ?></label></td>
<?php $__Context->point_group_item = $__Context->point_group[1] ?>
<?php $__Context->title=array() ?>
<?php if($__Context->point_group_item){ ?>
<?php if($__Context->config->group_reset != 'N'){ ?>
<?php $__Context->title[0] = $__Context->group_list[$__Context->point_group_item.'']->title ?>
<?php }else{ ?>
<?php $__Context->title[] = $__Context->group_list[$__Context->point_group_item.'']->title ?>
<?php } ?>
<?php } ?>
				<td><?php echo implode(', ', $__Context->title) ?></td>
			</tr>
			<?php for($__Context->i=2;$__Context->i<=$__Context->config->max_level;$__Context->i++){ ?>
<?php $__Context->point_group_item = $__Context->point_group[$__Context->i] ?>
<?php if($__Context->point_group_item){ ?>
<?php if($__Context->config->group_reset != 'N'){ ?>
<?php $__Context->title[0] = $__Context->group_list[$__Context->point_group_item.'']->title ?>
<?php }else{ ?>
<?php $__Context->title[] = $__Context->group_list[$__Context->point_group_item.'']->title ?>
<?php } ?>
<?php } ?>
			<tr class="row<?php echo (($__Context->i-1)%2+1) ?>">
				<td><?php echo $__Context->i ?></td>
				<td><img src="<?php echo getUrl() ?>/modules/point/icons/<?php echo $__Context->config->level_icon ?>/<?php echo $__Context->i ?>.gif" alt="<?php echo $__Context->i ?>" /></td>
				<td><label for="level_step_<?php echo $__Context->i ?>" style="margin:0"><input type="number" id="level_step_<?php echo $__Context->i ?>" name="level_step_<?php echo $__Context->i ?>" value="<?php echo $__Context->config->level_step[$__Context->i] ?>" style="width:60px;text-align:right" /> <?php echo $__Context->config->point_name ?></label></td>
				<td><?php echo implode(', ', $__Context->title) ?></td>
			</tr>
			<?php } ?>
		</table>
		<div class="x_clearfix">
			<span class="x_pull-right"><input class="x_btn x_btn-primary" type="submit" value="<?php echo $__Context->lang->cmd_save ?>" /></span>
		</div>
	</section>
	<section class="section">
		<h1><?php echo $__Context->lang->cmd_point_recal ?></h1>
		<p><input class="x_btn x_btn-warning" type="button" value="<?php echo $__Context->lang->cmd_point_recal ?>" onclick="doPointRecal()" /></p>
		<p><?php echo $__Context->lang->about_cmd_point_recal ?></p>
		<p id="pointReCal"></p>
	</section>
</form>
