<?php

namespace SimonSchaufi\GithubAutomergeTest\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SimonSchaufi\GithubAutomergeTest\GithubAutomergeTest
 */
class GithubAutomergeTest extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \SimonSchaufi\GithubAutomergeTest\GithubAutomergeTest::class;
    }
}
