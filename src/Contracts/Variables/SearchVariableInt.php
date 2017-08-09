<?php

namespace Devpoint\Database\SearchCriterias\Contracts\Variables;

use Devpoint\Database\SearchCriterias\Contracts\SearchVariable as SearchVariableContract;

interface SearchVariableInt extends SearchVariableContract {
	
	/**
	 * @return int
	 */
	public function get();

}
