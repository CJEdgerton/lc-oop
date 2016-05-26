<?php

use Acme\Users\Person;
use Acme\Business;
use Acme\Staff;

$chris = new Person('Chris');

$staff = new Staff([$chris]);

$laracasts =  new Business($staff);

$laracasts->hire( new Person('John Doe') );

var_dump( $laracasts->getStaffMembers() );