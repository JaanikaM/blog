<div class="span8">
    <p><?=$post['posts_subject']?></p>
    <p><?=$post['post_text']?></p>
    <div>
        <span class="badge badge-success"><?=$post['post_created']?></span><div class="pull-right"><span class="label"></span>
            <span class="badge badge-success"><?=$post['user_id']?></span>
            <div>
                <?foreach ($tags as $tag):?>
                    <span class="badge badge-success"><?=$tag['tag_name']?></span>
                <?endforeach;?>
            </div>
        </div>
    </div>
</div>