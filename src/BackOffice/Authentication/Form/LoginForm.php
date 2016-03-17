<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Fba\BackOffice\Authentication\Form;

use Blend\Component\Form\PostRedirectGetForm;
use Symfony\Component\HttpFoundation\Request;
use Blend\Component\Templating\EngineInterface;
use Blend\Framework\Support\Runtime\RuntimeProviderInterface;
use Fba\Security\FbaUser;

/**
 * Description of LoginForm
 *
 * @author Gevik Babakhani <gevikb@gmail.com>
 */
class LoginForm extends PostRedirectGetForm {

    const USERNAME = 'username';
    const PASSWORD = 'password';

    /**
     * @var EngineInterface
     */
    protected $renderer;

    /**
     * @var RuntimeProviderInterface
     */
    protected $runtime;

    public function __construct(Request $request
    , EngineInterface $renderer
    , RuntimeProviderInterface $runtime) {
        parent::__construct($request);
        $this->renderer = $renderer;
        $this->runtime = $runtime;
    }

    public function getUsername() {
        return $this->getField(self::USERNAME);
    }

    public function getPssword() {
        return $this->getField(self::PASSWORD);
    }

    protected function getDefaultValues() {
        return [
            'username' => null,
            'password' => null
        ];
    }

    protected function validateState($submitted) {
        if ($submitted === true) {
            $this->assertNotBlank(self::USERNAME, 'Username cannot be blank!');
            $this->assertNotBlank(self::PASSWORD, 'Password cannot be blank!');
        }
        return !$this->hasErrors();
    }

    public function processFrom($submitted, $is_valid) {
        if ($is_valid && $submitted) {
            if ($this->getUsername() === 'user1' && $this->getPssword() == 'user1') {
                $this->runtime->setCurrentUser(new FbaUser([
                    'id' => uniqid(),
                    'username' => $this->getUsername()
                ]));
                return $this->getRedirectSelf();
            } else {
                $this->addError("Invalid username or password!");
            }
        }
        return $this->renderer->render('login.twig', $this->createContext([
                            'title' => 'Authenticate'
        ]));
    }

}
