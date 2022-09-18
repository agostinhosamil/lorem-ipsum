<?php
/**
 * @version 2.0
 * @author Sammy
 *
 * @keywords Samils, ils, php framework
 * -----------------
 * @package Sammy\Packs\LoremIpsum
 * - Autoload, application dependencies
 *
 * MIT License
 *
 * Copyright (c) 2020 Ysare
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */
namespace Sammy\Packs\LoremIpsum {
  /**
   * Make sure the module base internal trait is not
   * declared in the php global scope defore creating
   * it.
   * It ensures that the script flux is not interrupted
   * when trying to run the current command by the cli
   * API.
   */
  if (!trait_exists ('Sammy\Packs\LoremIpsum\Base')) {
  /**
   * @trait Base
   * Base internal trait for the
   * LoremIpsum module.
   * -
   * This is (in the ils environment)
   * an instance of the php module,
   * wich should contain the module
   * core functionalities that should
   * be extended.
   * -
   * For extending the module, just create
   * an 'exts' directory in the module directory
   * and boot it by using the ils directory boot.
   * -
   */
  trait Base {
    use Generators\Printer;
    use Generators\Word;
    /**
     * @method array getContent
     */
    protected static function getContent () {
      return preg_split ( '/\s+/' ,
        'Lorem ipsum dolor sit amet consectetur ' .
        'adipisicing elit sed do eiusmod tempor ' .
        'incididunt ut labore et dolore magna ali' .
        'qua Ut enim ad minim veniam quis nostr' .
        'ud exercitation ullamco laboris nisi ut ' .
        'aliquip ex ea commodo consequat Duis au' .
        'te irure dolor in reprehenderit in volup' .
        'tate velit esse cillum dolore eu fugiat ' .
        'nulla pariatur Excepteur sint occaecat ' .
        'cupidatat non proident sunt in culpa qu' .
        'i officia deserunt mollit anim id est la' .
        'borum'
      );
    }
  }}
}
