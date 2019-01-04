# GIT

## History

* [Linus Torvalds](https://en.wikipedia.org/wiki/Linus_Torvalds) ![Linus Torvalds](Torvalds.jpg)

## GIT is a "Version Constrol System"

* Stores "snapshots" of the files in your project.
* You can go back to previous versions, even if you have made changes to your files after that point

## GIT vs github.com

There are a lot of remote sites that allow you to move your local GIT to a remote server.

* Backup
* Sharing and coordination between developers.
* Distributing information to the public
* Github.com is one site that holds repositories, but it isn't the only one.
  * Bitbucket
  * Private GIT servers
* Servers like Github and Bitbucket provide nice web interfaces.
  * Private servers might not have those.  They still work fine, but you have to manipulate them using command line or remote GUI clients.

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

To create a project, go to the root folder of your project and do "git init"  (Do not do it now.)

## Terms

* ***origin*** The URL of the remote repo
* ***master*** The main branch.  If there is only one branch, that is the master.
  * Master of the repo should be deployable after you get to a release stage.  Another way to say it, it should be your best working code.
  * ***commit*** Basically a comment that identifies that change.  Standard advice is to use active voice.
. ***.gitignore*** This is a simple text file that lists files that should not be tracked by the repo.  Your sftp.json should be a line in .gitignore.  The .gitignore file should be in the root of your project.






## Github's Octocat

![Octocat](octocat.jpeg)

[The Octodex](https://octodex.github.com/)

![Hulu Loop Octocat](hula_loop_octodex03.gif)
