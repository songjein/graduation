<?php if(!defined("__XE__"))exit;?><ul id="cl" class="rp tgo open">
	<?php  $__Context->_comment_list = $__Context->oDocument->getComments()  ?>
	<?php  $__Context->start = true  ?>
	<?php  $__Context->depth = 0  ?>
	<?php if($__Context->_comment_list&&count($__Context->_comment_list))foreach($__Context->_comment_list as $__Context->key => $__Context->comment){ ?>
	<?php if(!$__Context->start && $__Context->comment->get('depth') == $__Context->depth){ ?>
	</li>
	<?php } ?>
	<?php if($__Context->comment->get('depth') > $__Context->depth){ ?>
	<ul>
	<?php }else{ ?>
	<?php while($__Context->comment->get('depth') < $__Context->depth){ ?>
	</li>
	</ul>
	<?php  $__Context->depth -= 1  ?>
	<?php } ?>
	<?php } ?>
	<li>
		<?php echo $__Context->comment->getContent(false) ?>
		<span class="auth">
			<em><?php echo $__Context->comment->getNickName() ?></em>
			<span class="time"><?php echo $__Context->comment->getRegdate("Y.m.d") ?></span>
			<?php if($__Context->comment->isGranted() || !$__Context->comment->get('member_srl')){ ?>
			<a href="<?php echo getUrl('act','dispBoardDeleteComment','comment_srl',$__Context->comment->comment_srl) ?>" class="btn de"><?php echo $__Context->lang->cmd_delete ?></a>
			<?php } ?>
			<a href="<?php echo getUrl('act','dispBoardReplyComment','comment_srl',$__Context->comment->comment_srl) ?>" class="btn re"><?php echo $__Context->lang->cmd_reply ?></a>
			<?php  $__Context->start = false  ?>
			<?php  $__Context->depth = $__Context->comment->get('depth')  ?>
		</span>
	<?php } ?>
	<?php while($__Context->depth > 0){ ?>
	</li>
	</ul>
	<?php  $__Context->depth -= 1 ?>
	<?php } ?>
	</li>
</ul>
<?php if($__Context->oDocument->comment_page_navigation){ ?>
	<div id="clpn" class="pn">
	<?php if($__Context->oDocument->comment_page_navigation->cur_page != 1){ ?>
	<a href="#" onclick="loadPage(<?php echo $__Context->oDocument->document_srl ?>, <?php echo $__Context->oDocument->comment_page_navigation->cur_page-1 ?>); return false;">&lsaquo; <?php echo $__Context->lang->cmd_prev ?></a>
	<?php } ?>
	<strong id="curpage"><?php echo $__Context->oDocument->comment_page_navigation->cur_page ?> / <?php echo $__Context->oDocument->comment_page_navigation->last_page ?></strong>
	<?php if($__Context->oDocument->comment_page_navigation->cur_page != $__Context->oDocument->comment_page_navigation->last_page){ ?>
	<a href="#" onclick="loadPage(<?php echo $__Context->oDocument->document_srl ?>, <?php echo $__Context->oDocument->comment_page_navigation->cur_page+1 ?>); return false;"><?php echo $__Context->lang->cmd_next ?> &rsaquo;</a>
	<?php } ?>
	</div>
<?php } ?>
