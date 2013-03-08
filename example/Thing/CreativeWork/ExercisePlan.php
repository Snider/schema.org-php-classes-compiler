<?php

class Thing_CreativeWork_ExercisePlan extends Thing_CreativeWork{

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

             /**
              * A possible complication and/or side effect of this therapy. If it is known that an adverse outcome is serious (resulting in death, disability, or permanent damage; requiring hospitalization; or is otherwise life-threatening or requires immediate medical attention), tag it as a seriouseAdverseOutcome instead.
              *
              * @var $adverseOutcome Thing_MedicalEntity
              */
              public $adverseOutcome;

             /**
              * A contraindication for this therapy.
              *
              * @var $contraindication Thing_MedicalEntity_MedicalContraindication
              */
              public $contraindication;

             /**
              * A therapy that duplicates or overlaps this one.
              *
              * @var $duplicateTherapy Thing_MedicalEntity_MedicalTherapy
              */
              public $duplicateTherapy;

             /**
              * A factor that indicates use of this therapy for treatment and/or prevention of a condition, symptom, etc. For therapies such as drugs, indications can include both officially-approved indications as well as off-label uses. These can be distinguished by using the ApprovedIndication subtype of MedicalIndication.
              *
              * @var $indication Thing_MedicalEntity_MedicalIndication
              */
              public $indication;

             /**
              * A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient and may require medical or surgical intervention to prevent one of the outcomes in this definition.
              *
              * @var $seriousAdverseOutcome Thing_MedicalEntity
              */
              public $seriousAdverseOutcome;

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

             /**
              * Length of time to engage in the activity.
              *
              * @var $activityDuration Thing_Intangible_Quantity_Duration
              */
              public $activityDuration;

             /**
              * How often one should engage in the activity.
              *
              * @var $activityFrequency string
              */
              public $activityFrequency;

             /**
              * Any additional component of the exercise prescription that may need to be articulated to the patient. This may include the order of exercises, the number of repetitions of movement, quantitative distance, progressions over time, etc.
              *
              * @var $additionalVariable string
              */
              public $additionalVariable;

             /**
              * Type(s) of exercise or activity, such as strength training, flexibility training, aerobics, cardiac rehabilitation, etc.
              *
              * @var $exerciseType string
              */
              public $exerciseType;

             /**
              * Quantitative measure gauging the degree of force involved in the exercise, for example, heartbeats per minute. May include the velocity of the movement.
              *
              * @var $intensity string
              */
              public $intensity;

             /**
              * Number of times one should repeat the activity.
              *
              * @var $repetitions Number
              */
              public $repetitions;

             /**
              * How often one should break from the activity.
              *
              * @var $restPeriods string
              */
              public $restPeriods;

             /**
              * Quantitative measure of the physiologic output of the exercise; also referred to as energy expenditure.
              *
              * @var $workload Thing_Intangible_Quantity_Energy
              */
              public $workload;
}