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
    release_note="Merge pull request #627 in SMP/jackfruit from feature/smp-8688-subscription-only-product to development

Squashed commit of the following:

commit 95c3e7abcb6e476b3fcb201fdf760234590081cc
Author: stanley <sli@revenuewire.com>
Date:   Thu May 4 15:04:40 2017 -0700

    SMP-8688 subscription only product

commit 6fe8e1cafa865520504dca6927e98532cfe95533
Merge: 91d44e0 9989d14
Author: stanley <sli@revenuewire.com>
Date:   Thu May 4 15:01:46 2017 -0700

    Merge branch 'development' into feature/smp-8688-subscription-only-product

commit 91d44e070dbcbf79893eda4ce2f89173795a76d2
Author: stanley <sli@revenuewire.com>
Date:   Tue May 2 12:11:23 2017 -0700

    SMP-8688 Subscription Only Product"
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

