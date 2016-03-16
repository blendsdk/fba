<?php

namespace Fba\Security;

use Blend\Framework\Security\Provider\Common\LoginSecurityProvider;

/**
 * @author Gevik Babakhani <gevikb@gmail.com>
 */
class FbaSecurityProvider extends LoginSecurityProvider {

    protected function getAfterLogoutURL() {
        return $this->urlGenerator->generate('home');
    }

    protected function getEntryPointURL() {
        return $this->urlGenerator->generate('dashboard');
    }

    protected function getLoginURL() {
        return $this->urlGenerator->generate('signin');
    }

    protected function getLogoutURL() {
        return $this->urlGenerator->generate('signout');
    }

    public function validateRoles(array $roles = array()) {
        return true;
    }

}
