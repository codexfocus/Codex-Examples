

### How to see php errors?

Note: Check your default php server settings to understand if errors are turned on or off by default.

Turn on all errors:

```
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);
```

Turn errors off:

`error_reporting(0);`
