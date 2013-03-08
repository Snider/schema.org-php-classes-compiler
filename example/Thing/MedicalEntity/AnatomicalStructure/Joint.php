<?php

class Thing_MedicalEntity_AnatomicalStructure_Joint extends Thing_MedicalEntity_AnatomicalStructure{

             /**
              * The biomechanical properties of the bone.
              *
              * @var $biomechnicalClass string
              */
              public $biomechnicalClass;

             /**
              * The degree of mobility the joint allows.
              *
              * @var $functionalClass string
              */
              public $functionalClass;

             /**
              * The name given to how bone physically connects to each other.
              *
              * @var $structuralClass string
              */
              public $structuralClass;
}