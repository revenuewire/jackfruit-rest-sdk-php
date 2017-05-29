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
    release_note="Merge pull request #754 in SMP/jackfruit from feature/RSPO-34 to development

Squashed commit of the following:

commit 6de8ae12e2efd0f66ff18be2b72f814ed37c5920
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Mon May 29 09:25:01 2017 -0700

    RSPO-34 clean up

commit c0fd1eb7632a2fa9458b1002d1f8410e86e6ae47
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Fri May 26 16:19:46 2017 -0700

    RSPO-34

commit ac826735c8e7f7c15daf4f423aa63923361fc5ce
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Fri May 26 15:51:34 2017 -0700

    RSPO-34

commit c3a226f99536a7badd1cb93349e3e619b14866f0
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Fri May 26 15:38:29 2017 -0700

    RSPO-34 yml fix

commit 7334b3bfdd13c1bf617d9126799b77c9a04fc80a
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Fri May 26 15:32:34 2017 -0700

    RSPO-34

commit 89a70f00c8639c016cc5a2159288fdc29277e426
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Fri May 26 15:24:08 2017 -0700

    RSPO-34 declaration fix

commit e5f304817fb9b26d3d2cd6c676a4c6de265843dd
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Fri May 26 15:03:57 2017 -0700

    RSPO-34 return resorce update and swagger doc update"
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

