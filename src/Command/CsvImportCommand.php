<?php


namespace App\Command;

use App\Entity\Building;
use Doctrine\ORM\EntityManagerInterface;
use League\Csv\Reader;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Input\InputArgument;

class CsvImportCommand extends Command
{
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct();
        $this->em = $em;
    }

    protected function configure()
    {
        $this
            ->setName('csv:import')
            ->addArgument('file', InputArgument::REQUIRED, 'path to .csv file');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
       $io = new SymfonyStyle($input, $output);

       $io->title('Attempting to import the feed...');

       $reader = Reader::createFromPath('%kernel.root_dir%/../' . $input->getArgument('file'));

       $reader->setHeaderOffset(0);
       $results = $reader->getRecords();

       foreach ($results as $row) {

        $building = (new Building())
               ->setName($row['Name'])
               ->setPrice($row['Price'])
               ->setBathrooms($row['Bathrooms'])
               ->setBedrooms($row['Bedrooms'])
               ->setGarages($row['Garages'])
               ->setStoreys($row['Storeys']);

           $this->em->persist($building);
       }

       $this->em->flush();

       $io->success('Evetything went well!');
    }
}