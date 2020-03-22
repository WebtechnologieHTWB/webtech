<?php
declare(strict_types=1);
include_once('./idatabase.php');

class PHPDB implements idatabase{ 
	
        public $filename = "\\TableContents.txt";
        public $fileContent;
        
        
        
	public function __construct(string $dbservername,string $dbname,string $dbusername,string $dbpassword){
            
            if (!file_exists($this->filename)) {
                $this->fileContent = array( 
                "1" =>array('productname'=>'butter','price'=>1.79,'category'=>'dairy products'),
                "2" =>array('productname'=>'milk','price'=>0.79,'category'=>'dairy products'),
                "3" =>array('productname'=>'strawberry-cheesecake','price'=>32.75,'category'=>'confectionery products'),
                "4" =>array('productname'=>'orange juice','price'=>3.49,'category'=>'drink'),
                "5" =>array('productname'=>'cherry-banana juice','price'=>2.49,'category'=>'drink'),
                "6" =>array('productname'=>'apple juice','price'=>1.49,'category'=>'drink'));
                        
                $file = fopen($this->filename, "w") or die("Unable to open file.");
                fwrite($file, serialize($this->fileContent));
                fclose($file);
            }
        }
	
        
	public function open(){
            $this->fileContent = unserialize(file_get_contents($this->filename));
        }
        
        
        public function insert(string $productname, float $price, string $category){
    
            if (!(in_array($productname, $this->fileContent))) {
                array_push($this->fileContent,array('$productname'=>$productname,'price'=>$price,'category'=>$category));
                echo "Article inserted  ";
            }
            else {
                echo "Article already in database";
            }
        }
	
	public function query(string $name, string $string){
            
            try {
                foreach ($this->fileContent as $row) {
                    if(in_array($string, $row)) { 
                        echo "  Query result( article: ".$row['$productname']."  price: ".$row['price']."  category: ".$row['category'].") ";
                     }
                }
            }
            catch(OutOfBoundsException $exception ){
                echo 'Query failed '.$exception -> getMessage();	
            }    
	}
	
	public function delete(string $name, string $string){
             try {
                $deleterow = array();
                foreach ($this->fileContent as $row) {
                    if(!(in_array($string, $row))) { 
                         array_push($deleterow, $row);
                     }
                }
                $this->fileContent = $deleterow;
                echo "Delete successful ";
            }
            catch(OutOfBoundsException $exception ){
                echo 'Delete failed '.$exception -> getMessage();	
            }   
	}
	
	public function close(){
            
		$file = fopen($this->filename, "w") or die("Unable to open file.");
                fwrite($file, serialize($this->fileContent));
                fclose($file);
	}
	
} 


