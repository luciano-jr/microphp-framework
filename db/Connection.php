<?php

namespace Micro\Db;

/**
 * Threads class file.
 *
 * @author Oleg Lunegov <testuser@mail.linpax.org>
 * @link https://github.com/linpax/microphp-framework
 * @copyright Copyright (c) 2013 Oleg Lunegov
 * @license https://github.com/linpax/microphp-framework/blob/master/LICENSE
 * @package Micro
 * @subpackage Db
 * @version 1.0
 * @since 1.0
 */
abstract class Connection implements IConnection
{
    /**
     * Construct for this class
     *
     * @access public
     * @result void
     * @throws \Micro\Base\Exception
     */
    public function __construct()
    {
    }
}
