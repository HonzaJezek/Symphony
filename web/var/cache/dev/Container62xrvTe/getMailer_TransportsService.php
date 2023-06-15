<?php

namespace Container62xrvTe;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailer_TransportsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'mailer.transports' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\Transports
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/TransportInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/Transports.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport.php';

        return $container->privates['mailer.transports'] = (new \Symfony\Component\Mailer\Transport(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['mailer.transport_factory.null'] ?? $container->load('getMailer_TransportFactory_NullService'));
            yield 1 => ($container->privates['mailer.transport_factory.sendmail'] ?? $container->load('getMailer_TransportFactory_SendmailService'));
            yield 2 => ($container->privates['mailer.transport_factory.native'] ?? $container->load('getMailer_TransportFactory_NativeService'));
            yield 3 => ($container->privates['mailer.transport_factory.smtp'] ?? $container->load('getMailer_TransportFactory_SmtpService'));
        }, 4)))->fromStrings(['main' => $container->getEnv('MAILER_DSN')]);
    }
}
