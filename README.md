# PLUGIN FOR REPRODUCING ISSUE WoltLab/WCF#4444

This repository contains a little plugin for the WoltLab Suite Core 5.4 representing
an issue apparently introduced with with WoltLab/WCF#4431.

# Requirements
To reproduce the error described in issue WoltLab/WCF#4444 it is necessary to
install the release build of Suite Core 5.4.2 and take over the changes from
WoltLab/WCF#4431.

# Usage
* Clone the repository
* Create a new project in the ACP under `Configuration --> Developer Tool --> Projects` and use the
  `Import existing package` option with in combination with the downloaded sources from the cloned repository 
* Install the plugin and visit the controller `WSC_INSTALL_PATH/index.php?pr4425`.

