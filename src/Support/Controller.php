<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Fba\Support;

use Blend\Component\Templating\EngineInterface;
use Blend\Framework\Support\Runtime\RuntimeProviderInterface;

abstract class Controller {

    /**
     * @var EngineInterface
     */
    protected $renderer;

    /**
     * @var RuntimeProviderInterface;
     */
    protected $runtime;

    protected abstract function getTemplatesFolder();

    public function __construct(EngineInterface $renderer, RuntimeProviderInterface $runtime) {
        $this->renderer = $renderer;
        $this->runtime = $runtime;
        $this->renderer->setViewPaths([
            $this->getTemplatesFolder()
            , __DIR__ . '/../../resources/templates'
        ]);
    }

}
