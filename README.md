# 1. Finding our networks IP Address
      1.Go to command prompt in the system.
      2.Type ipconfig.
      3.The output looks like this:
           Wireless LAN adapter Wi-Fi:
           Connection-specific DNS Suffix  . :
           IPv6 Address. . . . . . . . . . . : 2409:40d5:3:55d2:9dd4:dd60:8536:c7d3
           Temporary IPv6 Address. . . . . . : 2409:40d5:3:55d2:88f5:2c1:23c0:5a1c
           IPv6 Address. . . . . . . . . . . : 2409:40d5:3:7506:1c94:3ad1:c820:96eb
           Temporary IPv6 Address. . . . . . : 2409:40d5:3:7506:88f5:2c1:23c0:5a1c
           Link-local IPv6 Address . . . . . : fe80::34b:a89b:b2cd:889e%16
           IPv4 Address. . . . . . . . . . . : 172.28.162.117
           Subnet Mask . . . . . . . . . . . : 255.255.255.0
           Default Gateway . . . . . . . . . : fe80::accd:f1ff:fe46:fa20%16
                                               172.28.162.152
        This is our own local IP addres:IPv4 Address. . . . . . . . . . . : 172.28.162.117
# 2.To find our DNS server address
      1.Go to command prompt in your system.
      2.Type nslookup.
      3.The output looks like this:
          Default Server:  UnKnown
          Address:  172.28.162.152
         This is our DNS server address: Address:  172.28.162.152
# 3. To check status codes in browser
      1.Press keys 'Ctrl+Shift+I' to open developer tools in the browser.
      2.Go to networks tab.
      3.On the headers section  there will be status codes such as 200,302,204.
# 4.To change our DNS server.
      1.Go to system setteings and find networks.
      2.Select your connection (WiFi/Ethernet).
      3.Fetch the network properties.
      4.Click on Internet Protocol version.
      5.Chose following DNS server adresses.
      6.Add new DNS server you want.
# 5.Publically available DNS servers.
      1.Google Public DNS: IPv4 addresses (8.8.8.8 and 8.8.4.4) or IPv6 addresses (2001:4860:4860::8888 and 2001:4860:4860::8844). 
      2.Cloudflare DNS: IPv4 address is 1.1.1.1, and they also offer an IPv6 address, 2606:4700:4700::1111. 
      3.OpenDNS (Cisco): IPv4 208.67.222.222
                         208.67.220.220
                         IPv6 2620:119:35::35
                         2620:119:53::53s.


>

>
C:\Users\bhawn>
