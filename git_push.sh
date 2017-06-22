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
    release_note="Merge pull request #870 in SMP/jackfruit from feature/sdk-unittest to development

Squashed commit of the following:

commit fd43527b76cf4559777e9edf731497731e4f9ee5
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 21 14:08:52 2017 -0700

    try again

commit 02f97ae9702d10f5bfeae9221241a66d324cc101
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 21 13:29:31 2017 -0700

    try again

commit 31d94e45ad83b3944f1334f12b972675b3c9ffcc
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 21 13:12:29 2017 -0700

    try again

commit 45ccb4146244756b0884b24a112300421b61a76b
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 21 12:54:32 2017 -0700

    try again

commit 28c21d912a7666533fde6487ad5f8412fce14a70
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 21 12:43:19 2017 -0700

    try to debug

commit eede4eb99089c329cc6c87c29f29f5b9de282cb3
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 21 12:39:26 2017 -0700

    try to debug

commit 25de372578eb38be3b4aec223d8f2462c0474a97
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 21 12:35:47 2017 -0700

    try to debug

commit 8be80229f28bc1612673e44ab18c5bcd8d8faa43
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 21 12:06:56 2017 -0700

    worked.

commit 0d8cbed32bcd90979227edb3396dcbfad55d47eb
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 21 10:53:59 2017 -0700

    fix the concurrent unitets

commit 8e25532fffcfe5e6d3714b219cca2312f7cf1935
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 21 10:33:56 2017 -0700

    Test sdk unit test

commit a2892f32e802d9ff989f35f60ed0f8e5ef593fc8
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 21 09:54:15 2017 -0700

    Latest sdk files

commit e9a3be0d083d0f152dfc823c3f097584afbac216
Merge: 9ccecaa 7253605
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 21 08:46:49 2017 -0700

    Merge remote-tracking branch 'origin/development' into feature/sdk-unittest

    * origin/development:
      Merge pull request #858 in SMP/jackfruit from feature/SMP-8608 to development
      Merge pull request #868 in SMP/jackfruit from feature/blue-pipe to release/0-blue
      Merge pull request #866 in SMP/jackfruit from feature/SMP-8853-ut to release/1-staging
      Merge pull request #864 in SMP/jackfruit from release/1-staging to release/0-blue

commit 9ccecaafa9e6fe01e561336f392a90a489b455ef
Author: Scott Wang <swang@revenuewire.com>
Date:   Tue Jun 20 12:52:18 2017 -0700

    Unittest: adding two examples

commit d2f2c9781f39bea82b0c5a5036e005175aa2e58d
Author: Scott Wang <swang@revenuewire.com>
Date:   Tue Jun 20 12:20:49 2017 -0700

    SDK unit test

commit 996fd2b2ac424cc378d5fba78fdadcbd67aed991
Author: Scott Wang <swang@revenuewire.com>
Date:   Tue Jun 20 12:20:36 2017 -0700

    SDK unit test"
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

