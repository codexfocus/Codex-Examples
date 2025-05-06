### Formatting DateTime in a view

In instances where you don't need the time portion of the variable the following works well.

If the variable is not nullable.
`@Model.DateProperty.Date.ToShortDateString()`

Or if you want to format the date specifically:
`@Model.DateProperty.Date.ToString("yyyy-MM-dd")`

If the datetime is defined as a nullable this will work:
```
@(Model.DateProperty.HasValue ? Model.DateProperty.Value.ToString("yyyy-MM-dd") : "")
```

- Source(s)
  - [1](#)
