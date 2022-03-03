### V2 fix using OutOfProcess Hosting

To fix the V2 error when hosting on iis. We will set the applicaiton to run OutOfProcess hosting.
In order to do this every application running under the site needs to be configured to run as OutOfProcess.

For a new project use:
Double click the project to open the .csproj file. Add this inside the property group tag.

`<AspNetCoreHostingModel>OutOfProcess</AspNetCoreHostingModel>`

Location Example:

```
<PropertyGroup>
      <TargetFramework>netcoreapp3.1</TargetFramework>
      <AspNetCoreHostingModel>OutOfProcess</AspNetCoreHostingModel>
</PropertyGroup
```

Update 03-03-2022
Here is the current iis error page title:
HTTP Error 500.31 - Failed to load ASP.NET Core runtime

The above fix continues to reslove the issue.

- Source(s)
  - [#](#)
