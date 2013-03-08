<?php

class Thing_MedicalEntity_MedicalProcedure_TherapeuticProcedure extends Thing_MedicalEntity_MedicalProcedure{

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
}