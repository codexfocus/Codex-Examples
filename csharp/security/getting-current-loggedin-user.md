### Getting the Current Logged in Users Information

#### For Active Directory
Add references for `IHttpContextAccessor` in your controller or repository.

```
using Microsoft.AspNetCore.Http;
using System.Security.Claims;

private readonly IHttpContextAccessor _httpContextAccessor;

public YourController(IHttpContextAccessor httpContextAccessor)
{
    _httpContextAccessor = httpContextAccessor;
}
```

Accessing Claims information in actions and methods
`var username = _httpContextAccessor.HttpContext.User.FindFirst(ClaimTypes.Name).Value;`

#### For AspNetCore.Identity
For Identity I didn't remember the reference, its using Claims Principal ControllerBase. So it only works in controllers.

```
using System.Security.Claims;
`string userid = User.FindFirst(ClaimTypes.NameIdentifier).Value;`
`string username = User.FindFirst(ClaimTypes.Name).Value;`
```

- Source(s)
  - [stackoverflow](https://stackoverflow.com/questions/36641338/how-to-get-current-user-in-asp-net-core)
  - [2](link2)
