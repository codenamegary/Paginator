<?php namespace Voodoo\Builders;

class BaseBuilder implements Interfaces\BuilderInterface {
    
    protected $paginator;
    protected $name;
    protected $options = array();
    
    public function getPaginator()
    {
        return $this->paginator;
    }
    
    public function setPaginator($paginator)
    {
        return $this->paginator = $paginator;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    protected function setName($name)
    {
        return $this->name = $name;
    }
    
    public function getOption($name, $default = false)
    {
        return isset($this->options[$name]) ? $this->options[$name] : $default;
    }

    public function setOption($name, $value)
    {
        return $this->options[$name] = $value;
    }
    
    public function getOptions()
    {
        return $this->options;
    }

    public function setOptions($optionsArray = array())
    {
        $this->options = $optionsArray;
    }
    
}
