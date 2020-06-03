## TEAM STORM

Welcome to development branch 

**To get started:**

Make sure you are on a desktop or laptop 

**Step 1:** Click on Fork at the top right corner

**Step 2:** Click on clone or download, copy the url you see after clicking on it

**Step 3:** Head to your local machine and create a folder, (this step is not necessary but to keep your work organized on your local machine, you can create folder called 'github repo' on your desktop).

**Step 4:** Open your preferred terminal

Here you have arrays of choice, you could use git bash (you have to download it to use it. Download it here -> [GitHub]https://git-scm.com/downloads)), powershell or your default window terminal. 

**If you want to use git bash:**
***4.1*** Open the 'github repo' folder, remember you saved it on your desktop.
Right-click anywhere in the folder and choose 'git bash here', automatically git bash will open.

***If you want to use the terminal**
***4.2*** press Window + R on your keyboard

**Step 5:**```git clone pasteTheUrlOfTheLinkYouCopiedInStep2```

It should look like this
```git clone https://github.com/{yourGithubUsername}/HNG_storm-task.git```

**Step 6:** To start your work, work the directory that contains the project files.
```cd HNG_storm-task```

**Note:** you will be on the Master branch automatically.
You need to move out of the Master branch to another branch to start your work.

To move to another branch

Run: ```git checkout -b script/<nameOfBranch>```

You can use any name for your branch.
But for consistency and orderliness, use your slack username

**IE:** <nameOfBranch> should be replaced with your slack username, use hypen where you will normally use space. That is if you have space in your username. I don't think anybody does. If you do though, use hypen(-)

For example, 
```git checkout -b script/joshua-folorunsho``` ✅
```git checkout -b script/joshua folorunsho``` ❌

Open the project file with your favourite code editor (Sublime, VSCode, Atom, etcetera).
Navigate to the testScripts folder and create a new file with your slack username.exetension.

For example:
```__josh.js__```
```__josh.php__```
```__josh.py__```

For now, you can only use three different programming languages.
### Python, PHP, and JavaScript

No mater how complicated your code is, your output must talic with the below format and must be logged to the console. 

"Hello World, this is [firstName] [lastname] with HNGi7 ID [HNG-0000] using [PHP] for stage 2 task. joshuafolorunsho01@gmail.com"

The square brackets are very ***Important***. Don't leave them out.

If you have Xampp or Wampp on your local machine, you can test your code to see if it works(pass) or not(fail).
If you don't have any on your machine. You can watch this youtube video (https://www.youtube.com/watch?v=TjFRTkw6GDQ)

Once you are done writing the script and you have tested that everything is working perfectly fine (I.e your code has passed). (Optional: If you could make a screenshot of it and attach your pull request) 

Run: ```git add .```
Run: ```git commit -m "chore: create script"```

```git push origin script/username``` 

In my case, it would be
```git push origin script/__josh__``` - (***Notice how it ends with the branch you created earlier***).

**Creating Pull requests**

PR === Pull request

Go to github.com, locate the repository you forked in ***step 1***

As soon as you get there, you are going to see a green 'compare and create a pull request'

Click on it, and create a pull request. I will merge as soon as possible

If you have any more questions if check out this resource -> https://www.youtube.com/watch?v=HbSjyU2vf6Y or find my username and chat me up on slack ``__josh__``. I will try and reply ASAP. Thanks!
