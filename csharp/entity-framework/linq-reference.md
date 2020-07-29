### linq References

Example Raw Sql query using the _context.Database.

`_context.Database.ExecuteSqlRaw("SET IDENTITY_INSERT [dbo].[UsMasterYearser] OFF");`

Return Max Number of the column.

```
_context.ExampleTable.Max((p => p.Year));
```

Where
```
_context.ExampleTable.Where(p => p.Year == Year).Where(p => p.Status == Status);
```

List
```
_context.ExampleTable.ToList();
```

Include
```
_context.ExampleTable
  .Where(p => p.ExampleId == id)
  .Include(p => p.Application)
  .Include(p => p.Review)
  .Include(p => p.Comment)
  .Include(p => p.Document)
  .Include(p => p.Address)
  .FirstOrDefault();
```

- Source(s)
  - [1](#)
  - [2](#)
