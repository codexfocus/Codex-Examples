### Example Personal Information Table

A simple table for Personal information.

```
CREATE Table Employees (
  EmpId int IDENTITY(1,1) NOT NULL,
  FirstName nvarchar(35) NULL,
  LastName nvarchar(35) NULL,
  Address nvarchar(35) NULL,
  City nvarchar(35) NULL,
  State nvarchar(2) NULL,
  ZipOne nvarchar(5) NULL,
  ZipTwo nvarchar(4) NULL,
  PhoneAreaCode nvarchar(3) NULL,
  PhonePrefeix nvarchar(3) NULL,
  PhoneSuffix nvarchar(4) NULL,
  Created datetime NULL
);
```

- Source(s)
  - None
