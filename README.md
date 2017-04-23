loc
===

A Symfony project created on April 16, 2017, 7:40 pm.




sudo iptables -t nat -A PREROUTING -p tcp -d 185.22.61.115 --dport 8000 -j DNAT --to-destination 127.0.0.1:8000

iptables -t nat -A PREROUTING -p tcp -d 185.22.61.115 --dport 8000 -j DNAT --to-destination 127.0.0.1:8000



sudo iptables -t nat -A POSTROUTING -p tcp --dst 127.0.0.1 --dport 8000 -j SNAT --to-source 185.22.61.115

iptables -t nat -A POSTROUTING -p tcp --dst 127.0.0.1 --dport 8000 -j SNAT --to-source 185.22.61.115