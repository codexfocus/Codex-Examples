### Truncate

Truncate the string to the entered value.

```
public static string Truncate(this string value, int maxLength)
{
    if (string.IsNullOrEmpty(value)) return value;
    return value.Length <= maxLength ? value : value.Substring(0, maxLength);
}
```

- Source(s)
  - Found on stackoverflow I think.
  - [2](#)
