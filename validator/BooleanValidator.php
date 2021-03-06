<?php /** MicroBooleanValidator */

namespace Micro\Validator;

use Micro\Form\IFormModel;

/**
 * BooleanValidator class file.
 *
 * @author Oleg Lunegov <testuser@mail.linpax.org>
 * @link https://github.com/linpax/microphp-framework
 * @copyright Copyright (c) 2013 Oleg Lunegov
 * @license https://github.com/linpax/microphp-framework/blob/master/LICENSE
 * @package Micro
 * @subpackage Validator
 * @version 1.0
 * @since 1.0
 */
class BooleanValidator extends BaseValidator
{
    /**
     * Initial validator
     *
     * @access public
     *
     * @param array $params Configuration array
     *
     * @result void
     */
    public function __construct(array $params)
    {
        $this->params = array_merge($this->params, ['true' => true, 'false' => false]);
        parent::__construct($params);
    }

    /**
     * @inheritdoc
     */
    public function validate(IFormModel $model)
    {
        foreach ($this->elements AS $element) {
            if (!$model->checkAttributeExists($element)) {
                $this->errors[] = 'Parameter '.$element.' not defined in class '.get_class($model);

                return false;
            }
            $elementValue = $model->$element;

            if (($elementValue !== $this->params['true']) && ($elementValue !== $this->params['false'])) {
                $this->errors[] = $element.' error: required element is empty.';

                return false;
            }
        }

        return true;
    }

    /**
     * @inheritdoc
     */
    public function client(IFormModel $model)
    {
        return 'if (this.value != '.$this->params['true'].' && this.value != '.$this->params['false'].') {'.
        ' e.preventDefault(); this.focus(); alert(\'Value not compatible\'); }';
    }
}
