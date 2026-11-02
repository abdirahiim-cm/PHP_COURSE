
## Retrieving Submitted Data

- To collect form data, we use PHP superglobals with control name as index (associative array):
- $_GET: if form method is set to get.
- $_POST: if form method is set to post.
- $_REQUEST: if form method is set to either get or post.
- $_FILES: is used with upload file to collect file info.
- Important notes
- Superglobals are in uppercase letters. $_POST
- You can use single or double quotes with superglobals indexes. ['name']
- Form control names are case sensitive.


## Temporary Directory
- A temporary directory is a folder where PHP temporarily stores uploaded files before moving them to their final destination.
- PHP uploads a file in two stages: temporary storage and permanent storage.
- Also final storage directory must exist with the correct permissions.
- This means two things:
- The folder must exist: For example, the uploads folder must be created.
- PHP must have permission to write files: Otherwise, PHP cannot save the uploaded assignment into that folder.
- Initially files are uploaded into a temporary directory ("C:\xampp\tmp") and then relocated to a target destination by a PHP script.
- Information in the phpinfo.php page describes the default configurations of XAMPP server.


## Process of uploading files

- The user opens the page containing a HTML form featuring a browse button and a submit button.
- The user clicks the browse button and selects a file to upload from the local PC.
- The full path to the selected file appears in the text filed then the user clicks the submit button.
- The selected file is sent to the temporary directory on the server.
- The PHP script that was specified as the form handler in the form's action attribute checks that the - file has arrived and then copies the file into an intended directory.
- The PHP script confirms the success to the user.



## File Type & Permissions


- Explains two important concepts when uploading files using PHP:
- File Permissions: Whether PHP is allowed to save files in a folder.
- File Types: What kind of files users can upload, such as images, PDFs, or text files.

- As usual when writing files, it is necessary for both temporary and final locations to have permissions set that enable file writing. If either is set to be read-only then process will fail.
- An uploaded file could be a text file or image file or any document.


## Check file size

- To check for size of file, we can use size property of control. 
For example:
- if (!$_FILES['scertificate']['size'])
	echo ("File: ". $_FILES['scertificate']['name']. " is too big.");
- Remember:
- KB: size * 1024
- MB: size * 1024 * 1024
- For example, 100 * 1024 means a limit of 100 KB.



## Form Validation Checklist (1-2)

- Controls validation
- Isset (radio button, checkbox, and submit)
- Empty (textbox, password, dropdown menu, listbox, and textarea, file upload)
And with full stop (checkbox and listbox)
- Sort checkbox & listbox.
- Uppercase first latter (radio button, checkbox, dropdown menu, listbox)
- File extension

- File upload validation
- Size
- Already exists
- Uploaded file and name it as the username
- Display image on the screen after upload
- Upload multiple files
- Keep form data after submit and use a button to clear data
- And many more




