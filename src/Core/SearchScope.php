<?php

namespace Devpoint\Database\SearchCriterias\Core;

use Devpoint\Database\SearchCriterias\Contracts\SearchScope as SearchScopeContract;
use Devpoint\Database\SearchCriterias\Contracts\Variables\SearchVariable as SearchVariableContract;
use Devpoint\Database\SearchCriterias\Contracts\Variables\SearchVariableFloat;
use Devpoint\Database\SearchCriterias\Contracts\Variables\SearchVariableInt;
use Devpoint\Database\SearchCriterias\Contracts\Variables\SearchVariableString;
use Devpoint\Database\SearchCriterias\Contracts\Variables\SearchVariableDateTime;

class SearchScope implements SearchScopeContract {

    /**
     * @var array - with SearchVariableContract
     */
    private $variables = [];

    /**
     * @var array - with string
     */
    private $aliases = [];

    /**
     * @param  string  $attributeKey
     * @param  string  $value
     * @return SearchCriterias
     */ 
    public function varString($attributeKey, $value)
    {
        $this->variables[$attributeKey] = new SearchVariableString($attributeKey, $value);
    }

    /**
     * @param  string  $attributeKey
     * @param  int     $value
     * @return SearchCriterias
     */ 
    public function varInt($attributeKey, $value)
    {
        $this->variables[$attributeKey] = new SearchVariableInt($attributeKey, $value);
    }

    /**
     * @param  string  $attributeKey
     * @param  float   $value
     * @return SearchCriterias
     */ 
    public function varFloat($attributeKey, $value)
    {
        $this->variables[$attributeKey] = new SearchVariableFloat($attributeKey, $value);
    }

    /**
     * @param  string  $attributeKey
     * @param  string  $value
     * @return SearchCriterias
     */ 
    public function varDateTime($attributeKey, $value)
    {
        $this->variables[$attributeKey] = new SearchVariableDateTime($attributeKey, $value);
    }

    /**
     * @param  string  $attributeKey
     * @return SearchVariableContract
     */ 
    public function getVar($attributeKey)
    {
        return isset($this->variables[$attributeKey]) ? $this->variables[$attributeKey] : null;
    }

    /**
     * @param  string  $attributeKey
     * @param  string  $alias
     * @return SearchCriterias
     */ 
    public function addAlias($attributeKey, $alias)
    {
        $this->aliases[$alias] = $attributeKey;
    }

    /**
     * @param  string   $alias
     * @return bool
     */ 
    public function isAlias($alias)
    {
        return isset($this->aliases[$alias]);
    }

    /**
     * @param  string   $alias
     * @return string
     */ 
    public function resolveAlias($alias)
    {
        return isset($this->aliases[$alias]) ? $this->aliases[$alias] : $alias;
    }
}
