<?php

namespace App\Repositories\Filter;

use Devpoint\Database\SearchCriterias\Contracts\SearchScope;
use Devpoint\Database\SearchCriterias\Contracts\SearchFilter as SearchFilterContract;

class SearchFilterBetween extends SearchFilter implements SearchFilterContract {
	
    /**
     * @var mixed
     */
    protected $fromValue;

    /**
     * @var mixed
     */
    protected $toValue;

    /**
     * @param  SearchScope  $scope
     * @param  string  $attributeKey
     * @param  mixed   $fromValue
     * @param  mixed   $toValue
     * @return void
     */
    public function __construct(SearchScope $scope, $attributeKey, $fromValue, $toValue)
    {
        $this->setScope($scope);
        $this->setAttributeKey($attributeKey);
        $this->fromValue = $fromValue;
        $this->toValue = $toValue;
    }

    /**
     * @return mixed
     */
    public function getFromValue()
    {
        return $this->fromValue;
    }

    /**
     * @return mixed
     */
    public function getToValue()
    {
        return $this->toValue;
    }
}