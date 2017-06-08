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
    release_note="Merge pull request #804 in SMP/jackfruit from feature/SMP-8896 to development

Squashed commit of the following:

commit 5e1fa495088a1cc4c586a678b02aaa1adb7a4560
Merge: 2603e97 690d293
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 21:31:05 2017 -0700

    Merge remote-tracking branch 'origin/development' into feature/SMP-8896

    * origin/development:
      Merge pull request #800 in SMP/jackfruit from feature/SMP-8112-fix to development
      Merge pull request #796 in SMP/jackfruit from feature/SMP-8899 to release/0-blue
      Merge pull request #799 in SMP/jackfruit from feature/SMP-8855-fix to release/1-staging
      Merge pull request #798 in SMP/jackfruit from feature/smp-8888-rebranch to release/1-staging
      Merge pull request #797 in SMP/jackfruit from feature/smp-8888-xss to development
      Merge pull request #793 in SMP/jackfruit from feature/smp-8246-cpa-credit-report to development
      Merge pull request #789 in SMP/jackfruit from feature/smp-5543-private-network-issue to development
      Merge pull request #795 in SMP/jackfruit from feature/SMP-8856 to development
      Merge pull request #794 in SMP/jackfruit from feature/SMP-8855-fix to release/1-staging
      Merge pull request #720 in SMP/jackfruit from feature/smp-8763-fix-term-renewal-email to development

commit 2603e979a4f0c99001cc31a89d6e33af2f380f21
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 21:30:14 2017 -0700

    Upgrade php unit test

commit 83dddd21eb6869b62f71806870528fb95930c435
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 21:01:32 2017 -0700

    Upgrade php unit test

commit ecfbce6c5c70e57e9b4fe77ca53620d224b4df23
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 20:32:56 2017 -0700

    Upgrade php unit test

commit 409492f14f8afd45d42742ddc014ed0e9ac7998c
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 20:11:41 2017 -0700

    Upgrade php unit test

commit a5e45a89b4928441ade96797e04769673a20f304
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 19:46:08 2017 -0700

    Upgrade php unit test

commit 411eae9f32618766139a2e119565ce006edcc71b
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 15:42:32 2017 -0700

    SMP-8896: working with JIRA

commit 30ac74dd5b7d000bd528a15afa0c5e02476a6f08
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 15:16:36 2017 -0700

    SMP-8896: update jira

commit 1971292b7298691ac80d03ee765d29d12b1da779
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 15:14:14 2017 -0700

    SMP-8896: update jira

commit fc47d76667b70a9425eb9a8777456d30dddd5758
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 15:03:21 2017 -0700

    SMP-8896: fix

commit bb8f532be059f17af9406b3a0137afe3e81e9f83
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 14:45:43 2017 -0700

    Test agin

commit c2eff44aa5b427f6035238dcd2bbe54425c7aa32
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 14:43:56 2017 -0700

    Test agin

commit 7bf6f52602677a8c03d514e48fceff4269935f2d
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 14:41:17 2017 -0700

    Test agin

commit f9f3a7bda14528594de7c8716bf97b09a00216f2
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 14:16:35 2017 -0700

    Test agin

commit 23af4a786d3abab2f51e3274f05f59e98f7d25fa
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 14:08:00 2017 -0700

    Test agin

commit 29349a81efda0e5ecda8909e894a88333e1eefc0
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 14:06:18 2017 -0700

    Test agin

commit c969908d7f151c0ae794b8d62b0302c6e93ae2df
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 13:52:35 2017 -0700

    Test agin

commit 4def859035e23beb328be47c10b5f160bddb1827
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 13:50:50 2017 -0700

    Test agin

commit a82f5ff26b2147124f544b55aa0bf7ec26237ee2
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 13:49:26 2017 -0700

    Test agin

commit 5510b80b160d92aaedb0c8b4b843d4122d816cdc
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 13:47:21 2017 -0700

    Test agin

commit 971d7c11aeff4723921549556266963a04fd57f7
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 13:31:42 2017 -0700

    Test agin

commit bde8de2cb78153f984ca1a8f03e0eed722a25a91
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 13:06:07 2017 -0700

    Test agin

commit 193700acb556bb20448a23e61e403d8d549da9ac
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 12:33:43 2017 -0700

    Test agin

commit bd71c4161eb3c8430d942edfeb99d10c520c3d10
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 09:38:45 2017 -0700

    multiple fixes

commit eb3cfd778ac9e92aefdf3ee66a6e642ce612d5a4
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 09:30:45 2017 -0700

    multiple fixes

commit ffed68ed2340c313c0c28177834969e024c9e22a
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 09:27:50 2017 -0700

    multiple fixes

