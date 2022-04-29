### Fixing a http 400 error

#### The Error
On forms when you post you get a HTTP ERROR 400. The request seems to die before you ever get to the action. I am seeing this come up in core3.1 mvc applications.

What the problem is the anti forgary token isn't being automatically created correctly. In core3.1 if you use the `[ValidateAntiForgeryToken]` tag on top of an action it would usually generate the token with out having to add any lines in the view.

#### The Fix
To fix this I am adding the `@Html.AntiForgeryToken()` helper to the view inside of the `<form>` tags.

Brief explantion of how it works from the blog post link in the sources below.

>On posting data, the 'ValidateAntiForgeryToken' attribute reads the hidden input element value(AntiforgeryToken) and then validates token. If the token signature qualifies, the server allows the post request to execute, if the token is not qualified(tampered or modified) then the server halts the post request and return a response as Bad Request of status 400(Http Status Code for Bad Request).

- Source(s)
  - [stackoverflow question](https://stackoverflow.com/questions/55840699/getting-http-error-400-when-form-gets-posted)
  - [Blog post explaining how it works.](https://www.learmoreseekmore.com/2020/06/dotnet-core-antiforgerytoken.html#:~:text=AntiForgeryToken%20is%20a%20security%20token,guard%20against%20Cross%2DSite%20Request.)
  - [Microsoft Set Up Documentation for anti request forgery](https://docs.microsoft.com/en-us/aspnet/core/security/anti-request-forgery?view=aspnetcore-6.0)
