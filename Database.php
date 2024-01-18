<?php
    class Database
    {
        private $host = 'localhost';
        private $user = 'root';
        private $password = '';
        private $databaseName = 'login-system';

        private $databaseH;
        private $statement;
        private $error;

        public function __construct()
        {
            $databaseConnection = 'mysql:host=' . $this->host . ';dbname=' . $this->databaseName;
            $options = array(PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

            try {
                $this->databaseH = new PDO($databaseConnection, $this->user, $this->password, $options);
                echo 'Database Connected.';
            }catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }

        public function query($sql)
        {
            $this->statement =  $this->databaseH->prepare($sql);
        }

        public function bind($parameters, $value, $type = null)
        {
            if (is_null($type)) {
                switch (true) {
                    case is_int($value):
                        $type = PDO::PARAM_INT;
                        break;
                    case is_bool($value):
                        $type = PDO::PARAM_BOOL;
                        break;
                    case is_null($value):
                        $type = PDO::PARAM_NULL;
                        break;
                    default:
                        $type = PDO::PARAM_STR;
                }
            }
            $this->statement->bindValue($parameters, $value, $type);
        }

        public function execute()
        {
            return $this->statement->execute();
        }

        public function resultSet()
        {
            $this->execute();
            return $this->statement->fetchAll(PDO::FETCH_OBJ);
        }

        public function singleSet()
        {
            $this->execute();
            return $this->statement->fetch(PDO::FETCH_OBJ);
        }

        public function rowCount()
        {
            return $this->statement->rowCount();
        }
    }
?>