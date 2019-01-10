<style>.red {color:red;font-weight:bold;}
.code{font-family:"Lucida Console", Monaco, monospace; font-weight:bold}
</style>

# Terminal Operations

<p class=red>The one near-universal rule of Terminal Operations:  Blank spaces in file names are 👿 evil 👿</p>

* **shell**: a user interface for access to an operating system's services.
* Command Line Interface (CLI) vs GUI
* In common use, Shell refers to a command-line Interface
* Unix Shells (Mac and Linux)
  * **Bash** is the most common by far on current systems
* Windows shells
  * cmd -- Goes back to MS-DOS
  * PowerShell
  * bash
  * gitbash -- comes with github

## Command Line

Unix systems are case sensitive.  Windows shells are not case sensitive.  Bash on Windows can get wierd.

Most of the time you type a command first.  Often there are options (or switches) and arguments.

One big advantage bash has over cmd is that bash has a much more powerful scripting language build in.  It also has a much richer set of native commands to draw on.  Powershell was Microsoft's attempt to build something like bash, but it never caught on.

## File Systems

### Windows

Each drive gets a letter, like C:

Originally Windows used the \ to separate directories.  But now in many situations either / or \ may be used.  Bash shells on Windows generally use / as a separator.

User home directories are found at C:\users\...

### Unix

There are no drive designations.  If there is more than one device it just lools like a folder.  For example, if I plug in a USB device named NOYNAERT it appears in <spam class="code">/media/NOYNAERT</span>

User home directory is at /home/...

On unix type systems ~ is a shorthand for the user's home directory.

## Directories or Folders

Directory, subdirectory, and folder generally mean the same thing.  The terms have been used by different times by different operating systems.

### Symbols

* / or \ by itself is the root
* . is "this directory"
* .. is "the parent directory"
* ../.. is the grandparent directory

#### A distinction

Let's say you have all your picture files in a directory called "images" that is immediately below this one.  The preferred way of referring to the images directory is <span class="code">./images/file.png</span>  A simple <span class="code">images/file.png</span> would work, but it can be ambiguous.  

Why would this be a problem? <span class="code">/images/file.png</span>

## Common Commands

| Meaning                                      | Bash  | cmd and Powershell |
| -------------------------------------------- | ----- | ------------------ |
| Change Directory                             | cd    | cd                 |
| Create a file                                | touch | --                 |
| Make Directory                               | mkdir | md *or* mkdir      |
| Remove Directory                             | rmdir | rm *or* rmdir      |
| Remove a File                                | rm    | del                |
| Recursively remove all files and directories | rm -r | del                |
| List Directory                               | ls    | dir                |
| List a text file                             | cat   | type               |
| Present Working Directory                    | pwd   | pwd (I think)      |
| Rename a file                                | mv    | rename             |
| Copy a file                                  | cp    | copy               |
| Clear the screen                             | clear | cls                |

## Bash in VS Code in Windows

We should be able to set Bash as the shell in VS Code on Windows.  The following steps might work.

Go to File --> Preferences --> Settings, Then pick Features and Terminal. Then find the option for "External: Windows Exec."  

If you have the Linux Integrated Subsystem installed, enter the following.

    C:\\Windows\\sysnative\\bash.exe

If you don't have the Linux Subsystem you can use gitbash.
    
    C:\\Program Files\\Git\\bin\\bash.exe



## Some tutorials

* [82 part tutorial](https://www.youtube.com/playlist?list=PLS1QulWo1RIb9WVQGJ_vh-RQusbZgO_As)
* [Nixie Pixel video](https://www.youtube.com/watch?v=q7-aEspwwEI) I think she probably drinks too much caffein, but you might benefit by watching what she does.

## Editors

Generally we will just use a gui editor, but there are native editors built into linux.  Sometimes you just need them.

* nano:  This is a fairly new editor, but it is on most unix systems.  It has a menu at the bottom.  ^ means press the Ctrl key.
* vi  or vim:  This is the old-time unix editor.  It is very weird because it was written to use on old-style dumb terminals that did not even have arrow keys.  I am an old-timer, and I am weird, so I tend to use it.  When you see me do "vi" or "vim" just do nano.

## Pasting into the terminal

* Windows used to be hard because you needed to use the Edit option.  [This link](https://www.laptopmag.com/articles/how-to-windows-10-command-prompt-copy) shows how to make it easier in Windows 10.