# EmbedAnything
Embedding anything into [Kanboard](https://github.com/kanboard/kanboard). This plugin allows you to add custom pages as boards in different projects.   

The following parameters will also pass to your custom page as a URL query string:   
`project_id`, `project_title`, `search_query`   

Check the file `config-default.php` for more information.

## Getting started
1. Install from the Kanboard plugin manager directly. Or clone this repository to your plugin folder.
2. Copy and rename the file `config-default.php` to `config.php`, then edit it by following the instructions in the comments.

> ⚠️   
>IF the embedded page is refused by your browser, please check your CSP setting on the server fisrt. References:   
> https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/frame-src   
> https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/frame-ancestors



## Author
Greyaz

## License
License MIT
