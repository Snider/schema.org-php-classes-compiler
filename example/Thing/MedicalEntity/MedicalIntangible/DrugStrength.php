<?php

class Thing_MedicalEntity_MedicalIntangible_DrugStrength extends Thing_MedicalEntity_MedicalIntangible{

             /**
              * An active ingredient, typically chemical compounds and/or biologic substances.
              *
              * @var $activeIngredient string
              */
              public $activeIngredient;

             /**
              * The location in which the strength is available.
              *
              * @var $availableIn Thing_Place_AdministrativeArea
              */
              public $availableIn;

             /**
              * The units of an active ingredient's strength, e.g. mg.
              *
              * @var $strengthUnit string
              */
              public $strengthUnit;

             /**
              * The value of an active ingredient's strength, e.g. 325.
              *
              * @var $strengthValue Number
              */
              public $strengthValue;
}