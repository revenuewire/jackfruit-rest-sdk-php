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
    release_note="Merge pull request #921 in SMP/jackfruit from feature/SMP-8943 to development

Squashed commit of the following:

commit 5b21d9a771e35331aa6e9953cd698dc76c08a769
Author: dferguson <dferguson@revenuewire.com>
Date:   Tue Jul 4 16:20:52 2017 -0700

    SMP-8943: Remove commented out code

commit eb8bfaf34ab1df9e3e38a69d5aefa6dd6474607a
Author: dferguson <dferguson@revenuewire.com>
Date:   Tue Jul 4 16:17:17 2017 -0700

    SMP-8943: Fixed filter translation

commit 3e0ec5de38cc5da87296d2ba6f1c356f041ea5b4
Author: dferguson <dferguson@revenuewire.com>
Date:   Tue Jul 4 16:06:53 2017 -0700

    SMP-8943: Auto change graph map when deselecting filters

commit f4ab90e84d75a863059078a1dff3777412126824
Author: dferguson <dferguson@revenuewire.com>
Date:   Tue Jul 4 13:59:16 2017 -0700

    SMP-8943: Fix search bar

commit 048bbbb5ec21f7c72ca66833acdf978acabac381
Merge: da6f054 f42c0de
Author: dferguson <dferguson@revenuewire.com>
Date:   Tue Jul 4 13:16:21 2017 -0700

    Merge branch 'projects/SMP-8943' into feature/SMP-8943

    Conflicts:
    	library/CallStream/Controller/ReactReportAction.php
    	library/RWAPI/ReportSystem/ConversionRegister.php
    	react-apps/portal/affiliate-reports/conversion-register/containers/AffiliateConversionRegister.jsx
    	react-apps/portal/less/components/ToastAlert.less
    	react-apps/portal/utilities/reports/containers.js

commit f42c0dec327b391e56dfa4d58034e48835b61560
Author: dferguson <dferguson@revenuewire.com>
Date:   Tue Jul 4 12:59:17 2017 -0700

    SMP-8943: CSS fixes

commit 65335ecbe6316130f757638417af42309e49c4eb
Author: dferguson <dferguson@revenuewire.com>
Date:   Tue Jul 4 11:51:49 2017 -0700

    SMP-8943: Fix typo

commit 100912fee2e940794bf6d4496480651fc648710b
Author: dferguson <dferguson@revenuewire.com>
Date:   Tue Jul 4 11:50:15 2017 -0700

    SMP-8943: Post beta report changes

commit ff2342528cc18411a456d33ed21c2549f672f071
Author: dferguson <dferguson@revenuewire.com>
Date:   Wed Jun 28 15:34:03 2017 -0700

    SMP-8943: Graph controls, date picker, search bar, sub ids filter done

commit 13a3563f4c6d5a8cde53fa65542fa4f2edc2c246
Author: dferguson <dferguson@revenuewire.com>
Date:   Tue Jun 27 15:31:06 2017 -0700

    projects/uac-reporting-pre-beta: reports nav fix

commit 5b8c09ebc5b8838a7a086a4186143d99af4df040
Merge: fbdf7fe 0e7bcb2
Author: dferguson <dferguson@revenuewire.com>
Date:   Tue Jun 27 15:12:28 2017 -0700

    Merge branch 'release/1-staging' into projects/uac-reporting-pre-beta

    Conflicts:
    	callstream.revenuewire.com/application/modules/uac/controllers/ConversionregisterController.php
    	library/CallStream/Controller/ReactReportAction.php
    	library/RWAPI/ReportSystem/ConversionRegister.php
    	library/RWAPI/Revenuewire/classes/CallStreamSystem/TransactionSummaryPeer.php
    	library/RWAPI/Revenuewire/classes/RevenuewireDW/DWFacAffiliateCampaignPeer.php
    	library/RWAPI/Revenuewire/dw.schema.xml
    	react-apps/portal/affiliate-reports/campaigns/reducers.js
    	react-apps/portal/affiliate-reports/click-register/reducers.js
    	react-apps/portal/affiliate-reports/conversion-register/actions.js
    	react-apps/portal/affiliate-reports/conversion-register/containers/AffiliateConversionRegister.jsx
    	react-apps/portal/affiliate-reports/conversion-register/reducers.js
    	react-apps/portal/affiliate-reports/revshare-register/reducers.js
    	react-apps/portal/affiliate-reports/revshare/reducers.js
    	react-apps/portal/components/affiliate-reports/ConversionsRegisterGraph.js
    	react-apps/portal/components/affiliate-reports/GraphDropDown.js
    	react-apps/portal/utilities/reports/containers.js

commit fbdf7feb27952222dccadb25acd07e2a216669c2
Author: dferguson <dferguson@revenuewire.com>
Date:   Tue Jun 27 13:57:41 2017 -0700

    projects/uac-reporting-pre-beta

