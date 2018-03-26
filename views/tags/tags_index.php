<div class="list-group">
    <?foreach ($tags as $tag):?>
        <a href="tags" class="list-group-item"><?=$tag['tag_name']?></a>
    <?endforeach;?>
</div>