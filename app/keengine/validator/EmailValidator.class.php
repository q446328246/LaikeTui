<?php

// +---------------------------------------------------------------------------+
// | This file is part of the core package.                                    |
// | Copyright (c) laiketui.com                                                |
// |                                                                           |
// | For the full copyright and license information, please view the LICENSE   |
// | file that was distributed with this source code. You can also view the    |
// | LICENSE file online at http://www.laiketui.com                            |
// +---------------------------------------------------------------------------+

/**
 * EmailValidator verifies a parameter contains a value that qualifies as an
 * email address.
 *
 * @package    laiketui
 * @subpackage validator
 *
 * @author ketter (ketter@laiketui.com)
 * @since  3.0.0
 */
class EmailValidator extends Validator
{

    // +-----------------------------------------------------------------------+
    // | METHODS                                                               |
    // +-----------------------------------------------------------------------+

    /**
     * Execute this validator.
     *
     * @param mixed A file or parameter value/array.
     * @param error An error message reference.
     *
     * @return bool true, if this validator executes successfully, otherwise
     *              false.
     *
     * @author ketter (ketter@laiketui.com)
     * @since  3.0.0
     */
    public function execute (&$value, &$error)
    {

    }

}

?>