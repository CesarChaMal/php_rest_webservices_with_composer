<?php
namespace MyRestApi;

class Admin {

    /**
    * Checks if a user is logged in.
    *
    * @return boolean
    */
    public function getLoggedIn(){
        return $this->getContainer('auth')->isLoggedIn();
    }

    /**
    * @param string $username
    * @param string $password
    * return boolean
    */
    public function postLogin($username, $password){
        return $this->getContainer('auth')->doLogin($username, $password);
    }

    /**
     * @param string $server
     * @url stats/([0-9]+)
     * @url stats
     * @return string
     */
    public function getStats($server = '1'){
        return $this->getServerStats($server);
    }

}

?>
