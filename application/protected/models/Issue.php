<?php

class Issue extends CActiveRecord {
    public static function model($className=__CLASS__) {
        return parent::model($className);
    }
 
    public function tableName() {
        return 'issue';
    }

    public function relations() {
        return array(
            'status'=>array(self::BELONGS_TO, 'Status', 'status_id'),
        );
    }

    public function rules() {
	    return array(
	        array('title', 'required'),
	        array('title', 'length', 'min' => 3, 'max' => 55),
            array('status_id', 'numerical'),
	        array('description', 'safe')
	    );
	}
}