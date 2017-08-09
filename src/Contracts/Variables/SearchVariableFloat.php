<?php

namespace Devpoint\Database\SearchCriterias\Contracts\Variables;

use Devpoint\Database\SearchCriterias\Contracts\SearchVariable as SearchVariableContract;

interface SearchVariableFloat extends SearchVariableContract {
	
	/**
	 * @return float
	 */
	public function get();

}
