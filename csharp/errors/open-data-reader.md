### Error: There is already an open DataReader associated with this Connection which must be closed first.

One instance where this error can occur is when you populate a ienumerable. Then use a foreach loop to iterate through it. Then inside the loop try to call the database for something.

The following error is thrown.

`System.InvalidOperationException: 'There is already an open DataReader associated with this Connection which must be closed first.'`

The error will throw. To fix this populate to a List<> instead of ienumerable. This closes the db connection.

Read the stackoverflow.com question in the sources for several other fixes.

- Source(s)
  - [stackoverflow.com]([link1](https://stackoverflow.com/questions/6062192/there-is-already-an-open-datareader-associated-with-this-command-which-must-be-c))
