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

use Greeflas\StaticAnalyzer\Analyzer\ClassSignatureAnalyzer;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Command for show count methods/propertis from fullClassName argument
 *
 *
 * Class ClassPropertiesMethodsStat
 *
 * @author dozer111 <alkhonko@gmail.com>
 */
class ClassPropertiesMethodsStat extends Command
{

    /**
     * {@inheritdoc}
     */
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
     *
     * @throws \ReflectionException
     *
     * @return null|int|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $fullClassName = $input->getArgument('fullClassName');


        $reflectionAnalyzer = new ClassSignatureAnalyzer($fullClassName);
        $result = $reflectionAnalyzer->showPropMeth();


        $output->writeln($result);
    }
}
