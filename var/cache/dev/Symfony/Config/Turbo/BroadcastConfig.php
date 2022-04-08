<?php

namespace Symfony\Config\Turbo;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Broadcast'.\DIRECTORY_SEPARATOR.'DoctrineOrmConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class BroadcastConfig 
{
    private $enabled;
    private $entityTemplatePrefixes;
    private $doctrineOrm;
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function entityTemplatePrefixes($value): self
    {
        $this->entityTemplatePrefixes = $value;
    
        return $this;
    }
    
    public function doctrineOrm(array $value = []): \Symfony\Config\Turbo\Broadcast\DoctrineOrmConfig
    {
        if (null === $this->doctrineOrm) {
            $this->doctrineOrm = new \Symfony\Config\Turbo\Broadcast\DoctrineOrmConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "doctrineOrm()" has already been initialized. You cannot pass values the second time you call doctrineOrm().');
        }
    
        return $this->doctrineOrm;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['entity_template_prefixes'])) {
            $this->entityTemplatePrefixes = $value['entity_template_prefixes'];
            unset($value['entity_template_prefixes']);
        }
    
        if (isset($value['doctrine_orm'])) {
            $this->doctrineOrm = new \Symfony\Config\Turbo\Broadcast\DoctrineOrmConfig($value['doctrine_orm']);
            unset($value['doctrine_orm']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->enabled) {
            $output['enabled'] = $this->enabled;
        }
        if (null !== $this->entityTemplatePrefixes) {
            $output['entity_template_prefixes'] = $this->entityTemplatePrefixes;
        }
        if (null !== $this->doctrineOrm) {
            $output['doctrine_orm'] = $this->doctrineOrm->toArray();
        }
    
        return $output;
    }
    

}
