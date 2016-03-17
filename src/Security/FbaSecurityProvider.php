<?php

namespace Fba\Security;

use Blend\Framework\Security\Provider\Common\LoginSecurityProvider;

/**
 * @author Gevik Babakhani <gevikb@gmail.com>
 */
class FbaSecurityProvider extends LoginSecurityProvider {

    protected function getLoginURL() {
        return $this->urlGenerator->generate('signin');
    }

    protected function getLogoutURL() {
        return $this->urlGenerator->generate('signout');
    }

    protected function getSecureEntryPointURL() {
        return $this->urlGenerator->generate('dashboard');
    }

}
