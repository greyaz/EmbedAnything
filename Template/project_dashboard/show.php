<?php
    $config = !empty($GLOBALS["embedAnythingConfigs"][$project["id"]]) ? $GLOBALS["embedAnythingConfigs"][$project["id"]] : $GLOBALS["embedAnythingConfigs"]["0"];
    $queryStr = "?project_id=".$project['id']."&project_title=".$project['name'];
    parse_str($_SERVER['QUERY_STRING'], $queries);
    if (!empty($queries["search"])){
        $queryStr .= "&search=".$queries["search"];
    }
?>
<section class="page">
    <?= $this->projectHeader->render($project, 'EmbedAnythingController', 'show', false, 'EmbedAnything') ?>
    <div class="sidebar-container">
        <div id="embed-anything" class="sidebar-content">
            <iframe src="<?= $config["embed"].$queryStr ?>" frameborder=0></iframe>
        </div>
    </div>
</section>