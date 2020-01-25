<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelPaths\Tests;

use Ieim\LaravelContracts\Dummies\Contracts\ControllerHelpers\Operations\DummyOperation;
use Ieim\LaravelContracts\Dummies\Contracts\Paths\Domains\DummyDomain;
use Ieim\LaravelPaths\ResourcePath;

class ResourcePathTest extends BaseTestCase
{
    public function pathProvider(): array
    {
        $dummyDomain = new DummyDomain();
        $resource = '\DummyResource\DummyCurrent';

        return [
            [ new ResourcePath($dummyDomain), $dummyDomain, new DummyOperation(), $resource ],
        ];
    }

    /**
     * @param ResourcePath $path
     * @dataProvider pathProvider
     */
    public function testResolveRetrievesDomainsResourceAsString(
        ResourcePath $path,
        DummyDomain $dummyDomain,
        DummyOperation $operation,
        string $resource
    ) : void {

        $expected = $resource;
        $actual = $path->resolve($operation);

        $this->assertEquals($expected, $actual);
    }
}
