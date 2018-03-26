<?foreach($posts as $post):?><div class="span8">
    <a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><h1><?=$post['post_subject']?></h1></a>
    <p><?=$post['post_text']?></p>

    <div>

        <span class="badge badge-success"><?=$post['post_created']?></span><div class="pull-right"><span class="label">alice</span> <span class="label">story</span> <span class="label">blog</span> <span class="label">personal</span></div>
        <span class="badge badge-success"><?=$post['user_id']?></span><div class="pull-right"><span class="label">a
        </div>
    </div>
    <?endforeach?>
