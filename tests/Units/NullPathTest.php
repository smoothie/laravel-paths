<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelPaths\Tests;

use Ieim\LaravelContracts\Dummies\Contracts\ControllerHelpers\Operations\DummyOperation;
use Ieim\LaravelContracts\Dummies\Contracts\Paths\Domains\DummyDomain;
use Ieim\LaravelPaths\NullPath;

class NullPathTest extends BaseTestCase
{
    public function pathProvider(): array
    {
        $dummyDomain = new DummyDomain();
        $resource = '';

        return [
            [ new NullPath($dummyDomain), $dummyDomain, new DummyOperation(), $resource ],
        ];
    }

    /**
     * @param NullPath $path
     * @dataProvider pathProvider
     */
    public function testResolveRetrievesDomainsResourceAsString(
        NullPath $path,
        DummyDomain $dummyDomain,
        DummyOperation $operation,
        string $resource
    ) : void {

        $expected = $resource;
        $actual = $path->resolve($operation);

        $this->assertEquals($expected, $actual);
    }
}
