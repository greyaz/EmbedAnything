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
        "url" => "/metabase/public/dashboard/6c525c8e-b202-466f-bdc8-605e8072d072",
        // Optional: The queries will be deliverd to your custom page as a query string after the URL.
        // The key is the parameter's name, and the value represents your data.
        // Some predefined keywords are supported: ::PROJECT_ID, ::PROJECT_NAME, ::PROJECT_OWNER_ID, ::PROJECT_OWNER_USERNAME, ::PROJECT_SEARCH_QUERY.
        // Customized string as a value is also allowed. 
        "queries" => array(
            "project" => "::PROJECT_NAME",
            "my_info" => "This is a static string.",
        ),
    ),
    // Optional:
    // To override the default settings in a specified project, you can add new configs with a project id as the key.
    "13" => array(
        "icon"  => "line-chart",
        "label" => "Metabase",
        "url" => "/metabase/public/dashboard/f067fc9c-52a6-40bb-bb65-3f3e03a7f710",
    ),
);
