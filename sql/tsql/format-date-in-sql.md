### Date Formating

Formating a date

`FORMAT( column-name, 'dd/MM/yyyy', 'en-US' ) AS 'reference-name'`

Microsoft example:

```
DECLARE @d DATETIME = GETDATE();  
SELECT FORMAT( @d, 'dd/MM/yyyy', 'en-US' ) AS 'DateTime Result'  
       ,FORMAT(123456789,'###-##-####') AS 'Custom Number Result';
```

- Source(s)
  - [1 FORMAT Microsoft Docs](https://docs.microsoft.com/en-us/sql/t-sql/functions/format-transact-sql?view=sql-server-2017)
  - [2 CONVERT Microsoft Docs](https://docs.microsoft.com/en-us/sql/t-sql/functions/cast-and-convert-transact-sql?view=sql-server-2017#date-and-time-styles)
