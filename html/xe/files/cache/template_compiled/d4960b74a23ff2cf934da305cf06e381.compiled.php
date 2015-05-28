<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/integration_search/skins/default','header.html') ?>
<h3 class="subTitle"><?php echo $__Context->lang->trackback ?> <span>(<?php echo number_format($__Context->output->total_count) ?>)</span></h3>
<ul class="subNavigation">
    <?php if($__Context->lang->is_search_option['trackback']&&count($__Context->lang->is_search_option['trackback']))foreach($__Context->lang->is_search_option['trackback'] as $__Context->key => $__Context->val){ ?>
    <li value="<?php echo $__Context->key ?>" class="<?php if($__Context->search_target == $__Context->key){ ?>on<?php };
if($__Context->key=="tag"){ ?> last<?php } ?>"><a href="<?php echo getUrl('where','trackback','search_target',$__Context->key,'page',1) ?>"><?php echo $__Context->val ?></a></li>
    <?php } ?>
</ul>
<?php if(!count($__Context->output->data)){ ?>
    <span class="noResult"><?php echo $__Context->lang->msg_no_result ?></span>
<?php }else{ ?>
    <ul class="searchResult">
    <?php if($__Context->output->data&&count($__Context->output->data))foreach($__Context->output->data as $__Context->no => $__Context->trackback){ ?>
        <li>
            <dl>
                <dt><a href="<?php echo getUrl('','document_srl',$__Context->trackback->document_srl) ?>" onclick="window.open(this.href);return false;"><?php echo htmlspecialchars($__Context->trackback->title, ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?></a> </span></dt>
                <dd><?php echo cut_str(htmlspecialchars($__Context->trackback->excerpt, ENT_COMPAT | ENT_HTML401, 'UTF-8', false)) ?></dd>
            </dl>
            <address><strong><a href="<?php echo $__Context->trackback->url ?>"><?php echo htmlspecialchars($__Context->trackback->blog_name, ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?></a></strong> | <span class="time"><?php echo zdate($__Context->trackback->regdate, "Y-m-d H:i") ?></span> </address>
        </li>
    <?php } ?>
    </ul>
    <?php if($__Context->where == 'trackback' && $__Context->output->page_navigation){ ?>
        <div class="pagination a1">
            <a href="<?php echo getUrl('page','') ?>" class="prevEnd"><?php echo $__Context->lang->first_page ?></a> 
            <?php while($__Context->page_no = $__Context->output->page_navigation->getNextPage()){ ?>
                <?php if($__Context->page == $__Context->page_no){ ?>
                    <strong><?php echo $__Context->page_no ?></strong> 
                <?php }else{ ?>
                    <a href="<?php echo getUrl('page',$__Context->page_no) ?>"><?php echo $__Context->page_no ?></a>
                <?php } ?>
            <?php } ?>
            <a href="<?php echo getUrl('page',$__Context->output->page_navigation->last_page) ?>" class="nextEnd"><?php echo $__Context->lang->last_page ?></a>
        </div>
    <?php } ?>
<?php } ?>
