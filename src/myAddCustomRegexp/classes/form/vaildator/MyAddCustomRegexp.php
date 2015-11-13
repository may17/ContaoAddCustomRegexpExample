<?php
 /**
 *
 *          _           _                       _
 *         | |         | |                     | |
 *      ___| | __ _ ___| |____      _____  _ __| | _____
 *     / __| |/ _` / __| '_ \ \ /\ / / _ \| '__| |/ / __|
 *     \__ \ | (_| \__ \ | | \ V  V / (_) | |  |   <\__ \
 *     |___/_|\__,_|___/_| |_|\_/\_/ \___/|_|  |_|\_\___/
 *                                        web development
 *
 *     http://www.slash-works.de </> hallo@slash-works.de
 *
 *
 * @author      jrgregory
 * @copyright   jrgregory@slashworks
 * @since       13.11.15 | KW 46 13:41
 * @package     Core
 *
 */

namespace Slashworks\Classes\Form\Validator;

class MyAddCustomRegexp extends \System
{

    public function checkSomething($strRegexp, $varValue, \Widget $objWidget)
    {

        if ($strRegexp == 'postal') {
            if (!preg_match('/^0-9{4,6}$/', $varValue)) {
                $objWidget->addError('Field ' . $objWidget->label . ' should be a postal code.');
            }

            return true;
        }

        return false;
    }

}