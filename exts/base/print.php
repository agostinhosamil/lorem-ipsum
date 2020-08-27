<?php
/**
 * @version 2.0
 * @author Sammy
 *
 * @keywords Samils, ils, php framework
 * -----------------
 * @namespace Sammy\Packs\LoremIpsum\Generators
 * - Autoload, application dependencies
 */
namespace Sammy\Packs\LoremIpsum\Generators {
	if (!trait_exists('Sammy\\Packs\\LoremIpsum\\Generators\\Printer')){
	/**
	 * @module lorem-ipsum
	 * -
	 * Used to generate lorem
	 * ipsum string given a length
	 * for the same
	 */
	trait Printer {
		/**
		 * [generateWord description]
		 * @param  integer $num
		 * @return string
		 */
		function print ($num = -1) {
			$loremText = require (dirname (__DIR__) .
        '/content/index.php'
      );

			if (!is_int($num) || $num <= 0)
				$num = 1;

			$loremFinalString = array ();

			for ($i = 0; $i < $num; $i++) {
				array_push($loremFinalString, join($loremText, ' '));
			}

			return join ($loremFinalString, ' ');
		}
	}}
}
