### Sessions in asp.net core

To set in a controller add:

`HttpContext.Session.SetString(SessionName, "Jarvik"); ` 
`HttpContext.Session.SetInt32(SessionAge, 24);`

To call in a controller add:

`HttpContext.Session.GetString(SessionName);`
`HttpContext.Session.GetInt32(SessionAge);`

Clear a session:

`HttpContext.Session.Clear();`

Set up
In the Startup.cs add to configure the services.
```
public void ConfigureServices(IServiceCollection services)  
{  

    services.AddDistributedMemoryCache();  
    services.AddSession(options => {  
        options.IdleTimeout = TimeSpan.FromMinutes(1);//You can set Time   
    });  
    services.AddMvc();  
}  
```
Also in the configure function add. Note order matters in the configure function.

`app.UseSession();`



- Source(s)
  - [Sessions and App state in Core](https://docs.microsoft.com/en-us/aspnet/core/fundamentals/app-state?view=aspnetcore-2.2)
  - [how to use sessions](https://www.c-sharpcorner.com/article/how-to-use-session-in-asp-net-core/)
  - [Clear a session](https://docs.microsoft.com/en-us/dotnet/api/microsoft.aspnetcore.http.isession.clear?view=aspnetcore-2.2)
