<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/page/tpl/js/page_admin.js--><?php $__tmp=array('modules/page/tpl/js/page_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/tpl','header.html') ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/module/tpl/manage_selected'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<!-- 검색 -->
<form action="./" method="get" class="search x_input-append x_pull-right" style="margin-bottom:-28px"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
	<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
	<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="act" value="dispPageAdminContent" />
	<select name="search_target" id="search_target" style="margin-right:4px">
		<option value="s_mid"<?php if($__Context->search_target=='s_mid'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->mid ?></option>
		<option value="s_browser_title"<?php if($__Context->search_target=='s_browser_title'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->browser_title ?></option>
		<?php if($__Context->module_category){ ?><option><?php echo $__Context->lang->module_category ?></option><?php } ?>
	</select>
	<?php if($__Context->module_category){ ?><select name="module_category_srl" title="<?php echo $__Context->lang->module_category ?>" style="margin-right:4px">
		<?php if($__Context->module_category&&count($__Context->module_category))foreach($__Context->module_category as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_category_srl==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
	</select><?php } ?>
	<input type="search" name="search_keyword" title="Search" value="<?php echo htmlspecialchars($__Context->search_keyword, ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" required style="width:150px" />
	<button class="x_btn x_btn-inverse" type="submit"><?php echo $__Context->lang->cmd_search ?></button>
	<a href="<?php echo getUrl('','module',$__Context->module,'act',$__Context->act) ?>" class="x_btn"><?php echo $__Context->lang->cmd_cancel ?></a>
</form>
<script>
jQuery(function($){
	$('#search_target').change(function(){
		var $this = $(this);
		if($this.find('>option:last-child').is(':selected')){
			$this.next('select').show().removeAttr('disabled').next('input[type="search"]').hide().attr('disabled','disabled');
		} else {
			$this.next('select').hide().attr('disabled','disabled').next('input[type="search"]').show().removeAttr('disabled');
		}
	}).change();
});
</script>
<!-- 목록 -->
<form action="./" method="get" id="fo_list"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<table class="x_table x_table-striped x_table-hover">
	<caption><strong>Total: <?php echo number_format($__Context->total_count) ?>, Page: <?php echo number_format($__Context->page) ?>/<?php echo number_format($__Context->total_page) ?></strong></caption>
	<thead>
		<tr>
			<th scope="col"><?php echo $__Context->lang->no ?></th>
			<th scope="col"><?php echo $__Context->lang->module_category ?></th>
			<th scope="col"><?php echo $__Context->lang->page_type ?></th>
			<th scope="col"><?php echo $__Context->lang->mid ?></th>
			<th scope="col"><?php echo $__Context->lang->browser_title ?></th>
			<th scope="col"><?php echo $__Context->lang->regdate ?></th>
			<th scope="col">&nbsp;</th>
			<th scope="col"><input type="checkbox" /></th>
		</tr>
	</thead>
	<tbody>
		<?php if($__Context->page_list&&count($__Context->page_list))foreach($__Context->page_list as $__Context->no => $__Context->val){ ?>
		<tr class="row<?php echo $__Context->cycle_idx ?>">
			<td><?php echo $__Context->no ?></td>
			<td>
				<?php if(!$__Context->val->module_category_srl){ ?>
				<?php if($__Context->val->site_srl){ ?>
				<?php echo $__Context->lang->virtual_site ?>
				<?php }else{ ?>
				<?php echo $__Context->lang->not_exists ?>
				<?php } ?>
				<?php }else{ ?>
				<?php echo $__Context->module_category[$__Context->val->module_category_srl]->title ?>
				<?php } ?>
				</td>
			<td><?php echo $__Context->val->page_type ?></td>
			<td><?php echo $__Context->val->mid ?></td>
			<td><a href="<?php echo getSiteUrl($__Context->val->domain,'','mid',$__Context->val->mid) ?>" target="_blank"><?php echo $__Context->val->browser_title ?></a></td>
			<td><?php echo zdate($__Context->val->regdate,"Y-m-d") ?></td>
			<td>
				<a href="<?php echo getUrl('act','dispPageAdminInfo','module_srl',$__Context->val->module_srl) ?>"><?php echo $__Context->lang->cmd_setup ?></a>
				<i>|</i>
				<a href="<?php echo getUrl('','module','module','act','dispModuleAdminCopyModule','module_srl',$__Context->val->module_srl) ?>" onclick="popopen(this.href);return false;"><?php echo $__Context->lang->cmd_copy ?></a>
				<i>|</i>
				<a href="<?php echo getUrl('act','dispPageAdminDelete','module_srl', $__Context->val->module_srl) ?>"><?php echo $__Context->lang->cmd_delete ?></a>
				</td>
			<td><input type="checkbox" name="cart" value="<?php echo $__Context->val->module_srl ?>" class="selectedModule" data-mid="<?php echo $__Context->val->mid ?>" data-browser_title="<?php echo $__Context->val->browser_title ?>" /></td>
		</tr>
	<?php } ?>
	</tbody>
</table>
<div class="x_clearfix">
	<div class="x_btn-group x_pull-right">
		<a class="x_btn modalAnchor x_pull-right _manageSelected" href="#manageSelectedModule"><?php echo $__Context->lang->cmd_manage_selected_page ?></a>
	</div>
</div>
</form>
<!-- 페이지 네비게이션 -->
<?php if($__Context->page_navigation){ ?><form action="./" class="x_pagination"  style="margin:-36px 0 0 0"><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
	<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
	<?php if($__Context->search_target){ ?><input type="hidden" name="search_target" value="<?php echo $__Context->search_target ?>" /><?php } ?>
	<?php if($__Context->search_keyword){ ?><input type="hidden" name="search_keyword" value="<?php echo $__Context->search_keyword ?>" /><?php } ?>
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
</form><?php } ?>
<?php echo $__Context->selected_manage_content ?>
<script>
jQuery(function($){
	// Modal anchor activation
	var $docTable = $('#fo_list>table');
	$docTable.find(':checkbox').change(function(){
		var $modalAnchor = $('a.modalAnchor._manageSelected');
		if($docTable.find('tbody :checked').length == 0){
			$modalAnchor.removeAttr('href').addClass('x_disabled');
		} else {
			$modalAnchor.attr('href','#manageSelectedModule').removeClass('x_disabled');
		}
	}).change();
	// Button action
	$('a.modalAnchor').click(function(){
		if($docTable.find('tbody :checked').length == 0){
			$('body').css('overflow','auto');
			alert('<?php echo $__Context->lang->msg_not_selected_page ?>');
			return false;
		}
	});
});
</script>
