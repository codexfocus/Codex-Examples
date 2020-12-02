### Calculated Field

Calculated Field Stored in the Database

```
protected override void OnModelCreating(ModelBuilder modelBuilder)
 {
     base.OnModelCreating(modelBuilder);
     modelBuilder.Entity<StoreUser>()
         .Property(u => u.FullName)
         .HasComputedColumnSql("[FirstName] + ' ' + [LastName]");
 }
```

Calculate the value ahead of time and store it in the database.
`.HasComputedColumnSql("[FirstName] + ' ' + [LastName]", stored:true);`

- Source(s)
  - [1](https://eamonkeane.dev/computed-columns-in-entity-framework-core/)

Calculated Field generated on the file in a not mapped field.

```
[NotMapped]
[DisplayFormat(DataFormatString = "{0:0.00}")]
public decimal? ChargeTotal { get
    {
        decimal? total = 0.00m;
        foreach (var charge in Charges)
        {
            total += charge.ChargeAmount;
        }
        return total;
    }
}
```
