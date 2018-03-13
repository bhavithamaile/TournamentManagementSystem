from urllib.request import urlopen as uReq
from bs4 import BeautifulSoup as soup
my_url='http://www.cricbuzz.com/cricket-match/live-scores'
uClient=uReq(my_url)
page_html=uClient.read()
uClient.close()

filename = "getcon.txt"
f=open(filename,"w")

f.write("")
page_soup=soup(page_html, "html.parser")
 
containers=page_soup.findAll("div",{"class":"cb-mtch-lst cb-col cb-col-100 cb-tms-itm"})
container=containers[0]
c=container.div.a
print("title " + c.text)
b=c.text
f.write(b+'\n')
type=container.findAll("div",{"class":"text-gray"})

for t in type:
	t1=t.text
	print(" " + t1)
	f.write(t1+'\n')
	
match=page_soup.findAll("div",{"class":"cb-col-50 cb-col"})
m=match[0].text

print("status " + m)

f.write(m+'\n')
f.close()