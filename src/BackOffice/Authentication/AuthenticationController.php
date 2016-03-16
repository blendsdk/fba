<?php

namespace Fba\BackOffice\Authentication;

use Symfony\Component\HttpFoundation\Request;
use Fba\Support\Controller;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
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

    public function signout(Request $request, UrlGeneratorInterface $urlGenerator) {
        $request->getSession()->clear();
        return new RedirectResponse($request->getUri());
    }

}
