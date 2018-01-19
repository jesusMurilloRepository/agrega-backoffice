<?php
App::uses('AppModel', 'Model');
/**
 * Oferta Model
 *
 */
class Lance extends AppModel {



	   public $belongsTo = array(

            'Usuario' => array(
                'className'  => 'Usuario',
                'foreignKey' => 'usuario_id',
                //'conditions' => '',
                //'fields'     => '',
                //'order'      => ''
            ),

             'Oferta' => array(
                'className'  => 'Oferta',
                'foreignKey' => 'lance_id',
                //'conditions' => '',
                //'fields'     => '',
                //'order'      => ''
            )

        );



}
