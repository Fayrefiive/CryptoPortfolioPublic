<?php

namespace Symfony\Config;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class BazingaJsTranslationConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $localeFallback;
    private $defaultDomain;
    private $httpCacheTime;
    private $activeLocales;
    private $activeDomains;
    
    /**
     * @default 'en'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function localeFallback($value): self
    {
        $this->localeFallback = $value;
    
        return $this;
    }
    
    /**
     * @default 'messages'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultDomain($value): self
    {
        $this->defaultDomain = $value;
    
        return $this;
    }
    
    /**
     * @default '86400'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function httpCacheTime($value): self
    {
        $this->httpCacheTime = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function activeLocales($value): self
    {
        $this->activeLocales = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function activeDomains($value): self
    {
        $this->activeDomains = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'bazinga_js_translation';
    }
            
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['locale_fallback'])) {
            $this->localeFallback = $value['locale_fallback'];
            unset($value['locale_fallback']);
        }
    
        if (isset($value['default_domain'])) {
            $this->defaultDomain = $value['default_domain'];
            unset($value['default_domain']);
        }
    
        if (isset($value['http_cache_time'])) {
            $this->httpCacheTime = $value['http_cache_time'];
            unset($value['http_cache_time']);
        }
    
        if (isset($value['active_locales'])) {
            $this->activeLocales = $value['active_locales'];
            unset($value['active_locales']);
        }
    
        if (isset($value['active_domains'])) {
            $this->activeDomains = $value['active_domains'];
            unset($value['active_domains']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->localeFallback) {
            $output['locale_fallback'] = $this->localeFallback;
        }
        if (null !== $this->defaultDomain) {
            $output['default_domain'] = $this->defaultDomain;
        }
        if (null !== $this->httpCacheTime) {
            $output['http_cache_time'] = $this->httpCacheTime;
        }
        if (null !== $this->activeLocales) {
            $output['active_locales'] = $this->activeLocales;
        }
        if (null !== $this->activeDomains) {
            $output['active_domains'] = $this->activeDomains;
        }
    
        return $output;
    }
    

}
