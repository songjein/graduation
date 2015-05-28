<?php if(!defined("__XE__"))exit;?><div class="hx h2">
	<h2><a href="<?php echo getUrl('','vid',$__Context->vid,'mid',$__Context->mid) ?>"><?php echo $__Context->module_info->browser_title ?></a> <em>[<?php echo number_format($__Context->total_count) ?>]</em></h2>
	<?php if($__Context->module_info->use_category == "Y"){ ?><a href="<?php echo getUrl('page','','act','dispBoardCategory','') ?>" class="ca"><?php echo $__Context->lang->category ?></a><?php } ?>
	<a href="<?php echo getUrl('act','dispBoardWrite','document_srl','') ?>" class="write"><?php echo $__Context->lang->cmd_write ?></a>
</div>
<ul class="lt">
	<?php if($__Context->notice_list&&count($__Context->notice_list))foreach($__Context->notice_list as $__Context->no => $__Context->document){ ?>
	<li>
		<a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>">
		<span class="title"><span class="notice"><?php echo $__Context->lang->notice ?></span> <?php if($__Context->module_info->use_category == "Y" && $__Context->document->get('category_srl')){;
echo $__Context->category_list[$__Context->document->get('category_srl')]->title ?> &rsaquo;<?php } ?> <strong><?php echo $__Context->document->getTitle($__Context->module_info->subject_cut_size) ?></strong> <?php if($__Context->document->getCommentCount()){ ?><em>[<?php echo $__Context->document->getCommentCount() ?>]</em><?php } ?></span>
			<span class="auth"><strong><?php echo $__Context->document->getNickName() ?></strong> <span class="time"><?php echo $__Context->document->getRegDate("Y.m.d") ?></span></span>
		</a>
	</li>
	<?php } ?>
	<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->no => $__Context->document){ ?>
	<li>
		<a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>">
			<span class="title"><?php if($__Context->module_info->use_category == "Y" && $__Context->document->get('category_srl')){;
echo $__Context->category_list[$__Context->document->get('category_srl')]->title ?> &rsaquo;<?php } ?> <strong><?php echo $__Context->document->getTitle($__Context->module_info->subject_cut_size) ?></strong> <?php if($__Context->document->getCommentCount()){ ?><em>[<?php echo $__Context->document->getCommentCount() ?>]</em><?php } ?></span>
			<span class="auth"><strong><?php echo $__Context->document->getNickName() ?></strong> <span class="time"><?php echo $__Context->document->getRegDate("Y.m.d") ?></span></span>
		</a>
	</li>
	<?php } ?>
</ul>
<div class="pn">
	<?php if($__Context->page != 1){ ?>
	<a href="<?php echo getUrl('page',$__Context->page-1,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division,'entry','') ?>" class="prev"><?php echo $__Context->lang->cmd_prev ?></a> 
	<?php } ?>
	<strong><?php echo $__Context->page ?> / <?php echo $__Context->page_navigation->last_page ?></strong>
	<?php if($__Context->page != $__Context->page_navigation->last_page){ ?>
	<a href="<?php echo getUrl('page',$__Context->page+1,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division,'entry','') ?>" class="next"><?php echo $__Context->lang->cmd_next ?></a>
	<?php } ?>
</div>
<div class="sh">
	<form action="<?php echo getUrl() ?>" method="get"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
		<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
		<input type="hidden" name="category" value="<?php echo $__Context->category ?>" />
		<select name="search_target">
			<?php if($__Context->search_option&&count($__Context->search_option))foreach($__Context->search_option as $__Context->key => $__Context->val){ ?>
			<option value="<?php echo $__Context->key ?>" <?php if($__Context->search_target==$__Context->key){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
			<?php } ?>
		</select>
		<input type="search" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" title="<?php echo $__Context->lang->cmd_search ?>" />
		<button type="submit" class="shbn" title="<?php echo $__Context->lang->cmd_search ?>"></button>
	</form>
</div>
