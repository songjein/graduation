<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/module/tpl/js/manage_selected_module.js--><?php $__tmp=array('modules/module/tpl/js/manage_selected_module.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<section id="manageSelectedModule" class="x_modal x">
	<div class="x_modal-header">
		<h1><?php echo $__Context->lang->do_selected ?></h1>
	</div>
	<div class="x_modal-body">
		<table class="x_table x_table-striped x_table-hover" style="margin-bottom:20px">
			<thead>
				<tr>
					<th scope="col"><?php echo $__Context->lang->mid ?></th>
					<th scope="col"><?php echo $__Context->lang->browser_title ?></th>
				</tr>
			</thead>
			<tbody id="manageSelectedModuleBody">
			</tbody>
		</table>
		<div class="x_tabbable">
			<ul class="x_nav x_nav-tabs">
				<?php if($__Context->tabChoice['tab1']){ ?><li class="x_active"><a href="#tab1"><?php echo $__Context->lang->bundle_setup ?></a></li><?php } ?>
				<?php if($__Context->tabChoice['tab2']){ ?><li><a href="#tab2"><?php echo $__Context->lang->bundle_addition_setup ?></a></li><?php } ?>
				<?php if($__Context->tabChoice['tab3']){ ?><li><a href="#tab3"><?php echo $__Context->lang->bundle_grant_setup ?></a></li><?php } ?>
			</ul>
			<div class="x_tab-content">
				<?php if($__Context->tabChoice['tab1']){ ?><div class="x_tab-pane x_active" id="tab1">
					<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/module/tpl','include.module_setup.html') ?>
				</div><?php } ?>
				<?php if($__Context->tabChoice['tab2']){ ?><div class="x_tab-pane" id="tab2">
					<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/module/tpl','include.module_addition_setup.html') ?>
				</div><?php } ?>
				<?php if($__Context->tabChoice['tab3']){ ?><div class="x_tab-pane" id="tab3">
					<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/module/tpl','include.module_grant_setup.html') ?>
				</div><?php } ?>
			</div>
		</div>
	</div>
	<div class="x_modal-footer">
		<button type="button" class="x_btn x_pull-left" data-hide="#manageSelectedModule"><?php echo $__Context->lang->cmd_close ?></button>
	</div>
</section>
