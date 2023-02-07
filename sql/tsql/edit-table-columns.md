### Edit a Tables Columns

Add a column
```
ALTER TABLE Employees
ADD EmployeePaid BIT NOT NULL DEFAULT 0;
```

Change a column
```
ALTER TABLE Employees
ALTER COLUMN BirthDate year;
```

Delete a column
```
ALTER TABLE Employees
DROP COLUMN ContactName;
```

- Source(s)
