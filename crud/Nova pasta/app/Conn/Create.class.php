<?php

/**
 * <b>Create.class:</b>
 * Classe responsavel por cadastros genéricos no banco de dados!
 * 
 * @copyright (c) 2013, Joubert Saquett
 */
class Create extends Conn{

    private $Tabela;
    private $Dados;
    private $Result;

    /** @var PDOStatment   */
    private $Create;

    /** @var PDO     */
    private $Conn;

    /**
     * <b>ExeCreate:</b> Executa um cadastro simplificado no banco de dados utilizando prepared statements
     * Basta informa o nome da tabela e um array atribuitivo com o nome da coluna e valor!
     * 
     * @param STGRING $Tabela = Informe o nome da Tabela no banco!
     * @param ARRAY $Dados = Informe um array atribuitivo. (Nome Da coluna => Valor).
     */
    public function ExeCreate($Tabela, array $Dados) {
        $this->Tabela = (String) $Tabela;
        $this->Dados = $Dados;

        $this->getSyntax();
        $this->Execute();
    }

    public function getResult() {
        return $this->Result;
    }

    /**
     * ************************************
     * ********* PRIVATE METHODS **********
     * ************************************
     */
    private function Connect() {
        $this->Conn = parent::getConn();
        $this->Create = $this->Conn->prepare($this->Create);
    }

    private function getSyntax() {
        $Filds = implode(', ', array_keys($this->Dados));
        $Places = ':' . implode(', :', array_keys($this->Dados));
        $this->Create = "INSERT INTO {$this->Tabela} ({$Filds}) VALUES ({$Places})";
    }

    private function Execute() {
        $this->Connect();
        try {
            $this->Create->execute($this->Dados);
            $this->Result = $this->Conn->lastInsertId();
        } catch (PDOException $e) {
            $this->Result = null;
            WSErro("Erro ao cadastrar: {$e->getMessage()}", $e->getCode());
        }
    }

}
