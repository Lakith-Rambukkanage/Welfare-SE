<?php

    abstract class Event {
        private var $name;
        private var $client;
        private var $recipient;
        private array $donors;
        private var $amount_needed;
        private var $amount_received;
        private var $percentage_completion;
        private var $description;

        function __construct($name,$type,$recipient,$client) {
            $this->name = $name;
            $this->type = $type;
            $this->client = $client;
            $this->recipient = $recipient;
            $this->percentage_completion = '0%';
        }

        public var getName() {
            return $this->name;
        }

        public void setName($name) {
            $this->name = $name;
        }

        public var getClient() {
            return $this->client;
        }

        public void setClient($client) {
            $this->client = $client;
        }

        public var getRecipient() {
            return $this->recipient;
        }

        public void setRecipient($recipient) {
            $this->recipient = $recipient;
        }

        public var getDonors() {
            return $this->donors;
        }

        public void setDonors(Donor $donor) {
            $this->array_push($donors,$donor->getName());
        }

        public var getPercentage_completion() {
            return $this->percentage_completion;
        }

        public void setPercentage_completion($percentage_completion) {
            $this->percentage_completion = $percentage_completion;
        }

        public var getAmount_needed() {
            return $this->$amount_needed;
        }
    
        public void setAmount_needed(var $amount_needed) {
            $this->$amount_needed = $amount_needed;
        }
    
        public var getAmount_received() {
            return $this->$amount_received;
        }
    
        public void setAmount_received(var $amount_received) {
            $this->$amount_received = $amount_received;
            $this->percentage_completion = ($this->$amount_needed-$this->$amount_received)/100;
        }
        public var getDescription() {
            return $this->$description;
        }
    
        public void setDescription(var $description) {
            $this->$description = $description;
        }
     
   }
?>