<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/integration_search/skins/default','header.html') ?>
<h3 class="subTitle"><?php echo $__Context->lang->document ?> <span>(<?php echo number_format($__Context->output->total_count) ?>)</span></h3>
<ul class="subNavigation">
    <?php if($__Context->lang->is_search_option['document']&&count($__Context->lang->is_search_option['document']))foreach($__Context->lang->is_search_option['document'] as $__Context->key => $__Context->val){ ?>
    <li value="<?php echo $__Context->key ?>" class="<?php if($__Context->search_target == $__Context->key){ ?>on<?php };
if($__Context->key=="tag"){ ?> last<?php } ?>"><a href="<?php echo getUrl('where','document','search_target',$__Context->key,'page',1,'division','') ?>"><?php echo $__Context->val ?></a></li>
    <?php } ?>
</ul>
<?php if(!count($__Context->output->data)){ ?>
    <span class="noResult">
        <?php echo $__Context->lang->msg_no_result ?>
        <?php if($__Context->last_division){ ?>
        <br><?php echo $__Context->lang->msg_document_more_search ?>
        <br><a class="btn" href="<?php echo getUrl('where','document','page',1,'document_srl','','search_target',$__Context->search_target,'is_keyword',$__Context->is_keyword,'division',$__Context->last_division,'last_division','') ?>"><?php echo $__Context->lang->cmd_search_next ?></a>
        <?php } ?>
    </span>
<?php }else{ ?>
    <ul class="searchResult">
    <?php if($__Context->output->data&&count($__Context->output->data))foreach($__Context->output->data as $__Context->no => $__Context->document){ ?>
        <li>
            <?php if($__Context->document->thumbnailExists(80)){ ?>
            <a href="<?php echo getUrl('','document_srl',$__Context->document->document_srl) ?>" onclick="window.open(this.href);return false;"><img src="<?php echo $__Context->document->getThumbnail(80) ?>" alt="" width="80" height="80" class="thumb" /></a>
            <?php } ?>
            <dl>
                <dt><a href="<?php echo getUrl('','document_srl',$__Context->document->document_srl) ?>" onclick="window.open(this.href);return false;"><?php echo $__Context->document->getTitle() ?></a> <?php if($__Context->document->getCommentCount()){ ?><span class="reply">[<em><?php echo $__Context->document->getCommentCount() ?></em>]</span> <?php } ?></dt>
                <dd><?php echo $__Context->document->getSummary(200) ?></dd>
            </dl>
            <address><strong><?php echo $__Context->document->getNickName() ?></strong> | <span class="time"><?php echo $__Context->document->getRegdate("Y-m-d H:i") ?></span> | <span class="read"><?php echo $__Context->lang->readed_count ?></span> <span class="readNum"><?php echo $__Context->document->get('readed_count') ?></span><?php if($__Context->document->get('voted_count')){ ?> | <span class="recom"><?php echo $__Context->lang->voted_count ?></span> <span class="recomNum"><?php echo $__Context->document->get('voted_count') ?></span><?php } ?></address>
        </li>
    <?php } ?>
    </ul>
    <?php if($__Context->where == 'document' && $__Context->output->page_navigation){ ?>
        <div class="pagination a1">
            <a href="<?php echo getAutoEncodedUrl('page','') ?>" class="prevEnd"><?php echo $__Context->lang->first_page ?></a> 
            <?php while($__Context->page_no = $__Context->output->page_navigation->getNextPage()){ ?>
                <?php if($__Context->page == $__Context->page_no){ ?>
                    <strong><?php echo $__Context->page_no ?></strong> 
                <?php }else{ ?>
                    <a href="<?php echo getAutoEncodedUrl('page',$__Context->page_no) ?>"><?php echo $__Context->page_no ?></a>
                <?php } ?>
            <?php } ?>
            <a href="<?php echo getAutoEncodedUrl('page',$__Context->output->page_navigation->last_page) ?>" <?php if(!$__Context->last_division){ ?>class="nextEnd"<?php } ?>><?php echo $__Context->lang->last_page ?></a>
            <?php if($__Context->last_division){ ?>
            <a href="<?php echo getAutoEncodedUrl('page',1,'document_srl','','search_target',$__Context->search_target,'is_keyword',$__Context->is_keyword,'division',$__Context->last_division,'last_division','') ?>" class="nextEnd"><?php echo $__Context->lang->cmd_search_next ?></a>
            <?php } ?>
        </div>
    <?php } ?>
<?php } ?>
