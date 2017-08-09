<?php

namespace Devpoint\Database\SearchCriterias\Contracts;

use Devpoint\Database\SearchCriterias\Contracts\Variables\SearchVariable;

interface SearchScope {

    /**
     * @param  string  $attributeKey
     * @param  string   $value
     * @return SearchCriterias
     */ 
    public function varString($attributeKey, $value);

    /**
     * @param  string  $attributeKey
     * @param  int     $value
     * @return SearchCriterias
     */ 
    public function varInt($attributeKey, $value);

    /**
     * @param  string  $attributeKey
     * @param  float   $value
     * @return SearchCriterias
     */ 
    public function varFloat($attributeKey, $value);

    /**
     * @param  string  $attributeKey
     * @return SearchVat
     */ 
    public function getVar($attributeKey);

    /**
     * @param  string  $attributeKey
     * @param  string  $alias
     * @return SearchCriterias
     */ 
    public function addAlias($attributeKey, $alias);

    /**
     * @param  string   $alias
     * @return bool
     */ 
    public function isAlias($alias);

    /**
     * @param  string   $alias
     * @return string
     */ 
    public function resolveAlias($alias);

}
