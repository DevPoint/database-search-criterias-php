<?php

namespace Devpoint\Database\SearchCriterias\Contracts;

interface SearchCriterias extends SearchScope {

    /**
     * @param  string  $attributeKey
     * @param  mixed   $operator
     * @param  mixed   $value
     * @return SearchFilter
     */ 
    public function createFilterExp($attributeKey, $operator, $value = null);

    /**
     * @param  string  $attributeKey
     * @param  mixed   $valueA
     * @param  mixed   $valueB
     * @return SearchFilter
     */ 
    public function createFilterBetween($attributeKey, $valueA, $valueB);

    /**
     * @param  string  $attributeKey
     * @param  array   $values
     * @return SearchFilter
     */ 
    public function createFilterIn($attributeKey, $values);

    /**
     * @param  string  $attributeKey
     * @param  array   $values
     * @return SearchFilter
     */ 
    public function createFilterNotIn($attributeKey, $values);

    /**
     * @param  string  $attributeKey
     * @return SearchFilter
     */ 
    public function createFilterNull($attributeKey);
    
    /**
     * @param  string  $attributeKey
     * @return SearchFilter
     */ 
    public function createFilterNotNull($attributeKey);
    
    /**
     * @param  array   $filters
     * @param  string  $boolean
     * @return SearchFilter
     */ 
    public function createFilterGroup($filters, $boolean = 'and');
    
    /**
     * @param  mixed   $primaryId
     * @return SearchFilter
     */ 
    public function createFilterId($primaryId);

    /**
     * @param  array   $primaryIds
     * @return SearchFilter
     */ 
    public function createFilterIds($primaryIds);

    /**
     * @param  SearchFilter  $filter
     * @return self
     */ 
    public function filter(SearchFilter $filter);

    /**
     * @param  string  $attributeKey
     * @param  string  $operator
     * @param  mixed   $value
     * @return self
     */ 
    public function filterExp($attributeKey, $operator, $value = null);

    /**
     * @param  string  $attributeKey
     * @param  mixed   $valueA
     * @param  mixed   $valueB
     * @return self
     */ 
    public function filterBetween($attributeKey, $valueA, $valueB);

    /**
     * @param  string  $attributeKey
     * @param  array   $values
     * @return self
     */ 
    public function filterIn($attributeKey, $values);

    /**
     * @param  string  $attributeKey
     * @param  array   $values
     * @return self
     */ 
    public function filterNotIn($attributeKey, $values);

    /**
     * @param  string  $attributeKey
     * @return self
     */ 
    public function filterNull($attributeKey);

    /**
     * @param  string  $attributeKey
     * @return self
     */ 
    public function filterNotNull($attributeKey);

    /**
     * @param  mixed  $primaryId
     * @return SearchCriterias
     */ 
    public function filterId($primaryId);

    /**
     * @param  array  $primaryIds
     * @return SearchCriterias
     */ 
    public function filterIds($primaryIds);

    /**
     * @param  array   $filters
     * @param  string  $boolean
     * @return self
     */ 
    public function filterGroup($filters, $boolean = 'and');

    /**
     * @param  string  $attributeKey
     * @param  string  $order
     * @return SearchSort
     */ 
    public function createSortBy($attributeKey, $order = null);
    
    /**
     * @param  SearchSort  $sort
     * @return self
     */ 
    public function sort(SearchSort $sort);

    /**
     * @param  string  $attributeKey
     * @param  string  $order
     * @return self
     */ 
    public function sortBy($attributeKey, $order = null);

    /**
     * @param  string  $attributeKey
     * @return self
     */ 
    public function with($attributeKey);

    /**
     * @param  array   $attributeKeys
     * @return self
     */ 
    public function withGroup($attributeKeys);

    /**
     * @return self
     */ 
    public function withTrashed();

    /**
     * @param  int   $offset
     * @param  int|null   $count
     * @return self
     */ 
    public function limit($offset, $count = null);

    /**
     * Count total number of entries
     *
     * Remarks: offset and limit will be ignored
     *
     * @return int
     */ 
    public function total();
    
    /**
     * Count number of entries
     *
     * @return int
     */ 
    public function count();
    
    /**
     * Check if there are any entries matching the criterias
     *
     * @return bool
     */ 
    public function exists();

}
