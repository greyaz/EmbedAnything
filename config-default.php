<?php

$embedAnythingConfigs = array(
    // Optional:
    // "0" represents default settings if no project id is specified.
    // Default settings will affect all projects that are unspecified in this config file.
    "0" => array(
        
        // FontAwesome icon name. You can get icons here: https://fontawesome.com/v5/search?q=chart&o=r&m=free
        // For the users of the plugin ThemeRevision, please check the file "Asset/main.css".
        "icon"  => "line-chart",
        
        // Label name
        "label" => "Metabase",
        
        // The URL of the embedding page. Do not include any query string!
        "url" => "/metabase/public/dashboard/6c525c8e-b202-466f-bdc8-605e8072d072",
        
        // Optional:
        // The queries will be delivered to your web page as a query string after the URL.
        // The key-value pair represents the query parameter's name and its value respectively.
        // Some predefined keywords are supported as the value:
        // ::PROJECT_ID, ::PROJECT_NAME, ::PROJECT_OWNER_ID, ::PROJECT_OWNER_USERNAME, ::PROJECT_SEARCH_QUERY
        // Static content as a value is also allowed. 
        "queries" => array(
            "project" => "::PROJECT_NAME",
            "customized_content" => "Something static...",
        ),
    ),
    // Optional:
    // To override the default settings in a specified project, you can add a new snippet with a project id as the key of the array.
    "13" => array(
        "icon"  => "line-chart",
        "label" => "Metabase",
        "url" => "/metabase/public/dashboard/f067fc9c-52a6-40bb-bb65-3f3e03a7f710",
    ),
);
