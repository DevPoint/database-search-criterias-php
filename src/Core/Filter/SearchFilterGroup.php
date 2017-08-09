<?php

namespace App\Repositories\Filter;

use Devpoint\Database\SearchCriterias\Contracts\SearchScope;
use Devpoint\Database\SearchCriterias\Contracts\SearchFilter as SearchFilterContract;

class SearchFilterGroup extends SearchFilter implements SearchFilterContract {
	
    /**
     * @var array
     */
    protected $filters;

    /**
     * @var bool
     */
    protected $boolean;

    /**
     * @param  SearchScope  $scope
     * @param  string  $attributeKey
     * @param  array   $filters
     * @param  mixed   $boolean
     * @return void
     */
    public function __construct(SearchScope $scope, $attributeKey, $filters, $boolean)
    {
        $this->setScope($scope);
        $this->setAttributeKey($attributeKey);
        $this->filters = $filters;
        $this->boolean = $boolean;
    }

    /**
     * @return bool
     */
    public function hasFilters()
    {
        return !empty($this->filters);
    }

    /**
     * @return array
     */
    public function filters()
    {
        return $this->filters;
    }

    /**
     * @return bool
     */
    public function boolean()
    {
        return $this->boolean;
    }
}