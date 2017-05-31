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
    release_note="Merge pull request #771 in SMP/jackfruit from feature/SMP-8552-dev5 to development

Squashed commit of the following:

commit e0d7577cab35a2dff9f68ea2c1627f66efc03618
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Tue May 30 11:34:55 2017 -0700

    SMP-8552 clean up

commit c7f28d338bfdd8b41212afb26f4f16aae0d8665e
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Tue May 30 11:30:42 2017 -0700

    SMP-8552 add shipping address to offers

commit 9f534823d6bc573f79ae8277cc132aab76e93f08
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Mon May 29 16:53:40 2017 -0700

    SMP-8552 swagger update

commit 91e904157ca50e87f946477147b3950519f45662
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Mon May 29 16:03:28 2017 -0700

    SMP-8552

commit f0e5d641e01980845edd7c0052d9f43f6e7c8291
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

