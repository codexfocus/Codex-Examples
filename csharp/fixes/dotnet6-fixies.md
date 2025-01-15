### dotnet6 version specific fixes or issues

Warning about decimal column definition

`No store type was specified for the decimal property 'Column Name' on entity type 'Model Name'. This will cause values to be silently truncated if they do not fit in the default precision and scale. `

If you add the percision tag it will stop these errors. See the stack overflow link in the sources for more detailed information.

```
[Precision(18, 2)]
public decimal Quantity { get; set; }
```

- Source(s)
  - [1](https://stackoverflow.com/questions/62550667/validation-30000-no-type-specified-for-the-decimal-column)
  - [2](link2)
