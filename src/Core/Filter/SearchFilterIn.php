<?php

namespace App\Repositories\Filter;

use Devpoint\Database\SearchCriterias\Contracts\SearchScope;
use Devpoint\Database\SearchCriterias\Contracts\SearchFilter as SearchFilterContract;

class SearchFilterIn extends SearchFilter implements SearchFilterContract {
	
    /**
     * @var array
     */
    protected $values;

    /**
     * @param  SearchScope  $scope
     * @param  string  $attributeKey
     * @param  array   $values
     * @return void
     */
    public function __construct(SearchScope $scope, $attributeKey, $values)
    {
        $this->setScope($scope);
        $this->setAttributeKey($attributeKey);
        $this->values = $values;
        $this->not = $not;
    }

    /**
     * @return array
     */
    public function getValues()
    {
        return $this->values;
    }
}