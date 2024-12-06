### Using IN in a where clause

In T-SQL, using the WHERE clause with IN and a list is a more efficient way to filter data compared to looping through something manually.

```
SELECT * FROM Employees
WHERE DepartmentID IN (1, 2, 3);
```

- Source(s)
  - [1](#)
