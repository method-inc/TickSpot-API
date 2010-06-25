<?php
#################################################################################################################
##  _____ _               _                      _____ _      _    _____             _      ___  ______ _____  ##
## /  ___| |             | |                    |_   _(_)    | |  /  ___|           | |    / _ \ | ___ \_   _| ##
## \ `--.| | _____   ___ | | ___   _ _ __ ___     | |  _  ___| | _\ `--. _ __   ___ | |_  / /_\ \| |_/ / | |   ##
##  `--. \ |/ / _ \ / _ \| |/ / | | | '_ ` _ \    | | | |/ __| |/ /`--. \ '_ \ / _ \| __| |  _  ||  __/  | |   ##
## /\__/ /   < (_) | (_) |   <| |_| | | | | | |   | | | | (__|   </\__/ / |_) | (_) | |_  | | | || |    _| |   ##
## \____/|_|\_\___/ \___/|_|\_\\__,_|_| |_| |_|   \_/ |_|\___|_|\_\____/| .__/ \___/ \__| \_| |_/\_|    \___/  ##
##                                                                      | |                                    ##
##                                                                      |_|                                    ##
#################################################################################################################
#################################################################################################################
##      This is the configuration file for setting up the API to communicate with your TickSpot Account        ##
#################################################################################################################
##                                                                                                             ##
##           Copyright (c) 2010 Skookum, Inc.                                                                  ##
##                                                                                                             ##
##           Permission is hereby granted, free of charge, to any person obtaining a copy                      ##
##           of this software and associated documentation files (the "Software"), to deal                     ##
##           in the Software without restriction, including without limitation the rights                      ##
##           to use, copy, modify, merge, publish, distribute, sublicense, and/or sell                         ##
##           copies of the Software, and to permit persons to whom the Software is                             ##
##           furnished to do so, subject to the following conditions:                                          ##
##                                                                                                             ##
##           The above copyright notice and this permission notice shall be included in                        ##
##           all copies or substantial portions of the Software.                                               ##
##                                                                                                             ##
##           THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR                        ##
##           IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,                          ##
##           FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE                       ##
##           AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER                            ##
##           LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,                     ##
##           OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN                         ##
##           THE SOFTWARE.                                                                                     ##
#################################################################################################################

//This is the name of your tickspot account which is what you use to login <compnay>.tickspot.com
defined('COMPANY')	? null : define("COMPANY", "your_compnay_name"); 

//This is the email account for the user you want to login with, In order to delete certain projects you will
//need an account with admin prividges. It should also be noted that this is the account that is set as the
//owner of each project that gets imported 
defined('EMAIL')	? null : define("EMAIL", "your_account_email"); 

//This is the password for the user with the email account entered above. Must be correct to perform actions
//included with the standard REST API and the additional features of the Skookum Tickspot API
defined('PASSWORD')	? null : define("PASSWORD", "your_account_password"); 

//If you would like to change your user agent for the robot to authenticate with the TickSpot service. 
//Adcanced users only, please do not change if you have no need to
defined('USERAGENT')	? null : define("USERAGENT", "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; en-us) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16"); 

//If you have a database that will be used to import your own Clients, Projects and Tasks into the system enter
//the credentials here and uncomment the line

//The location of the MySQL server that currently holds your Clients/Projects/Tasks
//defined('DB_SERVER')	? null : define("DB_SERVER", "your_company_server");

//A user account that has permissions to the nessesary tables in the database
//defined('DB_USER')		? null : define("DB_USER", "username");

//The password associated with the user account for logging into the database
//defined('DB_PASS')		? null : define("DB_PASS", "password");

//The database name
//defined('DB_NAME')		? null : define("DB_NAME", "you_company_database");
?>