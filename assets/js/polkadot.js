// Import
import { ApiPromise, WsProvider } from '@polkadot/api';

// Initialisation
const endPoints = [
    ['DOT', 'wss://rpc.polkadot.io'], 
    ['KSM', 'wss://kusama-rpc.polkadot.io/']
];
let assets = [];
let wallet;
let wsProvider;
let api;
let balance;
let available;
let crypto;
let crypto_formatted;

let crowdloan;
let parachainsIds;

async function main(address) {
    endPoints.forEach(function(endPoint) {
        wallet = 0;
        getWalletData(endPoint, address).then((value) => wallet = value);
        assets[endPoint[0]] = ["id" = endPoint[0], "name" = "", "price" = "", "wallet" = wallet, "locked" = 0, "staking" = 0, "pools" = 0, "platform" = "polkadot.js" ];
    });
    return assets;
}

async function getWalletData(endPoint, address) {
    wsProvider = new WsProvider(endPoint[1]);
    await getApi(wsProvider).then((value) => api = value);
    await api.isReady;
    await getBalance(api, address).then((value) => balance = value);
    await getParachainIds(api).then((value) => parachainsIds = value);
    console.log(parachainsIds);

    available = balance.availableBalance.toNumber();
    crypto = available / (10 ** api.registry.chainDecimals);
    crypto_formatted = crypto.toFixed(4);
    
    /* --- CROWDLOAN CONTRIBUTIONS --- */
    // for (let item in parachainsIds) {
    //     let id = parachainsIds[item];
    //     if (id !== undefined && !isNaN(id) && typeof id !== 'number')
    //     {
    //         if (id['words'][0] != 1000) {
    //             // console.log(id['words'][0]);
    //             await getCrownloanContributions(api, id['words'][0], ADDR).then((value) => console.log(value));    
    //         }
    //     }
    // }


    // await getCrownloanContributions(api, item.words[0], ADDR).then((value) => console.log(value));    

    // let bondingDuration = api.consts.staking.bondingDuration;
    // let sessionsPerEra = api.consts.staking.sessionsPerEra;
    // console.log(api.consts.staking);
    
    return crypto_formatted;
}

async function getApi(wsProvider) {
    let a = await ApiPromise.create({ provider: wsProvider });
    return a;
}
async function getBalance(api, address) {
    let b = await api.derive.balances?.all(address);
    return b;
}
async function getParachainIds(api) {
    let p = await api.query.paras.parachains();
    return p;
}
async function getCrownloanContributions(api, id, address) {
    let c = await api.derive.crowdloan.ownContributions(id, address);
    // let c =  await api.derive.crowdloan.contributions;
    return c;
}


