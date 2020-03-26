<?php
declare(strict_types=1);
include_once('./idatabase.php');

class DB implements idatabase{
	/*
    public $database = null;
    public $servername;
    public $dbname;
	public $username;
	public $passwort;*/

        
	public function __construct(string $servername,string $dbname,string $username,string $password){
            $this->servername = $servername;
            $this->dbname = $dbname;
            $this->username = $username;
            $this->password = $password;
	}
	
	public function open(){
            try{
				$DNS = "mysql:host=$this->servername;dbname=$this->dbname";
				$this->database = new PDO($DNS, $this->username, $this->password);
				$this->database -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->database -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
				echo ('Connection successful ');
            }
			catch(PDOException $exeption){
                echo('Connection failed '.$exeption -> getMessage());			
            }    
            catch(Exception $exception){
                echo 'Connection failed '.$exception -> getMessage();
            }
	}
	
	public function insert(string $productname, float $price, string $category){
            try{
				$sql = "INSERT INTO goods ($productname, $price, $category) VALUES(?,?,?)";
				$statement = $this->database-> prepare($sql);
				$statement->bindParam(1, $productname, PDO::PARAM_STR);
				$statement->bindParam(2, $price, PDO::PARAM_STR);
				$statement->bindParam(3, $category, PDO::PARAM_STR);
				$statement->execute();
				$this->database->lastInsertId();
				echo ('Insert successful ');
            }
			catch(PDOException $exeption){
                echo('Insert failed '.$exeption->getMessage());			
            }    
            catch(Exception $exception){
                echo 'Insert failed '.$exception -> getMessage();
            }
	}
	
	public function query(string $name, string $string){
            try{
				$query = "SELECT * FROM goods WHERE $name='$string'";
				$statement = $this->database->prepare($query);
				$statement->execute();
					
				while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
							print_r($row);
				}
            }
			catch(PDOException $exeption){
                echo ('Select statement failed '.$exeption->getMessage());			
            }    
            catch(Exception $exception){
                echo 'Select statement failed '.$exception -> getMessage();
            }
	}
	
	public function delete(string $name,string $string){
            try{
		$delete = "DELETE FROM goods WHERE $name='$string'";
		$stmt = $this->database->prepare($delete);
		$stmt -> execute();
		echo(' Deletion succesful ');
                
            }catch(PDOException $exeption){
		echo('Deletion failed '.$exeption->getMessage());			
            }    
            catch(Exception $exception){
                echo 'Deletion failed '.$exception -> getMessage();
            }
	}
	
	public function close(){
            try{
                $this->database = null;
		echo('Database closed ');
                
            }catch(PDOException $exeption){
		echo('Closing database failed '.$exeption->getMessage());			
	}    
	catch(Exception $exception){
		echo 'Closing database failed '.$exception -> getMessage();
	}
    }
} 
