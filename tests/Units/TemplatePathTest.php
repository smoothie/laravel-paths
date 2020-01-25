<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelPaths\Tests;

use Ieim\LaravelContracts\Dummies\Contracts\ControllerHelpers\Operations\DummyOperation;
use Ieim\LaravelContracts\Dummies\Contracts\Paths\Domains\DummyDomain;
use Ieim\LaravelPaths\TemplatePath;

class TemplatePathTest extends BaseTestCase
{
    public function pathProvider(): array
    {
        $dummyDomain = new DummyDomain();
        $resource = 'dummy-view.dummy-current';

        return [
            [ new TemplatePath($dummyDomain), $dummyDomain, new DummyOperation(), $resource ],
        ];
    }

    /**
     * @param TemplatePath $path
     * @dataProvider pathProvider
     */
    public function testResolveRetrievesDomainsResourceAsString(
        TemplatePath $path,
        DummyDomain $dummyDomain,
        DummyOperation $operation,
        string $resource
    ) : void {

        $expected = $resource;
        $actual = $path->resolve($operation);

        $this->assertEquals($expected, $actual);
    }
}
