<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ParseNewsCommand extends Command
{
    protected static $defaultName = 'app:my-project';

    protected function configure()
    {
        $this->setDescription('Start parsing news from the Hightload news resource');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // Implement the news parsing logic here
        $output->writeln('Parsing news from Hightload...');
    }
}
