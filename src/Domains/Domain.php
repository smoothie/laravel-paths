<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelPaths\Domains;

use Ieim\LaravelContracts\Contracts\Paths\Domains\DomainInterface;
use Illuminate\Support\Str;

class Domain implements DomainInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * Domain constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @inheritDoc
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * @inheritDoc
     */
    public function view(): string
    {
        return Str::kebab($this->name);
    }

    /**
     * @inheritDoc
     */
    public function resource(): string
    {
        return Str::studly($this->name);
    }
}
