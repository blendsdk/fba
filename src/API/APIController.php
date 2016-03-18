<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Fba\API;

use Symfony\Component\HttpFoundation\Request;

/**
 * Description of APIController
 *
 * @author Gevik Babakhani <gevikb@gmail.com>
 */
class APIController {

    public function api_version_1($command = null, $params = [], Request $request) {

        if ($command === 'ping') {
            return [
                'message' => 'PONG',
                'time' => date('c')
            ];
        } else if ($command == 'echo') {
            return [
                'message' => $command,
                'params' => $params,
                'cookies' => $request->cookies->all(),
                'headers' => $request->headers->all()
            ];
        } else {
            throw new \Exception("Invalid command $command");
        }
    }

}