commit 36fb8a3ecb3bc1501423f2dde7c6d468fa77c993
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 09:25:40 2017 -0700

    multiple fixes

commit 05c5d99af832059b3484667cab362a9f399bf95b
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 09:22:21 2017 -0700

    Add hipchat notification

commit f9b0a98692060b3ee9d5c4736c1cdb88213bfd6c
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 09:18:55 2017 -0700

    Add hipchat notification

commit 721692197599015c9e9927caa23d5bf7ed217c72
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 09:11:16 2017 -0700

    Add hipchat notification

commit 6db009f2f9d1b4fa6896c3089b27c272f2fd3286
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 09:08:37 2017 -0700

    Add hipchat notification

commit 3998661c95d761bc830b7f0d1a03d46068595add
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 09:03:08 2017 -0700

    Add hipchat notification

commit 529aabbacb33ca3743841b0ed525c620f5b2a4bd
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 08:53:27 2017 -0700

    Test bitbucket notifictaion

commit b09747107254f4e5e01fdb9ed2bb274bc108c855
Author: Scott Wang <swang@revenuewire.com>
Date:   Wed Jun 7 08:49:17 2017 -0700

    Test bitbucket notifictaion

commit 710c977ada95138395de95a4981660fd4bd8bae0
Author: Scott Wang <swang@revenuewire.com>
Date:   Tue Jun 6 21:35:04 2017 -0700

    test to see if webpack fail

commit 1ae3e3d08b2ad0c11e6bffada641f80dc9ab9b15
Author: Scott Wang <swang@revenuewire.com>
Date:   Tue Jun 6 21:24:12 2017 -0700

    test to see if webpack fail

commit 9fe78719142ba4c64586c9bd8c72bc5c7f2d9fcd
Author: Scott Wang <swang@revenuewire.com>
Date:   Tue Jun 6 21:02:43 2017 -0700

    test to see if webpack fail

commit 829e1d46284fb56927b5a519cbee92c81298badf
Author: Scott Wang <swang@revenuewire.com>
Date:   Tue Jun 6 21:00:38 2017 -0700

    test to see if webpack fail

commit ef587dd0b6554dbb2e6c81e57185db425c6f5ef7
Author: Scott Wang <swang@revenuewire.com>
Date:   Tue Jun 6 20:30:43 2017 -0700

    test to see if webpack fail

commit 6152afd4b52edbcbc14273379648350eb1350cdf
Author: Scott Wang <swang@revenuewire.com>
Date:   Tue Jun 6 20:10:48 2017 -0700

    test to see if webpack fail

commit 91a9d5909c1efcb0ee7587e09909660cea820aeb
Author: Scott Wang <swang@revenuewire.com>
Date:   Tue Jun 6 18:48:21 2017 -0700

    give it more juice

commit 61f96d0a76b626a874ec0ac59a6db69081e795d9
Author: Scott Wang <swang@revenuewire.com>
Date:   Tue Jun 6 18:23:10 2017 -0700

    give it more juice

commit 2b09488b0714e6129dbf8260bade94dcd087832a
Author: Scott Wang <swang@revenuewire.com>
Date:   Tue Jun 6 17:55:46 2017 -0700

    test

commit 176e2d10745aae440e2f38558d3dc86f1d60c3c5
Author: Scott Wang <swang@revenuewire.com>
Date:   Tue Jun 6 10:02:28 2017 -0700

    Try again

commit 11b8ccd19069aeb78791c6c6fbb8d14d4ecd6d03
Author: Scott Wang <swang@revenuewire.com>
Date:   Tue Jun 6 10:01:31 2017 -0700

    Try again

commit aed6b5dd0302c65c621d5df159230a9591fd5b04
Author: Scott Wang <swang@revenuewire.com>
Date:   Tue Jun 6 09:51:09 2017 -0700

    Fix new batch

commit 824f459d68acfcf49fe0f6dfc3e147897b49eca6
Author: Scott Wang <swang@revenuewire.com>
Date:   Tue Jun 6 09:46:34 2017 -0700

    Fix new batch

commit b05c6da1779d0f656cebaf7c9f7d8cea455900f7
Author: Scott Wang <swang@revenuewire.com>
Date:   Tue Jun 6 08:57:35 2017 -0700

    Hey, im going to mad if this actual break the build

commit d275524721abfba22b5df55ea20f64c128c96935
Author: Scott Wang <swang@revenuewire.com>
Date:   Tue Jun 6 08:38:50 2017 -0700

    Test new build

commit aa830890cafdf6181d5f906c26d7c2c2ba2d98aa
Author: Scott Wang <swang@revenuewire.com>
Date:   Tue Jun 6 08:34:25 2017 -0700

    Test new build

