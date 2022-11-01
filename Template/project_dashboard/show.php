<?php
    $config = !empty($GLOBALS["embedAnythingConfigs"][$project["id"]]) ? $GLOBALS["embedAnythingConfigs"][$project["id"]] : $GLOBALS["embedAnythingConfigs"]["0"];

    $paramProjectId = !empty($config["alias"]["project_id"]) ? $config["alias"]["project_id"] : "project_id";
    $paramProjectTitle = !empty($config["alias"]["project_title"]) ? $config["alias"]["project_title"] : "project_title";
    $paramSearchQuery = !empty($config["alias"]["search_query"]) ? $config["alias"]["search_query"] : "search_query";
    $queryStr = "?".$paramProjectId."=".$project['id']."&".$paramProjectTitle."=".$project['name']."&".$paramSearchQuery."=".$searchQuery;
?>
<section id="main">
    <?= $this->projectHeader->render($project, 'EmbedAnythingController', 'show', false, 'EmbedAnything') ?>
    <div class="sidebar-container">
        <div id="embed-anything" class="sidebar-content">
            <iframe src="<?= $config["embed"].$queryStr ?>" frameborder=0></iframe>
        </div>
    </div>
</section>