<?php
namespace App\Traits;
trait SingleRow {
    public static function getData ( $column_name = null ) {
        $record = static::first();
        if ( $column_name ) {
            return $record->$column_name;
        }
        else {
            return $record;
        }
    }

    public static function setData($column_name, $value) {
        $record = static::first();
        if(!$record) {
            $record = new static();
            $record->save();
        }
        $record->$column_name = $value;
        $record->save();
    }
}
