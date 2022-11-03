<section id="main">
    <?= $this->projectHeader->render($project, 'EmbedAnythingController', 'show', false, 'EmbedAnything') ?>
    <div class="sidebar-container">
        <div id="embed-anything" class="sidebar-content">
            <iframe src="<?= $url ?>" frameborder=0></iframe>
        </div>
    </div>
</section>
