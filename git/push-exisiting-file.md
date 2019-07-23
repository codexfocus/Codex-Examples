### Push an exisiting file

Open your command prompt and set the path, this example shows a different drive than the default C: so the /d sets the directory

`cd /d K:\yourdirectory\`

The full push

```
cd existing_folder
git init
git remote add origin https://yourgitsite.com/user/gitreponame.git
git add .
git commit -m "Initial commit"
git push -u origin master
```

- Source(s)
