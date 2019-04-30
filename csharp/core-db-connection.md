### Asp.net Core setting up a database connection

In appsettings.json add your string

```
"ConnectionStrings": {
    "DefaultConnection": "Server=(localdb);Database=DatabaseNameHere;Integrated Security=SSPI;"
  }
```

In Startup.cs add in Configuration parts to reference the connection string.

```
using Microsoft.Extensions.Configuration;

namespace Demo
{
    public class Startup
    {
        public Startup(IConfiguration configuration)
        {
            Configuration = configuration;
        }

        public IConfiguration Configuration { get; }
        
        //example for entity framework
        services.AddDbContext<DemoDbContext>(options => options.UseSqlServer(Configuration.GetConnectionString("DefaultConnection")));
     }
 }
```

- Source(s)
  - [Asp.Net Core](https://docs.microsoft.com/en-us/aspnet/core/?view=aspnetcore-2.2)
