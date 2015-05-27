<?php if(!defined("__XE__"))exit;?>	<h2 class="h2"><a href="<?php echo getUrl('','vid',$__Context->vid,'mid',$__Context->mid) ?>"><?php echo $__Context->module_info->browser_title ?></a> <em><?php echo number_format($__Context->total_count) ?></em> <?php if($__Context->module_info->use_category == "Y"){ ?><a href="<?php echo getUrl('page','','act','dispBoardCategory','') ?>" class="bn"><?php echo $__Context->lang->category ?></a><?php } ?></h2>
	<ul class="lt">
		<?php if($__Context->notice_list&&count($__Context->notice_list))foreach($__Context->notice_list as $__Context->no => $__Context->document){ ?>
		<li>
			<a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>">
				<span class="notice"><?php echo $__Context->lang->notice ?></span> <span class="title"><?php if($__Context->module_info->use_category == "Y" && $__Context->document->get('category_srl')){;
echo $__Context->category_list[$__Context->document->get('category_srl')]->title ?> &rsaquo;<?php } ?><strong><?php echo $__Context->document->getTitle($__Context->module_info->subject_cut_size) ?></strong> <?php if($__Context->document->getCommentCount()){ ?><span>[<?php echo $__Context->document->getCommentCount() ?>]</span><?php } ?></span>
				<span class="auth"><em><?php echo $__Context->document->getNickName() ?></em> <span><?php echo $__Context->document->getRegDate("Y.m.d") ?></span></span>
			</a>
		</li>
		<?php } ?>
		<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->no => $__Context->document){ ?>
		<li>
			<a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>">
				<span class="title"><?php if($__Context->module_info->use_category == "Y" && $__Context->document->get('category_srl')){;
echo $__Context->category_list[$__Context->document->get('category_srl')]->title ?> &rsaquo;<?php } ?><strong><?php echo $__Context->document->getTitle($__Context->module_info->subject_cut_size) ?></strong> <?php if($__Context->document->getCommentCount()){ ?><span>[<?php echo $__Context->document->getCommentCount() ?>]</span><?php } ?></span>
				<span class="auth"><em><?php echo $__Context->document->getNickName() ?></em> <span><?php echo $__Context->document->getRegDate("Y.m.d") ?></span></span>
			</a>
		</li>
		<?php } ?>
	</ul>
	<div class="pn">
        <?php if($__Context->page != 1){ ?>
		<a href="<?php echo getUrl('page',$__Context->page-1,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division,'entry','') ?>">&lsaquo; <?php echo $__Context->lang->cmd_prev ?></a> 
        <?php } ?>
        <strong><?php echo $__Context->page ?> / <?php echo $__Context->page_navigation->last_page ?></strong>
        <?php if($__Context->page != $__Context->page_navigation->last_page){ ?>
		<a href="<?php echo getUrl('page',$__Context->page+1,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division,'entry','') ?>"><?php echo $__Context->lang->cmd_next ?> &rsaquo;</a>
        <?php } ?>
	</div>
	<div class="cm">
		<a href="<?php echo getUrl('act','dispBoardWrite','document_srl','') ?>" class="bn"><?php echo $__Context->lang->cmd_write ?></a>
	</div>
