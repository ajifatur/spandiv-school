<div class="recent-post">
    <div class="flex-shrink-0">
        <a href="<?= get_permalink($recent_post['ID']) ?>">
            <?php if(has_post_thumbnail($recent_post['ID'])) : ?>
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" style="background-image: url('<?= get_the_post_thumbnail_url($recent_post['ID']) ?>');">
            <?php else : ?>
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" style="background-image: url('<?= bloginfo('template_url') ?>/assets/images/icon/thumbnail.png">
            <?php endif; ?>
        </a>
    </div>
    <div class="flex-grow-1 ms-3">
        <p class="mb-0"><a class="h6 link-dark text-decoration-none" href="<?= get_permalink($recent_post['ID']) ?>"><?= $recent_post['post_title'] ?></a></p>
        <p class="mb-0"><small class="text-muted"><i class="bi-calendar me-1"></i><?= date('d/m/Y', strtotime($recent_post['post_date'])) ?></small></p>
    </div>
</div>