<?php

/*
 * (c) Zachary Wang <291768903@qq.com>
 */

namespace Zachary\Command;

use think\console\Command;
use think\console\Input;
use think\console\Output;

class InitCommand extends Command
{
    protected function configure()
    {
        $this->setName('Zachary:init')
            ->setDescription('Init Role');
    }

    protected function execute(Input $input, Output $output)
    {
//        return parent::execute($input, $output);
        $output->warning('this is zachary init');
    }
}
