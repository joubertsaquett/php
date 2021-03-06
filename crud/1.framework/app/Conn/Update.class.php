<?php

/**
 * <b>Update.class:</b>
 * Classe responsavel por atualizações genéricas no banco de dados!
 * 
 * @copyright (c) 2014, Joubert Saquett
 */
class Update extends Conn {

    private $Tabela;
    private $Dados;
    private $Termos;
    private $Places;
    private $Result;

    /** @var PDOStatment   */
    private $Update;

    /** @var PDO     */
    private $Conn;

    public function ExeUpdate($Tabela, array $Dados, $Termos, $ParseString) {
        $this->Tabela = (String) $Tabela;
        $this->Dados = $Dados;
        $this->Termos = (String) $Termos;
        
        parse_str($ParseString, $this->Places);
        
        $this->getSyntax();
        $this->Execute();
       
    }

    public function getResult() {
        return $this->Result;
    }

    public function getRowCount() {
        return $this->Update->rowCount();
    }

    public function setPlaces($ParseString) {
        parse_str($ParseString, $this->Places);
        $this->getSyntax();
        $this->Execute();
    }

    /**
     * ************************************
     * ********* PRIVATE METHODS **********
     * ************************************
     */
    private function Connect() {
       $this->Conn = parent::getConn();
       $this->Update = $this->Conn->prepare($this->Update);
    }

    private function getSyntax() {
        foreach ($this->Dados as $key => $Values):
            $Places[] = $key . ' = :' . $key;
        endforeach;
        
        $Places = implode(', ', $Places);
        $this->Update = "UPDATE {$this->Tabela} SET {$Places} {$this->Termos}";   
    }

    private function Execute() {
        $this->Connect(); 
        try{
            $this->Update->execute(array_merge($this->Dados, $this->Places));
            $this->Result = true;
            
        } catch (PDOException $e) {
            $this->Result = null;
            WSErro("Erro ao cadastrar: {$e->getMessage()}", $e->getCode());

        }
    }

}
