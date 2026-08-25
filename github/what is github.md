# What is GitHub?

## Definition

**GitHub** is a web-based platform and version control system built on **Git** that allows developers to:
- Store and manage code repositories
- Collaborate with other developers
- Track changes in code
- Manage project workflows and issues
- Share and review code

GitHub serves as a central hub for open-source and private projects, enabling teams to work together efficiently on software development projects.

---

## GitHub Commands and Examples

### 1. **Initial Setup**

#### Configure Git Identity
```bash
git config --global user.name "Your Name"
git config --global user.email "your.email@example.com"
```

#### Check Configuration
```bash
git config --list
```

---

### 2. **Repository Creation and Cloning**

#### Initialize a New Repository
```bash
git init
```

#### Clone a Repository
```bash
git clone https://github.com/username/repository.git
git clone https://github.com/username/repository.git my-folder
```

---

### 3. **Basic Git Commands**

#### Check Repository Status
```bash
git status
```

#### Add Files to Staging Area
```bash
git add file.txt              # Add specific file
git add .                     # Add all changes
git add *.js                  # Add all JS files
```

#### Commit Changes
```bash
git commit -m "Add new feature"
git commit -m "Fix bug in login function"
git commit --amend            # Modify last commit
```

#### View Commit History
```bash
git log                       # Show all commits
git log --oneline             # Show commits in one line
git log -n 5                  # Show last 5 commits
git log --author="John"       # Show commits by author
git log --graph --oneline --all  # Show branch graph
```

---

### 4. **Branching**

#### List Branches
```bash
git branch                    # List local branches
git branch -a                 # List all branches (local and remote)
```

#### Create a Branch
```bash
git branch feature/new-login
git checkout -b feature/new-login  # Create and switch to new branch
git switch -c feature/new-login    # Modern way (Git 2.23+)
```

#### Switch Between Branches
```bash
git checkout main
git switch main               # Modern way
```

#### Delete a Branch
```bash
git branch -d feature/old-feature     # Delete local branch
git branch -D feature/old-feature     # Force delete
git push origin --delete feature/old-feature  # Delete remote branch
```

#### Rename a Branch
```bash
git branch -m old-name new-name
```

---

### 5. **Remote Repository Operations**

#### View Remote Repositories
```bash
git remote                    # Show remote names
git remote -v                 # Show remote URLs
git remote show origin        # Show details of origin
```

#### Add a Remote Repository
```bash
git remote add origin https://github.com/username/repository.git
```

#### Remove a Remote
```bash
git remote remove origin
```

#### Fetch from Remote
```bash
git fetch                     # Fetch from all remotes
git fetch origin              # Fetch from specific remote
git fetch origin main         # Fetch specific branch
```

#### Pull from Remote
```bash
git pull                      # Fetch and merge
git pull origin main
git pull --rebase             # Fetch and rebase instead of merge
```

#### Push to Remote
```bash
git push                      # Push to default branch
git push origin main          # Push specific branch
git push origin feature/new-feature
git push -u origin main       # Push and set upstream (-u)
git push --all                # Push all branches
git push origin --delete feature/old-feature  # Delete remote branch
```

---

### 6. **Merging and Rebasing**

#### Merge Branches
```bash
git checkout main
git merge feature/new-login   # Merge feature into main
git merge --squash feature/new-login  # Squash commits before merging
```

#### Rebase Branches
```bash
git rebase main               # Rebase current branch on main
git rebase -i HEAD~3          # Interactive rebase last 3 commits
```

#### Abort Merge or Rebase
```bash
git merge --abort
git rebase --abort
```

---

### 7. **Stashing Changes**

#### Save Changes Without Committing
```bash
git stash                     # Stash all changes
git stash save "Description"  # Stash with description
git stash list                # List all stashes
git stash pop                 # Apply and remove stash
git stash apply               # Apply stash without removing
git stash drop                # Delete a stash
```

---

### 8. **Viewing Changes**

