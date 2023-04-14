<div class="col-md-4">
    <h3>Recent Posts</h3>
    <ul class="list-group">
        <?php foreach($resents_posts as $resents_post) :?>
            <li class="list-group-item"><a href="<?= $resents_post['slug']?>"><?= $resents_post['title']?></li>
        <?php endforeach;?>
    </ul>
</div>
