<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Fba\BackOffice\Dashboard;

use Fba\Support\Controller;

/**
 * Description of DashboardController
 *
 * @author Gevik Babakhani <gevikb@gmail.com>
 */
class DashboardController extends Controller {

    public function index() {
        return $this->renderer->render("dashboard.twig", [
                    'title' => 'Dashboard'
        ]);
    }

    protected function getTemplatesFolder() {
        return __DIR__ . '/templates';
    }

}
