(window.webpackJsonp=window.webpackJsonp||[]).push([[0],{60:function(e,t,a){"use strict";var n=a(0),r=a.n(n);t.a=r.a.memo(function(e){var t=e.appName;return e.token?null:r.a.createElement("div",{className:"banner"},r.a.createElement("div",{className:"container"},r.a.createElement("h1",{className:"logo-font"},t.toLowerCase()),r.a.createElement("p",null,"A place to share your knowledge.")))})},61:function(e,t,a){"use strict";var n=a(4),r=a(0),l=a.n(r),c=a(14),s=a(1),o=a(20),i=a(21),m=a(23),u=a(22),d=a(24),p=a(15),f=function(e){function t(){var e,a;Object(o.a)(this,t);for(var n=arguments.length,r=new Array(n),l=0;l<n;l++)r[l]=arguments[l];return(a=Object(m.a)(this,(e=Object(u.a)(t)).call.apply(e,[this].concat(r)))).delete=function(e){a.props.deleteCertificate(e)},a}return Object(d.a)(t,e),Object(i.a)(t,[{key:"render",value:function(){var e=this;if(this.props.loading)return l.a.createElement("div",{className:"article-preview"},"Loading...");if(!this.props.certificates||0===this.props.certificates.length)return l.a.createElement("div",{className:"article-preview"},"No certificates are here... yet.");var t=this.props.certificates.map(function(t,a){return l.a.createElement("tr",{key:t.id},l.a.createElement("td",{style:{border:"1px solid #CCC"}},a+1),l.a.createElement("td",{style:{border:"1px solid #CCC"}},t.name),l.a.createElement("td",{style:{border:"1px solid #CCC"}},t.issue),l.a.createElement("td",{style:{border:"1px solid #CCC"}},t.expiry),l.a.createElement("td",{style:{border:"1px solid #CCC"}},t.state),l.a.createElement("td",{style:{border:"1px solid #CCC"}},l.a.createElement("a",{href:"#/",value:t.id,onClick:function(){return e.delete(t)}},"Delete")))});return l.a.createElement("div",{className:"article-preview"},l.a.createElement("table",{style:{width:"100%",borderCollapse:"collapse"}},l.a.createElement("thead",null,l.a.createElement("tr",null,l.a.createElement("th",{style:{border:"1px solid #CCC"}},"SN"),l.a.createElement("th",{style:{border:"1px solid #CCC"}},"Name"),l.a.createElement("th",{style:{border:"1px solid #CCC"}},"Issue"),l.a.createElement("th",{style:{border:"1px solid #CCC"}},"Expiry"),l.a.createElement("th",{style:{border:"1px solid #CCC"}},"Status"),l.a.createElement("th",{style:{border:"1px solid #CCC"}},"\xa0"))),l.a.createElement("tbody",null,t)))}}]),t}(l.a.PureComponent),C=Object(c.c)(null,function(e){return{deleteCertificate:function(t){return e({type:s.k,payload:Promise.all([p.a.Certificates.delete(t)])})}}})(f),h=l.a.memo(function(e){return e.vessel?l.a.createElement("div",{className:"col-md-9"},l.a.createElement("h2",null,e.vessel.name),l.a.createElement(C,{certificates:e.certificates,loading:e.loading})):l.a.createElement("div",null,"Select a vessel to see certificates")});t.a=Object(c.c)(function(e){return Object(n.a)({},e,{tags:e.home.tags,token:e.common.token,certificates:e.home.certificates,vessel:e.home.vessel})},function(e){return{onTabClick:function(t,a){return e({type:s.j,tab:t,payload:a})}}})(l.a.memo(h))},62:function(e,t,a){"use strict";a.r(t),function(e){var n=a(20),r=a(21),l=a(23),c=a(22),s=a(24),o=a(4),i=a(60),m=a(61),u=a(0),d=a.n(u),p=a(15),f=a(14),C=a(1),h=e.Promise,v=function(e){function t(){var e;return Object(n.a)(this,t),(e=Object(l.a)(this,Object(c.a)(t).call(this))).onVesselClicked=function(t){e.props.loadCertificates(t)},e}return Object(s.a)(t,e),Object(r.a)(t,[{key:"componentDidMount",value:function(){this.props.onLoad(h.all([p.a.Vessels.all()]))}},{key:"componentWillUnmount",value:function(){this.props.onUnload()}},{key:"render",value:function(){var e=this;if(!this.props.vessels)return"";var t=[];return this.props.vessels.forEach(function(a,n){t.push(d.a.createElement("li",{key:n},d.a.createElement("a",{href:"#/",value:a.id,onClick:function(){return e.onVesselClicked(a)}},"".concat(a.name,"(").concat(a.certificates_count,")"))))}),d.a.createElement("div",{className:"home-page"},d.a.createElement(i.a,{token:this.props.token,appName:this.props.appName}),d.a.createElement("div",{className:"container page"},d.a.createElement("div",{className:"row"},d.a.createElement("div",{className:"col-md-3"},d.a.createElement("div",{className:"sidebar"},d.a.createElement("p",null,"Vessels"),t)),d.a.createElement(m.a,null))))}}]),t}(d.a.PureComponent);t.default=Object(f.c)(function(e){return Object(o.a)({},e.home,{appName:e.common.appName,token:e.common.token,vessels:e.common.vessels})},function(e){return{onLoad:function(t){return e({type:C.l,payload:t})},onUnload:function(){return e({type:C.m})},loadCertificates:function(t){return e({type:C.n,payload:h.all([t,p.a.Certificates.byVessel(t.id)])})}}})(v)}.call(this,a(17))}}]);
//# sourceMappingURL=Home.827fce48.chunk.js.map