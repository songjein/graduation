<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/default','_header.html') ?>
<form action="./" method="post" onsubmit="return procFilter(this, window.insert)" class="board_write"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<input type="hidden" name="content" value="<?php echo $__Context->oDocument->getContentText() ?>" />
	<input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
	<div class="write_header">
		<?php if($__Context->module_info->use_category=='Y'){ ?><select name="category_srl">
			<option value=""><?php echo $__Context->lang->category ?></option>
			<?php if($__Context->category_list&&count($__Context->category_list))foreach($__Context->category_list as $__Context->val){ ?><option<?php if(!$__Context->val->grant){ ?> disabled="disabled"<?php } ?> value="<?php echo $__Context->val->category_srl ?>"<?php if($__Context->val->grant&&$__Context->val->selected||$__Context->val->category_srl==$__Context->oDocument->get('category_srl')){ ?> selected="selected"<?php } ?>>
				<?php echo str_repeat("&nbsp;&nbsp;",$__Context->val->depth) ?> <?php echo $__Context->val->title ?> (<?php echo $__Context->val->document_count ?>)
			</option><?php } ?>
		</select><?php } ?>
		<?php if($__Context->oDocument->getTitleText()){ ?><input type="text" name="title" class="iText" title="<?php echo $__Context->lang->title ?>" value="<?php echo htmlspecialchars($__Context->oDocument->getTitleText()) ?>" /><?php } ?>
		<?php if(!$__Context->oDocument->getTitleText()){ ?><input type="text" name="title" class="iText" title="<?php echo $__Context->lang->title ?>" /><?php } ?>
		<?php if($__Context->grant->manager){ ?><input type="checkbox" name="is_notice" value="Y" class="iCheck"<?php if($__Context->oDocument->isNotice()){ ?> checked="checked"<?php } ?> id="is_notice" /><?php } ?>
		<?php if($__Context->grant->manager){ ?><label for="is_notice"><?php echo $__Context->lang->notice ?></label><?php } ?>
	</div>
    <?php if(count($__Context->extra_keys)){ ?><div class="exForm">
		<?php if(count($__Context->extra_keys)){ ?><table border="1" cellspacing="0" summary="Extra Form">
			<caption><em>*</em> : <?php echo $__Context->lang->is_required ?></caption>
			<?php if($__Context->extra_keys&&count($__Context->extra_keys))foreach($__Context->extra_keys as $__Context->key=>$__Context->val){ ?><tr>
				<th scope="row"><?php if($__Context->val->is_required=='Y'){ ?><em>*</em><?php } ?> <?php echo $__Context->val->name ?></th>
				<td><?php echo $__Context->val->getFormHTML() ?></td>
			</tr><?php } ?>
		</table><?php } ?>
	</div><?php } ?>
    <div class="write_editor">
		<?php echo $__Context->oDocument->getEditor() ?>
	</div>
	<div class="write_footer">
		<div class="write_option">
			<?php if($__Context->grant->manager){ ?>
				<input type="checkbox" name="title_bold" id="title_bold" class="iCheck" value="Y"<?php if($__Context->oDocument->get('title_bold')=='Y'){ ?> checked="checked"<?php } ?> />
				<label for="title_bold"><?php echo $__Context->lang->title_bold ?></label>
			<?php } ?>
			<?php if($__Context->module_info->secret=='Y'){ ?><input type="checkbox" name="is_secret" class="iCheck" value="Y"<?php if($__Context->oDocument->isSecret()){ ?> checked="checked"<?php } ?> id="is_secret" /><?php } ?>
			<?php if($__Context->module_info->secret=='Y'){ ?><label for="is_secret"><?php echo $__Context->lang->secret ?></label><?php } ?>
            <input type="checkbox" name="comment_status" class="iCheck" value="ALLOW"<?php if($__Context->oDocument->allowComment()){ ?> checked="checked"<?php } ?> id="comment_status" />
            <label for="comment_status"><?php echo $__Context->lang->allow_comment ?></label>
            <input type="checkbox" name="allow_trackback" class="iCheck" value="Y"<?php if($__Context->oDocument->allowTrackback()){ ?> checked="checked"<?php } ?> id="allow_trackback" />
            <label for="allow_trackback"><?php echo $__Context->lang->allow_trackback ?></label>
			<?php if($__Context->is_logged){ ?>
				<input type="checkbox" name="notify_message" class="iCheck" value="Y"<?php if($__Context->oDocument->useNotify()){ ?> checked="checked"<?php } ?> id="notify_message" />
				<label for="notify_message"><?php echo $__Context->lang->notify ?></label>
			<?php } ?>
			<?php if(is_array($__Context->status_list)){ ?>
				<?php if($__Context->status_list&&count($__Context->status_list))foreach($__Context->status_list AS $__Context->key=>$__Context->value){ ?>
				<input type="radio" name="status" value="<?php echo $__Context->key ?>" id="<?php echo $__Context->key ?>" <?php if($__Context->oDocument->get('status') == $__Context->key || ($__Context->key == 'PUBLIC' && !$__Context->document_srl)){ ?>checked="checked"<?php } ?> /> 
				<label for="<?php echo $__Context->key ?>"><?php echo $__Context->value ?></label>
				<?php } ?>
			<?php } ?>
		</div>
		<div class="write_author">
			<?php if(!$__Context->is_logged){ ?><span class="item">
				<label for="userName" class="iLabel"><?php echo $__Context->lang->writer ?></label>
				<input type="text" name="nick_name" id="userName" class="iText userName" style="width:80px" value="<?php echo htmlspecialchars($__Context->oDocument->get('nick_name')) ?>" />
			</span><?php } ?>
			<?php if(!$__Context->is_logged){ ?><span class="item">
				<label for="userPw" class="iLabel"><?php echo $__Context->lang->password ?></label>
				<input type="password" name="password" id="userPw" class="iText userPw" style="width:80px" />
			</span><?php } ?>
			<?php if(!$__Context->is_logged){ ?><span class="item">
				<label for="homePage" class="iLabel"><?php echo $__Context->lang->homepage ?></label>
				<input type="text" name="homepage" id="homePage" class="iText homePage"  style="width:140px"value="<?php echo htmlspecialchars($__Context->oDocument->get('homepage')) ?>" />
			</span><?php } ?>
			<span class="item">
				<label for="tags" class="iLabel"><?php echo $__Context->lang->tag ?>: <?php echo $__Context->lang->about_tag ?></label>
				<input type="text" name="tags" id="tags" value="<?php echo htmlspecialchars($__Context->oDocument->get('tags')) ?>" class="iText" style="width:300px" title="Tag" />
			</span>		
		</div>
		<div class="btnArea">
			<input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" class="btn" />
			<?php if(!$__Context->oDocument->isExists() || $__Context->oDocument->get('status') == 'TEMP'){ ?>
			<?php if($__Context->is_logged){ ?><button class="btn" type="button" onclick="doDocumentSave(this);"><?php echo $__Context->lang->cmd_temp_save ?></button><?php } ?>
			<?php if($__Context->is_logged){ ?><button class="btn" type="button" onclick="doDocumentLoad(this);"><?php echo $__Context->lang->cmd_load ?></button><?php } ?>
			<?php } ?>
		</div>
	</div>
</form>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/default','_footer.html') ?>
