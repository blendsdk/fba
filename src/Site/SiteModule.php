<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Fba\Site;

use Blend\Component\Routing\RouteBuilder;
use Blend\Component\Routing\RouteProviderInterface;
use Fba\Site\SiteController;

/**
 * Description of SiteModule
 *
 * @author Gevik Babakhani <gevikb@gmail.com>
 */
class SiteModule implements RouteProviderInterface {

    public function loadRoutes(RouteBuilder $builder) {
        $builder->route("home", "/", [SiteController::class, 'index']);
    }

}
