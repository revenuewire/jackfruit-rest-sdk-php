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
    release_note="Merge pull request #874 in SMP/jackfruit from feature/SMP-8754 to development

Squashed commit of the following:

commit 0e9c41df526f57015c87991ca4189971270f6c90
Merge: e81e2a5 f243eb9
Author: arook <arook@revenuewire.com>
Date:   Tue Jun 27 11:21:08 2017 -0700

    Merge branch 'development' into feature/SMP-8754

    Conflicts:
    	package.json

commit e81e2a556ab0b459c7034df97012a003a7810fa9
Author: arook <arook@revenuewire.com>
Date:   Fri Jun 23 09:23:37 2017 -0700

    SMP-8754: review fixes

commit a782d619d29c1743f3cf6e59ac730c414315f1ed
Merge: cd7189e e049138
Author: arook <arook@revenuewire.com>
Date:   Fri Jun 23 07:09:22 2017 -0700

    Merge branch 'projects/UAC' into feature/SMP-8754

    Conflicts:
    	library/RWAPI/Revenuewire/classes/CallStreamSystem/UserPeer.php
    	package.json
    	react-apps/portal/components/ToastAlert.jsx

commit cd7189e751b66ab131e1d418d1e4add0ba03fe0c
Author: arook <arook@revenuewire.com>
Date:   Thu Apr 20 16:16:46 2017 -0700

    SMP-8754, SMP-6036: login page, reset password page, and forgot password page react conversion and style update

    Conflicts:
    	library/RWAPI/Revenuewire/classes/CallStreamSystem/UserPeer.php
    	package.json"
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