commit 132852d7c344cd58cf61468be81a9e0a9b3f7a85
Author: dferguson <dferguson@revenuewire.com>
Date:   Mon Jun 26 17:10:51 2017 -0700

    uac-reporting-pre-beta: More build fixes

commit 40cc5a333f83d83491cb94d74a218e292bca23b9
Author: dferguson <dferguson@revenuewire.com>
Date:   Mon Jun 26 17:08:24 2017 -0700

    uac-reporting-pre-beta: Fix build

commit 36c1dedd2345d26693e85b0c2d3f8097908b66cf
Author: dferguson <dferguson@revenuewire.com>
Date:   Mon Jun 26 12:35:05 2017 -0700

    uac-reporting-pre-beta: Improve date picker opening/closing

commit 0187e0f561350c4bb5ddf780542b10f4b0bd01ac
Author: dferguson <dferguson@revenuewire.com>
Date:   Mon Jun 26 11:58:55 2017 -0700

    uac-reporting-pre-beta: Right align table headers, fix performance report payout value

commit 34234a5ee1d3735351ab7a2f290bd926adcc3bc8
Merge: 9a1b5ca aeb8346
Author: dferguson <dferguson@revenuewire.com>
Date:   Mon Jun 26 11:44:22 2017 -0700

    Merge branch 'release/1-staging' into projects/uac-reporting-pre-beta

    Conflicts:
    	react-apps/portal/components/datepicker/RWDateRangeSelect.js

commit 9a1b5ca91a8ffb6da3c6c44f13975d414fd2013a
Author: dferguson <dferguson@revenuewire.com>
Date:   Mon Jun 26 11:37:04 2017 -0700

    uac-reporting-pre-beta: Add right side alignment, review fixes, change register dates to not include seconds

commit a704479d03d7229b6277d9a61f557a9a0609f578
Author: dferguson <dferguson@revenuewire.com>
Date:   Mon Jun 26 10:18:00 2017 -0700

    uac-reporting-pre-beta: Review fixes

commit 8cf6e6b49f2859c5536bde32ae1e14681f2de24e
Merge: e6c6050 2e4b94f
Author: dferguson <dferguson@revenuewire.com>
Date:   Fri Jun 23 16:34:25 2017 -0700

    Merge branch 'projects/SMP-8931' into projects/uac-reporting-pre-beta

    Conflicts:
    	callstream.revenuewire.com/application/modules/uac/controllers/RevshareregisterController.php
    	library/RWAPI/Revenuewire/classes/linker/CustomerSessionPeer.php
    	react-apps/portal/affiliate-reports/click-register/containers/AffiliateClickRegister.jsx
    	react-apps/portal/affiliate-reports/click-register/reducers.js
    	react-apps/portal/affiliate-reports/revshare-register/containers/AffiliateRevshareRegister.jsx

commit e6c6050c45fdff0b235490d0dfd0691145078702
Merge: e5cb68b 0d30449
Author: dferguson <dferguson@revenuewire.com>
Date:   Fri Jun 23 16:30:58 2017 -0700

    Merge branch 'projects/SMP-8472' into projects/uac-reporting-pre-beta

    Conflicts:
    	react-apps/portal/affiliate-reports/conversion-register/containers/AffiliateConversionRegister.jsx

commit e5cb68beb6c1f1f34e186fec2903c5f865084442
Merge: 29f5d9c 4e1c061
Author: dferguson <dferguson@revenuewire.com>
Date:   Fri Jun 23 16:30:01 2017 -0700

    Merge branch 'projects/SMP-8475' into projects/uac-reporting-pre-beta

commit 2e4b94f92e6cba0daea8153c0e8775b79fe01376
Author: dferguson <dferguson@revenuewire.com>
Date:   Fri Jun 23 16:23:53 2017 -0700

    SMP-8931: Add sub id filter to click register

commit 377c137ed8352c4de286918c0f62bce13ee16227
Author: dferguson <dferguson@revenuewire.com>
Date:   Fri Jun 23 15:13:33 2017 -0700

    SMP-8931: More general fixes

commit 0d304491d37983bbc0c67b27d89572e91ffbfb5d
Merge: 90a33e5 7e3d0b6
Author: dferguson <dferguson@revenuewire.com>
Date:   Fri Jun 23 11:19:09 2017 -0700

    Merge branch 'projects/UAC' into projects/SMP-8472

commit 4e1c061cdbb23fb4a3971253962bcc2f15f11a74
Merge: 2588133 7e3d0b6
Author: dferguson <dferguson@revenuewire.com>
Date:   Fri Jun 23 11:17:55 2017 -0700

    Merge branch 'projects/UAC' into projects/SMP-8475

commit d7d2e65e5ddc7181b9cd5544b9f8a247ff735efe
Author: dferguson <dferguson@revenuewire.com>
Date:   Fri Jun 23 11:17:09 2017 -0700

    SMP-8931: Move all reports to new components/code, fix revshare report bugs

