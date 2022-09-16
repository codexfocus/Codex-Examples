### Create a File on a client


Check the source link for more information:

```
public ActionResult CreateFile(int TaxParcelId)
{

    string pathString = @"c:\folder";
    string fileName = "YourFile.txt";
    pathString = System.IO.Path.Combine(pathString, fileName);

    using (System.IO.FileStream fs = System.IO.File.Create(pathString))
    {
        using var sr = new StreamWriter(fs);

        sr.WriteLine("test");
    }
    return RedirectToAction("Index");
}
```

- Source(s)
  - [1](https://docs.microsoft.com/en-us/dotnet/csharp/programming-guide/file-system/how-to-create-a-file-or-folder)
