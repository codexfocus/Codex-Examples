### Run a .exe from asp.net web app

There is a couple options.

#### Option 1
- Run the exe on the server
- Run the exe on a network share

A few important notes.
- The App Pool user needs to be able to have access to the directory of the file location.
- If the location is a network share, the full directory path needs to be used. `\\server\filename\yourexe.exe` Also the user would need access to the location as well.

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
        
        //use multiple arguments example
        //process.StartInfo.ArgumentList.Add(InputOne);      
        //process.StartInfo.ArgumentList.Add(InputTwo); 
                
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

#### Option 2
- Run an exe on client pc (requires reg edit)

Running on the client pc, allows access to things like printers.

Note:
- You need access to the client.
- Add regedit to run the exe.
- Exe needs to be on the pc.

Example calling the URI as an html link.
`<a href="ExampleApp:@Model.Id" target="_blank">Example URI</a>`


- Source(s)
  - [From](https://codeburst.io/run-an-external-executable-in-asp-net-core-5c2f8b6cacd9)
  - [2](link2)
