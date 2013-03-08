<?php

class Thing_MedicalEntity_AnatomicalSystem extends Thing_MedicalEntity{

             /**
              * If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and biochemical functions of the system.
              *
              * @var $associatedPathophysiology string
              */
              public $associatedPathophysiology;

             /**
              * The underlying anatomical structures, such as organs, that comprise the anatomical system.
              *
              * @var $comprisedOf Thing_MedicalEntity_AnatomicalStructure|Thing_MedicalEntity_AnatomicalSystem
              */
              public $comprisedOf;

             /**
              * A medical condition associated with this anatomy.
              *
              * @var $relatedCondition Thing_MedicalEntity_MedicalCondition
              */
              public $relatedCondition;

             /**
              * Related anatomical structure(s) that are not part of the system but relate or connect to it, such as vascular bundles associated with an organ system.
              *
              * @var $relatedStructure Thing_MedicalEntity_AnatomicalStructure
              */
              public $relatedStructure;

             /**
              * A medical therapy related to this anatomy.
              *
              * @var $relatedTherapy Thing_MedicalEntity_MedicalTherapy
              */
              public $relatedTherapy;
}