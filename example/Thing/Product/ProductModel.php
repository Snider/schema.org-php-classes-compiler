<?php

class Thing_Product_ProductModel extends Thing_Product{

             /**
              * A pointer to a base product from which this product is a variant. It is safe to infer that the variant inherits all product features from the base model, unless defined locally. This is not transitive.
              *
              * @var $isVariantOf Thing_Product_ProductModel
              */
              public $isVariantOf;

             /**
              * A pointer from a previous, often discontinued variant of the product to its newer variant.
              *
              * @var $predecessorOf Thing_Product_ProductModel
              */
              public $predecessorOf;

             /**
              * A pointer from a newer variant of a product  to its previous, often discontinued predecessor.
              *
              * @var $successorOf Thing_Product_ProductModel
              */
              public $successorOf;
}