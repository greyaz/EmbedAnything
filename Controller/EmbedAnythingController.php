<?php

namespace Kanboard\Plugin\EmbedAnything\Controller;

use Kanboard\Controller\BaseController;
use Kanboard\Plugin\EmbedAnything\Model\ParamsModel;

class EmbedAnythingController extends BaseController
{
    public function show()
    {
        $project = $this->getProject();

        $config = !empty($GLOBALS["embedAnythingConfigs"][$project["id"]]) ? $GLOBALS["embedAnythingConfigs"][$project["id"]] : $GLOBALS["embedAnythingConfigs"]["0"];
        $url = $config["url"];
        $queryString = "";

        if (isset($config["queries"])){
            foreach($config["queries"] as $key => $value)
            {
                $queryString .= $key."=";
                $queryString .= (substr($value, 0, 2 ) === "::" ? $this->getParamValue($project, $value) : $value);
                $queryString .= "&";
            }
        }
        if (!empty($queryString)){
            $queryString = substr("?".$queryString, 0, -1);
            $url .= $queryString;
        }

        $this->response->html($this->helper->layout->app('EmbedAnything:project_dashboard/show', array(
            'project' => $project,
            'title' => $project["name"],
            'description' => $project["description"],
            'url' => $url,
        )));
    }

    private function getParamValue($project, $ParamKey){
        $value = "";

        switch (constant(ParamsModel::class.$ParamKey))
        {
            case ParamsModel::PROJECT_ID:
                $value = $project["id"];
                break;
            case ParamsModel::PROJECT_NAME:
                $value = $project["name"];
                break;
            case ParamsModel::PROJECT_OWNER_ID:
                $value = $project["owner_id"];
                break;
            case ParamsModel::PROJECT_OWNER_USERNAME:
                $value = $project["owner_username"];
                break;
            case ParamsModel::PROJECT_SEARCH_QUERY:
                $value = urlencode($this->helper->projectHeader->getSearchQuery($project));
                break;
        };

        return $value;
    }
}
