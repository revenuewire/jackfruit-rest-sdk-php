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
    release_note="Merge pull request #726 in SMP/jackfruit from feature/RSPO-34 to development

Squashed commit of the following:

commit 253b27025f8f5809e609324f361d4c083b799218
Merge: f6daa69 40b988b
Author: Leo Shen <lshen@lshen2.revenuewire.com>
Date:   Wed May 24 13:53:01 2017 -0700

    Merge branch 'development' into feature/RSPO-34

commit f6daa695ac6a7cfc708d75a56dd41c5f07bd0a62
Author: Leo Shen <lshen@lshen2.revenuewire.com>
Date:   Wed May 24 13:26:44 2017 -0700

    RSPO-34 Updates to /customers/{customerId}/billing-info/{billingInfoId} API. Update codes according to code review.

commit 813e592bb1c310db4a76591e911c82caf2c4181e
Author: Leo Shen <lshen@lshen2.revenuewire.com>
Date:   Fri May 19 10:17:16 2017 -0700

    RSPO-34 Updates to /customers/{customerId}/billing-info/{billingInfoId} API"
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

