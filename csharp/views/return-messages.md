### Return Messages

TempData
In the Controller add the message and the return.

```
TempData["Message"] = "Your form has been updated.";
return RedirectToAction("UpdateForm");
```

Then in the view add an if statement to output the message, wrapped in a bootstrap alert:
```
@if (TempData["Message"] != null)
{
    <div class="alert alert-warning alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        @TempData["Message"]
    </div>
}
```


- Source(s)
  - [none](#)
