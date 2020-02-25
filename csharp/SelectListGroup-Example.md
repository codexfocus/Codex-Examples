### Populating a select list organized by group.

First we get our data.
Then loop through populating our group name.
Then populating the select items for that group.

```
public IEnumerable<SelectListItem> GetUserDropdown()
{
    var model =  _appDbContext.Groups
                              .OrderBy(a => a.GroupName)
                              .Include(g => g.UserGroups)
                              .ThenInclude(ug => ug.PortalUser)
                              .ToList();

    foreach (GroupModel group in model)
    {
        var currentGroup = new SelectListGroup
        {
            Name = group.GroupName
        };

        foreach (var user in group.UserGroups)
            {
                yield return new SelectListItem
                {
                    Value = user.PortalUser.Id.ToString(),
                    Text = user.PortalUser.LastName + ", " + user.PortalUser.FirstName + " - " + user.PortalUser.UserName,
                    Group = currentGroup
                };
            }
    }
```

- Source(s)
  - [Example from here.](https://csharp.hotexamples.com/examples/System.Web.Mvc/SelectListGroup/-/php-selectlistgroup-class-examples.html)
