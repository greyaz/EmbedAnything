# EmbedAnything
Embedding anything into Kanboard. This plugin allows you to add custom pages as boards in different projects.   
The following parameters will pass to your custom page as a URL query string:  
```js
?project_id=YOUR_PROJECT_ID&project_title=YOUR_PROJECT_TITLE&search=YOUR_KANBOARD_SEARCH_QUERY
````

## Getting started
1. Install from the Kanboard plugin manager directly. Or clone this repository to your plugin folder.
2. Copy and rename the file `config-default.php` to `config.php`, then edit it by following the instructions in the comments.

> ⚠️   
>IF the embedded page is refused by your browser, please check your CSP setting on the server fisrt. References:   
> https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/frame-src   
> https://developer.mozilla.org/zh-CN/docs/Web/HTTP/Headers/Content-Security-Policy/frame-ancestors



## Author
Greyaz

## License
License MIT
