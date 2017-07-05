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
    release_note="Merge pull request #930 in SMP/jackfruit from feature/SMP-8994-fix to development

Squashed commit of the following:

commit 0b5810454891a11d211b66d840b0d3fa37fc4247
Merge: 9c8fcf1 70fd1f7
Author: lcabal <lcabal@revenuewire.com>
Date:   Wed Jul 5 13:38:22 2017 -0700

    SMP-8994 fix merge conflict in development

commit 70fd1f7bf2c34512d2f87e38311008067508fa57
Author: Lawrence Cabal <lcabal@revenuewire.com>
Date:   Wed Jul 5 20:04:43 2017 +0000

    Merge pull request #928 in SMP/jackfruit from feature/SMP-8994 to release/1-staging

    Squashed commit of the following:

    commit fc8ae611e3857cdd5b5e29ec742dc16b035dff66
    Author: lcabal <lcabal@revenuewire.com>
    Date:   Wed Jul 5 12:23:55 2017 -0700

        SMP-8994 turn off auto complete"
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

