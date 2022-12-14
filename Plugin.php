<?php

namespace Kanboard\Plugin\EmbedAnything;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        if(file_exists("plugins/EmbedAnything/config.php"))
        {
            global $embedAnythingConfigs;
            require_once('plugins/EmbedAnything/config.php');

            $source = "";
            foreach($embedAnythingConfigs as $key => $settings){
                if(!empty($settings["url"])){
                    $source .= $settings["url"]." ";
                }
            }
            $source = trim($source);
            if (strlen($source) > 0){
                $this->setContentSecurityPolicy(array('frame-src' => $source));
            }

            $this->template->hook->attach('template:project-header:view-switcher', 'EmbedAnything:project_header/views');
            $this->hook->on('template:layout:css', array('template' => 'plugins/EmbedAnything/Asset/main.css'));
            $this->hook->on('template:layout:js', array('template' => 'plugins/EmbedAnything/Asset/main.js'));
        }
    }

    public function getPluginName()
    {
        return 'EmbedAnything';
    }

    public function getPluginDescription()
    {
        return t('Embed anything into Kanboard.');
    }

    public function getPluginAuthor()
    {
        return 'Greyaz';
    }

    public function getPluginVersion()
    {
        return '0.3.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/greyaz/EmbedAnything';
    }
}
