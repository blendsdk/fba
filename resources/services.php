<?php

use Acme\Acme;
use Blend\Component\Templating\EngineInterface;
use Blend\Framework\Templating\Twig\TwigEngineService;
use Blend\Framework\Locale\LocaleService;
use Blend\Component\Database\Database;
use Blend\Framework\Factory\DatabaseFactory;
use Symfony\Component\Translation\TranslatorInterface;
use Blend\Framework\Factory\TranslatorFactory;
use Fba\Site\SiteModule;
use Fba\BackOffice\BackOfficeModule;
use Fba\Security\FbaSecurityProvider;

return [
    /**
     * FbaRuntime will help you to gain access
     * to the application's Dependency Injection Container.
     * DO NOT REMOVE THIS SERVICE! YOUR APPLICATION MIGHT STOP WORKING!
     */
    "Fba\\FbaRuntime" => "Fba\\FbaRuntime",
    "site-module" => SiteModule::class,
    "bo-module" => BackOfficeModule::class,
    "bo-sec" => FbaSecurityProvider::class,
    /**
     * Uncomment if you need multi-language option in your application.
     * The LocaleService will automatically handle the {_locale}
     * Route arguments when this service en enabled
     */
//"locale-service" => LocaleService::class,

    /**
     * Uncomment if your are going to use text translation in your application
     * The Translator need the LocaleService::class to be available
     */
//TranslatorInterface::class => TranslatorFactory::class,

    /**
     * Uncomment to enable PostgreSQL database connectivity
     * check the config.json->database
     */
//Database::class => DatabaseFactory::class,

    /**
     * The Twig template parser engine
     */
    EngineInterface::class => TwigEngineService::class
];
