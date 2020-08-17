### Input Helpers Examples

Input

```
<div class="form-group">
    <div class="col-md-6">
        <label asp-for="ModelName.FieldName" class="control-label"></label>
        <input asp-for="ModelName.FieldName" class="form-control" />
        <span asp-validation-for="ModelName.FieldName" class="text-danger"></span>
    </div>
</div>
```

Select with populated dropdown from viewmodel

```
<div class="form-group">
  <div class="col-md-6">
      <label asp-for="ModelName.FieldName" class="control-label"></label>
      <select asp-for="ModelName.FieldName" asp-items="ModelName.DropdownName" class="form-control"></select>
      <span asp-validation-for="ModelName.FieldName" class="text-danger"></span>
  </div>
</div>
```

Radial check

```
  <div class="form-group">
      <label asp-for="ModelName.FieldName" class="col-sm-2"></label>
      <div class="col-sm-10">
          <input asp-for="ModelName.FieldName" /> Description Text
          <span asp-validation-for="ModelName.FieldName" class="text-danger"></span>
      </div>
  </div>
</div>
```

- Source(s)
