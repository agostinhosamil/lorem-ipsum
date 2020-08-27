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
	if (!trait_exists('Sammy\\Packs\\LoremIpsum\\Generators\\Word')){
	/**
	 * @module lorem-ipsum
	 * -
	 * Used to generate lorem
	 * ipsum string given a length
	 * for the same
	 */
	trait Word {
		/**
		 * [generateWord description]
		 * @param  integer $num
		 * @return string
		 */
		function generateWords ($num = -1) {
			$loremText = require ( dirname(dirname(__DIR__)) .
        '/content/index.php'
      );

			if (!is_int($num) || $num <= 0)
				$num = count($loremText);

			$loremFinalString = array ();

			for ($i = 0; $i < $num; $i++) {
				# Make sure the max lengh for
				# the final string is not exceeded
				if (count($loremFinalString) >= $num)
					break;

				array_push( $loremFinalString ,
					$loremText[ rand (0, -1 + count($loremText)) ]
				);
			}

			return join ($loremFinalString, ' ');
		}
	}}
}
