<?php

/**
 * BaseSalaryGrade
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $sal_grd_code
 * @property string $sal_grd_name
 * @property Doctrine_Collection $JobTitle
 * @property Doctrine_Collection $SalaryCurrencyDetail
 * @property Doctrine_Collection $EmpUsTaxExemption
 * 
 * @method string              getSalGrdCode()           Returns the current record's "sal_grd_code" value
 * @method string              getSalGrdName()           Returns the current record's "sal_grd_name" value
 * @method Doctrine_Collection getJobTitle()             Returns the current record's "JobTitle" collection
 * @method Doctrine_Collection getSalaryCurrencyDetail() Returns the current record's "SalaryCurrencyDetail" collection
 * @method Doctrine_Collection getEmpUsTaxExemption()    Returns the current record's "EmpUsTaxExemption" collection
 * @method SalaryGrade         setSalGrdCode()           Sets the current record's "sal_grd_code" value
 * @method SalaryGrade         setSalGrdName()           Sets the current record's "sal_grd_name" value
 * @method SalaryGrade         setJobTitle()             Sets the current record's "JobTitle" collection
 * @method SalaryGrade         setSalaryCurrencyDetail() Sets the current record's "SalaryCurrencyDetail" collection
 * @method SalaryGrade         setEmpUsTaxExemption()    Sets the current record's "EmpUsTaxExemption" collection
 * 
 * @package    orangehrm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSalaryGrade extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_pr_salary_grade');
        $this->hasColumn('sal_grd_code', 'string', 13, array(
             'type' => 'string',
             'primary' => true,
             'length' => 13,
             ));
        $this->hasColumn('sal_grd_name', 'string', 60, array(
             'type' => 'string',
             'length' => 60,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('JobTitle', array(
             'local' => 'sal_grd_code',
             'foreign' => 'sal_grd_code'));

        $this->hasMany('SalaryCurrencyDetail', array(
             'local' => 'sal_grd_code',
             'foreign' => 'sal_grd_code'));

        $this->hasMany('EmpUsTaxExemption', array(
             'local' => 'sal_grd_code',
             'foreign' => 'sal_grd_code'));
    }
}