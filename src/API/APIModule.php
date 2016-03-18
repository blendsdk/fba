<?php

namespace Fba\API;

use Blend\Component\Routing\RouteBuilder;
use Blend\Component\Routing\RouteProviderInterface;
use Fba\API\APIController;

/**
 * Description of APIModule
 *
 * @author Gevik Babakhani <gevikb@gmail.com>
 */
class APIModule implements RouteProviderInterface {

    public function loadRoutes(RouteBuilder $builder) {
        $builder->route('apiv1', '/api/v1/{command}', [APIController::class, 'api_version_1'])
                ->responseJSON()
                ->accessAuthorized()
                ->secureByAPISecurity();
    }

}
