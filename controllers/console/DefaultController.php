<?php
namespace kouosl\belgetalep\controllers\console;


/**
 * Default controller for the `belgetalep` module
 */
class DefaultController extends \kouosl\base\controllers\console\BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('_index');
    }
}
