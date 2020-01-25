<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelPaths\Tests;

use Ieim\LaravelContracts\Contracts\Paths\PathInterface;
use Ieim\LaravelContracts\Dummies\Contracts\Paths\Domains\DummyDomain;
use Ieim\LaravelPaths\NullPath;
use Ieim\LaravelPaths\PathFactory;
use Ieim\LaravelPaths\ResourcePath;
use Ieim\LaravelPaths\TemplatePath;

class PathFactoryTest extends BaseTestCase
{
    public function domainProvider(): array
    {
        return [
            [ new DummyDomain() ],
        ];
    }

    /**
     * @param DummyDomain $domain
     * @dataProvider domainProvider
     */
    public function testBuildDefaultGetNullPath(DummyDomain $domain) :void
    {
        $expected = NullPath::class;
        $actual = PathFactory::build(PathInterface::DEFAULT_TYPE, $domain);

        $this->assertInstanceOf($expected, $actual);
    }

    /**
     * @param DummyDomain $domain
     * @dataProvider domainProvider
     */
    public function testBuildResourceGetResourcePath(DummyDomain $domain) :void
    {
        $expected = ResourcePath::class;
        $actual = PathFactory::build(PathInterface::TYPE_RESOURCE, $domain);

        $this->assertInstanceOf($expected, $actual);
    }

    /**
     * @param DummyDomain $domain
     * @dataProvider domainProvider
     */
    public function testBuildCollectionGetResourcePath(DummyDomain $domain) :void
    {
        $expected = ResourcePath::class;
        $actual = PathFactory::build(PathInterface::TYPE_COLLECTION, $domain);

        $this->assertInstanceOf($expected, $actual);
    }

    /**
     * @param DummyDomain $domain
     * @dataProvider domainProvider
     */
    public function testBuildTemplateGetTemplatePath(DummyDomain $domain) :void
    {
        $expected = TemplatePath::class;
        $actual = PathFactory::build(PathInterface::TYPE_TEMPLATE, $domain);

        $this->assertInstanceOf($expected, $actual);
    }
}
