### Code first database creation using Entity Framework

#### Step 1 Add the Packages to the project.

Right click on the project > Manage NuGet Packages
- Microsoft.EntityFrameworkCore.Tools
- Microsoft.EntityFrameworkCore.Design
- Microsoft.EntityFrameworkCore.SqlServer

Note: For this example I am using SqlServer for the database. If you are using a different database you will need to make sure your connections are set up and the library you need is included.
#### Step 2 Create a Model class in the Models folder.

```
public class EmployeeModel
{
    [Key]
    [DatabaseGenerated(DatabaseGeneratedOption.Identity)]
    public int EmployeeId { get; set; }

    [StringLength(35), Display(Name = "Description")]
    public string Description { get; set; }
}
```
Note: I have found that naming the Id after the model name (or table name) helps when entity framework builds the database.

#### Step 3 Create an AppDbContext class in the Models folder.

```
public class AppDbContext : DbContext
{
    public AppDbContext(DbContextOptions<AppDbContext> options) : base(options)
    {

    }

    public DbSet<EmployeeModel> Employees { get; set; }
}
```
Note: The name of the DbSet will be the name of your table. So here Employees will be the table name..

#### Step 4 Add your connection string

In this example I will be adding it to appsettings.json, you could also create a static class and string to put the connection string in.
In appsettings.json add:
```
"ConnectionStrings": {
    "LocalConnection": "Server=LocationName\\SQLEXPRESS;Database=EmployeeDatabase;Integrated Security=SSPI;"
```
Note: The name of the Database here will be the database that is generated.

#### Step 5 In the Startup.cs add the DbContext to the ConfigureServices

```
public void ConfigureServices(IServiceCollection services)
{
    services.AddDbContext<AppDbContext>(options => options.UseSqlServer(Configuration.GetConnectionString("LocalConnection")));
    services.AddControllersWithViews();
}
```

#### Step 6 Creating the Database

Open the Package Manager Console in VS by:
Go to View > Other Windows > Package Manager Console

Create the migraiton files, they will appear in the VS file tree.

`add-migration NameOfMigration`

Update the database, I usually create a new database each time so nothing conflicts with exisitng data or other problems.

`update-database`

Note: If you have multiple DbContexts you can specific the one you want to generate:

`add-migration NameOfMigration -context NameOfContext`

`update-database -context NameOfContext`


- Source(s)
  - [entityframeworkcore.com Tutorial](https://entityframeworkcore.com/approach-code-first)
  - [Pluralsight Building Your First AspDotNet Core 2 MVC Application](https://app.pluralsight.com/library/courses/building-first-aspdotnet-core-2-mvc-application/table-of-contents)
