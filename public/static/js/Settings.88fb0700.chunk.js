(window.webpackJsonp=window.webpackJsonp||[]).push([[6],{65:function(e,t,a){"use strict";var r=a(17),n=a(18),o=a(20),s=a(19),c=a(21),l=a(0),i=a.n(l),u=function(e){function t(){return Object(r.a)(this,t),Object(o.a)(this,Object(s.a)(t).apply(this,arguments))}return Object(c.a)(t,e),Object(n.a)(t,[{key:"render",value:function(){var e=this.props.errors;return e?i.a.createElement("ul",{className:"error-messages"},Object.keys(e).map(function(t){return i.a.createElement("li",{key:t},t," ",e[t])})):null}}]),t}(i.a.PureComponent);t.a=u},72:function(e,t,a){"use strict";a.r(t);var r=a(2),n=a(23),o=a(17),s=a(18),c=a(20),l=a(19),i=a(21),u=a(65),m=a(0),p=a.n(m),f=a(5),b=a(7),d=a(1),h=function(e){function t(){var e;return Object(o.a)(this,t),(e=Object(c.a)(this,Object(l.a)(t).call(this))).state={image:"",username:"",bio:"",email:"",password:""},e.updateState=function(t){return function(a){var r=e.state,o=Object.assign({},r,Object(n.a)({},t,a.target.value));e.setState(o)}},e.submitForm=function(t){t.preventDefault();var a=Object.assign({},e.state);a.password||delete a.password,e.props.onSubmitForm(a)},e}return Object(i.a)(t,e),Object(s.a)(t,[{key:"render",value:function(){var e=this.props.currentUser,t=e.image,a=e.username,r=e.bio,n=e.email;return p.a.createElement("form",{onSubmit:this.submitForm},p.a.createElement("fieldset",null,p.a.createElement("fieldset",{className:"form-group"},p.a.createElement("input",{className:"form-control",type:"text",placeholder:"URL of profile picture",value:t,onChange:this.updateState("image")})),p.a.createElement("fieldset",{className:"form-group"},p.a.createElement("input",{className:"form-control form-control-lg",type:"text",placeholder:"Username",value:a,onChange:this.updateState("username")})),p.a.createElement("fieldset",{className:"form-group"},p.a.createElement("textarea",{className:"form-control form-control-lg",rows:"8",placeholder:"Short bio about you",value:r,onChange:this.updateState("bio")})),p.a.createElement("fieldset",{className:"form-group"},p.a.createElement("input",{className:"form-control form-control-lg",type:"email",placeholder:"Email",value:n,onChange:this.updateState("email")})),p.a.createElement("fieldset",{className:"form-group"},p.a.createElement("input",{className:"form-control form-control-lg",type:"password",placeholder:"New Password",value:this.state.password,onChange:this.updateState("password")})),p.a.createElement("button",{className:"btn btn-lg btn-primary pull-xs-right",type:"submit",disabled:this.state.inProgress},"Update Settings")))}}]),t}(p.a.PureComponent),g=function(e){function t(){return Object(o.a)(this,t),Object(c.a)(this,Object(l.a)(t).apply(this,arguments))}return Object(i.a)(t,e),Object(s.a)(t,[{key:"render",value:function(){return p.a.createElement("div",{className:"settings-page"},p.a.createElement("div",{className:"container page"},p.a.createElement("div",{className:"row"},p.a.createElement("div",{className:"col-md-6 offset-md-3 col-xs-12"},p.a.createElement("h1",{className:"text-xs-center"},"Your Settings"),p.a.createElement(u.a,{errors:this.props.errors}),p.a.createElement(h,{currentUser:this.props.currentUser,onSubmitForm:this.props.onSubmitForm}),p.a.createElement("hr",null),p.a.createElement("button",{className:"btn btn-outline-danger",onClick:this.props.onClickLogout},"Or click here to logout.")))))}}]),t}(p.a.PureComponent);t.default=Object(b.c)(function(e){return Object(r.a)({},e.settings,{currentUser:e.common.currentUser})},function(e){return{onClickLogout:function(){return e({type:d.v})},onSubmitForm:function(t){return e({type:d.F,payload:f.a.Auth.save(t)})},onUnload:function(){return e({type:d.E})}}})(g)}}]);
//# sourceMappingURL=Settings.88fb0700.chunk.js.map