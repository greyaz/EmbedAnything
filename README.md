# EmbedAnything
Embedding anything into [Kanboard](https://github.com/kanboard/kanboard). This plugin allows you to embed a custom page via an iframe as a stand-alone board in different projects.

# Features
Data forwarding is supported. Part of the project information can be delivered to your page by specifying the following predefined keywords in the config file: 

`::PROJECT_ID`, `::PROJECT_NAME`, `::PROJECT_OWNER_ID`, `::PROJECT_OWNER_USERNAME`, `::PROJECT_SEARCH_QUERY` 

Customized static data is also supported. Check the file `config-default.php` for more information.

> ⚠️ Please re-edit you config file after upgrading to v0.2.0. The configs have been changed.

## Getting started
1. Install from the Kanboard plugin manager directly. Or clone this repository to your plugin folder.
2. Copy and rename the file `config-default.php` to `config.php`, then edit it by following the instructions in the comments.

> ⚠️   
>If the embedded page is refused by your browser, please check your CSP setting on the server fisrt. References:   
> https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/frame-src   
> https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/frame-ancestors



## Author
Greyaz

## License
License MIT
