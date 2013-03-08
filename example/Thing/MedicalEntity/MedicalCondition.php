<?php

class Thing_MedicalEntity_MedicalCondition extends Thing_MedicalEntity{

             /**
              * The anatomy of the underlying organ system or structures associated with this entity.
              *
              * @var $associatedAnatomy Thing_MedicalEntity_AnatomicalSystem|Thing_MedicalEntity_SuperficialAnatomy|Thing_MedicalEntity_AnatomicalStructure
              */
              public $associatedAnatomy;

             /**
              * An underlying cause. More specifically, one of the causative agent(s) that are most directly responsible for the pathophysiologic process that eventually results in the occurrence.
              *
              * @var $cause Thing_MedicalEntity_MedicalCause
              */
              public $cause;

             /**
              * One of a set of differential diagnoses for the condition. Specifically, a closely-related or competing diagnosis typically considered later in the cognitive process whereby this medical condition is distinguished from others most likely responsible for a similar collection of signs and symptoms to reach the most parsimonious diagnosis or diagnoses in a patient.
              *
              * @var $differentialDiagnosis Thing_MedicalEntity_MedicalIntangible_DDxElement
              */
              public $differentialDiagnosis;

             /**
              * The characteristics of associated patients, such as age, gender, race etc.
              *
              * @var $epidemiology string
              */
              public $epidemiology;

             /**
              * The likely outcome in either the short term or long term of the medical condition.
              *
              * @var $expectedPrognosis string
              */
              public $expectedPrognosis;

             /**
              * The expected progression of the condition if it is not treated and allowed to progress naturally.
              *
              * @var $naturalProgression string
              */
              public $naturalProgression;

             /**
              * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
              *
              * @var $pathophysiology string
              */
              public $pathophysiology;

             /**
              * A possible unexpected and unfavorable evolution of a medical condition. Complications may include worsening of the signs or symptoms of the disease, extension of the condition to other organ systems, etc.
              *
              * @var $possibleComplication string
              */
              public $possibleComplication;

             /**
              * A possible treatment to address this condition, sign or symptom.
              *
              * @var $possibleTreatment Thing_MedicalEntity_MedicalTherapy
              */
              public $possibleTreatment;

             /**
              * A preventative therapy used to prevent an initial occurrence of the medical condition, such as vaccination.
              *
              * @var $primaryPrevention Thing_MedicalEntity_MedicalTherapy
              */
              public $primaryPrevention;

             /**
              * A modifiable or non-modifiable factor that increases the risk of a patient contracting this condition, e.g. age,  coexisting condition.
              *
              * @var $riskFactor Thing_MedicalEntity_MedicalRiskFactor
              */
              public $riskFactor;

             /**
              * A preventative therapy used to prevent reoccurrence of the medical condition after an initial episode of the condition.
              *
              * @var $secondaryPrevention Thing_MedicalEntity_MedicalTherapy
              */
              public $secondaryPrevention;

             /**
              * A sign or symptom of this condition. Signs are objective or physically observable manifestations of the medical condition while symptoms are the subjective experienceof the medical condition.
              *
              * @var $signOrSymptom Thing_MedicalEntity_MedicalSignOrSymptom
              */
              public $signOrSymptom;

             /**
              * The stage of the condition, if applicable.
              *
              * @var $stage Thing_MedicalEntity_MedicalIntangible_MedicalConditionStage
              */
              public $stage;

             /**
              * A more specific type of the condition, where applicable, for example 'Type 1 Diabetes', 'Type 2 Diabetes', or 'Gestational Diabetes' for Diabetes.
              *
              * @var $subtype string
              */
              public $subtype;

             /**
              * A medical test typically performed given this condition.
              *
              * @var $typicalTest Thing_MedicalEntity_MedicalTest
              */
              public $typicalTest;
}