<?php

namespace Devpoint\Database\SearchCriterias\Contracts\Variables;

use Devpoint\Database\SearchCriterias\Contracts\SearchVariable as SearchVariableContract;

interface SearchVariableString extends SearchVariableContract {
	
	/**
	 * @return string
	 */
	public function get();

}
