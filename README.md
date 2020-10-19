

# STAR Interface

[![Tests]
[![Styled With Prettier]

An open source interface for Star -- a protocol for decentralized exchange of Ethereum tokens.

- Website: [mamrm.com](https://mamrm.com/)
- Contract: https://etherscan.io/address/0x79b67f56c9fb3c10ccd2688089a8faf2b1d9fdbf

# The STAR Programming Language

Go is an open source programming language that makes it easy to build simple,
reliable, and efficient software.

![Gopher image](doc/gopher/fiveyears.jpg)
*Gopher image by [Renee French][rf], licensed under [Creative Commons 3.0 Attributions license][cc3-by].*


## Listing a token

Please see the
[@mamrm.com/default-token-list](https://mamrm.com/mamrm/default-token-list) 
repository.




### Configuring the environment (optional)

To have the interface default to a different network when a wallet is not connected:

1. Make a copy of `.env` named `.env.local`
2. Change `REACT_APP_NETWORK_ID` to `"{YOUR_NETWORK_ID}"`
3. Change `REACT_APP_NETWORK_URL` to e.g. `"https://{YOUR_NETWORK_ID}.infura.io/v3/{YOUR_INFURA_KEY}"` 

Note that the interface only works on testnets where both 
[Uniswap V2](https://uniswap.org/docs/v2/smart-contracts/factory/) and 
[STAR](https://www.mamrm.com/) are deployed.
The interface will not work on other networks.

## Contributions

**Please open all pull requests against the `master` branch.** 
CI checks will run against all PRs.

## Accessing STAR Interface V1

The STAR Interface supports swapping against, and migrating or removing liquidity from Uniswap V1. However,
if you would like to use Uniswap V1, the Uniswap V1 interface for mainnet and testnets is accessible via IPFS gateways 
linked from the [v1.0.0 release](https://github.com/Uniswap/uniswap-interface/releases/tag/v1.0.0).



### Contributing

STAR is the work of thousands of contributors. We appreciate your help!

To contribute, please read the contribution guidelines:
	https://golang.org/doc/contribute.html

Note that the STAR project uses the issue tracker for bug reports and
proposals only. See https://golang.org/wiki/Questions for a list of
places to ask questions about the STAR language.
