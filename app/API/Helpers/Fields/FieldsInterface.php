<?php

namespace App\API\Helpers\Fields;

/**
 * Interface FieldsInterface
 *
 * Interface for Fields Classes to get array of fields specific to the implementing class, used mainly by the add and
 * edit traits of a controller.
 *
 * @package App\API\Helpers\Fields
 */
interface FieldsInterface
{
    /**
     * Get Fields
     *
     * Return array of all record fields, no exceptions.
     *
     * @return array
     */
    public static function getFields() :array;

    /**
     * Get Editable Fields
     *
     * Return array of only the fields that are marked editable
     *
     * @return array
     */
    public static function getEditableFields() :array;
}
