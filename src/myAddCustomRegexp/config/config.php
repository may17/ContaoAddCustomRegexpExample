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

$GLOBALS['TL_HOOKS']['addCustomRegexp'][] = array('Slashworks/Classes/Form/Validator/MyAddCustomRegexp', 'checkSomething');