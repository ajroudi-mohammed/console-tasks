<?php namespace Acme;

use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

//run composer dump-autoload 

class AddCommand extends Command{

    private $database;

    public function __construct(DatabaseAdapter $database)
    {
        $this->database = $database;

        parent::__construct();
    }

    
    public function configure(){
        $this->setName("add")
            ->setDescription("Add new task");
    }

    public function execute(InputInterface $input, OutputInterface $output){
        
    }
    
}