#### Diff Commands
```bash
git diff                      # Show unstaged changes
git diff --staged             # Show staged changes
git diff main feature/new-login  # Compare branches
git diff HEAD~1               # Compare with previous commit
```

#### Show Commit Details
```bash
git show commit-hash
git show HEAD                 # Show last commit
```

---

### 9. **Undoing Changes**

#### Discard Changes in Working Directory
```bash
git checkout -- file.txt      # Discard changes in specific file
git restore file.txt          # Modern way
```

#### Unstage Files
```bash
git reset HEAD file.txt       # Unstage file
git restore --staged file.txt # Modern way
```

#### Revert a Commit (Create New Commit)
```bash
git revert commit-hash
```

#### Reset to Previous Commit
```bash
git reset --soft HEAD~1       # Keep changes staged
git reset --mixed HEAD~1      # Keep changes unstaged (default)
git reset --hard HEAD~1       # Discard all changes
```

---

### 10. **Tags**

#### Create a Tag
```bash
git tag v1.0.0
git tag -a v1.0.0 -m "Release version 1.0.0"  # Annotated tag
```

#### List Tags
```bash
git tag
git tag -l "v1.*"
```

#### Push Tags
```bash
git push origin v1.0.0        # Push specific tag
git push origin --tags        # Push all tags
```

#### Delete Tags
```bash
git tag -d v1.0.0             # Delete local tag
git push origin --delete v1.0.0  # Delete remote tag
```

---

### 11. **Collaboration**

#### Fork a Repository
- Click "Fork" button on GitHub (Web Interface)

#### Create a Pull Request
- After pushing to your branch, click "Compare & pull request" on GitHub

#### Sync Fork with Original Repository
```bash
git remote add upstream https://github.com/original-owner/repository.git
git fetch upstream
git checkout main
git merge upstream/main
```

#### Cherry-pick a Commit
```bash
git cherry-pick commit-hash   # Apply specific commit to current branch
```

---

### 12. **Useful Utility Commands**

#### Clean Up Untracked Files
```bash
git clean -fd                 # Remove untracked files and directories
git clean -fdx                # Also remove ignored files
```

#### Search in Repository
```bash
git grep "search-term"        # Search in tracked files
```

#### Show Who Changed What
```bash
git blame file.txt            # Show commit info for each line
```

#### Create an Alias
```bash
git config --global alias.st status
git config --global alias.co checkout
git config --global alias.br branch
git config --global alias.ci commit
```

---

## Common GitHub Workflow Example

```bash
# 1. Clone repository
git clone https://github.com/username/repository.git
cd repository

# 2. Create and switch to new branch
git checkout -b feature/new-feature

# 3. Make changes to files
# Edit files...

# 4. Stage changes
git add .

# 5. Commit changes
git commit -m "Add new feature"

# 6. Push to remote
git push -u origin feature/new-feature

# 7. Create pull request on GitHub (via web interface)

# 8. After review and approval, merge to main
git checkout main
git pull origin main
git merge feature/new-feature
git push origin main

# 9. Delete feature branch
git branch -d feature/new-feature
git push origin --delete feature/new-feature
```

---

## Important GitHub Concepts

- **Repository**: A folder that contains your project files and Git history
- **Commit**: A snapshot of changes made to files
- **Branch**: A parallel version of the repository
- **Pull Request (PR)**: A proposal to merge changes from one branch to another
- **Fork**: A personal copy of someone else's repository
- **Clone**: Download a repository to your local machine
- **Push**: Send commits to remote repository
- **Pull**: Fetch and merge changes from remote repository
- **Merge**: Combine changes from two branches
- **Conflict**: When Git can't automatically merge changes



## github all commands 

```bash
   git init
   git add .
   git commit -m '21-01-2026 all uploaded' 
   git config --global user.name "Your Name"
   git config --global user.email "your.email@example.com"
   git remote add origin https://github.com/Brijesh1990/tops_php_12am.git
   git push -u origin master 

```

