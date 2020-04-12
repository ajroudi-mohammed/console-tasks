<?php namespace Acme;

use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

//run composer dump-autoload 

class Command extends SymfonyCommand{

    private $database;

    public function __construct(DatabaseAdapter $database)
    {
        $this->database = $database;

        parent::__construct();
    }

    public function showTasks(OutputInterface $output){
        if( !$tasks = $this->database->fetchAll('tasks')){

            return $output->writeln("<info>No tasks at the moment!</info>");
        }

        $table = new Table($output);

        $table->setHeaders(['id', 'description'])
            ->setRows($tasks)
            ->render();
    }
    
}