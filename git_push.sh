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
    release_note="Merge pull request #708 in SMP/jackfruit from feature/SMP-8552-dev3 to development

Squashed commit of the following:

commit 1ad4023cae10b7619a6326d55ff43571fc56ee87
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Wed May 17 17:27:47 2017 -0700

    SMP-8552 naming change

commit 51dc9df0f5206746e59ac86de983558f139bd6c2
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Wed May 17 17:22:44 2017 -0700

    SMP-8552 naming update to account setting API

commit d9fef90596c697fc160f0d597933396ab1a233c9
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Mon May 15 12:32:44 2017 -0700

    SMP-8552 typo

commit 7f95b6c6af429ce3f496d5ec78ecfaf52db506a4
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Mon May 15 12:31:24 2017 -0700

    SMP-8552 swagger doc update"
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

