<?php

    class Animal extends Event{
        function __construct($name,$recipient,$client) {
            parent::setName($name);
            parent::setClient($client);
            parent::setRecipient($recipient);
        }

    }



?>