<?php /** MicroModule */

namespace Micro\Mvc;

use Micro\Base\Injector;
use Micro\Micro;

/**
 * Class Module
 *
 * @author Oleg Lunegov <testuser@mail.linpax.org>
 * @link https://github.com/linpax/microphp-framework
 * @copyright Copyright &copy; 2013 Oleg Lunegov
 * @license /LICENSE
 * @package Micro
 * @subpackage Mvc
 * @version 1.0
 * @since 1.0
 * @abstract
 */
abstract class Module
{
    /**
     * @access public
     * @result void
     */
    public function __construct()
    {
        /** @var Micro $kernel */
        $kernel = (new Injector)->get('kernel');

        $path = dirname(
                str_replace(['\\', 'App'], ['/', $kernel->getAppDir()], get_called_class())
            ).'/config.php';

        if (file_exists($path)) {
            new Injector($path);
        }
    }
}
