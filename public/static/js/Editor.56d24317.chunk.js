(window.webpackJsonp=window.webpackJsonp||[]).push([[1],{65:function(e,t,a){"use strict";var n=a(17),r=a(18),o=a(20),s=a(19),i=a(21),l=a(0),c=a.n(l),p=function(e){function t(){return Object(n.a)(this,t),Object(o.a)(this,Object(s.a)(t).apply(this,arguments))}return Object(i.a)(t,e),Object(r.a)(t,[{key:"render",value:function(){var e=this.props.errors;return e?c.a.createElement("ul",{className:"error-messages"},Object.keys(e).map(function(t){return c.a.createElement("li",{key:t},t," ",e[t])})):null}}]),t}(c.a.PureComponent);t.a=p},68:function(e,t,a){"use strict";a.r(t);var n=a(17),r=a(18),o=a(20),s=a(19),i=a(21),l=a(2),c=a(65),p=a(0),u=a.n(p),m=a(5),d=a(7),h=a(1),g=function(e){function t(){var e;Object(n.a)(this,t);var a=function(t){return function(a){return e.props.onUpdateField(t,a.target.value)}};return(e=Object(o.a)(this,Object(s.a)(t).call(this))).changeTitle=a("title"),e.changeDescription=a("description"),e.changeBody=a("body"),e.changeTagInput=a("tagInput"),e.watchForEnter=function(t){13===t.keyCode&&(t.preventDefault(),e.props.onAddTag())},e.removeTagHandler=function(t){return function(){e.props.onRemoveTag(t)}},e.submitForm=function(t){t.preventDefault();var a={title:e.props.title,description:e.props.description,body:e.props.body,tagList:e.props.tagList},n={slug:e.props.articleSlug},r=e.props.articleSlug?m.a.Articles.update(Object.assign(a,n)):m.a.Articles.create(a);e.props.onSubmit(r)},e}return Object(i.a)(t,e),Object(r.a)(t,[{key:"componentDidUpdate",value:function(e){if(e.match.params.slug!==this.props.match.params.slug){if(this.props.match.params.slug)return this.props.onUnload(),this.props.onLoad(m.a.Articles.get(this.props.match.params.slug));this.props.onLoad(null)}}},{key:"componentDidMount",value:function(){if(this.props.match.params.slug)return this.props.onLoad(m.a.Articles.get(this.props.match.params.slug));this.props.onLoad(null)}},{key:"componentWillUnmount",value:function(){this.props.onUnload()}},{key:"render",value:function(){var e=this;return u.a.createElement("div",{className:"editor-page"},u.a.createElement("div",{className:"container page"},u.a.createElement("div",{className:"row"},u.a.createElement("div",{className:"col-md-10 offset-md-1 col-xs-12"},u.a.createElement(c.a,{errors:this.props.errors}),u.a.createElement("form",null,u.a.createElement("fieldset",null,u.a.createElement("fieldset",{className:"form-group"},u.a.createElement("input",{className:"form-control form-control-lg",type:"text",placeholder:"Article Title",value:this.props.title,onChange:this.changeTitle})),u.a.createElement("fieldset",{className:"form-group"},u.a.createElement("input",{className:"form-control",type:"text",placeholder:"What's this article about?",value:this.props.description,onChange:this.changeDescription})),u.a.createElement("fieldset",{className:"form-group"},u.a.createElement("textarea",{className:"form-control",rows:"8",placeholder:"Write your article (in markdown)",value:this.props.body,onChange:this.changeBody})),u.a.createElement("fieldset",{className:"form-group"},u.a.createElement("input",{className:"form-control",type:"text",placeholder:"Enter tags",value:this.props.tagInput,onChange:this.changeTagInput,onKeyUp:this.watchForEnter}),u.a.createElement("div",{className:"tag-list"},(this.props.tagList||[]).map(function(t){return u.a.createElement("span",{className:"tag-default tag-pill",key:t},u.a.createElement("i",{className:"ion-close-round",onClick:e.removeTagHandler(t)}),t)}))),u.a.createElement("button",{className:"btn btn-lg pull-xs-right btn-primary",type:"button",disabled:this.props.inProgress,onClick:this.submitForm},"Publish Article")))))))}}]),t}(u.a.PureComponent);t.default=Object(d.c)(function(e){return Object(l.a)({},e.editor)},function(e){return{onAddTag:function(){return e({type:h.b})},onLoad:function(t){return e({type:h.o,payload:t})},onRemoveTag:function(t){return e({type:h.D,tag:t})},onSubmit:function(t){return e({type:h.h,payload:t})},onUnload:function(t){return e({type:h.p})},onUpdateField:function(t,a){return e({type:h.J,key:t,value:a})}}})(g)}}]);
//# sourceMappingURL=Editor.56d24317.chunk.js.map