### Creating a Select List from database using a view model

Set up your view model

```
public class YourViewModel
{
    public IEnumerable<SelectListItem> ProjectTypesDropdown { get; set; }
}
```

In the controller pull the data and populate the view model that was defined.

```
public IActionResult New()
{
    var projectTypeList = _context.ProjectTypes.ToList();
    var yourViewModel = new YourViewModel();
    {
        yourViewModel.ProjectTypesDropdown = new SelectList(projectTypeList, "ProjectTypeID", "ProjectTypeName");
    }
    return View(yourViewModel);
}
```

On the page make sure to reference your view model

```
@model YourViewModel
<div class="form-group">
    <label asp-for="project.ProjectTypeID" class="col-md-2 control-label"></label>
    <div class="col-md-5">
        <select asp-for="project.ProjectTypeID" asp-items="Model.ProjectTypesDropdown" class="form-control"></select>
        <span asp-validation-for="project.ProjectTypeID" class="text-danger"></span>
    </div>
</div>
```

- Source(s)
  - [Stackoverflow](https://stackoverflow.com/questions/54223899/asp-net-core-mvc-selectlist-from-a-collection-of-objects)
