### Publish a local nuget package

How to push a new nuget package

- In the .csproj file for the library you modified, increment the version number and ***SAVE THE FILE***
- In the developer terminal (use the full powershell terminal, not the Package Manager console) change into the directory for the library like this:
  `cd .\ExampleModelsLibrary`
- Run this command in the terminal to generate the updated NuGet package:
  `dotnet pack`
- Run this command to publish the generated NuGet package. ***NOTE THAT THE EXACT WORDING OF THIS COMMAND WILL CHANGE BASED ON THE VERSION NUMBER***
  `dotnet nuget push .\bin\debug\OrgName.ExampleModelsLibrary.{VersionNumber}.nupkg -s \\networkshare\LocalNuGet`

For example, if your .csproj file looks like this:
		
```
<PropertyGroup>
			<TargetFramework>net6.0</TargetFramework>
			<PackageId>OrgName.ExampleModelsLibrary</PackageId>
			<Version>0.1.3</Version>
			<Authors>John Doe</Authors>
			<Company>Org Name</Company>
</PropertyGroup>
```

Then the command will look like this:
`dotnet nuget push .\bin\debug\OrgName.ExampleModelsLibrary.0.1.3.nupkg -s \\networkshare\LocalNuGet`

- Source(s)
  - [none](#)
