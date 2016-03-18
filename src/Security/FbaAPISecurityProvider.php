<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Fba\Security;

use Blend\Framework\Security\Provider\Common\APISecurityProvider;

/**
 * Description of FbaAPISecurityProvider
 *
 * @author Gevik Babakhani <gevikb@gmail.com>
 */
class FbaAPISecurityProvider extends APISecurityProvider {

    protected function receiveBrowserCookies() {
        return true;
    }

}
