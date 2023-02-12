Quick proof of concept/coding assessment challenge for Meeting Worldwide Protocol.
I use Symfony 6.2.6 as a framework such that it'd be easy to scale functionality in the future.

The motivation behind this project is my enjoyment of the stock market. I could scale this into an options backtester to test profitability with certain strategies.

For now - the purpose of this project is to receive a ticker from the user and generate analyst's median target price and a recommendation. Source for the API is yahoo finance.

To deploy: clone and run `docker compose up`
Frontend is accessible from `https://localhost`
