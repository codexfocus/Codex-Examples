### Automate publishing files using powershell.

Automate publishing files by using a PowerShell Script to copy the published files from a folder to live.
Setting the schedule in the middle of the night so not to disrupt normal business hours.

1. Create a PowerShell Script:

    Open a text editor like Notepad.
    Write your PowerShell script and save it with a .ps1 extension (e.g., MyScript.ps1).

Example PowerShell script (MyScript.ps1):
```
# Specify the source and destination paths
$sourcePath = "C:\Path\To\Source"
$destinationPath = "C:\Path\To\Destination"

# Check if there are any files in the source directory
if (Test-Path "$sourcePath\*") {
    # Move files from source to destination
    Move-Item -Path "$sourcePath\*" -Destination $destinationPath -Force
    Write-Host "Files moved successfully."
} else {
    Write-Host "No files found in the source directory."
}

```
2. Test the PowerShell Script:
	- Run the script manually to ensure it executes as expected.

3. Open Task Scheduler:
	- Press Win + R to open the Run dialog.
	- Type taskschd.msc and press Enter to open the Task Scheduler.

4. Create a New Task:
	- In the Task Scheduler, select "Create Basic Task" or "Create Task" depending on your version of Windows.
	- Follow the wizard to set a name, description, and trigger for your task.

5. Configure the Action:
	- In the "Actions" tab, select "Start a program" as the action.
	- Set the "Program/script" field to powershell.exe.
	- In the "Add arguments (optional)" field, enter the full path to your PowerShell script.

Example:
	- Program/script: powershell.exe
	- Add arguments (optional): -File "C:\Path\To\Your\Script\MyScript.ps1"

6. Set Additional Options:
	- Configure additional settings like user account, permissions, and conditions under which the task should run.

7. Save and Test:
	- Save the scheduled task and manually run it to verify that it executes as expected.

By following these steps, you can schedule the execution of your PowerShell script at specified intervals using the Windows Task Scheduler. Ensure that the user account running the task has the necessary permissions to execute the PowerShell script and access any required resources.

- Source(s)
  - [ChatGPT](#)
