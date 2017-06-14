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
    release_note="Merge pull request #801 in SMP/jackfruit from feature/SMP-8685 to development

SMP-8685 worldpay renewals failing because of new non-recurring purchase by the same customer

Squashed commit of the following:

commit 5f5f60649dd858601d941fd7adacd465681ba7c0
Merge: 1c3392b 659696b
Author: Jeff Richards <jrichards@revenuewire.com>
Date:   Tue Jun 13 12:37:37 2017 -0700

    Merge branch 'development' of http://git.rw.app:7990/scm/smp/jackfruit into feature/SMP-8685

commit 1c3392b70283bc2838f5991ac2122fe5fc11eea4
Author: Jeff Richards <jrichards@revenuewire.com>
Date:   Thu Jun 8 12:16:03 2017 -0700

    SMP-8685 adjust PagBrasil to avoid the same mistake that the WorldPayProcessor had

commit e4f4f6eff4801a99146f70baf86b28928c1050d4
Author: Jeff Richards <jrichards@revenuewire.com>
Date:   Wed Jun 7 13:15:20 2017 -0700

    SMP-8685 worldpay renewals failing because of new non-recurring purchase by the same customer"
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

