<?php

class Thing_MedicalEntity_MedicalTherapy_LifestyleModification_PhysicalActivity extends Thing_MedicalEntity_MedicalTherapy_LifestyleModification{

             /**
              * The anatomy of the underlying organ system or structures associated with this entity.
              *
              * @var $associatedAnatomy Thing_MedicalEntity_AnatomicalSystem|Thing_MedicalEntity_SuperficialAnatomy|Thing_MedicalEntity_AnatomicalStructure
              */
              public $associatedAnatomy;

             /**
              * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
              *
              * @var $category string|Thing_MedicalEntity_MedicalIntangible_MedicalEnumeration_PhysicalActivityCategory|Thing
              */
              public $category;

             /**
              * The characteristics of associated patients, such as age, gender, race etc.
              *
              * @var $epidemiology string
              */
              public $epidemiology;

             /**
              * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
              *
              * @var $pathophysiology string
              */
              public $pathophysiology;
}