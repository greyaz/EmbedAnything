<?php

$embedAnythingConfigs = array(
    // Optional:
    // "0" represents default settings if no project id is specified.
    // Default settings will affect all projects that are unspecified in this config file.
    "0" => array(
        // FontAwesome icon name. You can get icons here: https://fontawesome.com/v5/search?q=chart&o=r&m=free
        // For the users of the plugin ThemeRevision , please check the file "Asset/main.css".
        "icon"  => "line-chart",
        // Label name
        "label" => "Metabase",
        // The URL of the embedding page
        "embed" => "/metabase/public/dashboard/6c525c8e-b202-466f-bdc8-605e8072d072",
        // Optional: The aliases of the query parameters will pass to your custom page. If unset, the original name will be kept.
        "alias" => array(
            "project_id" => "",
            "project_title" => "project",
            "search_query" => "",
        ),
    ),
    // Optional:
    // To override the default settings in a specified project, you can add new configs with a project id as the key.
    "13" => array(
        "icon"  => "line-chart",
        "label" => "Metabase",
        "embed" => "/metabase/public/dashboard/f067fc9c-52a6-40bb-bb65-3f3e03a7f710",
    ),
);