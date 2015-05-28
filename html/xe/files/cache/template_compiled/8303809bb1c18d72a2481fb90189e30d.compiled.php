<?php if(!defined("__XE__"))exit;
Context::addJsFile("./common/js/jquery.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/js_app.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/x.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/common.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/xml_handler.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/xml_js_filter.js", true, '', -100000)  ?>
<!--#Meta:modules/board/m.skins/default/js/mboard.js--><?php $__tmp=array('modules/board/m.skins/default/js/mboard.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/m.skins/default/css/mboard.css--><?php $__tmp=array('modules/board/m.skins/default/css/mboard.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="bd">
	<div class="hx h2">
		<h2><a href="<?php echo getUrl('','vid',$__Context->vid,'mid',$__Context->mid) ?>"><?php echo $__Context->module_info->browser_title ?></a></h2>
	</div>
	<div class="hx h3">
		<h3><?php echo $__Context->lang->cmd_write ?></h3>
	</div>
	<form action="./" method="post" class="ff" onsubmit="return procFilter(this, insert)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
		<ul>
			<?php if($__Context->module_info->use_category == "Y"){ ?>
			<li>
				<label for="nCategory"><?php echo $__Context->lang->category ?></label>
				<select name="category_srl" id="nCategory">
					<?php if($__Context->category_list&&count($__Context->category_list))foreach($__Context->category_list as $__Context->val){ ?>	
					<option <?php if(!$__Context->val->grant){ ?>disabled="disabled"<?php } ?> value="<?php echo $__Context->val->category_srl ?>" <?php if($__Context->val->grant&&$__Context->val->selected||$__Context->val->category_srl==$__Context->oDocument->get('category_srl')){ ?>selected="selected"<?php } ?>>
					<?php echo str_repeat("&nbsp;&nbsp;",$__Context->val->depth) ?> <?php echo $__Context->val->title ?> (<?php echo $__Context->val->document_count ?>)
					</option>
					<?php } ?>
				</select>
			</li>
			<?php } ?>
			<li>
				<label for="nTitle"><?php echo $__Context->lang->title ?></label>
				<input name="title" type="text" id="nTitle" />
			</li>
			<?php if(count($__Context->extra_keys)){ ?>
			<?php if($__Context->extra_keys&&count($__Context->extra_keys))foreach($__Context->extra_keys as $__Context->key=> $__Context->val){ ?>
			<li class="exvar">
				<label for="ex_<?php echo $__Context->val->name ?>"><?php echo $__Context->val->name ?> <?php if($__Context->val->is_required=="Y"){ ?>*<?php } ?></label>
				<?php echo $__Context->val->getFormHTML() ?>
			</li>
			<?php } ?>
			<?php } ?>
			<li>
				<label for="nText"><?php echo $__Context->lang->content ?></label>
				<textarea name="content" rows="8" cols="42" id="nText"></textarea>
			</li>
			<?php if(!$__Context->is_logged){ ?>
			<li>
				<label for="uName"><?php echo $__Context->lang->writer ?></label>
				<input name="nick_name" type="text" id="uName" />
			</li>
			<li>
				<label for="uMail"><?php echo $__Context->lang->email_address ?></label>
				<input name="email_address" type="email" id="uMail" />
			</li>
			<li>
				<label for="uPw"><?php echo $__Context->lang->password ?></label>
				<input name="password" type="password" id="uPw" />
			</li>
			<li>
				<label for="uSite"><?php echo $__Context->lang->homepage ?></label>
				<input name="homepage" type="url" id="uSite" value="" />
			</li>
			<?php } ?>
			<li>
				<input type="checkbox" name="comment_status" value="ALLOW" <?php if($__Context->oDocument->allowComment()){ ?>checked="checked"<?php } ?> id="reAllow" />
				<label for="reAllow"><?php echo $__Context->lang->allow_comment ?></label>
				<input type="checkbox" name="allow_trackback" value="Y" <?php if($__Context->oDocument->allowTrackback()){ ?>checked="checked"<?php } ?> id="trAllow" />
				<label for="trAllow"><?php echo $__Context->lang->allow_trackback ?></label>
				<?php if(is_array($__Context->status_list)){ ?>
				<div>
					<?php echo $__Context->lang->status ?>
					<?php if($__Context->status_list&&count($__Context->status_list))foreach($__Context->status_list AS $__Context->key=>$__Context->value){ ?>
					<input type="radio" name="status" value="<?php echo $__Context->key ?>" <?php if($__Context->oDocument->get('status') == $__Context->key){ ?>checked<?php } ?> /> <?php echo $__Context->value ?>
					<?php } ?>
				</div>
				<?php } ?>
			</li>
		</ul>
		<div class="bna">
			<button type="submit" class="bn dark"><?php echo $__Context->lang->cmd_registration ?></button>
		</div>
</form>
</div>
