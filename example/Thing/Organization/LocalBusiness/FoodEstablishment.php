<?php

class Thing_Organization_LocalBusiness_FoodEstablishment extends Thing_Organization_LocalBusiness{

             /**
              * Either Yes/No, or a URL at which reservations can be made.
              *
              * @var $acceptsReservations string|string
              */
              public $acceptsReservations;

             /**
              * Either the actual menu or a URL of the menu.
              *
              * @var $menu string|string
              */
              public $menu;

             /**
              * The cuisine of the restaurant.
              *
              * @var $servesCuisine string
              */
              public $servesCuisine;
}