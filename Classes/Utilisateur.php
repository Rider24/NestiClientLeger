<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utilisateur
 *
 * @author Elrick
 */
class Utilisateur {
    private $id;
    private $pseudo;
    private $mail;
    private $password;
    
    function __construct($id, $pseudo, $mail) {
        $this->id = $id;
        $this->pseudo = $pseudo;
        $this->mail = $mail;
    }
    
    function getId() {
        return $this->id;
    }

    function getPseudo() {
        return $this->pseudo;
    }

    function getMail() {
        return $this->mail;
    }

    function getPassword() {
        return $this->password;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setPseudo($pseudo) {
        $this->pseudo = $pseudo;
    }

    function setMail($mail) {
        $this->mail = $mail;
    }

    function setPassword($password) {
        $this->password = $password;
    }



}
