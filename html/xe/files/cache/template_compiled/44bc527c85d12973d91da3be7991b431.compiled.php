<?php if(!defined("__XE__"))exit;?><h1 class="h1"><?php echo $__Context->lang->cmd_view_saved_document ?></h1>
<!-- 목록 -->
<table class="x_table x_table-striped x_table-hover">
	<caption>Total : <?php echo number_format($__Context->total_count) ?>, Page <?php echo number_format($__Context->page) ?>/<?php echo number_format($__Context->total_page) ?></caption>
	<thead>
		<tr>
			<th class="title"><?php echo $__Context->lang->date ?></th>
			<th class="title"><?php echo $__Context->lang->title ?></th>
			<th class="title"><?php echo $__Context->lang->cmd_select ?></th>
		</tr>
	</thead>
	<tbody>
		<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->no => $__Context->val){ ?>
		<tr>
			<td><?php echo $__Context->val->getRegdate("Y-m-d H:i:s") ?></td>
			<td > <a href="#" onclick="jQuery('#saved_document_<?php echo $__Context->val->document_srl ?>').toggle(); setFixedPopupSize(); return false;"><?php echo $__Context->val->getTitle() ?></a>
				<div id="saved_document_<?php echo $__Context->val->document_srl ?>" class="saved_content" style="display:none;"><?php echo $__Context->val->getContent(false) ?></div>
			</td>
			<td><a href="#" onclick="doDocumentSelect('<?php echo $__Context->val->document_srl ?>'); return false;" class="buttonSet buttonActive"><span><?php echo $__Context->lang->cmd_select ?></span></a></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<!-- 페이지 네비게이션 -->
<div class="pagination">
	<a href="<?php echo getUrl('page','','module_srl','') ?>" class="direction">&lsaquo; <?php echo $__Context->lang->first_page ?></a>
	<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
		<?php if($__Context->page == $__Context->page_no){ ?>
			<strong><?php echo $__Context->page_no ?></strong>
		<?php }else{ ?>
			<a href="<?php echo getUrl('page',$__Context->page_no,'module_srl','') ?>"><?php echo $__Context->page_no ?></a>
		<?php } ?>
	<?php } ?>
	<a href="<?php echo getUrl('page',$__Context->page_navigation->last_page,'module_srl','') ?>" class="direction"><?php echo $__Context->lang->last_page ?> &rsaquo;</a>
</div>
