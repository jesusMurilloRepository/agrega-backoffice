<?php
/**
 * Application level View Helper
 *
 * This file is application-wide helper file. You can put all
 * application-wide helper-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Helper
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Helper', 'View');

/**
 * Application helper
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       app.View.Helper
 */
class AppHelper extends Helper {

  public function checaRodizio($placa = null)
  {


  $rodizio = array(
        'Monday' => array('1', '2'),
        'Tuesday' => array('3', '4'),
        'Wednesday' => array('5', '6'),
        'Thursday' => array('7', '8'),
        'Friday' => array('9', '0'),
      );

    //$placa = $this->TrasladoUsuario->find('first');
    //debug($placa);
    //exit();
    $placafinal = substr($placa, -1);

   // debug($placafinal);

    
  //debug($placa);
    //exit();
    

    $hoje =  date('l');



      if (in_array($placafinal, $rodizio[$hoje])) {
    
      return false;


      }else{

       return true;
      }


}

  public function activeURL($pagina = "", $class = "")
  {

    if ($pagina == "index") {
      if ($this->request->here == '/') {
        return $class;
     }

    }else{
      $url = Router::url(null, true);

      if( strpos( $url, $pagina ) !== false ) {
        return $class;
      }

    }


  }

}
