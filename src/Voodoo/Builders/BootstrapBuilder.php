<?php namespace Voodoo\Builders;

class BootstrapBuilder extends BaseBuilder implements Interfaces\HtmlBuilderInterface, Interfaces\JsonBuilderInterface {
    
    protected $name = 'bootstrap';
    
    public function toHtml()
    {
        $paginationClsName = $this->getOption('paginationClsName','pagination');
        $wrapTag = $this->getOption('wrapTag','ul');
        $listTag = $this->getOption('listTag','li');
        $list = "";
        foreach ($this->paginator->toArray() as $page) {
            $href = "<a href=\"{$page["url"]}\">{$page["label"]}</a>";
            $tagClass = ($page["is_current"]) ? " class=\"active\" " : "";
            $list .= "<{$listTag}{$tagClass}>{$href}</{$listTag}>".PHP_EOL; 
        }
        return 
            "<div class=\"{$paginationClsName}\">
                <{$wrapTag}>{$list}</{$wrapTag}>
            </div>";  
    }
    
    public function toJson()
    {
        $pagination = array();
        foreach ($this->paginator->toArray() as $page) {
            $pagination[] = array(
                'link'      => $page['url'],
                'active'    => $page['is_current'],
            );
        }
        return json_encode($pagination);
    }
    
}
