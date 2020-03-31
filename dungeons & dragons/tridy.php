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

    public function __construct($sex, $age)
    {
        /* $this->health = $health;
        $this->stamina = $stamina;
        $this->strength = $strength;
        $this->wisdom = $wisdom;
        $this->inteligence = $inteligence;
        $this->charisma = $charisma;
        $this->dexerity = $dexerity;
        */
        $this->sex = $sex;
        $this->age = $age;
        
        $this->name = $this->name();
        $this->surname = $this->surname();
    }
    
}

Class Elf extends Behavior 
{

    public function name ()
    {

        $elf_male_names = array("Adran", "Aelar", "Aramil", "Arannis", "Aust", "Beiro", "Berrian", "Carric", "Enialis", "Erdan", "Erevan", "Galinndan", "Hadarai", "Heian", "Himo", "Immeral", "Ivellios", "Laucian", "Mindartis", "Paelias", "Peren", "Quarion", "Riardon", "Rolen", "Soveliss", "Tamior", "Tarivol", "Teren", "Varis");
        $elf_female_names = array("Adrie", "Altaea", "Anastrianna", "Andraste", "Antinua", "Betrynna", "Birel", "Caelynn", "Drusilia", "Enna", "Felosial", "Ielenia", "Jelennet", "Keylet", "Leshanna", "Lia", "Meriele", "Mialee", "Naivara", "Quelenna", "Quillata", "Sariel", "Shanairra", "Shava", "Silaqui", "Teirastra", "Tia", "Vadania", "Valanta", "Xanaphia");
        $elf_children_names = array("Ara", "Bryn", "Del", "Eryn", "Faen", "Fann", "Innil", "Lael", "Mella", "Naill", "Naeris", "Rael", "Rinn", "Sai", "Syllin", "Tia", "Vall");

            if ($this->sex == "male" && $this->age >= 18) {
                $random_name_index = array_rand($elf_male_names);
                return $elf_male_names[$random_name_index];
            } else if ($this->sex == "female" && $this->age >= 18){
                $random_name_index = array_rand($elf_female_names);
                return $elf_female_names[$random_name_index];
            } else {
                $random_name_index = array_rand($elf_children_names);
                return $elf_children_names[$random_name_index];
            }
    }

    public function surname ()
    {
        $elf_race_surnames = array("Amastacia", "Amakiir", "Galanodel", "Holimion", "Liadon", "Meliamne", "Naïlo", "Siannodel", "Ilphelkiir", "Xiloscient");
            $random_surname_index = array_rand($elf_race_surnames);
            return $elf_race_surnames[$random_surname_index];
    }
    
}

$elf = new Elf("male", 30);

?>