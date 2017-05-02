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
    release_note="Merge pull request #630 in SMP/jackfruit from feature/SMP-8552-dev to development

Squashed commit of the following:

commit 502006b3c8c03038c344396a241087662548911d
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Tue May 2 14:35:18 2017 -0700

    SMP-8552 last bill date

commit d0505b372ad71baaa2eb3091b3c57e4c08e6bcf7
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Tue May 2 14:19:55 2017 -0700

    SMP-8552 clean up

commit 17b60da730df088cc39d0f0b9b3d42ab2d1804e0
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Tue May 2 14:18:09 2017 -0700

    SMP-8552 last billing date

commit 507be7fbb8434a29341abe32aa1bf767491441ed
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Fri Apr 28 10:03:24 2017 -0700

    SMP-8552 clean up

commit be517cc6cf2881ba787dfbd6130016a244a77c46
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Fri Apr 21 16:24:33 2017 -0700

    phones fix"
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

