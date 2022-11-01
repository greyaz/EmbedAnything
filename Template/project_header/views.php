<?php
    $config = !empty($GLOBALS["embedAnythingConfigs"][$project["id"]]) ? $GLOBALS["embedAnythingConfigs"][$project["id"]] : $GLOBALS["embedAnythingConfigs"]["0"];
?>
<?php if(!empty($config)): ?>
    <li <?= $this->app->checkMenuSelection('EmbedAnythingController') ?>>
        <?= $this->url->icon(
            $config["icon"],
            $config["label"],
            'EmbedAnythingController', 
            'show', 
            array(
                'project_id'    => $project['id'], 
                'project_name'  => $project['name'], 
                'plugin'        => 'EmbedAnything'
            ), 
            false,
            "embed-anything-icon"
        ) ?>
    </li>
<?php endif ?>