define(["jquery","home/json2"],function(e,t){var n=function(){var e={},t={},r={},i=function(t){t?(e.host=n.getHostFromUrl(t),e.path=n.getPathFromUrl(t),e.dir=n.getDirFromPath(e.path),e.search=n.getSearchFromUrl(t),e.hash=n.getHashFromUrl(t),e.domain=n.getDomainFromUrl(e.host),e.searchJson=n.getJsonFromSearch(e.search)):(e.host=e.path=e.dir=e.search=e.hash=e.domain="",e.searchJson={})};switch(this+""){case"test":e._pri=t;case"extend":e._pro=r,e._init=i;break;default:delete e._init,delete e._pro,i.apply(e,arguments)}return e};return n.getJsonFromSearch=function(e){var t,n,r={},i;if(e){var s=e.split("&");for(t=0,n=s.length;t<n;++t)i=s[t].indexOf("="),~i?r[s[t].slice(0,i)]=decodeURIComponent(s[t].slice(i+1))||undefined:r[s[t]]=undefined}return r},n.getDirFromPath=function(e){return~e.lastIndexOf("/")?e=e.slice(e.indexOf("/"),e.lastIndexOf("/")+1):e="/",e},n.getHostFromUrl=function(e){return e=e.slice(e.indexOf("//")+2),~e.indexOf("/")&&(e=e.slice(0,e.indexOf("/"))),~e.indexOf("?")&&(e=e.slice(0,e.indexOf("?"))),~e.indexOf("#")&&(e=e.slice(0,e.indexOf("#"))),e},n.getDomainFromUrl=function(e){return~e.indexOf(":")&&(e=e.slice(0,e.indexOf(":"))),e},n.getPathFromUrl=function(e){return~e.indexOf("?")&&(e=e.slice(0,e.indexOf("?"))),~e.indexOf("#")&&(e=e.slice(0,e.indexOf("#"))),e=e.slice(e.indexOf("//")+2),~e.indexOf("/")?e=e.slice(e.indexOf("/")):e="/",e},n.getSearchFromUrl=function(e){return~e.indexOf("?")?(e=e.slice(e.indexOf("?")+1),~e.indexOf("#")&&(e=e.slice(0,e.indexOf("#")))):e="",e},n.getHashFromUrl=function(e){return~e.indexOf("#")?(e=e.slice(e.indexOf("#")+1),e):""},n});