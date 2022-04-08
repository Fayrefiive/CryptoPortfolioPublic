<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Turbo'.\DIRECTORY_SEPARATOR.'BroadcastConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class TurboConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $broadcast;
    private $defaultTransport;
    
    public function broadcast(array $value = []): \Symfony\Config\Turbo\BroadcastConfig
    {
        if (null === $this->broadcast) {
            $this->broadcast = new \Symfony\Config\Turbo\BroadcastConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "broadcast()" has already been initialized. You cannot pass values the second time you call broadcast().');
        }
    
        return $this->broadcast;
    }
    
    /**
     * @default 'default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultTransport($value): self
    {
        $this->defaultTransport = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'turbo';
    }
            
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['broadcast'])) {
            $this->broadcast = new \Symfony\Config\Turbo\BroadcastConfig($value['broadcast']);
            unset($value['broadcast']);
        }
    
        if (isset($value['default_transport'])) {
            $this->defaultTransport = $value['default_transport'];
            unset($value['default_transport']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->broadcast) {
            $output['broadcast'] = $this->broadcast->toArray();
        }
        if (null !== $this->defaultTransport) {
            $output['default_transport'] = $this->defaultTransport;
        }
    
        return $output;
    }
    

}
