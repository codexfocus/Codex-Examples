### Access other users information in controllers and methods.

Let say we need a users name or id.

#### For AspNetCore.Identity
Set up our reference to UserManager.

```
private readonly UserManager<IdentityUser> _userManager;
public YourController(UserManager<IdentityUser> userManager)
{
    _userManager = userManager;
}
```

Then we can look up the information.
`var user = _userManager.FindByIdAsync(userid);`

Alternatively if we have the tables included in our context we can reference them how we would any other table.

```
private readonly MyContext _context;
public YourController(MyContext context)
{
    _context = context;
}
```

Then again we can look up user information.
`_context.AspNetUsers.FirstOrDefaultAsync(p => p.Id == userid)`

- Source(s)
