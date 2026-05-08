### Create a spreadsheet of fields for everytable in database

This query returns a list of all tables, their fields and data types. You can then copy into excel to have a list of tables, fields and datatypes quite quickly.

```
SELECT 
    c.TABLE_SCHEMA AS [Schema],
    c.TABLE_NAME AS [Table],
    c.COLUMN_NAME AS [Column],
    c.ORDINAL_POSITION AS [Position],
    c.DATA_TYPE AS [Data Type],
    c.CHARACTER_MAXIMUM_LENGTH AS [Max Length],
    c.IS_NULLABLE AS [Nullable]
FROM 
    INFORMATION_SCHEMA.COLUMNS c
ORDER BY 
    c.TABLE_SCHEMA, c.TABLE_NAME, c.ORDINAL_POSITION;
```

- Source(s)
  - [1](My AI Friend)
