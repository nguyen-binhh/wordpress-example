<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Modified by kadencewp on 17-January-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace KadenceWP\KadenceStarterTemplates\Symfony\Component\HttpClient\Exception;

use KadenceWP\KadenceStarterTemplates\Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;

/**
 * Represents a 5xx response.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
final class ServerException extends \RuntimeException implements ServerExceptionInterface
{
    use HttpExceptionTrait;
}
