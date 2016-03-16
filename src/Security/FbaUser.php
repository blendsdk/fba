<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Fba\Security;

use Blend\Framework\Security\User\UserProviderInterface;
use Blend\Component\Model\Model;

/**
 * Description of FbaUser
 *
 * @author Gevik Babakhani <gevikb@gmail.com>
 */
class FbaUser extends Model implements UserProviderInterface {

    public function getAPIKey() {
        return sha1($this->getUserID());
    }

    public function getEmail() {
        return $this->getValue('email');
    }

    public function getPermissions() {
        return [];
    }

    public function getRoles() {
        return [];
    }

    public function getUserID() {
        return $this->getValue('id');
    }

    public function getUsername() {
        return $this->getValue('username');
    }

    public function hasPermission($permission) {
        return true;
    }

    public function hasRole($role) {
        return true;
    }

    public function isActive() {
        return true;
    }

    public function isGuest() {
        return false;
    }

}
