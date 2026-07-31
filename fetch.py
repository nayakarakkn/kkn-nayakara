import urllib.request, re
try:
    html = urllib.request.urlopen('https://id.wikipedia.org/wiki/Universitas_Islam_Negeri_Syarif_Hidayatullah_Jakarta').read().decode('utf-8')
    urls = re.findall(r'https://upload.wikimedia.org/wikipedia/commons/[^\"]+\.jpg', html)
    for url in urls:
        print(url)
except Exception as e:
    print(e)
