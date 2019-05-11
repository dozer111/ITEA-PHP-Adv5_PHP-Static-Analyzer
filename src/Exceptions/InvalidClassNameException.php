<?php

/*
 * This file is part of the "PHP Static Analyzer" project.
 *
 * (c) Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Greeflas\StaticAnalyzer\Exceptions;

use Throwable;

/**
 * Class InvalidClassNameException
 * @package Greeflas\StaticAnalyzer\Exceptions
 * @author dozer111 <alkhonko@gmail.com>
 */
class InvalidClassNameException extends \DomainException
{
    public function __construct($argumentName, $message = '', $code = 0, Throwable $previous = null)
    {
        $resultMessage = "Input string argument <b><$argumentName></b> doesen`t represents valid ::class value";
        $this->message = \sprintf('<error>%s</error>', $resultMessage);
        parent::__construct($message, $code, $previous);
    }
}
