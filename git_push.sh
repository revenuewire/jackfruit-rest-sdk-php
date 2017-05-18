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
    release_note="Merge pull request #707 in SMP/jackfruit from feature/SMP-8825-new to development

Squashed commit of the following:

commit bbb4f81752dae6d48a0991f091058240eb7ae3d1
Author: Leo Shen <lshen@lshen2.revenuewire.com>
Date:   Thu May 18 10:09:34 2017 -0700

    SMP-8825 Refactor Fixed Term Billing Cycles. Code review fix.

commit ad4cdf549d8de4168eac0c88ff0481d004a6c075
Merge: 06204b9 73fa8c1
Author: Leo Shen <lshen@lshen2.revenuewire.com>
Date:   Thu May 18 10:04:14 2017 -0700

    Merge branch 'development' into feature/SMP-8825-new

commit 06204b9c9a652156870c57d24fd2c01586d4debd
Author: Leo Shen <lshen@lshen2.revenuewire.com>
Date:   Wed May 17 16:00:18 2017 -0700

    SMP-8825 Refactor Fixed Term Billing Cycles"
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

