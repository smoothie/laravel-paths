<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelPaths;

use Ieim\LaravelContracts\Contracts\ControllerHelpers\Operations\OperationInterface;
use Ieim\LaravelContracts\Contracts\Paths\Domains\DomainInterface;
use Ieim\LaravelContracts\Contracts\Paths\PathInterface;
use Illuminate\Support\Str;

class ResourcePath implements PathInterface
{
    /**
     * @var DomainInterface
     */
    private $domain;

    /**
     * ResourcePath constructor.
     * @param DomainInterface $domain
     */
    public function __construct(DomainInterface $domain)
    {
        $this->domain = $domain;
    }

    /**
     * @inheritDoc
     */
    public function resolve(OperationInterface $operation): string
    {
        $domain = trim($this->domain->resource(), '\\');
        $currentOperation = trim($operation->current(), '\\');

        return '\\'.Str::studly($domain).'\\'.Str::studly($currentOperation);
    }

    /**
     * @inheritDoc
     */
    public function type(): string
    {
        return PathInterface::TYPE_RESOURCE;
    }
}
