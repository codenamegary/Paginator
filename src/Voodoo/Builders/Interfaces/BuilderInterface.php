<?php namespace Voodoo\Builders\Interfaces;

interface BuilderInterface {

    public function getPaginator();
    public function setPaginator($paginator);
    public function getName();
    protected function setName($name);
    public function getOption($name, $default);
    public function setOption($name, $value);
    public function getOptions();
    public function setOptions($optionsArray);

}
