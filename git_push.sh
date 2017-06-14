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
    release_note="Merge pull request #831 in SMP/jackfruit from feature/SMP-8856 to development

Squashed commit of the following:

commit dcb674d6512d7331ea480bd7ce6eddfd245be509
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Wed Jun 14 09:57:18 2017 -0700

    feature/SMP-8856 fixes

commit aad55f853978aaf83709b8de0baa1c92e350071c
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Tue Jun 13 14:16:44 2017 -0700

    feature/SMP-8856 swagger fix

commit a3e8fd09515bc8e61111f03459c33c2db395d746
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Tue Jun 13 14:07:47 2017 -0700

     feature/SMP-8856 swagger schema fix

commit 3c2af84582b82985163dedd6deeecfce688048ae
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Tue Jun 13 13:33:23 2017 -0700

    feature/SMP-8856

commit bc997aea20181c0190a853e0c8492aebfff7bf64
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Tue Jun 13 13:30:55 2017 -0700

    feature/SMP-8856 get offer details API"
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

