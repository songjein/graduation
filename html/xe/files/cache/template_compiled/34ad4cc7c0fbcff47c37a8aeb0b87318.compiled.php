<?php if(!defined("__XE__"))exit;
Context::addJsFile("./common/js/jquery.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/js_app.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/common.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/xml_handler.js", true, '', -100000)  ?>
<?php  Context::addJsFile("./common/js/xml_js_filter.js", true, '', -100000)  ?>
<!--#Meta:modules/board/m.skins/simpleGray/css/mboard.css--><?php $__tmp=array('modules/board/m.skins/simpleGray/css/mboard.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="bd">
<?php if($__Context->oDocument->isExists()){ ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/simpleGray','read.html') ?>
<?php }else{ ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/m.skins/simpleGray','_list.html') ?>
<?php } ?>
</div>
