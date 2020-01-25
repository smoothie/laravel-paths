<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelPaths;

use Ieim\LaravelContracts\Contracts\ControllerHelpers\Operations\OperationInterface;
use Ieim\LaravelContracts\Contracts\Paths\Domains\DomainInterface;
use Ieim\LaravelContracts\Contracts\Paths\PathInterface;

class NullPath implements PathInterface
{
    private $domain;

    public function __construct(DomainInterface $domain)
    {
        $this->domain = $domain;
    }

    /**
     * @inheritDoc
     */
    public function resolve(OperationInterface $operation): string
    {
        return '';
    }

    /**
     * @inheritDoc
     */
    public function type(): string
    {
        return PathInterface::TYPE_NULL;
    }
}
