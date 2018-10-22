### Upload a File

For handling a file or document upload to iis using an asp.net mvc application.

First set up an html form. Note in the form tag `enctype="multipart/form-data"` required for the file upload.

```
<form action="@Url.Action("AddDocument","Home")" method="post" enctype="multipart/form-data">
    <label for="file">Filename:</label>
    <input class="form-control" type="file" name="file" id="file" />
    <input name="Submit" class="btn btn-primary" type="submit" value="Submit">
</form>
```

In my application folder in IIS I have created a uploads folder in App_Data.
My method in the controller.

```
[HttpPost]
public ActionResult AddDocument(HttpPostedFileBase file, int Id)
{
    if (file.ContentLength > 0)
    {
       var fileName = Path.GetFileName(file.FileName);
       string fileExt = Path.GetExtension(fileName);
       if(fileExt != ".pdf")
       {
            TempData["ResponseMessage"] = "Please upload a .pdf file your file is currently a: " + fileExt;
            return RedirectToAction("Edit", new { id = Id });
        }
       else
       {
            var path = Path.Combine(Server.MapPath("~/App_Data/uploads"), fileName);

            file.SaveAs(path);
            
            //If you need to insert the documents name or other information into the databas

            dbdocument.AddInternalDocument(BLId, fileName, Id);

            TempData["ResponseMessage"] = "Document has been added. " + fileExt;
            return RedirectToAction("Edit", new { id = Id });
        }
    }
    else
    {
        TempData["ResponseMessage"] = "Error: Document failed to update.";
        return RedirectToAction("Edit", new { id = Id });
    }
}
```

- Source(s)
  - [stackoverflow.com question](https://stackoverflow.com/questions/49367687/upload-download-file-with-asp-net-c-sharp)
