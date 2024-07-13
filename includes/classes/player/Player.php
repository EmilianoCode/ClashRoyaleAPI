<?php

    namespace ClashRoyaleAPI\includes\classes\player;

    require_once('Badge.php');
    use ClashRoyaleAPI\includes\classes\player\Badge;
    
    class Player{

        // GENERAL PLAYER DATA
        private $generalPlayerData;

        // BATTLE DATA
        private $battleData;
        
        // PLAYER BADGES
        private $badges;

        public function __construct($data) {

            $this->generalPlayerData = [
                "name" => $data["name"],
                "expLevel" => $data["expLevel"],
                "trophies" => $data["trophies"],
                "bestTrophies" => $data["bestTrophies"],
                "totalDonations" => $data["totalDonations"],
                "warDayWins" => $data["warDayWins"],
                "arena" => $data["arena"],
                "starPoints" => $data["starPoints"],
                "expPoints" => $data["expPoints"],
                "legacyTrophyRoadHighScore" => $data["legacyTrophyRoadHighScore"],
                "totalExpPoints" => $data["totalExpPoints"]
            ];

            $this->battleData = [
                "wins" => $data["wins"],
                "losses" => $data["losses"],
                "battleCount" => $data["battleCount"],
                "threeCrownWins" => $data["threeCrownWins"]
            ];

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
        public function getGeneralPlayerData(){
            return $this->$generalPlayerData;    
        }
        
        public function getBattleData(){
            return $this->$battleData;    
        }

        public function getBadges() {
            return $this->badges;
        }
    }
?>