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
    release_note="Merge pull request #652 in SMP/jackfruit from feature/smp-8803-pwd-enhancement to development

Squashed commit of the following:

commit c34cb4ffe48f28d45852cd128e25a7a7ce5c8d46
Author: stanley <sli@revenuewire.com>
Date:   Tue May 9 10:25:22 2017 -0700

    SMP-8803 pwd enhancement

commit ec9661fc00086dc6443a3cf6bc0b24ca9d4f2b33
Merge: d737083 fded461
Author: stanley <sli@revenuewire.com>
Date:   Tue May 9 10:24:08 2017 -0700

    Merge branch 'development' into feature/smp-8803-pwd-enhancement

commit d737083f9abf0f5db0e26f6707d56434bdff4133
Author: stanley <sli@revenuewire.com>
Date:   Mon May 8 14:39:51 2017 -0700

    SMP-8803 add validation

commit 1677e677ec43ae5bd5f4a3114cd05fbaca8c3b9a
Author: stanley <sli@revenuewire.com>
Date:   Mon May 8 13:32:15 2017 -0700

    SMP-8803 temporary password"
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

