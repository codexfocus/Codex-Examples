### On/Off Toggle Switch

Create a bool static definition in ones static class.
```
public class Statics
{
      public static bool LoginLocked = false;
}
```

Display the definitions pass it into a view model and display on the view.
```
public async Task<IActionResult> LockoutDisplay()
{
      var lockoutDisplayViewModel = new LockoutDisplayViewModel()
      {
          LoginLockout = StaticControls.LoginLocked,
      };
      return View(lockoutDisplayViewModel);
}
```

In the view one displays the current bool status. A couple buttons to toggle the switch.
```
<div class="row">
    <div class="col-md-6">
        @if (Model.LoginLockout)
        {
            <p><strong>Current Status:</strong> Locked</p>
        }
        else
        {
            <p><strong>Current Status:</strong> Open</p>
        }
    </div>
    <div class="col-md-3">
        <form asp-action="OpenLogin" method="post" class="form-horizontal" role="form">
            <button class="btn btn-success btn-block btn-sm" type="submit" data-confirm='Confirm you are about to open the login?'>
                Open Login
            </button>
        </form>
    </div>
    <div class="col-md-3">
        <form asp-action="LockoutLogin" method="post" class="form-horizontal" role="form">
            <button class="btn btn-danger btn-block btn-sm" type="submit" data-confirm='Confirm you are about to lock the login?'>
                Lock Login
            </button>
        </form>
    </div>
</div>
```

Then one uses a couple of actions to flip the static back and forth.
```
[HttpPost]
public IActionResult OpenLogin()
{
    StaticControls.LoginLocked = false;
    return RedirectToAction("LockoutDisplay");
}

[HttpPost]
public IActionResult LockoutLogin()
{
    StaticControls.LoginLocked = true;
    return RedirectToAction("LockoutDisplay");
}
```

Note, one may want to secure the controllers with authorize tags, or add a role to access the toggle controllers.
- Source(s)
