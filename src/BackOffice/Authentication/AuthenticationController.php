<?php

namespace Fba\BackOffice\Authentication;

use Fba\Support\Controller;
use Fba\BackOffice\Authentication\Form\LoginForm;

/**
 * @author Gevik Babakhani <gevikb@gmail.com>
 */
class AuthenticationController extends Controller {

    protected function getTemplatesFolder() {
        return __DIR__ . '/templates';
    }

    public function signin() {
        /* @var $loginForm LoginForm */
        $loginForm = $this->runtime->getContainer()->get(LoginForm::class);
        return $loginForm->process();
    }

    public function signout() {
        return $this->runtime->signOut();
    }

}
