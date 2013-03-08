<?php

class Thing_CreativeWork_Diet extends Thing_CreativeWork{

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
              * Nutritional information specific to the dietary plan. May include dietary recommendations on what foods to avoid, what foods to consume, and specific alterations/deviations from the USDA or other regulatory body's approved dietary guidelines.
              *
              * @var $dietFeatures string
              */
              public $dietFeatures;

             /**
              * People or organizations that endorse the plan.
              *
              * @var $endorsers Thing_Organization|Thing_Person
              */
              public $endorsers;

             /**
              * Medical expert advice related to the plan.
              *
              * @var $expertConsiderations string
              */
              public $expertConsiderations;

             /**
              * Descriptive information establishing the overarching theory/philosophy of the plan. May include the rationale for the name, the population where the plan first came to prominence, etc.
              *
              * @var $overview string
              */
              public $overview;

             /**
              * Specific physiologic benefits associated to the plan.
              *
              * @var $physiologicalBenefits string
              */
              public $physiologicalBenefits;

             /**
              * Proprietary name given to the diet plan, typically by its originator or creator.
              *
              * @var $proprietaryName string
              */
              public $proprietaryName;

             /**
              * Specific physiologic risks associated to the plan.
              *
              * @var $risks string
              */
              public $risks;
}