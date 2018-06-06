<?php
namespace Home\Model;
use Think\Model\RelationModel;
class KhRelationModel extends RelationModel{
    protected $tableName = 'ht';
    protected $_link = array(
        'ht' => array(
            'mapping_type'  => self::HAS_MANY,
            'class_name'    => 'ht',
            'foreign_key'   => 'k_id',
            'mapping_name'  => 'hts',
            'mapping_order' => 'h_h desc',
        ),
        );
}