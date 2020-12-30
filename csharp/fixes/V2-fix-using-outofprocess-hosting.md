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

- Source(s)
  - [#](#)
