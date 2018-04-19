### Using OUTPUT in TSQL

Getting the ID of the last insert statement in tsql

`OUTPUT INTO`

Insert Statement Example:

```
DECLARE @MyTableVar
INSERT Production.ScrapReason
    OUTPUT INSERTED.ScrapReasonID, INSERTED.Name, INSERTED.ModifiedDate  
        INTO @MyTableVar
VALUES (N'Operator error', GETDATE()); 
```

- Source(s)
  - [Output - Microsoft Docs](https://docs.microsoft.com/en-us/sql/t-sql/queries/output-clause-transact-sql?view=sql-server-2017)
