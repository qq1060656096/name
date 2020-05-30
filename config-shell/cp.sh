#/bin/sh
# ./2shell/cp.sh local
# ./2shell/cp.sh server

envDir=${1-"local"}
currentFileDir=`pwd`
scriptSelfBaseDir=`cd "$(dirname "$0")"; pwd`
sourceFile="${scriptSelfBaseDir}/${envDir}/config.php"
targetFile="${scriptSelfBaseDir}/../Application/Common/Conf/config.php"
cp -f ${sourceFile} ${targetFile}
