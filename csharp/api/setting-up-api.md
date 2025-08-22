### title

We need three things when setting up an api in .net.
- An ApiKey Record
- An ApiKeyAttribute
- A Controller

#### 1. Add a new file called ApiKeys.cs
Several options such as experiation dates, and keeping track of who uses the keys with Owner string, can be added to the keys.

```
public record ApiKey(string Key, string Owner, DateTime Expiry);

public static class ApiKeys
{
    private static readonly DateTime FixedDate = new DateTime(2025, 1, 1);
    private static readonly DateTime FixedDatePlusOne = FixedDate.AddDays(1);
    private static readonly DateTime FixedDatePlusSixMonths = FixedDate.AddMonths(6);

    //set key to DateTime.MaxValue to avoid expiry
    public static readonly List<ApiKey> Keys = new()
    {
        new("supersecretapikey123", "Internal Service", DateTime.UtcNow.AddYears(1)),
        new("secondkey456", "Mobile App", FixedDatePlusSixMonths),
        new("thirdkey789", "External Partner", FixedDatePlusOne)
    };
}
```

#### 2. Create an ApiKeyAttribute.

```
public class ApiKeyAttribute : Attribute, IAsyncActionFilter
{
    private const string ApiKeyHeaderName = "X-API-KEY";

    public async Task OnActionExecutionAsync(ActionExecutingContext context, ActionExecutionDelegate next)
    {
        if (!context.HttpContext.Request.Headers.TryGetValue(ApiKeyHeaderName, out var extractedApiKey))
        {
            context.Result = new ContentResult()
            {
                StatusCode = 401,
                Content = "API Key was not provided."
            };
            return;
        }

        var keyInfo = ApiKeys.Keys.FirstOrDefault(k => k.Key == extractedApiKey);

        if (keyInfo is null)
        {
            context.Result = new ContentResult()
            {
                StatusCode = 403,
                Content = "Invalid API Key."
            };
            return;
        }

        if (keyInfo.Expiry < DateTime.UtcNow)
        {
            context.Result = new ContentResult()
            {
                StatusCode = 403,
                Content = $"API Key expired for {keyInfo.Owner}."
            };
            return;
        }

        // Optional: you could log the owner here
        // e.g. context.HttpContext.Items["ApiKeyOwner"] = keyInfo.Owner;

        await next();
    }
}
```

#### 3. Create a controller.
Options such as setting certain actions to work with only certain keys can be set up.
Use the route option to work based on the controller or the action.

```
[Route("api/[controller]")]
[ApiController]
[ApiKey]  // only requests with a valid key can access
public class DataController : ControllerBase
{
    [HttpGet("items")]
    public IActionResult GetItems()
    {
        var data = new[]
        {
            new { Id = 1, Name = "Test", Value = 100 },
            new { Id = 2, Name = "Example", Value = 200 }
        };

        return Ok(data);
    }
}
```

#### Testing
An example of testing with postman.
Set the url of the api. Note the route option on the controller.
Set the Headers the Key name: X-API-KEY and the Value to one of the keys: thirdkey789

- Source(s)
  - [1](link1)
  - [2](link2)
