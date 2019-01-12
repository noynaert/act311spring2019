# git

## History

* [Linus Torvalds](https://en.wikipedia.org/wiki/Linus_Torvalds) ![Linus Torvalds](Torvalds.jpg)

## "git" is a "Version Control System"

* Stores "snapshots" of the files in your project.
* You can go back to previous versions, even if you have made changes to your files after that point
* Git makes it a lot easier to develop software on a team, or even by random outsiders
* Git is also useful for a developer working alone
  * Backup in case of system failure
  * Ability to test ideas
  * Ability to roll back to a stable edition
  * Documentation of the development process

## git vs github.com

* There are a lot of remote sites that allow you to move your local GIT to a remote server.
  * Bitbucket
  * Gitbucket
  * Github
  * Many companies use their own internal hosting sites.

### Purposes of remote sites

* Backup
* Sharing and coordination between developers.
* Distributing information to the public
* Servers like Github and Bitbucket provide nice web interfaces.
  * Private servers might or might not have those.  They still work fine, but you have to manipulate them using command line or remote GUI clients.

## The truth about learning GIT

* https://xkcd.com/1597/
  * Hover your mouse over the cartoon to get an accurate description of learning git
  * There is truth in the cartoon, at least about the learning process
  * GIT was developed by and for Linux kernal developers.  Those people are weird
  * It is true that you learn git by using it.  Don't be afraid if you feel overwhelmed at first.


## Install GIT

* https://git-scm.com/downloads
* Windows users, make sure you add gitbash
  

## Set user name and password

    git config --global user.email "xxx@missouriwestern.edu"
    git config --global user.name "Max Griffon"

## Create a github account 

* Go to https://github.com
* Create an account. *Use your @missouriwestern.edu email.* as the email address
* Request student access by going to https://education.github.com/pack and clicking **"Get Your Pack"**

## Repository

A Repository or repo is a project.

* First method: To create a project, go to the root folder of your project and do "git init"  (Do not do it now.)
* Second method: Create the repo on github.com.  Then clone the project to your own machine.  Github will automatically supply the code to copy paste to a terminal on your system
* Third method: Use the utilities built into VS Code, Intellij, Eclipse, or whatever IDE you are using.  This is often tempting, but I find it the most problem-prone.

## Important local files and directories

In *nix (including Linux and Mac OS) files that start with a . are hidden files.

* **.git**  This is where your repo resides.
  * Don't change anything manually in this directory
  * Deleting this folder effectively removes the repo, but it leaves all your other files intact
* **.gitIgnore**  These are files that should not be uploaded to the repo.
  * It is just a text file, with one file on each line
  * If you are using sftp, be sure to include sftp.json to your repository.  Otherwise your password will get uploaded to github.
    * Change your campus password immediately if that happens.
* **README.md** Every repo should have one of these
  * It can be a simple line of text that says what the project is.
  * Uses "markdown" syntax.  Plain text is valid markdown, so don't sweat markdown for now.
  * Later it can contain extensive documentation about the project.

## Terms

* ***origin*** The URL of the remote repo
* ***master*** The main branch.  If there is only one branch, that is the master.
  * I'll say it again.  Master is the main branch of your project. Sometimes I think of it as residing on my own machine when I am the only one on a project.  When working on a group project think of it as the main part of the group project.
  * Master of the repo should be deployable after you get to a release stage.  Another way to say it, it should be your best working code.
  * One of the mysterious commands for beginners is "git push origin master" moves the local master up to the remote URL.  You tend to do this at the beginning of the project.  After that you will probably be pushing named branches.
  * ***commit*** Basically a comment that identifies that change.  Standard advice is to use active voice.
. ***.gitignore*** This is a simple text file that lists files that should not be tracked by the repo.  Your sftp.json should be a line in .gitignore.  The .gitignore file should be in the root of your project.

## Some basic GIT operations

### Clone an existing repository

* Go to the repository on https:\\github.com
  * Click on the "Clone or Download" button
  * Select either "https" or "ssh"  If you don't know the difference, click https
  * Make a directory to hold your repo.  The repo will be a directory within this directory.  In this class's case, I suggest you make a folder called act311.  Then put the repo inside the act311 folder.  You can then make your own folders for this class next to the repo.
  * In your terminal window in the appropriate directory type "git clone https://github.com/noynaert/act311spring2019.git
  
### Creating a repo

There are several ways to make a repository.

IF you want to use github.com or some other remote repository host you will probably need to go there to create the repo.  Therefore I suggest that you use the first method below.  You will have to create the repo there anyway.

* Create it directly on github.com.
  * You may create a README.md if you wish.  You may also include a .gitignore file
    * If you are using SFTP, I suggest you immediately add the following line to your .gitIgnore
      * sftp.json
    * When you create a new repo github will give you a list of the commands you need to clone the repo to your local machine.
  * Create it with "git init" in a terminal window.
    * Create your README.md file and .gitIgnore file in an editor.
    * Go to github.com and create the repo there.  It will give you instructions for uploading an existing project.
  * Various GUI apps.

### Adding a file to the repository

To add a file:

      git add *filename*

To add all files

      git add .

The git add . is discouraged by a lot of people, but it is handy!

### Make a branch

"master" is the main branch.  In theory, Master should have the current deployable version of the code.  During development master should have the "best working" version of the code.

A "branch" in git lets you to split off from the "master" branch and do some side work.  It doesn't mess with master.  This is good for lot of things.

* Multiple people can work on the project, with each person working on their own branch.
* You can test new ideas on a branch.
* You can fix problems on the branch.  After you have tested the fix merge it back onto the master branch.

Branch names should have short, meaningful names with no spaces.  Github recommends hyphens instead of spaces.  https://github.com/agis/git-style-guide#branches

The command "git branch" shows the available branches.

Two methods:

#### Make a branch using Two commands
   
    git branch *branch-name*   
    git checkout *branch-name*

#### Make a branch using one command
   
    git checkout -b *branch-name*

#### My suggested method for your first branch (This just shows you the process)

    git branch
    git branch *branch-name*
    git branch
    git checkout *branch-name*
     *make the changes*
    git add *file names you changed*
    git commit 'commit message'
    git push
     *log onto github and see the results*
     *do a pull request from github.  Or do a git merge command from the command line.
    
### Status
    git status

## Github's Octocat

![Octocat](octocat.jpeg)

[The Octodex](https://octodex.github.com/)

![Hulu Loop Octocat](hula_loop_octodex03.gif)
