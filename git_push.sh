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
    release_note="Merge pull request #800 in SMP/jackfruit from feature/SMP-8112-fix to development

Squashed commit of the following:

commit 8cd6a05ef3ba9e693963bcd93e3c14d491daabd3
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 15:24:33 2017 -0700

    SMP-8112: fix commets

commit 47bc0384dfd448593a542b7561442d5f45b1a77a
Merge: db94858 b3d453e
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 15:23:46 2017 -0700

    Merge remote-tracking branch 'origin/development' into feature/SMP-8112-fix

    * origin/development:
      Merge pull request #796 in SMP/jackfruit from feature/SMP-8899 to release/0-blue
      Merge pull request #799 in SMP/jackfruit from feature/SMP-8855-fix to release/1-staging
      Merge pull request #798 in SMP/jackfruit from feature/smp-8888-rebranch to release/1-staging

commit db948588aad749617749bdfe5cc16d3c12bd3d13
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 12:00:41 2017 -0700

    SMP-8112: fix the expire date"
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

