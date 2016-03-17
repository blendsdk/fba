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

/**
 * Description of BackOfficeModule
 *
 * @author Gevik Babakhani <gevikb@gmail.com>
 */
class BackOfficeModule implements RouteProviderInterface {

    public function loadRoutes(RouteBuilder $builder) {
        $builder->route('dashboard', '/bo/dashboard'
                        , [DashboardController::class, 'index'])
                ->accessAuthorized();

        $builder->route('signin', '/bo/signin', [AuthenticationController::class, 'signin'])
                ->accessGuestOnly();

        $builder->route('signout', '/bo/signout'
                        , [AuthenticationController::class, 'signout'])
                ->accessAuthorized();
    }

}
