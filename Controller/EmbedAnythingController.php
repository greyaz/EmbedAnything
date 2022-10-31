<?php

namespace Kanboard\Plugin\EmbedAnything\Controller;

use Kanboard\Controller\BaseController;

class EmbedAnythingController extends BaseController
{
    public function show()
    {
        $project = $this->getProject();

        $this->response->html($this->helper->layout->app('EmbedAnything:project_dashboard/show', array(
            'project' => $project
        )));
    }
}