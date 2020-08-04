### Setting up the database schema in the context

In the OnModelCreating in your context class set the schema using the following:

`modelBuilder.HasDefaultSchema("yourschema");`

```
protected override void OnModelCreating(ModelBuilder modelBuilder)
{
    base.OnModelCreating(modelBuilder);

    modelBuilder.HasDefaultSchema("yourschema");
}
```

- Source(s)
  - [#](#)
