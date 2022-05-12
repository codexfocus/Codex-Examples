### How to add a different layout so a controllers views are different than the default

In the Views folder inside the Example Controllers View folder.
- Add a '_ViewStart.cshtml' file
- Add a directory called Shared
- Inside the Shared directory add a '_Layout.cshtml' file.

For example we should have a /Views/Example/Shared directory with the '_Layout.cshtml' file inside.

#### _ViewStart.cshtml
```
@{ 
    Layout = "~/Views/Example/Shared/_Layout.cshtml";
}
```




- Source(s)
  - [none](link1)
