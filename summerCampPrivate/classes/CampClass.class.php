<?php

class CampClass extends DatabaseObject {

  static protected $table_name = 'camp_classes';
  static protected $db_columns = ['id', 'ClassId','ClassName','ClassDescription','Begins','Ends','DaysMonWeek1','DaysTueWeek1',
    'DaysWedWeek1','DaysThrWeek1','DaysFriWeek1','DaysSatWeek1','DaysSunWeek1','DaysMonWeek2','DaysTueWeek2','DaysWedWeek2',
    'DaysThrWeek2','DaysFriWeek2','DaysSatWeek2','DaysSunWeek2','EnrollmentMonWeek1','EnrollmentTueWeek1','EnrollmentWedWeek1',
    'EnrollmentFriWeek1','EnrollmentSatWeek1','EnrollmentSunWeek1','EnrollmentMonWeek2','EnrollmentTueWeek2','EnrollmentWedWeek2',
    'EnrollmentThrWeek2','EnrollmentFriWeek2','EnrollmentSatWeek2','EnrollmentSunWeek2','StartTime','EndTime','Tuition1',
    'Tuition2','Tuition3','Capacity','MinimumClassSize','Instructor','PrintTickets','Enrollment','TimeStamp','TypeOfClass'
];

  public $id;
  public $ClassId;
  public $ClassName;
  public $ClassDescription;
  public $Begine;
  public $Ends;

  public $DaysMonWeek1;
  public $DaysTueWeek1;
  public $DaysWedWeek1;
  public $DaysThrWeek1;
  public $DaysFriWeek1;
  public $DaysSatWeek1; 
  public $DaysSunWeek1;
  public $DaysMonWeek2;
  public $DaysTueWeek2;
  public $DaysWedWeek2;
  public $DaysThrWeek2;
  public $DaysFriWeek2;
  public $DaysSatWeek2;
  public $DaysSunWeek2;
  public $EnrollmentMonWeek1;
  public $EnrollmentTueWeek1;
  public $EnrollmentWedWeek1;
  public $EnrollmentFriWeek1;
  public $EnrollmentSatWeek1;
  public $EnrollmentSunWeek1;
  public $EnrollmentMonWeek2;
  public $EnrollmentTueWeek2;
  public $EnrollmentWedWeek2;
  public $EnrollmentThrWeek2;
  public $EnrollmentFriWeek2;
  public $EnrollmentSatWeek2;
  public $EnrollmentSunWeek2;
  public $StartTime;
  public $EndTime;
  public $Tuition1;
  public $Tuition2;
  public $Tuition3;
  public $Capacity;
  public $MinimumClassSize;
  public $Instructor;
  public $PrintTickets;
  public $Enrollment;
  public $TimeStamp;
  public $TypeOfClass;

  public const CLASS_TYPES = ['Camp', 'Swim', 'Class', 'Trip'];

  public function __construct($args=[]) {
    //$this->brand = isset($args['brand']) ? $args['brand'] : '';

    //$this->id = $args['id'] ?? '';
    //echo  '$this->id='  .  $this->id  . '<br>';
    $this->ClassId = $args['ClassId'] ?? '';
    //echo  '$this->ClassID='  .  $this->ClassID  . '<br>';
    $this->ClassName = $args['ClassName'] ?? '';
    //echo  '$this->ClassName='  .  $this->ClassName  . '<br>';
    $this->ClassDescription = $args['ClassDescription'] ?? '';
    //echo  '$this->ClassDescription='  .  $this->ClassDescription  . '<br>';
    
    $this->Begins = $args['Begins'] ?? '';
    $this->Ends = $args['Ends'] ?? '';

    $this->DaysMonWeek1 = $args['DaysMonWeek1'] ?? 0;
    $this->DaysTueWeek1 = $args['DaysTueWeek1'] ?? 0;
    $this->DaysWedWeek1 = $args['DaysWedWeek1'] ?? 0;
    $this->DaysThrWeek1 = $args['DaysThrWeek1'] ?? 0;
    $this->DaysFriWeek1 = $args['DaysFriWeek1'] ?? 0;
    $this->DaysSatWeek1 = $args['DaysSatWeek1'] ?? 0;
    $this->DaysSunWeek1 = $args['DaysSunWeek1'] ?? 0;

    $this->DaysMonWeek2 = $args['DaysMonWeek2'] ?? 0;
    $this->DaysTueWeek2 = $args['DaysTueWeek2'] ?? 0;
    $this->DaysWedWeek2 = $args['DaysWedWeek2'] ?? 0;
    $this->DaysThrWeek2 = $args['DaysThrWeek2'] ?? 0;
    $this->DaysFriWeek2 = $args['DaysFriWeek2'] ?? 0;
    $this->DaysSatWeek2 = $args['DaysSatWeek2'] ?? 0;
    $this->DaysSunWeek2 = $args['DaysSunWeek2'] ?? 0;

    $this->EnrollmentMonWeek1 = $args['EnrollmentMonWeek1'] ?? 0;
    $this->EnrollmentTueWeek1 = $args['EnrollmentTueWeek1'] ?? 0;
    $this->EnrollmentWedWeek1 = $args['EnrollmentWedWeek1'] ?? 0;
    $this->EnrollmentThrWeek1 = $args['EnrollmentThrWeek1'] ?? 0;
    $this->EnrollmentFriWeek1 = $args['EnrollmentFriWeek1'] ?? 0;
    $this->EnrollmentSatWeek1 = $args['EnrollmentSatWeek1'] ?? 0;
    $this->EnrollmentSunWeek1 = $args['EnrollmentSunWeek1'] ?? 0;

    $this->EnrollmentMonWeek2 = $args['EnrollmentMonWeek2'] ?? 0;
    $this->EnrollmentTueWeek2 = $args['EnrollmentTueWeek2'] ?? 0;
    $this->EnrollmentWedWeek2 = $args['EnrollmentWedWeek2'] ?? 0;
    $this->EnrollmentThrWeek2 = $args['EnrollmentThrWeek2'] ?? 0;
    $this->EnrollmentFriWeek2 = $args['EnrollmentFriWeek2'] ?? 0;
    $this->EnrollmentSatWeek2 = $args['EnrollmentSatWeek2'] ?? 0;
    $this->EnrollmentSunWeek2 = $args['EnrollmentSunWeek2'] ?? 0;

    $this->StartTime = $args['Begins'] ?? '';
    $this->EndTime = $args['Ends'] ?? '';

    $this->Tuition1 = $args['Tuition1'] ?? 0;
    $this->Tuition2 = $args['Tuition2'] ?? 0;
    $this->Tuition3 = $args['Tuition3'] ?? 0;

    $this->Capacity = $args['Capacity'] ?? 0;
    $this->MinimumClassSize = $args['MinimumClassSize'] ?? 0;

    $this->Instructor = $args['Instructor'] ?? '';

    $this->PrintTickets = $args['PrintTickets'] ?? 0;
    $this->Enrollment = $args['Enrollment'] ?? 0;
    $this->TimeStamp = $args['TimeStamp'] ?? '';
    $this->TypeOfClass = $args['TypeOfClass'] ?? '';
  }

