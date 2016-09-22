<?php

require "core/bootstrap.php";
$persons = $query->all('Persons');
require 'persons.template.php';