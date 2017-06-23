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
    release_note="Merge pull request #878 in SMP/jackfruit from feature/SMP-5921 to development

Squashed commit of the following:

commit 25330aa63ef706767f9408a1b149119f50d3bdcb
Author: Leo Shen <lshen@lshen2.revenuewire.com>
Date:   Fri Jun 23 08:50:59 2017 -0700

    SMP-5921 API Refund update. Pull out paypal direct unit test again because paypal sandbox is not stable.

commit 1230e36688fb2ba2ca0ff70429f2b2db6b427552
Author: Leo Shen <lshen@lshen2.revenuewire.com>
Date:   Thu Jun 22 17:05:53 2017 -0700

    SMP-5921 update refund api. Enable paypal test again.

commit 0d551cd433d70b739fb1aa2e213b26be05aa99d2
Merge: 3482906 e049138
Author: Leo Shen <lshen@lshen2.revenuewire.com>
Date:   Thu Jun 22 17:02:38 2017 -0700

    Merge branch 'development' into feature/SMP-5921

commit 3482906dfe1bf66aaedd17eb5d14b193b34e51b6
Author: Leo Shen <lshen@lshen2.revenuewire.com>
Date:   Thu Jun 22 13:50:57 2017 -0700

    SMP-5921 API Refund Interface: Selective Persist Recurring Profile if Refund Initiated"
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

