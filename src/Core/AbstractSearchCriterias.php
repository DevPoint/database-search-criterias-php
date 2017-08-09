<?php

namespace Devpoint\Database\SearchCriterias\Core;

use Illuminate\Database\Eloquent\Model;
use Devpoint\Database\SearchCriterias\Contracts\SearchCriterias as SearchCriteriasContract;
use Devpoint\Database\SearchCriterias\Contracts\SearchFilter;
use Devpoint\Database\SearchCriterias\Contracts\SearchSort;
use Devpoint\Database\SearchCriterias\Contracts\SearchScope as SearchScopeContract;

abstract class AbstractSearchCriterias implements SearchCriteriasContract {

    /**
     * @var SearchScopeContract
     */
    private $scope;

    /**
     * Create new SearchScopeContract instance
     *
     * @return SearchScopeContract
     */ 
    protected static function newSearchScope()
    {
        return new SearchScope();
    }

    /**
     * @param  string  $attributeKey
     * @param  string  $value
     * @return self
     */ 
    public final function varString($attributeKey, $value)
    {
        $this->scope->varString($attributeKey, $value);
        return $this;
    }

    /**
     * @param  string  $attributeKey
     * @param  int     $value
     * @return self
     */ 
    public final function varInt($attributeKey, $value)
    {
        $this->scope->varInt($attributeKey, $value);
        return $this;
    }

    /**
     * @param  string  $attributeKey
     * @param  float   $value
     * @return self
     */ 
    public final function varFloat($attributeKey, $value)
    {
        $this->scope->varFloat($attributeKey, $value);
        return $this;
    }
    
    /**
     * @param  string  $attributeKey
     * @param  string  $value
     * @return self
     */ 
    public final function varDateTime($attributeKey, $value)
    {
        $this->scope->varDateTime($attributeKey, $value);
        return $this;
    }

    /**
     * @param  string  $attributeKey
     * @return SearchVariable
     */ 
    public final function getVar($attributeKey)
    {
        return $this->scope->getVar($attributeKey);
    }

    /**
     * @param  string  $attributeKey
     * @param  string  $alias
     * @return self
     */ 
    public final function addAlias($attributeKey, $alias)
    {
        $this->scope->addAlias($attributeKey, $alias);
        return $this;
    }

    /**
     * Check if given value is known alias
     *
     * @param  string   $alias
     * @return bool
     */ 
    public final function isAlias($alias)
    {
        return $this->scope->isAlias($alias);
    }

    /**
     * Resolve alias into attribute key
     *
     * @param  string   $alias
     * @return string
     */ 
    public final function resolveAlias($alias)
    {
        return $this->scope->resolveAlias($alias);
    }

    /**
     * @param  string  $attributeKey
     * @param  mixed   $operator
     * @param  mixed   $value
     * @return self
     */ 
    public final function filterExp($attributeKey, $operator, $value = null)
    {
        if (func_num_args() < 3)
        {
            $value = $operator;
            $operator = '=';
        }
        return $this->filter($this->createFilterExp($attributeKey, $operator, $value));
    }

    /**
     * @param  string  $attributeKey
     * @param  mixed   $valueA
     * @param  mixed   $valueB
     * @return self
     */ 
    public final function filterBetween($attributeKey, $valueA, $valueB)
    {
        return $this->filter($this->createFilterBetween($attributeKey, $valueA, $valueB));
    }

    /**
     * @param  string  $attributeKey
     * @param  array   $values
     * @return self
     */ 
    public final function filterIn($attributeKey, $values)
    {
        return $this->filter($this->createFilterIn($attributeKey, $values));
    }

    /**
     * @param  string  $attributeKey
     * @param  array   $values
     * @return self
     */ 
    public final function filterNotIn($attributeKey, $values)
    {
        return $this->filter($this->createFilterNotIn($attributeKey, $values));
    }

    /**
     * @param  string  $attributeKey
     * @return self
     */ 
    public final function filterNull($attributeKey)
    {
        return $this->filter($this->createFilterNull($attributeKey));
    }

    /**
     * @param  string  $attributeKey
     * @return self
     */ 
    public final function filterNotNull($attributeKey)
    {
        return $this->filter($this->createFilterNotNull($attributeKey));
    }

    /**
     * @param  array   $filters
     * @param  string  $boolean
     * @return self
     */ 
    public final function filterGroup($filters, $boolean = 'and')
    {
        return $this->filter($this->createFilterGroup($filters, $boolean));
    }

    /**
     * @param  mixed  $primaryId
     * @return self
     */ 
    public final function filterId($primaryId)
    {
        return $this->filter($this->createFilterId($primaryId));
    }

    /**
     * @param  array  $primaryIds
     * @return self
     */ 
    public final function filterIds($primaryIds)
    {
        return $this->filter($this->createFilterIds($primaryIds));
    }

    /**
     * @param  string  $attributeKey
     * @param  string|null  $order
     * @return self
     */ 
    public final function sortBy($attributeKey, $order = null)
    {
        if (func_num_args() < 2)
        {
            $order = 'asc';
        }
        $this->sort($this->createSortBy($attributeKey, $order));
        return $this;
    }
}
