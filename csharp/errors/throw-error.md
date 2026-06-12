### How to throw an error

Set the following to throw an error with a message.

```
throw new InvalidOperationException("This is a forced error for testing.");
```

Use a try/catch to test either error handling, error reporting or logging.

```
try
{
  //code
}
catch (Exception ex)
{
    //error handling, error reporting or logging
    throw;
}
```

- Source(s)
  - [1](link1)
  - [2](link2)
