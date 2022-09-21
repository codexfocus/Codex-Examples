### Run a .exe from asp.net web app

Run a .exe from a web applicaiton

A few important notes.
The App Pool user needs to be able to have access to the directory of the file location.
If the location is a network share, the full directory path needs to be used. `\\server\filename\yourexe.exe` Also the user would need access to the location as well.

```
[HttpGet("{id}")]
public ActionResult<string> Get(int id)
{
    using (var process = new Process())
    {
        process.StartInfo.FileName = @"..\HelloWorld\bin\Debug\helloworld.exe"; // relative path. absolute path works too.
        process.StartInfo.Arguments = $"{id}"; //optional
        //process.StartInfo.FileName = @"cmd.exe";
        //process.StartInfo.Arguments = @"/c dir";      // print the current working directory information
        process.StartInfo.CreateNoWindow = true;
        process.StartInfo.UseShellExecute = false;

        //configure the Console output
        process.StartInfo.RedirectStandardOutput = true;
        process.StartInfo.RedirectStandardError = true;

        process.OutputDataReceived += (sender, data) => Console.WriteLine(data.Data);
        process.ErrorDataReceived += (sender, data) => Console.WriteLine(data.Data);

        Console.WriteLine("starting");
        process.Start();
        process.BeginOutputReadLine();
        process.BeginErrorReadLine();
        var exited = process.WaitForExit(1000 * 10);     // (optional) wait up to 10 seconds
        Console.WriteLine($"exit {exited}");
    }
    return "value";
}
```

- Source(s)
  - [From](https://codeburst.io/run-an-external-executable-in-asp-net-core-5c2f8b6cacd9)
  - [2](link2)
