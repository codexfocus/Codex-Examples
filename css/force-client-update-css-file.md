### Force client side to update css file.

By upending a `?v=1.0` on the end of our css file we can force the client to get the latest file if there is a change.

If we make an update and want to force a change we can increment the number to 1.1 and the client will think the file name has changed and get the latest version on the css file.

`
<link rel="stylesheet" href="~/css/site.css?v=1.1" />
`

This works well with css and js files. Not so much with html files.

- Source(s)
  - [1](#)
