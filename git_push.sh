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
    release_note="Merge pull request #916 in SMP/jackfruit from feature/SMP-8929 to development

Squashed commit of the following:

commit 2a75def3a750a58b08050987c6e710537ce18b15
Author: lcabal <lcabal@revenuewire.com>
Date:   Wed Jul 5 08:34:20 2017 -0700

    SMP-8929 Code review fixes

commit b1bb747d871f287dda5e47d71a6ea32de9fef40e
Author: lcabal <lcabal@revenuewire.com>
Date:   Tue Jul 4 09:24:04 2017 -0700

    SMP-8929 Category Level Redirect is not showing upon saving the newly created CPA offer

commit 8389d260380e5237a91eb62b7d29e1afb5e32e0b
Author: lcabal <lcabal@revenuewire.com>
Date:   Tue Jul 4 09:21:58 2017 -0700

    SMP-8929 Category Level Redirect is not showing upon saving the newly created CPA offer"
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

