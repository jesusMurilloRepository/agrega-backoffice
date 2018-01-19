<?php
App::uses('AppModel', 'Model');
/**
 * Lance Model
 *
 */
class Oferta extends AppModel {



         public $hasMany = array(

        'Lance' => array(
            'className' => 'Lance',
            'foreignKey' => 'lance_id',
            'order' => 'Lance.valor ASC',
            )

        );




	   public $belongsTo = array(

            'Produto' => array(
                'className'  => 'Produto',
                'foreignKey' => 'produto_id',
               
            ),

            'Lance' => array(
                'className'  => 'Lance',
                'foreignKey' => 'id_lance_win',
               
            ),


              'Usuario' => array(
                'className'  => 'Usuario',
                'foreignKey' => 'user_winner_id',
                //'conditions' => '',
                //'fields'     => '',
                //'order'      => ''
            ),

              
          
            'TipoCarrocerium' => array(
                'className'  => 'TipoCarrocerium',
                'foreignKey' => 'carroceria_tipo_id',
                //'conditions' => '',
                //'fields'     => '',
                //'order'      => ''
            ),



        );

       public $validate = array(
                'endereco_origem' => array(            
            'notempty' => array(             
                'rule' => array('notBlank'),            
                'message' => 'É Necessário Inserir o Endereço de Origem',           
                    )          
                ),
                'endereco_destino' => array(            
            'notempty' => array(             
                'rule' => array('notBlank'),            
                'message' => 'É Necessário Inserir o Endereço de Destino',           
                    )          
                ),
                'cliente_origem' => array(            
            'notempty' => array(             
                'rule' => array('notBlank'),            
                'message' => 'É Necessário Escolher o Cliente Origem',           
                    )          
                ),
                'cliente_destino' => array(            
            'notempty' => array(             
                'rule' => array('notBlank'),            
                'message' => 'É Necessário Escolher o Cliente Destino',           
                    )          
                ),
                'cidade_origem' => array(            
            'notempty' => array(             
                'rule' => array('notBlank'),            
                'message' => 'É Necessário Escolher o Cliente Origem',           
                    )          
                ),
                'cidade_destino' => array(            
            'notempty' => array(             
                'rule' => array('notBlank'),            
                'message' => 'É Necessário Escolher a Cidade Destino',           
                    )          
                ),
                'estado_origem' => array(            
            'notempty' => array(             
                'rule' => array('notBlank'),            
                'message' => 'É Necessário Escolher a Cidade Origem',           
                    )          
                ),
                'estado_destino' => array(            
            'notempty' => array(             
                'rule' => array('notBlank'),            
                'message' => 'É Necessário Escolher o Estado Destino',           
                    )          
                ),
                'data_origem' => array(            
            'notempty' => array(             
                'rule' => array('notBlank'),            
                'message' => 'É Necessário Escolher o Estado Origem',           
                    )          
                ),
                'data_destino' => array(            
            'notempty' => array(             
                'rule' => array('notBlank'),            
                'message' => 'É Necessário Inserir uma Data Destino',           
                    )          
                ),
                'telefone_origem' => array(            
            'notempty' => array(             
                'rule' => array('notBlank'),            
                'message' => 'É Necessário Inserir o Telefone de Origem',           
                    )          
                ),
                'telefone_destino' => array(            
            'notempty' => array(             
                'rule' => array('notBlank'),            
                'message' => 'É Necessário Inserir o Telefone de Destino',           
                    )          
                ),
                'agendado' => array(            
            'notempty' => array(             
                'rule' => array('notBlank'),            
                'message' => 'É Necessário Escolher o Agendamento',           
                    )          
                ),
            'peso_carga' => array(            
            'notempty' => array(             
                'rule' => array('notBlank'),            
                'message' => 'É Necessário Inserir o Peso da Carga',           
                    )          
                ),
                'und_medida' => array(            
            'notempty' => array(             
                'rule' => array('notBlank'),            
                'message' => 'É Necessário Escolher a Unidade de Medida',           
                    )          
                ),
                'volume_carga' => array(            
            'notempty' => array(             
                'rule' => array('notBlank'),            
                'message' => 'É Necessário Inserir o Volume da Carga',           
                    )          
                ),
                'veiculo_tipo_id' => array(            
            'notempty' => array(             
                'rule' => array('notBlank'),            
                'message' => 'É Necessário Escolher o Tipo de Veículo',           
                    )          
                ),
                'produto_id' => array(            
            'notempty' => array(             
                'rule' => array('notBlank'),            
                'message' => 'É Necessário Escolher o Produto',           
                    )          
                ),
            'carroceria_tipo_id' => array(            
            'notempty' => array(             
                'rule' => array('notBlank'),            
                'message' => 'É Necessário Escolher o Tipo de Carroceria',           
                    )          
                ),
            'caminhao_rastreado' => array(            
            'notempty' => array(             
                'rule' => array('notBlank'),            
                'message' => 'É Necessário Escolher o Rastreamento',           
                    )          
                ),
                'tipo_lance' => array(            
            'notempty' => array(             
                'rule' => array('notBlank'),            
                'message' => 'É Necessário Escolher o Tipo de Oferta',           
                    )          
                ),
                'data_encerramento' => array(            
            'notempty' => array(             
                'rule' => array('notBlank'),            
                'message' => 'É Necessário Inserir a Data de Encerramento',           
                    )          
                ),
                'valor_lance_inicial' => array(            
            'notempty' => array(             
                'rule' => array('notBlank'),            
                'message' => 'É Necessário Inserir o Varlor Inicial',           
                    )          
                ),
        );

}
