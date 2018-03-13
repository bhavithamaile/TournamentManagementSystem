import urllib.parse
import urllib.request
import re
response = urllib.request.urlopen("https://in.finance.yahoo.com/quote/AAPL?p=AAPL")
html = response.read()

regex='<span class="Trsdu(0.3s) Fw(b) Fz(36px) Mb(-4px) D(ib)" data-reactid="247">(.+?)</span>'
pattern=re.compile(regex)
ht=html.decode('utf-8')
price=re.findAll(pattern,ht)
print (price)