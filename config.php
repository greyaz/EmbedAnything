<?php

$embedAnythingConfigs = array(
    // Optional: "0" represents default settings if no project id is specified.
    "0" => array(
        // FontAwesome icon name
        "icon"  => "line-chart",
        // Label name
        "label" => "Metabase",
        // The URL of the embedding page
        "embed" => "/metabase/public/dashboard/6c525c8e-b202-466f-bdc8-605e8072d072",
        // Optional: The aliases of the query parameters will pass to your custom page. If unset, the original name will be kept.
        "alias" => array(){
            "project_id" => "",
            "project_title" => "project",
            "search_query" => "",
        }
    ),
    // Optional: Setting a project id as the key will override the default settings in a specified project.
    "13" => array(
        "icon"  => "line-chart",
        "label" => "Metabase",
        "embed" => "/metabase/public/dashboard/f067fc9c-52a6-40bb-bb65-3f3e03a7f710",
    ),
);