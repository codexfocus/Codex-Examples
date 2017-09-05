### Insert

Basic insert statement

```
INSERT INTO table_name (column1, column2, column3, ...)
VALUES (value1, value2, value3, ...);
```

Insert statement populating from a select statement:

```
INSERT INTO first_table_name [(column1, column2, ... columnN)] 
   SELECT column1, column2, ...columnN 
   FROM second_table_name
   [WHERE condition];
```

- Source(s)
  - [w3schools](https://www.w3schools.com/sql/sql_insert.asp)
  - [tutorialspoint](https://www.tutorialspoint.com/sql/sql-insert-query.htm)
