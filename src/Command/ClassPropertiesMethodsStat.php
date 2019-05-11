<?php

/*
 * This file is part of the "PHP Static Analyzer" project.
 *
 * (c) Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Greeflas\StaticAnalyzer\Command;

use Greeflas\StaticAnalyzer\Analyzer\ClassPropMethCount;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Command for show count methods/propertis from fullClassName argument
 *
 *
 * Class ClassPropertiesMethodsStat
 * @author dozer111 <alkhonko@gmail.com>
 */
class ClassPropertiesMethodsStat extends Command
{

    protected function configure()
    {
        $this->setName('stat:class-md-count')
            ->setDescription('Show information about count of $fullClassName methods and properties')
            ->addArgument(
                'fullClassName',
                InputArgument::REQUIRED,
                ' ::class of file'
            );
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void|null
     * @throws \ReflectionException
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $fullClassName = $input->getArgument('fullClassName');


        $reflectionAnalyzer = new ClassPropMethCount($fullClassName);
        $result = $reflectionAnalyzer->showPropMeth();


        $output->writeln($result);
    }
}
