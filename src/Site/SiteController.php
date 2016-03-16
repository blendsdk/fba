<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Fba\Site;

use Blend\Component\Templating\EngineInterface;
use Fba\Support\Controller;

/**
 * Description of SiteController
 *
 * @author Gevik Babakhani <gevikb@gmail.com>
 */
class SiteController extends Controller {

    public function index() {
        return $this->renderer->render('index.twig', ['title' => 'Welcome to FBA']);
    }

    protected function getTemplatesFolder() {
        return __DIR__ . '/templates';
    }

}
