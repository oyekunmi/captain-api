(window.webpackJsonp=window.webpackJsonp||[]).push([[2],{59:function(e,t,n){"use strict";var a=n(20),r=n(21),o=n(23),s=n(22),l=n(24),c=n(0),i=n.n(c),u=function(e){function t(){return Object(a.a)(this,t),Object(o.a)(this,Object(s.a)(t).apply(this,arguments))}return Object(l.a)(t,e),Object(r.a)(t,[{key:"render",value:function(){var e=this.props.errors;return e?i.a.createElement("ul",{className:"error-messages"},Object.keys(e).map(function(t){return i.a.createElement("li",{key:t},t," ",e[t])})):null}}]),t}(i.a.PureComponent);t.a=u},65:function(e,t,n){"use strict";n.r(t);var a=n(20),r=n(21),o=n(23),s=n(22),l=n(24),c=n(59),i=n(0),u=n.n(i),m=n(15),p=n(14),f=n(1),d=function(e){function t(){var e;return Object(a.a)(this,t),(e=Object(o.a)(this,Object(s.a)(t).call(this))).onChangeField=function(t){return e.props.onChangeField(t)},e.submitForm=function(t){t.preventDefault(),e.props.onSubmit(e.props.vessel)},e}return Object(l.a)(t,e),Object(r.a)(t,[{key:"componentDidMount",value:function(){this.props.onLoad()}},{key:"componentWillUnmount",value:function(){this.props.onUnload()}},{key:"render",value:function(){var e=this.props.vessel,t=e.name,n=e.description;return u.a.createElement("div",{className:"auth-page"},u.a.createElement("div",{className:"container page"},u.a.createElement("div",{className:"row"},u.a.createElement("div",{className:"col-md-6 offset-md-3 col-xs-12"},u.a.createElement("h1",{className:"text-xs-center"},"ADD VESSEL"),u.a.createElement(c.a,{errors:this.props.errors}),u.a.createElement("form",{onSubmit:this.submitForm},u.a.createElement("fieldset",null,u.a.createElement("fieldset",{className:"form-group"},u.a.createElement("label",null,"Name"),u.a.createElement("input",{className:"form-control form-control-lg",type:"text",placeholder:"Name",value:t,name:"name",onChange:this.onChangeField})),u.a.createElement("fieldset",{className:"form-group"},u.a.createElement("label",null,"Description"),u.a.createElement("input",{className:"form-control form-control-lg",type:"text",placeholder:"Description",value:n,name:"description",onChange:this.onChangeField})),u.a.createElement("button",{className:"btn btn-lg btn-primary pull-xs-right",type:"submit",disabled:this.props.inProgress},"Add Vessel")))))))}}]),t}(u.a.PureComponent);t.default=Object(p.c)(function(e){return{vessel:e.vessel}},function(e){return{onLoad:function(){return e({type:f.e})},onChangeField:function(t){return e({type:f.t,key:t.target.name,value:t.target.value})},onSubmit:function(t){return e({type:f.d,payload:m.a.Vessels.save(t)})},onUnload:function(){return e({type:f.f})}}})(d)},66:function(e,t,n){"use strict";n.r(t);var a=n(20),r=n(21),o=n(23),s=n(22),l=n(24),c=n(4),i=n(0),u=n.n(i),m=n(14),p=n(15),f=n(1),d=function(e){function t(){return Object(a.a)(this,t),Object(o.a)(this,Object(s.a)(t).apply(this,arguments))}return Object(l.a)(t,e),Object(r.a)(t,[{key:"componentDidMount",value:function(){this.props.onLoad(Promise.all([p.a.Vessels.get(this.props.match.params.id),p.a.Certificates.byVessel(this.props.match.params.id)]))}},{key:"render",value:function(){return this.props.vessel?u.a.createElement("div",null,"Vessel"):null}}]),t}(u.a.PureComponent);t.default=Object(m.c)(function(e){return Object(c.a)({},e.vessel,{currentUser:e.common.currentUser})},function(e){return{onLoad:function(t){return e({type:f.u,payload:t})}}})(d)}}]);
//# sourceMappingURL=Settings.7f1e7fca.chunk.js.map