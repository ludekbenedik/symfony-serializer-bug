<?php declare(strict_types = 1);

namespace App\Command;

use App\Entity\SerializerBugExampleEntity;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Serializer\SerializerInterface;

#[AsCommand('serializer-bug-example')]
class SerializerBugExampleCommand extends Command
{
    public function __construct(private SerializerInterface $serializer)
    {
        parent::__construct();
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln($this->serializer->serialize(new SerializerBugExampleEntity(), 'json'));

        return self::SUCCESS;
    }
}
