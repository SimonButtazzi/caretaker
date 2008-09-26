<?php
/**
 * This is a file of the caretaker project.
 * Copyright 2008 by n@work Internet Informationssystem GmbH (www.work.de)
 * 
 * @Author	Thomas Hempel 		<thomas@work.de>
 * @Author	Martin Ficzel		<martin@work.de>
 * @Author	Patrick Kollodzik	<patrick@work.de>
 * 
 * $$Id: class.tx_caretaker_service_interface.php 33 2008-06-13 14:00:38Z thomas $$
 */

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2008 Thomas Hempel <hempel@work.de>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

interface tx_caretaker_TestService {
	
	/**
	 * This is called *BEFORE* the data is send to the instance
	 *
	 * @param array $flexFormData: the config data from the flexform of the test record 
	 * @return tx_caretaker_TestConf: the config object for the testrunner
	 */
	public function prepareTestConf($flexFormData);
	
	/**
	 * This is called *AFTER* the result was returned from an instance and after it was decoded by the caretaker extension.
	 *
	 * @param array $testResult: The parsed XML data that was returned form the instance
	 * @return tx_caretaker_TestResult: 
	 */
	public function processTestResult($testResult);
	
	/**
	 * Get a list of all extra Options for this test.   
	 *
	 * @return array : Array of tx_caretaker_test_option Objects
	 */
	public function getTestOptionList();
	
	/**
	 * Render the extra Infos for the option specifies in $optionKey
	 *
	 * @param string $optionKey: 
	 */
	public function getSingleTestOption($optionKey);
}

?>