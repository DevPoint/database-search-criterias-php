<?php

namespace App\Repositories\Filter;

use Devpoint\Database\SearchCriterias\Contracts\SearchScope;
use Devpoint\Database\SearchCriterias\Contracts\SearchFilter as SearchFilterContract;

class SearchFilterExp extends SearchFilter implements SearchFilterContract {
	
    /**
     * @var string
     */
    protected $operator;
    
    /**
     * @var mixed
     */
    protected $value;

    /**
     * @param  SearchScope  $scope
     * @param  string  $attributeKey
     * @param  string  $operator
     * @param  mixed   $value
     * @return void
     */
    public function __construct(SearchScope $scope, $attributeKey, $operator, $value)
    {
        $this->setScope($scope);
        $this->setAttributeKey($attributeKey);
        $this->operator = strtolower($operator);
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}