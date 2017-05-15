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
    release_note="Merge pull request #676 in SMP/jackfruit from feature/SMP-8557-fix-log to development

Squashed commit of the following:

commit ddeefdb54948c63819970a106a381d81fa14381f
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Mon May 15 08:47:25 2017 -0700

    SMP-8557: log fix

commit 8a97fae1c374d2664686b508ff45b848632e5f07
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri May 12 16:43:18 2017 -0700

    SMP-8557: remove log with s3 and dynamo, using filesystem instead

commit 08dfc14f54dcdfbdef07978f99950d7a19c80bf5
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri May 12 16:16:58 2017 -0700

    SMP-8557: fix log issue"
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

