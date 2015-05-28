<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/comment/tpl','header.html') ?>
<script>
xe.lang.msg_empty_search_target = '<?php echo $__Context->lang->msg_empty_search_target ?>';
xe.lang.msg_empty_search_keyword = '<?php echo $__Context->lang->msg_empty_search_keyword ?>';
</script>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/comment/tpl/comment_list/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<form id="fo_list" action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<table id="commentListTable" class="x_table x_table-striped x_table-hover">
		<caption>
			<a href="<?php echo getUrl('','module','admin','act','dispCommentAdminList','Y') ?>"<?php if($__Context->search_keyword == ''){ ?> class="active"<?php } ?>><?php echo $__Context->lang->all;
if($__Context->search_keyword == ''){ ?>(<?php echo number_format($__Context->total_count) ?>)<?php } ?></a>
			<i>|</i>
			<a href="<?php echo getUrl('search_target','is_secret','search_keyword','N') ?>"<?php if($__Context->search_target == 'is_secret' && $__Context->search_keyword == 'N'){ ?> class="active"<?php } ?>><?php echo $__Context->secret_name_list['N'];
if($__Context->search_target == 'is_secret' && $__Context->search_keyword == 'N'){ ?>(<?php echo number_format($__Context->total_count) ?>)<?php } ?></a>
			<i>|</i>
			<a href="<?php echo getUrl('search_target','is_secret','search_keyword','Y') ?>"<?php if($__Context->search_target == 'is_secret' && $__Context->search_keyword == 'Y'){ ?> class="active"<?php } ?>><?php echo $__Context->secret_name_list['Y'];
if($__Context->search_target == 'is_secret' && $__Context->search_keyword == 'Y'){ ?>(<?php echo number_format($__Context->total_count) ?>)<?php } ?></a>
			<i>|</i>
			<a href="<?php echo getUrl('search_target','is_published','search_keyword','N') ?>"<?php if($__Context->search_target == 'is_published' && $__Context->search_keyword == 'N'){ ?> class="active"<?php } ?>><?php echo $__Context->lang->published_name_list['N'];
if($__Context->search_target == 'is_published' && $__Context->search_keyword == 'N'){ ?>(<?php echo number_format($__Context->total_count) ?>)<?php } ?></a>
			<i>|</i>
			<a href="<?php echo getUrl('search_target','is_published','search_keyword','Y') ?>"<?php if($__Context->search_target == 'is_published' && $__Context->search_keyword == 'Y'){ ?> class="active"<?php } ?>><?php echo $__Context->lang->published_name_list['Y'];
