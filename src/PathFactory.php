<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelPaths;

use Ieim\LaravelContracts\Contracts\Paths\Domains\DomainInterface;
use Ieim\LaravelContracts\Contracts\Paths\PathFactoryInterface;
use Ieim\LaravelContracts\Contracts\Paths\PathInterface;

class PathFactory implements PathFactoryInterface
{

    /**
     * @inheritDoc
     */
    public static function build(string $type, DomainInterface $domain): PathInterface
    {
        switch ($type) {
            case PathInterface::TYPE_TEMPLATE:
                return new TemplatePath($domain);

            case PathInterface::TYPE_RESOURCE:
            case PathInterface::TYPE_COLLECTION:
                return new ResourcePath($domain);

            default:
                return new NullPath($domain);
        }
    }
}
