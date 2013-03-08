<?php

class Thing_CreativeWork_Recipe extends Thing_CreativeWork{

             /**
              * The method of cooking, such as Frying, Steaming, ...
              *
              * @var $cookingMethod string
              */
              public $cookingMethod;

             /**
              * The time it takes to actually cook the dish, in ISO 8601 duration format.
              *
              * @var $cookTime Thing_Intangible_Quantity_Duration
              */
              public $cookTime;

             /**
              * An ingredient used in the recipe.
              *
              * @var $ingredients string
              */
              public $ingredients;

             /**
              * Nutrition information about the recipe.
              *
              * @var $nutrition Thing_Intangible_StructuredValue_NutritionInformation
              */
              public $nutrition;

             /**
              * The length of time it takes to prepare the recipe, in ISO 8601 duration format.
              *
              * @var $prepTime Thing_Intangible_Quantity_Duration
              */
              public $prepTime;

             /**
              * The category of the recipe—for example, appetizer, entree, etc.
              *
              * @var $recipeCategory string
              */
              public $recipeCategory;

             /**
              * The cuisine of the recipe (for example, French or Ethopian).
              *
              * @var $recipeCuisine string
              */
              public $recipeCuisine;

             /**
              * The steps to make the dish.
              *
              * @var $recipeInstructions string
              */
              public $recipeInstructions;

             /**
              * The quantity produced by the recipe (for example, number of people served, number of servings, etc).
              *
              * @var $recipeYield string
              */
              public $recipeYield;

             /**
              * The total time it takes to prepare and cook the recipe, in ISO 8601 duration format.
              *
              * @var $totalTime Thing_Intangible_Quantity_Duration
              */
              public $totalTime;
}