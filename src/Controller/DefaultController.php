<?php

namespace App\Controller;

use App\templates\Template;

class DefaultController implements ControllerInterface
{


    public function execute()
    {
        $template = new Template();
        $template->setTemplate('src/vues/test.php');
        echo $template->render();


    }
}