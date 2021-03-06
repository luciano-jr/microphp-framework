<?php /** MicroInterfaceRequest */

namespace Micro\Web;

/**
 * Interface IRequest
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
interface IRequest
{
    /**
     * Get flag of running as CLI
     *
     * @access public
     *
     * @return bool
     */
    public function isCli();

    /**
     * Check request is AJAX ?
     *
     * @access public
     *
     * @return bool
     */
    public function isAjax();

    /**
     * Get request method
     *
     * @access public
     *
     * @return string
     */
    public function getMethod();

    /**
     * Get user IP-address
     *
     * @access public
     *
     * @return string
     */
    public function getUserIP();

    /**
     * Get browser data from user user agent string
     *
     * @access public
     *
     * @param null|string $agent User agent string
     *
     * @return mixed
     */
    public function getBrowser($agent = null);

    /**
     * Get arguments from command line
     *
     * @access public
     *
     * @param string $char -a .. -z option char
     * @param string $name --optionName_string
     * @param bool|null $required Required value?
     *
     * @return mixed
     */
    public function getOption($char = '', $name = '', $required = null);

    /**
     * Get files mapper
     *
     * @access public
     *
     * @param string $className Class name of mapper
     *
     * @return mixed
     */
    public function getFiles($className = '\Micro\Web\Uploader');

    /**
     * Get value by key from query storage
     *
     * @access public
     *
     * @param string $name Key name
     * @param integer $filter
     * @param mixed $options
     *
     * @return bool
     */
    public function query($name, $filter = FILTER_DEFAULT, $options = null);

    /**
     * Set query by key
     *
     * @access public
     * @param string $name
     * @param string|integer $value
     * @return void
     */
    public function setQuery($name, $value);

    /**
     * Get value by key from post storage
     *
     * @access public
     *
     * @param string $name Key name
     * @param integer $filter
     * @param mixed $options
     *
     * @return mixed
     */
    public function post($name, $filter = FILTER_DEFAULT, $options = null);

    /**
     * Get value by key from cookie storage
     *
     * @access public
     *
     * @param string $name Key name
     * @param integer $filter
     * @param mixed $options
     *
     * @return bool
     */
    public function cookie($name, $filter = FILTER_DEFAULT, $options = null);

    /**
     * Get value by key from session storage
     *
     * @access public
     *
     * @param string $name Key name
     * @param integer $filter
     * @param mixed $options
     *
     * @return mixed
     */
    public function session($name, $filter = FILTER_DEFAULT, $options = null);

    /**
     * Unset value by key from session storage
     *
     * @access public
     *
     * @param string $name Key name
     *
     * @return void
     */
    public function unsetSession($name);


    /**
     * Get value by key from server storage
     *
     * @access public
     *
     * @param string $name Key name
     * @param integer $filter
     * @param mixed $options
     *
     * @return bool
     */
    public function server($name, $filter = FILTER_DEFAULT, $options = null);

    /**
     * Set value into session storage
     *
     * @access public
     *
     * @param string $name Key name
     * @param string $value Key value
     *
     * @return void
     */
    public function setSession($name, $value);

    /**
     * Get RequestPayload (RAW DATA)
     *
     * @return string|bool
     */
    public function requestPayload();
}
