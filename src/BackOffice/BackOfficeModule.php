<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Fba\BackOffice;

use Blend\Component\Routing\RouteBuilder;
use Blend\Component\Routing\RouteProviderInterface;
use Fba\BackOffice\Dashboard\DashboardController;
use Fba\BackOffice\Authentication\AuthenticationController;
use Blend\Component\Routing\Route;

/**
 * Description of BackOfficeModule
 *
 * @author Gevik Babakhani <gevikb@gmail.com>
 */
class BackOfficeModule implements RouteProviderInterface {

    public function loadRoutes(RouteBuilder $builder) {
        $builder->route('dashboard', '/bo/dasbaord'
                        , [DashboardController::class, 'index'])
                ->setAccessMethod(Route::ACCESS_AUTHORIZED_USER);

        $builder->route('signin', '/bo/signin', [AuthenticationController::class, 'signin'])
                ->setAccessMethod(Route::ACCESS_GUEST_ONLY);

        $builder->route('signout', '/bo/signout'
                        , [AuthenticationController::class, 'signout'])
                ->setAccessMethod(Route::ACCESS_AUTHORIZED_USER);
    }

}
