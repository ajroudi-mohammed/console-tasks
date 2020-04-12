<?php namespace Acme;

use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

//run composer dump-autoload 

class CompleteCommand extends Command{

    
    public function configure(){
        $this->setName("complete")
            ->setDescription("Complete a task by it's ID")
            ->addArgument('id', InputArgument::REQUIRED);
    }

    public function execute(InputInterface $input, OutputInterface $output){
        $id = $input->getArgument('id');
        $this->database->query('delete from tasks where id = :id', compact('id'));

        $output->writeln('<info>Task completed!</info>');

        $this->showTasks($output);
    }
    
}