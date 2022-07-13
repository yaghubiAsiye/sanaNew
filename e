$TTL 86400;
@ IN SOA ns1.sanapersia.ir. vps.sanapersia.ir. (
2010062801 ; Serial
10800 ; Refresh
3600 ; Retry
604800 ; Expire
86400 ; Minimum
)
sanapersia.ir. IN NS ns1.sanapersia.ir.
sanapersia.ir. IN NS ns2. sanapersia.ir.
sanapersia.ir. IN A 172.16.6.108 
ns1. sanapersia.ir. IN 172.16.6.108 
ns2. sanapersia.ir. IN A 172.16.6.108 
www. sanapersia.ir. IN A 172.16.6.108 
ftp. sanapersia.ir. IN A 172.16.6.108 
mail sanapersia.ir. IN A 172.16.6.108 
sanapersia.ir. IN MX 10 mail.sanapersia.ir.



options {
directory "/var/named";
version "Nope.";
};
zone "sanapersia.ir" in {
type master;
file "sanapersia.ir";
};



//
// named.conf
//
// Provided by Red Hat bind package to configure the ISC BIND named(8) DNS
// server as a caching only nameserver (as a localhost DNS resolver only).
//
// See /usr/share/doc/bind*/sample/ for example named configuration files.
//
// See the BIND Administrator's Reference Manual (ARM) for details about the
// configuration located in /usr/share/doc/bind-{version}/Bv9ARM.html

options {
	listen-on port 53 { 127.0.0.1; };
        listen-on-v6 port 53 { ::1; };
        directory	"/var/named";
        version "Nope.";
        dump-file	"/var/named/data/cache_dump.db";
        statistics-file "/var/named/data/named_stats.txt";
        memstatistics-file "/var/named/data/named_mem_stats.txt";
        recursing-file  "/var/named/data/named.recursing";
        secroots-file   "/var/named/data/named.secroots";
        allow-query     { localhost; };

        /*
         - If you are building an AUTHORITATIVE DNS server, do NOT enable recursion.
         - If you are building a RECURSIVE (caching) DNS server, you need to enable
           recursion.
         - If your recursive DNS server has a public IP address, you MUST enable access
           control to limit queries to your legitimate users. Failing to do so will
           cause your server to become part of large scale DNS amplification
           attacks. Implementing BCP38 within your network would greatly
           reduce such attack surface
        */
	recursion yes;

        dnssec-enable yes;
        dnssec-validation yes;

        /* Path to ISC DLV key */
        bindkeys-file "/etc/named.root.key";

  managed-keys-directory "/var/named/dynamic";

        pid-file "/run/named/named.pid";
        session-keyfile "/run/named/session.key";
};

logging {
	channel default_debug {
                file "data/named.run";
                severity dynamic;
        };
};

zone "." IN {
	type hint;
        file "named.ca";
};
zone "sanapersia.ir" in {
    type master;
    file "sanapersia.ir";
};

include "/etc/named.rfc1912.zones";
include "/etc/named.root.key";
