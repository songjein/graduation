<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/menu/tpl/css/mmenu.css--><?php $__tmp=array('modules/menu/tpl/css/mmenu.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="bd">
	<ul class="gn">
		<?php  $__Context->start = true  ?>
		<?php  $__Context->depth = 0  ?>
		<?php if($__Context->menu&&count($__Context->menu))foreach($__Context->menu as $__Context->val){ ?>
		<?php if(!$__Context->start && $__Context->val->depth == $__Context->depth){ ?>
		</li>
		<?php } ?>
		<?php if($__Context->val->depth > $__Context->depth){ ?> 
		<ul>
		<?php }else{ ?>
		<?php while($__Context->val->depth < $__Context->depth){ ?>
		</li>
		</ul>
		<?php  $__Context->depth -= 1 ?>
		<?php } ?>
		<?php } ?>
		<li><a href="<?php echo $__Context->val->href ?>" ><?php echo $__Context->val->text ?></a>
			<?php  $__Context->start = false  ?>
			<?php  $__Context->depth = $__Context->val->depth  ?>
		<?php } ?>
		<?php while($__Context->depth > 0){ ?>
		</li>
		</ul>
		<?php  $__Context->depth -= 1 ?>
		<?php } ?>
		</li>
	</ul>
</div>
