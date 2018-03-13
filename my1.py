from urllib.request import urlopen as uReq
from bs4 import BeautifulSoup as soup
from PIL import Image


my_url='https://sports.ndtv.com/cricket/live-scores'
uClient=uReq(my_url)
page_html=uClient.read()
uClient.close()
filename = "live.txt"
f=open(filename,"w")

page_soup=soup(page_html, "html.parser")

containers=page_soup.findAll("div",{"class":"live-score-item clearfix vevent"})
l=len(containers)
p = 1

while (p < 3):
		m = 0
		firsts=containers[p].findAll("div",{"class":"team-name"})
		for first in firsts:
				fir=first.text
				print("team name" + fir)
				f.write(fir+'\n')
				scores=containers[p].findAll("div",{"class":"team-inns"})
				k=len(scores)
				#print(k)
				if k:
						if m == 0 :
								s=scores[0].text
								print("scores" + s)
								f.write(s+'\n')
								m = m + 1
						else:
								s=scores[1].text
								print("scores" + s)
								f.write(s+'\n')
								m = 0
								
		results=containers[p].findAll("div",{"class":"match-result"})
		o=len(results)
		
		if o :
				spams=containers[p].findAll("span",{"class":"category"})
				w=len(spams)
				print(w)
				if w:
						sp=spams[0].text
						print("spam " + sp)
						f.write(sp+'\n') 
				else:
						result=results[p].text
						print("results" + result)
						f.write(result+'\n') 
				
		p = p + 1
				
				
#score=scores[0]
#s=score.text
#print("scores" + s)
#f.write(s+'\n')

#f.write(i1+'\n')
#score1=scores[1]s=score1.textprint("scores" + s)f.write(s+'\n')


f.close()
