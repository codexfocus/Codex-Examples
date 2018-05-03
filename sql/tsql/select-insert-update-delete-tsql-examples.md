### Select, Insert, Update, Delete T-SQL Example Statements

#### Select Example:

```
SELECT FirstName, LastName, StartDate AS FirstDay  
  FROM Employee   
  WHERE EndDate IS NOT NULL   
  AND MaritalStatus = 'M'  
  ORDER BY LastName; 
```

- Source(s)
  - [Select - Microsoft Docs](https://docs.microsoft.com/en-us/sql/t-sql/queries/select-transact-sql?view=sql-server-2017)
  
#### Insert Example:

```
INSERT INTO TableName (ColumnOne, ColumnTwo)  
VALUES (CURRENT_TIMESTAMP, GETDATE());  
```

- Source(s)
  - [Insert - Microsoft Docs](https://docs.microsoft.com/en-us/sql/t-sql/statements/insert-transact-sql?view=sql-server-2017)
  
#### Update Example:

```
UPDATE TableName   
SET FirstName = 'xyz'  
WHERE EmpId = 1;
```

- Source(s)
  - [Update - Microsoft Docs](https://docs.microsoft.com/en-us/sql/t-sql/queries/update-transact-sql?view=sql-server-2017)

  
#### Delete Example:

```
DELETE FROM TableName 
WHERE EmpID = 35;    
```

- Source(s)
  - [Delete - Microsoft Docs](https://docs.microsoft.com/en-us/sql/t-sql/statements/delete-transact-sql?view=sql-server-2017)
