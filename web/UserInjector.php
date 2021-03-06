<?php /** MicroUserInjector */

namespace Micro\Web;

use Micro\Base\Exception;
use Micro\Base\Injector;

/**
 * Class UserInjector
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
class UserInjector extends Injector
{
    /**
     * @access public
     * @return IUser
     * @throws Exception
     */
    public function build()
    {
        $user = $this->get('user');

        if (!($user instanceof IUser)) {
            throw new Exception('Component `user` not configured');
        }

        return $user;
    }
}