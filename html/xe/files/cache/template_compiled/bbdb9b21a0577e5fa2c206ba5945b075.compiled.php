<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/board/skins/default/board.default.css--><?php $__tmp=array('modules/board/skins/default/board.default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/skins/default/board.default.js--><?php $__tmp=array('modules/board/skins/default/board.default.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->order_type == "desc"){ ?>
    <?php  $__Context->order_type = "asc";  ?>
<?php }else{ ?>
    <?php  $__Context->order_type = "desc";  ?>
<?php } ?>
<?php if(!$__Context->module_info->duration_new = (int)$__Context->module_info->duration_new){;
$__Context->module_info->duration_new = 12;
} ?>
<?php  $__Context->cate_list = array(); $__Context->current_key = null;  ?>
<?php if($__Context->category_list&&count($__Context->category_list))foreach($__Context->category_list as $__Context->key=>$__Context->val){ ?>
	<?php if(!$__Context->val->depth){ ?>
		<?php 
			$__Context->cate_list[$__Context->key] = $__Context->val;
			$__Context->cate_list[$__Context->key]->children = array();
			$__Context->current_key = $__Context->key;
		 ?>
	<?php }elseif($__Context->current_key){ ?>
		<?php  $__Context->cate_list[$__Context->current_key]->children[] = $__Context->val  ?>
	<?php } ?>
<?php } ?>
<div class="board">
	<?php echo $__Context->module_info->header_text ?>
	<?php if($__Context->module_info->title_image || $__Context->grant->manager){ ?><div class="board_header">
		<?php if($__Context->module_info->title_image){ ?><h2><a href="<?php echo getUrl('','mid',$__Context->mid) ?>"><img src="<?php echo $__Context->module_info->title_image ?>" alt="<?php echo $__Context->module_info->title_alt ?>" /></a></h2><?php } ?>
		<?php if($__Context->grant->manager){ ?><a class="setup" href="<?php echo getUrl('act','dispBoardAdminBoardInfo') ?>" title="<?php echo $__Context->lang->cmd_setup ?>"><?php echo $__Context->lang->cmd_setup ?></a><?php } ?>
	</div><?php } ?>
	<?php if($__Context->module_info->use_category=='Y'){ ?><ul class="cTab">
		<li<?php if(!$__Context->category){ ?> class="on"<?php } ?>><a href="<?php echo getUrl('category','','page','') ?>"><?php echo $__Context->lang->total ?></a></li>
		<?php if($__Context->cate_list&&count($__Context->cate_list))foreach($__Context->cate_list as $__Context->key=>$__Context->val){ ?><li<?php if($__Context->category==$__Context->val->category_srl){ ?> class="on"<?php } ?>><a href="<?php echo getUrl(category,$__Context->val->category_srl,'document_srl','', 'page', '') ?>"><?php echo $__Context->val->title ?><!--<?php if($__Context->val->document_count){ ?><em>[<?php echo $__Context->val->document_count ?>]</em><?php } ?>--></a>
			<?php if(count($__Context->val->children)){ ?><ul>
				<?php if($__Context->val->children&&count($__Context->val->children))foreach($__Context->val->children as $__Context->idx=>$__Context->item){ ?><li<?php if($__Context->category==$__Context->item->category_srl){ ?> class="on_"<?php } ?>><a href="<?php echo getUrl(category,$__Context->item->category_srl,'document_srl','', 'page', '') ?>"><?php echo $__Context->item->title ?><!--<?php if($__Context->val->document_count){ ?><em>[<?php echo $__Context->item->document_count ?>]</em><?php } ?>--></a></li><?php } ?>
			</ul><?php } ?>
		</li><?php } ?>
	</ul><?php } ?>
