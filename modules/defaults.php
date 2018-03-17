<?php

// DO NOT MODIFY THIS FILE
// Please head to the config.sample.php
// and follow the instructions

// ----------- General Variables -----------

// autorefresh interval for the status webpage in seconds
$autoRefreshInSeconds = 5;

// Name of your node (default: your hostname)
$nanoNodeName = gethostname();

// a welcome message shown on top
$welcomeMsg = '';

// coinmarketcap widget
// market data base and second currency e.g. USD, EUR, BTC, ETH
$cmcBaseCurrency = 'USD';
$cmcSecondaryCurrency = 'BTC';

// other widget panels (TRUE / FALSE)
$cmcTicker = FALSE;
$cmcRank = FALSE;
$cmcMarketcap = FALSE;
$cmcVolume = FALSE;
$cmcStatsticker = FALSE;

// ----------- Nano Node Variables -----------

// ip address for RPC (default: 127.0.0.1)
$nanoNodeRPCIP   = '127.0.0.1';

// ip address for RPC (default: 7076)
$nanoNodeRPCPort = '7076';

// account of this node 
$nanoNodeAccount = 'xrb_1f56swb9qtpy3yoxiscq9799nerek153w43yjc9atoaeg3e91cc9zfr89ehj'; 

// donation account for maintaining this node
$nanoDonationAccount = 'xrb_1f56swb9qtpy3yoxiscq9799nerek153w43yjc9atoaeg3e91cc9zfr89ehj';

// number of decimal places to display Nano balances, i.e. 
$nanoNumDecimalPlaces = 2;