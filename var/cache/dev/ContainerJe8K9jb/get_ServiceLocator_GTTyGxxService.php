<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.GTTyGxx' shared service.

return $this->privates['.service_locator.GTTyGxx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'App\\Controller\\BaseController::Formulaire' => ['privates', '.service_locator.Z_.o95M', 'get_ServiceLocator_Z_O95MService.php', true],
    'App\\Controller\\BaseController::sendEmail' => ['privates', '.service_locator.Z_.o95M', 'get_ServiceLocator_Z_O95MService.php', true],
    'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.EbLunuf', 'get_ServiceLocator_EbLunufService.php', true],
    'App\\Controller\\BaseController:Formulaire' => ['privates', '.service_locator.Z_.o95M', 'get_ServiceLocator_Z_O95MService.php', true],
    'App\\Controller\\BaseController:sendEmail' => ['privates', '.service_locator.Z_.o95M', 'get_ServiceLocator_Z_O95MService.php', true],
    'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.EbLunuf', 'get_ServiceLocator_EbLunufService.php', true],
], [
    'App\\Controller\\BaseController::Formulaire' => '?',
    'App\\Controller\\BaseController::sendEmail' => '?',
    'App\\Controller\\SecurityController::login' => '?',
    'App\\Controller\\BaseController:Formulaire' => '?',
    'App\\Controller\\BaseController:sendEmail' => '?',
    'App\\Controller\\SecurityController:login' => '?',
]);