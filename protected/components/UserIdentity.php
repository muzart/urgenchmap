<?php
class UserIdentity extends CUserIdentity {
    // Будем хранить id.
    protected $_id;

    // Данный метод вызывается один раз при аутентификации пользователя.
    public function authenticate(){
        // Производим стандартную аутентификацию, описанную в руководстве.
        $user = User::model()->find('LOWER(login)=?', array(strtolower($this->username)));
        if(($user===null) || ($this->password!==$user->password)) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } else {
            // В качестве идентификатора будем использовать id, а не username,
            // как это определено по умолчанию. Обязательно нужно переопределить
            // метод getId(см. ниже).
            $this->_id = $user->id;

            $this->username = $user->login;

            $this->errorCode = self::ERROR_NONE;
        }
        return !$this->errorCode;
    }

    public function getId(){
        return $this->_id;
    }
}