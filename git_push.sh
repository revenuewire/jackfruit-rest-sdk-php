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
    release_note="Merge pull request #810 in SMP/jackfruit from feature/SMP-8897 to development

Squashed commit of the following:

commit 4c0d74572afd6a631f341d735318311466529eeb
Merge: 225dcc5 92d2c77
Author: Leo Shen <lshen@lshen2.revenuewire.com>
Date:   Fri Jun 9 12:17:59 2017 -0700

    Merge branch 'development' into feature/SMP-8897

commit 225dcc5d096f106e42ccf48effeab14ca24023f5
Merge: e0fea02 d9a913f
Author: Leo Shen <lshen@lshen2.revenuewire.com>
Date:   Fri Jun 9 08:51:56 2017 -0700

    Merge branch 'development' into feature/SMP-8897

commit e0fea02518d80fc38a547d558482c16d1a2af8f6
Author: Leo Shen <lshen@lshen2.revenuewire.com>
Date:   Thu Jun 8 14:01:35 2017 -0700

    SMP-8897 Cart 2.0: Displayed currency and billed currency not the same"
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

