<?php if(!defined("__XE__"))exit;?><!-- COMMENT -->
<div class="feedback" id="comment">
	<div class="fbHeader">
		<h2><?php echo $__Context->lang->comment ?> <em><?php echo $__Context->oDocument->getCommentcount() ?></em></h2>
	</div>
	<?php if($__Context->oDocument->getCommentcount()){ ?><ul class="fbList">
		<?php if($__Context->oDocument->getComments()&&count($__Context->oDocument->getComments()))foreach($__Context->oDocument->getComments() as $__Context->key=>$__Context->comment){ ?><li<?php if(!$__Context->comment->get('depth')){ ?> class="fbItem"<?php };
if($__Context->comment->get('depth')){ ?> class="fbItem indent indent<?php echo ($__Context->comment->get('depth')) ?>"<?php } ?> id="comment_<?php echo $__Context->comment->comment_srl ?>">
			<div class="fbMeta">
				<?php if($__Context->comment->getProfileImage()){ ?><img src="<?php echo $__Context->comment->getProfileImage() ?>" alt="Profile" class="profile" /><?php } ?>
				<?php if(!$__Context->comment->getProfileImage()){ ?><span class="profile"></span><?php } ?>
				<h3 class="author">
					<?php if(!$__Context->comment->member_srl && $__Context->comment->homepage){ ?><a href="<?php echo $__Context->comment->getHomepageUrl() ?>"><?php echo $__Context->comment->getNickName() ?></a><?php } ?>
					<?php if(!$__Context->comment->member_srl && !$__Context->comment->homepage){ ?><strong><?php echo $__Context->comment->getNickName() ?></strong><?php } ?>
					<?php if($__Context->comment->member_srl){ ?><a href="#popup_menu_area" class="member_<?php echo $__Context->comment->member_srl ?>" onclick="return false"><?php echo $__Context->comment->getNickName() ?></a><?php } ?>
				</h3>
				<p class="time"><?php echo $__Context->comment->getRegdate('Y.m.d H:i') ?></p>
			</div>
			<?php if(!$__Context->comment->isAccessible()){ ?>
			<form action="./" method="get" class="xe_content" onsubmit="return procFilter(this, input_password)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
				<p><label for="cpw_<?php echo $__Context->comment->comment_srl ?>"><?php echo $__Context->lang->msg_is_secret ?> <?php echo $__Context->lang->msg_input_password ?></label></p>
				<p><input type="password" name="password" id="cpw_<?php echo $__Context->comment->comment_srl ?>" class="iText" /><input type="submit" class="btn" value="<?php echo $__Context->lang->cmd_input ?>" /></p>
				<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
				<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
				<input type="hidden" name="document_srl" value="<?php echo $__Context->comment->get('document_srl') ?>" />
				<input type="hidden" name="comment_srl" value="<?php echo $__Context->comment->get('comment_srl') ?>" />
			</form>
			<?php }else{ ?>
			<?php echo $__Context->comment->getContent(false) ?>
			<?php } ?>
			<?php if($__Context->comment->hasUploadedFiles()){ ?><div class="fileList">
				<button type="button" class="toggleFile" onclick="jQuery(this).next('ul.files').toggle();"><?php echo $__Context->lang->uploaded_file ?> [<strong><?php echo $__Context->comment->get('uploaded_count') ?></strong>]</button>
				<ul class="files">
					<?php if($__Context->comment->getUploadedFiles()&&count($__Context->comment->getUploadedFiles()))foreach($__Context->comment->getUploadedFiles() as $__Context->key=>$__Context->file){ ?><li><a href="<?php echo getUrl('');
echo $__Context->file->download_url ?>"><?php echo $__Context->file->source_filename ?> <span class="fileSize">[File Size:<?php echo FileHandler::filesize($__Context->file->file_size) ?>/Download:<?php echo number_format($__Context->file->download_count) ?>]</span></a></li><?php } ?>
				</ul>
			</div><?php } ?>
			<p class="action">
				<?php if($__Context->comment->get('voted_count')!=0){ ?><span class="vote"><?php echo $__Context->lang->cmd_vote ?>:<?php echo $__Context->comment->get('voted_count')?$__Context->comment->get('voted_count'):0 ?></span><?php } ?>
				<?php if($__Context->oDocument->allowComment()){ ?><a href="<?php echo getUrl('act','dispBoardReplyComment','comment_srl',$__Context->comment->comment_srl) ?>" class="reply"><?php echo $__Context->lang->cmd_reply ?></a><?php } ?>
				<?php if($__Context->comment->isGranted()||!$__Context->comment->get('member_srl')){ ?><a href="<?php echo getUrl('act','dispBoardModifyComment','comment_srl',$__Context->comment->comment_srl) ?>" class="modify"><?php echo $__Context->lang->cmd_modify ?></a><?php } ?>
				<?php if($__Context->comment->isGranted()||!$__Context->comment->get('member_srl')){ ?><a href="<?php echo getUrl('act','dispBoardDeleteComment','comment_srl',$__Context->comment->comment_srl) ?>" class="delete"><?php echo $__Context->lang->cmd_delete ?></a><?php } ?>
				<?php if($__Context->is_logged){ ?><a class="comment_<?php echo $__Context->comment->comment_srl ?> this" href="#popup_menu_area" onclick="return false"><?php echo $__Context->lang->cmd_comment_do ?></a><?php } ?>
			</p>
		</li><?php } ?>
	</ul><?php } ?>
    <?php if($__Context->oDocument->comment_page_navigation){ ?><div class="pagination">
        <a href="<?php echo getUrl('cpage',1) ?>#comment" class="direction prev"><span></span><span></span> <?php echo $__Context->lang->first_page ?></a> 
        <?php while($__Context->page_no=$__Context->oDocument->comment_page_navigation->getNextPage()){ ?>
			<?php if($__Context->cpage==$__Context->page_no){ ?><strong><?php echo $__Context->page_no ?></strong><?php } ?> 
			<?php if($__Context->cpage!=$__Context->page_no){ ?><a href="<?php echo getUrl('cpage',$__Context->page_no) ?>#comment"><?php echo $__Context->page_no ?></a><?php } ?>
        <?php } ?>
        <a href="<?php echo getUrl('cpage',$__Context->oDocument->comment_page_navigation->last_page) ?>#comment" class="direction next"><?php echo $__Context->lang->last_page ?> <span></span><span></span></a>
    </div><?php } ?>
	<?php if($__Context->grant->write_comment && $__Context->oDocument->isEnableComment()){ ?><form action="./" method="post" onsubmit="return procFilter(this, insert_comment)" class="write_comment" id="write_comment"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
		<input type="hidden" name="document_srl" value="<?php echo $__Context->oDocument->document_srl ?>" />
		<input type="hidden" name="comment_srl" value="" />
        <input type="hidden" name="content" value="" />
        <?php echo $__Context->oDocument->getCommentEditor() ?>
		<div class="write_author">
			<?php if(!$__Context->is_logged){ ?><span class="item">
				<label for="userName" class="iLabel"><?php echo $__Context->lang->writer ?></label>
				<input type="text" name="nick_name" id="userName" class="iText userName" />
			</span><?php } ?>
			<?php if(!$__Context->is_logged){ ?><span class="item">
				<label for="userPw" class="iLabel"><?php echo $__Context->lang->password ?></label>
				<input type="password" name="password" id="userPw" class="iText userPw" />
			</span><?php } ?>
			<?php if(!$__Context->is_logged){ ?><span class="item">
				<label for="homePage" class="iLabel"><?php echo $__Context->lang->homepage ?></label>
				<input type="text" name="homepage" id="homePage" class="iText homePage" />&nbsp;
			</span><?php } ?>
			<?php if($__Context->is_logged){ ?><input type="checkbox" name="notify_message" value="Y" id="notify_message" class="iCheck" /><?php } ?>
			<?php if($__Context->is_logged){ ?><label for="notify_message"><?php echo $__Context->lang->notify ?></label><?php } ?>
			<?php if($__Context->module_info->secret=='Y'){ ?><input type="checkbox" name="is_secret" value="Y" id="is_secret" class="iCheck" /><?php } ?>
			<?php if($__Context->module_info->secret=='Y'){ ?><label for="is_secret"><?php echo $__Context->lang->secret ?></label><?php } ?>
		</div>
		<div class="btnArea">
			<button type="submit" class="btn"><?php echo $__Context->lang->cmd_comment_registration ?></button>
		</div>
	</form><?php } ?>
</div>
<div class="fbFooter"> 
	<a href="<?php echo getUrl('document_srl','') ?>" class="btn"><?php echo $__Context->lang->cmd_list ?></a>
</div>
<!-- /COMMENT -->
