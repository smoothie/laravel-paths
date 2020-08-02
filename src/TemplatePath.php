<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelPaths;

use Ieim\LaravelContracts\Contracts\ControllerHelpers\Operations\OperationInterface;
use Ieim\LaravelContracts\Contracts\Paths\Domains\DomainInterface;
use Ieim\LaravelContracts\Contracts\Paths\PathInterface;
use Illuminate\Support\Str;

class TemplatePath implements PathInterface
{
    /**
     * @var DomainInterface
     */
    private $domain;

    /**
     * TemplatePath constructor.
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
        $domain = trim($this->domain->view(), '\\');
        $currentOperation = trim($operation->current(), '\\');
        $template = Str::kebab($domain).'.'.Str::kebab($currentOperation);

        if (! Str::contains($template, '_')) {
            return $template;
        }

        return str_replace('_', '-', $template);
    }

    /**
     * @inheritDoc
     */
    public function type(): string
    {
        return PathInterface::TYPE_TEMPLATE;
    }
}
