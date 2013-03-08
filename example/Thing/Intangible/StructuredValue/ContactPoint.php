<?php

class Thing_Intangible_StructuredValue_ContactPoint extends Thing_Intangible_StructuredValue{

             /**
              * A person or organization can have different contact points, for different purposes. For example, a sales contact point, a PR contact point and so on. This property is used to specify the kind of contact point.
              *
              * @var $contactType string
              */
              public $contactType;

             /**
              * Email address.
              *
              * @var $email string
              */
              public $email;

             /**
              * The fax number.
              *
              * @var $faxNumber string
              */
              public $faxNumber;

             /**
              * The telephone number.
              *
              * @var $telephone string
              */
              public $telephone;
}