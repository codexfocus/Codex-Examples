### Clone all repos from github.

Useful for setting up a new workstation or backing up all your repos.
- First Install Github CLI [https://cli.github.com/](https://cli.github.com/)
- Log into Github in cmd line `gh auth login`
- Create the script the below is for windows, save to run as a powershell script as a .ps1 file. Specifiy the folder path. Enter your org name to download all the org repos.

```
# Install Github CLI
# winget install -e --id GitHub.cli

# Log into Github
# gh auth login

mkdir c:\_all
cd c:\_all

$orgName = 'Your Org Name Goes Here!!!'

# Your non organization repos
#gh repo list | ForEach-Object { gh repo clone $_.Split("`t")[0] }

# Organization repos
gh repo list $orgName | ForEach-Object { gh repo clone $_.Split("`t")[0] }
```
- Lastly run the script in powershell.

See the source link below for other options in mac or linux environments. 

- Source(s)
  - [https://stackoverflow.com/questions/19576742/how-to-clone-all-repos-at-once-from-github](https://stackoverflow.com/questions/19576742/how-to-clone-all-repos-at-once-from-github)