if($__Context->search_target == 'is_published' && $__Context->search_keyword == 'Y'){ ?>(<?php echo number_format($__Context->total_count) ?>)<?php } ?></a>
			<i>|</i>
			<a href="<?php echo getUrl('', 'module', 'admin', 'act','dispCommentAdminDeclared') ?>"><?php echo $__Context->lang->cmd_declared_list ?></a>
			<?php if($__Context->search_target == 'ipaddress'){ ?><i>|</i><?php } ?>
			<?php if($__Context->search_target == 'ipaddress'){ ?><a href="<?php echo getUrl('search_target', 'ipaddress') ?>" class="active"><?php echo $__Context->lang->ipaddress ?>:<?php echo $__Context->search_keyword ?>(<?php echo number_format($__Context->total_count) ?>)</a><?php } ?>
			
			<div class="x_btn-group x_pull-right">
				<a href="#listManager" class="x_btn modalAnchor" data-value="true" data-name="is_trash"><?php echo $__Context->lang->trash ?></a>
				<a href="#listManager" class="x_btn modalAnchor" data-value="false" data-name="is_trash"><?php echo $__Context->lang->delete ?></a>
				<?php if($__Context->search_target=='is_published' && $__Context->search_keyword=='Y'){ ?><a href="#listManager" class="x_btn modalAnchor" data-value="0" data-name="will_publish"><?php echo $__Context->lang->cmd_unpublish ?></a><?php } ?>
				<?php if($__Context->search_target=='is_published' && $__Context->search_keyword=='N'){ ?><a href="#listManager" class="x_btn modalAnchor" data-value="1" data-name="will_publish"><?php echo $__Context->lang->cmd_publish ?></a><?php } ?>
				<?php if($__Context->search_target!='is_published'){ ?><a href="#listManager" class="x_btn modalAnchor" data-value="0" data-name="will_publish"><?php echo $__Context->lang->cmd_unpublish ?></a><?php } ?>
				<?php if($__Context->search_target!='is_published'){ ?><a href="#listManager" class="x_btn modalAnchor" data-value="1" data-name="will_publish"><?php echo $__Context->lang->cmd_publish ?></a><?php } ?>
			</div>
		</caption>
		<thead>
			<tr>
				<th scope="col"><?php echo $__Context->lang->comment ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->writer ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->cmd_vote ?>(+/-)</th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->date ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->ipaddress ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->status ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->published ?></th>
				<th scope="col"><input type="checkbox" data-name="cart" title="Check All" /></th>
			</tr>
		</thead>
		<tbody>
			<?php if($__Context->comment_list&&count($__Context->comment_list))foreach($__Context->comment_list as $__Context->no=>$__Context->val){ ?><tr>
				<?php  $__Context->comment = $__Context->val->getContentText(200) ?>
				<td><a href="<?php echo getUrl('','document_srl',$__Context->val->document_srl) ?>#comment_<?php echo $__Context->val->comment_srl ?>" target="_blank"><?php if(strlen($__Context->comment)){;
echo $__Context->comment;
}else{ ?><em><?php echo $__Context->lang->no_text_comment ?></em><?php } ?></a></td>
				<td class="nowr"><a href="#popup_menu_area" class="member_<?php echo $__Context->val->member_srl ?>"><?php echo $__Context->val->getNickName() ?></a></td>
				<td class="nowr"><?php echo number_format($__Context->val->get('voted_count')) ?>/<?php echo number_format($__Context->val->get('blamed_count')) ?></td>
				<td class="nowr"><?php echo (zdate($__Context->val->regdate,"Y-m-d\nH:i:s")) ?></td>
				<td class="nowr"><a href="<?php echo getUrl('search_target','ipaddress','search_keyword',$__Context->val->ipaddress) ?>"><?php echo $__Context->val->ipaddress ?></a></td>
				<td class="nowr"><?php if($__Context->val->isSecret()){;
echo $__Context->secret_name_list['Y'];
}else{;
echo $__Context->secret_name_list['N'];
} ?></td>
				<td class="nowr"><?php if($__Context->val->status){;
echo $__Context->lang->published_name_list['Y'];
}else{;
echo $__Context->lang->published_name_list['N'];
} ?></td>
				<td><input type="checkbox" name="cart" value="<?php echo $__Context->val->comment_srl ?>" /></td>
			</tr><?php } ?>
			<?php if(!$__Context->comment_list){ ?><tr>
				<td><?php echo $__Context->lang->no_documents ?></td>
			</tr><?php } ?>
		</tbody>
	</table>
	<div class="x_btn-group x_pull-right">
		<a href="#listManager" class="x_btn modalAnchor" data-value="true" data-name="is_trash"><?php echo $__Context->lang->trash ?></a>
		<a href="#listManager" class="x_btn modalAnchor" data-value="false" data-name="is_trash"><?php echo $__Context->lang->delete ?></a>
		<?php if($__Context->search_target=='is_published' && $__Context->search_keyword=='Y'){ ?><a href="#listManager" class="x_btn modalAnchor" data-value="0" data-name="will_publish"><?php echo $__Context->lang->cmd_unpublish ?></a><?php } ?>
		<?php if($__Context->search_target=='is_published' && $__Context->search_keyword=='N'){ ?><a href="#listManager" class="x_btn modalAnchor" data-value="1" data-name="will_publish"><?php echo $__Context->lang->cmd_publish ?></a><?php } ?>
		<?php if($__Context->search_target!='is_published'){ ?><a href="#listManager" class="x_btn modalAnchor" data-value="0" data-name="will_publish"><?php echo $__Context->lang->cmd_unpublish ?></a><?php } ?>
		<?php if($__Context->search_target!='is_published'){ ?><a href="#listManager" class="x_btn modalAnchor" data-value="1" data-name="will_publish"><?php echo $__Context->lang->cmd_publish ?></a><?php } ?>
	</div>
