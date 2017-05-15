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
    release_note="Merge pull request #678 in SMP/jackfruit from feature/SMP-8552-dev3 to development

Squashed commit of the following:

commit eb3badb12cbf0e3bde296822fb2f61143363d206
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Mon May 15 14:02:31 2017 -0700

    SMP-8552 user creat API fix

commit 4c20e41a13a6389231688d14783b53619dd05575
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Mon May 15 12:32:44 2017 -0700

    SMP-8552 typo

commit 066193e3fcf0663eed240e32e1d59b46a5be0751
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Mon May 15 12:31:24 2017 -0700

    SMP-8552 swagger doc update

commit e975c2079b09c522b5e449b8670ed95dacb20b13
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Mon May 15 09:54:46 2017 -0700

    SMP-8552 billing info update API fixes"
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

