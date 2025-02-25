<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
			new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
			new JMS\AopBundle\JMSAopBundle(),
            new JMS\DiExtraBundle\JMSDiExtraBundle($this),
            new JMS\SecurityExtraBundle\JMSSecurityExtraBundle(),
			new JMS\SerializerBundle\JMSSerializerBundle(),
			//---FOS USER
			new FOS\UserBundle\FOSUserBundle(),
			new FOS\RestBundle\FOSRestBundle(),
			//---SONATA
			new Sonata\jQueryBundle\SonatajQueryBundle(),
			new Sonata\BlockBundle\SonataBlockBundle(),
			new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
			new Sonata\CoreBundle\SonataCoreBundle(),
			new Sonata\EasyExtendsBundle\SonataEasyExtendsBundle(),
			new Sonata\CacheBundle\SonataCacheBundle(),
			new Sonata\AdminBundle\SonataAdminBundle(),
			new Sonata\SeoBundle\SonataSeoBundle(),
			// new Sonata\UserBundle\SonataUserBundle('FOSUserBundle'),
			//---KNP MENU
			new Knp\Bundle\MenuBundle\KnpMenuBundle(),
			new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
			//---TINYMCE
			new Stfalcon\Bundle\TinymceBundle\StfalconTinymceBundle(),
            new Ens\JobeetBundle\EnsJobeetBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
