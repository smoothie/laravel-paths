<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelPaths\Tests\Domains;

use Ieim\LaravelPaths\Domains\Domain;
use Ieim\LaravelPaths\Tests\BaseTestCase;

class DomainTest extends BaseTestCase
{
    public function domainProvider(): array
    {
        return [
            [ new Domain('Offer') ],
        ];
    }

    /**
     * @param Domain $domain
     * @dataProvider domainProvider
     */
    public function testName(Domain $domain) :void
    {
        $expected = 'Offer';
        $actual = $domain->name();

        $this->assertEquals($expected, $actual);
    }

    /**
     * @param Domain $domain
     * @dataProvider domainProvider
     */
    public function testView(Domain $domain) :void
    {
        $expected = 'offer';
        $actual = $domain->view();

        $this->assertEquals($expected, $actual);
    }

    /**
     * @param Domain $domain
     * @dataProvider domainProvider
     */
    public function testResource(Domain $domain) :void
    {
        $expected = 'Offer';
        $actual = $domain->resource();

        $this->assertEquals($expected, $actual);
    }
}
