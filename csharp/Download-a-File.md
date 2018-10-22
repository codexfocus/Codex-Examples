### Download a File

For downloading a file or document from iis using an asp.net mvc application.

In the view set a link to an action method. Here we are passing the name of the document which is coming from a database table holding the names of the uploaded documents.

`<a href="@Url.Action("Download", "Home", new {DocumentName = @item.DocumentName} )">@item.DocumentName</a>`

The action method pointing to the applications App_Data/uploads folder where the documents are stored. In this example we are assuming a .pdf file type.

```
public FileResult Download(string DocumentName)
{
    return new FilePathResult("~/App_Data/uploads/" + DocumentName, System.Net.Mime.MediaTypeNames.Application.Pdf);
}
```

See the [stackoverflow.com question](https://stackoverflow.com/questions/49367687/upload-download-file-with-asp-net-c-sharp) for other options and ways for downloading a file.

- Source(s)
  - [stackoverflow.com question](https://stackoverflow.com/questions/49367687/upload-download-file-with-asp-net-c-sharp)
