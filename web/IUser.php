<?php /** MicroInterfaceUser */

namespace Micro\Web;

/**
 * Interface IOutput
 *
 * @author Oleg Lunegov <testuser@mail.linpax.org>
 * @link https://github.com/linpax/microphp-framework
 * @copyright Copyright (c) 2013 Oleg Lunegov
 * @license https://github.com/linpax/microphp-framework/blob/master/LICENSE
 * @package Micro
 * @subpackage Web
 * @version 1.0
 * @since 1.0
 * @interface
 */
interface IUser
{
    /**
     * Check access by current user
     *
     * @access public
     *
     * @param string $permission permission to check
     * @param array $data arguments
     *
     * @return bool
     */
    public function check($permission, array $data = []);

    /**
     * Get state user
     *
     * @access public
     *
     * @return bool
     */
    public function isGuest();

    /**
     * Get user ID
     *
     * @access public
     *
     * @return bool|integer
     */
    public function getID();

    /**
     * Login user
     *
     * @access public
     *
     * @param int|string $userId User identify
     *
     * @return void
     */
    public function login($userId);

    /**
     * Set User ID
     *
     * @access public
     *
     * @param mixed $id user id
     *
     * @return void
     */
    public function setID($id);

    /**
     * Logout user
     *
     * @access public
     *
     * @return void
     */
    public function logout();

    /**
     * Get captcha code
     *
     * @access public
     *
     * @return string
     */
    public function getCaptcha();

    /**
     * Make captcha from source
     *
     * @access public
     *
     * @param string $code source captcha
     *
     * @return void
     */
    public function setCaptcha($code);

    /**
     * Check captcha
     *
     * @access public
     *
     * @param string $code source captcha
     *
     * @return string
     */
    public function checkCaptcha($code);
}
