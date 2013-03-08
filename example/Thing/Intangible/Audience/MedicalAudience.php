<?php

class Thing_Intangible_Audience_MedicalAudience extends Thing_Intangible_Audience{

             /**
              * Any alternate name for this medical entity.
              *
              * @var $alternateName string
              */
              public $alternateName;

             /**
              * A medical code for the entity, taken from a controlled vocabulary or ontology such as ICD-9, DiseasesDB, MeSH, SNOMED-CT, RxNorm, etc.
              *
              * @var $code Thing_MedicalEntity_MedicalIntangible_MedicalCode
              */
              public $code;

             /**
              * A medical guideline related to this entity.
              *
              * @var $guideline Thing_MedicalEntity_MedicalGuideline
              */
              public $guideline;

             /**
              * The system of medicine that includes this MedicalEntity, for example 'evidence-based', 'homeopathic', 'chiropractic', etc.
              *
              * @var $medicineSystem Thing_MedicalEntity_MedicalIntangible_MedicalEnumeration_MedicineSystem
              */
              public $medicineSystem;

             /**
              * If applicable, the organization that officially recognizes this entity as part of its endorsed system of medicine.
              *
              * @var $recognizingAuthority Thing_Organization
              */
              public $recognizingAuthority;

             /**
              * If applicable, a medical specialty in which this entity is relevant.
              *
              * @var $relevantSpecialty Thing_MedicalEntity_MedicalIntangible_MedicalEnumeration_MedicalSpecialty
              */
              public $relevantSpecialty;

             /**
              * A medical study or trial related to this entity.
              *
              * @var $study Thing_MedicalEntity_MedicalStudy
              */
              public $study;
}