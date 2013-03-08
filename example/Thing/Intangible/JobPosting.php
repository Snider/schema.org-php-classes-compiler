<?php

class Thing_Intangible_JobPosting extends Thing_Intangible{

             /**
              * The base salary of the job.
              *
              * @var $baseSalary Number
              */
              public $baseSalary;

             /**
              * Description of benefits associated with the job.
              *
              * @var $benefits string
              */
              public $benefits;

             /**
              * Publication date for the job posting.
              *
              * @var $datePosted Date
              */
              public $datePosted;

             /**
              * Educational background needed for the position.
              *
              * @var $educationRequirements string
              */
              public $educationRequirements;

             /**
              * Type of employment (e.g. full-time, part-time, contract, temporary, seasonal, internship).
              *
              * @var $employmentType string
              */
              public $employmentType;

             /**
              * Description of skills and experience needed for the position.
              *
              * @var $experienceRequirements string
              */
              public $experienceRequirements;

             /**
              * Organization offering the job position.
              *
              * @var $hiringOrganization Thing_Organization
              */
              public $hiringOrganization;

             /**
              * Description of bonus and commission compensation aspects of the job.
              *
              * @var $incentives string
              */
              public $incentives;

             /**
              * The industry associated with the job position.
              *
              * @var $industry string
              */
              public $industry;

             /**
              * A (typically single) geographic location associated with the job position.
              *
              * @var $jobLocation Thing_Place
              */
              public $jobLocation;

             /**
              * Category or categories describing the job. Use BLS O*NET-SOC taxonomy: http://www.onetcenter.org/taxonomy.html. Ideally includes textual label and formal code, with the property repeated for each applicable value.
              *
              * @var $occupationalCategory string
              */
              public $occupationalCategory;

             /**
              * Specific qualifications required for this role.
              *
              * @var $qualifications string
              */
              public $qualifications;

             /**
              * Responsibilities associated with this role.
              *
              * @var $responsibilities string
              */
              public $responsibilities;

             /**
              * The currency (coded using ISO 4217, http://en.wikipedia.org/wiki/ISO_4217 used for the main salary information in this job posting.
              *
              * @var $salaryCurrency string
              */
              public $salaryCurrency;

             /**
              * Skills required to fulfill this role.
              *
              * @var $skills string
              */
              public $skills;

             /**
              * Any special commitments associated with this job posting. Valid entries include VeteranCommit, MilitarySpouseCommit, etc.
              *
              * @var $specialCommitments string
              */
              public $specialCommitments;

             /**
              * The title of the job.
              *
              * @var $title string
              */
              public $title;

             /**
              * The typical working hours for this job (e.g. 1st shift, night shift, 8am-5pm).
              *
              * @var $workHours string
              */
              public $workHours;
}