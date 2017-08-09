<?php

namespace Devpoint\Database\SearchCriterias\Core;

use Devpoint\Database\SearchCriterias\Contracts\SearchScope;
use Devpoint\Database\SearchCriterias\Contracts\SearchFilter as SearchFilterContract;

class SearchFilter implements SearchFilterContract {
	
    /**
     * @var SearchScope
     */
	private $scope;

    /**
     * @var string
     */
    private $attributeKey;
    
    /**
     * @param  SearchScope $scope
     * @return self
     */
    protected function setScope(SearchScope $scope)
    {
    	$this->scope = $scope;
    	return $this;
    }

    /**
     * @return SearchScope
     */
    public function getScope()
    {
    	return $this->scope;
    }

    /**
     * @param  string $attributeKey
     * @return self
     */
    protected function setAttributeKey($attributeKey)
    {
    	$this->attributeKey = $attributeKey;
    	return $this;
    }

    /**
     * @return string
     */
    public function getAttributeKey()
    {
    	return $this->attributeKey;
    }

    /**
     * @return string
     */
    public function resolveAttributeKey()
    {
        $resolvedKey = $this->attributeKey;
        if ($this->scope->isAlias($resolvedKey))
        {
            $resolvedKey = $this->scope->resolveAlias($resolvedKey);
        }
        return $resolvedKey;
    }
}