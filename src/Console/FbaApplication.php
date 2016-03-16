<?php

namespace Fba\Console;

use Blend\Framework\Console\Application;
use Blend\Framework\Console\Command\ServeCommand;
use Blend\DataModelBuilder\Command\DataModelCommand;
use Blend\Framework\Console\Command\ServicesSyncCommand;

/**
 * Description of ApplicationCommand
 *
 * @author Gevik Babakhani <gevikb@gmail.com>
 */
class FbaApplication extends Application {

    public function __construct($scriptPath) {
        parent::__construct($scriptPath, 'Fba Command Utility', '1.0');
        $this->add(new ServeCommand());
        $this->add(new ServicesSyncCommand());
        $this->add(new DataModelCommand());
    }

}