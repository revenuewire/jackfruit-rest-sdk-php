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
    release_note="Merge pull request #767 in SMP/jackfruit from feature/SMP-8552-dev5 to development

Squashed commit of the following:

commit 9dba5d42d0caf86ea93dc9dda6415c780303d5d2
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Tue May 30 09:26:01 2017 -0700

    SMP-8552 swagger update

commit e83886dd357d0e7be3639e3ea05150c3b7669ea2
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Mon May 29 16:53:40 2017 -0700

    SMP-8552 swagger update

commit a588118641bdcb32cd28941e951db98913457cba
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Mon May 29 16:03:28 2017 -0700

    SMP-8552

commit 6eefb13ec78337acba6d74dc7f7d7a32c0b9e754
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Mon May 29 16:01:49 2017 -0700

    SMP-8552 shipping address API update"
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

