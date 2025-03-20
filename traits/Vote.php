<?php 

trait Vote {

    public $personal_vote;

    public function setVote($personal_vote) {
        if($personal_vote <= 0 || $personal_vote > 5) {
            echo "ATTENZIONE! Il voto deve essere un numero compreso tra 1 e 5";
        } else {
            $this->personal_vote = $personal_vote;
        }
    }

    public function getVote() {
        return $this->personal_vote;
    }

}

?>