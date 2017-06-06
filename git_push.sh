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
    release_note="Merge pull request #793 in SMP/jackfruit from feature/smp-8246-cpa-credit-report to development

Squashed commit of the following:

commit da8f0556be093b7ab7eb44b78f60497d946b3b02
Author: stanley <sli@revenuewire.com>
Date:   Tue Jun 6 12:17:06 2017 -0700

    SMP-8246 cpa credit report

commit 4bf0663c68b71e1e5e87abc2a65af39198e0f274
Merge: f60a6b9 48b38e5
Author: stanley <sli@revenuewire.com>
Date:   Tue Jun 6 12:16:20 2017 -0700

    Merge branch 'development' into feature/smp-8246-cpa-credit-report

commit f60a6b9d8be3a16070ecf8ec7b547f03713b2ba6
Author: stanley <sli@revenuewire.com>
Date:   Tue Jun 6 09:24:32 2017 -0700

    SMP-8246 Cpa Credit Report"
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

