### Simple Git Commands

Note: make sure you have git installed on your computer.
Note: make sure you are in the directory on the command line that you want to be interacting with git.

Example:
`cd \Users\username\documents\servers\servername`

#### Clone an existing repo from a server

`git clone https://server.name/username/reponame.git`

You can get other branches by being in the directory and using:
`git checkout nameofbranch`

Note: if it is a new computer you need to for it to work with the wildcard ssl cert.
`git config --global http.sslVerify false`

#### Pushing a repo to a remote server
This will add a remote copy of your git repo on the git server.

- Create a Project on the site.
- In cmd prompt navigate to the directory location.
- `git remote add origin https://server.name/username/reponame.git`

#### Pushing a branch to a remote server

`git push origin branchname`

- Source(s)
  - [none](#)
