### Lockout  all users forcing to reauthenticate.

Locking an identity application so all users are forced to authenticate again through logging in again or be locked out.

To accomplish this I am going to create a claim with a guid in it.

Set up
- add the claim to the cookie on authentication
- set the claim static in the system
- check for the claim if user is authenticated. Set this in a couple locations landing page, main menu
- If the number matches the currenct static they can continue on. If not redirect to the logout and kill the cookie.
  
#### Requirements
Using Identity Authentication in your applicaiton.

#### Implementing
Go to where your ClaimsIdentity is being populated. Add a new claim. We will call it 'SystemVersion'
```
identity.AddClaim(new Claim("SystemVersion", YourGuidHere));
```

In my implementation I am going to store the value in static class for these types of definitions.
```
public static string SystemVersionGUID = "e41b8f2e-5241-44ca-8e39-32de7b32ba4d";
```

Then to update my ClaimsIdentity:
```
identity.AddClaim(new Claim("SystemVersion", StaticDefinitions.SystemVersionGUID));
```

Check the cookie is valid continue on, if not redirect to logout so they need to login and authenticate again.
```
if (User.Identity.IsAuthenticated)
{
  if(User.FindFirst("SystemVersion").Value == StaticDefinitions.SystemVersion)
  {
      //continue on
  }
}
return Redirect("/Logout");
```

#### Uses
- Force everyone to login, change the guid to force a login.
- Lockout everyone, Set the check to something different than the guid to lock everyone out of the system. Then if you need access to the system, hard code your info in the claims factory to the number or hardcode your name to bypass the version check.


- Source(s)
  - [1](#)
