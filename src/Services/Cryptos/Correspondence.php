<?php

namespace App\Services\Cryptos;

class Correspondence 
{
    function getCorrespondence($acronym, $name = null)
    {
        $correspondence = array (
            'ADA' => array(
                'name' => 'Cardano',
                'id' => 'cardano',
                'acronym' => 'ada',
                'description' => 'CRYPTO_DESCRIPTION_ADA',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'ANKR' => array(
                'name' => 'Ankr',
                'id' => 'ankr',
                'acronym' => 'ankr',
                'description' => 'CRYPTO_DESCRIPTION_ANKR',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'ATOM' => array(
                'name' => 'Cosmos Hub',
                'id' => 'cosmos',
                'acronym' => 'atom',
                'description' => 'CRYPTO_DESCRIPTION_ATOM',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'AVAX' => array(
                'name' => 'Avalanche',
                'id' => 'avalanche-2',
                'acronym' => 'avax',
                'description' => 'CRYPTO_DESCRIPTION_AVAX',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'BEETS' => array(
                'name' => 'Beethoven X',
                'id' => 'beethoven-x',
                'acronym' => 'beets',
                'description' => 'CRYPTO_DESCRIPTION_BEETS',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'beFTM' => array(
                'name' => 'Beefy Escrowed Fantom',
                'id' => 'beefy-escrowed-fantom',
                'acronym' => 'beets',
                'description' => 'CRYPTO_DESCRIPTION_BEETS',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'BIFI' => array(
                'name' => 'Beefy.Finance',
                'id' => 'beefy-finance',
                'acronym' => 'bifi',
                'description' => 'CRYPTO_DESCRIPTION_BIFI',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'BIRB' => array(
                'name' => 'Birb',
                'id' => 'birb',
                'acronym' => 'birb',
                'description' => 'CRYPTO_DESCRIPTION_BIRB',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'binSPIRIT' => array(
                'name' => 'binSPIRIT',
                'id' => 'binspirit',
                'acronym' => 'birb',
                'description' => 'CRYPTO_DESCRIPTION_BIRB',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'BOBA' => array(
                'name' => 'Boba Network',
                'id' => 'boba-network',
                'acronym' => 'boba',
                'description' => 'CRYPTO_DESCRIPTION_BOBA',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'BOO' => array(
                'name' => 'Spookyswap',
                'id' => 'spookyswap',
                'acronym' => 'boba',
                'description' => 'CRYPTO_DESCRIPTION_BOO',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'BRUSH' => array(
                'name' => 'Paint Swap',
                'id' => 'paint-swap',
                'acronym' => 'brush',
                'description' => 'CRYPTO_DESCRIPTION_BRUSH',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'BSHARE' => array(
                'name' => 'Bomb Money BShare',
                'id' => 'bomb-money-bshare',
                'acronym' => 'bshare',
                'description' => 'CRYPTO_DESCRIPTION_BSHARE',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'BTC' => array(
                'name' => 'Bitcoin',
                'id' => 'bitcoin',
                'acronym' => 'btc',
                'description' => 'CRYPTO_DESCRIPTION_BTC',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'BUSD' => array(
                'name' => 'Binance USD',
                'id' => 'binance-usd',
                'acronym' => 'busd',
                'description' => 'CRYPTO_DESCRIPTION_BUSD',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'COMBO' => array(
                'name' => 'Furucombo',
                'id' => 'furucombo',
                'acronym' => 'COMBO',
                'description' => 'CRYPTO_DESCRIPTION_COMBO',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'COMP' => array(
                'name' => 'Compound',
                'id' => 'compound-governance-token',
                'acronym' => 'comp',
                'description' => 'CRYPTO_DESCRIPTION_COMP',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'CRO' => array(
                'name' => 'Cronos',
                'id' => 'crypto-com-chain',
                'acronym' => 'cro',
                'description' => 'CRYPTO_DESCRIPTION_CRO',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'CRV' => array(
                'name' => 'Curve DAO Token',
                'id' => 'curve-dao-token',
                'acronym' => 'srv',
                'description' => 'CRYPTO_DESCRIPTION_CRV',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'DAI' => array(
                'name' => 'DAI',
                'id' => 'dai',
                'acronym' => 'dai',
                'description' => 'CRYPTO_DESCRIPTION_DAI',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'DENT' => array(
                'name' => 'Dent',
                'id' => 'dent',
                'acronym' => 'dent',
                'description' => 'CRYPTO_DESCRIPTION_DENT',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'DEI' => array(
                'name' => 'DEI Token',
                'id' => 'dei-token',
                'acronym' => 'dei',
                'description' => 'CRYPTO_DESCRIPTION_DEI',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'DEUS' => array(
                'name' => 'DEUS Finance',
                'id' => 'deus-finance-2',
                'acronym' => 'deus',
                'description' => 'CRYPTO_DESCRIPTION_DEUS',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'dKNIGHT' => array(
                'name' => 'Dark Knight',
                'id' => 'darkknight',
                'acronym' => 'dknight',
                'description' => 'CRYPTO_DESCRIPTION_DKNIGHT',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'ELITE' => array(
                'name' => 'Ethereum Lite',
                'id' => 'ethereum-lite',
                'acronym' => 'elite',
                'description' => 'CRYPTO_DESCRIPTION_ELITE',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'Elonmoon' => array(
                'name' => 'Elonmoon',
                'id' => 'elonmoon',
                'acronym' => 'elonmoon',
                'description' => 'CRYPTO_DESCRIPTION_ELONMOON',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'ENS' => array(
                'name' => 'Ethereum Name Service',
                'id' => 'ethereum-name-service',
                'acronym' => 'ens',
                'description' => 'CRYPTO_DESCRIPTION_ENS',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'ETH' => array(
                'name' => 'Ethereum',
                'id' => 'ethereum',
                'acronym' => 'eth',
                'description' => 'CRYPTO_DESCRIPTION_ETH',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'FEAR' => array(
                'name' => 'Fear',
                'id' => 'fear',
                'acronym' => 'fear',
                'description' => 'CRYPTO_DESCRIPTION_FEAR',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'FRAX' => array(
                'name' => 'Frax',
                'id' => 'frax',
                'acronym' => 'frax',
                'description' => 'CRYPTO_DESCRIPTION_FRAX',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'FTM' => array(
                'name' => 'Fantom',
                'id' => 'fantom',
                'acronym' => 'ftm',
                'description' => 'CRYPTO_DESCRIPTION_FTM',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'FOL' => array(
                'name' => 'Folder Protocol',
                'id' => 'folder-protocol',
                'acronym' => 'fol',
                'description' => 'CRYPTO_DESCRIPTION_FOL',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'FSM' => array(
                'name' => 'Fantasm FSM',
                'id' => 'fantasm-fsm',
                'acronym' => 'fsm',
                'description' => 'CRYPTO_DESCRIPTION_FSM',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'FXS' => array(
                'name' => 'Frax Share',
                'id' => 'frax-share',
                'acronym' => 'fxs',
                'description' => 'CRYPTO_DESCRIPTION_FXS',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'gDAI' => array(
                'name' => 'Geist Dai',
                'id' => 'geist-dai',
                'acronym' => 'gdai',
                'description' => 'CRYPTO_DESCRIPTION_GDAI',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'GEIST' => array(
                'name' => 'Geist Finance',
                'id' => 'geist-finance',
                'acronym' => 'geist',
                'description' => 'CRYPTO_DESCRIPTION_GEIST',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'gfUSDT' => array(
                'name' => 'Geist fUSDT',
                'id' => 'geist-fusdt',
                'acronym' => 'gfusdt',
                'description' => 'CRYPTO_DESCRIPTION_GFUSDT',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'gUSDC' => array(
                'name' => 'Geist USDC',
                'id' => 'geist-usdc',
                'acronym' => 'gusdc',
                'description' => 'CRYPTO_DESCRIPTION_GUSDC',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'GINSPIRIT' => array(
                'name' => 'GinSpirit',
                'id' => 'ginspirit',
                'acronym' => 'ginspirit',
                'description' => 'CRYPTO_DESCRIPTION_GINSPIRIT',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'GMI' => array(
                'name' => 'Bankless DeFi Innovation Index',
                'id' => 'bankless-defi-innovation-index',
                'acronym' => 'gmi',
                'description' => 'CRYPTO_DESCRIPTION_GMI',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'GSCARAB' => array(
                'name' => 'GScarab',
                'id' => 'gscarab',
                'acronym' => 'gscarab',
                'description' => 'CRYPTO_DESCRIPTION_GSCARAB',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'GTC' => array(
                'name' => 'Gitcoin',
                'id' => 'gitcoin',
                'acronym' => 'gtc',
                'description' => 'CRYPTO_DESCRIPTION_GTC',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'hDAI' => array(
                'name' => 'DAI Hop Token',
                'id' => 'dai',
                'acronym' => 'dai',
                'description' => 'CRYPTO_DESCRIPTION_DAI',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'hETH' => array(
                'name' => 'ETH Hop Token',
                'id' => 'ethereum',
                'acronym' => 'eth',
                'description' => 'CRYPTO_DESCRIPTION_ETH',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'hUSDC' => array(
                'name' => 'USDC Hop Token',
                'id' => 'usd-coin',
                'acronym' => 'usdc',
                'description' => 'CRYPTO_DESCRIPTION_USDC',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'HEC' => array(
                'name' => 'Hector Finance',
                'id' => 'hector-dao',
                'acronym' => 'hec',
                'description' => 'CRYPTO_DESCRIPTION_HEC',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'HEX' => array(
                'name' => 'HEX',
                'id' => 'hex',
                'acronym' => 'hex',
                'description' => 'CRYPTO_DESCRIPTION_HEX',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'HND' => array(
                'name' => 'Hundred Finance',
                'id' => 'hundred-finance',
                'acronym' => 'hnd',
                'description' => 'CRYPTO_DESCRIPTION_HND',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'HTMoon' => array(
                'name' => 'HTMoon',
                'id' => 'htmoon',
                'acronym' => 'htmoon',
                'description' => 'CRYPTO_DESCRIPTION_HTMOON',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'INDEX' => array(
                'name' => 'Index Cooperative',
                'id' => 'index-cooperative',
                'acronym' => 'index',
                'description' => 'CRYPTO_DESCRIPTION_INDEX',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'IB' => array(
                'name' => 'Iron Bank',
                'id' => 'iron-bank',
                'acronym' => 'ib',
                'description' => 'CRYPTO_DESCRIPTION_IB',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'LDO' => array(
                'name' => 'Lido DAO',
                'id' => 'lido-dao',
                'acronym' => 'ldo',
                'description' => 'CRYPTO_DESCRIPTION_LDO',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'LINK' => array(
                'name' => 'Chainlink',
                'id' => 'chainlink',
                'acronym' => 'link',
                'description' => 'CRYPTO_DESCRIPTION_LINK',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'LINSPIRIT' => array(
                'name' => 'linSpirit',
                'id' => 'linspirit',
                'acronym' => 'linspirit',
                'description' => 'CRYPTO_DESCRIPTION_LINSPIRIT',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'LIQR' => array(
                'name' => 'Topshelf Finance',
                'id' => 'topshelf-finance',
                'acronym' => 'liqr',
                'description' => 'CRYPTO_DESCRIPTION_LIQR',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'LQTY' => array(
                'name' => 'Liquity',
                'id' => 'liquity',
                'acronym' => 'lqty',
                'description' => 'CRYPTO_DESCRIPTION_LQTY',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'LOVE' => array(
                'name' => 'UkraineDAO Flag NFT',
                'id' => 'ukrainedao-flag-nft',
                'acronym' => 'love',
                'description' => 'CRYPTO_DESCRIPTION_LOVE',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'LTC' => array(
                'name' => 'Litecoin',
                'id' => 'litecoin',
                'acronym' => 'ltc',
                'description' => 'CRYPTO_DESCRIPTION_LTC',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'LUSD' => array(
                'name' => 'Limited USD',
                'id' => 'limited-usd',
                'acronym' => 'ltc',
                'description' => 'CRYPTO_DESCRIPTION_LUSD',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'MAGIK' => array(
                'name' => 'Magik',
                'id' => 'magik',
                'acronym' => 'magik',
                'description' => 'CRYPTO_DESCRIPTION_MAGIK',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'MATIC' => array(
                'name' => 'Polygon',
                'id' => 'matic-network',
                'acronym' => 'matic',
                'description' => 'CRYPTO_DESCRIPTION_MATIC',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'Metis' => array(
                'name' => 'Metis Token',
                'id' => 'metis',
                'acronym' => 'metis',
                'description' => 'CRYPTO_DESCRIPTION_METIS',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'MIM' => array(
                'name' => 'Magic Internet Money',
                'id' => 'magic-internet-money',
                'acronym' => 'mim',
                'description' => 'CRYPTO_DESCRIPTION_MIM',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'miMATIC' => array(
                'name' => 'MAI',
                'id' => 'mimatic',
                'acronym' => 'mimatic',
                'description' => 'CRYPTO_DESCRIPTION_MIMATIC',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'MLN' => array(
                'name' => 'Enzyme',
                'id' => 'melon',
                'acronym' => 'mln',
                'description' => 'CRYPTO_DESCRIPTION_MLN',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'MSHARE' => array(
                'name' => 'MShare',
                'id' => 'mshare',
                'acronym' => 'mshare',
                'description' => 'CRYPTO_DESCRIPTION_MSHARE',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'MTK' => array(
                'name' => 'Metakings',
                'id' => 'metakings',
                'acronym' => 'mtk',
                'description' => 'CRYPTO_DESCRIPTION_MTK',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'MULTI' => array(
                'name' => 'Multichain',
                'id' => 'multichain',
                'acronym' => 'multi',
                'description' => 'CRYPTO_DESCRIPTION_MULTI',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'NESS' => array(
                'name' => 'Darkness Share',
                'id' => 'darkness-share',
                'acronym' => 'ness',
                'description' => 'CRYPTO_DESCRIPTION_NESS',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'OCTA' => array(
                'name' => 'OctaPay',
                'id' => 'octapay',
                'acronym' => 'octa',
                'description' => 'CRYPTO_DESCRIPTION_OCTA',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'OATH' => array(
                'name' => 'Oath',
                'id' => 'oath',
                'acronym' => 'oath',
                'description' => 'CRYPTO_DESCRIPTION_OATH',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'OLO' => array(
                'name' => 'OolongSwap',
                'id' => 'oolongswap',
                'acronym' => 'olo',
                'description' => 'CRYPTO_DESCRIPTION_OLO',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'OXD' => array(
                'name' => '0xDAO',
                'id' => '0xdao',
                'acronym' => 'oxd',
                'description' => 'CRYPTO_DESCRIPTION_OXD',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'oxSOLID' => array(
                'name' => 'oxSOLID',
                'id' => 'oxsolid',
                'acronym' => 'oxsolid',
                'description' => 'CRYPTO_DESCRIPTION_OXSOLID',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'POAP' => array(
                'name' => 'Proof-Of-Attendance Protocol',
                'id' => 'poap',
                'acronym' => 'poap',
                'description' => 'CRYPTO_DESCRIPTION_POAP',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'PolyDoge' => array(
                'name' => 'PolyDoge',
                'id' => 'polydoge',
                'acronym' => 'polydoge',
                'description' => 'CRYPTO_DESCRIPTION_POLYDOGE',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'PRIA' => array(
                'name' => 'PRIA',
                'id' => 'pria',
                'acronym' => 'pria',
                'description' => 'CRYPTO_DESCRIPTION_PRIA',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'RADAR' => array(
                'name' => 'DappRadar',
                'id' => 'dappradar',
                'acronym' => 'radar',
                'description' => 'CRYPTO_DESCRIPTION_RADAR',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'RDL' => array(
                'name' => 'Radial Finance',
                'id' => 'radial-finance',
                'acronym' => 'rdl',
                'description' => 'CRYPTO_DESCRIPTION_RDL',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'REFI' => array(
                'name' => 'Reimagined Finance',
                'id' => 'refi',
                'acronym' => 'refi',
                'description' => 'CRYPTO_DESCRIPTION_REFI',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'renBTC' => array(
                'name' => 'renBTC',
                'id' => 'renbtc',
                'acronym' => 'renbtc',
                'description' => 'CRYPTO_DESCRIPTION_RENBTC',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'SC' => array(
                'name' => 'Sia coin',
                'id' => 'siacoin',
                'acronym' => 'sc',
                'description' => 'CRYPTO_DESCRIPTION_SC',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'SCARAB' => array(
                'name' => 'Scarab Finance',
                'id' => 'scarab-finance',
                'acronym' => 'scarab',
                'description' => 'CRYPTO_DESCRIPTION_SCARAB',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'SCREAM' => array(
                'name' => 'Scream',
                'id' => 'scream',
                'acronym' => 'scream',
                'description' => 'CRYPTO_DESCRIPTION_SCREAM',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'SEX' => array(
                'name' => 'Solidex',
                'id' => 'solidex',
                'acronym' => 'sex',
                'description' => 'CRYPTO_DESCRIPTION_SEX',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'SOLAR' => array(
                'name' => 'Solarbeam',
                'id' => 'solarbeam',
                'acronym' => 'solar',
                'description' => 'CRYPTO_DESCRIPTION_SOLAR',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'SOLID' => array(
                'name' => 'Solidly',
                'id' => 'solidly',
                'acronym' => 'solid',
                'description' => 'CRYPTO_DESCRIPTION_SOLID',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'SOLIDsex' => array(
                'name' => 'SOLIDsex: Tokenized veSOLID',
                'id' => 'solidsex-tokenized-vesolid',
                'acronym' => 'solidsex',
                'description' => 'CRYPTO_DESCRIPTION_SOLIDSEX',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'SPIRIT' => array(
                'name' => 'SpiritSwap',
                'id' => 'spiritswap',
                'acronym' => 'spirit',
                'description' => 'CRYPTO_DESCRIPTION_SPIRIT',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'SPOOL' => array(
                'name' => 'Spool DAO Token',
                'id' => 'spool-dao-token',
                'acronym' => 'spool',
                'description' => 'CRYPTO_DESCRIPTION_SPOOL',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'SYN' => array(
                'name' => 'Synapse',
                'id' => 'synapse-2',
                'acronym' => 'syn',
                'description' => 'CRYPTO_DESCRIPTION_SYN',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'TAROT' => array(
                'name' => 'Tarot',
                'id' => 'tarot',
                'acronym' => 'tarot',
                'description' => 'CRYPTO_DESCRIPTION_TAROT',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'TNGL' => array(
                'name' => 'Tangle',
                'id' => 'tangle',
                'acronym' => 'tngl',
                'description' => 'CRYPTO_DESCRIPTION_TNGL',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'TOMB' => array(
                'name' => 'Tomb',
                'id' => 'tomb',
                'acronym' => 'tomb',
                'description' => 'CRYPTO_DESCRIPTION_TOMB',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'TOR' => array(
                'name' => 'TOR',
                'id' => 'tor',
                'acronym' => 'tor',
                'description' => 'CRYPTO_DESCRIPTION_TOR',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'TRIPS' => array(
                'name' => 'Trips Community',
                'id' => 'trips-community',
                'acronym' => 'trips',
                'description' => 'CRYPTO_DESCRIPTION_TRIPS',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'TSHARE' => array(
                'name' => 'Tomb Shares',
                'id' => 'tomb-shares',
                'acronym' => 'tshare',
                'description' => 'CRYPTO_DESCRIPTION_TSHARE',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'UBQ' => array(
                'name' => 'Ubiq',
                'id' => 'ubiq',
                'acronym' => 'ubq',
                'description' => 'CRYPTO_DESCRIPTION_UBQ',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'VIB' => array(
                'name' => 'Viberate',
                'id' => 'viberate',
                'acronym' => 'vib',
                'description' => 'CRYPTO_DESCRIPTION_VIB',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'VIS' => array(
                'name' => 'Vigorus',
                'id' => 'vigorus',
                'acronym' => 'vis',
                'description' => 'CRYPTO_DESCRIPTION_VIS',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'WBOND' => array(
                'name' => 'War Bond',
                'id' => 'war-bond',
                'acronym' => 'wbond',
                'description' => 'CRYPTO_DESCRIPTION_WBOND',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'WBTC' => array(
                'name' => 'Wrapped BTC',
                'id' => 'wrapped-bitcoin',
                'acronym' => 'wbtc',
                'description' => 'CRYPTO_DESCRIPTION_WBTC',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'WETH' => array(
                'name' => 'Wrapped ETH',
                'id' => 'weth',
                'acronym' => 'weth',
                'description' => 'CRYPTO_DESCRIPTION_WETH',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'WeVE' => array(
                'name' => 'veDAO',
                'id' => 'vedao',
                'acronym' => 'weve',
                'description' => 'CRYPTO_DESCRIPTION_WEVE',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'WFTM' => array(
                'name' => 'Wrapped Fantom',
                'id' => 'wrapped-fantom',
                'acronym' => 'wftm',
                'description' => 'CRYPTO_DESCRIPTION_WFTM',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'WMATIC' => array(
                'name' => 'Wrapped MATIC',
                'id' => 'wmatic',
                'acronym' => 'wmatic',
                'description' => 'CRYPTO_DESCRIPTION_WMATIC',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'WMOVR' => array(
                'name' => 'Wrapped MOVR',
                'id' => 'moonriver',
                'acronym' => 'wmovr',
                'description' => 'CRYPTO_DESCRIPTION_WMOVR',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'WOOFY' => array(
                'name' => 'Woofy',
                'id' => 'woofy',
                'acronym' => 'woofy',
                'description' => 'CRYPTO_DESCRIPTION_WOOFY',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'WORLD' => array(
                'name' => 'World Token',
                'id' => 'world-token',
                'acronym' => 'world',
                'description' => 'CRYPTO_DESCRIPTION_WORLD',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'wpc' => array(
                'name' => 'WePiggy Coin',
                'id' => 'wepiggy-coin',
                'acronym' => 'wpc',
                'description' => 'CRYPTO_DESCRIPTION_WPC',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'WRLD' => array(
                'name' => 'Nft Worlds',
                'id' => 'nft-worlds',
                'acronym' => 'wrld',
                'description' => 'CRYPTO_DESCRIPTION_WRLD',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'YFI' => array(
                'name' => 'yearn.finance',
                'id' => 'yearn-finance',
                'acronym' => 'yfi',
                'description' => 'CRYPTO_DESCRIPTION_YFI',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'xDai' => array(
                'name' => 'xDai',
                'id' => 'xdai',
                'acronym' => 'xdai',
                'description' => 'CRYPTO_DESCRIPTION_XDAI',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'XDO' => array(
                'name' => 'xDollar',
                'id' => 'xdollar',
                'acronym' => 'xdo',
                'description' => 'CRYPTO_DESCRIPTION_XDAI',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            /* --- FIAT --- */
            'USD' => array(
                'name' => 'Dollar',
                'id' => 'dollar',
                'acronym' => 'usd',
                'description' => 'CRYPTO_DESCRIPTION_USD',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'EUR' => array(
                'name' => 'Euro',
                'id' => 'euro',
                'acronym' => 'eur',
                'description' => 'CRYPTO_DESCRIPTION_EUR',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            /* --- STABLE --- */
            'USDT' => array(
                'name' => 'Tether',
                'id' => 'tether',
                'acronym' => 'usdt',
                'description' => 'CRYPTO_DESCRIPTION_USDT',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'USDC' => array(
                'name' => 'USD coin',
                'id' => 'usd-coin',
                'acronym' => 'usdc',
                'description' => 'CRYPTO_DESCRIPTION_USDC',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            /* --- EXCHANGE CRYPTO --- */
            'BNB' => array(
                'name' => 'Binance coin',
                'id' => 'binancecoin',
                'acronym' => 'bnb',
                'description' => 'CRYPTO_DESCRIPTION_BNB',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            /* --- DOT ECOSYSTEM --- */
            'DOT' => array(
                'name' => 'Polkadot',
                'id' => 'polkadot',
                'acronym' => 'dot',
                'description' => 'CRYPTO_DESCRIPTION_DOT',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'KSM' => array(
                'name' => 'Kusama',
                'id' => 'kusama',
                'acronym' => 'ksm',
                'description' => 'CRYPTO_DESCRIPTION_KSM',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'ACA' => array(
                'name' => 'Acala',
                'id' => 'acala',
                'acronym' => 'aca',
                'description' => 'CRYPTO_DESCRIPTION_ACA',
                'social_network' => [
                    'homepage' => 'https://acala.network/',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/AcalaNetwork',
                    'discord' => 'https://discord.com/invite/6QHVY4X',
                    'telegram' => 'https://t.me/acalaofficial',
                    'medium' => 'https://medium.com/acalanetwork',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'KAR' => array(
                'name' => 'Karura',
                'id' => 'karura',
                'acronym' => 'kar',
                'description' => 'CRYPTO_DESCRIPTION_KAR',
                'social_network' => [
                    'homepage' => 'https://acala.network/karura',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/KaruraNetwork',
                    'discord' => 'https://discord.com/invite/6QHVY4X',
                    'telegram' => 'https://t.me/karuranetwork',
                    'medium' => 'https://medium.com/acalanetwork',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'NEER' => array(
                'name' => 'Bit.Country Pioneer',
                'id' => 'bit country',
                'acronym' => 'neer',
                'description' => 'CRYPTO_DESCRIPTION_NEER',
                'social_network' => [
                    'homepage' => 'http://bit.country/',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/BC_Pioneer',
                    'discord' => 'https://discord.gg/PaMAXZZ59N',
                    'telegram' => 'https://t.me/BitCountryOfficialTG',
                    'medium' => 'https://medium.com/@bitcountry',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'BNC' => array(
                'name' => 'Bifrost',
                'id' => 'bifrost',
                'acronym' => 'bnc',
                'description' => 'CRYPTO_DESCRIPTION_BNC',
                'social_network' => [
                    'homepage' => 'https://bifrost.finance',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/bifrost_finance',
                    'discord' => 'https://discord.com/invite/XjnjdKBNXj',
                    'telegram' => 'https://t.me/bifrost_finance',
                    'medium' => 'https://bifrost-finance.medium.com/',
                    'reddit' => 'https://www.reddit.com/r/bifrostfinance/',
                    'subsocial' => ''
                ]
            ),
            'ASTR' => array(
                'name' => 'Astar',
                'id' => 'astar',
                'acronym' => 'astr',
                'description' => 'CRYPTO_DESCRIPTION_ASTR',
                'social_network' => [
                    'homepage' => 'https://astar.network',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/AstarNetwork',
                    'discord' => 'https://discord.gg/Z3nC9U4',
                    'telegram' => 'https://t.me/PlasmOfficial',
                    'medium' => 'https://medium.com/astar-network',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'GENS' => array(
                'name' => 'Genshiro',
                'id' => 'genshiro',
                'acronym' => 'gens',
                'description' => 'CRYPTO_DESCRIPTION_GENS',
                'social_network' => [
                    'homepage' => 'https://genshiro.equilibrium.io',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/GenshiroDeFi',
                    'discord' => 'https://discord.gg/z3qE9F2R',
                    'telegram' => 'https://t.me/equilibrium_eosdt_official',
                    'medium' => 'https://medium.com/equilibrium-eosdt',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'SDN' => array(
                'name' => 'Shiden Network',
                'id' => 'shiden',
                'acronym' => 'sdn',
                'description' => 'CRYPTO_DESCRIPTION_SDN',
                'social_network' => [
                    'homepage' => 'https://shiden.astar.network',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/ShidenNetwork',
                    'discord' => 'https://discord.gg/Z3nC9U4',
                    'telegram' => 'https://t.me/PlasmOfficial',
                    'medium' => 'https://medium.com/astar-network',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'KMA' => array(
                'name' => 'Calamari Network',
                'id' => 'calamari',
                'acronym' => 'kma',
                'description' => 'CRYPTO_DESCRIPTION_KMA',
                'social_network' => [
                    'homepage' => 'https://www.calamari.network/',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/CalamariNetwork',
                    'discord' => '',
                    'telegram' => 'https://t.me/mantanetwork',
                    'medium' => 'https://mantanetwork.medium.com/',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'HKO' => array(
                'name' => 'Heiko Finance',
                'id' => 'heiko',
                'acronym' => 'hko',
                'description' => 'CRYPTO_DESCRIPTION_HKO',
                'social_network' => [
                    'homepage' => 'https://parallel.fi/networks/kusama.html',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/ParallelFi',
                    'discord' => 'https://discord.gg/buKKx4dySW',
                    'telegram' => 'https://t.me/parallelfi',
                    'medium' => 'https://parallelfinance.medium.com/',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'PARA' => array(
                'name' => 'Parallel Finance',
                'id' => 'parallel',
                'acronym' => 'para',
                'description' => 'CRYPTO_DESCRIPTION_PARA',
                'social_network' => [
                    'homepage' => 'https://parallel.fi/',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/ParallelFi',
                    'discord' => 'https://discord.gg/buKKx4dySW',
                    'telegram' => 'https://t.me/parallelfi',
                    'medium' => 'https://parallelfinance.medium.com/',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'GLMR' => array(
                'name' => 'Moonbeam',
                'id' => 'moonbeam',
                'acronym' => 'glmr',
                'description' => 'CRYPTO_DESCRIPTION_GLMR',
                'social_network' => [
                    'homepage' => 'https://moonbeam.network/',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/MoonbeamNetwork',
                    'discord' => 'https://discord.gg/PfpUATX',
                    'telegram' => 'https://t.me/Moonbeam_Official',
                    'medium' => 'https://medium.com/moonbeam-network',
                    'reddit' => 'https://www.reddit.com/r/moonbeam/',
                    'subsocial' => ''
                ]
            ),
            'MOVR' => array(
                'name' => 'Moonriver',
                'id' => 'moonriver',
                'acronym' => 'movr',
                'description' => 'CRYPTO_DESCRIPTION_MOVR',
                'social_network' => [
                    'homepage' => 'https://moonbeam.foundation/moonriver-token/',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/MoonbeamNetwork',
                    'discord' => 'https://discord.gg/PfpUATX',
                    'telegram' => 'https://t.me/Moonbeam_Official',
                    'medium' => 'https://medium.com/moonbeam-network',
                    'reddit' => 'https://www.reddit.com/r/moonbeam/',
                    'subsocial' => ''
                ]
            ),
            'AIR' => array(
                'name' => 'Altair',
                'id' => 'altair',
                'acronym' => 'air',
                'description' => 'CRYPTO_DESCRIPTION_AIR',
                'social_network' => [
                    'homepage' => 'https://centrifuge.io/altair/',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/altair_network',
                    'discord' => 'https://centrifuge.io/discord',
                    'telegram' => 'https://t.me/centrifuge_chat',
                    'medium' => 'https://medium.com/altair-network',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'K-PHA' => array(
                'name' => 'Khala Network',
                'id' => 'pha',
                'acronym' => 'pha',
                'description' => 'CRYPTO_DESCRIPTION_K-PHA',
                'social_network' => [
                    'homepage' => 'https://phala.network/khala',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/PhalaNetwork',
                    'discord' => 'https://discord.gg/CKaKkBGbcy',
                    'telegram' => 'https://t.me/joinchat/I-ejoxKrdHlOx_zv9VsykA',
                    'medium' => 'https://medium.com/phala-network',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'PHA' => array(
                'name' => 'Phala Network',
                'id' => 'pha',
                'acronym' => 'pha',
                'description' => 'CRYPTO_DESCRIPTION_PHA',
                'social_network' => [
                    'homepage' => 'https://phala.network/',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/PhalaNetwork',
                    'discord' => 'https://discord.gg/CKaKkBGbcy',
                    'telegram' => 'https://t.me/joinchat/I-ejoxKrdHlOx_zv9VsykA',
                    'medium' => 'https://medium.com/phala-network',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'KINT' => array(
                'name' => 'Kintsugi',
                'id' => 'kintsugi',
                'acronym' => 'kint',
                'description' => 'CRYPTO_DESCRIPTION_KINT',
                'social_network' => [
                    'homepage' => 'https://kintsugi.interlay.io/',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/kintsugi_btc',
                    'discord' => 'https://discord.gg/KgCYK3MKSf',
                    'telegram' => 'https://t.me/interlay_community',
                    'medium' => 'https://medium.com/interlay',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'BSX' => array(
                'name' => 'Basilisk',
                'id' => 'basilisk',
                'acronym' => 'kint',
                'description' => 'CRYPTO_DESCRIPTION_BSX',
                'social_network' => [
                    'homepage' => 'https://bsx.fi/',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/bsx_finance',
                    'discord' => 'https://discord.gg/S8YZj5aXR6',
                    'telegram' => 'https://t.me/bsx_fi',
                    'medium' => 'https://basiliskfi.substack.com/',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'QTZ' => array(
                'name' => 'Quartz',
                'id' => 'quartz',
                'acronym' => 'qtz',
                'description' => 'CRYPTO_DESCRIPTION_QTZ',
                'social_network' => [
                    'homepage' => 'https://unique.network/quartz/',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/Unique_NFTchain',
                    'discord' => 'https://discord.gg/jHVdZhsakC',
                    'telegram' => 'https://t.me/Uniquechain',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'KILT' => array(
                'name' => 'KILT Protocol',
                'id' => 'kilt',
                'acronym' => 'kilt',
                'description' => 'CRYPTO_DESCRIPTION_KILT',
                'social_network' => [
                    'homepage' => 'https://kilt.io/',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/Kiltprotocol',
                    'discord' => '',
                    'telegram' => 'https://t.me/KILTProtocolChat',
                    'medium' => 'https://kilt-protocol.medium.com/',
                    'reddit' => 'https://www.reddit.com/r/KiltProtocol/',
                    'subsocial' => ''
                ]
            ),
            'PICA' => array(
                'name' => 'Picasso',
                'id' => 'picasso',
                'acronym' => 'pica',
                'description' => 'CRYPTO_DESCRIPTION_PICA',
                'social_network' => [
                    'homepage' => 'https://picasso.composable.finance/',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/ComposableFin',
                    'discord' => 'https://discord.gg/pFZn2GCn65',
                    'telegram' => 'https://t.me/ComposableFinanceAnnouncements',
                    'medium' => 'https://composablefi.medium.com/',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'CLV' => array(
                'name' => 'Clover Finance',
                'id' => 'clover',
                'acronym' => 'clv',
                'description' => 'CRYPTO_DESCRIPTION_CLV',
                'social_network' => [
                    'homepage' => 'https://clover.finance/',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/clover_finance',
                    'discord' => '',
                    'telegram' => 'https://t.me/clover_en',
                    'medium' => 'https://projectclover.medium.com/',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'GOV' => array(
                'name' => 'SubDAO',
                'id' => 'subdao',
                'acronym' => 'gov',
                'description' => 'CRYPTO_DESCRIPTION_GOV',
                'social_network' => [
                    'homepage' => 'https://www.subdao.network/',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/subdao_network',
                    'discord' => '',
                    'telegram' => 'https://t.me/subdao',
                    'medium' => 'https://subdao.medium.com',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'PCHU' => array(
                'name' => 'Pichiu',
                'id' => 'pichiu',
                'acronym' => 'pchu',
                'description' => 'CRYPTO_DESCRIPTION_PCHU',
                'social_network' => [
                    'homepage' => 'https://kylin.network/',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/Kylin_Network',
                    'discord' => 'https://discord.com/invite/PwYCssr',
                    'telegram' => 'https://t.me/KylinOfficial',
                    'medium' => 'https://kylinnetwork.medium.com/',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'EQ' => array(
                'name' => 'Equilibrium',
                'id' => 'equilibrium',
                'acronym' => 'eq',
                'description' => 'CRYPTO_DESCRIPTION_EQ',
                'social_network' => [
                    'homepage' => 'https://equilibrium.io/',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/EquilibriumDeFi',
                    'discord' => '',
                    'telegram' => 'https://t.me/equilibrium_eosdt_official',
                    'medium' => 'https://medium.com/equilibrium-eosdt',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'CRU' => array(
                'name' => 'Crust Network',
                'id' => 'crust-network',
                'acronym' => 'cru',
                'description' => 'CRYPTO_DESCRIPTION_CRU',
                'social_network' => [
                    'homepage' => 'https://crust.network/',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/crustnetwork',
                    'discord' => 'https://discord.com/invite/Jbw2PAUSCR',
                    'telegram' => 'https://t.me/CrustNetwork',
                    'medium' => 'https://crustnetwork.medium.com/',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'CSM' => array(
                'name' => 'Crust Shadow',
                'id' => 'crust-storage-market',
                'acronym' => 'csm',
                'description' => 'CRYPTO_DESCRIPTION_CSM',
                'social_network' => [
                    'homepage' => 'https://crust.network/',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/crustnetwork',
                    'discord' => 'https://discord.com/invite/Jbw2PAUSCR',
                    'telegram' => 'https://t.me/CrustNetwork',
                    'medium' => 'https://crustnetwork.medium.com/',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'SKU' => array(
                'name' => 'Sakura',
                'id' => 'sakura',
                'acronym' => 'sku',
                'description' => 'CRYPTO_DESCRIPTION_SKU',
                'social_network' => [
                    'homepage' => 'https://clover.finance/',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/clover_finance',
                    'discord' => '',
                    'telegram' => 'https://t.me/clover_en',
                    'medium' => 'https://projectclover.medium.com/',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'NODL' => array(
                'name' => 'Nodle',
                'id' => 'nodle',
                'acronym' => 'nodl',
                'description' => 'CRYPTO_DESCRIPTION_NODL',
                'social_network' => [
                    'homepage' => 'https://nodle.com',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/NodleNetwork',
                    'discord' => 'https://discord.gg/N5nTUt8RWJ',
                    'telegram' => 'https://t.me/nodlecommunity',
                    'medium' => 'https://nodle.medium.com',
                    'reddit' => 'https://www.reddit.com/r/Nodle/',
                    'subsocial' => 'https://app.subsocial.network/@Nodle'
                ]
            ),
            'MANTA' => array(
                'name' => 'Manta Network',
                'id' => 'manta',
                'acronym' => 'manta',
                'description' => 'CRYPTO_DESCRIPTION_MANTA',
                'social_network' => [
                    'homepage' => 'https://manta.network',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/mantanetwork',
                    'discord' => 'https://discord.gg/5khsf6QmCb',
                    'telegram' => 'https://t.me/mantanetwork',
                    'medium' => 'https://mantanetwork.medium.com/',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'CFG' => array(
                'name' => 'Centrifuge',
                'id' => 'centrifuge',
                'acronym' => 'cfg',
                'description' => 'CRYPTO_DESCRIPTION_CFG',
                'social_network' => [
                    'homepage' => 'https://centrifuge.io/',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/centrifuge',
                    'discord' => 'https://centrifuge.io/discord',
                    'telegram' => 'https://t.me/centrifuge_chat',
                    'medium' => 'https://medium.com/centrifuge',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'LIT' => array(
                'name' => 'Litentry',
                'id' => 'litentry',
                'acronym' => 'lit',
                'description' => 'CRYPTO_DESCRIPTION_LIT',
                'social_network' => [
                    'homepage' => 'https://www.litentry.com/',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/litentry',
                    'discord' => 'https://discord.gg/bn6Qcwp6',
                    'telegram' => 'https://t.me/Litentry',
                    'medium' => 'https://medium.com/litentry',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'TEER' => array(
                'name' => 'Integritee Network',
                'id' => 'integritee',
                'acronym' => 'teer',
                'description' => 'CRYPTO_DESCRIPTION_TEER',
                'social_network' => [
                    'homepage' => 'https://integritee.network/',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/integri_t_e_e',
                    'discord' => 'https://discord.com/invite/anhtxwr4eS',
                    'telegram' => 'https://t.me/Integritee_Official',
                    'medium' => 'https://medium.com/integritee',
                    'reddit' => '',
                    'subsocial' => 'https://app.subsocial.network/4638'
                ]
            ),
            'SUB' => array(
                'name' => 'SubSocial',
                'id' => 'subsocial',
                'acronym' => 'sub',
                'description' => 'CRYPTO_DESCRIPTION_SUB',
                'social_network' => [
                    'homepage' => 'http://subsocial.network',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/SubsocialChain',
                    'discord' => 'https://discord.com/invite/w2Rqy2M',
                    'telegram' => 'https://t.me/Subsocial',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => 'https://app.subsocial.network/@subsocial'
                ]
            ),
            'HDX' => array(
                'name' => 'HydraDX',
                'id' => 'hydradx',
                'acronym' => 'hdx',
                'description' => 'CRYPTO_DESCRIPTION_HDX',
                'social_network' => [
                    'homepage' => 'https://hydradx.io/',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/hydra_dx',
                    'discord' => 'https://discord.com/invite/xtVnQgq',
                    'telegram' => 'https://t.me/hydradx',
                    'medium' => 'https://hydradx.substack.com',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'RING' => array(
                'name' => 'Darwinia Network',
                'id' => 'darwinia-network-native-token',
                'acronym' => 'ring',
                'description' => 'CRYPTO_DESCRIPTION_RING',
                'social_network' => [
                    'homepage' => 'https://darwinia.network/',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/DarwiniaNetwork',
                    'discord' => 'https://discord.gg/3UvDSgQPxk',
                    'telegram' => 'https://t.me/DarwiniaNetwork',
                    'medium' => 'https://darwinianetwork.medium.com/',
                    'reddit' => 'https://www.reddit.com/r/DarwiniaFans/',
                    'subsocial' => 'https://app.subsocial.network/@Darwinia'
                ]
            ),
            'KTON' => array(
                'name' => 'Darwinia Commitment',
                'id' => 'darwinia-commitment-token',
                'acronym' => 'kton',
                'description' => 'CRYPTO_DESCRIPTION_KTON',
                'social_network' => [
                    'homepage' => 'https://darwinia.network/',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/DarwiniaNetwork',
                    'discord' => 'https://discord.gg/3UvDSgQPxk',
                    'telegram' => 'https://t.me/DarwiniaNetwork',
                    'medium' => 'https://darwinianetwork.medium.com/',
                    'reddit' => 'https://www.reddit.com/r/DarwiniaFans/',
                    'subsocial' => 'https://app.subsocial.network/@Darwinia'
                ]
            ),
            'CRAB' => array(
                'name' => 'Darwinia Crab',
                'id' => 'darwinia-crab-network',
                'acronym' => 'crab',
                'description' => 'CRYPTO_DESCRIPTION_CRAB',
                'social_network' => [
                    'homepage' => 'https://crab.network/',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/DarwiniaNetwork',
                    'discord' => 'https://discord.com/channels/456092011347443723',
                    'telegram' => 'https://t.me/DarwiniaNetwork',
                    'medium' => 'https://medium.com/@DarwiniaNetwork',
                    'reddit' => 'https://www.reddit.com/r/DarwiniaCommunity',
                    'subsocial' => 'https://app.subsocial.network/@Darwinia'
                ]
            ),
            'INTR' => array(
                'name' => 'Interlay',
                'id' => 'interlay',
                'acronym' => 'intr',
                'description' => 'CRYPTO_DESCRIPTION_INTR',
                'social_network' => [
                    'homepage' => 'https://interlay.io',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/interlayHQ',
                    'discord' => 'https://discord.com/invite/interlay',
                    'telegram' => 'https://t.me/interlay_community',
                    'medium' => 'https://medium.com/interlay',
                    'reddit' => '',
                    'subsocial' => 'https://app.subsocial.network/@Interlay'
                ]
            ),
            'ARES' => array(
                'name' => 'Ares Protocol',
                'id' => 'ares_protocol',
                'acronym' => 'ares',
                'description' => 'CRYPTO_DESCRIPTION_ARES',
                'social_network' => [
                    'homepage' => 'https://www.aresprotocol.io/',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/AresProtocolLab',
                    'discord' => 'https://discord.gg/cqduK4ZNaY',
                    'telegram' => 'https://t.me/AresProtocolLab',
                    'medium' => 'https://aresprotocollab.medium.com/',
                    'reddit' => 'https://www.reddit.com/r/AresProtocolLabs/',
                    'subsocial' => ''
                ]
            ),
            'AMAS' => array(
                'name' => 'Mars',
                'id' => 'mars',
                'acronym' => 'amas',
                'description' => 'CRYPTO_DESCRIPTION_AMAS',
                'social_network' => [
                    'homepage' => 'https://www.aresprotocol.io/',
                    'facebook' => '',
                    'twitter' => 'https://twitter.com/AresProtocolLab',
                    'discord' => 'https://discord.gg/cqduK4ZNaY',
                    'telegram' => 'https://t.me/AresProtocolLab',
                    'medium' => 'https://aresprotocollab.medium.com/',
                    'reddit' => 'https://www.reddit.com/r/AresProtocolLabs/',
                    'subsocial' => ''
                ]
            ),
            'XRT' => array(
                'name' => 'Robonomics',
                'id' => 'robonomics',
                'acronym' => 'xrt',
                'description' => 'CRYPTO_DESCRIPTION_XRT',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'stKSM' => array(
                'name' => 'Kusama',
                'id' => 'kusama',
                'acronym' => 'stKSM',
                'description' => 'CRYPTO_DESCRIPTION_KSM',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'xcKSM' => array(
                'name' => 'Kusama',
                'id' => 'kusama',
                'acronym' => 'xcKSM',
                'description' => 'CRYPTO_DESCRIPTION_KSM',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
            'ZLK' => array(
                'name' => 'Zenlink Network Token',
                'id' => 'zenlink-network-token',
                'acronym' => 'zlk',
                'description' => 'CRYPTO_DESCRIPTION_ZLK',
                'social_network' => [
                    'homepage' => '',
                    'facebook' => '',
                    'twitter' => '',
                    'discord' => '',
                    'telegram' => '',
                    'medium' => '',
                    'reddit' => '',
                    'subsocial' => ''
                ]
            ),
        );
        try {
            if ($name == null) { return $correspondence[$acronym]; }
            else { return $correspondence[$acronym][$name]; }
        } catch (\Throwable $th) {
            return null;
        }
        
    }
}
    
?>