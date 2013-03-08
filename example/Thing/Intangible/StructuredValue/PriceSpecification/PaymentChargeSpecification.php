<?php

class Thing_Intangible_StructuredValue_PriceSpecification_PaymentChargeSpecification extends Thing_Intangible_StructuredValue_PriceSpecification{

             /**
              * The delivery method(s) to which the delivery charge or payment charge specification applies.
              *
              * @var $appliesToDeliveryMethod Thing_Intangible_Enumeration_DeliveryMethod
              */
              public $appliesToDeliveryMethod;

             /**
              * The payment method(s) to which the payment charge specification applies.
              *
              * @var $appliesToPaymentMethod Thing_Intangible_Enumeration_PaymentMethod
              */
              public $appliesToPaymentMethod;
}