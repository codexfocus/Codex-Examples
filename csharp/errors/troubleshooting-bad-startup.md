### Troubleshooting Application Start Up

Running an application on iis and only error you get is:

`An error occurred while starting the application.`

You can try to start your application directly on your IIS Server via the console.

```
dotnet myapp.dll
```
You should get a much more verbose error there.

In my experience if your server configuration are similar to another application and everything works in those but not this application.
It is usually a database error of some type when setting up the connection.

- Source(s)
  - [stackoverflow question](https://stackoverflow.com/questions/49667603/an-error-occurred-while-starting-the-application-after-publishing-dot-net-core-2)
