### Access a network share in cmd line

To add a network share

`net use X: \\SERVER\Share`

Then to remove the share

`net use X: /delete`

To add a temporary network share for use in the command line

`pushd \\server\share`

To close the temporary ntwork share

`popd`

- Source(s)
  - [stackexchange question](https://superuser.com/questions/52220/how-do-i-connect-to-a-network-share-via-the-windows-command-prompt)
