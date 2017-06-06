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
    release_note="Merge pull request #795 in SMP/jackfruit from feature/SMP-8856 to development

Squashed commit of the following:

commit 3e75a4a02db97fdae0c8e3a494a7aa9135b35c8b
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Tue Jun 6 13:23:17 2017 -0700

    feature/SMP-8856
    clean up

commit 0a8c1f2c709df0796f3206138313aee6a33e19ac
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Tue Jun 6 13:17:28 2017 -0700

    feature/SMP-8856
    typo fix

commit 09d2ec597834127f298a695812acc7611e8c208c
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Tue Jun 6 13:13:45 2017 -0700

    feature/SMP-8856 legacy cancel"
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

