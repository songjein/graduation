<?php if(!defined("__XE__"))exit;
if(!$__Context->_loaded){ ?>
    <?php  $__Context->_loaded = true;  ?>
    
    <?php if($__Context->module_info->colorset != "white"){ ?>
        <?php $__Context->module_info->colorset = "white" ?>
    <?php } ?>
    
    <?php if($__Context->module_info->colorset == "white"){ ?>
        <!--#Meta:modules/integration_search/skins/default/white.css--><?php $__tmp=array('modules/integration_search/skins/default/white.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
    <?php } ?>
    <div id="spot">
        <form action="<?php echo getUrl() ?>" method="post" class="search" id="fo_is"  ><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
            <input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
            <input type="hidden" name="act" value="IS" />
            <input type="hidden" name="where" value="<?php echo $__Context->where ?>" />
			<input type="hidden" name="search_target" value="title_content" />
            <input name="is_keyword" type="text" required value="<?php echo $__Context->is_keyword ?>"/>
            <input type="submit" value="<?php echo $__Context->lang->cmd_search ?>" />
        </form>
    </div>
    <ul class="localNavigation">
        <li <?php if(!$__Context->where){ ?>class="on"<?php } ?>><a href="<?php echo getAutoEncodedUrl('where','','page','','division','') ?>"><?php echo $__Context->lang->integration_search ?></a></li>
        <li <?php if($__Context->where=='document'){ ?>class="on"<?php } ?>><a href="<?php echo getAutoEncodedUrl('where','document','page',1,'division','') ?>"><?php echo $__Context->lang->document ?></a></li>
        <li <?php if($__Context->where=='comment'){ ?>class="on"<?php } ?>><a href="<?php echo getAutoEncodedUrl('where','comment','page',1,'division','') ?>"><?php echo $__Context->lang->comment ?></a></li>
        <li <?php if($__Context->where=='trackback'){ ?>class="on"<?php } ?>><a href="<?php echo getAutoEncodedUrl('where','trackback','page',1,'division','') ?>"><?php echo $__Context->lang->trackback ?></a></li>
        <li <?php if($__Context->where=='multimedia'){ ?>class="on"<?php } ?>><a href="<?php echo getAutoEncodedUrl('where','multimedia','page',1,'division','') ?>"><?php echo $__Context->lang->multimedia ?></a></li>
        <li <?php if($__Context->where=='file'){ ?>class="on"<?php } ?>><a href="<?php echo getAutoEncodedUrl('where','file','page',1,'division','') ?>"><?php echo $__Context->lang->file ?></a></li>
    </ul>
<?php } ?>
