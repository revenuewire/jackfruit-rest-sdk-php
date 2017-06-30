#!/bin/sh
# ref: https://help.github.com/articles/adding-an-existing-project-to-github-using-the-command-line/
#
# Usage example: /bin/sh ./git_push.sh wing328 swagger-petstore-perl "minor update"

git_user_id=$1
git_repo_id=$2
release_note=$3

if [ "$git_user_id" = "" ]; then
    git_user_id="revenuewire"
    echo "[INFO] No command line input provided. Set \$git_user_id to $git_user_id"
fi

if [ "$git_repo_id" = "" ]; then
    git_repo_id="jackfruit-rest-sdk-php"
    echo "[INFO] No command line input provided. Set \$git_repo_id to $git_repo_id"
fi

if [ "$release_note" = "" ]; then
    release_note="Merge pull request #915 in SMP/jackfruit from feature/SMP-8973 to development

Squashed commit of the following:

commit 9bcee3a956b396caeea2bed4b4633a3112712813
Author: arook <arook@revenuewire.com>
Date:   Fri Jun 30 14:30:05 2017 -0700

    SMP-8973: review fixes

commit 104bb3c87b80cecfc36616e4c718507b7af91958
Author: arook <arook@revenuewire.com>
Date:   Fri Jun 30 12:40:37 2017 -0700

    review fix

commit be5aa16cdf6c368788d6d4b1e850380c91823b72
Merge: 4629f1e 203e327
Author: arook <arook@revenuewire.com>
Date:   Fri Jun 30 12:25:41 2017 -0700

    Merge branch 'development' into feature/SMP-8973

commit 4629f1e4be8d509420658604c2bec2e3d68c693a
Author: arook <arook@revenuewire.com>
Date:   Thu Jun 29 10:19:11 2017 -0700

    SMP-8973: login, forgot password, and reset password pages changes"
    echo "[INFO] No command line input provided. Set \$release_note to $release_note"
fi

# Initialize the local directory as a Git repository
git init

# Adds the files in the local repository and stages them for commit.
git add .

# Commits the tracked changes and prepares them to be pushed to a remote repository.
git commit -m "$release_note"

# Sets the new remote
git_remote=`git remote`
if [ "$git_remote" = "" ]; then # git remote not defined

    if [ "$GIT_TOKEN" = "" ]; then
        echo "[INFO] \$GIT_TOKEN (environment variable) is not set. Using the git crediential in your environment."
        git remote add origin https://github.com/${git_user_id}/${git_repo_id}.git
    else
        git remote add origin https://${git_user_id}:${GIT_TOKEN}@github.com/${git_user_id}/${git_repo_id}.git
    fi

fi

git pull origin master

# Pushes (Forces) the changes in the local repository up to the remote repository
echo "Git pushing to https://github.com/${git_user_id}/${git_repo_id}.git"
git push origin master 2>&1 | grep -v 'To https'

