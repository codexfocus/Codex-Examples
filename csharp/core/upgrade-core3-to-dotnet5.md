### Upgrading to .net5 from core 3.1

How to upgrade a project/solution from core v3.1 to .net5.
- Upgrade visual studio to the latest version.
- Download the .net5 SDK, search on the web for .net 5 sdk, [https://dotnet.microsoft.com/download/dotnet/5.0](https://dotnet.microsoft.com/download/dotnet/5.0)
- Change Target Framework. In Project Properties > `<TargetFramework>net5.0</TargetFramework>`
- Upgrade all the installed packages in the nuget package manager.
- At this point the framework is upgraded do a build and work through errors.


- Source(s)
  - [1](https://docs.microsoft.com/en-us/aspnet/core/migration/31-to-50?view=aspnetcore-5.0&tabs=visual-studio)
