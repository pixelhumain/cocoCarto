<?php
/**
 * CoController.php
 *
 * Cocontroller always works with the PH base 
 *
 * @author: Tibor Katelbach <tibor@pixelhumain.com>
 * Date: 14/03/2014
 */
class CoController extends CommunecterController {


    protected function beforeAction($action) {
        //parent::initPage();
		return parent::beforeAction($action);
  	}

  	public function actions()
	{
	    return array(
	        'test'  => 'ressources.controllers.actions.TestAction',
	        'ressources'  => 'ressources.controllers.actions.RessourcesAction'
	    );
	}

	public function actionIndex() 
	{
		$this->layout = "//layouts/empty";
    	$this->renderPartial("index");
  	}
}
