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
    release_note="Merge pull request #812 in SMP/jackfruit from feature/SMP-5937-revert to development

Squashed commit of the following:

commit 4300855b0cd5f67227854e34004461e8f8051e07
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Fri Jun 9 09:48:54 2017 -0700

    Revert feature/SMP-5937

    This reverts commit dda4dc68fff8ef19cf9f2f86b0995dcaf1acb691.

commit 635ec8a831911ae727158fa415296a14b8cc25bc
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Fri Jun 9 09:48:34 2017 -0700

    Revert feature/SMP-5937

    This reverts commit c78945880407a743ac783eb3ab7debfe368bfa5b.

commit 8646b5a8e1224fb7167fe0a1e0228a7e6d0919af
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Fri Jun 9 09:48:07 2017 -0700

    Revert feature/SMP-5937

    This reverts commit b8aa573cf83699ad10fa1684a69c36c2506fcb23."
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

