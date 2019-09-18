<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2019
 *
 * Generated from xml/schema/CRM/Contact/GroupNesting.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:2559ff6c3da8f02b147577a6d4e26004)
 */

/**
 * Database access object for the GroupNesting entity.
 */
class CRM_Contact_DAO_GroupNesting extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_group_nesting';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Relationship ID
   *
   * @var int
   */
  public $id;

  /**
   * ID of the child group
   *
   * @var int
   */
  public $child_group_id;

  /**
   * ID of the parent group
   *
   * @var int
   */
  public $parent_group_id;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_group_nesting';
    parent::__construct();
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'child_group_id', 'civicrm_group', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'parent_group_id', 'civicrm_group', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Group Nesting ID'),
          'description' => ts('Relationship ID'),
          'required' => TRUE,
          'where' => 'civicrm_group_nesting.id',
          'table_name' => 'civicrm_group_nesting',
          'entity' => 'GroupNesting',
          'bao' => 'CRM_Contact_BAO_GroupNesting',
          'localizable' => 0,
        ],
        'child_group_id' => [
          'name' => 'child_group_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Child Group'),
          'description' => ts('ID of the child group'),
          'required' => TRUE,
          'where' => 'civicrm_group_nesting.child_group_id',
          'table_name' => 'civicrm_group_nesting',
          'entity' => 'GroupNesting',
          'bao' => 'CRM_Contact_BAO_GroupNesting',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Group',
        ],
        'parent_group_id' => [
          'name' => 'parent_group_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Parent Group'),
          'description' => ts('ID of the parent group'),
          'required' => TRUE,
          'where' => 'civicrm_group_nesting.parent_group_id',
          'table_name' => 'civicrm_group_nesting',
          'entity' => 'GroupNesting',
          'bao' => 'CRM_Contact_BAO_GroupNesting',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Group',
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'group_nesting', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'group_nesting', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
