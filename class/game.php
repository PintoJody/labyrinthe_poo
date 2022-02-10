<?php 

class Game {
    protected $map;
    protected $playerPos;
    protected $launch;
    

    function __construct(){
        $this->map = [];
    }

    public function getMap(){
        return $this->map;
    }
    public function getPlayerPos(){
        return $this->playerPos;
    }
    public function getPlayer(){
        return $this->playerPos;
    }

    public function setMap($map){
        $this->map = $map;
    }
    
    public function setPlayer($playerPos){
        $this->player = $playerPos;
    }
    public function setCell($x, $y, $cell) {
        $this->map[$x][$y] = $cell;
    } 


    public function init(){
        $map = [
        [0, 0, 0, 0, 0, 'K'],
        [0, 0, 1, 1, 0, 0],
        [0, 1, 1, 0, 0, 0],
        [0, 1, 0, 0, 0, 0],
        ['S', 1, 0, 'E', 0, 0]
        ];
        $this->map = $map;
        $this->setPlayer($this->getMap());

        for($line = 0; $line < count($this->getMap()); $line++) {
            for($column = 0; $column < count($this->getMap()[$line]); $column++) {
                if($this->getMap()[$line][$column] == "K") {
                    $this->getPlayer()[$line][$column] = "K";
                }
                elseif($this->getMap()[$line][$column] == "E") {
                    $this->getPlayer()[$line][$column] = "E"; 
                }
                elseif($this->getMap()[$line][$column] == "S") {
                    $this->setCell($line , $column , "P");  
                }           
                else {
                    $this->getPlayer()[$line][$column] = " ";
                }
            }
        } 
    }


    public function showMap(){
        for($line = 0; $line < count($this->getMap()); $line++){
            for($cell = 0; $cell < count($this->getMap()[$line]); $cell++){
                echo $this->getMap()[$line][$cell];
            }
            echo "\n";
        }
    }

    public function launch(){
        echo "\n";
        echo 'Salut voyageur !'."\n";
        echo 'Vous vous reveillez dans un labyrinthe.'."\n";
        echo 'Il y a une porte au loin mais elle semble fermée à double tour.'."\n";
        echo 'Trouvez la clef et dirigez-vous vers la sortie. Bon courage !'."\n"."\n";
    }

    public function playerChoice(){
        $action = false;
        $moveDirection = [];
        $choiceDispo = ["Z","S","Q","D"];
        $choice = '';

            while($action === false){
                echo 'Où voulez vous aller ?'."\n";
                echo 'Haut : Z | Bas : S | Gauche : Q | Droite : D'."\n"."\n";
                $choice = strtoupper(rtrim(fgets(STDIN)));
            
                if(in_array($choice, $choiceDispo)){
                    if($choice == "Z"){
                        $action = true;
                        echo 'Vous avancez en haut'."\n";
                        $moveDirection[0]--;

                        echo 'Vous êtes a la position '.$moveDirection[0].' '.$moveDirection[1].'';

                    }
                    elseif($choice == "S"){
                        $action = true;
                        echo 'Vous vous dirigez en bas'."\n";
                        $moveDirection[0]++;

                    }
                    elseif($choice == "Q"){
                        $action = true;
                        echo 'Vous décidez de vous diriger à gauche'."\n";
                        $moveDirection[1]--;

                    }
                    else{
                        $action = true;
                        echo 'Vous prenez à droite'."\n";
                        $moveDirection[1]++;
                }
            }
        }
    }

    public function checkDirection(){
        
    }

}


