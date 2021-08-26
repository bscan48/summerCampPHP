<?php
// prevents this code from being loaded directly in the browser
// or without first setting the necessary object



if(!isset($classes)) {
  redirect_to(url_for('/classes/index.php'));
}
?>

<div class="row">
  <div class="col">
    <dl>
      <dt>ClassID</dt>
      <dd><input type="text" name="classes[ClassId]" value="<?php echo h($classes->ClassId); ?>" /></dd>
    </dl>

    <dl>
      <dt>Begins</dt>
      <dd>
      
      <dd><input type="date" name="classes[Begins]" value="<?php echo FormatDt($classes->Begins); ?>" /></dd>
      </dd>
    </dl>

    <dl>
      <dt>Ends</dt>
      <dd>
      <dd><input type="date" name="classes[Ends]" value="<?php echo FormatDt($classes->Ends); ?>" /></dd>
      </dd>
    </dl>

    <dl>
      <dt>Start Time</dt>
      <dd>
      <dd><input type="text" name="classes[StartTime]" value="<?php echo h($classes->StartTime); ?>" /></dd>
      </dd>
    </dl>

    <dl>
      <dt>End Time</dt>
      <dd>
      <dd><input type="text" name="classes[EndTime]" value="<?php echo h($classes->EndTime); ?>" /></dd>
      </dd>
    </dl>

    <dl>
      <dt>Capacity</dt>
      <dd>
      <dd><input type="text" name="classes[Capacity]" value="<?php echo h($classes->Capacity); ?>" /></dd>
      </dd>
    </dl>

    <dl>
      <dt>Minimum Class Size</dt>
      <dd>
      <dd><input type="text" name="classes[MinimumClassSize]" value="<?php echo h($classes->MinimumClassSize); ?>" /></dd>
      </dd>
    </dl>

    <dl>
      <dt>Tuition 1</dt>
      <dd>
      <dd><input type="text" name="classes[Tuition1]" value="<?php echo h($classes->Tuition1); ?>" /></dd>
      </dd>
    </dl>

    <dl>
      <dt>Tuition 2</dt>
      <dd>
      <dd><input type="text" name="classes[Tuition2]" value="<?php echo h($classes->Tuition2); ?>" /></dd>
      </dd>
    </dl>

    <dl>
      <dt>Tuition 3</dt>
      <dd>
      <dd><input type="text" name="classes[Tuition3]" value="<?php echo h($classes->Tuition3); ?>" /></dd>
      </dd>
    </dl>
  </div>
  <div class="col">
    <dl>
      <dt>Class Name</dt>
      <dd><input type="text" name="classes[ClassName]" value="<?php echo h($classes->ClassName); ?>" /></dd>
    </dl>

    <dl>
      <dt>Description</dt>
      <dd>
      <dd><input type="text" name="classes[ClassDescription]" value="<?php echo h($classes->ClassDescription); ?>" /></dd>
      </dd>
    </dl>

    <dl>
      <dt>Total Enrollment</dt>
      <dd>
      <dd> 0 </dd>
      <!-- <dd><input type="text" name="Tuition3" value="<?php //echo h($classes->Tuition3); ?>" /></dd> -->
      </dd>
    </dl>

    <dl>
    <dt>Type of Class</dt>
    <dd> 
      <dd>
      <select name="classes[TypeOfClass]">
        <option value=""></option>
      <?php foreach(CampClass::CLASS_TYPES as $TypeOfClass) { ?>
        <option value="<?php echo $TypeOfClass; ?>" <?php if($classes->TypeOfClass == $TypeOfClass) { echo 'selected'; } ?>><?php echo $TypeOfClass; ?></option>
      <?php } ?>
      </select>
      </dd>
    </dd>
  </dl>

    <dl>
      <dt>Instructor</dt>
      <dd>
      <dd><input type="text" name="classes[Instructor]" value="<?php echo h($classes->Instructor); ?>" /></dd>
      </dd>
    </dl>

    <dl>
      <dt>Print Tickets</dt>
      <dd>
        <input type="hidden" name="visible" value="0" />
        <input type="checkbox" name="classes[PrintTickets]" value="1"<?php if($classes->PrintTickets == 1) { echo " checked"; } ?> />
      </dd>
    </dl>

    <div class="ckcol">
      <div class="ckrow">
          <label>Week 1</label>

          <span class="ckwidth">
          <label>Mon</label>
          <input type="hidden" name="visible" value="0" />
          <input class="ckfloat" type="checkbox" name="classes[DaysMonWeek1]" value="1" <?php if($classes->DaysMonWeek1 == 1) {echo " checked"; } ?> />
          </span>

          <span class="ckwidth">
          <label>Tue</label>
          <input type="hidden" name="visible" value="0" />
          <input class="ckfloat" type="checkbox" name="classes[DaysTueWeek1]" value="1" <?php if($classes->DaysTueWeek1 == 1) {echo " checked"; } ?> />
          </span>

          <span class="ckwidth">
          <label>Wed</label>
          <input type="hidden" name="visible" value="0" />
          <input class="ckfloat" type="checkbox" name="classes[DaysWedWeek1]" value="1" <?php if($classes->DaysWedWeek1 == 1) {echo " checked"; } ?> />
          </span>

          <span class="ckwidth">
          <label>Thr</label>
          <input type="hidden" name="visible" value="0" />
          <input class="ckfloat" type="checkbox" name="classes[DaysThrWeek1]" value="1" <?php if($classes->DaysThrWeek1 == 1) {echo " checked"; } ?> />
          </span>

          <span class="ckwidth">
          <label>Fri</label>
          <input type="hidden" name="visible" value="0" />
          <input class="ckfloat" type="checkbox" name="classes[DaysFriWeek1]" value="1" <?php if($classes->DaysFriWeek1 == 1) {echo " checked"; } ?> />
          </span>

          <span class="ckwidth">
          <label>Sat</label>
          <input type="hidden" name="visible" value="0" />
          <input class="ckfloat" type="checkbox" name="classes[DaysSatWeek1]" value="1" <?php if($classes->DaysSatWeek1 == 1) {echo " checked"; } ?> />
          </span>

          <span class="ckwidth">
          <label>Sun</label>
          <input type="hidden" name="visible" value="0" />
          <input class="ckfloat" type="checkbox" name="classes[DaysSunWeek1]" value="1" <?php if($classes->DaysSunWeek1 == 1) {echo " checked"; } ?> />
          </span>
      </div>

      <div class="ckrow">
          <label>Week 2</label>

          <span class="ckwidth">
          <label>&nbsp</label>
          <input type="hidden" name="visible" value="0" />
          <input class="ckfloat" type="checkbox" name="classes[DaysMonWeek2]" value="1" <?php if($classes->DaysMonWeek2 == 1) {echo " checked"; } ?> />
          </span>

          <span class="ckwidth">
          <label>&nbsp</label>
          <input type="hidden" name="visible" value="0" />
          <input class="ckfloat" type="checkbox" name="classes[DaysTueWeek2]" value="1" <?php if($classes->DaysTueWeek2 == 1) {echo " checked"; } ?> />
          </span>

          <span class="ckwidth">
          <label>&nbsp</label>
          <input type="hidden" name="visible" value="0" />
          <input class="ckfloat" type="checkbox" name="classes[DaysWedWeek2]" value="1" <?php if($classes->DaysWedWeek2 == 1) {echo " checked"; } ?> />
          </span>

          <span class="ckwidth">
          <label>&nbsp</label>
          <input type="hidden" name="visible" value="0" />
          <input class="ckfloat" type="checkbox" name="classes[DaysThrWeek2]" value="1" <?php if($classes->DaysThrWeek2 == 1) {echo " checked"; } ?> />
          </span>

          <span class="ckwidth">
          <label>&nbsp</label>
          <input type="hidden" name="visible" value="0" />
          <input class="ckfloat" type="checkbox" name="classes[DaysFriWeek2]" value="1" <?php if($classes->DaysFriWeek2 == 1) {echo " checked"; } ?> />
          </span>

          <span class="ckwidth">
          <label>&nbsp</label>
          <input type="hidden" name="visible" value="0" />
          <input class="ckfloat" type="checkbox" name="classes[DaysSatWeek2]" value="1" <?php if($classes->DaysSatWeek2 == 1) {echo " checked"; } ?> />
          </span>

          <span class="ckwidth">
          <label>&nbsp</label>
          <input type="hidden" name="visible" value="0" />
          <input class="ckfloat" type="checkbox" name="classes[DaysSunWeek2]" value="1" <?php if($classes->DaysThrWeek2 == 1) {echo " checked"; } ?> />
          </span>
      </div>
    </div>
  </div>
</div>


