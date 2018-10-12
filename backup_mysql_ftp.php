<?php

/**
 * @function    backupFullDataBase
 * @author      Jsquett
 * @link        http://jsaquett.46graus.com
 * @usage       Backup completo do Banco de Dados exportando em sql para um servidor ftp
 */
function backupFullDataBase($dbHost,$dbUsername,$dbPassword,$dbName,$tables = '*'){
    //connect & select the database
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 

    //get all of the tables
    if($tables == '*'){
        $tables = array();
        $result = $db->query("SHOW TABLES");
        while($row = $result->fetch_row()){
            $tables[] = $row[0];
        }
    }else{
        $tables = is_array($tables)?$tables:explode(',',$tables);
    }

    //loop through the tables
	$return = "";
    foreach($tables as $table){
        $result = $db->query("SELECT * FROM $table");
        $numColumns = $result->field_count;

        $return .= "DROP TABLE $table;";

        $result2 = $db->query("SHOW CREATE TABLE $table");
        $row2 = $result2->fetch_row();

        $return .= "\n\n".$row2[1].";\n\n";

        for($i = 0; $i < $numColumns; $i++){
            while($row = $result->fetch_row()){
                $return .= "INSERT INTO $table VALUES(";
                for($j=0; $j < $numColumns; $j++){
                    $row[$j] = addslashes($row[$j]);
                    $row[$j] = ereg_replace("\n","\\n",$row[$j]);
                    if (isset($row[$j])) { $return .= '"'.$row[$j].'"' ; } else { $return .= '""'; }
                    if ($j < ($numColumns-1)) { $return.= ','; }
                }
                $return .= ");\n";
            }
        }

        $return .= "\n\n\n";
    }
	//echo $return;

    //save file_ number randomic
	$nome_arquivo = "db-backup-". time() . ".sql";
	$url = "./backup/";
    $handle = fopen($url.$nome_arquivo,"w+");
    fwrite($handle,$return);
    fclose($handle);
	
	echo "<br>Backup Realizado!<br>"; 
	


/**
* Conexão via FTP com o PHP 
* Thiago Belem ~ /
*/
// Dados do servidor
$servidor = 'ftp.server.com.br'; // Endereço
$usuario = 'ftp_backup@server.com.br'; // Usuário
$senha = '******'; // Senha

// Abre a conexão com o servidor FTP
$ftp = ftp_connect($servidor); // Retorno: true ou false
if($ftp == false){echo "<br>Erro Servidor<br>";}
// Faz o login no servidor FTP
$login = ftp_login($ftp, $usuario, $senha); // Retorno: true ou false
if($login == false){echo "<br>Erro Login<br>";}else {echo "<br>Login<br>";}

// ======
// Define variáveis para o envio de arquivo
$ftp_arquivo = $nome_arquivo; // Nome do arquivo (externo)
$local_arquivo = $url.$nome_arquivo; // Localização (local)
$ftp_pasta = '/public_html/folder_destiny/'.$ftp_arquivo; // Pasta (externa)
// Envia o arquivo pelo FTP em modo ASCII
$envia = ftp_put($ftp, $nome_arquivo, $local_arquivo, FTP_BINARY); // Retorno: true / false
// ======
// Encerra a conexão ftp
ftp_close($ftp);
	
	
}

backupFullDataBase('localhost','root','','compras');