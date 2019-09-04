<?php
//ヒトカゲのクラス
//画像追加、レベル記入、わざ、性格
    class Charmander 
    {
        public $img = 'hitokage.png';
        public $level;
        public $character;
        public $type;


        public function __construct($level,$character,$type) {
            echo '<br>';
        
           
            $this->level = $level;
            $this->character = $character;
            $this->type = $type;

        }

        function choice(){
            echo 'ヒトカゲが選ばれました'.'<br>';
            
        }

    }



//ゼニガメのクラス
//画像追加、レベル記入、わざ、性格
    class Squirtle
    {
        public $img =  'zenigame.png';
        public $level;
        public $character;
        public $type;


        public function __construct($level,$character,$type) {
    
            echo '<br>';
        
           
            $this->level = $level;
            $this->character = $character;
            $this->type = $type;

        }

        function choice(){
            echo 'ゼニガメが選ばれました'.'<br>';
            
        }
    }


//フシギダネのクラス
//画像追加、レベル記入、わざ、性格
    class Bulbasaur 
    {
        public $img = 'husigidane.png';
        public $level;
        public $character;
        public $type;


        public function __construct($level,$character,$type) {
    
            echo '<br>';
        
           
            $this->level = $level;
            $this->character = $character;
            $this->type = $type;

        }

        function choice(){
            echo 'フシギダネが選ばれました'.'<br>';
            
        }


    }




?>