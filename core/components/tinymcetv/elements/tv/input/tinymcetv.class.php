<?php
/**
 * @package modx
 * @subpackage processors.element.tv.renders.mgr.input
 */
class modTemplateVarInputRenderTinyMce extends modTemplateVarInputRender {
    public function process($value,array $params = array()) {
        $which_editor = $this->modx->getOption('which_editor',null,'');
        $this->setPlaceholder('which_editor',$which_editor);
    }
    public function getTemplate() {
        $path = 'components/tinymcetv/';
        $corePath = $this->modx->getOption('tinymcetv.core_path', null, $this->modx->getOption('core_path') . $path);
        return $corePath . 'elements/tv/tinymcetv.tpl';  
    }
}
return 'modTemplateVarInputRenderTinyMce';