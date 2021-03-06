<?php
class LimeSoda_SampleDataGenerator_Block_Adminhtml_Rule_Edit_Tab_Products extends Mage_Adminhtml_Block_Widget_Form implements Mage_Adminhtml_Block_Widget_Tab_Interface
{
    protected function _prepareForm()
    {
        $helper = Mage::helper('ls_sampledatagenerator');
        $model  = Mage::registry('ls_sampledatagenerator_rule');
        $form   = new Varien_Data_Form();
        
        /* General */  
        $generalSet = $form->addFieldset('products_general',
           array('legend' => $helper->__('Products'))
        );
        
        $generalSet->addField('product_min_count', 'text', array(
            'name'      => 'product_min_count',
            'label'     => $helper->__('Minimum count'),
            'title'     => $helper->__('Minimum count'),
        ));
        
        $generalSet->addField('product_max_count', 'text', array(
            'name'      => 'product_max_count',
            'label'     => $helper->__('Maximum count'),
            'title'     => $helper->__('Maximum count'),
        ));
        
        /* Category Assignments */
        $categoryAssignmentSet = $form->addFieldset('products_categoryassignment',
           array('legend' => $helper->__('Category Assignments'))
        );
        
        $categoryAssignmentSet->addField('product_min_category_assignments_count', 'text', array(
            'name'      => 'product_min_category_assignments_count',
            'label'     => $helper->__('Assign to at least x categories'),
            'title'     => $helper->__('Assign to at least x categories'),
        ));
        
        $categoryAssignmentSet->addField('product_max_category_assignments_count', 'text', array(
            'name'      => 'product_max_category_assignments_count',
            'label'     => $helper->__('Assign to at most x categories'),
            'title'     => $helper->__('Assign to at most x categories'),
        ));

        $form->setValues($model->getData());
        $this->setForm($form);
        
        return parent::_prepareForm();
    }

    /**
     * Returns status flag about this tab can be shown or not
     *
     * @return true
     */
    public function canShowTab()
    {
        return true;
    }
    
    /**
     * Prepare label for tab
     *
     * @return string
     */
    public function getTabLabel()
    {
        return Mage::helper('ls_sampledatagenerator')->__('Products');
    }

    /**
     * Prepare title for tab
     *
     * @return string
     */
    public function getTabTitle()
    {
        return Mage::helper('ls_sampledatagenerator')->__('Products');
    }

    /**
     * Returns status flag about this tab hidden or not
     *
     * @return true
     */
    public function isHidden()
    {
        return false;
    }
}