### Bootstrap 3 Form Example

```
<form class="form-horizontal" method="post" action="step3_beer_process.php">
  <input type="hidden" name="check" value="1" />
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Beer License Information</h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <p>Explanation Information</p>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <label for="Proximity" class="control-label"><font color="red">*</font>How close to a school or chruch is the premises for which this license is sought?</label>
          <input class="form-control" id="BLDesc" type="text" name="Proximity" maxlength="35" required>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <p><font color="red">*</font><strong>Has any one, given or paid for any of the following:</strong></p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <label for="Compensation" class="control-label"><font color="red">*</font>The cost of this license?</label>
        <select class="form-control" id="Compensation" name="CompensationLicense" required>
          <option value="N">No</option>
          <option value="Y">Yes</option>
        </select>
        </div>
      </div>
    </div>
    <div class="panel-footer clearfix">
      A red asterisk <font color="red">*</font> indicates a required question.
      <div class='btn-group pull-right'>
        <button type='reset' name='reset' value='reset' class='btn btn-default'>Reset</button>
        <button type='submit' name='submit' value='menu' class='btn btn-primary'>Next Step</button>
      </div>
    </div>
  </div>
</form>
```

- Source
