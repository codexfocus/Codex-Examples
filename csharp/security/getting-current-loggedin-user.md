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

Active Directory SID

`ClaimTypes.PrimarySid`

##### Review all user claim
In a test environment in a view you can output the following.

```
<table class="table">
    <tr>
        <th>Claim Type</th>
        <th>Claim Value</th>
    </tr>
    @{
        foreach (var claim in User.Claims)
        {
            <tr>
                <td>@claim.Type </td>
                <td>@claim.Value</td>
            </tr>
        }
    }
</table>
```

#### For AspNetCore.Identity
For Identity I didn't remember the reference, its using Claims Principal ControllerBase. So it only works in controllers.

```
using System.Security.Claims;
`string userid = User.FindFirst(ClaimTypes.NameIdentifier).Value;`
`string username = User.FindFirst(ClaimTypes.Name).Value;`
```

- Source(s)
  - [stackoverflow](https://stackoverflow.com/questions/36641338/how-to-get-current-user-in-asp-net-core)
