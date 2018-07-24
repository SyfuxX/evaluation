<?php

    namespace Cat;

    class Cat 
    {

        private $firstname;
        private $age;
        private $color;
        private $sex;
        private $race;

        /**
         * get firstname
         * 
         * receive the information firstname from a form
         */
        public function getFirstname() : STRING
        {
            return $this->firstname;
        }

        /**
         * set firstname
         * 
         * set the firstname variable in our class
         */
        public function setFirstname(STRING $firstname)
        {
            $this->firstname = $firstname;
            return $this;
        }

        /**
         * get age
         * 
         * receive the information age from a form
         */
        public function getAge() : INT
        {
            return $this->age;
        }

        /**
         * set age
         * 
         * set the age variable in our class
         */
        public function setAge(INT $age)
        {
            $this->age = $age;
            return $this;
        }

        /**
         * get color
         * 
         * receive the information color from a form
         */
        public function getColor() : STRING
        {
            return $this->color;
        }

        /**
         * set color
         * 
         * set the color variable in our class
         */
        public function setColor(STRING $color)
        {
            $this->color = $color;
            return $this;
        }

        /**
         * get sex
         * 
         * receive the information sex from a form
         */
        public function getSex() : STRING
        {
            return $this->sex;
        }

        /**
         * set sex
         * 
         * set the sex variable in our class
         */
        public function setSex(STRING $sex)
        {
            $this->sex = $sex;
            return $this;
        }

        /**
         * get race
         * 
         * receive the information race from a form
         */
        public function getRace() : STRING
        {
            return $this->race;
        }

        /**
         * set race
         * 
         * set the race variable in our class
         */
        public function setRace(STRING $race)
        {
            $this->race = $race;
            return $this;
        }

        /**
         * From array
         * 
         * Create a new Human instance from an array of value
         */
        public static function fromArray(array $definition)
        {
            $cat = new Cat();
            $cat->setFirstname($definition['firstname'] ?? '')
                ->setAge((INT)$definition['age'] ?? '')
                ->setColor($definition['color'] ?? '')
                ->setSex($definition['sex'] ?? '')
                ->setRace($definition['race'] ?? '');
            
            return $cat;
        }

    }

?>