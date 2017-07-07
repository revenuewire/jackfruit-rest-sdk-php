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
    release_note="Merge pull request #936 in SMP/jackfruit from feature/SMP-8907 to development

Squashed commit of the following:

commit d6fe02b3684cbfb09b2dc43ea5bd9158ccf3aada
Author: Scott Wang <scott@malloc.sh>
Date:   Thu Jul 6 17:30:50 2017 -0700

    SMP-8907: try again

commit 2cb6a3477b889e2d7084e77bf21b020e058ebf0b
Author: Scott Wang <scott@malloc.sh>
Date:   Thu Jul 6 17:15:53 2017 -0700

    SMP-8907: try again

commit df8167ee3504b15ca71a3f53cdbbebcc1dc30995
Author: Scott Wang <scott@malloc.sh>
Date:   Thu Jul 6 13:26:05 2017 -0700

    SMP-8907: fix review, and fix jenkins

commit addefd413674d5b87351de3b82f4a39520053737
Author: Scott Wang <scott@malloc.sh>
Date:   Thu Jul 6 12:20:47 2017 -0700

    SMP-8907: fix review, and fix jenkins

commit 2e20904160d0a62dd20f70d06dfb0a8866912ceb
Author: Scott Wang <scott@malloc.sh>
Date:   Thu Jul 6 11:37:35 2017 -0700

    SMP-8907: make it all works

commit 9f35eecec9b9eb04b74330dc6d3274eda61b2536
Author: Scott Wang <scott@malloc.sh>
Date:   Thu Jul 6 10:42:46 2017 -0700

    SMP-8907: one migration take care all

commit 306f7511ad87a3e62b9ed5d8b60de5ee2c532c29
Merge: acf1751 6f0e812
Author: Scott Wang <scott@malloc.sh>
Date:   Thu Jul 6 09:38:49 2017 -0700

    Merge remote-tracking branch 'origin/development' into feature/SMP-8907

    * origin/development:
      Merge pull request #907 in SMP/jackfruit from feature/SMP-8835 to development
      Merge pull request #924 in SMP/jackfruit from UAC/SMP-8970 to release/1-staging
      Merge pull request #930 in SMP/jackfruit from feature/SMP-8994-fix to development
      Merge pull request #931 in SMP/jackfruit from feature/SMP-6036-autocomplete to development
      Merge pull request #928 in SMP/jackfruit from feature/SMP-8994 to release/1-staging
      Merge pull request #926 in SMP/jackfruit from feature/SMP-8224 to release/1-staging

commit acf1751a346be9266a5f87ba178cdce910b0a059
Author: Scott Wang <scott@malloc.sh>
Date:   Thu Jul 6 09:36:28 2017 -0700

    SMP-8907: add init-browscap

commit aa0181643f9da4c7a3c99078d4df23a97d255f84
Author: Scott Wang <scott@malloc.sh>
Date:   Thu Jul 6 09:06:20 2017 -0700

    SMP-8907: adding more unit tests and deploy/release step

commit 0c9a022a20c2eb340c70c6b8b0c3149befb93910
Author: Scott Wang <scott@malloc.sh>
Date:   Thu Jul 6 08:13:43 2017 -0700

    SMP-8907: add unit test

commit be63d1a546aa40e0fe494e7e1cddefb2fc2ad272
Author: Scott Wang <scott@malloc.sh>
Date:   Thu Jul 6 07:48:36 2017 -0700

    SMP-8907: improving on templates

commit 0b9f0887153c9496c3132aa63057a5112d214b6f
Author: Scott Wang <scott@malloc.sh>
Date:   Wed Jul 5 15:04:58 2017 -0700

    SMP-8907: add first test for template

commit c2dbec0b7d40b7ff6305f5d0e66d9efe1a323a7e
Author: Scott Wang <scott@malloc.sh>
Date:   Wed Jul 5 14:30:55 2017 -0700

    SMP-8907: good shape

commit f8066e94b1d7aa83a7271a1035ff4d58597c5a06
Author: Scott Wang <scott@malloc.sh>
Date:   Wed Jul 5 14:19:26 2017 -0700

    SMP-8907: update sdk

commit 9c20cfa829103656afb7062fb86d25bef1978e73
Author: Scott Wang <scott@malloc.sh>
Date:   Wed Jul 5 14:17:47 2017 -0700

    SMP-8907: really fix it

commit ce57acd3fef8cad07d21429124ef092ddff9a543
Author: Scott Wang <scott@malloc.sh>
Date:   Wed Jul 5 14:12:35 2017 -0700

    SMP-8907: fix the unit test

commit a93db612b463ac9fcc169d54ee396276eaf1104e
Author: Scott Wang <scott@malloc.sh>
Date:   Wed Jul 5 13:09:11 2017 -0700

    SMP-8907: improve the unit test

commit 99345882377f3a60c2495648d1709bbf50a40e8a
Merge: d8f46a6 2495f29
Author: Scott Wang <scott@malloc.sh>
Date:   Wed Jul 5 11:55:28 2017 -0700

    Merge remote-tracking branch 'origin/development' into feature/SMP-8907

    * origin/development:
      Merge pull request #925 in SMP/jackfruit from feature/SMP-8263 to release/1-staging
      Merge pull request #916 in SMP/jackfruit from feature/SMP-8929 to development
      Merge pull request #923 in SMP/jackfruit from feature/smp-8951-charge-back-missing to development
      Merge pull request #921 in SMP/jackfruit from feature/SMP-8943 to development
      Merge pull request #922 in SMP/jackfruit from feature/SMP-8552-email2 to release/1-staging
      Merge pull request #917 in SMP/jackfruit from feature/SMP-8968-fix2 to release/1-staging

commit d8f46a63dd1f3aeffc4e917b811fa49062912801
Author: Scott Wang <scott@malloc.sh>
Date:   Wed Jul 5 11:29:48 2017 -0700

    SMP-8907: fix some permissions

commit c5a5bd61c51e446b428b12136d34a3bf254609de
Author: Scott Wang <scott@malloc.sh>
Date:   Wed Jul 5 11:04:16 2017 -0700

    SMP-8907: add template

commit 1af3dd25cf95b5ebfb2116d439bb83906e7f1595
Author: Scott Wang <scott@malloc.sh>
Date:   Wed Jul 5 08:20:01 2017 -0700

    SMP-8907: doc and spec

commit c9f74f55b4bb8c4f07d00957cfdfbdb6f9714cc2
Author: Scott Wang <scott@malloc.sh>
Date:   Wed Jul 5 07:21:33 2017 -0700

    SMP-8907: template schema change"
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

