<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 02/03/18
 * Time: 15:40
 */

/**
* 
*/
/**
   * 
   */
   class usuario
   {
       
       private $id;
       private $nome;
       private $email;
       private $senha;
       private $tipo_usuario;

       function __construct($nome=null,$email=null,$senha=null,$tipo_usuario=null,$id=null)
       {
        $this->nome=$nome;
        $this->email=$email;
        $this->senha=$senha;
        $this->tipo_usuario=$tipo_usuario;
        $this->id=$id;

       }

       public function getId(){
        return $this->id;
       }

       public function getNome(){
        return $this->nome;
       }

       public function getEmail(){
        return $this->email;
       }

       public function getSenha(){
        return $this->senha;
       }

       public function getTipo(){
        return $this->tipo_usuario;
       }
   }   