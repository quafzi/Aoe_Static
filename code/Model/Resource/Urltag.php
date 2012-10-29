<?php
/**
 * URL-to-Tag model
 */
class Aoe_Static_Model_Resource_Urltag extends Aoe_Static_Model_Resource_Abstract
{
    protected function _construct()
    {
        $this->_init('aoestatic/urltag', 'urltag_id');
    }

    /**
     * Initialize array fields
     *
     * @return Aoe_Static_Model_Resource_Urltag
     */
    protected function _initUniqueFields()
    {
        $this->_uniqueFields = array(
            array(
                'field' => array('url_id','tag_id'),
                'title' => Mage::helper('core')->__('Url-Tag-Relation')
            )
        );
        return $this;
    }
}
