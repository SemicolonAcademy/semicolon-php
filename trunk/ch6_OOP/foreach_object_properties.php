<?php
    class person {
        public $first_name = "Nepali";
        public $middle_name = "Daaju";
        public $last_name = "bhai";
        private $password = "hola!";
        public $age = 24;
        
        public function info() {
            foreach($this as $key => $value) {
                echo "$key is $value<br/>";
            }
        }
    }

    
	$daaju = new person();
	
	echo "<pre>";
	print_r($daaju);
	var_dump($daaju);	
	echo "</pre>";
	
    $daaju->info();
?>