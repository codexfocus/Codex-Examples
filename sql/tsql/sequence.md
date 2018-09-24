### How to create a sequence for tsql

A simple sequence that starts at 1 and increments by 1.

```
CREATE SEQUENCE Schema.SequenceName  
    START WITH 1  
    INCREMENT BY 1 ;  
GO  
```

- Source(s)
  - [Create Sequence - Microsoft Docs](https://docs.microsoft.com/en-us/sql/t-sql/statements/create-sequence-transact-sql?view=sql-server-2017)

### How to reference the sequence

Assign it as the default property for the column.

```
CREATE TABLE [MyTable]
(
    [ID] [bigint] PRIMARY KEY NOT NULL DEFAULT (NEXT VALUE FOR Schema.SequenceName)
);
```

Reference the sequence in an insert statement.

```
INSERT INTO [MyTable] ([ID]) VALUES (NEXT VALUE FOR Schema.SequenceName)
```

- Source(s)
  - [Stackexchange Question](https://dba.stackexchange.com/questions/53261/how-do-i-create-a-table-with-a-column-that-uses-a-sequence)
  
  ### How to Reset Sequence
