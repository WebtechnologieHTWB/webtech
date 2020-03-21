<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "ueb4";

interface intern
{
    public function open();

    public function insert($record);

    public function query($name, $string);

    public function delete($name, $string);

    public function close();
}


class DB implements intern
{
    var $connection;

    #$csvList = [1 => ['butter', 1.79, 'dairy products'], 2 => ['milk', 0.79, 'dairy products'], 3 => ['strawberry-cheesecake', 32.75, 'confectionery products'], 4 => ['orange juice', 3.49, 'drink'], 5 => ['cherry-banana juice', 2.49, 'drink'], 6 => ['apple juice', 1.29, 'drink']];

    public function open()
    {
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "ueb4";
        try {
            /**
             * $connection = mysqli_connect($servername , $username, $password, $dbname);
             * $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
             * $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             */
            $mysqli = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($mysqli->connect_errno) {
                echo "Failed to connect to MySQL: " . $mysqli->connect_error;
                exit();
            } else {
                echo "connected";
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * was soll hier eingefügt werden?
     * einmal im Hash, also von der csv datei in das hier rein und dann nochmal im Array, damit es mittels PHP und MySQL übertragen wird
     * array-push, kann daten anhängen
     * schleifen, mit denen werte eingefügt werden durch das array (durchläuft das Array)
     * @param $record = das ist dieses Array
     */
    public function insert($record)
    {
		//namen von zellen sind namen von spalten
		//zeile übergeben, dann hash übergeben
		//namen spalte ist namen des hash
		
        try {
/*
            $file = "ueb4.csv";
            $csvList = [1 => ['butter', 1.79, 'dairy products'], 2 => ['milk', 0.79, 'dairy products'], 3 => ['strawberry-cheesecake', 32.75, 'confectionery products'], 4 => ['orange juice', 3.49, 'drink'], 5 => ['cherry-banana juice', 2.49, 'drink'], 6 => ['apple juice', 1.29, 'drink']];
            file_put_contents($file, serialize($csvList));
            $unserialized = unserialize(file_get_contents($file));
            $unserialized[7] = ['cheese', 2.88, 'dairy products'];
            file_put_contents($file, serialize($unserialized));
            var_dump($unserialized); */
        $file = "ueb4.csv";
        $csvList = [1 => ['butter', 1.79, 'dairy products'], 2 => ['milk', 0.79, 'dairy products'], 3 => ['strawberry-cheesecake', 32.75, 'confectionery products'], 4 => ['orange juice', 3.49, 'drink'], 5 => ['cherry-banana juice', 2.49, 'drink'], 6 => ['apple juice', 1.29, 'drink']];
        $complete=file_put_contents($file, serialize($csvList));
        $unserialized = unserialize(file_get_contents($file));
        $anzahl=count($complete);
        $unserialized[$anzahl+1] = $record;
        file_put_contents($file, serialize($unserialized));
        var_dump($unserialized);

        } catch (PDOException $e) {
            /** echo $sql . "<br>" . $e->getMessage(); */
        }
    }

    public function query($name, $string)
    {
        #$sql = "select * from " . $name . " where " . $string . ";";
        /**
         * $sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";
         * $result = $conn->query($sql);
         *
         * if ($result->num_rows > 0) {
         * // output data of each row
         * while($row = $result->fetch_assoc()) {
         * echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
         * }
         * } else {
         * echo "0 results";
         * }
         * $conn->close();
         */
    }

    public function delete($name, $string)
    {
    }

    public function close()
    {
        $connection = null;
    }
}
?>
<?php
$databaseDB = new DB();
$databaseDB->open();
$databaseDB->insert([13 => ['cookies',0.99,'candy']]);
$databaseDB->close();
?>