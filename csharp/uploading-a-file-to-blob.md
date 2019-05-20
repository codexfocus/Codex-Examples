### Uploading a File to a blob in asp.net core 2.2 and sql server

A quick outline of uploading a file to the database.

Model for the document upload table:
```
public class ProjectDocument
{
    public int ProjectDocumentId { get; set; }
    
    [StringLength(255)]
    public string FileName { get; set; }
    
    [StringLength(100)]
    public string ContentType { get; set; }
    
    public byte[] Content { get; set; }
    
    public int ProjectId { get; set; }
    
    [DataType(DataType.Date)]
    public DateTime CreateDate { get; set; }
    
    [StringLength(35)]
    public string DocumentType { get; set; }
}
```

Controller for uploading a document.
```
[HttpPost]
[ValidateAntiForgeryToken]
public async Task<IActionResult> AddDocument(ProjectDocument projectDocument, List<IFormFile> upload)
{
    foreach (var item in upload)
    {
        if (item.Length > 0)
        {
            using (var stream = new MemoryStream())
            {
                await item.CopyToAsync(stream);
                projectDocument.FileName = item.FileName;
                projectDocument.ContentType = item.ContentType;
                projectDocument.Content = stream.ToArray();
            }
        }
    }
    projectDocument.CreateDate = DateTime.Today;
    _projectDocumentRepository.AddDocument(projectDocument);

    return View();
}
```

Html form to upload a new file.
```
<form action="~/Project/AddDocument" method="post" enctype="multipart/form-data">
<div asp-validation-summary="All" class="text-danger"></div>
<input asp-for="projectDocument.ProjectId" type="hidden" value="@Model.viewproject.ProjectId">
<div class="form-group">
    <label for="file">Filename:</label>
    <input class="form-control" type="file" name="upload" id="file" />
</div>
<p>Uploaded documents must be in .pdf format.</p>
<p>The name of the document will be the name that appears.</p>
<div class="form-group">
    <label asp-for="projectDocument.DocumentType" class="control-label"></label>
    <select asp-for="projectDocument.DocumentType" asp-items="Model.DocumentTypes" class="form-control"></select>
    <span asp-validation-for="projectDocument.DocumentType" class="text-danger"></span>
</div>

<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<input name="Submit" class="btn btn-primary" type="submit" value="Submit">

</form>    
```

Controllers to view or download a file.
```
[HttpGet]
public FileResult DownloadFile(int ProjectDocumentId)
{
    ProjectDocument projectDocument = new ProjectDocument();
    projectDocument = _projectDocumentRepository.GetDocumentById(ProjectDocumentId);

    return File(projectDocument.Content, projectDocument.ContentType, projectDocument.FileName);
}

[HttpGet]
public FileContentResult ViewFile(int ProjectDocumentId)
{
    ProjectDocument projectDocument = new ProjectDocument();
    projectDocument = _projectDocumentRepository.GetDocumentById(ProjectDocumentId);


    //makes the file view in browser note the filename is set in the header and not in the return File.
    Response.Headers.Add("Content-Disposition", "inline; filename=" + projectDocument.FileName);
    return File(projectDocument.Content, projectDocument.ContentType);
}  
```

- Source(s)
  - [Tutorial Downloading Binary Files](http://www.compilemode.com/2017/11/downloading-binary-files-from-sql-using-asp-net-mvc.html)
  - [stackoverflow.com](https://stackoverflow.com/questions/19411335/make-a-file-open-in-browser-instead-of-downloading-it)
