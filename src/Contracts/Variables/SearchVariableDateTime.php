<?php

namespace Devpoint\Database\SearchCriterias\Contracts\Variables;

use DateTime;
use Devpoint\Database\SearchCriterias\Contracts\SearchVariable as SearchVariableContract;

interface SearchVariableDateTime extends SearchVariableContract {
	
	/**
	 * @return DateTime
	 */
	public function get();

}
