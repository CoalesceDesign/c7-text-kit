<?php
class C7TextKit
{

	// =====================================================================================================
	/*
	* Removes any non-alphanumeric characters or not in the $allowed array.
	* @param string $string String to sanitize
	* @param array $allowed An array of additional characters that are not to be removed.
	* @return string Sanitized string
	*/
	function clean( $string, $allowed )
	{
		$allow = null;
		if (!empty($allowed)) {
			foreach ($allowed as $value) {
				$allow .= "\\$value";
			}
		}

		if (!is_array($string)) {
			return preg_replace("/[^{$allow}a-zA-Z0-9]/", '', $string);
		}

		$cleaned = array();
		foreach ($string as $key => $clean) {
			$cleaned[$key] = preg_replace("/[^{$allow}a-zA-Z0-9]/", '', $clean);
		}

		return $cleaned;
	}



} # End C7TextKit