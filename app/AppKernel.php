<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    protected function initializeContainer()
    {
        \CampaignChain\CoreBundle\Util\SystemUtil::redirectInstallMode();

        parent::initializeContainer();

        date_default_timezone_set('UTC');
    }

    public function registerBundles()
    {
        $bundles = array(
            // Symfony
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),

            // Vendors for campaignchain/core bundle
            new Braincrafted\Bundle\BootstrapBundle\BraincraftedBootstrapBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
            new SC\DatetimepickerBundle\SCDatetimepickerBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new Bmatzner\FontAwesomeBundle\BmatznerFontAwesomeBundle(),
            new h4cc\AliceFixturesBundle\h4ccAliceFixturesBundle(),
            new FOS\JsRoutingBundle\FOSJsRoutingBundle(),
            new Sp\BowerBundle\SpBowerBundle(),
            new Sonata\CoreBundle\SonataCoreBundle(),
            new Sonata\BlockBundle\SonataBlockBundle(),
            new JMS\SerializerBundle\JMSSerializerBundle(),
            new FOS\RestBundle\FOSRestBundle(),
            new Nelmio\ApiDocBundle\NelmioApiDocBundle(),
            new Avanzu\AdminThemeBundle\AvanzuAdminThemeBundle(),

            // CampaignChain
            new CampaignChain\CoreBundle\CampaignChainCoreBundle(),

            // More vendors for campaignchain/core bundle
            new Oneup\UploaderBundle\OneupUploaderBundle(),
            new Liip\ImagineBundle\LiipImagineBundle(),
            new Knp\Bundle\GaufretteBundle\KnpGaufretteBundle(),
        );

        require 'campaignchain/AppKernel.php';

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            // CampaignChain
            $bundles[] = new CampaignChain\GeneratorBundle\CampaignChainGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