</form>
<form action="./" class="x_pagination"><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="error_return_url" value="" />
	<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
	<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
  	<?php if($__Context->search_keyword){ ?><input type="hidden" name="search_keyword" value="<?php echo $__Context->search_keyword ?>" /><?php } ?>
  	<?php if($__Context->search_target){ ?><input type="hidden" name="search_target" value="<?php echo $__Context->search_target ?>" /><?php } ?>
	<ul>
		<li<?php if(!$__Context->page || $__Context->page == 1){ ?> class="x_disabled"<?php } ?>><a href="<?php echo getUrl('page', '') ?>">&laquo; <?php echo $__Context->lang->first_page ?></a></li>
		<?php if($__Context->page_navigation->first_page != 1 && $__Context->page_navigation->first_page + $__Context->page_navigation->page_count > $__Context->page_navigation->last_page - 1 && $__Context->page_navigation->page_count != $__Context->page_navigation->total_page){ ?>
		<?php $__Context->isGoTo = true ?>
		<li>
			<a href="#goTo" data-toggle title="<?php echo $__Context->lang->cmd_go_to_page ?>">&hellip;</a>
			<?php if($__Context->isGoTo){ ?><span id="goTo" class="x_input-append">
				<input type="number" min="1" max="<?php echo $__Context->page_navigation->last_page ?>" required name="page" title="<?php echo $__Context->lang->cmd_go_to_page ?>" />
				<button type="submit" class="x_add-on">Go</button>
			</span><?php } ?>
		</li>
		<?php } ?>
		<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
		<?php $__Context->last_page = $__Context->page_no ?>
		<li<?php if($__Context->page_no == $__Context->page){ ?> class="x_active"<?php } ?>><a  href="<?php echo getUrl('page', $__Context->page_no) ?>"><?php echo $__Context->page_no ?></a></li>
		<?php } ?>
		<?php if($__Context->last_page != $__Context->page_navigation->last_page && $__Context->last_page + 1 != $__Context->page_navigation->last_page){ ?>
		<?php $__Context->isGoTo = true ?>
		<li>
			<a href="#goTo" data-toggle title="<?php echo $__Context->lang->cmd_go_to_page ?>">&hellip;</a>
			<?php if($__Context->isGoTo){ ?><span id="goTo" class="x_input-append">
				<input type="number" min="1" max="<?php echo $__Context->page_navigation->last_page ?>" required name="page" title="<?php echo $__Context->lang->cmd_go_to_page ?>" />
				<button type="submit" class="x_add-on">Go</button>
			</span><?php } ?>
		</li>
		<?php } ?>
		<li<?php if($__Context->page == $__Context->page_navigation->last_page){ ?> class="x_disabled"<?php } ?>><a href="<?php echo getUrl('page', $__Context->page_navigation->last_page) ?>" title="<?php echo $__Context->page_navigation->last_page ?>"><?php echo $__Context->lang->last_page ?> &raquo;</a></li>
	</ul>
