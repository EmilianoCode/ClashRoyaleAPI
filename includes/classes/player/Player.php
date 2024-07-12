<?php

    namespace ClashRoyaleAPI\includes\classes\player;

    require_once('Badge.php');
    use ClashRoyaleAPI\includes\classes\player;
    
    class Player{

        // GENERAL PLAYER DATA
        private $name;
        private $expLevel;
        private $trophies;
        private $bestTrophies;
        private $totalDonations;
        private $warDayWins;
        private $arena;
        private $starPoints;
        private $expPoints;
        private $legacyTrophyRoadHighScore;
        private $totalExpPoints;

        // BATTLE DATA
        private $wins;
        private $losses;
        private $battleCount;
        private $threeCrownWins;
        
        // PLAYER BADGES
        private $badges;

        public function __construct($data) {
            $this->name = $data["name"];
            $this->expLevel = $data["expLevel"];
            $this->trophies = $data["trophies"];
            $this->bestTrophies = $data["bestTrophies"];
            $this->totalDonations = $data["totalDonations"];
            $this->warDayWins = $data["warDayWins"];
            $this->arena = $data["arena"];
            $this->starPoints = $data["starPoints"];
            $this->expPoints = $data["expPoints"];
            $this->legacyTrophyRoadHighScore = $data["legacyTrophyRoadHighScore"];
            $this->totalExpPoints = $data["totalExpPoints"];
    
            $this->wins = $data["wins"];
            $this->losses = $data["losses"];
            $this->battleCount = $data["battleCount"];
            $this->threeCrownWins = $data["threeCrownWins"];

            $this->badges = [];
            foreach ($data["badges"] as $badge) {
                $this->badges[] = new Badge($badge["name"],
                                            $badge["level"],
                                            $badge["maxLevel"],
                                            $badge["progress"],
                                            $badge["target"],
                                            $badge["iconUrls"]["large"]);
            }
        }
    
        // Métodos getter para todos los atributos
        public function getName() {
            return $this->name;
        }
    
        public function getExpLevel() {
            return $this->expLevel;
        }
    
        public function getTrophies() {
            return $this->trophies;
        }
    
        public function getBestTrophies() {
            return $this->bestTrophies;
        }
    
        public function getTotalDonations() {
            return $this->totalDonations;
        }
    
        public function getWarDayWins() {
            return $this->warDayWins;
        }
    
        public function getArena() {
            return $this->arena;
        }
    
        public function getStarPoints() {
            return $this->starPoints;
        }
    
        public function getExpPoints() {
            return $this->expPoints;
        }
    
        public function getLegacyTrophyRoadHighScore() {
            return $this->legacyTrophyRoadHighScore;
        }
    
        public function getTotalExpPoints() {
            return $this->totalExpPoints;
        }
    
        public function getWins() {
            return $this->wins;
        }
    
        public function getLosses() {
            return $this->losses;
        }
    
        public function getBattleCount() {
            return $this->battleCount;
        }
    
        public function getThreeCrownWins() {
            return $this->threeCrownWins;
        }

        public function getBadges() {
            return $this->badges;
        }
    }
?>