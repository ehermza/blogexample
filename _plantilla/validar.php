<?php
class User extends AppModel {
    var $name = 'User';
    var $validate = array(
        'login' => array(
            'alphaNumeric' => array(
                'rule' => 'alphaNumeric',
                'required' => true,
                'message' => 'S�lo letras y n�meros'
                ),
            'between' => array(
                'rule' => array('between', 5, 15),
                'message' => 'Entre 5 y 15 caracteres'
            )
        ),
        'password' => array(
            'rule' => array('minLength', '8'),
            'message' => 'Largo m�nimo de 8 caracteres'
        ),
        'email' => 'email',
        'born' => array(
            'rule' => 'date',
            'message' => 'Ingrese una fecha v�lida',
            'allowEmpty' => true
        )
    );
}
?>