</form>
<form action="./" method="get" class="search center x_input-append" onsubmit="return checkSearch(this)"><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
	<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
	<input type="hidden" name="module_srl" value="<?php echo $__Context->module_srl ?>" />
	<input type="hidden" name="error_return_url" value="" />
	<select name="search_target" title="<?php echo $__Context->lang->search_target ?>" style="margin-right:4px">
		<?php if($__Context->lang->search_target_list&&count($__Context->lang->search_target_list))foreach($__Context->lang->search_target_list as $__Context->key => $__Context->val){ ?>
		<option value="<?php echo $__Context->key ?>" <?php if($__Context->search_target==$__Context->key){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
		<?php } ?>
	</select>
	<input type="search" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword, ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
	<button type="submit" class="x_btn x_btn-inverse"><?php echo $__Context->lang->cmd_search ?></button>
	<a href="<?php echo getUrl('','module',$__Context->module,'act',$__Context->act) ?>" class="x_btn"><?php echo $__Context->lang->cmd_cancel ?></a>
</form>
<?php Context::addJsFile("modules/comment/ruleset/deleteChecked.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="./" method="post" class="x_modal x" id="listManager"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="deleteChecked" />
	<input type="hidden" name="module" value="comment" />
	<input type="hidden" name="act" value="procCommentAdminDeleteChecked" />
	<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
	<input type="hidden" name="is_trash" value="false" />
	<input type="hidden" name="will_publish" value="0" />
	<input type="hidden" name="search_target" value="<?php echo $__Context->search_target ?>" />
	<input type="hidden" name="search_keyword" value="<?php echo $__Context->search_keyword ?>" />
	<input type="hidden" name="xe_validator_id" value="modules/comment/tpl/comment_list/1" />
	<div class="x_modal-header">
		<h1><?php echo $__Context->lang->comment_manager ?>: <span class="_sub"></span></h1>
	</div>
	<div class="x_modal-body">
		<table id="commentManageListTable" class="x_table x_table-striped x_table-hover">
			<caption>
				<strong><?php echo $__Context->lang->selected_comment ?> <span id="selectedCommentCount"></span></strong>
			</caption>
			<thead>
				<tr>
					<th scope="col" class="title"><?php echo $__Context->lang->comment ?></th>
					<th scope="col" class="nowr"><?php echo $__Context->lang->writer ?></th>
					<th scope="col" class="nowr"><?php echo $__Context->lang->status ?></th>
					<th scope="col"><?php echo $__Context->lang->published ?></th>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
		<div class="x_control-group" style="margin:15px 14px 0 0">
			<label for="message"><?php echo $__Context->lang->message_notice ?></label>
			<textarea rows="4" cols="42" name="message_content" id="message" style="width:100%"></textarea>
		</div>
	</div>
	<div class="x_modal-footer">
		<button type="submit" class="x_btn x_btn-inverse x_pull-right" name="is_trash|will_publish" value="true|false|0|1"><?php echo $__Context->lang->cmd_confirm ?></button>
	</div>
</form>
<script>
jQuery(function($){
	// Modal anchor activation
	var $docTable = $('#commentListTable');
	$docTable.find(':checkbox').change(function(){
		var $modalAnchor = $('a[data-value]');
		if($docTable.find('tbody :checked').length == 0){
			$modalAnchor.removeAttr('href').addClass('x_disabled');
		} else {
			$modalAnchor.attr('href','#listManager').removeClass('x_disabled');
		}
	}).change();
	// Button action
	$('a[data-value]').bind('before-open.mw', function(){
		if($docTable.find('tbody :checked').length == 0){
			$('body').css('overflow','auto');
			alert('<?php echo $__Context->lang->msg_not_selected_comment ?>');
			return false;
		} else {
			var $this = $(this);
			var thisValue = $this.attr('data-value');
			var thisName = $this.attr('data-name');
			var thisText = $this.text();
			getCommentList();
			$('#listManager').find('.x_modal-header ._sub').text(thisText).end().find('[type="submit"]:eq(0)').val(thisValue).attr('name', thisName).text(thisText);
		}
	});
	$('.x_modal-footer').on("click", '[type="submit"][name="will_publish"]', function(){
		doChangePublishedStatus($(this).val());
	});
});
</script>
