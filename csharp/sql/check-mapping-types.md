### Checking types in manual sql query

 Reusable utility method for safely mapping different types from a SqlDataReader to your .NET model properties.

```
public static T GetValue<T>(this SqlDataReader reader, string columnName, T defaultValue = default)
{
    object value = reader[columnName];

    if (value == DBNull.Value)
        return defaultValue;

    return (T)Convert.ChangeType(value, typeof(T));
}
```

Example
`int someInt = reader.GetValue<int>("SomeIntColumn");`

How It Works:
- For int, default(int) → 0
- For long, default(long) → 0
- For string, default(string) → null
- For bool, default(bool) → false
- For DateTime, default(DateTime) → DateTime.MinValue

- Source(s)
  - chatgpt May, 2025
