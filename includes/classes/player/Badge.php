<?php

    namespace ClashRoyaleAPI\includes\classes\player;

    class Badge {
        private $name;
        private $level;
        private $maxLevel;
        private $progress;
        //private $target;
        private $iconUrl;
    
        // Constructor que asigna valores a los atributos
        public function __construct($name, $level, $maxLevel, $progress, $iconUrl) {
            $this->name = $name;
            $this->level = $level;
            $this->maxLevel = $maxLevel;
            $this->progress = $progress;
            $this->iconUrl = $iconUrl;
        }
    
        // Getters para acceder a los atributos
        public function getName() {
            return $this->name;
        }
    
        public function getLevel() {
            return $this->level;
        }
    
        public function getMaxLevel() {
            return $this->maxLevel;
        }
    
        public function getProgress() {
            return $this->progress;
        }
        
        public function getIconUrl() {
            return $this->iconUrl;
        }
    }
    
?>