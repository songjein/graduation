<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/integration_search/skins/default','header.html') ?>
<h3 class="subTitle"><?php echo $__Context->lang->file ?> <span>(<?php echo number_format($__Context->output->total_count) ?>)</span></h3>
<?php if(!count($__Context->output->data)){ ?>
    <span class="noResult"><?php echo $__Context->lang->msg_no_result ?></span>
<?php }else{ ?>
    <ul class="searchResult">
    <?php if($__Context->output->data&&count($__Context->output->data))foreach($__Context->output->data as $__Context->no => $__Context->file){ ?>
        <li>
            <dl>
                <dt><a href="<?php echo $__Context->file->url ?>" onclick="window.open(this.href);return false;"><?php echo $__Context->file->filename ?></a> (<?php echo FileHandler::filesize($__Context->file->file_size) ?>)</dt>
            </dl>
            <address><strong><?php echo $__Context->file->nick_name ?></strong> | <span class="time"><?php echo $__Context->file->regdate ?></span> | <span class="recomNum"><?php echo number_format($__Context->file->download_count) ?></span> </address>
        </li>
    <?php } ?>
    </ul>
    <?php if($__Context->where == 'file' &&  $__Context->output->page_navigation){ ?>
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
