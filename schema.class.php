<?

class builder
{

    public $data = '';

    public $schema;

    private $declaredProps = array();

    function addToFile($data)
    {
        $this->data .= $data;
    }

    function startClass($name, $extends = null)
    {
        $data = "<?php

class $name";

        if ($extends) {
            $data .= " extends $extends";
        }

        $this->addToFile($data . '{
');
    }

    function endClass()
    {
        $this->addToFile('}');
    }

    function addClassProp($name, $ancestors)
    {


        foreach ($ancestors as $class) {


            if (in_array($name, $this->schema->types->{$class}->properties)) {
                return true;
            }
        }

        //var_dump($this->schema->properties->{$name});
        $dataType = '';
        $count = 0;
        foreach ($this->schema->properties->{$name}->ranges as $range) {

            if ($count > 0) {
                $dataType .= '|';
            }

            if ($range == 'Text' || $range == 'URL') {
                $range = 'string';
            }

            if (isset($this->schema->types->{$range})) {
                $tmp = '';
                foreach ($this->schema->types->{$range}->ancestors as $parent) {
                    $tmp .= $parent . '_';
                }
                $range = $tmp . $range;
            }

            $dataType .= $range;
            $count++;

        }

        $comment = $this->schema->properties->{$name}->comment_plain;

        $data =
            "
             /**
              * $comment
              *
              * @var $$name $dataType
              */
              public $$name;
";
        $this->addToFile($data);
//die(var_dump($this->schema->properties->{$name}));
    }

    function clearBuffer()
    {
        $this->data = '';
    }


    function fetchSchema()
    {
        $this->schema = json_decode(file_get_contents('http://schema.rdfs.org/all.json'));
    }


}