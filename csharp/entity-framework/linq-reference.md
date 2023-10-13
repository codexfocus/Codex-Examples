### linq References

#### How does linq work?
- [https://www.tutorialsteacher.com/linq](https://www.tutorialsteacher.com/linq)

method syntax - uses dot notation
query syntax - uses the more sql query style of syntax

#### Method Syntax Examples
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

#### Query Syntax
```
var results = (from d in _context.Transactions
                          join r in _context.Payments on d.PaymentId equals r.PaymentId
                          where d.EIN == EIN
                          && r.EntryDate.Date == PaymentDate.Date
                          && d.IsVoid == false
                          && d.ChargeTypeCode != 56
                          && d.GeneralLedgerId != null
                          && r.Status != 1
                           select new
                          {
                              Transaction = d,
                              Payment = r
                          }).ToList();
```

How to do count, max, min.

- Source(s)
  - [none](#)
