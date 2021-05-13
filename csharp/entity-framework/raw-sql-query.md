### Raw Sql Query using Entity Framework

Note use parameters to avoid sql injection.

```
public YourModel GetInformation()
{
    YourModel yourModel = _dbContext.TableName
        .FromSqlRaw("SELECT Id FROM dbo.TableName WHERE Id = 1")
        .FirstOrDefault();

    return yourModel;
}
```

- Source(s)
  - [https://docs.microsoft.com/en-us/ef/core/querying/raw-sql](https://docs.microsoft.com/en-us/ef/core/querying/raw-sql)
