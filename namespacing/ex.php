<?php

use Acme\Users\Person;
use Acme\Business;
use Acme\Staff;

$jeff = new Person('Jeff');

$staff = new Staff([$jeff]);

$laracasts = new Business($staff);

$laracasts->hire(new Person('Tsuchi'));

var_dump( $laracasts->getMembers() );
