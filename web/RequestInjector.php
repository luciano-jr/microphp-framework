<?php /** MicroRequestInjector */

namespace Micro\Web;

use Micro\Base\Exception;
use Micro\Base\Injector;

/**
 * Class RequestInjector
 *
 * @author Oleg Lunegov <testuser@mail.linpax.org>
 * @link https://github.com/linpax/microphp-framework
 * @copyright Copyright (c) 2013 Oleg Lunegov
 * @license https://github.com/linpax/microphp-framework/blob/master/LICENSE
 * @package Micro
 * @subpackage Web
 * @version 1.0
 * @since 1.0
 */
class RequestInjector extends Injector
{
    /**
     * @access public
     * @return IRequest
     * @throws Exception
     */
    public function build()
    {
        $request = $this->get('request');

        if (!($request instanceof IRequest)) {
            throw new Exception('Component `request` not configured');
        }

        return $request;
    }
}