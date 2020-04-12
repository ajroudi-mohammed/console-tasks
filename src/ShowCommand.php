<?php namespace Acme;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

//run composer dump-autoload 

class ShowCommand extends Command{

    
    public function configure(){
        $this->setName("show")
            ->setDescription("show all tasks");
    }

    public function execute(InputInterface $input, OutputInterface $output){
        $this->showTasks($output);
    }

    private function showTasks(OutputInterface $output){
        
    }
    
}