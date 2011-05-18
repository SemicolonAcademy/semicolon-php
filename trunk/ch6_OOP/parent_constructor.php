<?php
    
    class person {
        public $name;        

        public function greet() {
            echo "Hi!";
        }
        
        public function __construct($name) {            
            $this->name = $name; 
			echo "creating person <br/>";			
        }
		public function display_name(){
			echo "my name is $this->name<br/>";
		}
    }
    
    class programmer extends person {
        
		public function __construct($name) {
				
				echo "creating programmer <br/>";
				
				parent::__construct($name); //uncomment this line and run the script again
				
				/*
				the "parent" part means "get the parent of this object, and use it", 
				and the __construct() part means "call the construct function".
				so the whole line means "get the parent of this object then call its constructor". 
				*/
		}
		public function greet() {
            echo "hola!";
        }
    }
    
    $daaju = new programmer("daaju");
    echo $daaju->display_name();
?>