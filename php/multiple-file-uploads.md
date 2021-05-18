### Handling Multiple File uploads in php

Set up the html form.

```
<form enctype="multipart/form-data" action="update.php" method="post">       
  <input id="files" type="file" name="files[]" multiple/>
  <button type='submit' name='submit'>Submit</button>
</form>
```

On the update.php page we set the path where the files will be uploaded and set a max file size.
Also a couple lines for getting the file extension and page count.

```
$dir = 'uploads/';
$max_size = 20971520;

foreach ($_FILES['files']['name'] as $i => $name)
{
  $name = str_replace("'", '', $name);

  // if file not uploaded then skip it
  if ( !is_uploaded_file($_FILES['files']['tmp_name'][$i]))
  continue;

  // skip large files
  if ( $_FILES['files']['size'][$i] >= $max_size )
  continue;

  // now we can move uploaded files
  if( move_uploaded_file($_FILES["files"]["tmp_name"][$i], $dir . $name) )
      $count++;
  
  //get file extension, note of caution the file extension can be changed an may not be a the true file extension.
  $path_parts = pathinfo("uploads/" . $name);
  echo $path_parts['extension'];
  
  //page count if its a pdf.
  $pdf = file_get_contents("uploads/" . $name);
  $page_count = preg_match_all("/\/Page\W/", $pdf, $dummy);
}
```

- Source(s)
