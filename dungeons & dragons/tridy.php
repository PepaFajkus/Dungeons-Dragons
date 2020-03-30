<?php

Class Behavior
{

    public $health;
    public $stamina;
    public $strength;
    public $wisdom;
    public $inteligence;
    public $charisma;
    public $dexerity;
    public $sex;
    public $age;
    public $name;
    public $surname;

    public function __construct($health, $stamina, $strength, $wisdom, $inteligence, $charisma, $dexerity, $sex, $age, $race)
    {
        $this->health = $health;
        $this->stamina = $stamina;
        $this->strength = $strength;
        $this->wisdom = $wisdom;
        $this->inteligence = $inteligence;
        $this->charisma = $charisma;
        $this->dexerity = $dexerity;
        $this->sex = $sex;
        $this->age = $age;
        $this->race = $race;

        $this->name = $this->name();
        $this->surname = $this->surname();
    }

    public function name ()
    {

        $male_names = array("Adran", "Aelar", "Aramil", "Arannis", "Aust", "Beiro", "Berrian", "Carric", "Enialis", "Erdan", "Erevan", "Galinndan", "Hadarai", "Heian", "Himo", "Immeral", "Ivellios", "Laucian", "Mindartis", "Paelias", "Peren", "Quarion", "Riardon", "Rolen", "Soveliss", "Tamior", "Tarivol", "Teren", "Varis");
        $female_names = array("Adrie", "Altaea", "Anastrianna", "Andraste", "Antinua", "Betrynna", "Birel", "Caelynn", "Drusilia", "Enna", "Felosial", "Ielenia", "Jelennet", "Keylet", "Leshanna", "Lia", "Meriele", "Mialee", "Naivara", "Quelenna", "Quillata", "Sariel", "Shanairra", "Shava", "Silaqui", "Teirastra", "Tia", "Vadania", "Valanta", "Xanaphia");
        $children_names = array("Ara", "Bryn", "Del", "Eryn", "Faen", "Fann", "Innil", "Lael", "Mella", "Naill", "Naeris", "Rael", "Rinn", "Sai", "Syllin", "Tia", "Vall");

        if ($this->sex == "male" && $this->age >= 18) {
            $random_name_index = array_rand($male_names);
            return $male_names[$random_name_index];
        } else if ($this->sex == "female" && $this->age >= 18){
            $random_name_index = array_rand($female_names);
            return $female_names[$random_name_index];
        } else {
            $random_name_index = array_rand($children_names);
            return $children_names[$random_name_index];
        }
    }

    public function surname ()
    {
        $race_surnames = array("Amastacia", "Amakiir", "Galanodel", "Holimion", "Liadon", "Meliamne", "Naïlo", "Siannodel", "Ilphelkiir", "Xiloscient");
        
        $random_surname_index = array_rand($race_surnames);
        return $race_surnames[$random_surname_index];
    }



}

Class Race extends Behavior 
{
    public $race;
}



$behavior = new Behavior(100, 250, 60, 300, 220, 150, 330, "male", 33, "Elf");


?>