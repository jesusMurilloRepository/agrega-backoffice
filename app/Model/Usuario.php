<?php
App::uses('AppModel', 'Model');
/**
 * Usuario Model
 *
 */
class Usuario extends AppModel {




	   public $validate = array(


      



	   	 'cpf' => array(




	   	 		 'notempty' => array( 
                      'rule' => array('notBlank'),
                      'message' => 'É Necessário inserir CPF',

                      ),

                    'validate_cpf' => array(
                            'rule'    => array('validate_cpf'),
                    'message' => 'CPF Já cadastrado'
                    ),




                   

                )




	   );



	   	public function validate_cpf() {


			$cpf = $this->data[$this->alias]['cpf'];


			$conditions = array('conditions' => array(
				'cpf' => $cpf,

			 ));


			$verification = $this->find('count',$conditions);

			return empty($verification);

			// if(empty($verification)){


			// return  $verification;
				
			// }else{

			// 	return  $verification; 

			// }



	}



	public $belongsTo = array(

       
              
          
            'TipoCarrocerium' => array(
                'className'  => 'TipoCarrocerium',
                'foreignKey' => 'tipo_carroceria',
                //'conditions' => '',
                //'fields'     => '',
                //'order'      => ''
            ),



        );







}
