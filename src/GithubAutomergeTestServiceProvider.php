<?php

namespace SimonSchaufi\GithubAutomergeTest;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use SimonSchaufi\GithubAutomergeTest\Commands\GithubAutomergeTestCommand;

class GithubAutomergeTestServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('github-automerge-test')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_github-automerge-test_table')
            ->hasCommand(GithubAutomergeTestCommand::class);
    }
}
