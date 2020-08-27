<?php
/**
 * @version 2.0
 * @author Sammy
 *
 * @keywords Samils, ils, php framework
 * -----------------
 * @namespace Sammy\Packs\LoremIpsum
 * - Autoload, application dependencies
 */
namespace Sammy\Packs\LoremIpsum {
  /**
   * make sure ...
   */
  if (!class_exists('Sammy\\Packs\\LoremIpsum\\Base')){
  /**
   * @module lorem-ipsum
   * -
   * Used to generate lorem
   * ipsum string given a length
   * for the same
   */
  class Base {
    use Generators\Word;
    use Generators\Printer;
    /**
     * [generate description]
     * @param  integer $num
     * @return string
     */
    function generate ($num = -1) {
      $loremText = require (dirname (__DIR__) .
        '/exts/content/index.php'
      );

      if (!is_int($num) || $num <= 0)
        $num = strlen(join($loremText, ' '));

      $loremFinalString = array ();

      for ($i = 0; $i < $num; $i++) {
        # Make sure the max lengh for
        # the final string is not exceeded
        if (strlen(join ($loremFinalString, ' ')) >= $num)
          break;

        array_push( $loremFinalString ,
          $loremText[ rand (0, -1 + count($loremText)) ]
        );
      }

      return substr(join ($loremFinalString, ' '), 0,
        $num
      );
    }
  }}
}