commit d4b3a088427f28a9b5021936d9a540c7ad830290
Author: Scott Wang <swang@revenuewire.com>
Date:   Mon Jun 5 20:58:11 2017 -0700

    Test new build

commit fd2472100a6ea79da39cfda7a46409b6edba088a
Author: Scott Wang <swang@revenuewire.com>
Date:   Mon Jun 5 20:25:04 2017 -0700

    Test new build

commit 1914c3fbd7abab7ccc8494cefa7d32a33a00d080
Author: Scott Wang <swang@revenuewire.com>
Date:   Mon Jun 5 20:20:05 2017 -0700

    Test new build

commit 8a55ea558f035e6cbb655f4d7c5a63e997efe452
Author: Scott Wang <swang@revenuewire.com>
Date:   Mon Jun 5 20:19:33 2017 -0700

    Test new build

commit 6ec0ca7cf2a8e3da7080afb3d751e9a3ec66c0de
Author: Scott Wang <swang@revenuewire.com>
Date:   Mon Jun 5 19:44:37 2017 -0700

    Test new build

commit a7c763b34d917b1a4467b68d1808e43a5ef439ed
Author: Scott Wang <swang@revenuewire.com>
Date:   Mon Jun 5 19:42:57 2017 -0700

    Test new build

commit 29d3461f4c3825c2964857871b52875d72dddad8
Author: Scott Wang <swang@revenuewire.com>
Date:   Mon Jun 5 19:40:37 2017 -0700

    Test new build

commit dfa5a59fd753216275863866e786625f5b5a99ec
Author: Scott Wang <swang@revenuewire.com>
Date:   Mon Jun 5 19:30:09 2017 -0700

    Test new build

commit 3b535d7819997723a9bcedb11b85f1fa7832c6a7
Author: Scott Wang <swang@revenuewire.com>
Date:   Mon Jun 5 19:26:24 2017 -0700

    Test new build

commit 5646a0872fc3f4263391c8e5838b41db39eebb1f
Author: Scott Wang <swang@revenuewire.com>
Date:   Mon Jun 5 19:23:12 2017 -0700

    Test new build

commit 9567223305ae33f0b130d816971bb446c5871060
Author: Scott Wang <swang@revenuewire.com>
Date:   Mon Jun 5 16:39:13 2017 -0700

    add back ant

commit fe8628e3106cbc73f91411415a4152fc6a9c336d
Author: Scott Wang <swang@revenuewire.com>
Date:   Mon Jun 5 16:24:48 2017 -0700

    add back ant

commit 16078792d58a80d8e3dbf7da08ee2ba4186f06a5
Author: Scott Wang <swang@revenuewire.com>
Date:   Mon Jun 5 16:15:47 2017 -0700

    SMP-8896: test agin

commit b4ac1c6964c7780810204dd578ef70bb372fc8cd
Author: Scott Wang <swang@revenuewire.com>
Date:   Mon Jun 5 16:08:44 2017 -0700

    SMP-8896: test agin

commit 7a7177a2a0ea842f990f9f3b2e33cc58eb429f90
Author: Scott Wang <swang@revenuewire.com>
Date:   Mon Jun 5 16:00:25 2017 -0700

    SMP-8896: test agin

commit 167e7d7211bfaf9db36df692327c9dc30798dfad
Author: Scott Wang <swang@revenuewire.com>
Date:   Mon Jun 5 15:54:26 2017 -0700

    SMP-8896: test agin

commit 9f69cf74bc6dee9f69579e3270b59f1c980d42b5
Author: Scott Wang <swang@revenuewire.com>
Date:   Mon Jun 5 15:50:58 2017 -0700

    SMP-8896: test agin

commit f9ec40e085168329b7c9c87943429bff77420279
Author: Scott Wang <swang@revenuewire.com>
Date:   Mon Jun 5 15:47:17 2017 -0700

    SMP-8896: test agin

commit d41e71b8bb29d0e781eac476eba692f24f76ec96
Author: Scott Wang <swang@revenuewire.com>
Date:   Mon Jun 5 15:43:57 2017 -0700

    SMP-8896: test agin

commit c0f7ea10bd5126c2b390f1b9b049a7448272ee07
Author: Scott Wang <swang@revenuewire.com>
Date:   Mon Jun 5 15:34:15 2017 -0700

    SMP-8896: test agin

commit 3fa05cee9fd42c10d69d65f35766cab3ab3134c5
Author: Scott Wang <swang@revenuewire.com>
Date:   Mon Jun 5 15:14:56 2017 -0700

    SMP-8896: test agin

commit 5df9fb8e5848bd6db55b546606177b2a3405d46b
Author: Scott Wang <swang@revenuewire.com>
Date:   Mon Jun 5 15:07:35 2017 -0700

    SMP-8896: init commit, do not expected to work"
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