  public function ClassId() {
    return $this->ClassId;
  }
  
  public function ClassName() {
    return $this->ClassName;
  }

  public function ClassDescription($value) {
    return $this->ClassDescription;
  }

  public function Begins() {
    return $this->Begins;
  }

  public function Ends() {
    return $this->Ends;
  }

  public function DayMonWeek1() {
    return $this->DayMonWeek1;
  }

  public function DayTueWeek1() {
    return $this->DayTueWeek1;
  }

  public function DayWedWeek1() {
    return $this->DayWedWeek1;
  }

  public function DayThrWeek1() {
    return $this->DayThrWeek1;
  }

  public function DayFriWeek1() {
    return $this->DayFriWeek1;
  }

  public function DaySatWeek1() {
    return $this->DaySatWeek1;
  }

  public function DaySunWeek1() {
    return $this->DaySunWeek1;
  }

  public function DayMonWeek2() {
    return $this->DayMonWeek2;
  }

  public function DayTueWeek2() {
    return $this->DayTueWeek2;
  }

  public function DayWedWeek2() {
    return $this->DayWedWeek2;
  }

  public function DayThrWeek2() {
    return $this->DayThrWeek2;
  }

  public function DayFriWeek2() {
    return $this->DayFriWeek2;
  }

  public function DaySatWeek2() {
    return $this->DaySatWeek2;
  }

  public function DaySunWeek2() {
    return $this->DaySunWeek2;
  }

  public function EnrollmentMonWeek1() {
    return $this->EnrollmentMonWeek1;
  }

  public function EnrollmentTueWeek1() {
    return $this->EnrollmentTueWeek1;
  }

  public function EnrollmentWedWeek1() {
    return $this->EnrollmentWedWeek1;
  }

  public function EnrollmentThrWeek1() {
    return $this->EnrollmentThrWeek1;
  }

  public function EnrollmentFriWeek1() {
    return $this->EnrollmentFriWeek1;
  }

  public function EnrollmentSatWeek1() {
    return $this->EnrollmentSatWeek1;
  }

  public function EnrollmentSunWeek1() {
    return $this->EnrollmentSunWeek1;
  }

  public function EnrollmentMonWeek2() {
    return $this->EnrollmentMonWeek2;
  }

  public function EnrollmentTueWeek2() {
    return $this->EnrollmentTueWeek2;
  }

  public function EnrollmentWedWeek2() {
    return $this->EnrollmentWedWeek2;
  }

  public function EnrollmentThrWeek2() {
    return $this->EnrollmentThrWeek2;
  }

  public function EnrollmentFriWeek2() {
    return $this->EnrollmentFriWeek2;
  }

  public function EnrollmentSatWeek2() {
    return $this->EnrollmentSatWeek2;
  }

  public function EnrollmentSunWeek2() {
    return $this->EnrollmentSunWeek2;
  }

  public function StartTime() {
    return $this->StartTime;
  }

  public function EndTime() {
    return $this->EndTime;
  }

  public function Tuition1() {
    return $this->Tuition1;
  }

  public function Tuition2() {
    return $this->Tuition2;
  }

  public function Tuition3() {
    return $this->Tuition3;
  }

  public function Capacity() {
    return $this->Capacity;
  }

  public function MinimumClassSize() {
    return $this->MinimumClassSize;
  }

  public function Instructor() {
    return $this->Instructor;
  }

  public function PrintTickets() {
    return $this->PrintTickets;
  }

  public function TimeStamp() {
    return $this->TimeStamp;
  }

  public function TypeOfClass() {
    return $this->TypeOfClass;
  }

   protected function validate() {
  //   $this->errors = [];

  //   if(is_blank($this->brand)) {
  //     $this->errors[] = "Brand cannot be blank.";
  //   }
  //   if(is_blank($this->model)) {
  //     $this->errors[] = "Model cannot be blank.";
  //   }
  //   return $this->errors;
   }


}

