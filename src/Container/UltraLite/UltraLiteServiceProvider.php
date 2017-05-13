<?php
namespace SamBurns\DiPlayground\Container\UltraLite;

use Interop\Provider\ServiceProviderInterface;
use Psr\Container\ContainerInterface;
use UltraLite\Container\Container;

class UltraLiteServiceProvider implements ServiceProviderInterface
{
    /** @var ContainerInterface */
    private $container;

    public function __construct(string $configFilePath)
    {
        $this->container = new Container();
        $this->container->configureFromFile($configFilePath);
    }

    /**
     * @return ContainerInterface
     */
    public function getContainer()
    {
        return $this->container;
    }

    public function listIdentifiers()
    {
        // TODO: Implement listIdentifiers() method.
    }
}