commit 53dc42d95ecea8879eb74bec255e05d299d58921
Merge: ef3f1ed 90a33e5
Author: dferguson <dferguson@revenuewire.com>
Date:   Mon Jun 19 12:07:15 2017 -0700

    Merge branch 'projects/UAC' into projects/SMP-8931

    Conflicts:
    	callstream.revenuewire.com/application/modules/uac/controllers/RevshareregisterController.php

commit 2588133cee79478cfbf624224958a72b1da4e8a4
Author: dferguson <dferguson@revenuewire.com>
Date:   Mon Jun 19 10:49:03 2017 -0700

    SMP-8475: Review fixes

commit 8251c908151b156b1221b3f7aaa937de95e3550b
Merge: 3c2e19c 2aecaf5
Author: dferguson <dferguson@revenuewire.com>
Date:   Mon Jun 19 10:32:41 2017 -0700

    Merge branch 'projects/UAC' into projects/SMP-8475

    Conflicts:
    	callstream.revenuewire.com/application/configs/uac-navigation/report.ini
    	callstream.revenuewire.com/application/modules/uac/controllers/ReportsController.php

commit 90a33e54910b3b9500a9f3b0fe5cd61b9c06181f
Merge: 0239c99 2aecaf5
Author: dferguson <dferguson@revenuewire.com>
Date:   Mon Jun 19 10:30:04 2017 -0700

    Merge branch 'projects/UAC' into projects/SMP-8472

    Conflicts:
    	callstream.revenuewire.com/application/modules/uac/controllers/PerformancereportController.php
    	react-apps/portal/components/affiliate-reports/SafecartCampaignGraph.js

commit ef3f1edb7ba3c3e23b8102bfe033447d261acc44
Author: dferguson <dferguson@revenuewire.com>
Date:   Mon Jun 19 10:26:53 2017 -0700

    SMP-8931: Revshare register pre-beta improvements

commit 0239c996233b6e4fbee45eaced2112a95f657105
Author: dferguson <dferguson@revenuewire.com>
Date:   Fri Jun 16 09:56:29 2017 -0700

    SMP-8472: Remove docker.yml workaround

commit 3c2e19ce76a0dcac13052a39465ed12e597baca6
Merge: e2726e8 96ac7d8
Author: dferguson <dferguson@revenuewire.com>
Date:   Fri Jun 16 09:48:26 2017 -0700

    Merge branch 'projects/UAC' into projects/SMP-8475

    Conflicts:
    	react-apps/portal/affiliate-reports/revshare-register/containers/AffiliateRevshareRegister.jsx

commit 60c6bbceb2b871a325e0b2fcfa339c0068d8f1c7
Merge: eba65aa f6104e2
Author: dferguson <dferguson@revenuewire.com>
Date:   Thu Jun 15 15:19:38 2017 -0700

    Merge branch 'projects/UAC' into projects/SMP-8472

    Conflicts:
    	react-apps/portal/affiliate-reports/campaigns/containers/AffiliateCampaignsReport.jsx

commit eba65aa87c084ce2bed7fb14d7bf995f825374d7
Author: dferguson <dferguson@revenuewire.com>
Date:   Thu Jun 15 10:00:42 2017 -0700

    SMP-8472: Performance report moved to components

commit e2726e8c73180bafce6355cf019ab3a1f32c1557
Merge: 05be33f 5242f44
Author: dferguson <dferguson@revenuewire.com>
Date:   Tue Jun 13 09:29:22 2017 -0700

    Merge branch 'projects/UAC' into projects/SMP-8475

commit 05be33f4c5406b120d8712f628e35f36dfe666db
Author: dferguson <dferguson@revenuewire.com>
Date:   Mon Jun 12 10:31:32 2017 -0700

    SMP-8475: Bug fixes

commit c78e9cd64a68b526b8489abf7bf12de296bfd082
Merge: e19fc55 e363ee9
Author: dferguson <dferguson@revenuewire.com>
Date:   Fri Jun 9 15:32:22 2017 -0700

    Merge branch 'projects/UAC' into projects/SMP-8475

commit e19fc5542113f0d8649bd3916a5b64e917942629
Author: dferguson <dferguson@revenuewire.com>
Date:   Fri Jun 9 15:21:55 2017 -0700

    SMP-8475: Remove incomplete script

commit 07d17a6c1c9f2d22b34d91ac6f5704c3b27d124c
Author: dferguson <dferguson@revenuewire.com>
Date:   Fri Jun 9 15:20:26 2017 -0700

    SMP-8475: Remove debugging

commit f76ac345b4d3a236bb3e317d01020dc8041e215a
Author: dferguson <dferguson@revenuewire.com>
Date:   Fri Jun 9 15:19:25 2017 -0700

    SMP-8475: Conversion register report"
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

