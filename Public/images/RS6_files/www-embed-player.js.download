(function(){'use strict';var m;function aa(a){var b=0;return function(){return b<a.length?{done:!1,value:a[b++]}:{done:!0}}}
var ba="function"==typeof Object.defineProperties?Object.defineProperty:function(a,b,c){if(a==Array.prototype||a==Object.prototype)return a;a[b]=c.value;return a};
function ca(a){a=["object"==typeof globalThis&&globalThis,a,"object"==typeof window&&window,"object"==typeof self&&self,"object"==typeof global&&global];for(var b=0;b<a.length;++b){var c=a[b];if(c&&c.Math==Math)return c}throw Error("Cannot find global object");}
var fa=ca(this);function u(a,b){if(b)a:{var c=fa;a=a.split(".");for(var d=0;d<a.length-1;d++){var e=a[d];if(!(e in c))break a;c=c[e]}a=a[a.length-1];d=c[a];b=b(d);b!=d&&null!=b&&ba(c,a,{configurable:!0,writable:!0,value:b})}}
u("Symbol",function(a){function b(f){if(this instanceof b)throw new TypeError("Symbol is not a constructor");return new c(d+(f||"")+"_"+e++,f)}
function c(f,g){this.h=f;ba(this,"description",{configurable:!0,writable:!0,value:g})}
if(a)return a;c.prototype.toString=function(){return this.h};
var d="jscomp_symbol_"+(1E9*Math.random()>>>0)+"_",e=0;return b});
u("Symbol.iterator",function(a){if(a)return a;a=Symbol("Symbol.iterator");for(var b="Array Int8Array Uint8Array Uint8ClampedArray Int16Array Uint16Array Int32Array Uint32Array Float32Array Float64Array".split(" "),c=0;c<b.length;c++){var d=fa[b[c]];"function"===typeof d&&"function"!=typeof d.prototype[a]&&ba(d.prototype,a,{configurable:!0,writable:!0,value:function(){return ia(aa(this))}})}return a});
function ia(a){a={next:a};a[Symbol.iterator]=function(){return this};
return a}
function ja(a){return a.raw=a}
function la(a,b){a.raw=b;return a}
function v(a){var b="undefined"!=typeof Symbol&&Symbol.iterator&&a[Symbol.iterator];if(b)return b.call(a);if("number"==typeof a.length)return{next:aa(a)};throw Error(String(a)+" is not an iterable or ArrayLike");}
function ma(a){if(!(a instanceof Array)){a=v(a);for(var b,c=[];!(b=a.next()).done;)c.push(b.value);a=c}return a}
function na(a,b){return Object.prototype.hasOwnProperty.call(a,b)}
var oa="function"==typeof Object.assign?Object.assign:function(a,b){for(var c=1;c<arguments.length;c++){var d=arguments[c];if(d)for(var e in d)na(d,e)&&(a[e]=d[e])}return a};
u("Object.assign",function(a){return a||oa});
var qa="function"==typeof Object.create?Object.create:function(a){function b(){}
b.prototype=a;return new b},ra=function(){function a(){function c(){}
new c;Reflect.construct(c,[],function(){});
return new c instanceof c}
if("undefined"!=typeof Reflect&&Reflect.construct){if(a())return Reflect.construct;var b=Reflect.construct;return function(c,d,e){c=b(c,d);e&&Reflect.setPrototypeOf(c,e.prototype);return c}}return function(c,d,e){void 0===e&&(e=c);
e=qa(e.prototype||Object.prototype);return Function.prototype.apply.call(c,e,d)||e}}(),sa;
if("function"==typeof Object.setPrototypeOf)sa=Object.setPrototypeOf;else{var ta;a:{var ua={a:!0},va={};try{va.__proto__=ua;ta=va.a;break a}catch(a){}ta=!1}sa=ta?function(a,b){a.__proto__=b;if(a.__proto__!==b)throw new TypeError(a+" is not extensible");return a}:null}var wa=sa;
function w(a,b){a.prototype=qa(b.prototype);a.prototype.constructor=a;if(wa)wa(a,b);else for(var c in b)if("prototype"!=c)if(Object.defineProperties){var d=Object.getOwnPropertyDescriptor(b,c);d&&Object.defineProperty(a,c,d)}else a[c]=b[c];a.Aa=b.prototype}
function xa(){this.A=!1;this.v=null;this.i=void 0;this.h=1;this.m=this.l=0;this.S=this.j=null}
function ya(a){if(a.A)throw new TypeError("Generator is already running");a.A=!0}
xa.prototype.D=function(a){this.i=a};
function za(a,b){a.j={exception:b,nd:!0};a.h=a.l||a.m}
xa.prototype.return=function(a){this.j={return:a};this.h=this.m};
xa.prototype.yield=function(a,b){this.h=b;return{value:a}};
xa.prototype.B=function(a){this.h=a};
function Aa(a,b,c){a.l=b;void 0!=c&&(a.m=c)}
function Ba(a){a.l=0;var b=a.j.exception;a.j=null;return b}
function Da(a){var b=a.S.splice(0)[0];(b=a.j=a.j||b)?b.nd?a.h=a.l||a.m:void 0!=b.B&&a.m<b.B?(a.h=b.B,a.j=null):a.h=a.m:a.h=0}
function Ea(a){this.h=new xa;this.i=a}
function Fa(a,b){ya(a.h);var c=a.h.v;if(c)return Ha(a,"return"in c?c["return"]:function(d){return{value:d,done:!0}},b,a.h.return);
a.h.return(b);return Ia(a)}
function Ha(a,b,c,d){try{var e=b.call(a.h.v,c);if(!(e instanceof Object))throw new TypeError("Iterator result "+e+" is not an object");if(!e.done)return a.h.A=!1,e;var f=e.value}catch(g){return a.h.v=null,za(a.h,g),Ia(a)}a.h.v=null;d.call(a.h,f);return Ia(a)}
function Ia(a){for(;a.h.h;)try{var b=a.i(a.h);if(b)return a.h.A=!1,{value:b.value,done:!1}}catch(c){a.h.i=void 0,za(a.h,c)}a.h.A=!1;if(a.h.j){b=a.h.j;a.h.j=null;if(b.nd)throw b.exception;return{value:b.return,done:!0}}return{value:void 0,done:!0}}
function Ja(a){this.next=function(b){ya(a.h);a.h.v?b=Ha(a,a.h.v.next,b,a.h.D):(a.h.D(b),b=Ia(a));return b};
this.throw=function(b){ya(a.h);a.h.v?b=Ha(a,a.h.v["throw"],b,a.h.D):(za(a.h,b),b=Ia(a));return b};
this.return=function(b){return Fa(a,b)};
this[Symbol.iterator]=function(){return this}}
function Ka(a){function b(d){return a.next(d)}
function c(d){return a.throw(d)}
return new Promise(function(d,e){function f(g){g.done?d(g.value):Promise.resolve(g.value).then(b,c).then(f,e)}
f(a.next())})}
function A(a){return Ka(new Ja(new Ea(a)))}
function B(){for(var a=Number(this),b=[],c=a;c<arguments.length;c++)b[c-a]=arguments[c];return b}
u("Reflect",function(a){return a?a:{}});
u("Reflect.construct",function(){return ra});
u("Reflect.setPrototypeOf",function(a){return a?a:wa?function(b,c){try{return wa(b,c),!0}catch(d){return!1}}:null});
u("Promise",function(a){function b(g){this.h=0;this.j=void 0;this.i=[];this.A=!1;var h=this.l();try{g(h.resolve,h.reject)}catch(k){h.reject(k)}}
function c(){this.h=null}
function d(g){return g instanceof b?g:new b(function(h){h(g)})}
if(a)return a;c.prototype.i=function(g){if(null==this.h){this.h=[];var h=this;this.j(function(){h.v()})}this.h.push(g)};
var e=fa.setTimeout;c.prototype.j=function(g){e(g,0)};
c.prototype.v=function(){for(;this.h&&this.h.length;){var g=this.h;this.h=[];for(var h=0;h<g.length;++h){var k=g[h];g[h]=null;try{k()}catch(l){this.l(l)}}}this.h=null};
c.prototype.l=function(g){this.j(function(){throw g;})};
b.prototype.l=function(){function g(l){return function(n){k||(k=!0,l.call(h,n))}}
var h=this,k=!1;return{resolve:g(this.ba),reject:g(this.v)}};
b.prototype.ba=function(g){if(g===this)this.v(new TypeError("A Promise cannot resolve to itself"));else if(g instanceof b)this.ga(g);else{a:switch(typeof g){case "object":var h=null!=g;break a;case "function":h=!0;break a;default:h=!1}h?this.Y(g):this.m(g)}};
b.prototype.Y=function(g){var h=void 0;try{h=g.then}catch(k){this.v(k);return}"function"==typeof h?this.ta(h,g):this.m(g)};
b.prototype.v=function(g){this.D(2,g)};
b.prototype.m=function(g){this.D(1,g)};
b.prototype.D=function(g,h){if(0!=this.h)throw Error("Cannot settle("+g+", "+h+"): Promise already settled in state"+this.h);this.h=g;this.j=h;2===this.h&&this.ea();this.S()};
b.prototype.ea=function(){var g=this;e(function(){if(g.V()){var h=fa.console;"undefined"!==typeof h&&h.error(g.j)}},1)};
b.prototype.V=function(){if(this.A)return!1;var g=fa.CustomEvent,h=fa.Event,k=fa.dispatchEvent;if("undefined"===typeof k)return!0;"function"===typeof g?g=new g("unhandledrejection",{cancelable:!0}):"function"===typeof h?g=new h("unhandledrejection",{cancelable:!0}):(g=fa.document.createEvent("CustomEvent"),g.initCustomEvent("unhandledrejection",!1,!0,g));g.promise=this;g.reason=this.j;return k(g)};
b.prototype.S=function(){if(null!=this.i){for(var g=0;g<this.i.length;++g)f.i(this.i[g]);this.i=null}};
var f=new c;b.prototype.ga=function(g){var h=this.l();g.Wb(h.resolve,h.reject)};
b.prototype.ta=function(g,h){var k=this.l();try{g.call(h,k.resolve,k.reject)}catch(l){k.reject(l)}};
b.prototype.then=function(g,h){function k(r,t){return"function"==typeof r?function(x){try{l(r(x))}catch(z){n(z)}}:t}
var l,n,p=new b(function(r,t){l=r;n=t});
this.Wb(k(g,l),k(h,n));return p};
b.prototype.catch=function(g){return this.then(void 0,g)};
b.prototype.Wb=function(g,h){function k(){switch(l.h){case 1:g(l.j);break;case 2:h(l.j);break;default:throw Error("Unexpected state: "+l.h);}}
var l=this;null==this.i?f.i(k):this.i.push(k);this.A=!0};
b.resolve=d;b.reject=function(g){return new b(function(h,k){k(g)})};
b.race=function(g){return new b(function(h,k){for(var l=v(g),n=l.next();!n.done;n=l.next())d(n.value).Wb(h,k)})};
b.all=function(g){var h=v(g),k=h.next();return k.done?d([]):new b(function(l,n){function p(x){return function(z){r[x]=z;t--;0==t&&l(r)}}
var r=[],t=0;do r.push(void 0),t++,d(k.value).Wb(p(r.length-1),n),k=h.next();while(!k.done)})};
return b});
u("Object.setPrototypeOf",function(a){return a||wa});
u("WeakMap",function(a){function b(k){this.h=(h+=Math.random()+1).toString();if(k){k=v(k);for(var l;!(l=k.next()).done;)l=l.value,this.set(l[0],l[1])}}
function c(){}
function d(k){var l=typeof k;return"object"===l&&null!==k||"function"===l}
function e(k){if(!na(k,g)){var l=new c;ba(k,g,{value:l})}}
function f(k){var l=Object[k];l&&(Object[k]=function(n){if(n instanceof c)return n;Object.isExtensible(n)&&e(n);return l(n)})}
if(function(){if(!a||!Object.seal)return!1;try{var k=Object.seal({}),l=Object.seal({}),n=new a([[k,2],[l,3]]);if(2!=n.get(k)||3!=n.get(l))return!1;n.delete(k);n.set(l,4);return!n.has(k)&&4==n.get(l)}catch(p){return!1}}())return a;
var g="$jscomp_hidden_"+Math.random();f("freeze");f("preventExtensions");f("seal");var h=0;b.prototype.set=function(k,l){if(!d(k))throw Error("Invalid WeakMap key");e(k);if(!na(k,g))throw Error("WeakMap key fail: "+k);k[g][this.h]=l;return this};
b.prototype.get=function(k){return d(k)&&na(k,g)?k[g][this.h]:void 0};
b.prototype.has=function(k){return d(k)&&na(k,g)&&na(k[g],this.h)};
b.prototype.delete=function(k){return d(k)&&na(k,g)&&na(k[g],this.h)?delete k[g][this.h]:!1};
return b});
u("Map",function(a){function b(){var h={};return h.previous=h.next=h.head=h}
function c(h,k){var l=h[1];return ia(function(){if(l){for(;l.head!=h[1];)l=l.previous;for(;l.next!=l.head;)return l=l.next,{done:!1,value:k(l)};l=null}return{done:!0,value:void 0}})}
function d(h,k){var l=k&&typeof k;"object"==l||"function"==l?f.has(k)?l=f.get(k):(l=""+ ++g,f.set(k,l)):l="p_"+k;var n=h[0][l];if(n&&na(h[0],l))for(h=0;h<n.length;h++){var p=n[h];if(k!==k&&p.key!==p.key||k===p.key)return{id:l,list:n,index:h,entry:p}}return{id:l,list:n,index:-1,entry:void 0}}
function e(h){this[0]={};this[1]=b();this.size=0;if(h){h=v(h);for(var k;!(k=h.next()).done;)k=k.value,this.set(k[0],k[1])}}
if(function(){if(!a||"function"!=typeof a||!a.prototype.entries||"function"!=typeof Object.seal)return!1;try{var h=Object.seal({x:4}),k=new a(v([[h,"s"]]));if("s"!=k.get(h)||1!=k.size||k.get({x:4})||k.set({x:4},"t")!=k||2!=k.size)return!1;var l=k.entries(),n=l.next();if(n.done||n.value[0]!=h||"s"!=n.value[1])return!1;n=l.next();return n.done||4!=n.value[0].x||"t"!=n.value[1]||!l.next().done?!1:!0}catch(p){return!1}}())return a;
var f=new WeakMap;e.prototype.set=function(h,k){h=0===h?0:h;var l=d(this,h);l.list||(l.list=this[0][l.id]=[]);l.entry?l.entry.value=k:(l.entry={next:this[1],previous:this[1].previous,head:this[1],key:h,value:k},l.list.push(l.entry),this[1].previous.next=l.entry,this[1].previous=l.entry,this.size++);return this};
e.prototype.delete=function(h){h=d(this,h);return h.entry&&h.list?(h.list.splice(h.index,1),h.list.length||delete this[0][h.id],h.entry.previous.next=h.entry.next,h.entry.next.previous=h.entry.previous,h.entry.head=null,this.size--,!0):!1};
e.prototype.clear=function(){this[0]={};this[1]=this[1].previous=b();this.size=0};
e.prototype.has=function(h){return!!d(this,h).entry};
e.prototype.get=function(h){return(h=d(this,h).entry)&&h.value};
e.prototype.entries=function(){return c(this,function(h){return[h.key,h.value]})};
e.prototype.keys=function(){return c(this,function(h){return h.key})};
e.prototype.values=function(){return c(this,function(h){return h.value})};
e.prototype.forEach=function(h,k){for(var l=this.entries(),n;!(n=l.next()).done;)n=n.value,h.call(k,n[1],n[0],this)};
e.prototype[Symbol.iterator]=e.prototype.entries;var g=0;return e});
function La(a,b,c){if(null==a)throw new TypeError("The 'this' value for String.prototype."+c+" must not be null or undefined");if(b instanceof RegExp)throw new TypeError("First argument to String.prototype."+c+" must not be a regular expression");return a+""}
u("String.prototype.endsWith",function(a){return a?a:function(b,c){var d=La(this,b,"endsWith");b+="";void 0===c&&(c=d.length);c=Math.max(0,Math.min(c|0,d.length));for(var e=b.length;0<e&&0<c;)if(d[--c]!=b[--e])return!1;return 0>=e}});
u("Array.prototype.find",function(a){return a?a:function(b,c){a:{var d=this;d instanceof String&&(d=String(d));for(var e=d.length,f=0;f<e;f++){var g=d[f];if(b.call(c,g,f,d)){b=g;break a}}b=void 0}return b}});
function Ma(a,b){a instanceof String&&(a+="");var c=0,d=!1,e={next:function(){if(!d&&c<a.length){var f=c++;return{value:b(f,a[f]),done:!1}}d=!0;return{done:!0,value:void 0}}};
e[Symbol.iterator]=function(){return e};
return e}
u("Array.prototype.entries",function(a){return a?a:function(){return Ma(this,function(b,c){return[b,c]})}});
u("Array.prototype.keys",function(a){return a?a:function(){return Ma(this,function(b){return b})}});
u("String.prototype.startsWith",function(a){return a?a:function(b,c){var d=La(this,b,"startsWith");b+="";var e=d.length,f=b.length;c=Math.max(0,Math.min(c|0,d.length));for(var g=0;g<f&&c<e;)if(d[c++]!=b[g++])return!1;return g>=f}});
u("Number.isFinite",function(a){return a?a:function(b){return"number"!==typeof b?!1:!isNaN(b)&&Infinity!==b&&-Infinity!==b}});
u("Set",function(a){function b(c){this.h=new Map;if(c){c=v(c);for(var d;!(d=c.next()).done;)this.add(d.value)}this.size=this.h.size}
if(function(){if(!a||"function"!=typeof a||!a.prototype.entries||"function"!=typeof Object.seal)return!1;try{var c=Object.seal({x:4}),d=new a(v([c]));if(!d.has(c)||1!=d.size||d.add(c)!=d||1!=d.size||d.add({x:4})!=d||2!=d.size)return!1;var e=d.entries(),f=e.next();if(f.done||f.value[0]!=c||f.value[1]!=c)return!1;f=e.next();return f.done||f.value[0]==c||4!=f.value[0].x||f.value[1]!=f.value[0]?!1:e.next().done}catch(g){return!1}}())return a;
b.prototype.add=function(c){c=0===c?0:c;this.h.set(c,c);this.size=this.h.size;return this};
b.prototype.delete=function(c){c=this.h.delete(c);this.size=this.h.size;return c};
b.prototype.clear=function(){this.h.clear();this.size=0};
b.prototype.has=function(c){return this.h.has(c)};
b.prototype.entries=function(){return this.h.entries()};
b.prototype.values=function(){return this.h.values()};
b.prototype.keys=b.prototype.values;b.prototype[Symbol.iterator]=b.prototype.values;b.prototype.forEach=function(c,d){var e=this;this.h.forEach(function(f){return c.call(d,f,f,e)})};
return b});
u("Array.prototype.values",function(a){return a?a:function(){return Ma(this,function(b,c){return c})}});
u("Object.values",function(a){return a?a:function(b){var c=[],d;for(d in b)na(b,d)&&c.push(b[d]);return c}});
u("Object.is",function(a){return a?a:function(b,c){return b===c?0!==b||1/b===1/c:b!==b&&c!==c}});
u("Array.prototype.includes",function(a){return a?a:function(b,c){var d=this;d instanceof String&&(d=String(d));var e=d.length;c=c||0;for(0>c&&(c=Math.max(c+e,0));c<e;c++){var f=d[c];if(f===b||Object.is(f,b))return!0}return!1}});
u("String.prototype.includes",function(a){return a?a:function(b,c){return-1!==La(this,b,"includes").indexOf(b,c||0)}});
u("Number.MAX_SAFE_INTEGER",function(){return 9007199254740991});
u("Number.isInteger",function(a){return a?a:function(b){return Number.isFinite(b)?b===Math.floor(b):!1}});
u("Number.isSafeInteger",function(a){return a?a:function(b){return Number.isInteger(b)&&Math.abs(b)<=Number.MAX_SAFE_INTEGER}});
u("Math.trunc",function(a){return a?a:function(b){b=Number(b);if(isNaN(b)||Infinity===b||-Infinity===b||0===b)return b;var c=Math.floor(Math.abs(b));return 0>b?-c:c}});
u("Array.from",function(a){return a?a:function(b,c,d){c=null!=c?c:function(h){return h};
var e=[],f="undefined"!=typeof Symbol&&Symbol.iterator&&b[Symbol.iterator];if("function"==typeof f){b=f.call(b);for(var g=0;!(f=b.next()).done;)e.push(c.call(d,f.value,g++))}else for(f=b.length,g=0;g<f;g++)e.push(c.call(d,b[g],g));return e}});
u("Number.isNaN",function(a){return a?a:function(b){return"number"===typeof b&&isNaN(b)}});
u("Object.entries",function(a){return a?a:function(b){var c=[],d;for(d in b)na(b,d)&&c.push([d,b[d]]);return c}});
u("globalThis",function(a){return a||fa});/*

 Copyright The Closure Library Authors.
 SPDX-License-Identifier: Apache-2.0
*/
var Na=Na||{},C=this||self;function D(a,b,c){a=a.split(".");c=c||C;a[0]in c||"undefined"==typeof c.execScript||c.execScript("var "+a[0]);for(var d;a.length&&(d=a.shift());)a.length||void 0===b?c[d]&&c[d]!==Object.prototype[d]?c=c[d]:c=c[d]={}:c[d]=b}
function Oa(a){var b=E("CLOSURE_FLAGS");a=b&&b[a];return null!=a?a:!1}
function E(a,b){a=a.split(".");b=b||C;for(var c=0;c<a.length;c++)if(b=b[a[c]],null==b)return null;return b}
function Pa(a){var b=typeof a;return"object"!=b?b:a?Array.isArray(a)?"array":b:"null"}
function Qa(a){var b=Pa(a);return"array"==b||"object"==b&&"number"==typeof a.length}
function Ra(a){var b=typeof a;return"object"==b&&null!=a||"function"==b}
function Sa(a){return Object.prototype.hasOwnProperty.call(a,Ta)&&a[Ta]||(a[Ta]=++Ua)}
var Ta="closure_uid_"+(1E9*Math.random()>>>0),Ua=0;function Va(a,b,c){return a.call.apply(a.bind,arguments)}
function Wa(a,b,c){if(!a)throw Error();if(2<arguments.length){var d=Array.prototype.slice.call(arguments,2);return function(){var e=Array.prototype.slice.call(arguments);Array.prototype.unshift.apply(e,d);return a.apply(b,e)}}return function(){return a.apply(b,arguments)}}
function Xa(a,b,c){Xa=Function.prototype.bind&&-1!=Function.prototype.bind.toString().indexOf("native code")?Va:Wa;return Xa.apply(null,arguments)}
function Ya(a,b){var c=Array.prototype.slice.call(arguments,1);return function(){var d=c.slice();d.push.apply(d,arguments);return a.apply(this,d)}}
function Za(){return Date.now()}
function $a(a,b){function c(){}
c.prototype=b.prototype;a.Aa=b.prototype;a.prototype=new c;a.prototype.constructor=a;a.base=function(d,e,f){for(var g=Array(arguments.length-2),h=2;h<arguments.length;h++)g[h-2]=arguments[h];return b.prototype[e].apply(d,g)}}
function ab(a){return a}
;function bb(a,b){if(Error.captureStackTrace)Error.captureStackTrace(this,bb);else{var c=Error().stack;c&&(this.stack=c)}a&&(this.message=String(a));void 0!==b&&(this.cause=b)}
$a(bb,Error);bb.prototype.name="CustomError";function cb(a){a=a.url;var b=/[?&]dsh=1(&|$)/.test(a);this.j=!b&&/[?&]ae=1(&|$)/.test(a);this.l=!b&&/[?&]ae=2(&|$)/.test(a);if((this.h=/[?&]adurl=([^&]*)/.exec(a))&&this.h[1]){try{var c=decodeURIComponent(this.h[1])}catch(d){c=null}this.i=c}}
;var db=String.prototype.trim?function(a){return a.trim()}:function(a){return/^[\s\xa0]*([\s\S]*?)[\s\xa0]*$/.exec(a)[1]};var eb=Array.prototype.indexOf?function(a,b){return Array.prototype.indexOf.call(a,b,void 0)}:function(a,b){if("string"===typeof a)return"string"!==typeof b||1!=b.length?-1:a.indexOf(b,0);
for(var c=0;c<a.length;c++)if(c in a&&a[c]===b)return c;return-1},fb=Array.prototype.forEach?function(a,b,c){Array.prototype.forEach.call(a,b,c)}:function(a,b,c){for(var d=a.length,e="string"===typeof a?a.split(""):a,f=0;f<d;f++)f in e&&b.call(c,e[f],f,a)},gb=Array.prototype.filter?function(a,b){return Array.prototype.filter.call(a,b,void 0)}:function(a,b){for(var c=a.length,d=[],e=0,f="string"===typeof a?a.split(""):a,g=0;g<c;g++)if(g in f){var h=f[g];
b.call(void 0,h,g,a)&&(d[e++]=h)}return d},hb=Array.prototype.map?function(a,b){return Array.prototype.map.call(a,b,void 0)}:function(a,b){for(var c=a.length,d=Array(c),e="string"===typeof a?a.split(""):a,f=0;f<c;f++)f in e&&(d[f]=b.call(void 0,e[f],f,a));
return d},ib=Array.prototype.reduce?function(a,b,c){return Array.prototype.reduce.call(a,b,c)}:function(a,b,c){var d=c;
fb(a,function(e,f){d=b.call(void 0,d,e,f,a)});
return d};
function jb(a,b){a:{for(var c=a.length,d="string"===typeof a?a.split(""):a,e=0;e<c;e++)if(e in d&&b.call(void 0,d[e],e,a)){b=e;break a}b=-1}return 0>b?null:"string"===typeof a?a.charAt(b):a[b]}
function kb(a,b){b=eb(a,b);var c;(c=0<=b)&&Array.prototype.splice.call(a,b,1);return c}
function lb(a,b){for(var c=1;c<arguments.length;c++){var d=arguments[c];if(Qa(d)){var e=a.length||0,f=d.length||0;a.length=e+f;for(var g=0;g<f;g++)a[e+g]=d[g]}else a.push(d)}}
;function mb(a,b){for(var c in a)b.call(void 0,a[c],c,a)}
function nb(a){var b=ob,c;for(c in b)if(a.call(void 0,b[c],c,b))return c}
function pb(a){for(var b in a)return!1;return!0}
function qb(a,b){if(null!==a&&b in a)throw Error('The object already contains the key "'+b+'"');a[b]=!0}
function rb(a){return null!==a&&"privembed"in a?a.privembed:!1}
function sb(a,b){for(var c in a)if(!(c in b)||a[c]!==b[c])return!1;for(var d in b)if(!(d in a))return!1;return!0}
function tb(a){var b={},c;for(c in a)b[c]=a[c];return b}
function ub(a){if(!a||"object"!==typeof a)return a;if("function"===typeof a.clone)return a.clone();if("undefined"!==typeof Map&&a instanceof Map)return new Map(a);if("undefined"!==typeof Set&&a instanceof Set)return new Set(a);if(a instanceof Date)return new Date(a.getTime());var b=Array.isArray(a)?[]:"function"!==typeof ArrayBuffer||"function"!==typeof ArrayBuffer.isView||!ArrayBuffer.isView(a)||a instanceof DataView?{}:new a.constructor(a.length),c;for(c in a)b[c]=ub(a[c]);return b}
var vb="constructor hasOwnProperty isPrototypeOf propertyIsEnumerable toLocaleString toString valueOf".split(" ");function wb(a,b){for(var c,d,e=1;e<arguments.length;e++){d=arguments[e];for(c in d)a[c]=d[c];for(var f=0;f<vb.length;f++)c=vb[f],Object.prototype.hasOwnProperty.call(d,c)&&(a[c]=d[c])}}
;var xb;function yb(){if(void 0===xb){var a=null,b=C.trustedTypes;if(b&&b.createPolicy){try{a=b.createPolicy("goog#html",{createHTML:ab,createScript:ab,createScriptURL:ab})}catch(c){C.console&&C.console.error(c.message)}xb=a}else xb=a}return xb}
;function zb(a,b){this.h=a===Ab&&b||""}
zb.prototype.toString=function(){return this.h};
function Bb(a){return new zb(Ab,a)}
var Ab={};Bb("");function Cb(a){this.h=a}
Cb.prototype.toString=function(){return this.h+""};
function Db(a){if(a instanceof Cb&&a.constructor===Cb)return a.h;Pa(a);return"type_error:TrustedResourceUrl"}
var Eb={};function Fb(a){var b=yb();a=b?b.createScriptURL(a):a;return new Cb(a,Eb)}
;function Gb(a){this.h=a}
Gb.prototype.toString=function(){return this.h.toString()};
var Hb={};var Ib=Oa(610401301),Jb=Oa(188588736);function Kb(){var a=C.navigator;return a&&(a=a.userAgent)?a:""}
var Lb,Mb=C.navigator;Lb=Mb?Mb.userAgentData||null:null;function Nb(a){return Ib?Lb?Lb.brands.some(function(b){return(b=b.brand)&&-1!=b.indexOf(a)}):!1:!1}
function F(a){return-1!=Kb().indexOf(a)}
;function Ob(){return Ib?!!Lb&&0<Lb.brands.length:!1}
function Pb(){return Ob()?!1:F("Opera")}
function Qb(){return Ob()?!1:F("Trident")||F("MSIE")}
function Rb(){return F("Firefox")||F("FxiOS")}
function Sb(){return Ob()?Nb("Chromium"):(F("Chrome")||F("CriOS"))&&!(Ob()?0:F("Edge"))||F("Silk")}
;function Tb(a){this.h=a}
Tb.prototype.toString=function(){return this.h.toString()};/*

 SPDX-License-Identifier: Apache-2.0
*/
var Ub=ja([""]),Vb=la(["\x00"],["\\0"]),Wb=la(["\n"],["\\n"]),Xb=la(["\x00"],["\\u0000"]);function Yb(a){return-1===a.toString().indexOf("`")}
Yb(function(a){return a(Ub)})||Yb(function(a){return a(Vb)})||Yb(function(a){return a(Wb)})||Yb(function(a){return a(Xb)});var Zb=new Gb("about:invalid#zClosurez",Hb);function $b(a){this.se=a}
function ac(a){return new $b(function(b){return b.substr(0,a.length+1).toLowerCase()===a+":"})}
var bc=[ac("data"),ac("http"),ac("https"),ac("mailto"),ac("ftp"),new $b(function(a){return/^[^:]*([/?#]|$)/.test(a)})],cc=/^\s*(?!javascript:)(?:[a-z0-9+.-]+:|[^:\/?#]*(?:[\/?#]|$))/i;
function dc(a){a instanceof Gb?a instanceof Gb&&a.constructor===Gb?a=a.h:(Pa(a),a="type_error:SafeUrl"):a=cc.test(a)?a:void 0;return a}
;function ec(a,b){b=dc(b);void 0!==b&&(a.href=b)}
;var fc={};function hc(){}
function ic(a){this.h=a}
w(ic,hc);ic.prototype.toString=function(){return this.h};function jc(a){var b="true".toString(),c=[new ic(kc[0].toLowerCase(),fc)];if(0===c.length)throw Error("");if(c.map(function(d){if(d instanceof ic)d=d.h;else throw Error("");return d}).every(function(d){return 0!=="data-loaded".indexOf(d)}))throw Error('Attribute "data-loaded" does not match any of the allowed prefixes.');
a.setAttribute("data-loaded",b)}
;function lc(){throw Error("unknown trace type");}
;var mc="alternate author bookmark canonical cite help icon license modulepreload next prefetch dns-prefetch prerender preconnect preload prev search subresource".split(" ");function nc(a,b){if(b instanceof Cb)a.href=Db(b).toString();else{if(-1===mc.indexOf("stylesheet"))throw Error('TrustedResourceUrl href attribute required with rel="stylesheet"');b=dc(b);if(void 0===b)return;a.href=b}a.rel="stylesheet"}
;function oc(a){var b,c;return(a=null==(c=(b=a.document).querySelector)?void 0:c.call(b,"script[nonce]"))?a.nonce||a.getAttribute("nonce")||"":""}
;function pc(){}
pc.prototype.toString=function(){return this.ud.toString()};function qc(a){var b=oc(a.ownerDocument&&a.ownerDocument.defaultView||window);b&&a.setAttribute("nonce",b)}
function rc(a,b){if(b instanceof pc)b=b.ud;else throw Error("");a.textContent=b;qc(a)}
function sc(a,b){a.src=Db(b);qc(a)}
;function tc(a){var b=E("window.location.href");null==a&&(a='Unknown Error of type "null/undefined"');if("string"===typeof a)return{message:a,name:"Unknown error",lineNumber:"Not available",fileName:b,stack:"Not available"};var c=!1;try{var d=a.lineNumber||a.line||"Not available"}catch(g){d="Not available",c=!0}try{var e=a.fileName||a.filename||a.sourceURL||C.$googDebugFname||b}catch(g){e="Not available",c=!0}b=uc(a);if(!(!c&&a.lineNumber&&a.fileName&&a.stack&&a.message&&a.name)){c=a.message;if(null==
c){if(a.constructor&&a.constructor instanceof Function){if(a.constructor.name)c=a.constructor.name;else if(c=a.constructor,vc[c])c=vc[c];else{c=String(c);if(!vc[c]){var f=/function\s+([^\(]+)/m.exec(c);vc[c]=f?f[1]:"[Anonymous]"}c=vc[c]}c='Unknown Error of type "'+c+'"'}else c="Unknown Error of unknown type";"function"===typeof a.toString&&Object.prototype.toString!==a.toString&&(c+=": "+a.toString())}return{message:c,name:a.name||"UnknownError",lineNumber:d,fileName:e,stack:b||"Not available"}}return{message:a.message,
name:a.name,lineNumber:a.lineNumber,fileName:a.fileName,stack:b}}
function uc(a,b){b||(b={});b[wc(a)]=!0;var c=a.stack||"";(a=a.cause)&&!b[wc(a)]&&(c+="\nCaused by: ",a.stack&&0==a.stack.indexOf(a.toString())||(c+="string"===typeof a?a:a.message+"\n"),c+=uc(a,b));return c}
function wc(a){var b="";"function"===typeof a.toString&&(b=""+a);return b+a.stack}
var vc={};function xc(a){for(var b=0,c=0;c<a.length;++c)b=31*b+a.charCodeAt(c)>>>0;return b}
;var yc=RegExp("^(?:([^:/?#.]+):)?(?://(?:([^\\\\/?#]*)@)?([^\\\\/?#]*?)(?::([0-9]+))?(?=[\\\\/?#]|$))?([^?#]+)?(?:\\?([^#]*))?(?:#([\\s\\S]*))?$");function zc(a){return a?decodeURI(a):a}
function Ac(a,b){return b.match(yc)[a]||null}
function Bc(a){return zc(Ac(3,a))}
function Cc(a){var b=a.match(yc);a=b[5];var c=b[6];b=b[7];var d="";a&&(d+=a);c&&(d+="?"+c);b&&(d+="#"+b);return d}
function Dc(a){var b=a.indexOf("#");return 0>b?a:a.slice(0,b)}
function Ec(a,b,c){if(Array.isArray(b))for(var d=0;d<b.length;d++)Ec(a,String(b[d]),c);else null!=b&&c.push(a+(""===b?"":"="+encodeURIComponent(String(b))))}
function Fc(a){var b=[],c;for(c in a)Ec(c,a[c],b);return b.join("&")}
function Gc(a,b){b=Fc(b);if(b){var c=a.indexOf("#");0>c&&(c=a.length);var d=a.indexOf("?");if(0>d||d>c){d=c;var e=""}else e=a.substring(d+1,c);a=[a.slice(0,d),e,a.slice(c)];c=a[1];a[1]=b?c?c+"&"+b:b:c;b=a[0]+(a[1]?"?"+a[1]:"")+a[2]}else b=a;return b}
function Hc(a,b,c,d){for(var e=c.length;0<=(b=a.indexOf(c,b))&&b<d;){var f=a.charCodeAt(b-1);if(38==f||63==f)if(f=a.charCodeAt(b+e),!f||61==f||38==f||35==f)return b;b+=e+1}return-1}
var Ic=/#|$/,Jc=/[?&]($|#)/;function Kc(a,b){for(var c=a.search(Ic),d=0,e,f=[];0<=(e=Hc(a,d,b,c));)f.push(a.substring(d,e)),d=Math.min(a.indexOf("&",e)+1||c,c);f.push(a.slice(d));return f.join("").replace(Jc,"$1")}
;function Lc(a){this.h=a}
;function Mc(a,b,c){this.l=a;this.j=b;this.fields=c||[];this.h=new Map}
m=Mc.prototype;m.Od=function(a){var b=B.apply(1,arguments),c=this.xc(b);c?c.push(new Lc(a)):this.Bd(a,b)};
m.Bd=function(a){var b=this.Vc(B.apply(1,arguments));this.h.set(b,[new Lc(a)])};
m.xc=function(){var a=this.Vc(B.apply(0,arguments));return this.h.has(a)?this.h.get(a):void 0};
m.ge=function(){var a=this.xc(B.apply(0,arguments));return a&&a.length?a[0]:void 0};
m.clear=function(){this.h.clear()};
m.Vc=function(){var a=B.apply(0,arguments);return a?a.join(","):"key"};function Nc(a,b){Mc.call(this,a,3,b)}
w(Nc,Mc);Nc.prototype.i=function(a){var b=B.apply(1,arguments),c=0,d=this.ge(b);d&&(c=d.h);this.Bd(c+a,b)};function Oc(a,b){Mc.call(this,a,2,b)}
w(Oc,Mc);Oc.prototype.record=function(a){this.Od(a,B.apply(1,arguments))};function Pc(a){a&&"function"==typeof a.dispose&&a.dispose()}
;function Qc(a){for(var b=0,c=arguments.length;b<c;++b){var d=arguments[b];Qa(d)?Qc.apply(null,d):Pc(d)}}
;function H(){this.ob=this.ob;this.v=this.v}
m=H.prototype;m.ob=!1;m.Z=function(){return this.ob};
m.dispose=function(){this.ob||(this.ob=!0,this.R())};
function Rc(a,b){a.addOnDisposeCallback(Ya(Pc,b))}
m.addOnDisposeCallback=function(a,b){this.ob?void 0!==b?a.call(b):a():(this.v||(this.v=[]),this.v.push(void 0!==b?Xa(a,b):a))};
m.R=function(){if(this.v)for(;this.v.length;)this.v.shift()()};function Sc(a,b){this.type=a;this.h=this.target=b;this.defaultPrevented=this.j=!1}
Sc.prototype.stopPropagation=function(){this.j=!0};
Sc.prototype.preventDefault=function(){this.defaultPrevented=!0};var Tc=function(){if(!C.addEventListener||!Object.defineProperty)return!1;var a=!1,b=Object.defineProperty({},"passive",{get:function(){a=!0}});
try{var c=function(){};
C.addEventListener("test",c,b);C.removeEventListener("test",c,b)}catch(d){}return a}();function Uc(){return Ib?!!Lb&&!!Lb.platform:!1}
function Vc(){return F("iPhone")&&!F("iPod")&&!F("iPad")}
;function Wc(a){Wc[" "](a);return a}
Wc[" "]=function(){};var Xc=Pb(),Yc=Qb(),Zc=F("Edge"),$c=F("Gecko")&&!(-1!=Kb().toLowerCase().indexOf("webkit")&&!F("Edge"))&&!(F("Trident")||F("MSIE"))&&!F("Edge"),ad=-1!=Kb().toLowerCase().indexOf("webkit")&&!F("Edge");ad&&F("Mobile");Uc()||F("Macintosh");Uc()||F("Windows");(Uc()?"Linux"===Lb.platform:F("Linux"))||Uc()||F("CrOS");var bd=Uc()?"Android"===Lb.platform:F("Android");Vc();F("iPad");F("iPod");Vc()||F("iPad")||F("iPod");Kb().toLowerCase().indexOf("kaios");
function cd(){var a=C.document;return a?a.documentMode:void 0}
var dd;a:{var ed="",fd=function(){var a=Kb();if($c)return/rv:([^\);]+)(\)|;)/.exec(a);if(Zc)return/Edge\/([\d\.]+)/.exec(a);if(Yc)return/\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a);if(ad)return/WebKit\/(\S+)/.exec(a);if(Xc)return/(?:Version)[ \/]?(\S+)/.exec(a)}();
fd&&(ed=fd?fd[1]:"");if(Yc){var gd=cd();if(null!=gd&&gd>parseFloat(ed)){dd=String(gd);break a}}dd=ed}var hd=dd,id;if(C.document&&Yc){var jd=cd();id=jd?jd:parseInt(hd,10)||void 0}else id=void 0;var kd=id;function ld(a,b){Sc.call(this,a?a.type:"");this.relatedTarget=this.h=this.target=null;this.button=this.screenY=this.screenX=this.clientY=this.clientX=0;this.key="";this.charCode=this.keyCode=0;this.metaKey=this.shiftKey=this.altKey=this.ctrlKey=!1;this.state=null;this.pointerId=0;this.pointerType="";this.i=null;a&&this.init(a,b)}
$a(ld,Sc);var md={2:"touch",3:"pen",4:"mouse"};
ld.prototype.init=function(a,b){var c=this.type=a.type,d=a.changedTouches&&a.changedTouches.length?a.changedTouches[0]:null;this.target=a.target||a.srcElement;this.h=b;if(b=a.relatedTarget){if($c){a:{try{Wc(b.nodeName);var e=!0;break a}catch(f){}e=!1}e||(b=null)}}else"mouseover"==c?b=a.fromElement:"mouseout"==c&&(b=a.toElement);this.relatedTarget=b;d?(this.clientX=void 0!==d.clientX?d.clientX:d.pageX,this.clientY=void 0!==d.clientY?d.clientY:d.pageY,this.screenX=d.screenX||0,this.screenY=d.screenY||
0):(this.clientX=void 0!==a.clientX?a.clientX:a.pageX,this.clientY=void 0!==a.clientY?a.clientY:a.pageY,this.screenX=a.screenX||0,this.screenY=a.screenY||0);this.button=a.button;this.keyCode=a.keyCode||0;this.key=a.key||"";this.charCode=a.charCode||("keypress"==c?a.keyCode:0);this.ctrlKey=a.ctrlKey;this.altKey=a.altKey;this.shiftKey=a.shiftKey;this.metaKey=a.metaKey;this.pointerId=a.pointerId||0;this.pointerType="string"===typeof a.pointerType?a.pointerType:md[a.pointerType]||"";this.state=a.state;
this.i=a;a.defaultPrevented&&ld.Aa.preventDefault.call(this)};
ld.prototype.stopPropagation=function(){ld.Aa.stopPropagation.call(this);this.i.stopPropagation?this.i.stopPropagation():this.i.cancelBubble=!0};
ld.prototype.preventDefault=function(){ld.Aa.preventDefault.call(this);var a=this.i;a.preventDefault?a.preventDefault():a.returnValue=!1};var nd="closure_listenable_"+(1E6*Math.random()|0);var od=0;function pd(a,b,c,d,e){this.listener=a;this.proxy=null;this.src=b;this.type=c;this.capture=!!d;this.ac=e;this.key=++od;this.Mb=this.Vb=!1}
function qd(a){a.Mb=!0;a.listener=null;a.proxy=null;a.src=null;a.ac=null}
;function rd(a){this.src=a;this.listeners={};this.h=0}
rd.prototype.add=function(a,b,c,d,e){var f=a.toString();a=this.listeners[f];a||(a=this.listeners[f]=[],this.h++);var g=sd(a,b,d,e);-1<g?(b=a[g],c||(b.Vb=!1)):(b=new pd(b,this.src,f,!!d,e),b.Vb=c,a.push(b));return b};
rd.prototype.remove=function(a,b,c,d){a=a.toString();if(!(a in this.listeners))return!1;var e=this.listeners[a];b=sd(e,b,c,d);return-1<b?(qd(e[b]),Array.prototype.splice.call(e,b,1),0==e.length&&(delete this.listeners[a],this.h--),!0):!1};
function td(a,b){var c=b.type;c in a.listeners&&kb(a.listeners[c],b)&&(qd(b),0==a.listeners[c].length&&(delete a.listeners[c],a.h--))}
function sd(a,b,c,d){for(var e=0;e<a.length;++e){var f=a[e];if(!f.Mb&&f.listener==b&&f.capture==!!c&&f.ac==d)return e}return-1}
;var ud="closure_lm_"+(1E6*Math.random()|0),vd={},wd=0;function xd(a,b,c,d,e){if(d&&d.once)yd(a,b,c,d,e);else if(Array.isArray(b))for(var f=0;f<b.length;f++)xd(a,b[f],c,d,e);else c=zd(c),a&&a[nd]?a.listen(b,c,Ra(d)?!!d.capture:!!d,e):Ad(a,b,c,!1,d,e)}
function Ad(a,b,c,d,e,f){if(!b)throw Error("Invalid event type");var g=Ra(e)?!!e.capture:!!e,h=Bd(a);h||(a[ud]=h=new rd(a));c=h.add(b,c,d,g,f);if(!c.proxy){d=Cd();c.proxy=d;d.src=a;d.listener=c;if(a.addEventListener)Tc||(e=g),void 0===e&&(e=!1),a.addEventListener(b.toString(),d,e);else if(a.attachEvent)a.attachEvent(Dd(b.toString()),d);else if(a.addListener&&a.removeListener)a.addListener(d);else throw Error("addEventListener and attachEvent are unavailable.");wd++}}
function Cd(){function a(c){return b.call(a.src,a.listener,c)}
var b=Ed;return a}
function yd(a,b,c,d,e){if(Array.isArray(b))for(var f=0;f<b.length;f++)yd(a,b[f],c,d,e);else c=zd(c),a&&a[nd]?a.h.add(String(b),c,!0,Ra(d)?!!d.capture:!!d,e):Ad(a,b,c,!0,d,e)}
function Fd(a,b,c,d,e){if(Array.isArray(b))for(var f=0;f<b.length;f++)Fd(a,b[f],c,d,e);else(d=Ra(d)?!!d.capture:!!d,c=zd(c),a&&a[nd])?a.h.remove(String(b),c,d,e):a&&(a=Bd(a))&&(b=a.listeners[b.toString()],a=-1,b&&(a=sd(b,c,d,e)),(c=-1<a?b[a]:null)&&Gd(c))}
function Gd(a){if("number"!==typeof a&&a&&!a.Mb){var b=a.src;if(b&&b[nd])td(b.h,a);else{var c=a.type,d=a.proxy;b.removeEventListener?b.removeEventListener(c,d,a.capture):b.detachEvent?b.detachEvent(Dd(c),d):b.addListener&&b.removeListener&&b.removeListener(d);wd--;(c=Bd(b))?(td(c,a),0==c.h&&(c.src=null,b[ud]=null)):qd(a)}}}
function Dd(a){return a in vd?vd[a]:vd[a]="on"+a}
function Ed(a,b){if(a.Mb)a=!0;else{b=new ld(b,this);var c=a.listener,d=a.ac||a.src;a.Vb&&Gd(a);a=c.call(d,b)}return a}
function Bd(a){a=a[ud];return a instanceof rd?a:null}
var Hd="__closure_events_fn_"+(1E9*Math.random()>>>0);function zd(a){if("function"===typeof a)return a;a[Hd]||(a[Hd]=function(b){return a.handleEvent(b)});
return a[Hd]}
;function Id(){H.call(this);this.h=new rd(this);this.Za=this;this.ga=null}
$a(Id,H);Id.prototype[nd]=!0;m=Id.prototype;m.addEventListener=function(a,b,c,d){xd(this,a,b,c,d)};
m.removeEventListener=function(a,b,c,d){Fd(this,a,b,c,d)};
function Jd(a,b){var c=a.ga;if(c){var d=[];for(var e=1;c;c=c.ga)d.push(c),++e}a=a.Za;c=b.type||b;"string"===typeof b?b=new Sc(b,a):b instanceof Sc?b.target=b.target||a:(e=b,b=new Sc(c,a),wb(b,e));e=!0;if(d)for(var f=d.length-1;!b.j&&0<=f;f--){var g=b.h=d[f];e=Kd(g,c,!0,b)&&e}b.j||(g=b.h=a,e=Kd(g,c,!0,b)&&e,b.j||(e=Kd(g,c,!1,b)&&e));if(d)for(f=0;!b.j&&f<d.length;f++)g=b.h=d[f],e=Kd(g,c,!1,b)&&e}
m.R=function(){Id.Aa.R.call(this);this.removeAllListeners();this.ga=null};
m.listen=function(a,b,c,d){return this.h.add(String(a),b,!1,c,d)};
m.removeAllListeners=function(a){if(this.h){var b=this.h;a=a&&a.toString();var c=0,d;for(d in b.listeners)if(!a||d==a){for(var e=b.listeners[d],f=0;f<e.length;f++)++c,qd(e[f]);delete b.listeners[d];b.h--}b=c}else b=0;return b};
function Kd(a,b,c,d){b=a.h.listeners[String(b)];if(!b)return!0;b=b.concat();for(var e=!0,f=0;f<b.length;++f){var g=b[f];if(g&&!g.Mb&&g.capture==c){var h=g.listener,k=g.ac||g.src;g.Vb&&td(a.h,g);e=!1!==h.call(k,d)&&e}}return e&&!d.defaultPrevented}
;function Ld(a,b){this.j=a;this.l=b;this.i=0;this.h=null}
Ld.prototype.get=function(){if(0<this.i){this.i--;var a=this.h;this.h=a.next;a.next=null}else a=this.j();return a};
function Md(a,b){a.l(b);100>a.i&&(a.i++,b.next=a.h,a.h=b)}
;function Nd(){}
function Od(a){var b=!1,c;return function(){b||(c=a(),b=!0);return c}}
;"ARTICLE SECTION NAV ASIDE H1 H2 H3 H4 H5 H6 HEADER FOOTER ADDRESS P HR PRE BLOCKQUOTE OL UL LH LI DL DT DD FIGURE FIGCAPTION MAIN DIV EM STRONG SMALL S CITE Q DFN ABBR RUBY RB RT RTC RP DATA TIME CODE VAR SAMP KBD SUB SUP I B U MARK BDI BDO SPAN BR WBR INS DEL PICTURE PARAM TRACK MAP TABLE CAPTION COLGROUP COL TBODY THEAD TFOOT TR TD TH SELECT DATALIST OPTGROUP OPTION OUTPUT PROGRESS METER FIELDSET LEGEND DETAILS SUMMARY MENU DIALOG SLOT CANVAS FONT CENTER ACRONYM BASEFONT BIG DIR HGROUP STRIKE TT".split(" ").concat(["BUTTON",
"INPUT"]);function Pd(a,b){this.x=void 0!==a?a:0;this.y=void 0!==b?b:0}
m=Pd.prototype;m.clone=function(){return new Pd(this.x,this.y)};
m.equals=function(a){return a instanceof Pd&&(this==a?!0:this&&a?this.x==a.x&&this.y==a.y:!1)};
m.ceil=function(){this.x=Math.ceil(this.x);this.y=Math.ceil(this.y);return this};
m.floor=function(){this.x=Math.floor(this.x);this.y=Math.floor(this.y);return this};
m.round=function(){this.x=Math.round(this.x);this.y=Math.round(this.y);return this};
m.scale=function(a,b){this.x*=a;this.y*="number"===typeof b?b:a;return this};function Qd(a,b){this.width=a;this.height=b}
m=Qd.prototype;m.clone=function(){return new Qd(this.width,this.height)};
m.aspectRatio=function(){return this.width/this.height};
m.ceil=function(){this.width=Math.ceil(this.width);this.height=Math.ceil(this.height);return this};
m.floor=function(){this.width=Math.floor(this.width);this.height=Math.floor(this.height);return this};
m.round=function(){this.width=Math.round(this.width);this.height=Math.round(this.height);return this};
m.scale=function(a,b){this.width*=a;this.height*="number"===typeof b?b:a;return this};function Rd(a){var b=document;return"string"===typeof a?b.getElementById(a):a}
function Sd(a){var b=document;a=String(a);"application/xhtml+xml"===b.contentType&&(a=a.toLowerCase());return b.createElement(a)}
function Td(a,b){for(var c=0;a;){if(b(a))return a;a=a.parentNode;c++}return null}
;var Ud;function Vd(){var a=C.MessageChannel;"undefined"===typeof a&&"undefined"!==typeof window&&window.postMessage&&window.addEventListener&&!F("Presto")&&(a=function(){var e=Sd("IFRAME");e.style.display="none";document.documentElement.appendChild(e);var f=e.contentWindow;e=f.document;e.open();e.close();var g="callImmediate"+Math.random(),h="file:"==f.location.protocol?"*":f.location.protocol+"//"+f.location.host;e=Xa(function(k){if(("*"==h||k.origin==h)&&k.data==g)this.port1.onmessage()},this);
f.addEventListener("message",e,!1);this.port1={};this.port2={postMessage:function(){f.postMessage(g,h)}}});
if("undefined"!==typeof a&&!Qb()){var b=new a,c={},d=c;b.port1.onmessage=function(){if(void 0!==c.next){c=c.next;var e=c.bd;c.bd=null;e()}};
return function(e){d.next={bd:e};d=d.next;b.port2.postMessage(0)}}return function(e){C.setTimeout(e,0)}}
;function Wd(a){C.setTimeout(function(){throw a;},0)}
;function Xd(){this.i=this.h=null}
Xd.prototype.add=function(a,b){var c=Yd.get();c.set(a,b);this.i?this.i.next=c:this.h=c;this.i=c};
Xd.prototype.remove=function(){var a=null;this.h&&(a=this.h,this.h=this.h.next,this.h||(this.i=null),a.next=null);return a};
var Yd=new Ld(function(){return new Zd},function(a){return a.reset()});
function Zd(){this.next=this.scope=this.h=null}
Zd.prototype.set=function(a,b){this.h=a;this.scope=b;this.next=null};
Zd.prototype.reset=function(){this.next=this.scope=this.h=null};var $d,ae=!1,be=new Xd;function ce(a,b){$d||de();ae||($d(),ae=!0);be.add(a,b)}
function de(){if(C.Promise&&C.Promise.resolve){var a=C.Promise.resolve(void 0);$d=function(){a.then(ee)}}else $d=function(){var b=ee;
"function"!==typeof C.setImmediate||C.Window&&C.Window.prototype&&(Ob()||!F("Edge"))&&C.Window.prototype.setImmediate==C.setImmediate?(Ud||(Ud=Vd()),Ud(b)):C.setImmediate(b)}}
function ee(){for(var a;a=be.remove();){try{a.h.call(a.scope)}catch(b){Wd(b)}Md(Yd,a)}ae=!1}
;function fe(a){this.h=0;this.A=void 0;this.l=this.i=this.j=null;this.v=this.m=!1;if(a!=Nd)try{var b=this;a.call(void 0,function(c){ge(b,2,c)},function(c){ge(b,3,c)})}catch(c){ge(this,3,c)}}
function he(){this.next=this.context=this.h=this.i=this.child=null;this.j=!1}
he.prototype.reset=function(){this.context=this.h=this.i=this.child=null;this.j=!1};
var ie=new Ld(function(){return new he},function(a){a.reset()});
function je(a,b,c){var d=ie.get();d.i=a;d.h=b;d.context=c;return d}
function ke(a){return new fe(function(b,c){c(a)})}
fe.prototype.then=function(a,b,c){return le(this,"function"===typeof a?a:null,"function"===typeof b?b:null,c)};
fe.prototype.$goog_Thenable=!0;m=fe.prototype;m.nc=function(a,b){return le(this,null,a,b)};
m.catch=fe.prototype.nc;m.cancel=function(a){if(0==this.h){var b=new me(a);ce(function(){ne(this,b)},this)}};
function ne(a,b){if(0==a.h)if(a.j){var c=a.j;if(c.i){for(var d=0,e=null,f=null,g=c.i;g&&(g.j||(d++,g.child==a&&(e=g),!(e&&1<d)));g=g.next)e||(f=g);e&&(0==c.h&&1==d?ne(c,b):(f?(d=f,d.next==c.l&&(c.l=d),d.next=d.next.next):oe(c),pe(c,e,3,b)))}a.j=null}else ge(a,3,b)}
function qe(a,b){a.i||2!=a.h&&3!=a.h||re(a);a.l?a.l.next=b:a.i=b;a.l=b}
function le(a,b,c,d){var e=je(null,null,null);e.child=new fe(function(f,g){e.i=b?function(h){try{var k=b.call(d,h);f(k)}catch(l){g(l)}}:f;
e.h=c?function(h){try{var k=c.call(d,h);void 0===k&&h instanceof me?g(h):f(k)}catch(l){g(l)}}:g});
e.child.j=a;qe(a,e);return e.child}
m.jf=function(a){this.h=0;ge(this,2,a)};
m.kf=function(a){this.h=0;ge(this,3,a)};
function ge(a,b,c){if(0==a.h){a===c&&(b=3,c=new TypeError("Promise cannot resolve to itself"));a.h=1;a:{var d=c,e=a.jf,f=a.kf;if(d instanceof fe){qe(d,je(e||Nd,f||null,a));var g=!0}else{if(d)try{var h=!!d.$goog_Thenable}catch(l){h=!1}else h=!1;if(h)d.then(e,f,a),g=!0;else{if(Ra(d))try{var k=d.then;if("function"===typeof k){se(d,k,e,f,a);g=!0;break a}}catch(l){f.call(a,l);g=!0;break a}g=!1}}}g||(a.A=c,a.h=b,a.j=null,re(a),3!=b||c instanceof me||te(a,c))}}
function se(a,b,c,d,e){function f(k){h||(h=!0,d.call(e,k))}
function g(k){h||(h=!0,c.call(e,k))}
var h=!1;try{b.call(a,g,f)}catch(k){f(k)}}
function re(a){a.m||(a.m=!0,ce(a.Zd,a))}
function oe(a){var b=null;a.i&&(b=a.i,a.i=b.next,b.next=null);a.i||(a.l=null);return b}
m.Zd=function(){for(var a;a=oe(this);)pe(this,a,this.h,this.A);this.m=!1};
function pe(a,b,c,d){if(3==c&&b.h&&!b.j)for(;a&&a.v;a=a.j)a.v=!1;if(b.child)b.child.j=null,ue(b,c,d);else try{b.j?b.i.call(b.context):ue(b,c,d)}catch(e){ve.call(null,e)}Md(ie,b)}
function ue(a,b,c){2==b?a.i.call(a.context,c):a.h&&a.h.call(a.context,c)}
function te(a,b){a.v=!0;ce(function(){a.v&&ve.call(null,b)})}
var ve=Wd;function me(a){bb.call(this,a)}
$a(me,bb);me.prototype.name="cancel";function we(a,b){Id.call(this);this.j=a||1;this.i=b||C;this.l=Xa(this.gf,this);this.m=Za()}
$a(we,Id);m=we.prototype;m.enabled=!1;m.Ea=null;m.setInterval=function(a){this.j=a;this.Ea&&this.enabled?(this.stop(),this.start()):this.Ea&&this.stop()};
m.gf=function(){if(this.enabled){var a=Za()-this.m;0<a&&a<.8*this.j?this.Ea=this.i.setTimeout(this.l,this.j-a):(this.Ea&&(this.i.clearTimeout(this.Ea),this.Ea=null),Jd(this,"tick"),this.enabled&&(this.stop(),this.start()))}};
m.start=function(){this.enabled=!0;this.Ea||(this.Ea=this.i.setTimeout(this.l,this.j),this.m=Za())};
m.stop=function(){this.enabled=!1;this.Ea&&(this.i.clearTimeout(this.Ea),this.Ea=null)};
m.R=function(){we.Aa.R.call(this);this.stop();delete this.i};
function xe(a,b,c){if("function"===typeof a)c&&(a=Xa(a,c));else if(a&&"function"==typeof a.handleEvent)a=Xa(a.handleEvent,a);else throw Error("Invalid listener argument");return 2147483647<Number(b)?-1:C.setTimeout(a,b||0)}
;function ye(a){H.call(this);this.D=a;this.j=0;this.l=100;this.m=!1;this.i=new Map;this.A=new Set;this.flushInterval=3E4;this.h=new we(this.flushInterval);this.h.listen("tick",this.Oa,!1,this);Rc(this,this.h)}
w(ye,H);m=ye.prototype;m.sendIsolatedPayload=function(a){this.m=a;this.l=1};
function ze(a){a.h.enabled||a.h.start();a.j++;a.j>=a.l&&a.Oa()}
m.Oa=function(){var a=this.i.values();a=[].concat(ma(a)).filter(function(b){return b.h.size});
a.length&&this.D.flush(a,this.m);Ae(a);this.j=0;this.h.enabled&&this.h.stop()};
m.Rb=function(a){var b=B.apply(1,arguments);this.i.has(a)||this.i.set(a,new Nc(a,b))};
m.sc=function(a){var b=B.apply(1,arguments);this.i.has(a)||this.i.set(a,new Oc(a,b))};
function Be(a,b){return a.A.has(b)?void 0:a.i.get(b)}
m.oc=function(a){this.Nd(a,1,B.apply(1,arguments))};
m.Nd=function(a,b){var c=B.apply(2,arguments),d=Be(this,a);d&&d instanceof Nc&&(d.i(b,c),ze(this))};
m.record=function(a,b){var c=B.apply(2,arguments),d=Be(this,a);d&&d instanceof Oc&&(d.record(b,c),ze(this))};
function Ae(a){for(var b=0;b<a.length;b++)a[b].clear()}
;function Ce(a){this.h=a;this.h.Rb("/client_streamz/bg/fic",{na:3,ma:"ke"})}
function De(a){this.h=a;this.h.Rb("/client_streamz/bg/fiec",{na:3,ma:"rk"},{na:3,ma:"ke"},{na:2,ma:"ec"},{na:3,ma:"em"})}
function Ee(a){this.h=a;this.h.sc("/client_streamz/bg/fil",{na:3,ma:"rk"},{na:3,ma:"ke"})}
Ee.prototype.record=function(a,b,c){this.h.record("/client_streamz/bg/fil",a,b,c)};
function Fe(a){this.h=a;this.h.Rb("/client_streamz/bg/fcc",{na:2,ma:"ph"},{na:3,ma:"ke"})}
function Ge(a){this.h=a;this.h.sc("/client_streamz/bg/fcd",{na:2,ma:"ph"},{na:3,ma:"ke"})}
Ge.prototype.record=function(a,b,c){this.h.record("/client_streamz/bg/fcd",a,b,c)};
function He(a){this.h=a;this.h.Rb("/client_streamz/bg/fsc",{na:3,ma:"rk"},{na:3,ma:"ke"})}
function Ie(a){this.h=a;this.h.sc("/client_streamz/bg/fsl",{na:3,ma:"rk"},{na:3,ma:"ke"})}
Ie.prototype.record=function(a,b,c){this.h.record("/client_streamz/bg/fsl",a,b,c)};var Je={toString:function(a){var b=[],c=0;a-=-2147483648;b[c++]="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ".charAt(a%52);for(a=Math.floor(a/52);0<a;)b[c++]="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789".charAt(a%62),a=Math.floor(a/62);return b.join("")}};function Ke(a){function b(){c-=d;c-=e;c^=e>>>13;d-=e;d-=c;d^=c<<8;e-=c;e-=d;e^=d>>>13;c-=d;c-=e;c^=e>>>12;d-=e;d-=c;d^=c<<16;e-=c;e-=d;e^=d>>>5;c-=d;c-=e;c^=e>>>3;d-=e;d-=c;d^=c<<10;e-=c;e-=d;e^=d>>>15}
a=Le(a);for(var c=2654435769,d=2654435769,e=314159265,f=a.length,g=f,h=0;12<=g;g-=12,h+=12)c+=Me(a,h),d+=Me(a,h+4),e+=Me(a,h+8),b();e+=f;switch(g){case 11:e+=a[h+10]<<24;case 10:e+=a[h+9]<<16;case 9:e+=a[h+8]<<8;case 8:d+=a[h+7]<<24;case 7:d+=a[h+6]<<16;case 6:d+=a[h+5]<<8;case 5:d+=a[h+4];case 4:c+=a[h+3]<<24;case 3:c+=a[h+2]<<16;case 2:c+=a[h+1]<<8;case 1:c+=a[h+0]}b();return Je.toString(e)}
function Le(a){for(var b=[],c=0;c<a.length;c++)b.push(a.charCodeAt(c));return b}
function Me(a,b){return a[b+0]+(a[b+1]<<8)+(a[b+2]<<16)+(a[b+3]<<24)}
;Rb();var Ne=Vc()||F("iPod"),Oe=F("iPad");!F("Android")||Sb()||Rb()||Pb()||F("Silk");Sb();var Pe=F("Safari")&&!(Sb()||(Ob()?0:F("Coast"))||Pb()||(Ob()?0:F("Edge"))||(Ob()?Nb("Microsoft Edge"):F("Edg/"))||(Ob()?Nb("Opera"):F("OPR"))||Rb()||F("Silk")||F("Android"))&&!(Vc()||F("iPad")||F("iPod"));var Qe={},Re=null;function Se(a,b){Qa(a);void 0===b&&(b=0);Te();b=Qe[b];for(var c=Array(Math.floor(a.length/3)),d=b[64]||"",e=0,f=0;e<a.length-2;e+=3){var g=a[e],h=a[e+1],k=a[e+2],l=b[g>>2];g=b[(g&3)<<4|h>>4];h=b[(h&15)<<2|k>>6];k=b[k&63];c[f++]=""+l+g+h+k}l=0;k=d;switch(a.length-e){case 2:l=a[e+1],k=b[(l&15)<<2]||d;case 1:a=a[e],c[f]=""+b[a>>2]+b[(a&3)<<4|l>>4]+k+d}return c.join("")}
function Ue(a){var b=a.length,c=3*b/4;c%3?c=Math.floor(c):-1!="=.".indexOf(a[b-1])&&(c=-1!="=.".indexOf(a[b-2])?c-2:c-1);var d=new Uint8Array(c),e=0;Ve(a,function(f){d[e++]=f});
return e!==c?d.subarray(0,e):d}
function Ve(a,b){function c(k){for(;d<a.length;){var l=a.charAt(d++),n=Re[l];if(null!=n)return n;if(!/^[\s\xa0]*$/.test(l))throw Error("Unknown base64 encoding at char: "+l);}return k}
Te();for(var d=0;;){var e=c(-1),f=c(0),g=c(64),h=c(64);if(64===h&&-1===e)break;b(e<<2|f>>4);64!=g&&(b(f<<4&240|g>>2),64!=h&&b(g<<6&192|h))}}
function Te(){if(!Re){Re={};for(var a="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789".split(""),b=["+/=","+/","-_=","-_.","-_"],c=0;5>c;c++){var d=a.concat(b[c].split(""));Qe[c]=d;for(var e=0;e<d.length;e++){var f=d[e];void 0===Re[f]&&(Re[f]=e)}}}}
;var We="undefined"!==typeof Uint8Array,Xe=!Yc&&"function"===typeof btoa;function Ye(a){if(!Xe)return Se(a);for(var b="",c=0,d=a.length-10240;c<d;)b+=String.fromCharCode.apply(null,a.subarray(c,c+=10240));b+=String.fromCharCode.apply(null,c?a.subarray(c):a);return btoa(b)}
var Ze=/[-_.]/g,$e={"-":"+",_:"/",".":"="};function af(a){return $e[a]||""}
function bf(a){return We&&null!=a&&a instanceof Uint8Array}
var cf={};var df;function ef(a){if(a!==cf)throw Error("illegal external caller");}
function ff(a,b){ef(b);this.h=a;if(null!=a&&0===a.length)throw Error("ByteString should be constructed with non-empty values");}
ff.prototype.sizeBytes=function(){ef(cf);var a=this.h;if(null!=a&&!bf(a))if("string"===typeof a)if(Xe){Ze.test(a)&&(a=a.replace(Ze,af));a=atob(a);for(var b=new Uint8Array(a.length),c=0;c<a.length;c++)b[c]=a.charCodeAt(c);a=b}else a=Ue(a);else Pa(a),a=null;return(a=null==a?a:this.h=a)?a.length:0};function gf(){return"function"===typeof BigInt}
;function hf(a){return Array.prototype.slice.call(a)}
;var jf;jf="function"===typeof Symbol&&"symbol"===typeof Symbol()?Symbol():void 0;Math.max.apply(Math,ma(Object.values({Mf:1,Kf:2,Jf:4,Pf:8,Of:16,Nf:32,Af:64,Rf:128,If:256,Hf:512,Lf:1024,Ff:2048,Qf:4096,Gf:8192})));var kf=jf?function(a,b){a[jf]|=b}:function(a,b){void 0!==a.Sa?a.Sa|=b:Object.defineProperties(a,{Sa:{value:b,
configurable:!0,writable:!0,enumerable:!1}})};
function lf(a,b,c){return c?a|b:a&~b}
var mf=jf?function(a){return a[jf]|0}:function(a){return a.Sa|0},nf=jf?function(a){return a[jf]}:function(a){return a.Sa},of=jf?function(a,b){a[jf]=b;
return a}:function(a,b){void 0!==a.Sa?a.Sa=b:Object.defineProperties(a,{Sa:{value:b,
configurable:!0,writable:!0,enumerable:!1}});return a};
function pf(a,b){of(b,(a|0)&-14591)}
function qf(a,b){of(b,(a|34)&-14557)}
function rf(a){a=a>>14&1023;return 0===a?536870912:a}
;var sf={},tf={};function uf(a){return!(!a||"object"!==typeof a||a.h!==tf)}
function vf(a){return null!==a&&"object"===typeof a&&!Array.isArray(a)&&a.constructor===Object}
var wf;function xf(a,b,c){if(!Array.isArray(a)||a.length)return!1;var d=mf(a);if(d&1)return!0;if(!(b&&(Array.isArray(b)?b.includes(c):b.has(c))))return!1;of(a,d|1);return!0}
var yf,zf=[];of(zf,55);yf=Object.freeze(zf);function Af(a){if(a&2)throw Error();}
Object.freeze(new function(){});
Object.freeze(new function(){});var Bf=0,Cf=0;function Df(a){var b=0>a;a=Math.abs(a);var c=a>>>0;a=Math.floor((a-c)/4294967296);b&&(c=v(Ef(c,a)),b=c.next().value,a=c.next().value,c=b);Bf=c>>>0;Cf=a>>>0}
function Ff(a,b){b>>>=0;a>>>=0;if(2097151>=b)var c=""+(4294967296*b+a);else gf()?c=""+(BigInt(b)<<BigInt(32)|BigInt(a)):(c=(a>>>24|b<<8)&16777215,b=b>>16&65535,a=(a&16777215)+6777216*c+6710656*b,c+=8147497*b,b*=2,1E7<=a&&(c+=Math.floor(a/1E7),a%=1E7),1E7<=c&&(b+=Math.floor(c/1E7),c%=1E7),c=b+Gf(c)+Gf(a));return c}
function Gf(a){a=String(a);return"0000000".slice(a.length)+a}
function Hf(){var a=Bf,b=Cf;b&2147483648?gf()?a=""+(BigInt(b|0)<<BigInt(32)|BigInt(a>>>0)):(b=v(Ef(a,b)),a=b.next().value,b=b.next().value,a="-"+Ff(a,b)):a=Ff(a,b);return a}
function Ef(a,b){b=~b;a?a=~a+1:b+=1;return[a,b]}
;function If(a){a=Error(a);a.__closure__error__context__984382||(a.__closure__error__context__984382={});a.__closure__error__context__984382.severity="warning";return a}
;function Jf(a){return a.displayName||a.name||"unknown type name"}
function Kf(a){if(null!=a&&"boolean"!==typeof a)throw Error("Expected boolean but got "+Pa(a)+": "+a);return a}
var Lf=/^-?([1-9][0-9]*|0)(\.[0-9]+)?$/;function Mf(a){var b=typeof a;return"number"===b?Number.isFinite(a):"string"!==b?!1:Lf.test(a)}
function Nf(a){if(null!=a){if("number"!==typeof a)throw If("int32");if(!Number.isFinite(a))throw If("int32");a|=0}return a}
function Of(a){if(null==a)return a;if("string"===typeof a){if(!a)return;a=+a}if("number"===typeof a)return Number.isFinite(a)?a|0:void 0}
function Pf(a){if(null!=a){var b=!!b;if(!Mf(a))throw If("int64");a="string"===typeof a?Qf(a):b?Rf(a):Sf(a)}return a}
function Tf(a){return"-"===a[0]?20>a.length?!0:20===a.length&&-922337<Number(a.substring(0,7)):19>a.length?!0:19===a.length&&922337>Number(a.substring(0,6))}
function Sf(a){Mf(a);a=Math.trunc(a);if(!Number.isSafeInteger(a)){Df(a);var b=Bf,c=Cf;if(a=c&2147483648)b=~b+1>>>0,c=~c>>>0,0==b&&(c=c+1>>>0);b=4294967296*c+(b>>>0);a=a?-b:b}return a}
function Rf(a){Mf(a);a=Math.trunc(a);if(Number.isSafeInteger(a))a=String(a);else{var b=String(a);Tf(b)?a=b:(Df(a),a=Hf())}return a}
function Qf(a){Mf(a);var b=Math.trunc(Number(a));if(Number.isSafeInteger(b))return String(b);b=a.indexOf(".");-1!==b&&(a=a.substring(0,b));a.indexOf(".");if(!Tf(a)){if(16>a.length)Df(Number(a));else if(gf())a=BigInt(a),Bf=Number(a&BigInt(4294967295))>>>0,Cf=Number(a>>BigInt(32)&BigInt(4294967295));else{b=+("-"===a[0]);Cf=Bf=0;for(var c=a.length,d=0+b,e=(c-b)%6+b;e<=c;d=e,e+=6)d=Number(a.slice(d,e)),Cf*=1E6,Bf=1E6*Bf+d,4294967296<=Bf&&(Cf+=Math.trunc(Bf/4294967296),Cf>>>=0,Bf>>>=0);b&&(b=v(Ef(Bf,Cf)),
a=b.next().value,b=b.next().value,Bf=a,Cf=b)}a=Hf()}return a}
function Uf(a){if(null!=a&&"string"!==typeof a)throw Error();return a}
function Vf(a,b){if(!(a instanceof b))throw Error("Expected instanceof "+Jf(b)+" but got "+(a&&Jf(a.constructor)));}
function Wf(a,b,c){if(null!=a&&"object"===typeof a&&a.Jc===sf)return a;if(Array.isArray(a)){var d=mf(a),e=d;0===e&&(e|=c&32);e|=c&2;e!==d&&of(a,e);return new b(a)}}
;var Xf;function Yf(a,b){mf(b);Xf=b;a=new a(b);Xf=void 0;return a}
function I(a,b,c){null==a&&(a=Xf);Xf=void 0;if(null==a){var d=96;c?(a=[c],d|=512):a=[];b&&(d=d&-16760833|(b&1023)<<14)}else{if(!Array.isArray(a))throw Error();d=mf(a);if(d&2048)throw Error();if(d&64)return a;d|=64;if(c&&(d|=512,c!==a[0]))throw Error();a:{c=a;var e=c.length;if(e){var f=e-1;if(vf(c[f])){d|=256;b=f-(+!!(d&512)-1);if(1024<=b)throw Error();d=d&-16760833|(b&1023)<<14;break a}}if(b){b=Math.max(b,e-(+!!(d&512)-1));if(1024<b)throw Error();d=d&-16760833|(b&1023)<<14}}}of(a,d);return a}
;function Zf(a,b){return $f(b)}
function $f(a){switch(typeof a){case "number":return isFinite(a)?a:String(a);case "boolean":return a?1:0;case "object":if(a)if(Array.isArray(a)){if(xf(a,void 0,0))return}else{if(bf(a))return Ye(a);if(a instanceof ff){var b=a.h;return null==b?"":"string"===typeof b?b:a.h=Ye(b)}}}return a}
;function ag(a,b,c){a=hf(a);var d=a.length,e=b&256?a[d-1]:void 0;d+=e?-1:0;for(b=b&512?1:0;b<d;b++)a[b]=c(a[b]);if(e){b=a[b]={};for(var f in e)b[f]=c(e[f])}return a}
function bg(a,b,c,d,e){if(null!=a){if(Array.isArray(a))a=xf(a,void 0,0)?void 0:e&&mf(a)&2?a:cg(a,b,c,void 0!==d,e);else if(vf(a)){var f={},g;for(g in a)f[g]=bg(a[g],b,c,d,e);a=f}else a=b(a,d);return a}}
function cg(a,b,c,d,e){var f=d||c?mf(a):0;d=d?!!(f&32):void 0;a=hf(a);for(var g=0;g<a.length;g++)a[g]=bg(a[g],b,c,d,e);c&&c(f,a);return a}
function dg(a){return a.Jc===sf?a.toJSON():$f(a)}
;function eg(a,b,c){c=void 0===c?qf:c;if(null!=a){if(We&&a instanceof Uint8Array)return b?a:new Uint8Array(a);if(Array.isArray(a)){var d=mf(a);if(d&2)return a;b&&(b=0===d||!!(d&32)&&!(d&64||!(d&16)));return b?of(a,(d|34)&-12293):cg(a,eg,d&4?qf:c,!0,!0)}a.Jc===sf&&(c=a.F,d=nf(c),a=d&2?a:Yf(a.constructor,fg(c,d,!0)));return a}}
function fg(a,b,c){var d=c||b&2?qf:pf,e=!!(b&32);a=ag(a,b,function(f){return eg(f,e,d)});
kf(a,32|(c?2:0));return a}
function gg(a){var b=a.F,c=nf(b);return c&2?Yf(a.constructor,fg(b,c,!1)):a}
;function hg(a,b){a=a.F;return ig(a,nf(a),b)}
function ig(a,b,c,d){if(-1===c)return null;if(c>=rf(b)){if(b&256)return a[a.length-1][c]}else{var e=a.length;if(d&&b&256&&(d=a[e-1][c],null!=d))return d;b=c+(+!!(b&512)-1);if(b<e)return a[b]}}
function jg(a,b,c){var d=a.F,e=nf(d);Af(e);kg(d,e,b,c);return a}
function kg(a,b,c,d,e){vf(d);var f=rf(b);if(c>=f||e){var g=b;if(b&256)e=a[a.length-1];else{if(null==d)return g;e=a[f+(+!!(b&512)-1)]={};g|=256}e[c]=d;c<f&&(a[c+(+!!(b&512)-1)]=void 0);g!==b&&of(a,g);return g}a[c+(+!!(b&512)-1)]=d;b&256&&(a=a[a.length-1],c in a&&delete a[c]);return b}
function lg(a){return void 0!==mg(a,ng,11,!1)}
function og(a){return!!(2&a)&&!!(4&a)||!!(2048&a)}
function pg(a,b,c,d){a=a.F;var e=nf(a);Af(e);for(var f=e,g=0,h=0;h<c.length;h++){var k=c[h];null!=ig(a,f,k)&&(0!==g&&(f=kg(a,f,g)),g=k)}(c=g)&&c!==b&&null!=d&&(e=kg(a,e,c));kg(a,e,b,d)}
function mg(a,b,c,d){a=a.F;var e=nf(a),f=ig(a,e,c,d);b=Wf(f,b,e);b!==f&&null!=b&&kg(a,e,c,b,d);return b}
function qg(a,b,c,d){d=void 0===d?!1:d;b=mg(a,b,c,d);if(null==b)return b;a=a.F;var e=nf(a);if(!(e&2)){var f=gg(b);f!==b&&(b=f,kg(a,e,c,b,d))}return b}
function rg(a,b,c,d){null!=d?Vf(d,b):d=void 0;return jg(a,c,d)}
function sg(a,b,c,d){var e=a.F,f=nf(e);Af(f);if(null==d)return kg(e,f,c),a;if(!Array.isArray(d))throw If();for(var g=mf(d),h=g,k=!!(2&g)||!!(2048&g),l=k||Object.isFrozen(d),n=!l&&!1,p=!0,r=!0,t=0;t<d.length;t++){var x=d[t];Vf(x,b);k||(x=!!(mf(x.F)&2),p&&(p=!x),r&&(r=x))}k||(g=lf(g,5,!0),g=lf(g,8,p),g=lf(g,16,r));if(n||l&&g!==h)d=hf(d),h=0,g=tg(g,f,!0);g!==h&&of(d,g);kg(e,f,c,d);return a}
function tg(a,b,c){a=lf(a,2,!!(2&b));a=lf(a,32,!!(32&b)&&c);return a=lf(a,2048,!1)}
function ug(a,b){a=hg(a,b);var c;null==a?c=a:Mf(a)?"number"===typeof a?c=Sf(a):c=Qf(a):c=void 0;return c}
function vg(a){a=hg(a,1);var b=void 0===b?!1:b;b=null==a?a:Mf(a)?"string"===typeof a?Qf(a):b?Rf(a):Sf(a):void 0;return b}
function wg(a){a=hg(a,1);return null==a?a:Number.isFinite(a)?a|0:void 0}
function xg(a,b,c){return jg(a,b,Uf(c))}
function yg(a,b,c){if(null!=c){if(!Number.isFinite(c))throw If("enum");c|=0}return jg(a,b,c)}
;function K(a,b,c){this.F=I(a,b,c)}
m=K.prototype;m.toJSON=function(){if(wf)var a=zg(this,this.F,!1);else a=cg(this.F,dg,void 0,void 0,!1),a=zg(this,a,!0);return a};
m.serialize=function(){wf=!0;try{return JSON.stringify(this.toJSON(),Zf)}finally{wf=!1}};
function Ag(a,b){if(null==b||""==b)return new a;b=JSON.parse(b);if(!Array.isArray(b))throw Error(void 0);kf(b,32);return Yf(a,b)}
m.clone=function(){var a=this.F,b=nf(a);return Yf(this.constructor,fg(a,b,!1))};
m.Jc=sf;m.toString=function(){return zg(this,this.F,!1).toString()};
function zg(a,b,c){var d=Jb?void 0:a.constructor.Ua;var e=nf(c?a.F:b);a=b.length;if(!a)return b;var f;if(vf(c=b[a-1])){a:{var g=c;var h={},k=!1,l;for(l in g){var n=g[l];if(Array.isArray(n)){var p=n;if(xf(n,d,+l)||uf(n)&&0===n.size)n=null;n!=p&&(k=!0)}null!=n?h[l]=n:k=!0}if(k){for(var r in h){g=h;break a}g=null}}g!=c&&(f=!0);a--}for(l=+!!(e&512)-1;0<a;a--){r=a-1;c=b[r];r-=l;if(!(null==c||xf(c,d,r)||uf(c)&&0===c.size))break;var t=!0}if(!f&&!t)return b;b=Array.prototype.slice.call(b,0,a);g&&b.push(g);
return b}
;function Bg(a){this.F=I(a)}
w(Bg,K);var Cg=[1,2,3];function Dg(a){this.F=I(a)}
w(Dg,K);var Eg=[1,2,3];function Fg(a){this.F=I(a)}
w(Fg,K);Fg.Ua=[1];function Gg(a){this.F=I(a)}
w(Gg,K);Gg.Ua=[3,6,4];function Hg(a){this.F=I(a)}
w(Hg,K);Hg.Ua=[1];function Ig(a){if(!a)return"";if(/^about:(?:blank|srcdoc)$/.test(a))return window.origin||"";0===a.indexOf("blob:")&&(a=a.substring(5));a=a.split("#")[0].split("?")[0];a=a.toLowerCase();0==a.indexOf("//")&&(a=window.location.protocol+a);/^[\w\-]*:\/\//.test(a)||(a=window.location.href);var b=a.substring(a.indexOf("://")+3),c=b.indexOf("/");-1!=c&&(b=b.substring(0,c));c=a.substring(0,a.indexOf("://"));if(!c)throw Error("URI is missing protocol: "+a);if("http"!==c&&"https"!==c&&"chrome-extension"!==
c&&"moz-extension"!==c&&"file"!==c&&"android-app"!==c&&"chrome-search"!==c&&"chrome-untrusted"!==c&&"chrome"!==c&&"app"!==c&&"devtools"!==c)throw Error("Invalid URI scheme in origin: "+c);a="";var d=b.indexOf(":");if(-1!=d){var e=b.substring(d+1);b=b.substring(0,d);if("http"===c&&"80"!==e||"https"===c&&"443"!==e)a=":"+e}return c+"://"+b+a}
;function Jg(){function a(){e[0]=1732584193;e[1]=4023233417;e[2]=2562383102;e[3]=271733878;e[4]=3285377520;n=l=0}
function b(p){for(var r=g,t=0;64>t;t+=4)r[t/4]=p[t]<<24|p[t+1]<<16|p[t+2]<<8|p[t+3];for(t=16;80>t;t++)p=r[t-3]^r[t-8]^r[t-14]^r[t-16],r[t]=(p<<1|p>>>31)&4294967295;p=e[0];var x=e[1],z=e[2],y=e[3],J=e[4];for(t=0;80>t;t++){if(40>t)if(20>t){var G=y^x&(z^y);var R=1518500249}else G=x^z^y,R=1859775393;else 60>t?(G=x&z|y&(x|z),R=2400959708):(G=x^z^y,R=3395469782);G=((p<<5|p>>>27)&4294967295)+G+J+R+r[t]&4294967295;J=y;y=z;z=(x<<30|x>>>2)&4294967295;x=p;p=G}e[0]=e[0]+p&4294967295;e[1]=e[1]+x&4294967295;e[2]=
e[2]+z&4294967295;e[3]=e[3]+y&4294967295;e[4]=e[4]+J&4294967295}
function c(p,r){if("string"===typeof p){p=unescape(encodeURIComponent(p));for(var t=[],x=0,z=p.length;x<z;++x)t.push(p.charCodeAt(x));p=t}r||(r=p.length);t=0;if(0==l)for(;t+64<r;)b(p.slice(t,t+64)),t+=64,n+=64;for(;t<r;)if(f[l++]=p[t++],n++,64==l)for(l=0,b(f);t+64<r;)b(p.slice(t,t+64)),t+=64,n+=64}
function d(){var p=[],r=8*n;56>l?c(h,56-l):c(h,64-(l-56));for(var t=63;56<=t;t--)f[t]=r&255,r>>>=8;b(f);for(t=r=0;5>t;t++)for(var x=24;0<=x;x-=8)p[r++]=e[t]>>x&255;return p}
for(var e=[],f=[],g=[],h=[128],k=1;64>k;++k)h[k]=0;var l,n;a();return{reset:a,update:c,digest:d,Vd:function(){for(var p=d(),r="",t=0;t<p.length;t++)r+="0123456789ABCDEF".charAt(Math.floor(p[t]/16))+"0123456789ABCDEF".charAt(p[t]%16);return r}}}
;function Kg(a,b,c){var d=String(C.location.href);return d&&a&&b?[b,Lg(Ig(d),a,c||null)].join(" "):null}
function Lg(a,b,c){var d=[],e=[];if(1==(Array.isArray(c)?2:1))return e=[b,a],fb(d,function(h){e.push(h)}),Mg(e.join(" "));
var f=[],g=[];fb(c,function(h){g.push(h.key);f.push(h.value)});
c=Math.floor((new Date).getTime()/1E3);e=0==f.length?[c,b,a]:[f.join(":"),c,b,a];fb(d,function(h){e.push(h)});
a=Mg(e.join(" "));a=[c,a];0==g.length||a.push(g.join(""));return a.join("_")}
function Mg(a){var b=Jg();b.update(a);return b.Vd().toLowerCase()}
;var Ng={};function Og(a){this.h=a||{cookie:""}}
m=Og.prototype;m.isEnabled=function(){if(!C.navigator.cookieEnabled)return!1;if(this.h.cookie)return!0;this.set("TESTCOOKIESENABLED","1",{Kb:60});if("1"!==this.get("TESTCOOKIESENABLED"))return!1;this.remove("TESTCOOKIESENABLED");return!0};
m.set=function(a,b,c){var d=!1;if("object"===typeof c){var e=c.Pe;d=c.secure||!1;var f=c.domain||void 0;var g=c.path||void 0;var h=c.Kb}if(/[;=\s]/.test(a))throw Error('Invalid cookie name "'+a+'"');if(/[;\r\n]/.test(b))throw Error('Invalid cookie value "'+b+'"');void 0===h&&(h=-1);c=f?";domain="+f:"";g=g?";path="+g:"";d=d?";secure":"";h=0>h?"":0==h?";expires="+(new Date(1970,1,1)).toUTCString():";expires="+(new Date(Date.now()+1E3*h)).toUTCString();this.h.cookie=a+"="+b+c+g+h+d+(null!=e?";samesite="+
e:"")};
m.get=function(a,b){for(var c=a+"=",d=(this.h.cookie||"").split(";"),e=0,f;e<d.length;e++){f=db(d[e]);if(0==f.lastIndexOf(c,0))return f.slice(c.length);if(f==a)return""}return b};
m.remove=function(a,b,c){var d=void 0!==this.get(a);this.set(a,"",{Kb:0,path:b,domain:c});return d};
m.Ac=function(){return Pg(this).keys};
m.clear=function(){for(var a=Pg(this).keys,b=a.length-1;0<=b;b--)this.remove(a[b])};
function Pg(a){a=(a.h.cookie||"").split(";");for(var b=[],c=[],d,e,f=0;f<a.length;f++)e=db(a[f]),d=e.indexOf("="),-1==d?(b.push(""),c.push(e)):(b.push(e.substring(0,d)),c.push(e.substring(d+1)));return{keys:b,values:c}}
var Qg=new Og("undefined"==typeof document?null:document);function Tg(a){return!!Ng.FPA_SAMESITE_PHASE2_MOD||!(void 0===a||!a)}
function Ug(a){a=void 0===a?!1:a;var b=C.__SAPISID||C.__APISID||C.__3PSAPISID||C.__OVERRIDE_SID;Tg(a)&&(b=b||C.__1PSAPISID);if(b)return!0;if("undefined"!==typeof document){var c=new Og(document);b=c.get("SAPISID")||c.get("APISID")||c.get("__Secure-3PAPISID")||c.get("SID")||c.get("OSID");Tg(a)&&(b=b||c.get("__Secure-1PAPISID"))}return!!b}
function Vg(a,b,c,d){(a=C[a])||"undefined"===typeof document||(a=(new Og(document)).get(b));return a?Kg(a,c,d):null}
function Wg(a,b){b=void 0===b?!1:b;var c=Ig(String(C.location.href)),d=[];if(Ug(b)){c=0==c.indexOf("https:")||0==c.indexOf("chrome-extension:")||0==c.indexOf("moz-extension:");var e=c?C.__SAPISID:C.__APISID;e||"undefined"===typeof document||(e=new Og(document),e=e.get(c?"SAPISID":"APISID")||e.get("__Secure-3PAPISID"));(e=e?Kg(e,c?"SAPISIDHASH":"APISIDHASH",a):null)&&d.push(e);c&&Tg(b)&&((b=Vg("__1PSAPISID","__Secure-1PAPISID","SAPISID1PHASH",a))&&d.push(b),(a=Vg("__3PSAPISID","__Secure-3PAPISID",
"SAPISID3PHASH",a))&&d.push(a))}return 0==d.length?null:d.join(" ")}
;function Xg(a){this.F=I(a)}
w(Xg,K);Xg.Ua=[2];function Yg(a){Id.call(this);this.intervalMs=a;this.enabled=!1;this.i=function(){return Za()};
this.j=this.i()}
w(Yg,Id);Yg.prototype.setInterval=function(a){this.intervalMs=a;this.timer&&this.enabled?(this.stop(),this.start()):this.timer&&this.stop()};
Yg.prototype.start=function(){var a=this;this.enabled=!0;this.timer||(this.timer=setTimeout(function(){a.tick()},this.intervalMs),this.j=this.i())};
Yg.prototype.stop=function(){this.enabled=!1;this.timer&&(clearTimeout(this.timer),this.timer=void 0)};
Yg.prototype.tick=function(){var a=this;if(this.enabled){var b=Math.max(this.i()-this.j,0);b<.8*this.intervalMs?this.timer=setTimeout(function(){a.tick()},this.intervalMs-b):(this.timer&&(clearTimeout(this.timer),this.timer=void 0),Jd(this,"tick"),this.enabled&&(this.stop(),this.start()))}else this.timer=void 0};function Zg(a){this.F=I(a)}
w(Zg,K);function $g(a){this.F=I(a)}
w($g,K);function ah(a){this.h=this.i=this.j=a}
ah.prototype.reset=function(){this.h=this.i=this.j};
ah.prototype.getValue=function(){return this.i};function bh(a){this.F=I(a)}
w(bh,K);bh.prototype.Bc=function(){return wg(this)};function ch(a){this.F=I(a)}
w(ch,K);function dh(a){this.F=I(a)}
w(dh,K);function eh(a,b){sg(a,ch,1,b)}
dh.Ua=[1];function ng(a){this.F=I(a)}
w(ng,K);var fh=["platform","platformVersion","architecture","model","uaFullVersion"],gh=new dh,hh=null;function ih(a,b){b=void 0===b?fh:b;if(!hh){var c;a=null==(c=a.navigator)?void 0:c.userAgentData;if(!a||"function"!==typeof a.getHighEntropyValues||a.brands&&"function"!==typeof a.brands.map)return Promise.reject(Error("UACH unavailable"));c=(a.brands||[]).map(function(e){var f=new ch;f=xg(f,1,e.brand);return xg(f,2,e.version)});
eh(jg(gh,2,Kf(a.mobile)),c);hh=a.getHighEntropyValues(b)}var d=new Set(b);return hh.then(function(e){var f=gh.clone();d.has("platform")&&xg(f,3,e.platform);d.has("platformVersion")&&xg(f,4,e.platformVersion);d.has("architecture")&&xg(f,5,e.architecture);d.has("model")&&xg(f,6,e.model);d.has("uaFullVersion")&&xg(f,7,e.uaFullVersion);return f}).catch(function(){return gh.clone()})}
;function jh(a){this.F=I(a)}
w(jh,K);function kh(a){this.F=I(a,4)}
w(kh,K);function lh(a){this.F=I(a,35)}
w(lh,K);lh.Ua=[3,20,27];function mh(a){this.F=I(a,19)}
w(mh,K);mh.prototype.Nb=function(a){return yg(this,2,a)};
mh.Ua=[3,5];function nh(a){this.F=I(a,7)}
w(nh,K);var oh=function(a){return function(b){return Ag(a,b)}}(nh);
nh.Ua=[5,6];function ph(a){this.F=I(a)}
w(ph,K);var qh=new function(a,b){this.h=a;this.ctor=b;this.isRepeated=0;this.i=qg;this.defaultValue=void 0}(175237375,ph);function rh(a){H.call(this);var b=this;this.componentId="";this.j=[];this.ba="";this.pageId=null;this.ea=this.Y=-1;this.experimentIds=null;this.V=this.m=0;this.ga=1;this.timeoutMillis=0;this.logSource=a.logSource;this.Gb=a.Gb||function(){};
this.i=new sh(a.logSource,a.eb);this.network=a.network;this.yb=a.yb||null;this.bufferSize=1E3;this.A=a.lf||null;this.sessionIndex=a.sessionIndex||null;this.Eb=a.Eb||!1;this.logger=null;this.withCredentials=!a.ed;this.eb=a.eb||!1;this.S="undefined"!==typeof URLSearchParams&&!!(new URL(th())).searchParams&&!!(new URL(th())).searchParams.set;var c=yg(new jh,1,1);uh(this.i,c);this.l=new ah(1E4);this.h=new Yg(this.l.getValue());a=vh(this,a.Xc);xd(this.h,"tick",a,!1,this);this.D=new Yg(6E5);xd(this.D,"tick",
a,!1,this);this.Eb||this.D.start();this.eb||(xd(document,"visibilitychange",function(){"hidden"===document.visibilityState&&b.vc()}),xd(document,"pagehide",this.vc,!1,this))}
w(rh,H);function vh(a,b){return a.S?b?function(){b().then(function(){a.flush()})}:function(){a.flush()}:function(){}}
m=rh.prototype;m.R=function(){this.vc();this.h.stop();this.D.stop();H.prototype.R.call(this)};
m.log=function(a){if(this.S){a=a.clone();var b=this.ga++;a=jg(a,21,Pf(b));this.componentId&&xg(a,26,this.componentId);if(!vg(a)){var c=Date.now();b=a;c=Number.isFinite(c)?c.toString():"0";jg(b,1,Pf(c))}null==ug(a,15)&&jg(a,15,Pf(60*(new Date).getTimezoneOffset()));this.experimentIds&&(b=a,c=this.experimentIds.clone(),rg(b,Xg,16,c));b=this.j.length-this.bufferSize+1;0<b&&(this.j.splice(0,b),this.m+=b);this.j.push(a);this.Eb||this.h.enabled||this.h.start()}};
m.flush=function(a,b){var c=this;if(0===this.j.length)a&&a();else{var d=Date.now();if(this.ea>d&&this.Y<d)b&&b("throttled");else{this.network&&("function"===typeof this.network.Bc?wh(this.i,this.network.Bc()):wh(this.i,0));var e=xh(this.i,this.j,this.m,this.V,this.yb);d={};var f=this.Gb();f&&(d.Authorization=f);this.A||(this.A=th());try{var g=(new URL(this.A)).toString()}catch(k){g=(new URL(this.A,window.location.origin)).toString()}g=new URL(g);this.sessionIndex&&(d["X-Goog-AuthUser"]=this.sessionIndex,
g.searchParams.set("authuser",this.sessionIndex));this.pageId&&(Object.defineProperty(d,"X-Goog-PageId",{value:this.pageId}),g.searchParams.set("pageId",this.pageId));if(f&&this.ba===f)b&&b("stale-auth-token");else{this.j=[];this.h.enabled&&this.h.stop();this.m=0;var h=e.serialize();d={url:g.toString(),body:h,Uf:1,Ke:d,requestType:"POST",withCredentials:this.withCredentials,timeoutMillis:this.timeoutMillis};g=function(k){c.l.reset();c.h.setInterval(c.l.getValue());if(k){var l=null;try{var n=JSON.stringify(JSON.parse(k.replace(")]}'\n",
"")));l=oh(n)}catch(r){}if(l){k=Number;n="-1";n=void 0===n?"0":n;var p=vg(l);k=k(null!=p?p:n);0<k&&(c.Y=Date.now(),c.ea=c.Y+k);l=qh.ctor?qh.i(l,qh.ctor,qh.h,!0):qh.i(l,qh.h,null,!0);if(k=null===l?void 0:l)l=-1,l=void 0===l?0:l,k=Of(hg(k,1)),l=null!=k?k:l,-1!==l&&(c.l=new ah(1>l?1:l),c.h.setInterval(c.l.getValue()))}}a&&a();c.V=0};
h=function(k,l){var n=e.F;var p=nf(n),r=p,t=!(2&p),x=!!(2&r),z=x?1:2;p=1===z;z=2===z;t&&(t=!x);x=ig(n,r,3);x=Array.isArray(x)?x:yf;var y=mf(x),J=!!(4&y);if(!J){var G=y;0===G&&(G=tg(G,r,!1));G=lf(G,1,!0);y=x;var R=r,N=!!(2&G);N&&(R=lf(R,2,!0));for(var da=!N,Ca=!0,O=0,ea=0;O<y.length;O++){var ka=Wf(y[O],lh,R);if(ka instanceof lh){if(!N){var pa=!!(mf(ka.F)&2);da&&(da=!pa);Ca&&(Ca=pa)}y[ea++]=ka}}ea<O&&(y.length=ea);G=lf(G,4,!0);G=lf(G,16,Ca);G=lf(G,8,da);of(y,G);N&&Object.freeze(y);y=G}G=!!(8&y)||p&&
!x.length;if(t&&!G){og(y)&&(x=hf(x),y=tg(y,r,!1),r=kg(n,r,3,x));t=x;for(G=0;G<t.length;G++)R=t[G],N=gg(R),R!==N&&(t[G]=N);y=lf(y,8,!0);y=lf(y,16,!t.length);of(t,y)}og(y)||(t=y,p?y=lf(y,!x.length||16&y&&(!J||32&y)?2:2048,!0):y=lf(y,32,!1),y!==t&&of(x,y),p&&Object.freeze(x));z&&og(y)&&(x=hf(x),y=tg(y,r,!1),of(x,y),kg(n,r,3,x));n=x;r=ug(e,14);p=c.l;p.h=Math.min(3E5,2*p.h);p.i=Math.min(3E5,p.h+Math.round(.2*(Math.random()-.5)*p.h));c.h.setInterval(c.l.getValue());401===k&&f&&(c.ba=f);r&&(c.m+=r);void 0===
l&&(l=c.isRetryable(k));l&&(c.j=n.concat(c.j),c.Eb||c.h.enabled||c.h.start());b&&b("net-send-failed",k);++c.V};
c.network&&c.network.send(d,g,h)}}}};
m.vc=function(){yh(this.i,!0);this.flush();yh(this.i,!1)};
m.isRetryable=function(a){return 500<=a&&600>a||401===a||0===a};
function th(){return"https://play.google.com/log?format=json&hasfast=true"}
function sh(a,b){this.eb=b=void 0===b?!1:b;this.uach=this.locale=null;this.h=new mh;Number.isInteger(a)&&this.h.Nb(a);b||(this.locale=document.documentElement.getAttribute("lang"));uh(this,new jh)}
sh.prototype.Nb=function(a){this.h.Nb(a);return this};
function uh(a,b){rg(a.h,jh,1,b);wg(b)||yg(b,1,1);if(!a.eb){b=zh(a);var c=hg(b,5);(null==c||"string"===typeof c)&&c||xg(b,5,a.locale)}a.uach&&(b=zh(a),qg(b,dh,9)||rg(b,dh,9,a.uach))}
function wh(a,b){lg(Ah(a))&&(a=Bh(a),yg(a,1,b))}
function yh(a,b){lg(Ah(a))&&(a=Bh(a),jg(a,2,Kf(b)))}
function Ah(a){return qg(a.h,jh,1)}
function Ch(a){var b=void 0===b?fh:b;var c=a.eb?void 0:window;c?ih(c,b).then(function(d){a.uach=d;d=zh(a);rg(d,dh,9,a.uach);return!0}).catch(function(){return!1}):Promise.resolve(!1)}
function zh(a){a=Ah(a);var b=qg(a,ng,11);b||(b=new ng,rg(a,ng,11,b));return b}
function Bh(a){a=zh(a);var b=qg(a,bh,10);b||(b=new bh,jg(b,2,Kf(!1)),rg(a,bh,10,b));return b}
function xh(a,b,c,d,e){var f=0,g=0;c=void 0===c?0:c;f=void 0===f?0:f;g=void 0===g?0:g;d=void 0===d?0:d;if(lg(Ah(a))){var h=Bh(a);jg(h,3,Nf(d))}lg(Ah(a))&&(d=Bh(a),jg(d,4,Nf(f)));lg(Ah(a))&&(f=Bh(a),jg(f,5,Nf(g)));a=a.h.clone();g=Date.now().toString();a=jg(a,4,Pf(g));b=sg(a,lh,3,b);e&&(a=new Zg,e=jg(a,13,Nf(e)),a=new $g,e=rg(a,Zg,2,e),a=new kh,e=rg(a,$g,1,e),e=yg(e,2,9),rg(b,kh,18,e));c&&jg(b,14,Pf(c));return b}
;function Dh(){}
Dh.prototype.serialize=function(a){var b=[];Eh(this,a,b);return b.join("")};
function Eh(a,b,c){if(null==b)c.push("null");else{if("object"==typeof b){if(Array.isArray(b)){var d=b;b=d.length;c.push("[");for(var e="",f=0;f<b;f++)c.push(e),Eh(a,d[f],c),e=",";c.push("]");return}if(b instanceof String||b instanceof Number||b instanceof Boolean)b=b.valueOf();else{c.push("{");e="";for(d in b)Object.prototype.hasOwnProperty.call(b,d)&&(f=b[d],"function"!=typeof f&&(c.push(e),Fh(d,c),c.push(":"),Eh(a,f,c),e=","));c.push("}");return}}switch(typeof b){case "string":Fh(b,c);break;case "number":c.push(isFinite(b)&&
!isNaN(b)?String(b):"null");break;case "boolean":c.push(String(b));break;case "function":c.push("null");break;default:throw Error("Unknown type: "+typeof b);}}}
var Gh={'"':'\\"',"\\":"\\\\","/":"\\/","\b":"\\b","\f":"\\f","\n":"\\n","\r":"\\r","\t":"\\t","\v":"\\u000b"},Hh=/\uffff/.test("\uffff")?/[\\"\x00-\x1f\x7f-\uffff]/g:/[\\"\x00-\x1f\x7f-\xff]/g;function Fh(a,b){b.push('"',a.replace(Hh,function(c){var d=Gh[c];d||(d="\\u"+(c.charCodeAt(0)|65536).toString(16).slice(1),Gh[c]=d);return d}),'"')}
;function Ih(){}
Ih.prototype.h=null;Ih.prototype.getOptions=function(){var a;(a=this.h)||(a={},Jh(this)&&(a[0]=!0,a[1]=!0),a=this.h=a);return a};var Kh;function Lh(){}
$a(Lh,Ih);function Mh(a){return(a=Jh(a))?new ActiveXObject(a):new XMLHttpRequest}
function Jh(a){if(!a.i&&"undefined"==typeof XMLHttpRequest&&"undefined"!=typeof ActiveXObject){for(var b=["MSXML2.XMLHTTP.6.0","MSXML2.XMLHTTP.3.0","MSXML2.XMLHTTP","Microsoft.XMLHTTP"],c=0;c<b.length;c++){var d=b[c];try{return new ActiveXObject(d),a.i=d}catch(e){}}throw Error("Could not create ActiveXObject. ActiveX might be disabled, or MSXML might not be installed");}return a.i}
Kh=new Lh;function Nh(a){Id.call(this);this.headers=new Map;this.V=a||null;this.i=!1;this.S=this.J=null;this.l=this.ea="";this.j=this.ba=this.A=this.Y=!1;this.m=0;this.D=null;this.Pa="";this.ta=this.Ba=!1}
$a(Nh,Id);var Oh=/^https?$/i,Ph=["POST","PUT"],Qh=[];function Rh(a,b,c,d,e,f,g){var h=new Nh;Qh.push(h);b&&h.listen("complete",b);h.h.add("ready",h.Td,!0,void 0,void 0);f&&(h.m=Math.max(0,f));g&&(h.Ba=g);h.send(a,c,d,e)}
m=Nh.prototype;m.Td=function(){this.dispose();kb(Qh,this)};
m.send=function(a,b,c,d){if(this.J)throw Error("[goog.net.XhrIo] Object is active with another request="+this.ea+"; newUri="+a);b=b?b.toUpperCase():"GET";this.ea=a;this.l="";this.Y=!1;this.i=!0;this.J=this.V?Mh(this.V):Mh(Kh);this.S=this.V?this.V.getOptions():Kh.getOptions();this.J.onreadystatechange=Xa(this.rd,this);try{this.getStatus(),this.ba=!0,this.J.open(b,String(a),!0),this.ba=!1}catch(g){this.getStatus();Sh(this,g);return}a=c||"";c=new Map(this.headers);if(d)if(Object.getPrototypeOf(d)===
Object.prototype)for(var e in d)c.set(e,d[e]);else if("function"===typeof d.keys&&"function"===typeof d.get){e=v(d.keys());for(var f=e.next();!f.done;f=e.next())f=f.value,c.set(f,d.get(f))}else throw Error("Unknown input type for opt_headers: "+String(d));d=Array.from(c.keys()).find(function(g){return"content-type"==g.toLowerCase()});
e=C.FormData&&a instanceof C.FormData;!(0<=eb(Ph,b))||d||e||c.set("Content-Type","application/x-www-form-urlencoded;charset=utf-8");b=v(c);for(d=b.next();!d.done;d=b.next())c=v(d.value),d=c.next().value,c=c.next().value,this.J.setRequestHeader(d,c);this.Pa&&(this.J.responseType=this.Pa);"withCredentials"in this.J&&this.J.withCredentials!==this.Ba&&(this.J.withCredentials=this.Ba);try{Th(this),0<this.m&&(this.ta=Uh(this.J),this.getStatus(),this.ta?(this.J.timeout=this.m,this.J.ontimeout=Xa(this.Gd,
this)):this.D=xe(this.Gd,this.m,this)),this.getStatus(),this.A=!0,this.J.send(a),this.A=!1}catch(g){this.getStatus(),Sh(this,g)}};
function Uh(a){return Yc&&"number"===typeof a.timeout&&void 0!==a.ontimeout}
m.Gd=function(){"undefined"!=typeof Na&&this.J&&(this.l="Timed out after "+this.m+"ms, aborting",this.getStatus(),Jd(this,"timeout"),this.abort(8))};
function Sh(a,b){a.i=!1;a.J&&(a.j=!0,a.J.abort(),a.j=!1);a.l=b;Vh(a);Wh(a)}
function Vh(a){a.Y||(a.Y=!0,Jd(a,"complete"),Jd(a,"error"))}
m.abort=function(){this.J&&this.i&&(this.getStatus(),this.i=!1,this.j=!0,this.J.abort(),this.j=!1,Jd(this,"complete"),Jd(this,"abort"),Wh(this))};
m.R=function(){this.J&&(this.i&&(this.i=!1,this.j=!0,this.J.abort(),this.j=!1),Wh(this,!0));Nh.Aa.R.call(this)};
m.rd=function(){this.Z()||(this.ba||this.A||this.j?Xh(this):this.Ce())};
m.Ce=function(){Xh(this)};
function Xh(a){if(a.i&&"undefined"!=typeof Na)if(a.S[1]&&4==Yh(a)&&2==a.getStatus())a.getStatus();else if(a.A&&4==Yh(a))xe(a.rd,0,a);else if(Jd(a,"readystatechange"),a.isComplete()){a.getStatus();a.i=!1;try{if(Zh(a))Jd(a,"complete"),Jd(a,"success");else{try{var b=2<Yh(a)?a.J.statusText:""}catch(c){b=""}a.l=b+" ["+a.getStatus()+"]";Vh(a)}}finally{Wh(a)}}}
function Wh(a,b){if(a.J){Th(a);var c=a.J,d=a.S[0]?function(){}:null;
a.J=null;a.S=null;b||Jd(a,"ready");try{c.onreadystatechange=d}catch(e){}}}
function Th(a){a.J&&a.ta&&(a.J.ontimeout=null);a.D&&(C.clearTimeout(a.D),a.D=null)}
m.isActive=function(){return!!this.J};
m.isComplete=function(){return 4==Yh(this)};
function Zh(a){var b=a.getStatus();a:switch(b){case 200:case 201:case 202:case 204:case 206:case 304:case 1223:var c=!0;break a;default:c=!1}if(!c){if(b=0===b)a=Ac(1,String(a.ea)),!a&&C.self&&C.self.location&&(a=C.self.location.protocol.slice(0,-1)),b=!Oh.test(a?a.toLowerCase():"");c=b}return c}
function Yh(a){return a.J?a.J.readyState:0}
m.getStatus=function(){try{return 2<Yh(this)?this.J.status:-1}catch(a){return-1}};
m.getLastError=function(){return"string"===typeof this.l?this.l:String(this.l)};function $h(){}
$h.prototype.send=function(a,b,c){b=void 0===b?function(){}:b;
c=void 0===c?function(){}:c;
Rh(a.url,function(d){d=d.target;if(Zh(d)){try{var e=d.J?d.J.responseText:""}catch(f){e=""}b(e)}else c(d.getStatus())},a.requestType,a.body,a.Ke,a.timeoutMillis,a.withCredentials)};
$h.prototype.Bc=function(){return 1};function ai(a,b){H.call(this);this.logSource=a;this.sessionIndex=b;this.i="https://play.google.com/log?format=json&hasfast=true";this.h=null;this.j=!1;this.componentId="";this.pageId=this.yb=null;this.network=new $h}
w(ai,H);ai.prototype.ed=function(){this.l=!0;return this};function bi(a,b,c,d,e,f,g){a=void 0===a?-1:a;b=void 0===b?"":b;c=void 0===c?"":c;d=void 0===d?!1:d;e=void 0===e?"":e;H.call(this);this.logSource=a;this.componentId=b;f?a=f:(a=new ai(a,"0"),a.componentId=b,Rc(this,a),""!==c&&(a.i=c),d&&(a.j=!0),e&&(a.h=e),g&&(a.network=g),b=new rh({logSource:a.logSource,Gb:a.Gb?a.Gb:Wg,sessionIndex:a.sessionIndex,lf:a.i,eb:a.j,Eb:!1,ed:a.l,Xc:a.Xc,network:a.network?a.network:void 0}),Rc(a,b),a.h&&(c=a.h,d=zh(b.i),xg(d,7,c)),a.componentId&&(b.componentId=a.componentId),
a.yb&&(b.yb=a.yb),a.pageId&&(b.pageId=a.pageId),Ch(b.i),a.network.Nb&&a.network.Nb(a.logSource),a.network.Ye&&a.network.Ye(b),a=b);this.h=a}
w(bi,H);
bi.prototype.flush=function(a){var b=a||[];if(b.length){a=new Hg;for(var c=[],d=0;d<b.length;d++){var e=b[d];var f=new Gg;f=xg(f,1,e.l);for(var g=[],h=0;h<e.fields.length;h++)g.push(e.fields[h].ma);h=f.F;var k=nf(h);Af(k);if(null==g)kg(h,k,3);else{if(!Array.isArray(g))throw If();var l=mf(g),n=l,p=!!(2&l)||Object.isFrozen(g),r=!p&&!1;var t=4&l?!1:!0;if(t)for(l=21,p&&(g=hf(g),n=0,l=tg(l,k,!0)),t=0;t<g.length;t++){p=g;var x=t,z=g[t];if("string"!==typeof z)throw Error();p[x]=z}r&&(g=hf(g),n=0,l=tg(l,
k,!0));l!==n&&of(g,l);kg(h,k,3,g)}g=[];h=[];k=v(e.h.keys());for(l=k.next();!l.done;l=k.next())h.push(l.value.split(","));for(k=0;k<h.length;k++){l=h[k];n=e.j;r=e.xc(l)||[];t=[];for(p=0;p<r.length;p++){z=(x=r[p])&&x.h;x=new Dg;switch(n){case 3:z=Number(z);Number.isFinite(z)&&pg(x,1,Eg,Pf(z));break;case 2:z=Number(z);if(null!=z&&"number"!==typeof z)throw Error("Value of float/double field must be a number, found "+typeof z+": "+z);pg(x,2,Eg,z)}t.push(x)}n=t;for(r=0;r<n.length;r++){t=n[r];p=new Fg;t=
rg(p,Dg,2,t);p=l;x=[];z=[];for(var y=0;y<e.fields.length;y++)z.push(e.fields[y].na);for(y=0;y<z.length;y++){var J=z[y],G=p[y],R=new Bg;switch(J){case 3:pg(R,1,Cg,Uf(String(G)));break;case 2:J=Number(G);Number.isFinite(J)&&pg(R,2,Cg,Nf(J));break;case 1:pg(R,3,Cg,Kf("true"===G))}x.push(R)}sg(t,Bg,1,x);g.push(t)}}sg(f,Fg,4,g);c.push(f);e.clear()}sg(a,Gg,1,c);b=this.h;b.S&&(a instanceof lh?b.log(a):(c=new lh,a=a.serialize(),a=xg(c,8,a),b.log(a)));this.h.flush()}};function ci(a,b,c){this.logger=a;this.event=b;if(void 0===c||c)this.h=di()}
ci.prototype.start=function(){this.h=di()};
ci.prototype.done=function(){null!=this.h&&this.logger.od(this.event,di()-this.h)};
function ei(){}
ei.prototype.Gc=function(){};
ei.prototype.od=function(){};
ei.prototype.ec=function(){};
ei.prototype.Oa=function(){};
function fi(a,b){this.i=b;this.l=new bi(1828,"","",!1,"",void 0,new $h);this.h=new ye(this.l);this.m=new Ee(this.h);this.A=new He(this.h);this.D=new Ie(this.h);this.v=new De(this.h);new Fe(this.h);new Ge(this.h);this.j=Ke(a);(new Ce(this.h)).h.oc("/client_streamz/bg/fic",this.i)}
fi.prototype.Gc=function(){this.A.h.oc("/client_streamz/bg/fsc",this.j,this.i)};
fi.prototype.od=function(a,b){0===a?this.m.record(b,this.j,this.i):1===a&&this.D.record(b,this.j,this.i)};
fi.prototype.ec=function(a,b){this.v.h.oc("/client_streamz/bg/fiec",this.j,this.i,a,b)};
fi.prototype.Oa=function(){this.h.Oa()};
function di(){var a,b,c;return null!=(c=null==(a=globalThis.performance)?void 0:null==(b=a.now)?void 0:b.call(a))?c:Date.now()}
;function gi(){var a=this;this.promise=new Promise(function(b,c){a.resolve=b;a.reject=c})}
;function hi(a){function b(n,p,r){Promise.resolve().then(function(){k.done();h.resolve({Qd:n,bf:p,hg:r})})}
function c(){}
this.h=!1;var d=a.program;var e=a.je;if(!1!==a.Ie){var f,g;this.qa=null!=(g=a.qa)?g:new fi(e,null!=(f=a.ze)?f:"_")}else this.qa=new ei;var h=new gi;this.i=h.promise;var k=new ci(this.qa,0,!1);C[e]?C[e].a||(this.qa.ec(2,""),this.qa.Oa()):(this.qa.ec(1,""),this.qa.Oa());try{var l=C[e].a;k.start();this.j=v(l(d,b,!0,a.qg,c)).next().value;this.af=h.promise.then(function(){})}catch(n){throw this.qa.ec(4,n.message),this.qa.Oa(),n;
}}
hi.prototype.snapshot=function(a){var b=this;if(this.h)throw Error("Already disposed");this.qa.Gc();return this.i.then(function(c){var d=c.Qd;return new Promise(function(e){var f=new ci(b.qa,1);d(function(g){f.done();e(g)},[a.dd,
a.cf,a.nf,a.df])})})};
hi.prototype.Dd=function(a){if(this.h)throw Error("Already disposed");this.qa.Gc();var b=new ci(this.qa,1);a=this.j([a.dd,a.cf,a.nf,a.df]);b.done();return a};
hi.prototype.dispose=function(){this.qa.Oa();this.h=!0;this.i.then(function(a){(a=a.bf)&&a()})};
hi.prototype.Z=function(){return this.h};var ii=window;Bb("csi.gstatic.com");Bb("googleads.g.doubleclick.net");Bb("partner.googleadservices.com");Bb("pubads.g.doubleclick.net");Bb("securepubads.g.doubleclick.net");Bb("tpc.googlesyndication.com");function ji(a){var b=ki;if(b)for(var c in b)Object.prototype.hasOwnProperty.call(b,c)&&a(b[c],c,b)}
function li(){var a=[];ji(function(b){a.push(b)});
return a}
var ki={pf:"allow-forms",qf:"allow-modals",rf:"allow-orientation-lock",sf:"allow-pointer-lock",tf:"allow-popups",uf:"allow-popups-to-escape-sandbox",vf:"allow-presentation",wf:"allow-same-origin",xf:"allow-scripts",yf:"allow-top-navigation",zf:"allow-top-navigation-by-user-activation"},mi=Od(function(){return li()});
function ni(){var a=oi(),b={};fb(mi(),function(c){a.sandbox&&a.sandbox.supports&&a.sandbox.supports(c)&&(b[c]=!0)});
return b}
function oi(){var a=void 0===a?document:a;return a.createElement("iframe")}
;function pi(a){"number"==typeof a&&(a=Math.round(a)+"px");return a}
;var qi=(new Date).getTime();function ri(a){Id.call(this);var b=this;this.A=this.j=0;this.Da=null!=a?a:{oa:function(e,f){return setTimeout(e,f)},
pa:function(e){clearTimeout(e)}};
var c,d;this.i=null!=(d=null==(c=window.navigator)?void 0:c.onLine)?d:!0;this.l=function(){return A(function(e){return e.yield(si(b),0)})};
window.addEventListener("offline",this.l);window.addEventListener("online",this.l);this.A||ti(this)}
w(ri,Id);function ui(){var a=vi;ri.h||(ri.h=new ri(a));return ri.h}
ri.prototype.dispose=function(){window.removeEventListener("offline",this.l);window.removeEventListener("online",this.l);this.Da.pa(this.A);delete ri.h};
ri.prototype.wa=function(){return this.i};
function ti(a){a.A=a.Da.oa(function(){var b;return A(function(c){if(1==c.h)return a.i?(null==(b=window.navigator)?0:b.onLine)?c.B(3):c.yield(si(a),3):c.yield(si(a),3);ti(a);c.h=0})},3E4)}
function si(a,b){return a.m?a.m:a.m=new Promise(function(c){var d,e,f,g;return A(function(h){switch(h.h){case 1:return d=window.AbortController?new window.AbortController:void 0,f=null==(e=d)?void 0:e.signal,g=!1,Aa(h,2,3),d&&(a.j=a.Da.oa(function(){d.abort()},b||2E4)),h.yield(fetch("/generate_204",{method:"HEAD",
signal:f}),5);case 5:g=!0;case 3:h.S=[h.j];h.l=0;h.m=0;a.m=void 0;a.j&&(a.Da.pa(a.j),a.j=0);g!==a.i&&(a.i=g,a.i?Jd(a,"networkstatus-online"):Jd(a,"networkstatus-offline"));c(g);Da(h);break;case 2:Ba(h),g=!1,h.B(3)}})})}
;function wi(){this.data=[];this.h=-1}
wi.prototype.set=function(a,b){b=void 0===b?!0:b;0<=a&&52>a&&Number.isInteger(a)&&this.data[a]!==b&&(this.data[a]=b,this.h=-1)};
wi.prototype.get=function(a){return!!this.data[a]};
function xi(a){-1===a.h&&(a.h=a.data.reduce(function(b,c,d){return b+(c?Math.pow(2,d):0)},0));
return a.h}
;function yi(a,b){this.h=a[C.Symbol.iterator]();this.i=b}
yi.prototype[Symbol.iterator]=function(){return this};
yi.prototype.next=function(){var a=this.h.next();return{value:a.done?void 0:this.i.call(void 0,a.value),done:a.done}};
function zi(a,b){return new yi(a,b)}
;function Ai(){this.blockSize=-1}
;function Bi(){this.blockSize=-1;this.blockSize=64;this.h=[];this.v=[];this.m=[];this.j=[];this.j[0]=128;for(var a=1;a<this.blockSize;++a)this.j[a]=0;this.l=this.i=0;this.reset()}
$a(Bi,Ai);Bi.prototype.reset=function(){this.h[0]=1732584193;this.h[1]=4023233417;this.h[2]=2562383102;this.h[3]=271733878;this.h[4]=3285377520;this.l=this.i=0};
function Ci(a,b,c){c||(c=0);var d=a.m;if("string"===typeof b)for(var e=0;16>e;e++)d[e]=b.charCodeAt(c)<<24|b.charCodeAt(c+1)<<16|b.charCodeAt(c+2)<<8|b.charCodeAt(c+3),c+=4;else for(e=0;16>e;e++)d[e]=b[c]<<24|b[c+1]<<16|b[c+2]<<8|b[c+3],c+=4;for(e=16;80>e;e++){var f=d[e-3]^d[e-8]^d[e-14]^d[e-16];d[e]=(f<<1|f>>>31)&4294967295}b=a.h[0];c=a.h[1];var g=a.h[2],h=a.h[3],k=a.h[4];for(e=0;80>e;e++){if(40>e)if(20>e){f=h^c&(g^h);var l=1518500249}else f=c^g^h,l=1859775393;else 60>e?(f=c&g|h&(c|g),l=2400959708):
(f=c^g^h,l=3395469782);f=(b<<5|b>>>27)+f+k+l+d[e]&4294967295;k=h;h=g;g=(c<<30|c>>>2)&4294967295;c=b;b=f}a.h[0]=a.h[0]+b&4294967295;a.h[1]=a.h[1]+c&4294967295;a.h[2]=a.h[2]+g&4294967295;a.h[3]=a.h[3]+h&4294967295;a.h[4]=a.h[4]+k&4294967295}
Bi.prototype.update=function(a,b){if(null!=a){void 0===b&&(b=a.length);for(var c=b-this.blockSize,d=0,e=this.v,f=this.i;d<b;){if(0==f)for(;d<=c;)Ci(this,a,d),d+=this.blockSize;if("string"===typeof a)for(;d<b;){if(e[f]=a.charCodeAt(d),++f,++d,f==this.blockSize){Ci(this,e);f=0;break}}else for(;d<b;)if(e[f]=a[d],++f,++d,f==this.blockSize){Ci(this,e);f=0;break}}this.i=f;this.l+=b}};
Bi.prototype.digest=function(){var a=[],b=8*this.l;56>this.i?this.update(this.j,56-this.i):this.update(this.j,this.blockSize-(this.i-56));for(var c=this.blockSize-1;56<=c;c--)this.v[c]=b&255,b/=256;Ci(this,this.v);for(c=b=0;5>c;c++)for(var d=24;0<=d;d-=8)a[b]=this.h[c]>>d&255,++b;return a};function Di(a){return"string"==typeof a.className?a.className:a.getAttribute&&a.getAttribute("class")||""}
function Ei(a,b){"string"==typeof a.className?a.className=b:a.setAttribute&&a.setAttribute("class",b)}
function Fi(a,b){a.classList?b=a.classList.contains(b):(a=a.classList?a.classList:Di(a).match(/\S+/g)||[],b=0<=eb(a,b));return b}
function Gi(){var a=document.body;a.classList?a.classList.remove("inverted-hdpi"):Fi(a,"inverted-hdpi")&&Ei(a,Array.prototype.filter.call(a.classList?a.classList:Di(a).match(/\S+/g)||[],function(b){return"inverted-hdpi"!=b}).join(" "))}
;function Hi(){}
Hi.prototype.next=function(){return Ii};
var Ii={done:!0,value:void 0};function Ji(a){return{value:a,done:!1}}
Hi.prototype.Fa=function(){return this};function Ki(a){if(a instanceof Li||a instanceof Mi||a instanceof Ni)return a;if("function"==typeof a.next)return new Li(function(){return a});
if("function"==typeof a[Symbol.iterator])return new Li(function(){return a[Symbol.iterator]()});
if("function"==typeof a.Fa)return new Li(function(){return a.Fa()});
throw Error("Not an iterator or iterable.");}
function Li(a){this.i=a}
Li.prototype.Fa=function(){return new Mi(this.i())};
Li.prototype[Symbol.iterator]=function(){return new Ni(this.i())};
Li.prototype.h=function(){return new Ni(this.i())};
function Mi(a){this.i=a}
w(Mi,Hi);Mi.prototype.next=function(){return this.i.next()};
Mi.prototype[Symbol.iterator]=function(){return new Ni(this.i)};
Mi.prototype.h=function(){return new Ni(this.i)};
function Ni(a){Li.call(this,function(){return a});
this.j=a}
w(Ni,Li);Ni.prototype.next=function(){return this.j.next()};function L(a){H.call(this);this.m=1;this.j=[];this.l=0;this.h=[];this.i={};this.A=!!a}
$a(L,H);m=L.prototype;m.subscribe=function(a,b,c){var d=this.i[a];d||(d=this.i[a]=[]);var e=this.m;this.h[e]=a;this.h[e+1]=b;this.h[e+2]=c;this.m=e+3;d.push(e);return e};
m.unsubscribe=function(a,b,c){if(a=this.i[a]){var d=this.h;if(a=a.find(function(e){return d[e+1]==b&&d[e+2]==c}))return this.Ab(a)}return!1};
m.Ab=function(a){var b=this.h[a];if(b){var c=this.i[b];0!=this.l?(this.j.push(a),this.h[a+1]=function(){}):(c&&kb(c,a),delete this.h[a],delete this.h[a+1],delete this.h[a+2])}return!!b};
m.Ya=function(a,b){var c=this.i[a];if(c){for(var d=Array(arguments.length-1),e=1,f=arguments.length;e<f;e++)d[e-1]=arguments[e];if(this.A)for(e=0;e<c.length;e++){var g=c[e];Oi(this.h[g+1],this.h[g+2],d)}else{this.l++;try{for(e=0,f=c.length;e<f&&!this.Z();e++)g=c[e],this.h[g+1].apply(this.h[g+2],d)}finally{if(this.l--,0<this.j.length&&0==this.l)for(;c=this.j.pop();)this.Ab(c)}}return 0!=e}return!1};
function Oi(a,b,c){ce(function(){a.apply(b,c)})}
m.clear=function(a){if(a){var b=this.i[a];b&&(b.forEach(this.Ab,this),delete this.i[a])}else this.h.length=0,this.i={}};
m.R=function(){L.Aa.R.call(this);this.clear();this.j.length=0};function Pi(a){this.h=a}
Pi.prototype.set=function(a,b){void 0===b?this.h.remove(a):this.h.set(a,(new Dh).serialize(b))};
Pi.prototype.get=function(a){try{var b=this.h.get(a)}catch(c){return}if(null!==b)try{return JSON.parse(b)}catch(c){throw"Storage: Invalid value was encountered";}};
Pi.prototype.remove=function(a){this.h.remove(a)};function Qi(a){this.h=a}
$a(Qi,Pi);function Ri(a){this.data=a}
function Si(a){return void 0===a||a instanceof Ri?a:new Ri(a)}
Qi.prototype.set=function(a,b){Qi.Aa.set.call(this,a,Si(b))};
Qi.prototype.i=function(a){a=Qi.Aa.get.call(this,a);if(void 0===a||a instanceof Object)return a;throw"Storage: Invalid value was encountered";};
Qi.prototype.get=function(a){if(a=this.i(a)){if(a=a.data,void 0===a)throw"Storage: Invalid value was encountered";}else a=void 0;return a};function Ti(a){this.h=a}
$a(Ti,Qi);Ti.prototype.set=function(a,b,c){if(b=Si(b)){if(c){if(c<Za()){Ti.prototype.remove.call(this,a);return}b.expiration=c}b.creation=Za()}Ti.Aa.set.call(this,a,b)};
Ti.prototype.i=function(a){var b=Ti.Aa.i.call(this,a);if(b){var c=b.creation,d=b.expiration;if(d&&d<Za()||c&&c>Za())Ti.prototype.remove.call(this,a);else return b}};function Ui(){}
;function Vi(){}
$a(Vi,Ui);Vi.prototype[Symbol.iterator]=function(){return Ki(this.Fa(!0)).h()};
Vi.prototype.clear=function(){var a=Array.from(this);a=v(a);for(var b=a.next();!b.done;b=a.next())this.remove(b.value)};function Wi(a){this.h=a;this.i=null}
$a(Wi,Vi);m=Wi.prototype;m.isAvailable=function(){var a=this.h;if(a)try{a.setItem("__sak","1");a.removeItem("__sak");var b=!0}catch(c){b=c instanceof DOMException&&("QuotaExceededError"===c.name||22===c.code||1014===c.code||"NS_ERROR_DOM_QUOTA_REACHED"===c.name)&&a&&0!==a.length}else b=!1;return this.i=b};
m.set=function(a,b){Xi(this);try{this.h.setItem(a,b)}catch(c){if(0==this.h.length)throw"Storage mechanism: Storage disabled";throw"Storage mechanism: Quota exceeded";}};
m.get=function(a){Xi(this);a=this.h.getItem(a);if("string"!==typeof a&&null!==a)throw"Storage mechanism: Invalid value was encountered";return a};
m.remove=function(a){Xi(this);this.h.removeItem(a)};
m.Fa=function(a){Xi(this);var b=0,c=this.h,d=new Hi;d.next=function(){if(b>=c.length)return Ii;var e=c.key(b++);if(a)return Ji(e);e=c.getItem(e);if("string"!==typeof e)throw"Storage mechanism: Invalid value was encountered";return Ji(e)};
return d};
m.clear=function(){Xi(this);this.h.clear()};
m.key=function(a){Xi(this);return this.h.key(a)};
function Xi(a){if(null==a.h)throw Error("Storage mechanism: Storage unavailable");var b;(null!=(b=a.i)?b:a.isAvailable())||Wd(Error("Storage mechanism: Storage unavailable"))}
;function Yi(){var a=null;try{a=C.localStorage||null}catch(b){}Wi.call(this,a)}
$a(Yi,Wi);function Zi(a,b){this.i={};this.h=[];this.Wa=this.size=0;var c=arguments.length;if(1<c){if(c%2)throw Error("Uneven number of arguments");for(var d=0;d<c;d+=2)this.set(arguments[d],arguments[d+1])}else if(a)if(a instanceof Zi)for(c=a.Ac(),d=0;d<c.length;d++)this.set(c[d],a.get(c[d]));else for(d in a)this.set(d,a[d])}
m=Zi.prototype;m.Ac=function(){$i(this);return this.h.concat()};
m.has=function(a){return aj(this.i,a)};
m.equals=function(a,b){if(this===a)return!0;if(this.size!=a.size)return!1;b=b||bj;$i(this);for(var c,d=0;c=this.h[d];d++)if(!b(this.get(c),a.get(c)))return!1;return!0};
function bj(a,b){return a===b}
m.clear=function(){this.i={};this.Wa=this.size=this.h.length=0};
m.remove=function(a){return this.delete(a)};
m.delete=function(a){return aj(this.i,a)?(delete this.i[a],--this.size,this.Wa++,this.h.length>2*this.size&&$i(this),!0):!1};
function $i(a){if(a.size!=a.h.length){for(var b=0,c=0;b<a.h.length;){var d=a.h[b];aj(a.i,d)&&(a.h[c++]=d);b++}a.h.length=c}if(a.size!=a.h.length){var e={};for(c=b=0;b<a.h.length;)d=a.h[b],aj(e,d)||(a.h[c++]=d,e[d]=1),b++;a.h.length=c}}
m.get=function(a,b){return aj(this.i,a)?this.i[a]:b};
m.set=function(a,b){aj(this.i,a)||(this.size+=1,this.h.push(a),this.Wa++);this.i[a]=b};
m.forEach=function(a,b){for(var c=this.Ac(),d=0;d<c.length;d++){var e=c[d],f=this.get(e);a.call(b,f,e,this)}};
m.clone=function(){return new Zi(this)};
m.keys=function(){return Ki(this.Fa(!0)).h()};
m.values=function(){return Ki(this.Fa(!1)).h()};
m.entries=function(){var a=this;return zi(this.keys(),function(b){return[b,a.get(b)]})};
m.Fa=function(a){$i(this);var b=0,c=this.Wa,d=this,e=new Hi;e.next=function(){if(c!=d.Wa)throw Error("The map has changed since the iterator was created");if(b>=d.h.length)return Ii;var f=d.h[b++];return Ji(a?f:d.i[f])};
return e};
function aj(a,b){return Object.prototype.hasOwnProperty.call(a,b)}
;function cj(a,b){this.i=a;this.h=null;var c;if(c=Yc)c=!(9<=Number(kd));if(c){dj||(dj=new Zi);this.h=dj.get(a);this.h||(b?this.h=document.getElementById(b):(this.h=document.createElement("userdata"),this.h.addBehavior("#default#userData"),document.body.appendChild(this.h)),dj.set(a,this.h));try{this.h.load(this.i)}catch(d){this.h=null}}}
$a(cj,Vi);var ej={".":".2E","!":".21","~":".7E","*":".2A","'":".27","(":".28",")":".29","%":"."},dj=null;function fj(a){return"_"+encodeURIComponent(a).replace(/[.!~*'()%]/g,function(b){return ej[b]})}
m=cj.prototype;m.isAvailable=function(){return!!this.h};
m.set=function(a,b){this.h.setAttribute(fj(a),b);gj(this)};
m.get=function(a){a=this.h.getAttribute(fj(a));if("string"!==typeof a&&null!==a)throw"Storage mechanism: Invalid value was encountered";return a};
m.remove=function(a){this.h.removeAttribute(fj(a));gj(this)};
m.Fa=function(a){var b=0,c=this.h.XMLDocument.documentElement.attributes,d=new Hi;d.next=function(){if(b>=c.length)return Ii;var e=c[b++];if(a)return Ji(decodeURIComponent(e.nodeName.replace(/\./g,"%")).slice(1));e=e.nodeValue;if("string"!==typeof e)throw"Storage mechanism: Invalid value was encountered";return Ji(e)};
return d};
m.clear=function(){for(var a=this.h.XMLDocument.documentElement,b=a.attributes.length;0<b;b--)a.removeAttribute(a.attributes[b-1].nodeName);gj(this)};
function gj(a){try{a.h.save(a.i)}catch(b){throw"Storage mechanism: Quota exceeded";}}
;function hj(a,b){this.i=a;this.h=b+"::"}
$a(hj,Vi);hj.prototype.set=function(a,b){this.i.set(this.h+a,b)};
hj.prototype.get=function(a){return this.i.get(this.h+a)};
hj.prototype.remove=function(a){this.i.remove(this.h+a)};
hj.prototype.Fa=function(a){var b=this.i[Symbol.iterator](),c=this,d=new Hi;d.next=function(){var e=b.next();if(e.done)return e;for(e=e.value;e.slice(0,c.h.length)!=c.h;){e=b.next();if(e.done)return e;e=e.value}return Ji(a?e.slice(c.h.length):c.i.get(e))};
return d};/*

 (The MIT License)

 Copyright (C) 2014 by Vitaly Puzrin

 Permission is hereby granted, free of charge, to any person obtaining a copy
 of this software and associated documentation files (the "Software"), to deal
 in the Software without restriction, including without limitation the rights
 to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 copies of the Software, and to permit persons to whom the Software is
 furnished to do so, subject to the following conditions:

 The above copyright notice and this permission notice shall be included in
 all copies or substantial portions of the Software.

 THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 THE SOFTWARE.

 -----------------------------------------------------------------------------
 Ported from zlib, which is under the following license
 https://github.com/madler/zlib/blob/master/zlib.h

 zlib.h -- interface of the 'zlib' general purpose compression library
   version 1.2.8, April 28th, 2013
   Copyright (C) 1995-2013 Jean-loup Gailly and Mark Adler
   This software is provided 'as-is', without any express or implied
   warranty.  In no event will the authors be held liable for any damages
   arising from the use of this software.
   Permission is granted to anyone to use this software for any purpose,
   including commercial applications, and to alter it and redistribute it
   freely, subject to the following restrictions:
   1. The origin of this software must not be misrepresented; you must not
      claim that you wrote the original software. If you use this software
      in a product, an acknowledgment in the product documentation would be
      appreciated but is not required.
   2. Altered source versions must be plainly marked as such, and must not be
      misrepresented as being the original software.
   3. This notice may not be removed or altered from any source distribution.
   Jean-loup Gailly        Mark Adler
   jloup@gzip.org          madler@alumni.caltech.edu
   The data format used by the zlib library is described by RFCs (Request for
   Comments) 1950 to 1952 in the files http://tools.ietf.org/html/rfc1950
   (zlib format), rfc1951 (deflate format) and rfc1952 (gzip format).
*/
var M={},ij="undefined"!==typeof Uint8Array&&"undefined"!==typeof Uint16Array&&"undefined"!==typeof Int32Array;M.assign=function(a){for(var b=Array.prototype.slice.call(arguments,1);b.length;){var c=b.shift();if(c){if("object"!==typeof c)throw new TypeError(c+"must be non-object");for(var d in c)Object.prototype.hasOwnProperty.call(c,d)&&(a[d]=c[d])}}return a};
M.Rc=function(a,b){if(a.length===b)return a;if(a.subarray)return a.subarray(0,b);a.length=b;return a};
var jj={mb:function(a,b,c,d,e){if(b.subarray&&a.subarray)a.set(b.subarray(c,c+d),e);else for(var f=0;f<d;f++)a[e+f]=b[c+f]},
hd:function(a){var b,c;var d=c=0;for(b=a.length;d<b;d++)c+=a[d].length;var e=new Uint8Array(c);d=c=0;for(b=a.length;d<b;d++){var f=a[d];e.set(f,c);c+=f.length}return e}},kj={mb:function(a,b,c,d,e){for(var f=0;f<d;f++)a[e+f]=b[c+f]},
hd:function(a){return[].concat.apply([],a)}};
M.Ze=function(){ij?(M.lb=Uint8Array,M.Ha=Uint16Array,M.Md=Int32Array,M.assign(M,jj)):(M.lb=Array,M.Ha=Array,M.Md=Array,M.assign(M,kj))};
M.Ze();var lj=!0;try{new Uint8Array(1)}catch(a){lj=!1}
function mj(a){var b,c,d=a.length,e=0;for(b=0;b<d;b++){var f=a.charCodeAt(b);if(55296===(f&64512)&&b+1<d){var g=a.charCodeAt(b+1);56320===(g&64512)&&(f=65536+(f-55296<<10)+(g-56320),b++)}e+=128>f?1:2048>f?2:65536>f?3:4}var h=new M.lb(e);for(b=c=0;c<e;b++)f=a.charCodeAt(b),55296===(f&64512)&&b+1<d&&(g=a.charCodeAt(b+1),56320===(g&64512)&&(f=65536+(f-55296<<10)+(g-56320),b++)),128>f?h[c++]=f:(2048>f?h[c++]=192|f>>>6:(65536>f?h[c++]=224|f>>>12:(h[c++]=240|f>>>18,h[c++]=128|f>>>12&63),h[c++]=128|f>>>
6&63),h[c++]=128|f&63);return h}
;var nj={};nj=function(a,b,c,d){var e=a&65535|0;a=a>>>16&65535|0;for(var f;0!==c;){f=2E3<c?2E3:c;c-=f;do e=e+b[d++]|0,a=a+e|0;while(--f);e%=65521;a%=65521}return e|a<<16|0};for(var oj={},pj,qj=[],rj=0;256>rj;rj++){pj=rj;for(var sj=0;8>sj;sj++)pj=pj&1?3988292384^pj>>>1:pj>>>1;qj[rj]=pj}oj=function(a,b,c,d){c=d+c;for(a^=-1;d<c;d++)a=a>>>8^qj[(a^b[d])&255];return a^-1};var tj={};tj={2:"need dictionary",1:"stream end",0:"","-1":"file error","-2":"stream error","-3":"data error","-4":"insufficient memory","-5":"buffer error","-6":"incompatible version"};function uj(a){for(var b=a.length;0<=--b;)a[b]=0}
var vj=[0,0,0,0,0,0,0,0,1,1,1,1,2,2,2,2,3,3,3,3,4,4,4,4,5,5,5,5,0],wj=[0,0,0,0,1,1,2,2,3,3,4,4,5,5,6,6,7,7,8,8,9,9,10,10,11,11,12,12,13,13],xj=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,2,3,7],yj=[16,17,18,0,8,7,9,6,10,5,11,4,12,3,13,2,14,1,15],zj=Array(576);uj(zj);var Aj=Array(60);uj(Aj);var Bj=Array(512);uj(Bj);var Cj=Array(256);uj(Cj);var Dj=Array(29);uj(Dj);var Ej=Array(30);uj(Ej);function Fj(a,b,c,d,e){this.Ed=a;this.ce=b;this.be=c;this.Wd=d;this.ye=e;this.ld=a&&a.length}
var Gj,Hj,Ij;function Jj(a,b){this.gd=a;this.vb=0;this.Va=b}
function Kj(a,b){a.W[a.pending++]=b&255;a.W[a.pending++]=b>>>8&255}
function Lj(a,b,c){a.fa>16-c?(a.la|=b<<a.fa&65535,Kj(a,a.la),a.la=b>>16-a.fa,a.fa+=c-16):(a.la|=b<<a.fa&65535,a.fa+=c)}
function Mj(a,b,c){Lj(a,c[2*b],c[2*b+1])}
function Nj(a,b){var c=0;do c|=a&1,a>>>=1,c<<=1;while(0<--b);return c>>>1}
function Oj(a,b,c){var d=Array(16),e=0,f;for(f=1;15>=f;f++)d[f]=e=e+c[f-1]<<1;for(c=0;c<=b;c++)e=a[2*c+1],0!==e&&(a[2*c]=Nj(d[e]++,e))}
function Pj(a){var b;for(b=0;286>b;b++)a.ra[2*b]=0;for(b=0;30>b;b++)a.bb[2*b]=0;for(b=0;19>b;b++)a.ha[2*b]=0;a.ra[512]=1;a.Na=a.zb=0;a.ya=a.matches=0}
function Qj(a){8<a.fa?Kj(a,a.la):0<a.fa&&(a.W[a.pending++]=a.la);a.la=0;a.fa=0}
function Rj(a,b,c){Qj(a);Kj(a,c);Kj(a,~c);M.mb(a.W,a.window,b,c,a.pending);a.pending+=c}
function Sj(a,b,c,d){var e=2*b,f=2*c;return a[e]<a[f]||a[e]===a[f]&&d[b]<=d[c]}
function Tj(a,b,c){for(var d=a.X[c],e=c<<1;e<=a.La;){e<a.La&&Sj(b,a.X[e+1],a.X[e],a.depth)&&e++;if(Sj(b,d,a.X[e],a.depth))break;a.X[c]=a.X[e];c=e;e<<=1}a.X[c]=d}
function Uj(a,b,c){var d=0;if(0!==a.ya){do{var e=a.W[a.Db+2*d]<<8|a.W[a.Db+2*d+1];var f=a.W[a.Fc+d];d++;if(0===e)Mj(a,f,b);else{var g=Cj[f];Mj(a,g+256+1,b);var h=vj[g];0!==h&&(f-=Dj[g],Lj(a,f,h));e--;g=256>e?Bj[e]:Bj[256+(e>>>7)];Mj(a,g,c);h=wj[g];0!==h&&(e-=Ej[g],Lj(a,e,h))}}while(d<a.ya)}Mj(a,256,b)}
function Vj(a,b){var c=b.gd,d=b.Va.Ed,e=b.Va.ld,f=b.Va.Wd,g,h=-1;a.La=0;a.qb=573;for(g=0;g<f;g++)0!==c[2*g]?(a.X[++a.La]=h=g,a.depth[g]=0):c[2*g+1]=0;for(;2>a.La;){var k=a.X[++a.La]=2>h?++h:0;c[2*k]=1;a.depth[k]=0;a.Na--;e&&(a.zb-=d[2*k+1])}b.vb=h;for(g=a.La>>1;1<=g;g--)Tj(a,c,g);k=f;do g=a.X[1],a.X[1]=a.X[a.La--],Tj(a,c,1),d=a.X[1],a.X[--a.qb]=g,a.X[--a.qb]=d,c[2*k]=c[2*g]+c[2*d],a.depth[k]=(a.depth[g]>=a.depth[d]?a.depth[g]:a.depth[d])+1,c[2*g+1]=c[2*d+1]=k,a.X[1]=k++,Tj(a,c,1);while(2<=a.La);a.X[--a.qb]=
a.X[1];g=b.gd;k=b.vb;d=b.Va.Ed;e=b.Va.ld;f=b.Va.ce;var l=b.Va.be,n=b.Va.ye,p,r=0;for(p=0;15>=p;p++)a.Ia[p]=0;g[2*a.X[a.qb]+1]=0;for(b=a.qb+1;573>b;b++){var t=a.X[b];p=g[2*g[2*t+1]+1]+1;p>n&&(p=n,r++);g[2*t+1]=p;if(!(t>k)){a.Ia[p]++;var x=0;t>=l&&(x=f[t-l]);var z=g[2*t];a.Na+=z*(p+x);e&&(a.zb+=z*(d[2*t+1]+x))}}if(0!==r){do{for(p=n-1;0===a.Ia[p];)p--;a.Ia[p]--;a.Ia[p+1]+=2;a.Ia[n]--;r-=2}while(0<r);for(p=n;0!==p;p--)for(t=a.Ia[p];0!==t;)d=a.X[--b],d>k||(g[2*d+1]!==p&&(a.Na+=(p-g[2*d+1])*g[2*d],g[2*
d+1]=p),t--)}Oj(c,h,a.Ia)}
function Wj(a,b,c){var d,e=-1,f=b[1],g=0,h=7,k=4;0===f&&(h=138,k=3);b[2*(c+1)+1]=65535;for(d=0;d<=c;d++){var l=f;f=b[2*(d+1)+1];++g<h&&l===f||(g<k?a.ha[2*l]+=g:0!==l?(l!==e&&a.ha[2*l]++,a.ha[32]++):10>=g?a.ha[34]++:a.ha[36]++,g=0,e=l,0===f?(h=138,k=3):l===f?(h=6,k=3):(h=7,k=4))}}
function Xj(a,b,c){var d,e=-1,f=b[1],g=0,h=7,k=4;0===f&&(h=138,k=3);for(d=0;d<=c;d++){var l=f;f=b[2*(d+1)+1];if(!(++g<h&&l===f)){if(g<k){do Mj(a,l,a.ha);while(0!==--g)}else 0!==l?(l!==e&&(Mj(a,l,a.ha),g--),Mj(a,16,a.ha),Lj(a,g-3,2)):10>=g?(Mj(a,17,a.ha),Lj(a,g-3,3)):(Mj(a,18,a.ha),Lj(a,g-11,7));g=0;e=l;0===f?(h=138,k=3):l===f?(h=6,k=3):(h=7,k=4)}}}
function Yj(a){var b=4093624447,c;for(c=0;31>=c;c++,b>>>=1)if(b&1&&0!==a.ra[2*c])return 0;if(0!==a.ra[18]||0!==a.ra[20]||0!==a.ra[26])return 1;for(c=32;256>c;c++)if(0!==a.ra[2*c])return 1;return 0}
var Zj=!1;function ak(a,b,c){a.W[a.Db+2*a.ya]=b>>>8&255;a.W[a.Db+2*a.ya+1]=b&255;a.W[a.Fc+a.ya]=c&255;a.ya++;0===b?a.ra[2*c]++:(a.matches++,b--,a.ra[2*(Cj[c]+256+1)]++,a.bb[2*(256>b?Bj[b]:Bj[256+(b>>>7)])]++);return a.ya===a.Ib-1}
;function bk(a,b){a.msg=tj[b];return b}
function ck(a){for(var b=a.length;0<=--b;)a[b]=0}
function dk(a){var b=a.state,c=b.pending;c>a.M&&(c=a.M);0!==c&&(M.mb(a.output,b.W,b.Lb,c,a.wb),a.wb+=c,b.Lb+=c,a.Sc+=c,a.M-=c,b.pending-=c,0===b.pending&&(b.Lb=0))}
function ek(a,b){var c=0<=a.va?a.va:-1,d=a.o-a.va,e=0;if(0<a.level){2===a.I.uc&&(a.I.uc=Yj(a));Vj(a,a.dc);Vj(a,a.Yb);Wj(a,a.ra,a.dc.vb);Wj(a,a.bb,a.Yb.vb);Vj(a,a.Yc);for(e=18;3<=e&&0===a.ha[2*yj[e]+1];e--);a.Na+=3*(e+1)+14;var f=a.Na+3+7>>>3;var g=a.zb+3+7>>>3;g<=f&&(f=g)}else f=g=d+5;if(d+4<=f&&-1!==c)Lj(a,b?1:0,3),Rj(a,c,d);else if(4===a.strategy||g===f)Lj(a,2+(b?1:0),3),Uj(a,zj,Aj);else{Lj(a,4+(b?1:0),3);c=a.dc.vb+1;d=a.Yb.vb+1;e+=1;Lj(a,c-257,5);Lj(a,d-1,5);Lj(a,e-4,4);for(f=0;f<e;f++)Lj(a,a.ha[2*
yj[f]+1],3);Xj(a,a.ra,c-1);Xj(a,a.bb,d-1);Uj(a,a.ra,a.bb)}Pj(a);b&&Qj(a);a.va=a.o;dk(a.I)}
function P(a,b){a.W[a.pending++]=b}
function fk(a,b){a.W[a.pending++]=b>>>8&255;a.W[a.pending++]=b&255}
function gk(a,b){var c=a.pd,d=a.o,e=a.xa,f=a.qd,g=a.o>a.ja-262?a.o-(a.ja-262):0,h=a.window,k=a.Xa,l=a.Ga,n=a.o+258,p=h[d+e-1],r=h[d+e];a.xa>=a.kd&&(c>>=2);f>a.u&&(f=a.u);do{var t=b;if(h[t+e]===r&&h[t+e-1]===p&&h[t]===h[d]&&h[++t]===h[d+1]){d+=2;for(t++;h[++d]===h[++t]&&h[++d]===h[++t]&&h[++d]===h[++t]&&h[++d]===h[++t]&&h[++d]===h[++t]&&h[++d]===h[++t]&&h[++d]===h[++t]&&h[++d]===h[++t]&&d<n;);t=258-(n-d);d=n-258;if(t>e){a.ub=b;e=t;if(t>=f)break;p=h[d+e-1];r=h[d+e]}}}while((b=l[b&k])>g&&0!==--c);return e<=
a.u?e:a.u}
function hk(a){var b=a.ja,c;do{var d=a.Kd-a.u-a.o;if(a.o>=b+(b-262)){M.mb(a.window,a.window,b,b,0);a.ub-=b;a.o-=b;a.va-=b;var e=c=a.cc;do{var f=a.head[--e];a.head[e]=f>=b?f-b:0}while(--c);e=c=b;do f=a.Ga[--e],a.Ga[e]=f>=b?f-b:0;while(--c);d+=b}if(0===a.I.ka)break;e=a.I;c=a.window;f=a.o+a.u;var g=e.ka;g>d&&(g=d);0===g?c=0:(e.ka-=g,M.mb(c,e.input,e.hb,g,f),1===e.state.wrap?e.H=nj(e.H,c,g,f):2===e.state.wrap&&(e.H=oj(e.H,c,g,f)),e.hb+=g,e.kb+=g,c=g);a.u+=c;if(3<=a.u+a.sa)for(d=a.o-a.sa,a.K=a.window[d],
a.K=(a.K<<a.Ka^a.window[d+1])&a.Ja;a.sa&&!(a.K=(a.K<<a.Ka^a.window[d+3-1])&a.Ja,a.Ga[d&a.Xa]=a.head[a.K],a.head[a.K]=d,d++,a.sa--,3>a.u+a.sa););}while(262>a.u&&0!==a.I.ka)}
function ik(a,b){for(var c;;){if(262>a.u){hk(a);if(262>a.u&&0===b)return 1;if(0===a.u)break}c=0;3<=a.u&&(a.K=(a.K<<a.Ka^a.window[a.o+3-1])&a.Ja,c=a.Ga[a.o&a.Xa]=a.head[a.K],a.head[a.K]=a.o);0!==c&&a.o-c<=a.ja-262&&(a.P=gk(a,c));if(3<=a.P)if(c=ak(a,a.o-a.ub,a.P-3),a.u-=a.P,a.P<=a.Hc&&3<=a.u){a.P--;do a.o++,a.K=(a.K<<a.Ka^a.window[a.o+3-1])&a.Ja,a.Ga[a.o&a.Xa]=a.head[a.K],a.head[a.K]=a.o;while(0!==--a.P);a.o++}else a.o+=a.P,a.P=0,a.K=a.window[a.o],a.K=(a.K<<a.Ka^a.window[a.o+1])&a.Ja;else c=ak(a,0,
a.window[a.o]),a.u--,a.o++;if(c&&(ek(a,!1),0===a.I.M))return 1}a.sa=2>a.o?a.o:2;return 4===b?(ek(a,!0),0===a.I.M?3:4):a.ya&&(ek(a,!1),0===a.I.M)?1:2}
function jk(a,b){for(var c,d;;){if(262>a.u){hk(a);if(262>a.u&&0===b)return 1;if(0===a.u)break}c=0;3<=a.u&&(a.K=(a.K<<a.Ka^a.window[a.o+3-1])&a.Ja,c=a.Ga[a.o&a.Xa]=a.head[a.K],a.head[a.K]=a.o);a.xa=a.P;a.td=a.ub;a.P=2;0!==c&&a.xa<a.Hc&&a.o-c<=a.ja-262&&(a.P=gk(a,c),5>=a.P&&(1===a.strategy||3===a.P&&4096<a.o-a.ub)&&(a.P=2));if(3<=a.xa&&a.P<=a.xa){d=a.o+a.u-3;c=ak(a,a.o-1-a.td,a.xa-3);a.u-=a.xa-1;a.xa-=2;do++a.o<=d&&(a.K=(a.K<<a.Ka^a.window[a.o+3-1])&a.Ja,a.Ga[a.o&a.Xa]=a.head[a.K],a.head[a.K]=a.o);
while(0!==--a.xa);a.fb=0;a.P=2;a.o++;if(c&&(ek(a,!1),0===a.I.M))return 1}else if(a.fb){if((c=ak(a,0,a.window[a.o-1]))&&ek(a,!1),a.o++,a.u--,0===a.I.M)return 1}else a.fb=1,a.o++,a.u--}a.fb&&(ak(a,0,a.window[a.o-1]),a.fb=0);a.sa=2>a.o?a.o:2;return 4===b?(ek(a,!0),0===a.I.M?3:4):a.ya&&(ek(a,!1),0===a.I.M)?1:2}
function kk(a,b){for(var c,d,e,f=a.window;;){if(258>=a.u){hk(a);if(258>=a.u&&0===b)return 1;if(0===a.u)break}a.P=0;if(3<=a.u&&0<a.o&&(d=a.o-1,c=f[d],c===f[++d]&&c===f[++d]&&c===f[++d])){for(e=a.o+258;c===f[++d]&&c===f[++d]&&c===f[++d]&&c===f[++d]&&c===f[++d]&&c===f[++d]&&c===f[++d]&&c===f[++d]&&d<e;);a.P=258-(e-d);a.P>a.u&&(a.P=a.u)}3<=a.P?(c=ak(a,1,a.P-3),a.u-=a.P,a.o+=a.P,a.P=0):(c=ak(a,0,a.window[a.o]),a.u--,a.o++);if(c&&(ek(a,!1),0===a.I.M))return 1}a.sa=0;return 4===b?(ek(a,!0),0===a.I.M?3:4):
a.ya&&(ek(a,!1),0===a.I.M)?1:2}
function lk(a,b){for(var c;;){if(0===a.u&&(hk(a),0===a.u)){if(0===b)return 1;break}a.P=0;c=ak(a,0,a.window[a.o]);a.u--;a.o++;if(c&&(ek(a,!1),0===a.I.M))return 1}a.sa=0;return 4===b?(ek(a,!0),0===a.I.M?3:4):a.ya&&(ek(a,!1),0===a.I.M)?1:2}
function mk(a,b,c,d,e){this.ke=a;this.xe=b;this.Be=c;this.we=d;this.ee=e}
var nk;nk=[new mk(0,0,0,0,function(a,b){var c=65535;for(c>a.za-5&&(c=a.za-5);;){if(1>=a.u){hk(a);if(0===a.u&&0===b)return 1;if(0===a.u)break}a.o+=a.u;a.u=0;var d=a.va+c;if(0===a.o||a.o>=d)if(a.u=a.o-d,a.o=d,ek(a,!1),0===a.I.M)return 1;if(a.o-a.va>=a.ja-262&&(ek(a,!1),0===a.I.M))return 1}a.sa=0;if(4===b)return ek(a,!0),0===a.I.M?3:4;a.o>a.va&&ek(a,!1);return 1}),
new mk(4,4,8,4,ik),new mk(4,5,16,8,ik),new mk(4,6,32,32,ik),new mk(4,4,16,16,jk),new mk(8,16,32,32,jk),new mk(8,16,128,128,jk),new mk(8,32,128,256,jk),new mk(32,128,258,1024,jk),new mk(32,258,258,4096,jk)];
function ok(){this.I=null;this.status=0;this.W=null;this.wrap=this.pending=this.Lb=this.za=0;this.G=null;this.Ca=0;this.method=8;this.sb=-1;this.Xa=this.Uc=this.ja=0;this.window=null;this.Kd=0;this.head=this.Ga=null;this.qd=this.kd=this.strategy=this.level=this.Hc=this.pd=this.xa=this.u=this.ub=this.o=this.fb=this.td=this.P=this.va=this.Ka=this.Ja=this.Cc=this.cc=this.K=0;this.ra=new M.Ha(1146);this.bb=new M.Ha(122);this.ha=new M.Ha(78);ck(this.ra);ck(this.bb);ck(this.ha);this.Yc=this.Yb=this.dc=
null;this.Ia=new M.Ha(16);this.X=new M.Ha(573);ck(this.X);this.qb=this.La=0;this.depth=new M.Ha(573);ck(this.depth);this.fa=this.la=this.sa=this.matches=this.zb=this.Na=this.Db=this.ya=this.Ib=this.Fc=0}
function pk(a,b){if(!a||!a.state||5<b||0>b)return a?bk(a,-2):-2;var c=a.state;if(!a.output||!a.input&&0!==a.ka||666===c.status&&4!==b)return bk(a,0===a.M?-5:-2);c.I=a;var d=c.sb;c.sb=b;if(42===c.status)if(2===c.wrap)a.H=0,P(c,31),P(c,139),P(c,8),c.G?(P(c,(c.G.text?1:0)+(c.G.Ra?2:0)+(c.G.extra?4:0)+(c.G.name?8:0)+(c.G.comment?16:0)),P(c,c.G.time&255),P(c,c.G.time>>8&255),P(c,c.G.time>>16&255),P(c,c.G.time>>24&255),P(c,9===c.level?2:2<=c.strategy||2>c.level?4:0),P(c,c.G.os&255),c.G.extra&&c.G.extra.length&&
(P(c,c.G.extra.length&255),P(c,c.G.extra.length>>8&255)),c.G.Ra&&(a.H=oj(a.H,c.W,c.pending,0)),c.Ca=0,c.status=69):(P(c,0),P(c,0),P(c,0),P(c,0),P(c,0),P(c,9===c.level?2:2<=c.strategy||2>c.level?4:0),P(c,3),c.status=113);else{var e=8+(c.Uc-8<<4)<<8;e|=(2<=c.strategy||2>c.level?0:6>c.level?1:6===c.level?2:3)<<6;0!==c.o&&(e|=32);c.status=113;fk(c,e+(31-e%31));0!==c.o&&(fk(c,a.H>>>16),fk(c,a.H&65535));a.H=1}if(69===c.status)if(c.G.extra){for(e=c.pending;c.Ca<(c.G.extra.length&65535)&&(c.pending!==c.za||
(c.G.Ra&&c.pending>e&&(a.H=oj(a.H,c.W,c.pending-e,e)),dk(a),e=c.pending,c.pending!==c.za));)P(c,c.G.extra[c.Ca]&255),c.Ca++;c.G.Ra&&c.pending>e&&(a.H=oj(a.H,c.W,c.pending-e,e));c.Ca===c.G.extra.length&&(c.Ca=0,c.status=73)}else c.status=73;if(73===c.status)if(c.G.name){e=c.pending;do{if(c.pending===c.za&&(c.G.Ra&&c.pending>e&&(a.H=oj(a.H,c.W,c.pending-e,e)),dk(a),e=c.pending,c.pending===c.za)){var f=1;break}f=c.Ca<c.G.name.length?c.G.name.charCodeAt(c.Ca++)&255:0;P(c,f)}while(0!==f);c.G.Ra&&c.pending>
e&&(a.H=oj(a.H,c.W,c.pending-e,e));0===f&&(c.Ca=0,c.status=91)}else c.status=91;if(91===c.status)if(c.G.comment){e=c.pending;do{if(c.pending===c.za&&(c.G.Ra&&c.pending>e&&(a.H=oj(a.H,c.W,c.pending-e,e)),dk(a),e=c.pending,c.pending===c.za)){f=1;break}f=c.Ca<c.G.comment.length?c.G.comment.charCodeAt(c.Ca++)&255:0;P(c,f)}while(0!==f);c.G.Ra&&c.pending>e&&(a.H=oj(a.H,c.W,c.pending-e,e));0===f&&(c.status=103)}else c.status=103;103===c.status&&(c.G.Ra?(c.pending+2>c.za&&dk(a),c.pending+2<=c.za&&(P(c,a.H&
255),P(c,a.H>>8&255),a.H=0,c.status=113)):c.status=113);if(0!==c.pending){if(dk(a),0===a.M)return c.sb=-1,0}else if(0===a.ka&&(b<<1)-(4<b?9:0)<=(d<<1)-(4<d?9:0)&&4!==b)return bk(a,-5);if(666===c.status&&0!==a.ka)return bk(a,-5);if(0!==a.ka||0!==c.u||0!==b&&666!==c.status){d=2===c.strategy?lk(c,b):3===c.strategy?kk(c,b):nk[c.level].ee(c,b);if(3===d||4===d)c.status=666;if(1===d||3===d)return 0===a.M&&(c.sb=-1),0;if(2===d&&(1===b?(Lj(c,2,3),Mj(c,256,zj),16===c.fa?(Kj(c,c.la),c.la=0,c.fa=0):8<=c.fa&&
(c.W[c.pending++]=c.la&255,c.la>>=8,c.fa-=8)):5!==b&&(Lj(c,0,3),Rj(c,0,0),3===b&&(ck(c.head),0===c.u&&(c.o=0,c.va=0,c.sa=0))),dk(a),0===a.M))return c.sb=-1,0}if(4!==b)return 0;if(0>=c.wrap)return 1;2===c.wrap?(P(c,a.H&255),P(c,a.H>>8&255),P(c,a.H>>16&255),P(c,a.H>>24&255),P(c,a.kb&255),P(c,a.kb>>8&255),P(c,a.kb>>16&255),P(c,a.kb>>24&255)):(fk(c,a.H>>>16),fk(c,a.H&65535));dk(a);0<c.wrap&&(c.wrap=-c.wrap);return 0!==c.pending?0:1}
;var qk={};qk=function(){this.input=null;this.kb=this.ka=this.hb=0;this.output=null;this.Sc=this.M=this.wb=0;this.msg="";this.state=null;this.uc=2;this.H=0};var rk=Object.prototype.toString;
function sk(a){if(!(this instanceof sk))return new sk(a);a=this.options=M.assign({level:-1,method:8,chunkSize:16384,windowBits:15,memLevel:8,strategy:0,to:""},a||{});a.raw&&0<a.windowBits?a.windowBits=-a.windowBits:a.gzip&&0<a.windowBits&&16>a.windowBits&&(a.windowBits+=16);this.err=0;this.msg="";this.ended=!1;this.chunks=[];this.I=new qk;this.I.M=0;var b=this.I;var c=a.level,d=a.method,e=a.windowBits,f=a.memLevel,g=a.strategy;if(b){var h=1;-1===c&&(c=6);0>e?(h=0,e=-e):15<e&&(h=2,e-=16);if(1>f||9<
f||8!==d||8>e||15<e||0>c||9<c||0>g||4<g)b=bk(b,-2);else{8===e&&(e=9);var k=new ok;b.state=k;k.I=b;k.wrap=h;k.G=null;k.Uc=e;k.ja=1<<k.Uc;k.Xa=k.ja-1;k.Cc=f+7;k.cc=1<<k.Cc;k.Ja=k.cc-1;k.Ka=~~((k.Cc+3-1)/3);k.window=new M.lb(2*k.ja);k.head=new M.Ha(k.cc);k.Ga=new M.Ha(k.ja);k.Ib=1<<f+6;k.za=4*k.Ib;k.W=new M.lb(k.za);k.Db=1*k.Ib;k.Fc=3*k.Ib;k.level=c;k.strategy=g;k.method=d;if(b&&b.state){b.kb=b.Sc=0;b.uc=2;c=b.state;c.pending=0;c.Lb=0;0>c.wrap&&(c.wrap=-c.wrap);c.status=c.wrap?42:113;b.H=2===c.wrap?
0:1;c.sb=0;if(!Zj){d=Array(16);for(f=g=0;28>f;f++)for(Dj[f]=g,e=0;e<1<<vj[f];e++)Cj[g++]=f;Cj[g-1]=f;for(f=g=0;16>f;f++)for(Ej[f]=g,e=0;e<1<<wj[f];e++)Bj[g++]=f;for(g>>=7;30>f;f++)for(Ej[f]=g<<7,e=0;e<1<<wj[f]-7;e++)Bj[256+g++]=f;for(e=0;15>=e;e++)d[e]=0;for(e=0;143>=e;)zj[2*e+1]=8,e++,d[8]++;for(;255>=e;)zj[2*e+1]=9,e++,d[9]++;for(;279>=e;)zj[2*e+1]=7,e++,d[7]++;for(;287>=e;)zj[2*e+1]=8,e++,d[8]++;Oj(zj,287,d);for(e=0;30>e;e++)Aj[2*e+1]=5,Aj[2*e]=Nj(e,5);Gj=new Fj(zj,vj,257,286,15);Hj=new Fj(Aj,
wj,0,30,15);Ij=new Fj([],xj,0,19,7);Zj=!0}c.dc=new Jj(c.ra,Gj);c.Yb=new Jj(c.bb,Hj);c.Yc=new Jj(c.ha,Ij);c.la=0;c.fa=0;Pj(c);c=0}else c=bk(b,-2);0===c&&(b=b.state,b.Kd=2*b.ja,ck(b.head),b.Hc=nk[b.level].xe,b.kd=nk[b.level].ke,b.qd=nk[b.level].Be,b.pd=nk[b.level].we,b.o=0,b.va=0,b.u=0,b.sa=0,b.P=b.xa=2,b.fb=0,b.K=0);b=c}}else b=-2;if(0!==b)throw Error(tj[b]);a.header&&(b=this.I)&&b.state&&2===b.state.wrap&&(b.state.G=a.header);if(a.dictionary){var l;"string"===typeof a.dictionary?l=mj(a.dictionary):
"[object ArrayBuffer]"===rk.call(a.dictionary)?l=new Uint8Array(a.dictionary):l=a.dictionary;a=this.I;f=l;g=f.length;if(a&&a.state)if(l=a.state,b=l.wrap,2===b||1===b&&42!==l.status||l.u)b=-2;else{1===b&&(a.H=nj(a.H,f,g,0));l.wrap=0;g>=l.ja&&(0===b&&(ck(l.head),l.o=0,l.va=0,l.sa=0),c=new M.lb(l.ja),M.mb(c,f,g-l.ja,l.ja,0),f=c,g=l.ja);c=a.ka;d=a.hb;e=a.input;a.ka=g;a.hb=0;a.input=f;for(hk(l);3<=l.u;){f=l.o;g=l.u-2;do l.K=(l.K<<l.Ka^l.window[f+3-1])&l.Ja,l.Ga[f&l.Xa]=l.head[l.K],l.head[l.K]=f,f++;while(--g);
l.o=f;l.u=2;hk(l)}l.o+=l.u;l.va=l.o;l.sa=l.u;l.u=0;l.P=l.xa=2;l.fb=0;a.hb=d;a.input=e;a.ka=c;l.wrap=b;b=0}else b=-2;if(0!==b)throw Error(tj[b]);this.Sf=!0}}
sk.prototype.push=function(a,b){var c=this.I,d=this.options.chunkSize;if(this.ended)return!1;var e=b===~~b?b:!0===b?4:0;"string"===typeof a?c.input=mj(a):"[object ArrayBuffer]"===rk.call(a)?c.input=new Uint8Array(a):c.input=a;c.hb=0;c.ka=c.input.length;do{0===c.M&&(c.output=new M.lb(d),c.wb=0,c.M=d);a=pk(c,e);if(1!==a&&0!==a)return tk(this,a),this.ended=!0,!1;if(0===c.M||0===c.ka&&(4===e||2===e))if("string"===this.options.to){var f=M.Rc(c.output,c.wb);b=f;f=f.length;if(65537>f&&(b.subarray&&lj||!b.subarray))b=
String.fromCharCode.apply(null,M.Rc(b,f));else{for(var g="",h=0;h<f;h++)g+=String.fromCharCode(b[h]);b=g}this.chunks.push(b)}else b=M.Rc(c.output,c.wb),this.chunks.push(b)}while((0<c.ka||0===c.M)&&1!==a);if(4===e)return(c=this.I)&&c.state?(d=c.state.status,42!==d&&69!==d&&73!==d&&91!==d&&103!==d&&113!==d&&666!==d?a=bk(c,-2):(c.state=null,a=113===d?bk(c,-3):0)):a=-2,tk(this,a),this.ended=!0,0===a;2===e&&(tk(this,0),c.M=0);return!0};
function tk(a,b){0===b&&(a.result="string"===a.options.to?a.chunks.join(""):M.hd(a.chunks));a.chunks=[];a.err=b;a.msg=a.I.msg}
function uk(a,b){b=b||{};b.gzip=!0;b=new sk(b);b.push(a,!0);if(b.err)throw b.msg||tj[b.err];return b.result}
;function vk(a){if(!a)return null;a=a.privateDoNotAccessOrElseTrustedResourceUrlWrappedValue;var b;a?b=Fb(a):b=null;return b}
;function wk(a){return Fb(null===a?"null":void 0===a?"undefined":a)}
;function xk(a){this.name=a}
;var yk=new xk("rawColdConfigGroup");var zk=new xk("rawHotConfigGroup");function Ak(a){this.F=I(a)}
w(Ak,K);var Bk=new xk("continuationCommand");var Ck=new xk("webCommandMetadata");var Dk=new xk("signalServiceEndpoint");var Ek={Ef:"EMBEDDED_PLAYER_MODE_UNKNOWN",Bf:"EMBEDDED_PLAYER_MODE_DEFAULT",Df:"EMBEDDED_PLAYER_MODE_PFP",Cf:"EMBEDDED_PLAYER_MODE_PFL"};var Fk=new xk("feedbackEndpoint");function Gk(a){this.F=I(a)}
w(Gk,K);Gk.prototype.setTrackingParams=function(a){if(null!=a)if("string"===typeof a)a=a?new ff(a,cf):df||(df=new ff(null,cf));else if(a.constructor!==ff)if(bf(a))a=a.length?new ff(new Uint8Array(a),cf):df||(df=new ff(null,cf));else throw Error();return jg(this,1,a)};var Hk=new xk("webPlayerShareEntityServiceEndpoint");var Ik=new xk("playlistEditEndpoint");var Jk=new xk("modifyChannelNotificationPreferenceEndpoint");var Kk=new xk("unsubscribeEndpoint");var Lk=new xk("subscribeEndpoint");function Mk(){var a=Nk;E("yt.ads.biscotti.getId_")||D("yt.ads.biscotti.getId_",a)}
function Ok(a){D("yt.ads.biscotti.lastId_",a)}
;function Pk(a,b){1<b.length?a[b[0]]=b[1]:1===b.length&&Object.assign(a,b[0])}
;var Qk=C.window,Rk,Sk,Tk=(null==Qk?void 0:null==(Rk=Qk.yt)?void 0:Rk.config_)||(null==Qk?void 0:null==(Sk=Qk.ytcfg)?void 0:Sk.data_)||{};D("yt.config_",Tk);function Uk(){Pk(Tk,arguments)}
function S(a,b){return a in Tk?Tk[a]:b}
function Vk(a){var b=Tk.EXPERIMENT_FLAGS;return b?b[a]:void 0}
;var Wk=[];function Xk(a){Wk.forEach(function(b){return b(a)})}
function Yk(a){return a&&window.yterr?function(){try{return a.apply(this,arguments)}catch(b){Zk(b)}}:a}
function Zk(a){var b=E("yt.logging.errors.log");b?b(a,"ERROR",void 0,void 0,void 0,void 0,void 0):(b=S("ERRORS",[]),b.push([a,"ERROR",void 0,void 0,void 0,void 0,void 0]),Uk("ERRORS",b));Xk(a)}
function $k(a,b,c,d,e){var f=E("yt.logging.errors.log");f?f(a,"WARNING",b,c,d,void 0,e):(f=S("ERRORS",[]),f.push([a,"WARNING",b,c,d,void 0,e]),Uk("ERRORS",f))}
;var al=/^[\w.]*$/,bl={q:!0,search_query:!0};function cl(a,b){b=a.split(b);for(var c={},d=0,e=b.length;d<e;d++){var f=b[d].split("=");if(1===f.length&&f[0]||2===f.length)try{var g=dl(f[0]||""),h=dl(f[1]||"");if(g in c){var k=c[g];Array.isArray(k)?lb(k,h):c[g]=[k,h]}else c[g]=h}catch(r){var l=r,n=f[0],p=String(cl);l.args=[{key:n,value:f[1],query:a,method:el===p?"unchanged":p}];bl.hasOwnProperty(n)||$k(l)}}return c}
var el=String(cl);function fl(a){var b=[];mb(a,function(c,d){var e=encodeURIComponent(String(d));c=Array.isArray(c)?c:[c];fb(c,function(f){""==f?b.push(e):b.push(e+"="+encodeURIComponent(String(f)))})});
return b.join("&")}
function gl(a){"?"===a.charAt(0)&&(a=a.substring(1));return cl(a,"&")}
function hl(a){return-1!==a.indexOf("?")?(a=(a||"").split("#")[0],a=a.split("?",2),gl(1<a.length?a[1]:a[0])):{}}
function il(a,b,c){var d=a.split("#",2);a=d[0];d=1<d.length?"#"+d[1]:"";var e=a.split("?",2);a=e[0];e=gl(e[1]||"");for(var f in b)!c&&null!==e&&f in e||(e[f]=b[f]);return Gc(a,e)+d}
function jl(a){if(!b)var b=window.location.href;var c=Ac(1,a),d=Bc(a);c&&d?(a=a.match(yc),b=b.match(yc),a=a[3]==b[3]&&a[1]==b[1]&&a[4]==b[4]):a=d?Bc(b)===d&&(Number(Ac(4,b))||null)===(Number(Ac(4,a))||null):!0;return a}
function dl(a){return a&&a.match(al)?a:decodeURIComponent(a.replace(/\+/g," "))}
;function kl(a){var b=ll;a=void 0===a?E("yt.ads.biscotti.lastId_")||"":a;var c=Object,d=c.assign,e={};e.dt=qi;e.flash="0";a:{try{var f=b.h.top.location.href}catch(Ga){f=2;break a}f=f?f===b.i.location.href?0:1:2}e=(e.frm=f,e);try{e.u_tz=-(new Date).getTimezoneOffset();var g=void 0===g?ii:g;try{var h=g.history.length}catch(Ga){h=0}e.u_his=h;var k;e.u_h=null==(k=ii.screen)?void 0:k.height;var l;e.u_w=null==(l=ii.screen)?void 0:l.width;var n;e.u_ah=null==(n=ii.screen)?void 0:n.availHeight;var p;e.u_aw=
null==(p=ii.screen)?void 0:p.availWidth;var r;e.u_cd=null==(r=ii.screen)?void 0:r.colorDepth}catch(Ga){}h=b.h;try{var t=h.screenX;var x=h.screenY}catch(Ga){}try{var z=h.outerWidth;var y=h.outerHeight}catch(Ga){}try{var J=h.innerWidth;var G=h.innerHeight}catch(Ga){}try{var R=h.screenLeft;var N=h.screenTop}catch(Ga){}try{J=h.innerWidth,G=h.innerHeight}catch(Ga){}try{var da=h.screen.availWidth;var Ca=h.screen.availTop}catch(Ga){}t=[R,N,t,x,da,Ca,z,y,J,G];try{var O=(b.h.top||window).document,ea="CSS1Compat"==
O.compatMode?O.documentElement:O.body;var ka=(new Qd(ea.clientWidth,ea.clientHeight)).round()}catch(Ga){ka=new Qd(-12245933,-12245933)}O=ka;ka={};var pa=void 0===pa?C:pa;ea=new wi;"SVGElement"in pa&&"createElementNS"in pa.document&&ea.set(0);x=ni();x["allow-top-navigation-by-user-activation"]&&ea.set(1);x["allow-popups-to-escape-sandbox"]&&ea.set(2);pa.crypto&&pa.crypto.subtle&&ea.set(3);"TextDecoder"in pa&&"TextEncoder"in pa&&ea.set(4);pa=xi(ea);ka.bc=pa;ka.bih=O.height;ka.biw=O.width;ka.brdim=t.join();
b=b.i;b=(ka.vis=b.prerendering?3:{visible:1,hidden:2,prerender:3,preview:4,unloaded:5}[b.visibilityState||b.webkitVisibilityState||b.mozVisibilityState||""]||0,ka.wgl=!!ii.WebGLRenderingContext,ka);c=d.call(c,e,b);c.ca_type="image";a&&(c.bid=a);return c}
var ll=new function(){var a=window.document;this.h=window;this.i=a};
D("yt.ads_.signals_.getAdSignalsString",function(a){return fl(kl(a))});Za();navigator.userAgent.indexOf(" (CrKey ");var ml="XMLHttpRequest"in C?function(){return new XMLHttpRequest}:null;
function nl(){if(!ml)return null;var a=ml();return"open"in a?a:null}
function ol(a){switch(a&&"status"in a?a.status:-1){case 200:case 201:case 202:case 203:case 204:case 205:case 206:case 304:return!0;default:return!1}}
;function pl(a,b){"function"===typeof a&&(a=Yk(a));return window.setTimeout(a,b)}
;var ql="client_dev_domain client_dev_expflag client_dev_regex_map client_dev_root_url client_rollout_override expflag forcedCapability jsfeat jsmode mods".split(" ");[].concat(ma(ql),["client_dev_set_cookie"]);function T(a){a=rl(a);return"string"===typeof a&&"false"===a?!1:!!a}
function U(a,b){a=rl(a);return void 0===a&&void 0!==b?b:Number(a||0)}
function rl(a){return S("EXPERIMENT_FLAGS",{})[a]}
function sl(){for(var a=[],b=S("EXPERIMENTS_FORCED_FLAGS",{}),c=v(Object.keys(b)),d=c.next();!d.done;d=c.next())d=d.value,a.push({key:d,value:String(b[d])});c=S("EXPERIMENT_FLAGS",{});d=v(Object.keys(c));for(var e=d.next();!e.done;e=d.next())e=e.value,e.startsWith("force_")&&void 0===b[e]&&a.push({key:e,value:String(c[e])});return a}
;var tl={Authorization:"AUTHORIZATION","X-Goog-EOM-Visitor-Id":"EOM_VISITOR_DATA","X-Goog-Visitor-Id":"SANDBOXED_VISITOR_ID","X-Youtube-Domain-Admin-State":"DOMAIN_ADMIN_STATE","X-Youtube-Chrome-Connected":"CHROME_CONNECTED_HEADER","X-YouTube-Client-Name":"INNERTUBE_CONTEXT_CLIENT_NAME","X-YouTube-Client-Version":"INNERTUBE_CONTEXT_CLIENT_VERSION","X-YouTube-Delegation-Context":"INNERTUBE_CONTEXT_SERIALIZED_DELEGATION_CONTEXT","X-YouTube-Device":"DEVICE","X-Youtube-Identity-Token":"ID_TOKEN","X-YouTube-Page-CL":"PAGE_CL",
"X-YouTube-Page-Label":"PAGE_BUILD_LABEL","X-YouTube-Variants-Checksum":"VARIANTS_CHECKSUM","X-Goog-AuthUser":"SESSION_INDEX","X-Goog-PageId":"DELEGATED_SESSION_ID"},ul="app debugcss debugjs expflag force_ad_params force_ad_encrypted force_viral_ad_response_params forced_experiments innertube_snapshots innertube_goldens internalcountrycode internalipoverride absolute_experiments conditional_experiments sbb sr_bns_address".split(" ").concat(ma(ql)),vl=!1;
function wl(a,b,c,d,e,f,g,h){function k(){4===(l&&"readyState"in l?l.readyState:0)&&b&&Yk(b)(l)}
c=void 0===c?"GET":c;d=void 0===d?"":d;h=void 0===h?!1:h;var l=nl();if(!l)return null;"onloadend"in l?l.addEventListener("loadend",k,!1):l.onreadystatechange=k;T("debug_forward_web_query_parameters")&&(a=xl(a));l.open(c,a,!0);f&&(l.responseType=f);g&&(l.withCredentials=!0);c="POST"===c&&(void 0===window.FormData||!(d instanceof FormData));if(e=yl(a,e))for(var n in e)l.setRequestHeader(n,e[n]),"content-type"===n.toLowerCase()&&(c=!1);c&&l.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
if(h&&"setAttributionReporting"in XMLHttpRequest.prototype){a={eventSourceEligible:!0,triggerEligible:!1};try{l.setAttributionReporting(a)}catch(p){$k(p)}}l.send(d);return l}
function yl(a,b){b=void 0===b?{}:b;var c=jl(a),d=T("web_ajax_ignore_global_headers_if_set"),e;for(e in tl){var f=S(tl[e]),g="X-Goog-AuthUser"===e||"X-Goog-PageId"===e;"X-Goog-Visitor-Id"!==e||f||(f=S("VISITOR_DATA"));!f||!c&&Bc(a)||d&&void 0!==b[e]||"TVHTML5_UNPLUGGED"===S("INNERTUBE_CLIENT_NAME")&&g||(b[e]=f)}"X-Goog-EOM-Visitor-Id"in b&&"X-Goog-Visitor-Id"in b&&delete b["X-Goog-Visitor-Id"];if(c||!Bc(a))b["X-YouTube-Utc-Offset"]=String(-(new Date).getTimezoneOffset());if(c||!Bc(a)){try{var h=(new Intl.DateTimeFormat).resolvedOptions().timeZone}catch(k){}h&&
(b["X-YouTube-Time-Zone"]=h)}document.location.hostname.endsWith("youtubeeducation.com")||!c&&Bc(a)||(b["X-YouTube-Ad-Signals"]=fl(kl()));return b}
function zl(a,b){b.method="POST";b.postParams||(b.postParams={});return Al(a,b)}
function Al(a,b){var c=b.format||"JSON";a=Bl(a,b);var d=Cl(a,b),e=!1,f=Dl(a,function(k){if(!e){e=!0;h&&window.clearTimeout(h);var l=ol(k),n=null,p=400<=k.status&&500>k.status,r=500<=k.status&&600>k.status;if(l||p||r)n=El(a,c,k,b.convertToSafeHtml);l&&(l=Fl(c,k,n));n=n||{};p=b.context||C;l?b.onSuccess&&b.onSuccess.call(p,k,n):b.onError&&b.onError.call(p,k,n);b.onFinish&&b.onFinish.call(p,k,n)}},b.method,d,b.headers,b.responseType,b.withCredentials);
d=b.timeout||0;if(b.onTimeout&&0<d){var g=b.onTimeout;var h=pl(function(){e||(e=!0,f.abort(),window.clearTimeout(h),g.call(b.context||C,f))},d)}return f}
function Bl(a,b){b.includeDomain&&(a=document.location.protocol+"//"+document.location.hostname+(document.location.port?":"+document.location.port:"")+a);var c=S("XSRF_FIELD_NAME");if(b=b.urlParams)b[c]&&delete b[c],a=il(a,b||{},!0);return a}
function Cl(a,b){var c=S("XSRF_FIELD_NAME"),d=S("XSRF_TOKEN"),e=b.postBody||"",f=b.postParams,g=S("XSRF_FIELD_NAME"),h;b.headers&&(h=b.headers["Content-Type"]);b.excludeXsrf||Bc(a)&&!b.withCredentials&&Bc(a)!==document.location.hostname||"POST"!==b.method||h&&"application/x-www-form-urlencoded"!==h||b.postParams&&b.postParams[g]||(f||(f={}),f[c]=d);(T("ajax_parse_query_data_only_when_filled")&&f&&0<Object.keys(f).length||f)&&"string"===typeof e&&(e=gl(e),wb(e,f),e=b.postBodyFormat&&"JSON"===b.postBodyFormat?
JSON.stringify(e):Fc(e));f=e||f&&!pb(f);!vl&&f&&"POST"!==b.method&&(vl=!0,Zk(Error("AJAX request with postData should use POST")));return e}
function El(a,b,c,d){var e=null;switch(b){case "JSON":try{var f=c.responseText}catch(g){throw d=Error("Error reading responseText"),d.params=a,$k(d),g;}a=c.getResponseHeader("Content-Type")||"";f&&0<=a.indexOf("json")&&(")]}'\n"===f.substring(0,5)&&(f=f.substring(5)),e=JSON.parse(f));break;case "XML":if(a=(a=c.responseXML)?Gl(a):null)e={},fb(a.getElementsByTagName("*"),function(g){e[g.tagName]=Hl(g)})}d&&Il(e);
return e}
function Il(a){if(Ra(a))for(var b in a){var c;(c="html_content"===b)||(c=b.length-5,c=0<=c&&b.indexOf("_html",c)==c);if(c){c=b;var d=a[b],e=yb();d=e?e.createHTML(d):d;a[c]=new Tb(d)}else Il(a[b])}}
function Fl(a,b,c){if(b&&204===b.status)return!0;switch(a){case "JSON":return!!c;case "XML":return 0===Number(c&&c.return_code);case "RAW":return!0;default:return!!c}}
function Gl(a){return a?(a=("responseXML"in a?a.responseXML:a).getElementsByTagName("root"))&&0<a.length?a[0]:null:null}
function Hl(a){var b="";fb(a.childNodes,function(c){b+=c.nodeValue});
return b}
function xl(a){var b=window.location.search,c=Bc(a);T("debug_handle_relative_url_for_query_forward_killswitch")||!c&&jl(a)&&(c=document.location.hostname);var d=zc(Ac(5,a));d=(c=c&&(c.endsWith("youtube.com")||c.endsWith("youtube-nocookie.com")))&&d&&d.startsWith("/api/");if(!c||d)return a;var e=gl(b),f={};fb(ul,function(g){e[g]&&(f[g]=e[g])});
return il(a,f||{},!1)}
var Dl=wl;var Jl=[{Ic:function(a){return"Cannot read property '"+a.key+"'"},
fc:{Error:[{regexp:/(Permission denied) to access property "([^']+)"/,groups:["reason","key"]}],TypeError:[{regexp:/Cannot read property '([^']+)' of (null|undefined)/,groups:["key","value"]},{regexp:/\u65e0\u6cd5\u83b7\u53d6\u672a\u5b9a\u4e49\u6216 (null|undefined) \u5f15\u7528\u7684\u5c5e\u6027\u201c([^\u201d]+)\u201d/,groups:["value","key"]},{regexp:/\uc815\uc758\ub418\uc9c0 \uc54a\uc74c \ub610\ub294 (null|undefined) \ucc38\uc870\uc778 '([^']+)' \uc18d\uc131\uc744 \uac00\uc838\uc62c \uc218 \uc5c6\uc2b5\ub2c8\ub2e4./,
groups:["value","key"]},{regexp:/No se puede obtener la propiedad '([^']+)' de referencia nula o sin definir/,groups:["key"]},{regexp:/Unable to get property '([^']+)' of (undefined or null) reference/,groups:["key","value"]},{regexp:/(null) is not an object \(evaluating '(?:([^.]+)\.)?([^']+)'\)/,groups:["value","base","key"]}]}},{Ic:function(a){return"Cannot call '"+a.key+"'"},
fc:{TypeError:[{regexp:/(?:([^ ]+)?\.)?([^ ]+) is not a function/,groups:["base","key"]},{regexp:/([^ ]+) called on (null or undefined)/,groups:["key","value"]},{regexp:/Object (.*) has no method '([^ ]+)'/,groups:["base","key"]},{regexp:/Object doesn't support property or method '([^ ]+)'/,groups:["key"]},{regexp:/\u30aa\u30d6\u30b8\u30a7\u30af\u30c8\u306f '([^']+)' \u30d7\u30ed\u30d1\u30c6\u30a3\u307e\u305f\u306f\u30e1\u30bd\u30c3\u30c9\u3092\u30b5\u30dd\u30fc\u30c8\u3057\u3066\u3044\u307e\u305b\u3093/,
groups:["key"]},{regexp:/\uac1c\uccb4\uac00 '([^']+)' \uc18d\uc131\uc774\ub098 \uba54\uc11c\ub4dc\ub97c \uc9c0\uc6d0\ud558\uc9c0 \uc54a\uc2b5\ub2c8\ub2e4./,groups:["key"]}]}},{Ic:function(a){return a.key+" is not defined"},
fc:{ReferenceError:[{regexp:/(.*) is not defined/,groups:["key"]},{regexp:/Can't find variable: (.*)/,groups:["key"]}]}}];var Ll={Ta:[],Qa:[{callback:Kl,weight:500}]};function Kl(a){if("JavaException"===a.name)return!0;a=a.stack;return a.includes("chrome://")||a.includes("chrome-extension://")||a.includes("moz-extension://")}
;function Ml(){this.Qa=[];this.Ta=[]}
var Nl;function Ol(){if(!Nl){var a=Nl=new Ml;a.Ta.length=0;a.Qa.length=0;Ll.Ta&&a.Ta.push.apply(a.Ta,Ll.Ta);Ll.Qa&&a.Qa.push.apply(a.Qa,Ll.Qa)}return Nl}
;var Pl=new L;function Ql(a){function b(){return a.charCodeAt(d++)}
var c=a.length,d=0;do{var e=Rl(b);if(Infinity===e)break;var f=e>>3;switch(e&7){case 0:e=Rl(b);if(2===f)return e;break;case 1:if(2===f)return;d+=8;break;case 2:e=Rl(b);if(2===f)return a.substr(d,e);d+=e;break;case 5:if(2===f)return;d+=4;break;default:return}}while(d<c)}
function Rl(a){var b=a(),c=b&127;if(128>b)return c;b=a();c|=(b&127)<<7;if(128>b)return c;b=a();c|=(b&127)<<14;if(128>b)return c;b=a();return 128>b?c|(b&127)<<21:Infinity}
;function Sl(a,b,c,d){if(a)if(Array.isArray(a)){var e=d;for(d=0;d<a.length&&!(a[d]&&(e+=Tl(d,a[d],b,c),500<e));d++);d=e}else if("object"===typeof a)for(e in a){if(a[e]){var f=e;var g=a[e],h=b,k=c;f="string"!==typeof g||"clickTrackingParams"!==f&&"trackingParams"!==f?0:(g=Ql(atob(g.replace(/-/g,"+").replace(/_/g,"/"))))?Tl(f+".ve",g,h,k):0;d+=f;d+=Tl(e,a[e],b,c);if(500<d)break}}else c[b]=Ul(a),d+=c[b].length;else c[b]=Ul(a),d+=c[b].length;return d}
function Tl(a,b,c,d){c+="."+a;a=Ul(b);d[c]=a;return c.length+a.length}
function Ul(a){try{return("string"===typeof a?a:String(JSON.stringify(a))).substr(0,500)}catch(b){return"unable to serialize "+typeof a+" ("+b.message+")"}}
;function Vl(){this.ef=!0}
function Wl(){Vl.h||(Vl.h=new Vl);return Vl.h}
function Xl(a,b){a={};var c=Wg([]);c&&(a.Authorization=c,c=b=null==b?void 0:b.sessionIndex,void 0===c&&(c=Number(S("SESSION_INDEX",0)),c=isNaN(c)?0:c),T("voice_search_auth_header_removal")||(a["X-Goog-AuthUser"]=c.toString()),"INNERTUBE_HOST_OVERRIDE"in Tk||(a["X-Origin"]=window.location.origin),void 0===b&&"DELEGATED_SESSION_ID"in Tk&&(a["X-Goog-PageId"]=S("DELEGATED_SESSION_ID")));return a}
;var Yl={identityType:"UNAUTHENTICATED_IDENTITY_TYPE_UNKNOWN"};function Zl(a){var b=this;this.i=void 0;this.h=!1;a.addEventListener("beforeinstallprompt",function(c){c.preventDefault();b.i=c});
a.addEventListener("appinstalled",function(){b.h=!0},{once:!0})}
function $l(){if(!C.matchMedia)return"WEB_DISPLAY_MODE_UNKNOWN";try{return C.matchMedia("(display-mode: standalone)").matches?"WEB_DISPLAY_MODE_STANDALONE":C.matchMedia("(display-mode: minimal-ui)").matches?"WEB_DISPLAY_MODE_MINIMAL_UI":C.matchMedia("(display-mode: fullscreen)").matches?"WEB_DISPLAY_MODE_FULLSCREEN":C.matchMedia("(display-mode: browser)").matches?"WEB_DISPLAY_MODE_BROWSER":"WEB_DISPLAY_MODE_UNKNOWN"}catch(a){return"WEB_DISPLAY_MODE_UNKNOWN"}}
;function am(a,b,c,d,e){Qg.set(""+a,b,{Kb:c,path:"/",domain:void 0===d?"youtube.com":d,secure:void 0===e?!1:e})}
function bm(a){return Qg.get(""+a,void 0)}
function cm(a,b,c){Qg.remove(""+a,void 0===b?"/":b,void 0===c?"youtube.com":c)}
function dm(){if(T("embeds_web_enable_cookie_detection_fix")){if(!C.navigator.cookieEnabled)return!1}else if(!Qg.isEnabled())return!1;if(Qg.h.cookie)return!0;T("embeds_web_enable_cookie_detection_fix")?Qg.set("TESTCOOKIESENABLED","1",{Kb:60,Pe:"none",secure:!0}):Qg.set("TESTCOOKIESENABLED","1",{Kb:60});if("1"!==Qg.get("TESTCOOKIESENABLED"))return!1;Qg.remove("TESTCOOKIESENABLED");return!0}
;var em=E("ytglobal.prefsUserPrefsPrefs_")||{};D("ytglobal.prefsUserPrefsPrefs_",em);function fm(){this.h=S("ALT_PREF_COOKIE_NAME","PREF");this.i=S("ALT_PREF_COOKIE_DOMAIN","youtube.com");var a=bm(this.h);a&&this.parse(a)}
var gm;function hm(){gm||(gm=new fm);return gm}
m=fm.prototype;m.get=function(a,b){im(a);jm(a);a=void 0!==em[a]?em[a].toString():null;return null!=a?a:b?b:""};
m.set=function(a,b){im(a);jm(a);if(null==b)throw Error("ExpectedNotNull");em[a]=b.toString()};
function km(a){return!!((lm("f"+(Math.floor(a/31)+1))||0)&1<<a%31)}
m.remove=function(a){im(a);jm(a);delete em[a]};
m.clear=function(){for(var a in em)delete em[a]};
function jm(a){if(/^f([1-9][0-9]*)$/.test(a))throw Error("ExpectedRegexMatch: "+a);}
function im(a){if(!/^\w+$/.test(a))throw Error("ExpectedRegexMismatch: "+a);}
function lm(a){a=void 0!==em[a]?em[a].toString():null;return null!=a&&/^[A-Fa-f0-9]+$/.test(a)?parseInt(a,16):null}
m.parse=function(a){a=decodeURIComponent(a).split("&");for(var b=0;b<a.length;b++){var c=a[b].split("="),d=c[0];(c=c[1])&&(em[d]=c.toString())}};var mm={bluetooth:"CONN_DISCO",cellular:"CONN_CELLULAR_UNKNOWN",ethernet:"CONN_WIFI",none:"CONN_NONE",wifi:"CONN_WIFI",wimax:"CONN_CELLULAR_4G",other:"CONN_UNKNOWN",unknown:"CONN_UNKNOWN","slow-2g":"CONN_CELLULAR_2G","2g":"CONN_CELLULAR_2G","3g":"CONN_CELLULAR_3G","4g":"CONN_CELLULAR_4G"},nm={"slow-2g":"EFFECTIVE_CONNECTION_TYPE_SLOW_2G","2g":"EFFECTIVE_CONNECTION_TYPE_2G","3g":"EFFECTIVE_CONNECTION_TYPE_3G","4g":"EFFECTIVE_CONNECTION_TYPE_4G"};
function om(){var a=C.navigator;return a?a.connection:void 0}
function pm(){var a=om();if(a){var b=mm[a.type||"unknown"]||"CONN_UNKNOWN";a=mm[a.effectiveType||"unknown"]||"CONN_UNKNOWN";"CONN_CELLULAR_UNKNOWN"===b&&"CONN_UNKNOWN"!==a&&(b=a);if("CONN_UNKNOWN"!==b)return b;if("CONN_UNKNOWN"!==a)return a}}
function qm(){var a=om();if(null!=a&&a.effectiveType)return nm.hasOwnProperty(a.effectiveType)?nm[a.effectiveType]:"EFFECTIVE_CONNECTION_TYPE_UNKNOWN"}
;function V(a){var b=B.apply(1,arguments);var c=Error.call(this,a);this.message=c.message;"stack"in c&&(this.stack=c.stack);this.args=[].concat(ma(b))}
w(V,Error);function rm(){try{return sm(),!0}catch(a){return!1}}
function sm(a){if(void 0!==S("DATASYNC_ID"))return S("DATASYNC_ID");throw new V("Datasync ID not set",void 0===a?"unknown":a);}
;function tm(){}
function um(a,b){return vi.ab(a,0,b)}
tm.prototype.oa=function(a,b){return this.ab(a,1,b)};
tm.prototype.Bb=function(a){var b=E("yt.scheduler.instance.addImmediateJob");b?b(a):a()};var wm=U("web_emulated_idle_callback_delay",300),xm=1E3/60-3,ym=[8,5,4,3,2,1,0];
function zm(a){a=void 0===a?{}:a;H.call(this);this.i=[];this.j={};this.ba=this.h=0;this.Y=this.m=!1;this.S=[];this.V=this.ea=!1;for(var b=v(ym),c=b.next();!c.done;c=b.next())this.i[c.value]=[];this.l=0;this.qc=a.timeout||1;this.D=xm;this.A=0;this.ta=this.De.bind(this);this.pc=this.hf.bind(this);this.Pa=this.Pd.bind(this);this.Za=this.le.bind(this);this.Qb=this.Ge.bind(this);this.Ba=!!window.requestIdleCallback&&!!window.cancelIdleCallback&&!T("disable_scheduler_requestIdleCallback");(this.ga=!1!==
a.useRaf&&!!window.requestAnimationFrame)&&document.addEventListener("visibilitychange",this.ta)}
w(zm,H);m=zm.prototype;m.Bb=function(a){var b=Za();Am(this,a);a=Za()-b;this.m||(this.D-=a)};
m.ab=function(a,b,c){++this.ba;if(10===b)return this.Bb(a),this.ba;var d=this.ba;this.j[d]=a;this.m&&!c?this.S.push({id:d,priority:b}):(this.i[b].push(d),this.Y||this.m||(0!==this.h&&Bm(this)!==this.A&&this.stop(),this.start()));return d};
m.pa=function(a){delete this.j[a]};
function Cm(a){a.S.length=0;for(var b=5;0<=b;b--)a.i[b].length=0;a.i[8].length=0;a.j={};a.stop()}
m.isHidden=function(){return!!document.hidden||!1};
function Dm(a){return!a.isHidden()&&a.ga}
function Bm(a){if(a.i[8].length){if(a.V)return 4;if(Dm(a))return 3}for(var b=5;b>=a.l;b--)if(0<a.i[b].length)return 0<b?Dm(a)?3:2:1;return 0}
m.Jb=function(a){var b=E("yt.logging.errors.log");b&&b(a)};
function Am(a,b){try{b()}catch(c){a.Jb(c)}}
function Em(a){for(var b=v(ym),c=b.next();!c.done;c=b.next())if(a.i[c.value].length)return!0;return!1}
m.le=function(a){var b=void 0;a&&(b=a.timeRemaining());this.ea=!0;Fm(this,b);this.ea=!1};
m.hf=function(){Fm(this)};
m.Pd=function(){Gm(this)};
m.Ge=function(a){this.V=!0;var b=Bm(this);4===b&&b!==this.A&&(this.stop(),this.start());Fm(this,void 0,a);this.V=!1};
m.De=function(){this.isHidden()||Gm(this);this.h&&(this.stop(),this.start())};
function Gm(a){a.stop();a.m=!0;for(var b=Za(),c=a.i[8];c.length;){var d=c.shift(),e=a.j[d];delete a.j[d];e&&Am(a,e)}Hm(a);a.m=!1;Em(a)&&a.start();b=Za()-b;a.D-=b}
function Hm(a){for(var b=0,c=a.S.length;b<c;b++){var d=a.S[b];a.i[d.priority].push(d.id)}a.S.length=0}
function Fm(a,b,c){a.V&&4===a.A&&a.h||a.stop();a.m=!0;b=Za()+(b||a.D);for(var d=a.i[5];d.length;){var e=d.shift(),f=a.j[e];delete a.j[e];if(f){e=a;try{f(c)}catch(l){e.Jb(l)}}}for(d=a.i[4];d.length;)c=d.shift(),f=a.j[c],delete a.j[c],f&&Am(a,f);d=a.ea?0:1;d=a.l>d?a.l:d;if(!(Za()>=b)){do{a:{c=a;f=d;for(e=3;e>=f;e--)for(var g=c.i[e];g.length;){var h=g.shift(),k=c.j[h];delete c.j[h];if(k){c=k;break a}}c=null}c&&Am(a,c)}while(c&&Za()<b)}a.m=!1;Hm(a);a.D=xm;Em(a)&&a.start()}
m.start=function(){this.Y=!1;if(0===this.h)switch(this.A=Bm(this),this.A){case 1:var a=this.Za;this.h=this.Ba?window.requestIdleCallback(a,{timeout:3E3}):window.setTimeout(a,wm);break;case 2:this.h=window.setTimeout(this.pc,this.qc);break;case 3:this.h=window.requestAnimationFrame(this.Qb);break;case 4:this.h=window.setTimeout(this.Pa,0)}};
m.pause=function(){this.stop();this.Y=!0};
m.stop=function(){if(this.h){switch(this.A){case 1:var a=this.h;this.Ba?window.cancelIdleCallback(a):window.clearTimeout(a);break;case 2:case 4:window.clearTimeout(this.h);break;case 3:window.cancelAnimationFrame(this.h)}this.h=0}};
m.R=function(){Cm(this);this.stop();this.ga&&document.removeEventListener("visibilitychange",this.ta);H.prototype.R.call(this)};var Im=E("yt.scheduler.instance.timerIdMap_")||{},Jm=U("kevlar_tuner_scheduler_soft_state_timer_ms",800),Km=0,Lm=0;function Mm(){var a=E("ytglobal.schedulerInstanceInstance_");if(!a||a.Z())a=new zm(S("scheduler")||{}),D("ytglobal.schedulerInstanceInstance_",a);return a}
function Nm(){Om();var a=E("ytglobal.schedulerInstanceInstance_");a&&(Pc(a),D("ytglobal.schedulerInstanceInstance_",null))}
function Om(){Cm(Mm());for(var a in Im)Im.hasOwnProperty(a)&&delete Im[Number(a)]}
function Pm(a,b,c){if(!c)return c=void 0===c,-Mm().ab(a,b,c);var d=window.setTimeout(function(){var e=Mm().ab(a,b);Im[d]=e},c);
return d}
function Qm(a){Mm().Bb(a)}
function Rm(a){var b=Mm();if(0>a)b.pa(-a);else{var c=Im[a];c?(b.pa(c),delete Im[a]):window.clearTimeout(a)}}
function Sm(){Tm()}
function Tm(){window.clearTimeout(Km);Mm().start()}
function Um(){Mm().pause();window.clearTimeout(Km);Km=window.setTimeout(Sm,Jm)}
function Vm(){window.clearTimeout(Lm);Lm=window.setTimeout(function(){Wm(0)},Jm)}
function Wm(a){Vm();var b=Mm();b.l=a;b.start()}
function Xm(a){Vm();var b=Mm();b.l>a&&(b.l=a,b.start())}
function Ym(){window.clearTimeout(Lm);var a=Mm();a.l=0;a.start()}
function Zm(){E("yt.scheduler.initialized")||(D("yt.scheduler.instance.dispose",Nm),D("yt.scheduler.instance.addJob",Pm),D("yt.scheduler.instance.addImmediateJob",Qm),D("yt.scheduler.instance.cancelJob",Rm),D("yt.scheduler.instance.cancelAllJobs",Om),D("yt.scheduler.instance.start",Tm),D("yt.scheduler.instance.pause",Um),D("yt.scheduler.instance.setPriorityThreshold",Wm),D("yt.scheduler.instance.enablePriorityThreshold",Xm),D("yt.scheduler.instance.clearPriorityThreshold",Ym),D("yt.scheduler.initialized",
!0))}
;function $m(){tm.apply(this,arguments)}
w($m,tm);function an(){$m.h||($m.h=new $m);return $m.h}
$m.prototype.ab=function(a,b,c){void 0!==c&&Number.isNaN(Number(c))&&(c=void 0);var d=E("yt.scheduler.instance.addJob");return d?d(a,b,c):void 0===c?(a(),NaN):pl(a,c||0)};
$m.prototype.pa=function(a){if(void 0===a||!Number.isNaN(Number(a))){var b=E("yt.scheduler.instance.cancelJob");b?b(a):window.clearTimeout(a)}};
$m.prototype.start=function(){var a=E("yt.scheduler.instance.start");a&&a()};
$m.prototype.pause=function(){var a=E("yt.scheduler.instance.pause");a&&a()};
var vi=an();T("web_scheduler_auto_init")&&Zm();function bn(a){var b=new Yi;(b=b.isAvailable()?a?new hj(b,a):b:null)||(a=new cj(a||"UserDataSharedStore"),b=a.isAvailable()?a:null);this.h=(a=b)?new Ti(a):null;this.i=document.domain||window.location.hostname}
bn.prototype.set=function(a,b,c,d){c=c||31104E3;this.remove(a);if(this.h)try{this.h.set(a,b,Date.now()+1E3*c);return}catch(f){}var e="";if(d)try{e=escape((new Dh).serialize(b))}catch(f){return}else e=escape(b);am(a,e,c,this.i)};
bn.prototype.get=function(a,b){var c=void 0,d=!this.h;if(!d)try{c=this.h.get(a)}catch(e){d=!0}if(d&&(c=bm(a))&&(c=unescape(c),b))try{c=JSON.parse(c)}catch(e){this.remove(a),c=void 0}return c};
bn.prototype.remove=function(a){this.h&&this.h.remove(a);cm(a,"/",this.i)};var cn=function(){var a;return function(){a||(a=new bn("ytidb"));return a}}();
function dn(){var a;return null==(a=cn())?void 0:a.get("LAST_RESULT_ENTRY_KEY",!0)}
;var en=[],fn,gn=!1;function hn(){var a={};for(fn=new jn(void 0===a.handleError?kn:a.handleError,void 0===a.logEvent?ln:a.logEvent);0<en.length;)switch(a=en.shift(),a.type){case "ERROR":fn.Jb(a.payload);break;case "EVENT":fn.logEvent(a.eventType,a.payload)}}
function mn(a){gn||(fn?fn.Jb(a):(en.push({type:"ERROR",payload:a}),10<en.length&&en.shift()))}
function nn(a,b){gn||(fn?fn.logEvent(a,b):(en.push({type:"EVENT",eventType:a,payload:b}),10<en.length&&en.shift()))}
;function on(a){if(0<=a.indexOf(":"))throw Error("Database name cannot contain ':'");}
function pn(a){return a.substr(0,a.indexOf(":"))||a}
;var qn=Ne||Oe;function rn(a){var b=Kb();return b?0<=b.toLowerCase().indexOf(a):!1}
;var sn={},tn=(sn.AUTH_INVALID="No user identifier specified.",sn.EXPLICIT_ABORT="Transaction was explicitly aborted.",sn.IDB_NOT_SUPPORTED="IndexedDB is not supported.",sn.MISSING_INDEX="Index not created.",sn.MISSING_OBJECT_STORES="Object stores not created.",sn.DB_DELETED_BY_MISSING_OBJECT_STORES="Database is deleted because expected object stores were not created.",sn.DB_REOPENED_BY_MISSING_OBJECT_STORES="Database is reopened because expected object stores were not created.",sn.UNKNOWN_ABORT="Transaction was aborted for unknown reasons.",
sn.QUOTA_EXCEEDED="The current transaction exceeded its quota limitations.",sn.QUOTA_MAYBE_EXCEEDED="The current transaction may have failed because of exceeding quota limitations.",sn.EXECUTE_TRANSACTION_ON_CLOSED_DB="Can't start a transaction on a closed database",sn.INCOMPATIBLE_DB_VERSION="The binary is incompatible with the database version",sn),un={},vn=(un.AUTH_INVALID="ERROR",un.EXECUTE_TRANSACTION_ON_CLOSED_DB="WARNING",un.EXPLICIT_ABORT="IGNORED",un.IDB_NOT_SUPPORTED="ERROR",un.MISSING_INDEX=
"WARNING",un.MISSING_OBJECT_STORES="ERROR",un.DB_DELETED_BY_MISSING_OBJECT_STORES="WARNING",un.DB_REOPENED_BY_MISSING_OBJECT_STORES="WARNING",un.QUOTA_EXCEEDED="WARNING",un.QUOTA_MAYBE_EXCEEDED="WARNING",un.UNKNOWN_ABORT="WARNING",un.INCOMPATIBLE_DB_VERSION="WARNING",un),wn={},xn=(wn.AUTH_INVALID=!1,wn.EXECUTE_TRANSACTION_ON_CLOSED_DB=!1,wn.EXPLICIT_ABORT=!1,wn.IDB_NOT_SUPPORTED=!1,wn.MISSING_INDEX=!1,wn.MISSING_OBJECT_STORES=!1,wn.DB_DELETED_BY_MISSING_OBJECT_STORES=!1,wn.DB_REOPENED_BY_MISSING_OBJECT_STORES=
!1,wn.QUOTA_EXCEEDED=!1,wn.QUOTA_MAYBE_EXCEEDED=!0,wn.UNKNOWN_ABORT=!0,wn.INCOMPATIBLE_DB_VERSION=!1,wn);function yn(a,b,c,d,e){b=void 0===b?{}:b;c=void 0===c?tn[a]:c;d=void 0===d?vn[a]:d;e=void 0===e?xn[a]:e;V.call(this,c,Object.assign({},{name:"YtIdbKnownError",isSw:void 0===self.document,isIframe:self!==self.top,type:a},b));this.type=a;this.message=c;this.level=d;this.h=e;Object.setPrototypeOf(this,yn.prototype)}
w(yn,V);function zn(a,b){yn.call(this,"MISSING_OBJECT_STORES",{expectedObjectStores:b,foundObjectStores:a},tn.MISSING_OBJECT_STORES);Object.setPrototypeOf(this,zn.prototype)}
w(zn,yn);function An(a,b){var c=Error.call(this);this.message=c.message;"stack"in c&&(this.stack=c.stack);this.index=a;this.objectStore=b;Object.setPrototypeOf(this,An.prototype)}
w(An,Error);var Bn=["The database connection is closing","Can't start a transaction on a closed database","A mutation operation was attempted on a database that did not allow mutations"];
function Cn(a,b,c,d){b=pn(b);var e=a instanceof Error?a:Error("Unexpected error: "+a);if(e instanceof yn)return e;a={objectStoreNames:c,dbName:b,dbVersion:d};if("QuotaExceededError"===e.name)return new yn("QUOTA_EXCEEDED",a);if(Pe&&"UnknownError"===e.name)return new yn("QUOTA_MAYBE_EXCEEDED",a);if(e instanceof An)return new yn("MISSING_INDEX",Object.assign({},a,{objectStore:e.objectStore,index:e.index}));if("InvalidStateError"===e.name&&Bn.some(function(f){return e.message.includes(f)}))return new yn("EXECUTE_TRANSACTION_ON_CLOSED_DB",
a);
if("AbortError"===e.name)return new yn("UNKNOWN_ABORT",a,e.message);e.args=[Object.assign({},a,{name:"IdbError",sd:e.name})];e.level="WARNING";return e}
function Dn(a,b,c){var d=dn();return new yn("IDB_NOT_SUPPORTED",{context:{caller:a,publicName:b,version:c,hasSucceededOnce:null==d?void 0:d.hasSucceededOnce}})}
;function En(a){if(!a)throw Error();throw a;}
function Fn(a){return a}
function Gn(a){this.h=a}
function Hn(a){function b(e){if("PENDING"===d.state.status){d.state={status:"REJECTED",reason:e};e=v(d.i);for(var f=e.next();!f.done;f=e.next())f=f.value,f()}}
function c(e){if("PENDING"===d.state.status){d.state={status:"FULFILLED",value:e};e=v(d.h);for(var f=e.next();!f.done;f=e.next())f=f.value,f()}}
var d=this;this.state={status:"PENDING"};this.h=[];this.i=[];a=a.h;try{a(c,b)}catch(e){b(e)}}
Hn.all=function(a){return new Hn(new Gn(function(b,c){var d=[],e=a.length;0===e&&b(d);for(var f={rb:0};f.rb<a.length;f={rb:f.rb},++f.rb)Hn.resolve(a[f.rb]).then(function(g){return function(h){d[g.rb]=h;e--;0===e&&b(d)}}(f)).catch(function(g){c(g)})}))};
Hn.resolve=function(a){return new Hn(new Gn(function(b,c){a instanceof Hn?a.then(b,c):b(a)}))};
Hn.reject=function(a){return new Hn(new Gn(function(b,c){c(a)}))};
Hn.prototype.then=function(a,b){var c=this,d=null!=a?a:Fn,e=null!=b?b:En;return new Hn(new Gn(function(f,g){"PENDING"===c.state.status?(c.h.push(function(){In(c,c,d,f,g)}),c.i.push(function(){Jn(c,c,e,f,g)})):"FULFILLED"===c.state.status?In(c,c,d,f,g):"REJECTED"===c.state.status&&Jn(c,c,e,f,g)}))};
Hn.prototype.catch=function(a){return this.then(void 0,a)};
function In(a,b,c,d,e){try{if("FULFILLED"!==a.state.status)throw Error("calling handleResolve before the promise is fulfilled.");var f=c(a.state.value);f instanceof Hn?Kn(a,b,f,d,e):d(f)}catch(g){e(g)}}
function Jn(a,b,c,d,e){try{if("REJECTED"!==a.state.status)throw Error("calling handleReject before the promise is rejected.");var f=c(a.state.reason);f instanceof Hn?Kn(a,b,f,d,e):d(f)}catch(g){e(g)}}
function Kn(a,b,c,d,e){b===c?e(new TypeError("Circular promise chain detected.")):c.then(function(f){f instanceof Hn?Kn(a,b,f,d,e):d(f)},function(f){e(f)})}
;function Ln(a,b,c){function d(){c(a.error);f()}
function e(){b(a.result);f()}
function f(){try{a.removeEventListener("success",e),a.removeEventListener("error",d)}catch(g){}}
a.addEventListener("success",e);a.addEventListener("error",d)}
function Mn(a){return new Promise(function(b,c){Ln(a,b,c)})}
function Nn(a){return new Hn(new Gn(function(b,c){Ln(a,b,c)}))}
;function On(a,b){return new Hn(new Gn(function(c,d){function e(){var f=a?b(a):null;f?f.then(function(g){a=g;e()},d):c()}
e()}))}
;var Pn=window,W=Pn.ytcsi&&Pn.ytcsi.now?Pn.ytcsi.now:Pn.performance&&Pn.performance.timing&&Pn.performance.now&&Pn.performance.timing.navigationStart?function(){return Pn.performance.timing.navigationStart+Pn.performance.now()}:function(){return(new Date).getTime()};function Qn(a,b){this.h=a;this.options=b;this.transactionCount=0;this.j=Math.round(W());this.i=!1}
m=Qn.prototype;m.add=function(a,b,c){return Rn(this,[a],{mode:"readwrite",ia:!0},function(d){return d.objectStore(a).add(b,c)})};
m.clear=function(a){return Rn(this,[a],{mode:"readwrite",ia:!0},function(b){return b.objectStore(a).clear()})};
m.close=function(){this.h.close();var a;(null==(a=this.options)?0:a.closed)&&this.options.closed()};
m.count=function(a,b){return Rn(this,[a],{mode:"readonly",ia:!0},function(c){return c.objectStore(a).count(b)})};
function Sn(a,b,c){a=a.h.createObjectStore(b,c);return new Tn(a)}
m.delete=function(a,b){return Rn(this,[a],{mode:"readwrite",ia:!0},function(c){return c.objectStore(a).delete(b)})};
m.get=function(a,b){return Rn(this,[a],{mode:"readonly",ia:!0},function(c){return c.objectStore(a).get(b)})};
function Un(a,b,c){return Rn(a,[b],{mode:"readwrite",ia:!0},function(d){d=d.objectStore(b);return Nn(d.h.put(c,void 0))})}
m.objectStoreNames=function(){return Array.from(this.h.objectStoreNames)};
function Rn(a,b,c,d){var e,f,g,h,k,l,n,p,r,t,x,z;return A(function(y){switch(y.h){case 1:var J={mode:"readonly",ia:!1,tag:"IDB_TRANSACTION_TAG_UNKNOWN"};"string"===typeof c?J.mode=c:Object.assign(J,c);e=J;a.transactionCount++;f=e.ia?3:1;g=0;case 2:if(h){y.B(4);break}g++;k=Math.round(W());Aa(y,5);l=a.h.transaction(b,e.mode);J=y.yield;var G=new Vn(l);G=Wn(G,d);return J.call(y,G,7);case 7:return n=y.i,p=Math.round(W()),Xn(a,k,p,g,void 0,b.join(),e),y.return(n);case 5:r=Ba(y);t=Math.round(W());x=Cn(r,
a.h.name,b.join(),a.h.version);if((z=x instanceof yn&&!x.h)||g>=f)Xn(a,k,t,g,x,b.join(),e),h=x;y.B(2);break;case 4:return y.return(Promise.reject(h))}})}
function Xn(a,b,c,d,e,f,g){b=c-b;e?(e instanceof yn&&("QUOTA_EXCEEDED"===e.type||"QUOTA_MAYBE_EXCEEDED"===e.type)&&nn("QUOTA_EXCEEDED",{dbName:pn(a.h.name),objectStoreNames:f,transactionCount:a.transactionCount,transactionMode:g.mode}),e instanceof yn&&"UNKNOWN_ABORT"===e.type&&(c-=a.j,0>c&&c>=Math.pow(2,31)&&(c=0),nn("TRANSACTION_UNEXPECTEDLY_ABORTED",{objectStoreNames:f,transactionDuration:b,transactionCount:a.transactionCount,dbDuration:c}),a.i=!0),Yn(a,!1,d,f,b,g.tag),mn(e)):Yn(a,!0,d,f,b,g.tag)}
function Yn(a,b,c,d,e,f){nn("TRANSACTION_ENDED",{objectStoreNames:d,connectionHasUnknownAbortedTransaction:a.i,duration:e,isSuccessful:b,tryCount:c,tag:void 0===f?"IDB_TRANSACTION_TAG_UNKNOWN":f})}
m.getName=function(){return this.h.name};
function Tn(a){this.h=a}
m=Tn.prototype;m.add=function(a,b){return Nn(this.h.add(a,b))};
m.autoIncrement=function(){return this.h.autoIncrement};
m.clear=function(){return Nn(this.h.clear()).then(function(){})};
function Zn(a,b,c){a.h.createIndex(b,c,{unique:!1})}
m.count=function(a){return Nn(this.h.count(a))};
function $n(a,b){return ao(a,{query:b},function(c){return c.delete().then(function(){return bo(c)})}).then(function(){})}
m.delete=function(a){return a instanceof IDBKeyRange?$n(this,a):Nn(this.h.delete(a))};
m.get=function(a){return Nn(this.h.get(a))};
m.index=function(a){try{return new co(this.h.index(a))}catch(b){if(b instanceof Error&&"NotFoundError"===b.name)throw new An(a,this.h.name);throw b;}};
m.getName=function(){return this.h.name};
m.keyPath=function(){return this.h.keyPath};
function ao(a,b,c){a=a.h.openCursor(b.query,b.direction);return eo(a).then(function(d){return On(d,c)})}
function Vn(a){var b=this;this.h=a;this.i=new Map;this.aborted=!1;this.done=new Promise(function(c,d){b.h.addEventListener("complete",function(){c()});
b.h.addEventListener("error",function(e){e.currentTarget===e.target&&d(b.h.error)});
b.h.addEventListener("abort",function(){var e=b.h.error;if(e)d(e);else if(!b.aborted){e=yn;for(var f=b.h.objectStoreNames,g=[],h=0;h<f.length;h++){var k=f.item(h);if(null===k)throw Error("Invariant: item in DOMStringList is null");g.push(k)}e=new e("UNKNOWN_ABORT",{objectStoreNames:g.join(),dbName:b.h.db.name,mode:b.h.mode});d(e)}})})}
function Wn(a,b){var c=new Promise(function(d,e){try{b(a).then(function(f){d(f)}).catch(e)}catch(f){e(f),a.abort()}});
return Promise.all([c,a.done]).then(function(d){return v(d).next().value})}
Vn.prototype.abort=function(){this.h.abort();this.aborted=!0;throw new yn("EXPLICIT_ABORT");};
Vn.prototype.objectStore=function(a){a=this.h.objectStore(a);var b=this.i.get(a);b||(b=new Tn(a),this.i.set(a,b));return b};
function co(a){this.h=a}
m=co.prototype;m.count=function(a){return Nn(this.h.count(a))};
m.delete=function(a){return fo(this,{query:a},function(b){return b.delete().then(function(){return bo(b)})})};
m.get=function(a){return Nn(this.h.get(a))};
m.keyPath=function(){return this.h.keyPath};
m.unique=function(){return this.h.unique};
function fo(a,b,c){a=a.h.openCursor(void 0===b.query?null:b.query,void 0===b.direction?"next":b.direction);return eo(a).then(function(d){return On(d,c)})}
function go(a,b){this.request=a;this.cursor=b}
function eo(a){return Nn(a).then(function(b){return b?new go(a,b):null})}
function bo(a){a.cursor.continue(void 0);return eo(a.request)}
go.prototype.delete=function(){return Nn(this.cursor.delete()).then(function(){})};
go.prototype.getValue=function(){return this.cursor.value};
go.prototype.update=function(a){return Nn(this.cursor.update(a))};function ho(a,b,c){return new Promise(function(d,e){function f(){r||(r=new Qn(g.result,{closed:p}));return r}
var g=void 0!==b?self.indexedDB.open(a,b):self.indexedDB.open(a);var h=c.Rd,k=c.blocking,l=c.ff,n=c.upgrade,p=c.closed,r;g.addEventListener("upgradeneeded",function(t){try{if(null===t.newVersion)throw Error("Invariant: newVersion on IDbVersionChangeEvent is null");if(null===g.transaction)throw Error("Invariant: transaction on IDbOpenDbRequest is null");t.dataLoss&&"none"!==t.dataLoss&&nn("IDB_DATA_CORRUPTED",{reason:t.dataLossMessage||"unknown reason",dbName:pn(a)});var x=f(),z=new Vn(g.transaction);
n&&n(x,function(y){return t.oldVersion<y&&t.newVersion>=y},z);
z.done.catch(function(y){e(y)})}catch(y){e(y)}});
g.addEventListener("success",function(){var t=g.result;k&&t.addEventListener("versionchange",function(){k(f())});
t.addEventListener("close",function(){nn("IDB_UNEXPECTEDLY_CLOSED",{dbName:pn(a),dbVersion:t.version});l&&l()});
d(f())});
g.addEventListener("error",function(){e(g.error)});
h&&g.addEventListener("blocked",function(){h()})})}
function io(a,b,c){c=void 0===c?{}:c;return ho(a,b,c)}
function jo(a,b){b=void 0===b?{}:b;var c,d,e,f;return A(function(g){if(1==g.h)return Aa(g,2),c=self.indexedDB.deleteDatabase(a),d=b,(e=d.Rd)&&c.addEventListener("blocked",function(){e()}),g.yield(Mn(c),4);
if(2!=g.h)g.h=0,g.l=0;else throw f=Ba(g),Cn(f,a,"",-1);})}
;function ko(a,b){this.name=a;this.options=b;this.j=!0;this.v=this.l=0}
ko.prototype.i=function(a,b,c){c=void 0===c?{}:c;return io(a,b,c)};
ko.prototype.delete=function(a){a=void 0===a?{}:a;return jo(this.name,a)};
function lo(a,b){return new yn("INCOMPATIBLE_DB_VERSION",{dbName:a.name,oldVersion:a.options.version,newVersion:b})}
function mo(a,b){if(!b)throw Dn("openWithToken",pn(a.name));return a.open()}
ko.prototype.open=function(){function a(){var f,g,h,k,l,n,p,r,t,x;return A(function(z){switch(z.h){case 1:return g=null!=(f=Error().stack)?f:"",Aa(z,2),z.yield(c.i(c.name,c.options.version,e),4);case 4:for(var y=h=z.i,J=c.options,G=[],R=v(Object.keys(J.xb)),N=R.next();!N.done;N=R.next()){N=N.value;var da=J.xb[N],Ca=void 0===da.Je?Number.MAX_VALUE:da.Je;!(y.h.version>=da.Cb)||y.h.version>=Ca||y.h.objectStoreNames.contains(N)||G.push(N)}k=G;if(0===k.length){z.B(5);break}l=Object.keys(c.options.xb);
n=h.objectStoreNames();if(c.v<U("ytidb_reopen_db_retries",0))return c.v++,h.close(),mn(new yn("DB_REOPENED_BY_MISSING_OBJECT_STORES",{dbName:c.name,expectedObjectStores:l,foundObjectStores:n})),z.return(a());if(!(c.l<U("ytidb_remake_db_retries",1))){z.B(6);break}c.l++;return z.yield(c.delete(),7);case 7:return mn(new yn("DB_DELETED_BY_MISSING_OBJECT_STORES",{dbName:c.name,expectedObjectStores:l,foundObjectStores:n})),z.return(a());case 6:throw new zn(n,l);case 5:return z.return(h);case 2:p=Ba(z);
if(p instanceof DOMException?"VersionError"!==p.name:"DOMError"in self&&p instanceof DOMError?"VersionError"!==p.name:!(p instanceof Object&&"message"in p)||"An attempt was made to open a database using a lower version than the existing version."!==p.message){z.B(8);break}return z.yield(c.i(c.name,void 0,Object.assign({},e,{upgrade:void 0})),9);case 9:r=z.i;t=r.h.version;if(void 0!==c.options.version&&t>c.options.version+1)throw r.close(),c.j=!1,lo(c,t);return z.return(r);case 8:throw b(),p instanceof
Error&&!T("ytidb_async_stack_killswitch")&&(p.stack=p.stack+"\n"+g.substring(g.indexOf("\n")+1)),Cn(p,c.name,"",null!=(x=c.options.version)?x:-1);}})}
function b(){c.h===d&&(c.h=void 0)}
var c=this;if(!this.j)throw lo(this);if(this.h)return this.h;var d,e={blocking:function(f){f.close()},
closed:b,ff:b,upgrade:this.options.upgrade};return this.h=d=a()};var no=new ko("YtIdbMeta",{xb:{databases:{Cb:1}},upgrade:function(a,b){b(1)&&Sn(a,"databases",{keyPath:"actualName"})}});
function oo(a,b){var c;return A(function(d){if(1==d.h)return d.yield(mo(no,b),2);c=d.i;return d.return(Rn(c,["databases"],{ia:!0,mode:"readwrite"},function(e){var f=e.objectStore("databases");return f.get(a.actualName).then(function(g){if(g?a.actualName!==g.actualName||a.publicName!==g.publicName||a.userIdentifier!==g.userIdentifier:1)return Nn(f.h.put(a,void 0)).then(function(){})})}))})}
function po(a,b){var c;return A(function(d){if(1==d.h)return a?d.yield(mo(no,b),2):d.return();c=d.i;return d.return(c.delete("databases",a))})}
function qo(a,b){var c,d;return A(function(e){return 1==e.h?(c=[],e.yield(mo(no,b),2)):3!=e.h?(d=e.i,e.yield(Rn(d,["databases"],{ia:!0,mode:"readonly"},function(f){c.length=0;return ao(f.objectStore("databases"),{},function(g){a(g.getValue())&&c.push(g.getValue());return bo(g)})}),3)):e.return(c)})}
function ro(a){return qo(function(b){return"LogsDatabaseV2"===b.publicName&&void 0!==b.userIdentifier},a)}
function so(a,b,c){return qo(function(d){return c?void 0!==d.userIdentifier&&!a.includes(d.userIdentifier)&&c.includes(d.publicName):void 0!==d.userIdentifier&&!a.includes(d.userIdentifier)},b)}
function to(a){var b,c;return A(function(d){if(1==d.h)return b=sm("YtIdbMeta hasAnyMeta other"),d.yield(qo(function(e){return void 0!==e.userIdentifier&&e.userIdentifier!==b},a),2);
c=d.i;return d.return(0<c.length)})}
;var uo,vo=new function(){}(new function(){});
function wo(){var a,b,c,d;return A(function(e){switch(e.h){case 1:a=dn();if(null==(b=a)?0:b.hasSucceededOnce)return e.return(!0);var f;if(f=qn)f=/WebKit\/([0-9]+)/.exec(Kb()),f=!!(f&&600<=parseInt(f[1],10));f&&(f=/WebKit\/([0-9]+)/.exec(Kb()),f=!(f&&602<=parseInt(f[1],10)));if(f||Zc)return e.return(!1);try{if(c=self,!(c.indexedDB&&c.IDBIndex&&c.IDBKeyRange&&c.IDBObjectStore))return e.return(!1)}catch(g){return e.return(!1)}if(!("IDBTransaction"in self&&"objectStoreNames"in IDBTransaction.prototype))return e.return(!1);
Aa(e,2);d={actualName:"yt-idb-test-do-not-use",publicName:"yt-idb-test-do-not-use",userIdentifier:void 0};return e.yield(oo(d,vo),4);case 4:return e.yield(po("yt-idb-test-do-not-use",vo),5);case 5:return e.return(!0);case 2:return Ba(e),e.return(!1)}})}
function xo(){if(void 0!==uo)return uo;gn=!0;return uo=wo().then(function(a){gn=!1;var b;if(null!=(b=cn())&&b.h){var c;b={hasSucceededOnce:(null==(c=dn())?void 0:c.hasSucceededOnce)||a};var d;null==(d=cn())||d.set("LAST_RESULT_ENTRY_KEY",b,2592E3,!0)}return a})}
function yo(){return E("ytglobal.idbToken_")||void 0}
function zo(){var a=yo();return a?Promise.resolve(a):xo().then(function(b){(b=b?vo:void 0)&&D("ytglobal.idbToken_",b);return b})}
;var Ao=0;function Bo(a,b){Ao||(Ao=vi.oa(function(){var c,d,e,f,g;return A(function(h){switch(h.h){case 1:return h.yield(zo(),2);case 2:c=h.i;if(!c)return h.return();d=!0;Aa(h,3);return h.yield(so(a,c,b),5);case 5:e=h.i;if(!e.length){d=!1;h.B(6);break}f=e[0];return h.yield(jo(f.actualName),7);case 7:return h.yield(po(f.actualName,c),6);case 6:h.h=4;h.l=0;break;case 3:g=Ba(h),mn(g),d=!1;case 4:vi.pa(Ao),Ao=0,d&&Bo(a,b),h.h=0}})}))}
function Co(){var a;return A(function(b){return 1==b.h?b.yield(zo(),2):(a=b.i)?b.return(to(a)):b.return(!1)})}
new gi;function Do(a){if(!rm())throw a=new yn("AUTH_INVALID",{dbName:a}),mn(a),a;var b=sm();return{actualName:a+":"+b,publicName:a,userIdentifier:b}}
function Eo(a,b,c,d){var e,f,g,h,k,l;return A(function(n){switch(n.h){case 1:return f=null!=(e=Error().stack)?e:"",n.yield(zo(),2);case 2:g=n.i;if(!g)throw h=Dn("openDbImpl",a,b),T("ytidb_async_stack_killswitch")||(h.stack=h.stack+"\n"+f.substring(f.indexOf("\n")+1)),mn(h),h;on(a);k=c?{actualName:a,publicName:a,userIdentifier:void 0}:Do(a);Aa(n,3);return n.yield(oo(k,g),5);case 5:return n.yield(io(k.actualName,b,d),6);case 6:return n.return(n.i);case 3:return l=Ba(n),Aa(n,7),n.yield(po(k.actualName,
g),9);case 9:n.h=8;n.l=0;break;case 7:Ba(n);case 8:throw l;}})}
function Fo(a,b,c){c=void 0===c?{}:c;return Eo(a,b,!1,c)}
function Go(a,b,c){c=void 0===c?{}:c;return Eo(a,b,!0,c)}
function Ho(a,b){b=void 0===b?{}:b;var c,d;return A(function(e){if(1==e.h)return e.yield(zo(),2);if(3!=e.h){c=e.i;if(!c)return e.return();on(a);d=Do(a);return e.yield(jo(d.actualName,b),3)}return e.yield(po(d.actualName,c),0)})}
function Io(a,b,c){a=a.map(function(d){return A(function(e){return 1==e.h?e.yield(jo(d.actualName,b),2):e.yield(po(d.actualName,c),0)})});
return Promise.all(a).then(function(){})}
function Jo(){var a=void 0===a?{}:a;var b,c;return A(function(d){if(1==d.h)return d.yield(zo(),2);if(3!=d.h){b=d.i;if(!b)return d.return();on("LogsDatabaseV2");return d.yield(ro(b),3)}c=d.i;return d.yield(Io(c,a,b),0)})}
function Ko(a,b){b=void 0===b?{}:b;var c;return A(function(d){if(1==d.h)return d.yield(zo(),2);if(3!=d.h){c=d.i;if(!c)return d.return();on(a);return d.yield(jo(a,b),3)}return d.yield(po(a,c),0)})}
;function Lo(a,b){ko.call(this,a,b);this.options=b;on(a)}
w(Lo,ko);function Mo(a,b){var c;return function(){c||(c=new Lo(a,b));return c}}
Lo.prototype.i=function(a,b,c){c=void 0===c?{}:c;return(this.options.mc?Go:Fo)(a,b,Object.assign({},c))};
Lo.prototype.delete=function(a){a=void 0===a?{}:a;return(this.options.mc?Ko:Ho)(this.name,a)};
function No(a,b){return Mo(a,b)}
;var Oo={},Po=No("ytGcfConfig",{xb:(Oo.coldConfigStore={Cb:1},Oo.hotConfigStore={Cb:1},Oo),mc:!1,upgrade:function(a,b){b(1)&&(Zn(Sn(a,"hotConfigStore",{keyPath:"key",autoIncrement:!0}),"hotTimestampIndex","timestamp"),Zn(Sn(a,"coldConfigStore",{keyPath:"key",autoIncrement:!0}),"coldTimestampIndex","timestamp"))},
version:1});function Qo(a){return mo(Po(),a)}
function Ro(a,b,c){var d,e,f;return A(function(g){switch(g.h){case 1:return d={config:a,hashData:b,timestamp:W()},g.yield(Qo(c),2);case 2:return e=g.i,g.yield(e.clear("hotConfigStore"),3);case 3:return g.yield(Un(e,"hotConfigStore",d),4);case 4:return f=g.i,g.return(f)}})}
function So(a,b,c,d){var e,f,g;return A(function(h){switch(h.h){case 1:return e={config:a,hashData:b,configData:c,timestamp:W()},h.yield(Qo(d),2);case 2:return f=h.i,h.yield(f.clear("coldConfigStore"),3);case 3:return h.yield(Un(f,"coldConfigStore",e),4);case 4:return g=h.i,h.return(g)}})}
function To(a){var b,c;return A(function(d){return 1==d.h?d.yield(Qo(a),2):3!=d.h?(b=d.i,c=void 0,d.yield(Rn(b,["coldConfigStore"],{mode:"readwrite",ia:!0},function(e){return fo(e.objectStore("coldConfigStore").index("coldTimestampIndex"),{direction:"prev"},function(f){c=f.getValue()})}),3)):d.return(c)})}
function Uo(a){var b,c;return A(function(d){return 1==d.h?d.yield(Qo(a),2):3!=d.h?(b=d.i,c=void 0,d.yield(Rn(b,["hotConfigStore"],{mode:"readwrite",ia:!0},function(e){return fo(e.objectStore("hotConfigStore").index("hotTimestampIndex"),{direction:"prev"},function(f){c=f.getValue()})}),3)):d.return(c)})}
;function Vo(){H.call(this);this.i=[];this.h=[];var a=E("yt.gcf.config.hotUpdateCallbacks");a?(this.i=[].concat(ma(a)),this.h=a):(this.h=[],D("yt.gcf.config.hotUpdateCallbacks",this.h))}
w(Vo,H);Vo.prototype.R=function(){for(var a=v(this.i),b=a.next();!b.done;b=a.next()){var c=this.h;b=c.indexOf(b.value);0<=b&&c.splice(b,1)}this.i.length=0;H.prototype.R.call(this)};function Wo(){this.h=0;this.i=new Vo}
function Xo(){var a;return null!=(a=E("yt.gcf.config.hotConfigGroup"))?a:S("RAW_HOT_CONFIG_GROUP")}
function Yo(a,b,c){var d,e,f;return A(function(g){switch(g.h){case 1:if(!T("start_client_gcf")){g.B(0);break}c&&(a.j=c,D("yt.gcf.config.hotConfigGroup",a.j||null));a.l(b);d=yo();if(!d){g.B(3);break}if(c){g.B(4);break}return g.yield(Uo(d),5);case 5:e=g.i,c=null==(f=e)?void 0:f.config;case 4:return g.yield(Ro(c,b,d),3);case 3:if(c)for(var h=c,k=v(a.i.h),l=k.next();!l.done;l=k.next())l=l.value,l(h);g.h=0}})}
function Zo(a,b,c){var d,e,f,g;return A(function(h){if(1==h.h){if(!T("start_client_gcf"))return h.B(0);a.coldHashData=b;D("yt.gcf.config.coldHashData",a.coldHashData||null);return(d=yo())?c?h.B(4):h.yield(To(d),5):h.B(0)}4!=h.h&&(e=h.i,c=null==(f=e)?void 0:f.config);if(!c)return h.B(0);g=c.configData;return h.yield(So(c,b,g,d),0)})}
function $o(){if(!Wo.h){var a=new Wo;Wo.h=a}a=Wo.h;var b=W()-a.h;if(!(0!==a.h&&b<U("send_config_hash_timer"))){b=E("yt.gcf.config.coldConfigData");var c=E("yt.gcf.config.hotHashData"),d=E("yt.gcf.config.coldHashData");b&&c&&d&&(a.h=W());return{coldConfigData:b,hotHashData:c,coldHashData:d}}}
Wo.prototype.l=function(a){this.hotHashData=a;D("yt.gcf.config.hotHashData",this.hotHashData||null)};function ap(){return"INNERTUBE_API_KEY"in Tk&&"INNERTUBE_API_VERSION"in Tk}
function bp(){return{innertubeApiKey:S("INNERTUBE_API_KEY"),innertubeApiVersion:S("INNERTUBE_API_VERSION"),me:S("INNERTUBE_CONTEXT_CLIENT_CONFIG_INFO"),md:S("INNERTUBE_CONTEXT_CLIENT_NAME","WEB"),ag:S("INNERTUBE_CONTEXT_CLIENT_NAME",1),innertubeContextClientVersion:S("INNERTUBE_CONTEXT_CLIENT_VERSION"),oe:S("INNERTUBE_CONTEXT_HL"),ne:S("INNERTUBE_CONTEXT_GL"),pe:S("INNERTUBE_HOST_OVERRIDE")||"",re:!!S("INNERTUBE_USE_THIRD_PARTY_AUTH",!1),qe:!!S("INNERTUBE_OMIT_API_KEY_WHEN_AUTH_HEADER_IS_PRESENT",
!1),appInstallData:S("SERIALIZED_CLIENT_CONFIG_DATA")}}
function cp(a){var b={client:{hl:a.oe,gl:a.ne,clientName:a.md,clientVersion:a.innertubeContextClientVersion,configInfo:a.me}};navigator.userAgent&&(b.client.userAgent=String(navigator.userAgent));var c=C.devicePixelRatio;c&&1!=c&&(b.client.screenDensityFloat=String(c));c=S("EXPERIMENTS_TOKEN","");""!==c&&(b.client.experimentsToken=c);c=sl();0<c.length&&(b.request={internalExperimentFlags:c});c=a.md;if(("WEB"===c||"MWEB"===c||1===c||2===c)&&b){var d;b.client.mainAppWebInfo=null!=(d=b.client.mainAppWebInfo)?
d:{};b.client.mainAppWebInfo.webDisplayMode=$l()}(d=E("yt.embedded_player.embed_url"))&&b&&(b.thirdParty={embedUrl:d});var e;if(T("web_log_memory_total_kbytes")&&(null==(e=C.navigator)?0:e.deviceMemory)){var f;e=null==(f=C.navigator)?void 0:f.deviceMemory;b&&(b.client.memoryTotalKbytes=""+1E6*e)}a.appInstallData&&b&&(b.client.configInfo=b.client.configInfo||{},b.client.configInfo.appInstallData=a.appInstallData);(a=pm())&&b&&(b.client.connectionType=a);T("web_log_effective_connection_type")&&(a=qm())&&
b&&(b.client.effectiveConnectionType=a);T("start_client_gcf")&&(e=$o())&&(a=e.coldConfigData,f=e.coldHashData,e=e.hotHashData,a&&f&&e&&b&&(b.client.configInfo=b.client.configInfo||{},b.client.configInfo.coldConfigData=a,b.client.configInfo.coldHashData=f,b.client.configInfo.hotHashData=e));S("DELEGATED_SESSION_ID")&&!T("pageid_as_header_web")&&(b.user={onBehalfOfUser:S("DELEGATED_SESSION_ID")});!T("fill_delegate_context_in_gel_killswitch")&&(a=S("INNERTUBE_CONTEXT_SERIALIZED_DELEGATION_CONTEXT"))&&
(b.user=Object.assign({},b.user,{serializedDelegationContext:a}));a=Object;f=a.assign;e=b.client;d={};c=v(Object.entries(gl(S("DEVICE",""))));for(var g=c.next();!g.done;g=c.next()){var h=v(g.value);g=h.next().value;h=h.next().value;"cbrand"===g?d.deviceMake=h:"cmodel"===g?d.deviceModel=h:"cbr"===g?d.browserName=h:"cbrver"===g?d.browserVersion=h:"cos"===g?d.osName=h:"cosver"===g?d.osVersion=h:"cplatform"===g&&(d.platform=h)}b.client=f.call(a,e,d);return b}
function dp(a,b,c){c=void 0===c?{}:c;var d={};S("EOM_VISITOR_DATA")?d={"X-Goog-EOM-Visitor-Id":S("EOM_VISITOR_DATA")}:d={"X-Goog-Visitor-Id":c.visitorData||S("VISITOR_DATA","")};if(b&&b.includes("www.youtube-nocookie.com"))return d;b=c.authorization||S("AUTHORIZATION");b||(a?b="Bearer "+E("gapi.auth.getToken")().Tf:(a=Xl(Wl()),T("pageid_as_header_web")||delete a["X-Goog-PageId"],d=Object.assign({},d,a)));b&&(d.Authorization=b);return d}
;var ep="undefined"!==typeof TextEncoder?new TextEncoder:null,fp=ep?function(a){return ep.encode(a)}:function(a){for(var b=[],c=0,d=0;d<a.length;d++){var e=a.charCodeAt(d);
128>e?b[c++]=e:(2048>e?b[c++]=e>>6|192:(55296==(e&64512)&&d+1<a.length&&56320==(a.charCodeAt(d+1)&64512)?(e=65536+((e&1023)<<10)+(a.charCodeAt(++d)&1023),b[c++]=e>>18|240,b[c++]=e>>12&63|128):b[c++]=e>>12|224,b[c++]=e>>6&63|128),b[c++]=e&63|128)}a=new Uint8Array(b.length);for(c=0;c<a.length;c++)a[c]=b[c];return a};function gp(a,b){this.version=a;this.args=b}
gp.prototype.serialize=function(){return{version:this.version,args:this.args}};function hp(a,b){this.topic=a;this.h=b}
hp.prototype.toString=function(){return this.topic};var ip=E("ytPubsub2Pubsub2Instance")||new L;L.prototype.subscribe=L.prototype.subscribe;L.prototype.unsubscribeByKey=L.prototype.Ab;L.prototype.publish=L.prototype.Ya;L.prototype.clear=L.prototype.clear;D("ytPubsub2Pubsub2Instance",ip);var jp=E("ytPubsub2Pubsub2SubscribedKeys")||{};D("ytPubsub2Pubsub2SubscribedKeys",jp);var kp=E("ytPubsub2Pubsub2TopicToKeys")||{};D("ytPubsub2Pubsub2TopicToKeys",kp);var lp=E("ytPubsub2Pubsub2IsAsync")||{};D("ytPubsub2Pubsub2IsAsync",lp);
D("ytPubsub2Pubsub2SkipSubKey",null);function mp(a,b){var c=np();c&&c.publish.call(c,a.toString(),a,b)}
function op(a){var b=pp,c=np();if(!c)return 0;var d=c.subscribe(b.toString(),function(e,f){var g=E("ytPubsub2Pubsub2SkipSubKey");g&&g==d||(g=function(){if(jp[d])try{if(f&&b instanceof hp&&b!=e)try{var h=b.h,k=f;if(!k.args||!k.version)throw Error("yt.pubsub2.Data.deserialize(): serializedData is incomplete.");try{if(!h.Wa){var l=new h;h.Wa=l.version}var n=h.Wa}catch(y){}if(!n||k.version!=n)throw Error("yt.pubsub2.Data.deserialize(): serializedData version is incompatible.");try{n=Reflect;var p=n.construct;
var r=k.args,t=r.length;if(0<t){var x=Array(t);for(k=0;k<t;k++)x[k]=r[k];var z=x}else z=[];f=p.call(n,h,z)}catch(y){throw y.message="yt.pubsub2.Data.deserialize(): "+y.message,y;}}catch(y){throw y.message="yt.pubsub2.pubsub2 cross-binary conversion error for "+b.toString()+": "+y.message,y;}a.call(window,f)}catch(y){Zk(y)}},lp[b.toString()]?E("yt.scheduler.instance")?vi.oa(g):pl(g,0):g())});
jp[d]=!0;kp[b.toString()]||(kp[b.toString()]=[]);kp[b.toString()].push(d);return d}
function qp(){var a=rp,b=op(function(c){a.apply(void 0,arguments);sp(b)});
return b}
function sp(a){var b=np();b&&("number"===typeof a&&(a=[a]),fb(a,function(c){b.unsubscribeByKey(c);delete jp[c]}))}
function np(){return E("ytPubsub2Pubsub2Instance")}
;function tp(a,b,c){c=void 0===c?{sampleRate:.1}:c;Math.random()<Math.min(.02,c.sampleRate/100)&&mp("meta_logging_csi_event",{timerName:a,pg:b})}
;var up=void 0,vp=void 0;function wp(){vp||(vp=vk(S("WORKER_SERIALIZATION_URL")));return vp||void 0}
function xp(){var a=wp();up||void 0===a||(up=new Worker(Db(a),void 0));return up}
;var yp=U("max_body_size_to_compress",5E5),zp=U("min_body_size_to_compress",500),Ap=!0,Bp=0,Cp=0,Dp=U("compression_performance_threshold_lr",250),Ep=U("slow_compressions_before_abandon_count",4),Fp=!1,Gp=new Map,Hp=1,Ip=!0;function Jp(){if("function"===typeof Worker&&wp()&&!Fp){var a=function(c){c=c.data;if("gzippedGelBatch"===c.op){var d=Gp.get(c.key);d&&(Kp(c.gzippedBatch,d.latencyPayload,d.url,d.options,d.sendFn),Gp.delete(c.key))}},b=xp();
b&&(b.addEventListener("message",a),b.onerror=function(){Gp.clear()},Fp=!0)}}
function Lp(a,b,c,d,e){e=void 0===e?!1:e;var f={startTime:W(),ticks:{},infos:{}};if(Ap)try{var g=Mp(b);if(null!=g&&(g>yp||g<zp))d(a,c);else{if(T("gzip_gel_with_worker")&&(T("initial_gzip_use_main_thread")&&!Ip||!T("initial_gzip_use_main_thread"))){Fp||Jp();var h=xp();if(h&&!e){Gp.set(Hp,{latencyPayload:f,url:a,options:c,sendFn:d});h.postMessage({op:"gelBatchToGzip",serializedBatch:b,key:Hp});Hp++;return}}var k=uk(fp(b));Kp(k,f,a,c,d)}}catch(l){$k(l),d(a,c)}else d(a,c)}
function Kp(a,b,c,d,e){Ip=!1;var f=W();b.ticks.gelc=f;Cp++;T("disable_compression_due_to_performance_degredation")&&f-b.startTime>=Dp&&(Bp++,T("abandon_compression_after_N_slow_zips")?Cp===U("compression_disable_point")&&Bp>Ep&&(Ap=!1):Ap=!1);Np(b);d.headers||(d.headers={});d.headers["Content-Encoding"]="gzip";d.postBody=a;d.postParams=void 0;e(c,d)}
function Op(a){var b=void 0===b?!1:b;var c=void 0===c?!1:c;var d=W(),e={startTime:d,ticks:{},infos:{}},f=b?E("yt.logging.gzipForFetch",!1):!0;if(Ap&&f){if(!a.body)return a;try{var g=c?a.body:"string"===typeof a.body?a.body:JSON.stringify(a.body);f=g;if(!c&&"string"===typeof g){var h=Mp(g);if(null!=h&&(h>yp||h<zp))return a;c=b?{level:1}:void 0;f=uk(fp(g),c);var k=W();e.ticks.gelc=k;if(b){Cp++;if((T("disable_compression_due_to_performance_degredation")||T("disable_compression_due_to_performance_degradation_lr"))&&
k-d>=Dp)if(Bp++,T("abandon_compression_after_N_slow_zips")||T("abandon_compression_after_N_slow_zips_lr")){b=Bp/Cp;var l=Ep/U("compression_disable_point");0<Cp&&0===Cp%U("compression_disable_point")&&b>=l&&(Ap=!1)}else Ap=!1;Np(e)}}a.headers=Object.assign({},{"Content-Encoding":"gzip"},a.headers||{});a.body=f;return a}catch(n){return $k(n),a}}else return a}
function Mp(a){try{return(new Blob(a.split(""))).size}catch(b){return $k(b),null}}
function Np(a){T("gel_compression_csi_killswitch")||!T("log_gel_compression_latency")&&!T("log_gel_compression_latency_lr")||tp("gel_compression",a,{sampleRate:.1})}
;function Pp(a){a=Object.assign({},a);delete a.Authorization;var b=Wg();if(b){var c=new Bi;c.update(S("INNERTUBE_API_KEY"));c.update(b);a.hash=Se(c.digest(),3)}return a}
;var Qp;function Rp(){Qp||(Qp=new bn("yt.innertube"));return Qp}
function Sp(a,b,c,d){if(d)return null;d=Rp().get("nextId",!0)||1;var e=Rp().get("requests",!0)||{};e[d]={method:a,request:b,authState:Pp(c),requestTime:Math.round(W())};Rp().set("nextId",d+1,86400,!0);Rp().set("requests",e,86400,!0);return d}
function Tp(a){var b=Rp().get("requests",!0)||{};delete b[a];Rp().set("requests",b,86400,!0)}
function Up(a){var b=Rp().get("requests",!0);if(b){for(var c in b){var d=b[c];if(!(6E4>Math.round(W())-d.requestTime)){var e=d.authState,f=Pp(dp(!1));sb(e,f)&&(e=d.request,"requestTimeMs"in e&&(e.requestTimeMs=Math.round(W())),Vp(a,d.method,e,{}));delete b[c]}}Rp().set("requests",b,86400,!0)}}
;function Wp(a){this.Ub=this.h=!1;this.potentialEsfErrorCounter=this.i=0;this.handleError=function(){};
this.pb=function(){};
this.now=Date.now;this.Fb=!1;var b;this.Fd=null!=(b=a.Fd)?b:100;var c;this.zd=null!=(c=a.zd)?c:1;var d;this.xd=null!=(d=a.xd)?d:2592E6;var e;this.vd=null!=(e=a.vd)?e:12E4;var f;this.yd=null!=(f=a.yd)?f:5E3;var g;this.T=null!=(g=a.T)?g:void 0;this.Zb=!!a.Zb;var h;this.Xb=null!=(h=a.Xb)?h:.1;var k;this.ic=null!=(k=a.ic)?k:10;a.handleError&&(this.handleError=a.handleError);a.pb&&(this.pb=a.pb);a.Fb&&(this.Fb=a.Fb);a.Ub&&(this.Ub=a.Ub);this.U=a.U;this.Da=a.Da;this.da=a.da;this.aa=a.aa;this.sendFn=a.sendFn;
this.Oc=a.Oc;this.Lc=a.Lc;Xp(this)&&(!this.U||this.U("networkless_logging"))&&Yp(this)}
function Yp(a){Xp(a)&&!a.Fb&&(a.h=!0,a.Zb&&Math.random()<=a.Xb&&a.da.Sd(a.T),Zp(a),a.aa.wa()&&a.Pb(),a.aa.listen(a.Oc,a.Pb.bind(a)),a.aa.listen(a.Lc,a.Zc.bind(a)))}
m=Wp.prototype;m.writeThenSend=function(a,b){var c=this;b=void 0===b?{}:b;if(Xp(this)&&this.h){var d={url:a,options:b,timestamp:this.now(),status:"NEW",sendCount:0};this.da.set(d,this.T).then(function(e){d.id=e;c.aa.wa()&&$p(c,d)}).catch(function(e){$p(c,d);
aq(c,e)})}else this.sendFn(a,b)};
m.sendThenWrite=function(a,b,c){var d=this;b=void 0===b?{}:b;if(Xp(this)&&this.h){var e={url:a,options:b,timestamp:this.now(),status:"NEW",sendCount:0};this.U&&this.U("nwl_skip_retry")&&(e.skipRetry=c);if(this.aa.wa()||this.U&&this.U("nwl_aggressive_send_then_write")&&!e.skipRetry){if(!e.skipRetry){var f=b.onError?b.onError:function(){};
b.onError=function(g,h){return A(function(k){if(1==k.h)return k.yield(d.da.set(e,d.T).catch(function(l){aq(d,l)}),2);
f(g,h);k.h=0})}}this.sendFn(a,b,e.skipRetry)}else this.da.set(e,this.T).catch(function(g){d.sendFn(a,b,e.skipRetry);
aq(d,g)})}else this.sendFn(a,b,this.U&&this.U("nwl_skip_retry")&&c)};
m.sendAndWrite=function(a,b){var c=this;b=void 0===b?{}:b;if(Xp(this)&&this.h){var d={url:a,options:b,timestamp:this.now(),status:"NEW",sendCount:0},e=!1,f=b.onSuccess?b.onSuccess:function(){};
d.options.onSuccess=function(g,h){void 0!==d.id?c.da.nb(d.id,c.T):e=!0;c.aa.gb&&c.U&&c.U("vss_network_hint")&&c.aa.gb(!0);f(g,h)};
this.sendFn(d.url,d.options,void 0,!0);this.da.set(d,this.T).then(function(g){d.id=g;e&&c.da.nb(d.id,c.T)}).catch(function(g){aq(c,g)})}else this.sendFn(a,b,void 0,!0)};
m.Pb=function(){var a=this;if(!Xp(this))throw Error("IndexedDB is not supported: throttleSend");this.i||(this.i=this.Da.oa(function(){var b;return A(function(c){if(1==c.h)return c.yield(a.da.jd("NEW",a.T),2);if(3!=c.h)return b=c.i,b?c.yield($p(a,b),3):(a.Zc(),c.return());a.i&&(a.i=0,a.Pb());c.h=0})},this.Fd))};
m.Zc=function(){this.Da.pa(this.i);this.i=0};
function $p(a,b){var c;return A(function(d){switch(d.h){case 1:if(!Xp(a))throw Error("IndexedDB is not supported: immediateSend");if(void 0===b.id){d.B(2);break}return d.yield(a.da.ue(b.id,a.T),3);case 3:(c=d.i)||a.pb(Error("The request cannot be found in the database."));case 2:if(bq(a,b,a.xd)){d.B(4);break}a.pb(Error("Networkless Logging: Stored logs request expired age limit"));if(void 0===b.id){d.B(5);break}return d.yield(a.da.nb(b.id,a.T),5);case 5:return d.return();case 4:b.skipRetry||(b=cq(a,
b));if(!b){d.B(0);break}if(!b.skipRetry||void 0===b.id){d.B(8);break}return d.yield(a.da.nb(b.id,a.T),8);case 8:a.sendFn(b.url,b.options,!!b.skipRetry),d.h=0}})}
function cq(a,b){if(!Xp(a))throw Error("IndexedDB is not supported: updateRequestHandlers");var c=b.options.onError?b.options.onError:function(){};
b.options.onError=function(e,f){var g,h,k,l;return A(function(n){switch(n.h){case 1:g=dq(f);(h=eq(f))&&a.U&&a.U("web_enable_error_204")&&a.handleError(Error("Request failed due to compression"),b.url,f);if(!(a.U&&a.U("nwl_consider_error_code")&&g||a.U&&!a.U("nwl_consider_error_code")&&a.potentialEsfErrorCounter<=a.ic)){n.B(2);break}if(!a.aa.lc){n.B(3);break}return n.yield(a.aa.lc(),3);case 3:if(a.aa.wa()){n.B(2);break}c(e,f);if(!a.U||!a.U("nwl_consider_error_code")||void 0===(null==(k=b)?void 0:k.id)){n.B(6);
break}return n.yield(a.da.Pc(b.id,a.T,!1),6);case 6:return n.return();case 2:if(a.U&&a.U("nwl_consider_error_code")&&!g&&a.potentialEsfErrorCounter>a.ic)return n.return();a.potentialEsfErrorCounter++;if(void 0===(null==(l=b)?void 0:l.id)){n.B(8);break}return b.sendCount<a.zd?n.yield(a.da.Pc(b.id,a.T,!0,h?!1:void 0),12):n.yield(a.da.nb(b.id,a.T),8);case 12:a.Da.oa(function(){a.aa.wa()&&a.Pb()},a.yd);
case 8:c(e,f),n.h=0}})};
var d=b.options.onSuccess?b.options.onSuccess:function(){};
b.options.onSuccess=function(e,f){var g;return A(function(h){if(1==h.h)return void 0===(null==(g=b)?void 0:g.id)?h.B(2):h.yield(a.da.nb(b.id,a.T),2);a.aa.gb&&a.U&&a.U("vss_network_hint")&&a.aa.gb(!0);d(e,f);h.h=0})};
return b}
function bq(a,b,c){b=b.timestamp;return a.now()-b>=c?!1:!0}
function Zp(a){if(!Xp(a))throw Error("IndexedDB is not supported: retryQueuedRequests");a.da.jd("QUEUED",a.T).then(function(b){b&&!bq(a,b,a.vd)?a.Da.oa(function(){return A(function(c){if(1==c.h)return void 0===b.id?c.B(2):c.yield(a.da.Pc(b.id,a.T),2);Zp(a);c.h=0})}):a.aa.wa()&&a.Pb()})}
function aq(a,b){a.Ld&&!a.aa.wa()?a.Ld(b):a.handleError(b)}
function Xp(a){return!!a.T||a.Ub}
function dq(a){var b;return(a=null==a?void 0:null==(b=a.error)?void 0:b.code)&&400<=a&&599>=a?!1:!0}
function eq(a){var b;a=null==a?void 0:null==(b=a.error)?void 0:b.code;return!(400!==a&&415!==a)}
;var fq;
function gq(){if(fq)return fq();var a={};fq=No("LogsDatabaseV2",{xb:(a.LogsRequestsStore={Cb:2},a),mc:!1,upgrade:function(b,c,d){c(2)&&Sn(b,"LogsRequestsStore",{keyPath:"id",autoIncrement:!0});c(3);c(5)&&(d=d.objectStore("LogsRequestsStore"),d.h.indexNames.contains("newRequest")&&d.h.deleteIndex("newRequest"),Zn(d,"newRequestV2",["status","interface","timestamp"]));c(7)&&b.h.objectStoreNames.contains("sapisid")&&b.h.deleteObjectStore("sapisid");c(9)&&b.h.objectStoreNames.contains("SWHealthLog")&&b.h.deleteObjectStore("SWHealthLog")},
version:9});return fq()}
;function hq(a){return mo(gq(),a)}
function iq(a,b){var c,d,e,f;return A(function(g){if(1==g.h)return c={startTime:W(),infos:{transactionType:"YT_IDB_TRANSACTION_TYPE_WRITE"},ticks:{}},g.yield(hq(b),2);if(3!=g.h)return d=g.i,e=Object.assign({},a,{options:JSON.parse(JSON.stringify(a.options)),interface:S("INNERTUBE_CONTEXT_CLIENT_NAME",0)}),g.yield(Un(d,"LogsRequestsStore",e),3);f=g.i;c.ticks.tc=W();jq(c);return g.return(f)})}
function kq(a,b){var c,d,e,f,g,h,k,l;return A(function(n){if(1==n.h)return c={startTime:W(),infos:{transactionType:"YT_IDB_TRANSACTION_TYPE_READ"},ticks:{}},n.yield(hq(b),2);if(3!=n.h)return d=n.i,e=S("INNERTUBE_CONTEXT_CLIENT_NAME",0),f=[a,e,0],g=[a,e,W()],h=IDBKeyRange.bound(f,g),k="prev",T("use_fifo_for_networkless")&&(k="next"),l=void 0,n.yield(Rn(d,["LogsRequestsStore"],{mode:"readwrite",ia:!0},function(p){return fo(p.objectStore("LogsRequestsStore").index("newRequestV2"),{query:h,direction:k},
function(r){r.getValue()&&(l=r.getValue(),"NEW"===a&&(l.status="QUEUED",r.update(l)))})}),3);
c.ticks.tc=W();jq(c);return n.return(l)})}
function lq(a,b){var c;return A(function(d){if(1==d.h)return d.yield(hq(b),2);c=d.i;return d.return(Rn(c,["LogsRequestsStore"],{mode:"readwrite",ia:!0},function(e){var f=e.objectStore("LogsRequestsStore");return f.get(a).then(function(g){if(g)return g.status="QUEUED",Nn(f.h.put(g,void 0)).then(function(){return g})})}))})}
function mq(a,b,c,d){c=void 0===c?!0:c;var e;return A(function(f){if(1==f.h)return f.yield(hq(b),2);e=f.i;return f.return(Rn(e,["LogsRequestsStore"],{mode:"readwrite",ia:!0},function(g){var h=g.objectStore("LogsRequestsStore");return h.get(a).then(function(k){return k?(k.status="NEW",c&&(k.sendCount+=1),void 0!==d&&(k.options.compress=d),Nn(h.h.put(k,void 0)).then(function(){return k})):Hn.resolve(void 0)})}))})}
function nq(a,b){var c;return A(function(d){if(1==d.h)return d.yield(hq(b),2);c=d.i;return d.return(c.delete("LogsRequestsStore",a))})}
function oq(a){var b,c;return A(function(d){if(1==d.h)return d.yield(hq(a),2);b=d.i;c=W()-2592E6;return d.yield(Rn(b,["LogsRequestsStore"],{mode:"readwrite",ia:!0},function(e){return ao(e.objectStore("LogsRequestsStore"),{},function(f){if(f.getValue().timestamp<=c)return f.delete().then(function(){return bo(f)})})}),0)})}
function pq(){A(function(a){return a.yield(Jo(),0)})}
function jq(a){T("nwl_csi_killswitch")||tp("networkless_performance",a,{sampleRate:1})}
;var qq={accountStateChangeSignedIn:23,accountStateChangeSignedOut:24,delayedEventMetricCaptured:11,latencyActionBaselined:6,latencyActionInfo:7,latencyActionTicked:5,offlineTransferStatusChanged:2,offlineImageDownload:335,playbackStartStateChanged:9,systemHealthCaptured:3,mangoOnboardingCompleted:10,mangoPushNotificationReceived:230,mangoUnforkDbMigrationError:121,mangoUnforkDbMigrationSummary:122,mangoUnforkDbMigrationPreunforkDbVersionNumber:133,mangoUnforkDbMigrationPhoneMetadata:134,mangoUnforkDbMigrationPhoneStorage:135,
mangoUnforkDbMigrationStep:142,mangoAsyncApiMigrationEvent:223,mangoDownloadVideoResult:224,mangoHomepageVideoCount:279,mangoHomeV3State:295,mangoImageClientCacheHitEvent:273,sdCardStatusChanged:98,framesDropped:12,thumbnailHovered:13,deviceRetentionInfoCaptured:14,thumbnailLoaded:15,backToAppEvent:318,streamingStatsCaptured:17,offlineVideoShared:19,appCrashed:20,youThere:21,offlineStateSnapshot:22,mdxSessionStarted:25,mdxSessionConnected:26,mdxSessionDisconnected:27,bedrockResourceConsumptionSnapshot:28,
nextGenWatchWatchSwiped:29,kidsAccountsSnapshot:30,zeroStepChannelCreated:31,tvhtml5SearchCompleted:32,offlineSharePairing:34,offlineShareUnlock:35,mdxRouteDistributionSnapshot:36,bedrockRepetitiveActionTimed:37,unpluggedDegradationInfo:229,uploadMp4HeaderMoved:38,uploadVideoTranscoded:39,uploadProcessorStarted:46,uploadProcessorEnded:47,uploadProcessorReady:94,uploadProcessorRequirementPending:95,uploadProcessorInterrupted:96,uploadFrontendEvent:241,assetPackDownloadStarted:41,assetPackDownloaded:42,
assetPackApplied:43,assetPackDeleted:44,appInstallAttributionEvent:459,playbackSessionStopped:45,adBlockerMessagingShown:48,distributionChannelCaptured:49,dataPlanCpidRequested:51,detailedNetworkTypeCaptured:52,sendStateUpdated:53,receiveStateUpdated:54,sendDebugStateUpdated:55,receiveDebugStateUpdated:56,kidsErrored:57,mdxMsnSessionStatsFinished:58,appSettingsCaptured:59,mdxWebSocketServerHttpError:60,mdxWebSocketServer:61,startupCrashesDetected:62,coldStartInfo:435,offlinePlaybackStarted:63,liveChatMessageSent:225,
liveChatUserPresent:434,liveChatBeingModerated:457,liveCreationCameraUpdated:64,liveCreationEncodingCaptured:65,liveCreationError:66,liveCreationHealthUpdated:67,liveCreationVideoEffectsCaptured:68,liveCreationStageOccured:75,liveCreationBroadcastScheduled:123,liveCreationArchiveReplacement:149,liveCreationCostreamingConnection:421,liveCreationStreamWebrtcStats:288,mdxSessionRecoveryStarted:69,mdxSessionRecoveryCompleted:70,mdxSessionRecoveryStopped:71,visualElementShown:72,visualElementHidden:73,
visualElementGestured:78,visualElementStateChanged:208,screenCreated:156,playbackAssociated:202,visualElementAttached:215,playbackContextEvent:214,cloudCastingPlaybackStarted:74,webPlayerApiCalled:76,tvhtml5AccountDialogOpened:79,foregroundHeartbeat:80,foregroundHeartbeatScreenAssociated:111,kidsOfflineSnapshot:81,mdxEncryptionSessionStatsFinished:82,playerRequestCompleted:83,liteSchedulerStatistics:84,mdxSignIn:85,spacecastMetadataLookupRequested:86,spacecastBatchLookupRequested:87,spacecastSummaryRequested:88,
spacecastPlayback:89,spacecastDiscovery:90,tvhtml5LaunchUrlComponentChanged:91,mdxBackgroundPlaybackRequestCompleted:92,mdxBrokenAdditionalDataDeviceDetected:93,tvhtml5LocalStorage:97,tvhtml5DeviceStorageStatus:147,autoCaptionsAvailable:99,playbackScrubbingEvent:339,flexyState:100,interfaceOrientationCaptured:101,mainAppBrowseFragmentCache:102,offlineCacheVerificationFailure:103,offlinePlaybackExceptionDigest:217,vrCopresenceStats:104,vrCopresenceSyncStats:130,vrCopresenceCommsStats:137,vrCopresencePartyStats:153,
vrCopresenceEmojiStats:213,vrCopresenceEvent:141,vrCopresenceFlowTransitEvent:160,vrCowatchPartyEvent:492,vrPlaybackEvent:345,kidsAgeGateTracking:105,offlineDelayAllowedTracking:106,mainAppAutoOfflineState:107,videoAsThumbnailDownload:108,videoAsThumbnailPlayback:109,liteShowMore:110,renderingError:118,kidsProfilePinGateTracking:119,abrTrajectory:124,scrollEvent:125,streamzIncremented:126,kidsProfileSwitcherTracking:127,kidsProfileCreationTracking:129,buyFlowStarted:136,mbsConnectionInitiated:138,
mbsPlaybackInitiated:139,mbsLoadChildren:140,liteProfileFetcher:144,mdxRemoteTransaction:146,reelPlaybackError:148,reachabilityDetectionEvent:150,mobilePlaybackEvent:151,courtsidePlayerStateChanged:152,musicPersistentCacheChecked:154,musicPersistentCacheCleared:155,playbackInterrupted:157,playbackInterruptionResolved:158,fixFopFlow:159,anrDetection:161,backstagePostCreationFlowEnded:162,clientError:163,gamingAccountLinkStatusChanged:164,liteHousewarming:165,buyFlowEvent:167,kidsParentalGateTracking:168,
kidsSignedOutSettingsStatus:437,kidsSignedOutPauseHistoryFixStatus:438,tvhtml5WatchdogViolation:444,ypcUpgradeFlow:169,yongleStudy:170,ypcUpdateFlowStarted:171,ypcUpdateFlowCancelled:172,ypcUpdateFlowSucceeded:173,ypcUpdateFlowFailed:174,liteGrowthkitPromo:175,paymentFlowStarted:341,transactionFlowShowPaymentDialog:405,transactionFlowStarted:176,transactionFlowSecondaryDeviceStarted:222,transactionFlowSecondaryDeviceSignedOutStarted:383,transactionFlowCancelled:177,transactionFlowPaymentCallBackReceived:387,
transactionFlowPaymentSubmitted:460,transactionFlowPaymentSucceeded:329,transactionFlowSucceeded:178,transactionFlowFailed:179,transactionFlowPlayBillingConnectionStartEvent:428,transactionFlowSecondaryDeviceSuccess:458,transactionFlowErrorEvent:411,liteVideoQualityChanged:180,watchBreakEnablementSettingEvent:181,watchBreakFrequencySettingEvent:182,videoEffectsCameraPerformanceMetrics:183,adNotify:184,startupTelemetry:185,playbackOfflineFallbackUsed:186,outOfMemory:187,ypcPauseFlowStarted:188,ypcPauseFlowCancelled:189,
ypcPauseFlowSucceeded:190,ypcPauseFlowFailed:191,uploadFileSelected:192,ypcResumeFlowStarted:193,ypcResumeFlowCancelled:194,ypcResumeFlowSucceeded:195,ypcResumeFlowFailed:196,adsClientStateChange:197,ypcCancelFlowStarted:198,ypcCancelFlowCancelled:199,ypcCancelFlowSucceeded:200,ypcCancelFlowFailed:201,ypcCancelFlowGoToPaymentProcessor:402,ypcDeactivateFlowStarted:320,ypcRedeemFlowStarted:203,ypcRedeemFlowCancelled:204,ypcRedeemFlowSucceeded:205,ypcRedeemFlowFailed:206,ypcFamilyCreateFlowStarted:258,
ypcFamilyCreateFlowCancelled:259,ypcFamilyCreateFlowSucceeded:260,ypcFamilyCreateFlowFailed:261,ypcFamilyManageFlowStarted:262,ypcFamilyManageFlowCancelled:263,ypcFamilyManageFlowSucceeded:264,ypcFamilyManageFlowFailed:265,restoreContextEvent:207,embedsAdEvent:327,autoplayTriggered:209,clientDataErrorEvent:210,experimentalVssValidation:211,tvhtml5TriggeredEvent:212,tvhtml5FrameworksFieldTrialResult:216,tvhtml5FrameworksFieldTrialStart:220,musicOfflinePreferences:218,watchTimeSegment:219,appWidthLayoutError:221,
accountRegistryChange:226,userMentionAutoCompleteBoxEvent:227,downloadRecommendationEnablementSettingEvent:228,musicPlaybackContentModeChangeEvent:231,offlineDbOpenCompleted:232,kidsFlowEvent:233,kidsFlowCorpusSelectedEvent:234,videoEffectsEvent:235,unpluggedOpsEogAnalyticsEvent:236,playbackAudioRouteEvent:237,interactionLoggingDebugModeError:238,offlineYtbRefreshed:239,kidsFlowError:240,musicAutoplayOnLaunchAttempted:242,deviceContextActivityEvent:243,deviceContextEvent:244,templateResolutionException:245,
musicSideloadedPlaylistServiceCalled:246,embedsStorageAccessNotChecked:247,embedsHasStorageAccessResult:248,embedsItpPlayedOnReload:249,embedsRequestStorageAccessResult:250,embedsShouldRequestStorageAccessResult:251,embedsRequestStorageAccessState:256,embedsRequestStorageAccessFailedState:257,embedsItpWatchLaterResult:266,searchSuggestDecodingPayloadFailure:252,siriShortcutActivated:253,tvhtml5KeyboardPerformance:254,latencyActionSpan:255,elementsLog:267,ytbFileOpened:268,tfliteModelError:269,apiTest:270,
yongleUsbSetup:271,touStrikeInterstitialEvent:272,liteStreamToSave:274,appBundleClientEvent:275,ytbFileCreationFailed:276,adNotifyFailure:278,ytbTransferFailed:280,blockingRequestFailed:281,liteAccountSelector:282,liteAccountUiCallbacks:283,dummyPayload:284,browseResponseValidationEvent:285,entitiesError:286,musicIosBackgroundFetch:287,mdxNotificationEvent:289,layersValidationError:290,musicPwaInstalled:291,liteAccountCleanup:292,html5PlayerHealthEvent:293,watchRestoreAttempt:294,liteAccountSignIn:296,
notaireEvent:298,kidsVoiceSearchEvent:299,adNotifyFilled:300,delayedEventDropped:301,analyticsSearchEvent:302,systemDarkThemeOptOutEvent:303,flowEvent:304,networkConnectivityBaselineEvent:305,ytbFileImported:306,downloadStreamUrlExpired:307,directSignInEvent:308,lyricImpressionEvent:309,accessibilityStateEvent:310,tokenRefreshEvent:311,genericAttestationExecution:312,tvhtml5VideoSeek:313,unpluggedAutoPause:314,scrubbingEvent:315,bedtimeReminderEvent:317,tvhtml5UnexpectedRestart:319,tvhtml5StabilityTraceEvent:478,
tvhtml5OperationHealth:467,tvhtml5WatchKeyEvent:321,voiceLanguageChanged:322,tvhtml5LiveChatStatus:323,parentToolsCorpusSelectedEvent:324,offerAdsEnrollmentInitiated:325,networkQualityIntervalEvent:326,deviceStartupMetrics:328,heartbeatActionPlayerTransitioned:330,tvhtml5Lifecycle:331,heartbeatActionPlayerHalted:332,adaptiveInlineMutedSettingEvent:333,mainAppLibraryLoadingState:334,thirdPartyLogMonitoringEvent:336,appShellAssetLoadReport:337,tvhtml5AndroidAttestation:338,tvhtml5StartupSoundEvent:340,
iosBackgroundRefreshTask:342,iosBackgroundProcessingTask:343,sliEventBatch:344,postImpressionEvent:346,musicSideloadedPlaylistExport:347,idbUnexpectedlyClosed:348,voiceSearchEvent:349,mdxSessionCastEvent:350,idbQuotaExceeded:351,idbTransactionEnded:352,idbTransactionAborted:353,tvhtml5KeyboardLogging:354,idbIsSupportedCompleted:355,creatorStudioMobileEvent:356,idbDataCorrupted:357,parentToolsAppChosenEvent:358,webViewBottomSheetResized:359,activeStateControllerScrollPerformanceSummary:360,navigatorValidation:361,
mdxSessionHeartbeat:362,clientHintsPolyfillDiagnostics:363,clientHintsPolyfillEvent:364,proofOfOriginTokenError:365,kidsAddedAccountSummary:366,musicWearableDevice:367,ypcRefundFlowEvent:368,tvhtml5PlaybackMeasurementEvent:369,tvhtml5WatermarkMeasurementEvent:370,clientExpGcfPropagationEvent:371,mainAppReferrerIntent:372,leaderLockEnded:373,leaderLockAcquired:374,googleHatsEvent:375,persistentLensLaunchEvent:376,parentToolsChildWelcomeChosenEvent:378,browseThumbnailPreloadEvent:379,finalPayload:380,
mdxDialAdditionalDataUpdateEvent:381,webOrchestrationTaskLifecycleRecord:382,startupSignalEvent:384,accountError:385,gmsDeviceCheckEvent:386,accountSelectorEvent:388,accountUiCallbacks:389,mdxDialAdditionalDataProbeEvent:390,downloadsSearchIcingApiStats:391,downloadsSearchIndexUpdatedEvent:397,downloadsSearchIndexSnapshot:398,dataPushClientEvent:392,kidsCategorySelectedEvent:393,mdxDeviceManagementSnapshotEvent:394,prefetchRequested:395,prefetchableCommandExecuted:396,gelDebuggingEvent:399,webLinkTtsPlayEnd:400,
clipViewInvalid:401,persistentStorageStateChecked:403,cacheWipeoutEvent:404,playerEvent:410,sfvEffectPipelineStartedEvent:412,sfvEffectPipelinePausedEvent:429,sfvEffectPipelineEndedEvent:413,sfvEffectChosenEvent:414,sfvEffectLoadedEvent:415,sfvEffectUserInteractionEvent:465,sfvEffectFirstFrameProcessedLatencyEvent:416,sfvEffectAggregatedFramesProcessedLatencyEvent:417,sfvEffectAggregatedFramesDroppedEvent:418,sfvEffectPipelineErrorEvent:430,sfvEffectGraphFrozenEvent:419,sfvEffectGlThreadBlockedEvent:420,
mdeVideoChangedEvent:442,mdePlayerPerformanceMetrics:472,genericClientExperimentEvent:423,homePreloadTaskScheduled:424,homePreloadTaskExecuted:425,homePreloadCacheHit:426,polymerPropertyChangedInObserver:427,applicationStarted:431,networkCronetRttBatch:432,networkCronetRttSummary:433,repeatChapterLoopEvent:436,seekCancellationEvent:462,lockModeTimeoutEvent:483,offlineTransferStarted:4,musicOfflineMixtapePreferencesChanged:16,mangoDailyNewVideosNotificationAttempt:40,mangoDailyNewVideosNotificationError:77,
dtwsPlaybackStarted:112,dtwsTileFetchStarted:113,dtwsTileFetchCompleted:114,dtwsTileFetchStatusChanged:145,dtwsKeyframeDecoderBufferSent:115,dtwsTileUnderflowedOnNonkeyframe:116,dtwsBackfillFetchStatusChanged:143,dtwsBackfillUnderflowed:117,dtwsAdaptiveLevelChanged:128,blockingVisitorIdTimeout:277,liteSocial:18,mobileJsInvocation:297,biscottiBasedDetection:439,coWatchStateChange:440,embedsVideoDataDidChange:441,shortsFirst:443,cruiseControlEvent:445,qoeClientLoggingContext:446,atvRecommendationJobExecuted:447,
tvhtml5UserFeedback:448,producerProjectCreated:449,producerProjectOpened:450,producerProjectDeleted:451,producerProjectElementAdded:453,producerProjectElementRemoved:454,tvhtml5ShowClockEvent:455,deviceCapabilityCheckMetrics:456,youtubeClearcutEvent:461,offlineBrowseFallbackEvent:463,getCtvTokenEvent:464,startupDroppedFramesSummary:466,screenshotEvent:468,miniAppPlayEvent:469,elementsDebugCounters:470,fontLoadEvent:471,webKillswitchReceived:473,webKillswitchExecuted:474,cameraOpenEvent:475,manualSmoothnessMeasurement:476,
tvhtml5AppQualityEvent:477,polymerPropertyAccessEvent:479,miniAppSdkUsage:480,cobaltTelemetryEvent:481,crossDevicePlayback:482,channelCreatedWithObakeImage:484,channelEditedWithObakeImage:485,offlineDeleteEvent:486,crossDeviceNotificationTransfer:487,androidIntentEvent:488,unpluggedAmbientInterludesCounterfactualEvent:489,keyPlaysPlayback:490,shortsCreationFallbackEvent:493,vssData:491,castMatch:494,miniAppPerformanceMetrics:495,userFeedbackEvent:496};var rq={},sq=No("ServiceWorkerLogsDatabase",{xb:(rq.SWHealthLog={Cb:1},rq),mc:!0,upgrade:function(a,b){b(1)&&Zn(Sn(a,"SWHealthLog",{keyPath:"id",autoIncrement:!0}),"swHealthNewRequest",["interface","timestamp"])},
version:1});function tq(a){return mo(sq(),a)}
function uq(a){var b,c;A(function(d){if(1==d.h)return d.yield(tq(a),2);b=d.i;c=W()-2592E6;return d.yield(Rn(b,["SWHealthLog"],{mode:"readwrite",ia:!0},function(e){return ao(e.objectStore("SWHealthLog"),{},function(f){if(f.getValue().timestamp<=c)return f.delete().then(function(){return bo(f)})})}),0)})}
function vq(a){var b;return A(function(c){if(1==c.h)return c.yield(tq(a),2);b=c.i;return c.yield(b.clear("SWHealthLog"),0)})}
;var wq={},xq=0;function yq(a){var b=new Image,c=""+xq++;wq[c]=b;b.onload=b.onerror=function(){delete wq[c]};
b.src=a}
;function zq(){this.h=new Map;this.i=!1}
function Aq(){if(!zq.h){var a=E("yt.networkRequestMonitor.instance")||new zq;D("yt.networkRequestMonitor.instance",a);zq.h=a}return zq.h}
zq.prototype.requestComplete=function(a,b){b&&(this.i=!0);a=this.removeParams(a);this.h.get(a)||this.h.set(a,b)};
zq.prototype.isEndpointCFR=function(a){a=this.removeParams(a);return(a=this.h.get(a))?!1:!1===a&&this.i?!0:null};
zq.prototype.removeParams=function(a){return a.split("?")[0]};
zq.prototype.removeParams=zq.prototype.removeParams;zq.prototype.isEndpointCFR=zq.prototype.isEndpointCFR;zq.prototype.requestComplete=zq.prototype.requestComplete;zq.getInstance=Aq;var Bq;function Cq(){Bq||(Bq=new bn("yt.offline"));return Bq}
function Dq(a){if(T("offline_error_handling")){var b=Cq().get("errors",!0)||{};b[a.message]={name:a.name,stack:a.stack};a.level&&(b[a.message].level=a.level);Cq().set("errors",b,2592E3,!0)}}
;function Eq(){Id.call(this);var a=this;this.j=!1;this.i=ui();this.i.listen("networkstatus-online",function(){if(a.j&&T("offline_error_handling")){var b=Cq().get("errors",!0);if(b){for(var c in b)if(b[c]){var d=new V(c,"sent via offline_errors");d.name=b[c].name;d.stack=b[c].stack;d.level=b[c].level;Zk(d)}Cq().set("errors",{},2592E3,!0)}}})}
w(Eq,Id);function Fq(){if(!Eq.h){var a=E("yt.networkStatusManager.instance")||new Eq;D("yt.networkStatusManager.instance",a);Eq.h=a}return Eq.h}
m=Eq.prototype;m.wa=function(){return this.i.wa()};
m.gb=function(a){this.i.i=a};
m.he=function(){var a=window.navigator.onLine;return void 0===a?!0:a};
m.Xd=function(){this.j=!0};
m.listen=function(a,b){return this.i.listen(a,b)};
m.lc=function(a){a=si(this.i,a);a.then(function(b){T("use_cfr_monitor")&&Aq().requestComplete("generate_204",b)});
return a};
Eq.prototype.sendNetworkCheckRequest=Eq.prototype.lc;Eq.prototype.listen=Eq.prototype.listen;Eq.prototype.enableErrorFlushing=Eq.prototype.Xd;Eq.prototype.getWindowStatus=Eq.prototype.he;Eq.prototype.networkStatusHint=Eq.prototype.gb;Eq.prototype.isNetworkAvailable=Eq.prototype.wa;Eq.getInstance=Fq;function Gq(a){a=void 0===a?{}:a;Id.call(this);var b=this;this.i=this.m=0;this.j=Fq();var c=E("yt.networkStatusManager.instance.listen").bind(this.j);c&&(a.rateLimit?(this.rateLimit=a.rateLimit,c("networkstatus-online",function(){Hq(b,"publicytnetworkstatus-online")}),c("networkstatus-offline",function(){Hq(b,"publicytnetworkstatus-offline")})):(c("networkstatus-online",function(){Jd(b,"publicytnetworkstatus-online")}),c("networkstatus-offline",function(){Jd(b,"publicytnetworkstatus-offline")})))}
w(Gq,Id);Gq.prototype.wa=function(){var a=E("yt.networkStatusManager.instance.isNetworkAvailable");return a?a.bind(this.j)():!0};
Gq.prototype.gb=function(a){var b=E("yt.networkStatusManager.instance.networkStatusHint").bind(this.j);b&&b(a)};
Gq.prototype.lc=function(a){var b=this,c;return A(function(d){c=E("yt.networkStatusManager.instance.sendNetworkCheckRequest").bind(b.j);return T("skip_network_check_if_cfr")&&Aq().isEndpointCFR("generate_204")?d.return(new Promise(function(e){var f;b.gb((null==(f=window.navigator)?void 0:f.onLine)||!0);e(b.wa())})):c?d.return(c(a)):d.return(!0)})};
function Hq(a,b){a.rateLimit?a.i?(vi.pa(a.m),a.m=vi.oa(function(){a.l!==b&&(Jd(a,b),a.l=b,a.i=W())},a.rateLimit-(W()-a.i))):(Jd(a,b),a.l=b,a.i=W()):Jd(a,b)}
;var Iq;function Jq(){var a=Wp.call;Iq||(Iq=new Gq({fg:!0,Yf:!0}));a.call(Wp,this,{da:{Sd:oq,nb:nq,jd:kq,ue:lq,Pc:mq,set:iq},aa:Iq,handleError:function(b,c,d){var e,f=null==d?void 0:null==(e=d.error)?void 0:e.code;if(400===f||415===f){var g;$k(new V(b.message,c,null==d?void 0:null==(g=d.error)?void 0:g.code),void 0,void 0,void 0,!0)}else Zk(b)},
pb:$k,sendFn:Kq,now:W,Ld:Dq,Da:an(),Oc:"publicytnetworkstatus-online",Lc:"publicytnetworkstatus-offline",Zb:!0,Xb:.1,ic:U("potential_esf_error_limit",10),U:T,Fb:!(rm()&&Lq())});this.j=new gi;T("networkless_immediately_drop_all_requests")&&pq();Ko("LogsDatabaseV2")}
w(Jq,Wp);function Mq(){var a=E("yt.networklessRequestController.instance");a||(a=new Jq,D("yt.networklessRequestController.instance",a),T("networkless_logging")&&zo().then(function(b){a.T=b;Yp(a);a.j.resolve();a.Zb&&Math.random()<=a.Xb&&a.T&&uq(a.T);T("networkless_immediately_drop_sw_health_store")&&Nq(a)}));
return a}
Jq.prototype.writeThenSend=function(a,b){b||(b={});b=Oq(a,b);rm()||(this.h=!1);Wp.prototype.writeThenSend.call(this,a,b)};
Jq.prototype.sendThenWrite=function(a,b,c){b||(b={});b=Oq(a,b);rm()||(this.h=!1);Wp.prototype.sendThenWrite.call(this,a,b,c)};
Jq.prototype.sendAndWrite=function(a,b){b||(b={});b=Oq(a,b);rm()||(this.h=!1);Wp.prototype.sendAndWrite.call(this,a,b)};
Jq.prototype.awaitInitialization=function(){return this.j.promise};
function Nq(a){var b;A(function(c){if(!a.T)throw b=Dn("clearSWHealthLogsDb"),b;return c.return(vq(a.T).catch(function(d){a.handleError(d)}))})}
function Kq(a,b,c,d){d=void 0===d?!1:d;b=T("web_fp_via_jspb")?Object.assign({},b):b;T("use_cfr_monitor")&&Pq(a,b);if(T("use_request_time_ms_header"))b.headers&&jl(a)&&(b.headers["X-Goog-Request-Time"]=JSON.stringify(Math.round(W())));else{var e;if(null==(e=b.postParams)?0:e.requestTimeMs)b.postParams.requestTimeMs=Math.round(W())}if(c&&0===Object.keys(b).length){var f=void 0===f?"":f;var g=void 0===g?!1:g;var h=void 0===h?!1:h;if(a)if(f)wl(a,void 0,"POST",f,void 0);else if(S("USE_NET_AJAX_FOR_PING_TRANSPORT",
!1)||h)wl(a,void 0,"GET","",void 0,void 0,g,h);else{b:{try{var k=new cb({url:a});if(k.j&&k.i||k.l){var l=zc(Ac(5,a)),n;if(!(n=!l||!l.endsWith("/aclk"))){var p=a.search(Ic),r=Hc(a,0,"ri",p);if(0>r)var t=null;else{var x=a.indexOf("&",r);if(0>x||x>p)x=p;t=decodeURIComponent(a.slice(r+3,-1!==x?x:0).replace(/\+/g," "))}n="1"!==t}var z=!n;break b}}catch(J){}z=!1}if(z){b:{try{if(window.navigator&&window.navigator.sendBeacon&&window.navigator.sendBeacon(a,"")){var y=!0;break b}}catch(J){}y=!1}c=y?!0:!1}else c=
!1;c||yq(a)}}else b.compress?b.postBody?("string"!==typeof b.postBody&&(b.postBody=JSON.stringify(b.postBody)),Lp(a,b.postBody,b,Al,d)):Lp(a,JSON.stringify(b.postParams),b,zl,d):Al(a,b)}
function Oq(a,b){T("use_event_time_ms_header")&&jl(a)&&(b.headers||(b.headers={}),b.headers["X-Goog-Event-Time"]=JSON.stringify(Math.round(W())));return b}
function Pq(a,b){var c=b.onError?b.onError:function(){};
b.onError=function(e,f){Aq().requestComplete(a,!1);c(e,f)};
var d=b.onSuccess?b.onSuccess:function(){};
b.onSuccess=function(e,f){Aq().requestComplete(a,!0);d(e,f)}}
function Lq(){return"www.youtube-nocookie.com"!==Bc(document.location.toString())}
;var Qq=!1,Rq=C.ytNetworklessLoggingInitializationOptions||{isNwlInitialized:Qq};D("ytNetworklessLoggingInitializationOptions",Rq);function Sq(){var a;A(function(b){if(1==b.h)return b.yield(zo(),2);a=b.i;if(!a||!rm()&&!T("nwl_init_require_datasync_id_killswitch")||!Lq())return b.B(0);Qq=!0;Rq.isNwlInitialized=Qq;return b.yield(Mq().awaitInitialization(),0)})}
;function Tq(a){var b=this;this.config_=null;a?this.config_=a:ap()&&(this.config_=bp());um(function(){Up(b)},5E3)}
Tq.prototype.isReady=function(){!this.config_&&ap()&&(this.config_=bp());return!!this.config_};
function Vp(a,b,c,d){function e(x){x=void 0===x?!1:x;var z;if(d.retry&&"www.youtube-nocookie.com"!=h&&(x||T("skip_ls_gel_retry")||"application/json"!==g.headers["Content-Type"]||(z=Sp(b,c,l,k)),z)){var y=g.onSuccess,J=g.onFetchSuccess;g.onSuccess=function(N,da){Tp(z);y(N,da)};
c.onFetchSuccess=function(N,da){Tp(z);J(N,da)}}try{if(x&&d.retry&&!d.networklessOptions.bypassNetworkless)g.method="POST",d.networklessOptions.writeThenSend?Mq().writeThenSend(t,g):Mq().sendAndWrite(t,g);
else if(d.compress){var G=!d.networklessOptions.writeThenSend;if(g.postBody){var R=g.postBody;"string"!==typeof R&&(R=JSON.stringify(g.postBody));Lp(t,R,g,Al,G)}else Lp(t,JSON.stringify(g.postParams),g,zl,G)}else T("web_all_payloads_via_jspb")?Al(t,g):zl(t,g)}catch(N){if("InvalidAccessError"===N.name)z&&(Tp(z),z=0),$k(Error("An extension is blocking network request."));else throw N;}z&&um(function(){Up(a)},5E3)}
!S("VISITOR_DATA")&&"visitor_id"!==b&&.01>Math.random()&&$k(new V("Missing VISITOR_DATA when sending innertube request.",b,c,d));if(!a.isReady()){var f=new V("innertube xhrclient not ready",b,c,d);Zk(f);throw f;}var g={headers:d.headers||{},method:"POST",postParams:c,postBody:d.postBody,postBodyFormat:d.postBodyFormat||"JSON",onTimeout:function(){d.onTimeout()},
onFetchTimeout:d.onTimeout,onSuccess:function(x,z){if(d.onSuccess)d.onSuccess(z)},
onFetchSuccess:function(x){if(d.onSuccess)d.onSuccess(x)},
onError:function(x,z){if(d.onError)d.onError(z)},
onFetchError:function(x){if(d.onError)d.onError(x)},
timeout:d.timeout,withCredentials:!0,compress:d.compress};g.headers["Content-Type"]||(g.headers["Content-Type"]="application/json");var h="";(f=a.config_.pe)&&(h=f);var k=a.config_.re||!1,l=dp(k,h,d);Object.assign(g.headers,l);(f=g.headers.Authorization)&&!h&&k&&(g.headers["x-origin"]=window.location.origin);var n="/youtubei/"+a.config_.innertubeApiVersion+"/"+b,p={alt:"json"},r=a.config_.qe&&f;r=r&&f.startsWith("Bearer");r||(p.key=a.config_.innertubeApiKey);var t=il(""+h+n,p||{},!0);(E("ytNetworklessLoggingInitializationOptions")?
Rq.isNwlInitialized:Qq)?xo().then(function(x){e(x)}):e(!1)}
;var Uq=0,Vq=ad?"webkit":$c?"moz":Yc?"ms":Xc?"o":"";D("ytDomDomGetNextId",E("ytDomDomGetNextId")||function(){return++Uq});var Wq={stopImmediatePropagation:1,stopPropagation:1,preventMouseEvent:1,preventManipulation:1,preventDefault:1,layerX:1,layerY:1,screenX:1,screenY:1,scale:1,rotation:1,webkitMovementX:1,webkitMovementY:1};
function Xq(a){this.type="";this.state=this.source=this.data=this.currentTarget=this.relatedTarget=this.target=null;this.charCode=this.keyCode=0;this.metaKey=this.shiftKey=this.ctrlKey=this.altKey=!1;this.rotation=this.clientY=this.clientX=0;this.scale=1;this.changedTouches=this.touches=null;try{if(a=a||window.event){this.event=a;for(var b in a)b in Wq||(this[b]=a[b]);this.scale=a.scale;this.rotation=a.rotation;var c=a.target||a.srcElement;c&&3==c.nodeType&&(c=c.parentNode);this.target=c;var d=a.relatedTarget;
if(d)try{d=d.nodeName?d:null}catch(e){d=null}else"mouseover"==this.type?d=a.fromElement:"mouseout"==this.type&&(d=a.toElement);this.relatedTarget=d;this.clientX=void 0!=a.clientX?a.clientX:a.pageX;this.clientY=void 0!=a.clientY?a.clientY:a.pageY;this.keyCode=a.keyCode?a.keyCode:a.which;this.charCode=a.charCode||("keypress"==this.type?this.keyCode:0);this.altKey=a.altKey;this.ctrlKey=a.ctrlKey;this.shiftKey=a.shiftKey;this.metaKey=a.metaKey;this.h=a.pageX;this.i=a.pageY}}catch(e){}}
function Yq(a){if(document.body&&document.documentElement){var b=document.body.scrollTop+document.documentElement.scrollTop;a.h=a.clientX+(document.body.scrollLeft+document.documentElement.scrollLeft);a.i=a.clientY+b}}
Xq.prototype.preventDefault=function(){this.event&&(this.event.returnValue=!1,this.event.preventDefault&&this.event.preventDefault())};
Xq.prototype.stopPropagation=function(){this.event&&(this.event.cancelBubble=!0,this.event.stopPropagation&&this.event.stopPropagation())};
Xq.prototype.stopImmediatePropagation=function(){this.event&&(this.event.cancelBubble=!0,this.event.stopImmediatePropagation&&this.event.stopImmediatePropagation())};var ob=C.ytEventsEventsListeners||{};D("ytEventsEventsListeners",ob);var Zq=C.ytEventsEventsCounter||{count:0};D("ytEventsEventsCounter",Zq);
function $q(a,b,c,d){d=void 0===d?{}:d;a.addEventListener&&("mouseenter"!=b||"onmouseenter"in document?"mouseleave"!=b||"onmouseenter"in document?"mousewheel"==b&&"MozBoxSizing"in document.documentElement.style&&(b="MozMousePixelScroll"):b="mouseout":b="mouseover");return nb(function(e){var f="boolean"===typeof e[4]&&e[4]==!!d,g=Ra(e[4])&&Ra(d)&&sb(e[4],d);return!!e.length&&e[0]==a&&e[1]==b&&e[2]==c&&(f||g)})}
function ar(a,b,c,d){d=void 0===d?{}:d;if(!a||!a.addEventListener&&!a.attachEvent)return"";var e=$q(a,b,c,d);if(e)return e;e=++Zq.count+"";var f=!("mouseenter"!=b&&"mouseleave"!=b||!a.addEventListener||"onmouseenter"in document);var g=f?function(h){h=new Xq(h);if(!Td(h.relatedTarget,function(k){return k==a}))return h.currentTarget=a,h.type=b,c.call(a,h)}:function(h){h=new Xq(h);
h.currentTarget=a;return c.call(a,h)};
g=Yk(g);a.addEventListener?("mouseenter"==b&&f?b="mouseover":"mouseleave"==b&&f?b="mouseout":"mousewheel"==b&&"MozBoxSizing"in document.documentElement.style&&(b="MozMousePixelScroll"),br()||"boolean"===typeof d?a.addEventListener(b,g,d):a.addEventListener(b,g,!!d.capture)):a.attachEvent("on"+b,g);ob[e]=[a,b,c,g,d];return e}
function cr(a){a&&("string"==typeof a&&(a=[a]),fb(a,function(b){if(b in ob){var c=ob[b],d=c[0],e=c[1],f=c[3];c=c[4];d.removeEventListener?br()||"boolean"===typeof c?d.removeEventListener(e,f,c):d.removeEventListener(e,f,!!c.capture):d.detachEvent&&d.detachEvent("on"+e,f);delete ob[b]}}))}
var br=Od(function(){var a=!1;try{var b=Object.defineProperty({},"capture",{get:function(){a=!0}});
window.addEventListener("test",null,b)}catch(c){}return a});function dr(a){this.D=a;this.h=null;this.l=0;this.A=null;this.m=0;this.i=[];for(a=0;4>a;a++)this.i.push(0);this.j=0;this.V=ar(window,"mousemove",Xa(this.Y,this));a=Xa(this.S,this);"function"===typeof a&&(a=Yk(a));this.ba=window.setInterval(a,25)}
$a(dr,H);dr.prototype.Y=function(a){void 0===a.h&&Yq(a);var b=a.h;void 0===a.i&&Yq(a);this.h=new Pd(b,a.i)};
dr.prototype.S=function(){if(this.h){var a=W();if(0!=this.l){var b=this.A,c=this.h,d=b.x-c.x;b=b.y-c.y;d=Math.sqrt(d*d+b*b)/(a-this.l);this.i[this.j]=.5<Math.abs((d-this.m)/this.m)?1:0;for(c=b=0;4>c;c++)b+=this.i[c]||0;3<=b&&this.D();this.m=d}this.l=a;this.A=this.h;this.j=(this.j+1)%4}};
dr.prototype.R=function(){window.clearInterval(this.ba);cr(this.V)};var er={};
function fr(a){var b=void 0===a?{}:a;a=void 0===b.Fe?!1:b.Fe;b=void 0===b.Yd?!0:b.Yd;if(null==E("_lact",window)){var c=parseInt(S("LACT"),10);c=isFinite(c)?Date.now()-Math.max(c,0):-1;D("_lact",c,window);D("_fact",c,window);-1==c&&gr();ar(document,"keydown",gr);ar(document,"keyup",gr);ar(document,"mousedown",gr);ar(document,"mouseup",gr);a?ar(window,"touchmove",function(){hr("touchmove",200)},{passive:!0}):(ar(window,"resize",function(){hr("resize",200)}),b&&ar(window,"scroll",function(){hr("scroll",200)}));
new dr(function(){hr("mouse",100)});
ar(document,"touchstart",gr,{passive:!0});ar(document,"touchend",gr,{passive:!0})}}
function hr(a,b){er[a]||(er[a]=!0,vi.oa(function(){gr();er[a]=!1},b))}
function gr(){null==E("_lact",window)&&fr();var a=Date.now();D("_lact",a,window);-1==E("_fact",window)&&D("_fact",a,window);(a=E("ytglobal.ytUtilActivityCallback_"))&&a()}
function ir(){var a=E("_lact",window);return null==a?-1:Math.max(Date.now()-a,0)}
;var jr=C.ytPubsubPubsubInstance||new L,kr=C.ytPubsubPubsubSubscribedKeys||{},lr=C.ytPubsubPubsubTopicToKeys||{},mr=C.ytPubsubPubsubIsSynchronous||{};function nr(a,b){var c=or();if(c&&b){var d=c.subscribe(a,function(){function e(){kr[d]&&b.apply&&"function"==typeof b.apply&&b.apply(window,f)}
var f=arguments;try{mr[a]?e():pl(e,0)}catch(g){Zk(g)}},void 0);
kr[d]=!0;lr[a]||(lr[a]=[]);lr[a].push(d);return d}return 0}
function sr(a){var b=or();b&&("number"===typeof a?a=[a]:"string"===typeof a&&(a=[parseInt(a,10)]),fb(a,function(c){b.unsubscribeByKey(c);delete kr[c]}))}
function tr(a,b){var c=or();c&&c.publish.apply(c,arguments)}
function ur(a){var b=or();if(b)if(b.clear(a),a)vr(a);else for(var c in lr)vr(c)}
function or(){return C.ytPubsubPubsubInstance}
function vr(a){lr[a]&&(a=lr[a],fb(a,function(b){kr[b]&&delete kr[b]}),a.length=0)}
L.prototype.subscribe=L.prototype.subscribe;L.prototype.unsubscribeByKey=L.prototype.Ab;L.prototype.publish=L.prototype.Ya;L.prototype.clear=L.prototype.clear;D("ytPubsubPubsubInstance",jr);D("ytPubsubPubsubTopicToKeys",lr);D("ytPubsubPubsubIsSynchronous",mr);D("ytPubsubPubsubSubscribedKeys",kr);var wr=Symbol("injectionDeps");function xr(a){this.name=a}
xr.prototype.toString=function(){return"InjectionToken("+this.name+")"};
function yr(a){this.key=a}
function zr(){this.i=new Map;this.j=new Map;this.h=new Map}
function Ar(a,b){a.i.set(b.kc,b);var c=a.j.get(b.kc);c&&c.lg(a.resolve(b.kc))}
zr.prototype.resolve=function(a){return a instanceof yr?Br(this,a.key,[],!0):Br(this,a,[])};
function Br(a,b,c,d){d=void 0===d?!1:d;if(-1<c.indexOf(b))throw Error("Deps cycle for: "+b);if(a.h.has(b))return a.h.get(b);if(!a.i.has(b)){if(d)return;throw Error("No provider for: "+b);}d=a.i.get(b);c.push(b);if(void 0!==d.Id)var e=d.Id;else if(d.mf)e=d[wr]?Cr(a,d[wr],c):[],e=d.mf.apply(d,ma(e));else if(d.Hd){e=d.Hd;var f=e[wr]?Cr(a,e[wr],c):[];e=new (Function.prototype.bind.apply(e,[null].concat(ma(f))))}else throw Error("Could not resolve providers for: "+b);c.pop();d.og||a.h.set(b,e);return e}
function Cr(a,b,c){return b?b.map(function(d){return d instanceof yr?Br(a,d.key,c,!0):Br(a,d,c)}):[]}
;var Dr;function Er(){Dr||(Dr=new zr);return Dr}
;var Fr=window;function Gr(){var a,b;return"h5vcc"in Fr&&(null==(a=Fr.h5vcc.traceEvent)?0:a.traceBegin)&&(null==(b=Fr.h5vcc.traceEvent)?0:b.traceEnd)?1:"performance"in Fr&&Fr.performance.mark&&Fr.performance.measure?2:0}
function Hr(a){switch(Gr()){case 1:Fr.h5vcc.traceEvent.traceBegin("YTLR",a);break;case 2:Fr.performance.mark(a+"-start");break;case 0:break;default:lc()}}
function Ir(a){switch(Gr()){case 1:Fr.h5vcc.traceEvent.traceEnd("YTLR",a);break;case 2:var b=a+"-start",c=a+"-end";Fr.performance.mark(c);Fr.performance.measure(a,b,c);break;case 0:break;default:lc()}}
;var Jr=T("web_enable_lifecycle_monitoring")&&0!==Gr(),Kr=T("web_enable_lifecycle_monitoring");function Lr(a){var b=this;var c=void 0===c?0:c;var d=void 0===d?an():d;this.j=c;this.scheduler=d;this.i=new gi;this.h=a;for(a={cb:0};a.cb<this.h.length;a={hc:void 0,cb:a.cb},a.cb++)a.hc=this.h[a.cb],c=function(e){return function(){e.hc.Ec();b.h[e.cb].jc=!0;b.h.every(function(f){return!0===f.jc})&&b.i.resolve()}}(a),d=this.getPriority(a.hc),d=this.scheduler.ab(c,d),this.h[a.cb]=Object.assign({},a.hc,{Ec:c,
jobId:d})}
function Mr(a){var b=Array.from(a.h.keys()).sort(function(d,e){return a.getPriority(a.h[e])-a.getPriority(a.h[d])});
b=v(b);for(var c=b.next();!c.done;c=b.next())c=a.h[c.value],void 0===c.jobId||c.jc||(a.scheduler.pa(c.jobId),a.scheduler.ab(c.Ec,10))}
Lr.prototype.cancel=function(){for(var a=v(this.h),b=a.next();!b.done;b=a.next())b=b.value,void 0===b.jobId||b.jc||this.scheduler.pa(b.jobId),b.jc=!0;this.i.resolve()};
Lr.prototype.getPriority=function(a){var b;return null!=(b=a.priority)?b:this.j};function Nr(a){this.state=a;this.plugins=[];this.l=void 0;this.A={};Jr&&Hr(this.state)}
m=Nr.prototype;m.install=function(a){this.plugins.push(a);return this};
m.uninstall=function(){var a=this;B.apply(0,arguments).forEach(function(b){b=a.plugins.indexOf(b);-1<b&&a.plugins.splice(b,1)})};
m.transition=function(a,b){var c=this;Jr&&Ir(this.state);var d=this.transitions.find(function(f){return Array.isArray(f.from)?f.from.find(function(g){return g===c.state&&f.to===a}):f.from===c.state&&f.to===a});
if(d){this.j&&(Mr(this.j),this.j=void 0);Or(this,a,b);this.state=a;Jr&&Hr(this.state);d=d.action.bind(this);var e=this.plugins.filter(function(f){return f[a]}).map(function(f){return f[a]});
d(Pr(this,e),b)}else throw Error("no transition specified from "+this.state+" to "+a);};
function Pr(a,b){var c=b.filter(function(e){return 10===Qr(a,e)}),d=b.filter(function(e){return 10!==Qr(a,e)});
return a.A.ng?function(){var e=B.apply(0,arguments);return A(function(f){if(1==f.h)return f.yield(a.Ne.apply(a,[c].concat(ma(e))),2);a.Cd.apply(a,[d].concat(ma(e)));f.h=0})}:function(){var e=B.apply(0,arguments);
a.Oe.apply(a,[c].concat(ma(e)));a.Cd.apply(a,[d].concat(ma(e)))}}
m.Oe=function(a){for(var b=B.apply(1,arguments),c=an(),d=v(a),e=d.next(),f={};!e.done;f={Hb:void 0},e=d.next())f.Hb=e.value,c.Bb(function(g){return function(){Rr(g.Hb.name);g.Hb.callback.apply(g.Hb,ma(b));Sr(g.Hb.name)}}(f))};
m.Ne=function(a){var b=B.apply(1,arguments),c,d,e,f,g;return A(function(h){1==h.h&&(c=an(),d=v(a),e=d.next(),f={});if(3!=h.h){if(e.done)return h.B(0);f.tb=e.value;f.Sb=void 0;g=function(k){return function(){Rr(k.tb.name);var l=k.tb.callback.apply(k.tb,ma(b));"function"===typeof(null==l?void 0:l.then)?k.Sb=l.then(function(){Sr(k.tb.name)}):Sr(k.tb.name)}}(f);
c.Bb(g);return f.Sb?h.yield(f.Sb,3):h.B(3)}f={tb:void 0,Sb:void 0};e=d.next();return h.B(2)})};
m.Cd=function(a){var b=B.apply(1,arguments),c=this,d=a.map(function(e){return{Ec:function(){Rr(e.name);e.callback.apply(e,ma(b));Sr(e.name)},
priority:Qr(c,e)}});
d.length&&(this.j=new Lr(d))};
function Qr(a,b){var c,d;return null!=(d=null!=(c=a.l)?c:b.priority)?d:0}
function Rr(a){Jr&&a&&Hr(a)}
function Sr(a){Jr&&a&&Ir(a)}
function Or(a,b,c){Kr&&console.groupCollapsed&&console.groupEnd&&(console.groupCollapsed("["+a.constructor.name+"] '"+a.state+"' to '"+b+"'"),console.log("with message: ",c),console.groupEnd())}
fa.Object.defineProperties(Nr.prototype,{currentState:{configurable:!0,enumerable:!0,get:function(){return this.state}}});function Tr(a){Nr.call(this,void 0===a?"none":a);this.h=null;this.l=10;this.transitions=[{from:"none",to:"application_navigating",action:this.i},{from:"application_navigating",to:"none",action:this.v},{from:"application_navigating",to:"application_navigating",action:function(){}},
{from:"none",to:"none",action:function(){}}]}
var Ur;w(Tr,Nr);Tr.prototype.i=function(a,b){var c=this;this.h=um(function(){"application_navigating"===c.currentState&&c.transition("none")},5E3);
a(null==b?void 0:b.event)};
Tr.prototype.v=function(a,b){this.h&&(vi.pa(this.h),this.h=null);a(null==b?void 0:b.event)};
function Vr(){Ur||(Ur=new Tr);return Ur}
;var Wr=[];D("yt.logging.transport.getScrapedGelPayloads",function(){return Wr});function Xr(){this.store={};this.h={}}
Xr.prototype.storePayload=function(a,b){a=Yr(a);this.store[a]?this.store[a].push(b):(this.h={},this.store[a]=[b]);return a};
Xr.prototype.smartExtractMatchingEntries=function(a){if(!a.keys.length)return[];for(var b=Zr(this,a.keys.splice(0,1)[0]),c=[],d=0;d<b.length;d++)this.store[b[d]]&&a.sizeLimit&&(this.store[b[d]].length<=a.sizeLimit?(c.push.apply(c,ma(this.store[b[d]])),delete this.store[b[d]]):c.push.apply(c,ma(this.store[b[d]].splice(0,a.sizeLimit))));(null==a?0:a.sizeLimit)&&c.length<(null==a?void 0:a.sizeLimit)&&(a.sizeLimit-=c.length,c.push.apply(c,ma(this.smartExtractMatchingEntries(a))));return c};
Xr.prototype.extractMatchingEntries=function(a){a=Zr(this,a);for(var b=[],c=0;c<a.length;c++)this.store[a[c]]&&(b.push.apply(b,ma(this.store[a[c]])),delete this.store[a[c]]);return b};
Xr.prototype.getSequenceCount=function(a){a=Zr(this,a);for(var b=0,c=0;c<a.length;c++){var d=void 0;b+=(null==(d=this.store[a[c]])?void 0:d.length)||0}return b};
function Zr(a,b){var c=Yr(b);if(a.h[c])return a.h[c];var d=Object.keys(a.store)||[];if(1>=d.length&&Yr(b)===d[0])return d;for(var e=[],f=0;f<d.length;f++){var g=d[f].split("/");if($r(b.auth,g[0])){var h=b.isJspb;$r(void 0===h?"undefined":h?"true":"false",g[1])&&$r(b.cttAuthInfo,g[2])&&(h=b.tier,h=void 0===h?"undefined":JSON.stringify(h),$r(h,g[3])&&e.push(d[f]))}}return a.h[c]=e}
function $r(a,b){return void 0===a||"undefined"===a?!0:a===b}
Xr.prototype.getSequenceCount=Xr.prototype.getSequenceCount;Xr.prototype.extractMatchingEntries=Xr.prototype.extractMatchingEntries;Xr.prototype.smartExtractMatchingEntries=Xr.prototype.smartExtractMatchingEntries;Xr.prototype.storePayload=Xr.prototype.storePayload;function Yr(a){return[void 0===a.auth?"undefined":a.auth,void 0===a.isJspb?"undefined":a.isJspb,void 0===a.cttAuthInfo?"undefined":a.cttAuthInfo,void 0===a.tier?"undefined":a.tier].join("/")}
;function as(a,b){if(a)return a[b.name]}
;var bs=U("initial_gel_batch_timeout",2E3),cs=U("gel_queue_timeout_max_ms",6E4),ds=Math.pow(2,16)-1,es=U("gel_min_batch_size",5),gs=void 0;function hs(){this.l=this.h=this.i=0;this.j=!1}
var is=new hs,js=new hs,ks=new hs,ls=new hs,ms,ns=!0,ps=C.ytLoggingTransportTokensToCttTargetIds_||{};D("ytLoggingTransportTokensToCttTargetIds_",ps);var qs={};function rs(){var a=E("yt.logging.ims");a||(a=new Xr,D("yt.logging.ims",a));return a}
function ss(a,b){if("log_event"===a.endpoint){ts();var c=us(a),d=vs(a.payload)||"";a:{if(T("enable_web_tiered_gel")){var e=qq[d||""];var f,g,h,k=null==Er().resolve(new yr(Wo))?void 0:null==(f=Xo())?void 0:null==(g=f.loggingHotConfig)?void 0:null==(h=g.eventLoggingConfig)?void 0:h.payloadPolicies;if(k)for(f=0;f<k.length;f++)if(k[f].payloadNumber===e){e=k[f];break a}}e=void 0}k=200;if(e){if(!1===e.enabled&&!T("web_payload_policy_disabled_killswitch"))return;k=ws(e.tier);if(400===k){xs(a,b);return}}qs[c]=
!0;e={cttAuthInfo:c,isJspb:!1,tier:k};rs().storePayload(e,a.payload);ys(b,c,e,"gelDebuggingEvent"===d)}}
function ys(a,b,c,d){function e(){zs({writeThenSend:!0},T("flush_only_full_queue")?b:void 0,f,c.tier)}
var f=!1;f=void 0===f?!1:f;d=void 0===d?!1:d;a&&(gs=new a);a=U("tvhtml5_logging_max_batch_ads_fork")||U("web_logging_max_batch")||100;var g=W(),h=As(f,c.tier),k=h.l;d&&(h.j=!0);d=0;c&&(d=rs().getSequenceCount(c));1E3<=d?e():d>=a?ms||(ms=Bs(function(){e();ms=void 0},0)):10<=g-k&&(Cs(f,c.tier),h.l=g)}
function xs(a,b){if("log_event"===a.endpoint){ts();var c=us(a),d=new Map;d.set(c,[a.payload]);var e=vs(a.payload)||"";b&&(gs=new b);return new fe(function(f,g){gs&&gs.isReady()?Ds(d,gs,f,g,{bypassNetworkless:!0},!0,"gelDebuggingEvent"===e):f()})}}
function us(a){var b="";if(a.dangerousLogToVisitorSession)b="visitorOnlyApprovedKey";else if(a.cttAuthInfo){b=a.cttAuthInfo;var c={};b.videoId?c.videoId=b.videoId:b.playlistId&&(c.playlistId=b.playlistId);ps[a.cttAuthInfo.token]=c;b=a.cttAuthInfo.token}return b}
function zs(a,b,c,d){a=void 0===a?{}:a;c=void 0===c?!1:c;new fe(function(e,f){var g=As(c,d),h=g.j;g.j=!1;Es(g.i);Es(g.h);g.h=0;gs&&gs.isReady()?void 0===d&&T("enable_web_tiered_gel")?Fs(e,f,a,b,c,300,h):Fs(e,f,a,b,c,d,h):(Cs(c,d),e())})}
function Fs(a,b,c,d,e,f,g){var h=gs;c=void 0===c?{}:c;e=void 0===e?!1:e;f=void 0===f?200:f;g=void 0===g?!1:g;var k=new Map,l={isJspb:e,cttAuthInfo:d,tier:f};e={isJspb:e,cttAuthInfo:d};if(void 0!==d)f=T("enable_web_tiered_gel")?rs().smartExtractMatchingEntries({keys:[l,e],sizeLimit:1E3}):rs().extractMatchingEntries(e),k.set(d,f);else for(d=v(Object.keys(qs)),l=d.next();!l.done;l=d.next())l=l.value,e=T("enable_web_tiered_gel")?rs().smartExtractMatchingEntries({keys:[{isJspb:!1,cttAuthInfo:l,tier:f},
{isJspb:!1,cttAuthInfo:l}],sizeLimit:1E3}):rs().extractMatchingEntries({isJspb:!1,cttAuthInfo:l}),0<e.length&&k.set(l,e),(T("web_fp_via_jspb_and_json")&&c.writeThenSend||!T("web_fp_via_jspb_and_json"))&&delete qs[l];Ds(k,h,a,b,c,!1,g)}
function Cs(a,b){function c(){zs({writeThenSend:!0},void 0,a,b)}
a=void 0===a?!1:a;b=void 0===b?200:b;var d=As(a,b),e=d===ls||d===ks?5E3:cs;T("web_gel_timeout_cap")&&!d.h&&(e=Bs(function(){c()},e),d.h=e);
Es(d.i);e=S("LOGGING_BATCH_TIMEOUT",U("web_gel_debounce_ms",1E4));T("shorten_initial_gel_batch_timeout")&&ns&&(e=bs);e=Bs(function(){0<U("gel_min_batch_size")?rs().getSequenceCount({cttAuthInfo:void 0,isJspb:a,tier:b})>=es&&c():c()},e);
d.i=e}
function Ds(a,b,c,d,e,f,g){e=void 0===e?{}:e;var h=Math.round(W()),k=a.size,l=(void 0===g?0:g)&&T("vss_through_gel_video_stats")?"video_stats":"log_event";a=v(a);var n=a.next();for(g={};!n.done;g={Kc:void 0,batchRequest:void 0,dangerousLogToVisitorSession:void 0,Nc:void 0,Mc:void 0},n=a.next()){var p=v(n.value);n=p.next().value;p=p.next().value;g.batchRequest=ub({context:cp(b.config_||bp())});if(!Qa(p)&&!T("throw_err_when_logevent_malformed_killswitch")){d();break}g.batchRequest.events=p;(p=ps[n])&&
Gs(g.batchRequest,n,p);delete ps[n];g.dangerousLogToVisitorSession="visitorOnlyApprovedKey"===n;Hs(g.batchRequest,h,g.dangerousLogToVisitorSession);T("always_send_and_write")&&(e.writeThenSend=!1);g.Nc=function(r){T("start_client_gcf")&&vi.oa(function(){return A(function(t){return t.yield(Is(r),0)})});
k--;k||c()};
g.Kc=0;g.Mc=function(r){return function(){r.Kc++;if(e.bypassNetworkless&&1===r.Kc)try{Vp(b,l,r.batchRequest,Js({writeThenSend:!0},r.dangerousLogToVisitorSession,r.Nc,r.Mc,f)),ns=!1}catch(t){Zk(t),d()}k--;k||c()}}(g);
try{Vp(b,l,g.batchRequest,Js(e,g.dangerousLogToVisitorSession,g.Nc,g.Mc,f)),ns=!1}catch(r){Zk(r),d()}}}
function Js(a,b,c,d,e){a={retry:!0,onSuccess:c,onError:d,networklessOptions:a,dangerousLogToVisitorSession:b,Vf:!!e,headers:{},postBodyFormat:"",postBody:"",compress:T("compress_gel")||T("compress_gel_lr")};Ks()&&(a.headers["X-Goog-Request-Time"]=JSON.stringify(Math.round(W())));return a}
function Hs(a,b,c){Ks()||(a.requestTimeMs=String(b));T("unsplit_gel_payloads_in_logs")&&(a.unsplitGelPayloadsInLogs=!0);!c&&(b=S("EVENT_ID"))&&((c=S("BATCH_CLIENT_COUNTER")||0)||(c=Math.floor(Math.random()*ds/2)),c++,c>ds&&(c=1),Uk("BATCH_CLIENT_COUNTER",c),a.serializedClientEventId={serializedEventId:b,clientCounter:String(c)})}
function Gs(a,b,c){if(c.videoId)var d="VIDEO";else if(c.playlistId)d="PLAYLIST";else return;a.credentialTransferTokenTargetId=c;a.context=a.context||{};a.context.user=a.context.user||{};a.context.user.credentialTransferTokens=[{token:b,scope:d}]}
function ts(){var a;(a=E("yt.logging.transport.enableScrapingForTest"))||(a=rl("il_payload_scraping"),a="enable_il_payload_scraping"!==(void 0!==a?String(a):""));a||(Wr=[],D("yt.logging.transport.enableScrapingForTest",!0),D("yt.logging.transport.scrapedPayloadsForTesting",Wr),D("yt.logging.transport.payloadToScrape","visualElementShown visualElementHidden visualElementAttached screenCreated visualElementGestured visualElementStateChanged".split(" ")),D("yt.logging.transport.getScrapedPayloadFromClientEventsFunction"),
D("yt.logging.transport.scrapeClientEvent",!0))}
function Ks(){return T("use_request_time_ms_header")||T("lr_use_request_time_ms_header")}
function Bs(a,b){return!1===T("embeds_transport_use_scheduler")?pl(a,b):T("logging_avoid_blocking_during_navigation")||T("lr_logging_avoid_blocking_during_navigation")?um(function(){if("none"===Vr().currentState)a();else{var c={};Vr().install((c.none={callback:a},c))}},b):um(a,b)}
function Es(a){T("transport_use_scheduler")?vi.pa(a):window.clearTimeout(a)}
function Is(a){var b,c,d,e,f,g,h,k,l,n;return A(function(p){return 1==p.h?(d=null==(b=a)?void 0:null==(c=b.responseContext)?void 0:c.globalConfigGroup,e=as(d,zk),g=null==(f=d)?void 0:f.hotHashData,h=as(d,yk),l=null==(k=d)?void 0:k.coldHashData,(n=Er().resolve(new yr(Wo)))?g?e?p.yield(Yo(n,g,e),2):p.yield(Yo(n,g),2):p.B(2):p.return()):l?h?p.yield(Zo(n,l,h),0):p.yield(Zo(n,l),0):p.B(0)})}
function As(a,b){b=void 0===b?200:b;return a?300===b?ls:js:300===b?ks:is}
function vs(a){a=Object.keys(a);a=v(a);for(var b=a.next();!b.done;b=a.next())if(b=b.value,qq[b])return b}
function ws(a){switch(a){case "DELAYED_EVENT_TIER_UNSPECIFIED":return 0;case "DELAYED_EVENT_TIER_DEFAULT":return 100;case "DELAYED_EVENT_TIER_DISPATCH_TO_EMPTY":return 200;case "DELAYED_EVENT_TIER_FAST":return 300;case "DELAYED_EVENT_TIER_IMMEDIATE":return 400;default:return 200}}
;var Ls=C.ytLoggingGelSequenceIdObj_||{};D("ytLoggingGelSequenceIdObj_",Ls);
function Ms(a,b,c,d){d=void 0===d?{}:d;var e={},f=Math.round(d.timestamp||W());e.eventTimeMs=f<Number.MAX_SAFE_INTEGER?f:0;e[a]=b;a=ir();e.context={lastActivityMs:String(d.timestamp||!isFinite(a)?-1:a)};d.sequenceGroup&&!T("web_gel_sequence_info_killswitch")&&(a=e.context,b=d.sequenceGroup,Ls[b]=b in Ls?Ls[b]+1:0,a.sequence={index:Ls[b],groupKey:b},d.endOfSequence&&delete Ls[d.sequenceGroup]);(d.sendIsolatedPayload?xs:ss)({endpoint:"log_event",payload:e,cttAuthInfo:d.cttAuthInfo,dangerousLogToVisitorSession:d.dangerousLogToVisitorSession},
c)}
;function ln(a,b,c){c=void 0===c?{}:c;var d=Tq;S("ytLoggingEventsDefaultDisabled",!1)&&Tq===Tq&&(d=null);T("web_all_payloads_via_jspb")&&!c.timestamp&&(c.lact=ir(),c.timestamp=W());Ms(a,b,d,c)}
;D("ytLoggingGelSequenceIdObj_",C.ytLoggingGelSequenceIdObj_||{});var Ns=new Set,Os=0,Ps=0,Qs=0,Rs=[],Ss=["PhantomJS","Googlebot","TO STOP THIS SECURITY SCAN go/scan"];function kn(a){Ts(a)}
function Us(a){Ts(a,"WARNING")}
function Vs(a){a instanceof Error?Ts(a):(a=Ra(a)?JSON.stringify(a):String(a),a=new V(a),a.name="RejectedPromiseError",Us(a))}
function Ts(a,b,c,d,e,f,g,h){f=void 0===f?{}:f;f.name=c||S("INNERTUBE_CONTEXT_CLIENT_NAME",1);f.version=d||S("INNERTUBE_CONTEXT_CLIENT_VERSION");c=f;b=void 0===b?"ERROR":b;g=void 0===g?!1:g;b=void 0===b?"ERROR":b;g=void 0===g?!1:g;if(a&&(a.hasOwnProperty("level")&&a.level&&(b=a.level),T("console_log_js_exceptions")&&(d=[],d.push("Name: "+a.name),d.push("Message: "+a.message),a.hasOwnProperty("params")&&d.push("Error Params: "+JSON.stringify(a.params)),a.hasOwnProperty("args")&&d.push("Error args: "+
JSON.stringify(a.args)),d.push("File name: "+a.fileName),d.push("Stacktrace: "+a.stack),d=d.join("\n"),window.console.log(d,a)),!(5<=Os))){d=Rs;var k=tc(a);e=k.message||"Unknown Error";f=k.name||"UnknownError";var l=k.stack||a.i||"Not available";if(l.startsWith(f+": "+e)){var n=l.split("\n");n.shift();l=n.join("\n")}n=k.lineNumber||"Not available";k=k.fileName||"Not available";var p=0;if(a.hasOwnProperty("args")&&a.args&&a.args.length)for(var r=0;r<a.args.length&&!(p=Sl(a.args[r],"params."+r,c,p),
500<=p);r++);else if(a.hasOwnProperty("params")&&a.params){var t=a.params;if("object"===typeof a.params)for(r in t){if(t[r]){var x="params."+r,z=Ul(t[r]);c[x]=z;p+=x.length+z.length;if(500<p)break}}else c.params=Ul(t)}if(d.length)for(r=0;r<d.length&&!(p=Sl(d[r],"params.context."+r,c,p),500<=p);r++);navigator.vendor&&!c.hasOwnProperty("vendor")&&(c["device.vendor"]=navigator.vendor);r={message:e,name:f,lineNumber:n,fileName:k,stack:l,params:c,sampleWeight:1};c=Number(a.columnNumber);isNaN(c)||(r.lineNumber=
r.lineNumber+":"+c);if("IGNORED"===a.level)a=0;else a:{a=Ol();c=v(a.Ta);for(d=c.next();!d.done;d=c.next())if(d=d.value,r.message&&r.message.match(d.gg)){a=d.weight;break a}a=v(a.Qa);for(c=a.next();!c.done;c=a.next())if(c=c.value,c.callback(r)){a=c.weight;break a}a=1}r.sampleWeight=a;a=v(Jl);for(c=a.next();!c.done;c=a.next())if(c=c.value,c.fc[r.name])for(e=v(c.fc[r.name]),d=e.next();!d.done;d=e.next())if(f=d.value,d=r.message.match(f.regexp)){r.params["params.error.original"]=d[0];e=f.groups;f={};
for(n=0;n<e.length;n++)f[e[n]]=d[n+1],r.params["params.error."+e[n]]=d[n+1];r.message=c.Ic(f);break}r.params||(r.params={});a=Ol();r.params["params.errorServiceSignature"]="msg="+a.Ta.length+"&cb="+a.Qa.length;r.params["params.serviceWorker"]="false";C.document&&C.document.querySelectorAll&&(r.params["params.fscripts"]=String(document.querySelectorAll("script:not([nonce])").length));Bb("sample").constructor!==zb&&(r.params["params.fconst"]="true");window.yterr&&"function"===typeof window.yterr&&window.yterr(r);
if(0!==r.sampleWeight&&!Ns.has(r.message)){if(g&&T("web_enable_error_204"))Ws(void 0===b?"ERROR":b,r);else{b=void 0===b?"ERROR":b;"ERROR"===b?(Pl.Ya("handleError",r),T("record_app_crashed_web")&&0===Qs&&1===r.sampleWeight&&(Qs++,g={appCrashType:"APP_CRASH_TYPE_BREAKPAD"},T("report_client_error_with_app_crash_ks")||(g.systemHealth={crashData:{clientError:{logMessage:{message:r.message}}}}),ln("appCrashed",g)),Ps++):"WARNING"===b&&Pl.Ya("handleWarning",r);if(T("kevlar_gel_error_routing")){g=b;h=void 0===
h?{}:h;b:{a=v(Ss);for(c=a.next();!c.done;c=a.next())if(rn(c.value.toLowerCase())){a=!0;break b}a=!1}if(a)h=void 0;else{c={stackTrace:r.stack};r.fileName&&(c.filename=r.fileName);a=r.lineNumber&&r.lineNumber.split?r.lineNumber.split(":"):[];0!==a.length&&(1!==a.length||isNaN(Number(a[0]))?2!==a.length||isNaN(Number(a[0]))||isNaN(Number(a[1]))||(c.lineNumber=Number(a[0]),c.columnNumber=Number(a[1])):c.lineNumber=Number(a[0]));a={level:"ERROR_LEVEL_UNKNOWN",message:r.message,errorClassName:r.name,sampleWeight:r.sampleWeight};
"ERROR"===g?a.level="ERROR_LEVEL_ERROR":"WARNING"===g&&(a.level="ERROR_LEVEL_WARNNING");c={isObfuscated:!0,browserStackInfo:c};h.pageUrl=window.location.href;h.kvPairs=[];S("FEXP_EXPERIMENTS")&&(h.experimentIds=S("FEXP_EXPERIMENTS"));d=S("LATEST_ECATCHER_SERVICE_TRACKING_PARAMS");if(!Vk("web_disable_gel_stp_ecatcher_killswitch")&&d)for(e=v(Object.keys(d)),f=e.next();!f.done;f=e.next())f=f.value,h.kvPairs.push({key:f,value:String(d[f])});if(d=r.params)for(e=v(Object.keys(d)),f=e.next();!f.done;f=e.next())f=
f.value,h.kvPairs.push({key:"client."+f,value:String(d[f])});d=S("SERVER_NAME");e=S("SERVER_VERSION");d&&e&&(h.kvPairs.push({key:"server.name",value:d}),h.kvPairs.push({key:"server.version",value:e}));h={errorMetadata:h,stackTrace:c,logMessage:a}}h&&(ln("clientError",h),("ERROR"===g||T("errors_flush_gel_always_killswitch"))&&zs(void 0,void 0,!1))}T("suppress_error_204_logging")||Ws(b,r)}try{Ns.add(r.message)}catch(y){}Os++}}}
function Ws(a,b){var c=b.params||{};a={urlParams:{a:"logerror",t:"jserror",type:b.name,msg:b.message.substr(0,250),line:b.lineNumber,level:a,"client.name":c.name},postParams:{url:S("PAGE_NAME",window.location.href),file:b.fileName},method:"POST"};c.version&&(a["client.version"]=c.version);if(a.postParams){b.stack&&(a.postParams.stack=b.stack);b=v(Object.keys(c));for(var d=b.next();!d.done;d=b.next())d=d.value,a.postParams["client."+d]=c[d];if(c=S("LATEST_ECATCHER_SERVICE_TRACKING_PARAMS"))for(b=v(Object.keys(c)),
d=b.next();!d.done;d=b.next())d=d.value,a.postParams[d]=c[d];c=S("SERVER_NAME");b=S("SERVER_VERSION");c&&b&&(a.postParams["server.name"]=c,a.postParams["server.version"]=b)}Al(S("ECATCHER_REPORT_HOST","")+"/error_204",a)}
;function Xs(){this.register=new Map}
function Ys(a){a=v(a.register.values());for(var b=a.next();!b.done;b=a.next())b.value.jg("ABORTED")}
Xs.prototype.clear=function(){Ys(this);this.register.clear()};
var Zs=new Xs;var $s=Date.now().toString();
function at(){a:{if(window.crypto&&window.crypto.getRandomValues)try{var a=Array(16),b=new Uint8Array(16);window.crypto.getRandomValues(b);for(var c=0;c<a.length;c++)a[c]=b[c];var d=a;break a}catch(e){}d=Array(16);for(a=0;16>a;a++){b=Date.now();for(c=0;c<b%23;c++)d[a]=Math.random();d[a]=Math.floor(256*Math.random())}if($s)for(a=1,b=0;b<$s.length;b++)d[a%16]=d[a%16]^d[(a-1)%16]/4^$s.charCodeAt(b),a++}a=[];for(b=0;b<d.length;b++)a.push("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_".charAt(d[b]&63));
return a.join("")}
;var bt,ct=C.ytLoggingDocDocumentNonce_;ct||(ct=at(),D("ytLoggingDocDocumentNonce_",ct));bt=ct;function dt(a){this.h=a}
m=dt.prototype;m.getAsJson=function(){var a={};void 0!==this.h.trackingParams?a.trackingParams=this.h.trackingParams:(a.veType=this.h.veType,void 0!==this.h.veCounter&&(a.veCounter=this.h.veCounter),void 0!==this.h.elementIndex&&(a.elementIndex=this.h.elementIndex));void 0!==this.h.dataElement&&(a.dataElement=this.h.dataElement.getAsJson());void 0!==this.h.youtubeData&&(a.youtubeData=this.h.youtubeData);this.h.isCounterfactual&&(a.isCounterfactual=!0);return a};
m.getAsJspb=function(){var a=new Gk;void 0!==this.h.trackingParams?a.setTrackingParams(this.h.trackingParams):(void 0!==this.h.veType&&jg(a,2,Nf(this.h.veType)),void 0!==this.h.veCounter&&jg(a,6,Nf(this.h.veCounter)),void 0!==this.h.elementIndex&&jg(a,3,Nf(this.h.elementIndex)),this.h.isCounterfactual&&jg(a,5,Kf(!0)));if(void 0!==this.h.dataElement){var b=this.h.dataElement.getAsJspb();rg(a,Gk,7,b)}void 0!==this.h.youtubeData&&rg(a,Ak,8,this.h.jspbYoutubeData);return a};
m.toString=function(){return JSON.stringify(this.getAsJson())};
m.isClientVe=function(){return!this.h.trackingParams&&!!this.h.veType};
m.getLoggingDirectives=function(){return this.h.loggingDirectives};function et(a){return S("client-screen-nonce-store",{})[void 0===a?0:a]}
function ft(a,b){b=void 0===b?0:b;var c=S("client-screen-nonce-store");c||(c={},Uk("client-screen-nonce-store",c));c[b]=a}
function gt(a){a=void 0===a?0:a;return 0===a?"ROOT_VE_TYPE":"ROOT_VE_TYPE."+a}
function ht(a){return S(gt(void 0===a?0:a))}
D("yt_logging_screen.getRootVeType",ht);function jt(){var a=S("csn-to-ctt-auth-info");a||(a={},Uk("csn-to-ctt-auth-info",a));return a}
function kt(){return Object.values(S("client-screen-nonce-store",{})).filter(function(a){return void 0!==a})}
function lt(a){a=et(void 0===a?0:a);if(!a&&!S("USE_CSN_FALLBACK",!0))return null;a||(a="UNDEFINED_CSN");return a?a:null}
D("yt_logging_screen.getCurrentCsn",lt);function mt(a,b,c){var d=jt();(c=lt(c))&&delete d[c];b&&(d[a]=b)}
function nt(a){return jt()[a]}
D("yt_logging_screen.getCttAuthInfo",nt);D("yt_logging_screen.setCurrentScreen",function(a,b,c,d){c=void 0===c?0:c;if(a!==et(c)||b!==S(gt(c)))if(mt(a,d,c),ft(a,c),Uk(gt(c),b),b=function(){setTimeout(function(){a&&ln("foregroundHeartbeatScreenAssociated",{clientDocumentNonce:bt,clientScreenNonce:a})},0)},"requestAnimationFrame"in window)try{window.requestAnimationFrame(b)}catch(e){b()}else b()});function ot(){var a=tb(pt),b;return(new fe(function(c,d){a.onSuccess=function(e){ol(e)?c(new qt(e)):d(new rt("Request failed, status="+(e&&"status"in e?e.status:-1),"net.badstatus",e))};
a.onError=function(e){d(new rt("Unknown request error","net.unknown",e))};
a.onTimeout=function(e){d(new rt("Request timed out","net.timeout",e))};
b=Al("//googleads.g.doubleclick.net/pagead/id",a)})).nc(function(c){if(c instanceof me){var d;
null==(d=b)||d.abort()}return ke(c)})}
function rt(a,b,c){bb.call(this,a+", errorCode="+b);this.errorCode=b;this.xhr=c;this.name="PromiseAjaxError"}
w(rt,bb);function qt(a){this.xhr=a}
;function st(){this.h=0;this.i=null}
st.prototype.then=function(a,b,c){return 1===this.h&&a?(a=a.call(c,this.i))&&"function"===typeof a.then?a:tt(a):2===this.h&&b?(a=b.call(c,this.i))&&"function"===typeof a.then?a:ut(a):this};
st.prototype.getValue=function(){return this.i};
st.prototype.isRejected=function(){return 2==this.h};
st.prototype.$goog_Thenable=!0;function ut(a){var b=new st;a=void 0===a?null:a;b.h=2;b.i=void 0===a?null:a;return b}
function tt(a){var b=new st;a=void 0===a?null:a;b.h=1;b.i=void 0===a?null:a;return b}
;function vt(a,b){var c=void 0===c?{}:c;a={method:void 0===b?"POST":b,mode:jl(a)?"same-origin":"cors",credentials:jl(a)?"same-origin":"include"};b={};for(var d=v(Object.keys(c)),e=d.next();!e.done;e=d.next())e=e.value,c[e]&&(b[e]=c[e]);0<Object.keys(b).length&&(a.headers=b);return a}
;function wt(){return Ug()||(Ne||Oe)&&rn("applewebkit")&&!rn("version")&&(!rn("safari")||rn("gsa/"))||bd&&rn("version/")?!0:S("EOM_VISITOR_DATA")?!1:!0}
;function xt(a){a:{var b="EMBEDDED_PLAYER_MODE_UNKNOWN";window.location.hostname.includes("youtubeeducation.com")&&(b="EMBEDDED_PLAYER_MODE_PFL");var c=a.raw_embedded_player_response;if(!c&&(a=a.embedded_player_response))try{c=JSON.parse(a)}catch(e){break a}if(c)b:for(var d in Ek)if(Ek[d]==c.embeddedPlayerMode){b=Ek[d];break b}}return"EMBEDDED_PLAYER_MODE_PFL"===b}
;function zt(a){bb.call(this,a.message||a.description||a.name);this.isMissing=a instanceof At;this.isTimeout=a instanceof rt&&"net.timeout"==a.errorCode;this.isCanceled=a instanceof me}
w(zt,bb);zt.prototype.name="BiscottiError";function At(){bb.call(this,"Biscotti ID is missing from server")}
w(At,bb);At.prototype.name="BiscottiMissingError";var pt={format:"RAW",method:"GET",timeout:5E3,withCredentials:!0},Bt=null;function Ct(){if(T("disable_biscotti_fetch_entirely_for_all_web_clients"))return Error("Biscotti id fetching has been disabled entirely.");if(!wt())return Error("User has not consented - not fetching biscotti id.");var a=S("PLAYER_VARS",{});if("1"==rb(a))return Error("Biscotti ID is not available in private embed mode");if(xt(a))return Error("Biscotti id fetching has been disabled for pfl.")}
function Nk(){var a=Ct();if(void 0!==a)return ke(a);Bt||(Bt=ot().then(Dt).nc(function(b){return Et(2,b)}));
return Bt}
function Dt(a){a=a.xhr.responseText;if(0!=a.lastIndexOf(")]}'",0))throw new At;a=JSON.parse(a.substr(4));if(1<(a.type||1))throw new At;a=a.id;Ok(a);Bt=tt(a);Ft(18E5,2);return a}
function Et(a,b){b=new zt(b);Ok("");Bt=ut(b);0<a&&Ft(12E4,a-1);throw b;}
function Ft(a,b){pl(function(){ot().then(Dt,function(c){return Et(b,c)}).nc(Nd)},a)}
function Gt(){try{var a=E("yt.ads.biscotti.getId_");return a?a():Nk()}catch(b){return ke(b)}}
;var kc=ja(["data-"]);function Ht(a){a&&(a.dataset?a.dataset[It()]="true":jc(a))}
function Jt(a){return a?a.dataset?a.dataset[It()]:a.getAttribute("data-loaded"):null}
var Kt={};function It(){return Kt.loaded||(Kt.loaded="loaded".replace(/\-([a-z])/g,function(a,b){return b.toUpperCase()}))}
;function Lt(a,b,c){H.call(this);var d=this;c=c||S("POST_MESSAGE_ORIGIN")||window.document.location.protocol+"//"+window.document.location.hostname;this.i=b||null;this.targetOrigin="*";this.j=c;this.sessionId=null;this.channel="widget";this.D=!!a;this.A=function(e){a:if(!("*"!=d.j&&e.origin!=d.j||d.i&&e.source!=d.i||"string"!==typeof e.data)){try{var f=JSON.parse(e.data)}catch(g){break a}if(!(null==f||d.D&&(d.sessionId&&d.sessionId!=f.id||d.channel&&d.channel!=f.channel))&&f)switch(f.event){case "listening":"null"!=
e.origin&&(d.j=d.targetOrigin=e.origin);d.i=e.source;d.sessionId=f.id;d.h&&(d.h(),d.h=null);break;case "command":d.l&&(!d.m||0<=eb(d.m,f.func))&&d.l(f.func,f.args,e.origin)}}};
this.m=this.h=this.l=null;window.addEventListener("message",this.A)}
w(Lt,H);Lt.prototype.sendMessage=function(a,b){if(b=b||this.i){this.sessionId&&(a.id=this.sessionId);this.channel&&(a.channel=this.channel);try{var c=JSON.stringify(a);b.postMessage(c,this.targetOrigin)}catch(d){$k(d)}}};
Lt.prototype.R=function(){window.removeEventListener("message",this.A);H.prototype.R.call(this)};function Mt(a){a=a||{};var b={},c={};this.url=a.url||"";this.args=a.args||tb(b);this.assets=a.assets||{};this.attrs=a.attrs||tb(c);this.fallback=a.fallback||null;this.fallbackMessage=a.fallbackMessage||null;this.html5=!!a.html5;this.disable=a.disable||{};this.loaded=!!a.loaded;this.messages=a.messages||{}}
Mt.prototype.clone=function(){var a=new Mt,b;for(b in this)if(this.hasOwnProperty(b)){var c=this[b];"object"==Pa(c)?a[b]=tb(c):a[b]=c}return a};var Nt=["share/get_web_player_share_panel"],Ot=["feedback"],Pt=["notification/modify_channel_preference"],Qt=["browse/edit_playlist"],Rt=["subscription/subscribe"],St=["subscription/unsubscribe"];var Tt=window.yt&&window.yt.msgs_||window.ytcfg&&window.ytcfg.msgs||{};D("yt.msgs_",Tt);function Ut(a){Pk(Tt,arguments)}
;var Vt=/\.vflset|-vfl[a-zA-Z0-9_+=-]+/,Wt=/-[a-zA-Z]{2,3}_[a-zA-Z]{2,3}(?=(\/|$))/;function Xt(a,b,c){c=void 0===c?null:c;if(T("web_simple_scriptloader"))Yt(a,b,c);else if(window.spf&&spf.script){c="";if(a){var d=a.indexOf("jsbin/"),e=a.lastIndexOf(".js"),f=d+6;-1<d&&-1<e&&e>f&&(c=a.substring(f,e),c=c.replace(Vt,""),c=c.replace(Wt,""),c=c.replace("debug-",""),c=c.replace("tracing-",""))}spf.script.load(a,c,b)}else Yt(a,b,c)}
function Yt(a,b,c){c=void 0===c?null:c;var d=Zt(a),e=document.getElementById(d),f=e&&Jt(e),g=e&&!f;f?b&&b():(b&&(f=nr(d,b),b=""+Sa(b),$t[b]=f),g||(e=au(a,d,function(){Jt(e)||(Ht(e),tr(d),pl(function(){ur(d)},0))},c)))}
function au(a,b,c,d){d=void 0===d?null:d;var e=Sd("SCRIPT");e.id=b;e.onload=function(){c&&setTimeout(c,0)};
e.onreadystatechange=function(){switch(e.readyState){case "loaded":case "complete":e.onload()}};
d&&e.setAttribute("nonce",d);sc(e,wk(a));a=document.getElementsByTagName("head")[0]||document.body;a.insertBefore(e,a.firstChild);return e}
function bu(a){a=Zt(a);var b=document.getElementById(a);b&&(ur(a),b.parentNode.removeChild(b))}
function cu(a,b){a&&b&&(a=""+Sa(b),(a=$t[a])&&sr(a))}
function Zt(a){var b=document.createElement("a");ec(b,a);a=b.href.replace(/^[a-zA-Z]+:\/\//,"//");return"js-"+xc(a)}
var $t={};var du=/cssbin\/(?:debug-)?([a-zA-Z0-9_-]+?)(?:-2x|-web|-rtl|-vfl|.css)/;function eu(a){a=a||"";if(T("web_simple_styleloader"))fu(a);else if(window.spf){var b=a.match(du);spf.style.load(a,b?b[1]:"",void 0)}else fu(a)}
function fu(a){var b=gu(a),c=document.getElementById(b),d=c&&Jt(c);d||c&&!d||(c=hu(a,b,function(){if(!Jt(c)){Ht(c);tr(b);var e=Ya(ur,b);pl(e,0)}}))}
function hu(a,b,c){var d=document.createElement("link");d.id=b;d.onload=function(){c&&setTimeout(c,0)};
a=wk(a);nc(d,a);(document.getElementsByTagName("head")[0]||document.body).appendChild(d);return d}
function gu(a){var b=Sd("A");ec(b,new Gb(a,Hb));a=b.href.replace(/^[a-zA-Z]+:\/\//,"//");return"css-"+xc(a)}
;function iu(a){var b=B.apply(1,arguments);if(!ju(a)||b.some(function(d){return!ju(d)}))throw Error("Only objects may be merged.");
b=v(b);for(var c=b.next();!c.done;c=b.next())ku(a,c.value)}
function ku(a,b){for(var c in b)if(ju(b[c])){if(c in a&&!ju(a[c]))throw Error("Cannot merge an object into a non-object.");c in a||(a[c]={});ku(a[c],b[c])}else if(lu(b[c])){if(c in a&&!lu(a[c]))throw Error("Cannot merge an array into a non-array.");c in a||(a[c]=[]);mu(a[c],b[c])}else a[c]=b[c];return a}
function mu(a,b){b=v(b);for(var c=b.next();!c.done;c=b.next())c=c.value,ju(c)?a.push(ku({},c)):lu(c)?a.push(mu([],c)):a.push(c);return a}
function ju(a){return"object"===typeof a&&!Array.isArray(a)}
function lu(a){return"object"===typeof a&&Array.isArray(a)}
;function nu(a){a=void 0===a?!1:a;H.call(this);this.h=new L(a);Rc(this,this.h)}
$a(nu,H);nu.prototype.subscribe=function(a,b,c){return this.Z()?0:this.h.subscribe(a,b,c)};
nu.prototype.unsubscribe=function(a,b,c){return this.Z()?!1:this.h.unsubscribe(a,b,c)};
nu.prototype.l=function(a,b){this.Z()||this.h.Ya.apply(this.h,arguments)};var ou="absolute_experiments app conditional_experiments debugcss debugjs expflag forced_experiments pbj pbjreload sbb spf spfreload sr_bns_address sttick".split(" ");
function pu(a,b){var c=void 0===c?!0:c;var d=S("VALID_SESSION_TEMPDATA_DOMAINS",[]),e=Bc(window.location.href);e&&d.push(e);e=Bc(a);if(0<=eb(d,e)||!e&&0==a.lastIndexOf("/",0))if(d=document.createElement("a"),ec(d,a),a=d.href)if(a=Cc(a),a=Dc(a))if(c&&!b.csn&&(b.itct||b.ved)&&(b=Object.assign({csn:lt()},b)),f){var f=parseInt(f,10);isFinite(f)&&0<f&&qu(a,b,f)}else qu(a,b)}
function qu(a,b,c){a=ru(a);b=b?Fc(b):"";c=c||5;wt()&&am(a,b,c)}
function ru(a){for(var b=v(ou),c=b.next();!c.done;c=b.next())a=Kc(a,c.value);return"ST-"+xc(a).toString(36)}
;function su(a){gp.call(this,1,arguments);this.csn=a}
w(su,gp);var pp=new hp("screen-created",su),tu=[],uu=0,vu=new Map,wu=new Map,xu=new Map;
function yu(a,b,c,d,e){e=void 0===e?!1:e;if(!T("do_not_send_empty_attach_payloads")||d&&!(1>d.length)){for(var f=zu({cttAuthInfo:nt(b)||void 0},b),g=v(d),h=g.next();!h.done;h=g.next()){h=h.value;var k=h.getAsJson();(pb(k)||!k.trackingParams&&!k.veType)&&Us(Error("Child VE logged with no data"));if(T("no_client_ve_attach_unless_shown")){var l=Au(h,b);if(k.veType&&!wu.has(l)&&!xu.has(l)&&!e){if(!T("il_attach_cache_limit")||1E3>vu.size){vu.set(l,[a,b,c,h]);return}T("il_attach_cache_limit")&&1E3<vu.size&&
Us(new V("IL Attach cache exceeded limit"))}h=Au(c,b);vu.has(h)?Bu(c,b):xu.set(h,!0)}}d=d.filter(function(n){n.csn!==b?(n.csn=b,n=!0):n=!1;return n});
c={csn:b,parentVe:c.getAsJson(),childVes:hb(d,function(n){return n.getAsJson()})};
"UNDEFINED_CSN"===b?Cu("visualElementAttached",f,c):a?Ms("visualElementAttached",c,a,f):ln("visualElementAttached",c,f)}}
function Cu(a,b,c){tu.push({Ee:a,payload:c,cg:void 0,options:b});uu||(uu=qp())}
function rp(a){if(tu){for(var b=v(tu),c=b.next();!c.done;c=b.next())c=c.value,c.payload&&(c.payload.csn=a.csn,ln(c.Ee,c.payload,c.options));tu.length=0}uu=0}
function Au(a,b){return""+a.getAsJson().veType+a.getAsJson().veCounter+b}
function Bu(a,b){a=Au(a,b);vu.has(a)&&(b=vu.get(a)||[],yu(b[0],b[1],b[2],[b[3]],!0),vu.delete(a))}
function zu(a,b){T("log_sequence_info_on_gel_web")&&(a.sequenceGroup=b);return a}
;function Du(){try{return!!self.localStorage}catch(a){return!1}}
;function Eu(a){a=a.match(/(.*)::.*::.*/);if(null!==a)return a[1]}
function Fu(a){if(Du()){var b=Object.keys(window.localStorage);b=v(b);for(var c=b.next();!c.done;c=b.next()){c=c.value;var d=Eu(c);void 0===d||a.includes(d)||self.localStorage.removeItem(c)}}}
function Gu(){if(!Du())return!1;var a=sm(),b=Object.keys(window.localStorage);b=v(b);for(var c=b.next();!c.done;c=b.next())if(c=Eu(c.value),void 0!==c&&c!==a)return!0;return!1}
;function Hu(){var a=!1;try{a=!!window.sessionStorage.getItem("session_logininfo")}catch(b){a=!0}return T("copy_login_info_to_st_cookie")&&("WEB"===S("INNERTUBE_CLIENT_NAME")||"WEB_CREATOR"===S("INNERTUBE_CLIENT_NAME"))&&a}
function Iu(a){if(S("LOGGED_IN",!0)&&Hu()){var b=S("VALID_SESSION_TEMPDATA_DOMAINS",[]);var c=Bc(window.location.href);c&&b.push(c);c=Bc(a);0<=eb(b,c)||!c&&0==a.lastIndexOf("/",0)?(b=Cc(a),(b=Dc(b))?(b=ru(b),b=(b=bm(b)||null)?gl(b):{}):b=null):b=null;null==b&&(b={});c=b;var d=void 0;Hu()?(d||(d=S("LOGIN_INFO")),d?(c.session_logininfo=d,c=!0):c=!1):c=!1;c&&pu(a,b)}}
;function Ju(a,b,c){b=void 0===b?{}:b;c=void 0===c?!1:c;var d=S("EVENT_ID");d&&(b.ei||(b.ei=d));b&&pu(a,b);if(c)return!1;Iu(a);var e=void 0===e?{}:e;var f=void 0===f?"":f;var g=void 0===g?window:g;a=Gc(a,e);Iu(a);f=a+f;var h=void 0===h?bc:h;a:if(h=void 0===h?bc:h,f instanceof Gb)h=f;else{for(a=0;a<h.length;++a)if(b=h[a],b instanceof $b&&b.se(f)){h=new Gb(f,Hb);break a}h=void 0}g=g.location;h=dc(h||Zb);void 0!==h&&(g.href=h);return!0}
;function Ku(a){if("1"!=rb(S("PLAYER_VARS",{}))){a&&Mk();try{Gt().then(function(){},function(){}),pl(Ku,18E5)}catch(b){Zk(b)}}}
;var Lu=new Map([["dark","USER_INTERFACE_THEME_DARK"],["light","USER_INTERFACE_THEME_LIGHT"]]);function Mu(){var a=void 0===a?window.location.href:a;if(T("kevlar_disable_theme_param"))return null;zc(Ac(5,a));try{var b=hl(a).theme;return Lu.get(b)||null}catch(c){}return null}
;function Nu(){this.h={};if(this.i=dm()){var a=bm("CONSISTENCY");a&&Ou(this,{encryptedTokenJarContents:a})}}
Nu.prototype.handleResponse=function(a,b){if(!b)throw Error("request needs to be passed into ConsistencyService");var c,d;b=(null==(c=b.Ma.context)?void 0:null==(d=c.request)?void 0:d.consistencyTokenJars)||[];var e;if(a=null==(e=a.responseContext)?void 0:e.consistencyTokenJar){e=v(b);for(c=e.next();!c.done;c=e.next())delete this.h[c.value.encryptedTokenJarContents];Ou(this,a)}};
function Ou(a,b){if(b.encryptedTokenJarContents&&(a.h[b.encryptedTokenJarContents]=b,"string"===typeof b.expirationSeconds)){var c=Number(b.expirationSeconds);setTimeout(function(){delete a.h[b.encryptedTokenJarContents]},1E3*c);
a.i&&am("CONSISTENCY",b.encryptedTokenJarContents,c,void 0,!0)}}
;var Pu=window.location.hostname.split(".").slice(-2).join(".");function Qu(){var a=S("LOCATION_PLAYABILITY_TOKEN");"TVHTML5"===S("INNERTUBE_CLIENT_NAME")&&(this.h=Ru(this))&&(a=this.h.get("yt-location-playability-token"));a&&(this.locationPlayabilityToken=a,this.i=void 0)}
var Su;function Tu(){Su=E("yt.clientLocationService.instance");Su||(Su=new Qu,D("yt.clientLocationService.instance",Su));return Su}
m=Qu.prototype;m.setLocationOnInnerTubeContext=function(a){a.client||(a.client={});this.i?(a.client.locationInfo||(a.client.locationInfo={}),a.client.locationInfo.latitudeE7=Math.floor(1E7*this.i.coords.latitude),a.client.locationInfo.longitudeE7=Math.floor(1E7*this.i.coords.longitude),a.client.locationInfo.horizontalAccuracyMeters=Math.round(this.i.coords.accuracy),a.client.locationInfo.forceLocationPlayabilityTokenRefresh=!0):this.locationPlayabilityToken&&(a.client.locationPlayabilityToken=this.locationPlayabilityToken)};
m.handleResponse=function(a){var b;a=null==(b=a.responseContext)?void 0:b.locationPlayabilityToken;void 0!==a&&(this.locationPlayabilityToken=a,this.i=void 0,"TVHTML5"===S("INNERTUBE_CLIENT_NAME")?(this.h=Ru(this))&&this.h.set("yt-location-playability-token",a,15552E3):am("YT_CL",JSON.stringify({loctok:a}),15552E3,Pu,!0))};
function Ru(a){return void 0===a.h?new bn("yt-client-location"):a.h}
m.clearLocationPlayabilityToken=function(a){"TVHTML5"===a?(this.h=Ru(this))&&this.h.remove("yt-location-playability-token"):cm("YT_CL")};
m.getCurrentPositionFromGeolocation=function(){var a=this;if(!(navigator&&navigator.geolocation&&navigator.geolocation.getCurrentPosition))return Promise.reject(Error("Geolocation unsupported"));var b=!1,c=1E4;"MWEB"===S("INNERTUBE_CLIENT_NAME")&&(b=!0,c=15E3);return new Promise(function(d,e){navigator.geolocation.getCurrentPosition(function(f){a.i=f;d(f)},function(f){e(f)},{enableHighAccuracy:b,
maximumAge:0,timeout:c})})};
m.createUnpluggedLocationInfo=function(a){var b={};a=a.coords;if(null==a?0:a.latitude)b.latitudeE7=Math.floor(1E7*a.latitude);if(null==a?0:a.longitude)b.longitudeE7=Math.floor(1E7*a.longitude);if(null==a?0:a.accuracy)b.locationRadiusMeters=Math.round(a.accuracy);return b};
m.createLocationInfo=function(a){var b={};a=a.coords;if(null==a?0:a.latitude)b.latitudeE7=Math.floor(1E7*a.latitude);if(null==a?0:a.longitude)b.longitudeE7=Math.floor(1E7*a.longitude);return b};function Uu(a,b){var c,d=null==(c=as(a,Dk))?void 0:c.signal;if(d&&b.Ob&&(c=b.Ob[d]))return c();var e;if((c=null==(e=as(a,Bk))?void 0:e.request)&&b.Ud&&(e=b.Ud[c]))return e();for(var f in a)if(b.cd[f]&&(a=b.cd[f]))return a()}
function Vu(a){var b={"Content-Type":"application/json"};S("EOM_VISITOR_DATA")?b["X-Goog-EOM-Visitor-Id"]=S("EOM_VISITOR_DATA"):S("VISITOR_DATA")&&(b["X-Goog-Visitor-Id"]=S("VISITOR_DATA"));b["X-Youtube-Bootstrap-Logged-In"]=S("LOGGED_IN",!1);S("DEBUG_SETTINGS_METADATA")&&(b["X-Debug-Settings-Metadata"]=S("DEBUG_SETTINGS_METADATA"));"cors"!==a&&((a=S("INNERTUBE_CONTEXT_CLIENT_NAME"))&&(b["X-Youtube-Client-Name"]=a),(a=S("INNERTUBE_CONTEXT_CLIENT_VERSION"))&&(b["X-Youtube-Client-Version"]=a),(a=S("CHROME_CONNECTED_HEADER"))&&
(b["X-Youtube-Chrome-Connected"]=a),(a=S("DOMAIN_ADMIN_STATE"))&&(b["X-Youtube-Domain-Admin-State"]=a));return b}
;function Wu(a){return function(){return new a}}
;var Xu={},Yu=(Xu.WEB_UNPLUGGED="^unplugged/",Xu.WEB_UNPLUGGED_ONBOARDING="^unplugged/",Xu.WEB_UNPLUGGED_OPS="^unplugged/",Xu.WEB_UNPLUGGED_PUBLIC="^unplugged/",Xu.WEB_CREATOR="^creator/",Xu.WEB_KIDS="^kids/",Xu.WEB_EXPERIMENTS="^experiments/",Xu.WEB_MUSIC="^music/",Xu.WEB_REMIX="^music/",Xu.WEB_MUSIC_EMBEDDED_PLAYER="^music/",Xu.WEB_MUSIC_EMBEDDED_PLAYER="^main_app/|^sfv/",Xu);
function Zu(a){var b=void 0===b?"UNKNOWN_INTERFACE":b;if(1===a.length)return a[0];var c=Yu[b];if(c){c=new RegExp(c);for(var d=v(a),e=d.next();!e.done;e=d.next())if(e=e.value,c.exec(e))return e}var f=[];Object.entries(Yu).forEach(function(g){var h=v(g);g=h.next().value;h=h.next().value;b!==g&&f.push(h)});
c=new RegExp(f.join("|"));a.sort(function(g,h){return g.length-h.length});
d=v(a);for(e=d.next();!e.done;e=d.next())if(e=e.value,!c.exec(e))return e;return a[0]}
;function $u(){}
$u.prototype.v=function(a,b,c){b=void 0===b?{}:b;c=void 0===c?Yl:c;var d=a.clickTrackingParams,e=this.l,f=!1;f=void 0===f?!1:f;e=void 0===e?!1:e;var g=S("INNERTUBE_CONTEXT");if(g){g=ub(g);T("web_no_tracking_params_in_shell_killswitch")||delete g.clickTracking;g.client||(g.client={});var h=g.client;"MWEB"===h.clientName&&"AUTOMOTIVE_FORM_FACTOR"!==h.clientFormFactor&&(h.clientFormFactor=S("IS_TABLET")?"LARGE_FORM_FACTOR":"SMALL_FORM_FACTOR");h.screenWidthPoints=window.innerWidth;h.screenHeightPoints=
window.innerHeight;h.screenPixelDensity=Math.round(window.devicePixelRatio||1);h.screenDensityFloat=window.devicePixelRatio||1;h.utcOffsetMinutes=-Math.floor((new Date).getTimezoneOffset());var k=void 0===k?!1:k;hm();var l="USER_INTERFACE_THEME_LIGHT";km(165)?l="USER_INTERFACE_THEME_DARK":km(174)?l="USER_INTERFACE_THEME_LIGHT":!T("kevlar_legacy_browsers")&&window.matchMedia&&window.matchMedia("(prefers-color-scheme)").matches&&window.matchMedia("(prefers-color-scheme: dark)").matches&&(l="USER_INTERFACE_THEME_DARK");
k=k?l:Mu()||l;h.userInterfaceTheme=k;if(!f){if(k=pm())h.connectionType=k;T("web_log_effective_connection_type")&&(k=qm())&&(g.client.effectiveConnectionType=k)}var n;if(T("web_log_memory_total_kbytes")&&(null==(n=C.navigator)?0:n.deviceMemory)){var p;n=null==(p=C.navigator)?void 0:p.deviceMemory;g.client.memoryTotalKbytes=""+1E6*n}T("web_gcf_hashes_innertube")&&(k=$o())&&(p=k.coldConfigData,n=k.coldHashData,k=k.hotHashData,g.client.configInfo=g.client.configInfo||{},g.client.configInfo.coldConfigData=
p,g.client.configInfo.coldHashData=n,g.client.configInfo.hotHashData=k);p=hl(C.location.href);!T("web_populate_internal_geo_killswitch")&&p.internalcountrycode&&(h.internalGeo=p.internalcountrycode);"MWEB"===h.clientName||"WEB"===h.clientName?(h.mainAppWebInfo={graftUrl:C.location.href},T("kevlar_woffle")&&Zl.h&&(p=Zl.h,h.mainAppWebInfo.pwaInstallabilityStatus=!p.h&&p.i?"PWA_INSTALLABILITY_STATUS_CAN_BE_INSTALLED":"PWA_INSTALLABILITY_STATUS_UNKNOWN"),h.mainAppWebInfo.webDisplayMode=$l(),h.mainAppWebInfo.isWebNativeShareAvailable=
navigator&&void 0!==navigator.share):"TVHTML5"===h.clientName&&(!T("web_lr_app_quality_killswitch")&&(p=S("LIVING_ROOM_APP_QUALITY"))&&(h.tvAppInfo=Object.assign(h.tvAppInfo||{},{appQuality:p})),p=S("LIVING_ROOM_CERTIFICATION_SCOPE"))&&(h.tvAppInfo=Object.assign(h.tvAppInfo||{},{certificationScope:p}));if(!T("web_populate_time_zone_itc_killswitch")){b:{if("undefined"!==typeof Intl)try{var r=(new Intl.DateTimeFormat).resolvedOptions().timeZone;break b}catch(ea){}r=void 0}r&&(h.timeZone=r)}(r=S("EXPERIMENTS_TOKEN",
""))?h.experimentsToken=r:delete h.experimentsToken;r=sl();Nu.h||(Nu.h=new Nu);h=Nu.h.h;p=[];n=0;for(var t in h)p[n++]=h[t];g.request=Object.assign({},g.request,{internalExperimentFlags:r,consistencyTokenJars:p});!T("web_prequest_context_killswitch")&&(t=S("INNERTUBE_CONTEXT_PREQUEST_CONTEXT"))&&(g.request.externalPrequestContext=t);r=hm();t=km(58);r=r.get("gsml","");g.user=Object.assign({},g.user);t&&(g.user.enableSafetyMode=t);r&&(g.user.lockedSafetyMode=!0);T("warm_op_csn_cleanup")?e&&(f=lt())&&
(g.clientScreenNonce=f):!f&&(f=lt())&&(g.clientScreenNonce=f);d&&(g.clickTracking={clickTrackingParams:d});if(d=E("yt.mdx.remote.remoteClient_"))g.remoteClient=d;Tu().setLocationOnInnerTubeContext(g);try{var x=kl(),z=x.bid;delete x.bid;g.adSignalsInfo={params:[],bid:z};var y=v(Object.entries(x));for(var J=y.next();!J.done;J=y.next()){var G=v(J.value),R=G.next().value,N=G.next().value;x=R;z=N;d=void 0;null==(d=g.adSignalsInfo.params)||d.push({key:x,value:""+z})}var da;if(T("add_ifa_to_tvh5_requests")&&
"TVHTML5"===(null==(da=g.client)?void 0:da.clientName)){var Ca=S("INNERTUBE_CONTEXT");Ca.adSignalsInfo&&(g.adSignalsInfo.advertisingId=Ca.adSignalsInfo.advertisingId,g.adSignalsInfo.limitAdTracking=Ca.adSignalsInfo.limitAdTracking)}}catch(ea){Ts(ea)}y=g}else Ts(Error("Error: No InnerTubeContext shell provided in ytconfig.")),y={};y={context:y};if(J=this.i(a)){this.h(y,J,b);var O;b="/youtubei/v1/"+Zu(this.j());(J=null==(O=as(a.commandMetadata,Ck))?void 0:O.apiUrl)&&(b=J);O=b;(b=S("INNERTUBE_HOST_OVERRIDE"))&&
(O=String(b)+String(Cc(O)));b={};T("web_api_key_killswitch")&&(b.key=S("INNERTUBE_API_KEY"));T("json_condensed_response")&&(b.prettyPrint="false");O=il(O,b||{},!1);a=Object.assign({},{command:a},void 0);a={input:O,ib:vt(O),Ma:y,config:a};a.config.Tb?a.config.Tb.identity=c:a.config.Tb={identity:c};return a}Ts(new V("Error: Failed to create Request from Command.",a))};
fa.Object.defineProperties($u.prototype,{l:{configurable:!0,enumerable:!0,get:function(){return!1}}});
function av(){}
w(av,$u);function bv(){}
w(bv,av);bv.prototype.v=function(){return{input:"/getDatasyncIdsEndpoint",ib:vt("/getDatasyncIdsEndpoint","GET"),Ma:{}}};
bv.prototype.j=function(){return[]};
bv.prototype.i=function(){};
bv.prototype.h=function(){};var cv={},dv=(cv.GET_DATASYNC_IDS=Wu(bv),cv);function ev(a){var b;(b=E("ytcsi."+(a||"")+"data_"))||(b={tick:{},info:{}},D("ytcsi."+(a||"")+"data_",b));return b}
function fv(){var a=ev();a.info||(a.info={});return a.info}
function gv(a){a=ev(a);a.metadata||(a.metadata={});return a.metadata}
function hv(a){a=ev(a);a.tick||(a.tick={});return a.tick}
function iv(a){a=ev(a);if(a.gel){var b=a.gel;b.gelInfos||(b.gelInfos={});b.gelTicks||(b.gelTicks={})}else a.gel={gelTicks:{},gelInfos:{}};return a.gel}
function jv(a){a=iv(a);a.gelInfos||(a.gelInfos={});return a.gelInfos}
function kv(a){var b=ev(a).nonce;b||(b=at(),ev(a).nonce=b);return b}
;function lv(){var a=E("ytcsi.debug");a||(a=[],D("ytcsi.debug",a),D("ytcsi.reference",{}));return a}
function mv(a){a=a||"";var b=E("ytcsi.reference");b||(lv(),b=E("ytcsi.reference"));if(b[a])return b[a];var c=lv(),d={timerName:a,info:{},tick:{},span:{},jspbInfo:[]};c.push(d);return b[a]=d}
;var X={},nv=(X.auto_search="LATENCY_ACTION_AUTO_SEARCH",X.ad_to_ad="LATENCY_ACTION_AD_TO_AD",X.ad_to_video="LATENCY_ACTION_AD_TO_VIDEO",X["analytics.explore"]="LATENCY_ACTION_CREATOR_ANALYTICS_EXPLORE",X.app_startup="LATENCY_ACTION_APP_STARTUP",X["artist.analytics"]="LATENCY_ACTION_CREATOR_ARTIST_ANALYTICS",X["artist.events"]="LATENCY_ACTION_CREATOR_ARTIST_CONCERTS",X["artist.presskit"]="LATENCY_ACTION_CREATOR_ARTIST_PROFILE",X["asset.claimed_videos"]="LATENCY_ACTION_CREATOR_CMS_ASSET_CLAIMED_VIDEOS",
X["asset.composition"]="LATENCY_ACTION_CREATOR_CMS_ASSET_COMPOSITION",X["asset.composition_ownership"]="LATENCY_ACTION_CREATOR_CMS_ASSET_COMPOSITION_OWNERSHIP",X["asset.composition_policy"]="LATENCY_ACTION_CREATOR_CMS_ASSET_COMPOSITION_POLICY",X["asset.embeds"]="LATENCY_ACTION_CREATOR_CMS_ASSET_EMBEDS",X["asset.history"]="LATENCY_ACTION_CREATOR_CMS_ASSET_HISTORY",X["asset.issues"]="LATENCY_ACTION_CREATOR_CMS_ASSET_ISSUES",X["asset.licenses"]="LATENCY_ACTION_CREATOR_CMS_ASSET_LICENSES",X["asset.metadata"]=
"LATENCY_ACTION_CREATOR_CMS_ASSET_METADATA",X["asset.ownership"]="LATENCY_ACTION_CREATOR_CMS_ASSET_OWNERSHIP",X["asset.policy"]="LATENCY_ACTION_CREATOR_CMS_ASSET_POLICY",X["asset.references"]="LATENCY_ACTION_CREATOR_CMS_ASSET_REFERENCES",X["asset.shares"]="LATENCY_ACTION_CREATOR_CMS_ASSET_SHARES",X["asset.sound_recordings"]="LATENCY_ACTION_CREATOR_CMS_ASSET_SOUND_RECORDINGS",X["asset_group.assets"]="LATENCY_ACTION_CREATOR_CMS_ASSET_GROUP_ASSETS",X["asset_group.campaigns"]="LATENCY_ACTION_CREATOR_CMS_ASSET_GROUP_CAMPAIGNS",
X["asset_group.claimed_videos"]="LATENCY_ACTION_CREATOR_CMS_ASSET_GROUP_CLAIMED_VIDEOS",X["asset_group.metadata"]="LATENCY_ACTION_CREATOR_CMS_ASSET_GROUP_METADATA",X["song.analytics"]="LATENCY_ACTION_CREATOR_SONG_ANALYTICS",X.browse="LATENCY_ACTION_BROWSE",X.cast_splash="LATENCY_ACTION_CAST_SPLASH",X.channels="LATENCY_ACTION_CHANNELS",X.creator_channel_dashboard="LATENCY_ACTION_CREATOR_CHANNEL_DASHBOARD",X["channel.analytics"]="LATENCY_ACTION_CREATOR_CHANNEL_ANALYTICS",X["channel.comments"]="LATENCY_ACTION_CREATOR_CHANNEL_COMMENTS",
X["channel.content"]="LATENCY_ACTION_CREATOR_POST_LIST",X["channel.content.promotions"]="LATENCY_ACTION_CREATOR_PROMOTION_LIST",X["channel.copyright"]="LATENCY_ACTION_CREATOR_CHANNEL_COPYRIGHT",X["channel.editing"]="LATENCY_ACTION_CREATOR_CHANNEL_EDITING",X["channel.monetization"]="LATENCY_ACTION_CREATOR_CHANNEL_MONETIZATION",X["channel.music"]="LATENCY_ACTION_CREATOR_CHANNEL_MUSIC",X["channel.music_storefront"]="LATENCY_ACTION_CREATOR_CHANNEL_MUSIC_STOREFRONT",X["channel.playlists"]="LATENCY_ACTION_CREATOR_CHANNEL_PLAYLISTS",
X["channel.translations"]="LATENCY_ACTION_CREATOR_CHANNEL_TRANSLATIONS",X["channel.videos"]="LATENCY_ACTION_CREATOR_CHANNEL_VIDEOS",X["channel.live_streaming"]="LATENCY_ACTION_CREATOR_LIVE_STREAMING",X.chips="LATENCY_ACTION_CHIPS",X.commerce_transaction="LATENCY_ACTION_COMMERCE_TRANSACTION",X["dialog.copyright_strikes"]="LATENCY_ACTION_CREATOR_DIALOG_COPYRIGHT_STRIKES",X["dialog.video_copyright"]="LATENCY_ACTION_CREATOR_DIALOG_VIDEO_COPYRIGHT",X["dialog.uploads"]="LATENCY_ACTION_CREATOR_DIALOG_UPLOADS",
X.direct_playback="LATENCY_ACTION_DIRECT_PLAYBACK",X.embed="LATENCY_ACTION_EMBED",X.entity_key_serialization_perf="LATENCY_ACTION_ENTITY_KEY_SERIALIZATION_PERF",X.entity_key_deserialization_perf="LATENCY_ACTION_ENTITY_KEY_DESERIALIZATION_PERF",X.explore="LATENCY_ACTION_EXPLORE",X.favorites="LATENCY_ACTION_FAVORITES",X.home="LATENCY_ACTION_HOME",X.inboarding="LATENCY_ACTION_INBOARDING",X.library="LATENCY_ACTION_LIBRARY",X.live="LATENCY_ACTION_LIVE",X.live_pagination="LATENCY_ACTION_LIVE_PAGINATION",
X.mini_app="LATENCY_ACTION_MINI_APP_PLAY",X.onboarding="LATENCY_ACTION_ONBOARDING",X.owner="LATENCY_ACTION_CREATOR_CMS_DASHBOARD",X["owner.allowlist"]="LATENCY_ACTION_CREATOR_CMS_ALLOWLIST",X["owner.analytics"]="LATENCY_ACTION_CREATOR_CMS_ANALYTICS",X["owner.art_tracks"]="LATENCY_ACTION_CREATOR_CMS_ART_TRACKS",X["owner.assets"]="LATENCY_ACTION_CREATOR_CMS_ASSETS",X["owner.asset_groups"]="LATENCY_ACTION_CREATOR_CMS_ASSET_GROUPS",X["owner.bulk"]="LATENCY_ACTION_CREATOR_CMS_BULK_HISTORY",X["owner.campaigns"]=
"LATENCY_ACTION_CREATOR_CMS_CAMPAIGNS",X["owner.channel_invites"]="LATENCY_ACTION_CREATOR_CMS_CHANNEL_INVITES",X["owner.channels"]="LATENCY_ACTION_CREATOR_CMS_CHANNELS",X["owner.claimed_videos"]="LATENCY_ACTION_CREATOR_CMS_CLAIMED_VIDEOS",X["owner.claims"]="LATENCY_ACTION_CREATOR_CMS_MANUAL_CLAIMING",X["owner.claims.manual"]="LATENCY_ACTION_CREATOR_CMS_MANUAL_CLAIMING",X["owner.delivery"]="LATENCY_ACTION_CREATOR_CMS_CONTENT_DELIVERY",X["owner.delivery_templates"]="LATENCY_ACTION_CREATOR_CMS_DELIVERY_TEMPLATES",
X["owner.issues"]="LATENCY_ACTION_CREATOR_CMS_ISSUES",X["owner.licenses"]="LATENCY_ACTION_CREATOR_CMS_LICENSES",X["owner.pitch_music"]="LATENCY_ACTION_CREATOR_CMS_PITCH_MUSIC",X["owner.policies"]="LATENCY_ACTION_CREATOR_CMS_POLICIES",X["owner.releases"]="LATENCY_ACTION_CREATOR_CMS_RELEASES",X["owner.reports"]="LATENCY_ACTION_CREATOR_CMS_REPORTS",X["owner.videos"]="LATENCY_ACTION_CREATOR_CMS_VIDEOS",X.parent_profile_settings="LATENCY_ACTION_KIDS_PARENT_PROFILE_SETTINGS",X.parent_tools_collection="LATENCY_ACTION_PARENT_TOOLS_COLLECTION",
X.parent_tools_dashboard="LATENCY_ACTION_PARENT_TOOLS_DASHBOARD",X.player_att="LATENCY_ACTION_PLAYER_ATTESTATION",X["playlist.videos"]="LATENCY_ACTION_CREATOR_PLAYLIST_VIDEO_LIST",X["post.comments"]="LATENCY_ACTION_CREATOR_POST_COMMENTS",X["post.edit"]="LATENCY_ACTION_CREATOR_POST_EDIT",X.prebuffer="LATENCY_ACTION_PREBUFFER",X.prefetch="LATENCY_ACTION_PREFETCH",X.profile_settings="LATENCY_ACTION_KIDS_PROFILE_SETTINGS",X.profile_switcher="LATENCY_ACTION_LOGIN",X.reel_watch="LATENCY_ACTION_REEL_WATCH",
X.results="LATENCY_ACTION_RESULTS",X["promotion.edit"]="LATENCY_ACTION_CREATOR_PROMOTION_EDIT",X.red="LATENCY_ACTION_PREMIUM_PAGE_GET_BROWSE",X.premium="LATENCY_ACTION_PREMIUM_PAGE_GET_BROWSE",X.search_overview_answer="LATENCY_ACTION_SEARCH_OVERVIEW_ANSWER",X.search_ui="LATENCY_ACTION_SEARCH_UI",X.search_suggest="LATENCY_ACTION_SUGGEST",X.search_zero_state="LATENCY_ACTION_SEARCH_ZERO_STATE",X.secret_code="LATENCY_ACTION_KIDS_SECRET_CODE",X.seek="LATENCY_ACTION_PLAYER_SEEK",X.settings="LATENCY_ACTION_SETTINGS",
X.store="LATENCY_ACTION_STORE",X.tenx="LATENCY_ACTION_TENX",X.video_to_ad="LATENCY_ACTION_VIDEO_TO_AD",X.watch="LATENCY_ACTION_WATCH",X.watch_it_again="LATENCY_ACTION_KIDS_WATCH_IT_AGAIN",X["watch,watch7"]="LATENCY_ACTION_WATCH",X["watch,watch7_html5"]="LATENCY_ACTION_WATCH",X["watch,watch7ad"]="LATENCY_ACTION_WATCH",X["watch,watch7ad_html5"]="LATENCY_ACTION_WATCH",X.wn_comments="LATENCY_ACTION_LOAD_COMMENTS",X.ww_rqs="LATENCY_ACTION_WHO_IS_WATCHING",X["video.analytics"]="LATENCY_ACTION_CREATOR_VIDEO_ANALYTICS",
X["video.claims"]="LATENCY_ACTION_CREATOR_VIDEO_CLAIMS",X["video.comments"]="LATENCY_ACTION_CREATOR_VIDEO_COMMENTS",X["video.copyright"]="LATENCY_ACTION_CREATOR_VIDEO_COPYRIGHT",X["video.edit"]="LATENCY_ACTION_CREATOR_VIDEO_EDIT",X["video.editor"]="LATENCY_ACTION_CREATOR_VIDEO_VIDEO_EDITOR",X["video.editor_async"]="LATENCY_ACTION_CREATOR_VIDEO_VIDEO_EDITOR_ASYNC",X["video.live_settings"]="LATENCY_ACTION_CREATOR_VIDEO_LIVE_SETTINGS",X["video.live_streaming"]="LATENCY_ACTION_CREATOR_VIDEO_LIVE_STREAMING",
X["video.monetization"]="LATENCY_ACTION_CREATOR_VIDEO_MONETIZATION",X["video.policy"]="LATENCY_ACTION_CREATOR_VIDEO_POLICY",X["video.rights_management"]="LATENCY_ACTION_CREATOR_VIDEO_RIGHTS_MANAGEMENT",X["video.translations"]="LATENCY_ACTION_CREATOR_VIDEO_TRANSLATIONS",X.voice_assistant="LATENCY_ACTION_VOICE_ASSISTANT",X.cast_load_by_entity_to_watch="LATENCY_ACTION_CAST_LOAD_BY_ENTITY_TO_WATCH",X.networkless_performance="LATENCY_ACTION_NETWORKLESS_PERFORMANCE",X.gel_compression="LATENCY_ACTION_GEL_COMPRESSION",
X.gel_jspb_serialize="LATENCY_ACTION_GEL_JSPB_SERIALIZE",X);function ov(a,b){gp.call(this,1,arguments);this.timer=b}
w(ov,gp);var pv=new hp("aft-recorded",ov);var qv=C.ytLoggingLatencyUsageStats_||{};D("ytLoggingLatencyUsageStats_",qv);function rv(){this.h=0}
function sv(){rv.h||(rv.h=new rv);return rv.h}
rv.prototype.tick=function(a,b,c,d){tv(this,"tick_"+a+"_"+b)||ln("latencyActionTicked",{tickName:a,clientActionNonce:b},{timestamp:c,cttAuthInfo:d})};
rv.prototype.info=function(a,b,c){var d=Object.keys(a).join("");tv(this,"info_"+d+"_"+b)||(a=Object.assign({},a),a.clientActionNonce=b,ln("latencyActionInfo",a,{cttAuthInfo:c}))};
rv.prototype.jspbInfo=function(){};
rv.prototype.span=function(a,b,c){var d=Object.keys(a).join("");tv(this,"span_"+d+"_"+b)||(a.clientActionNonce=b,ln("latencyActionSpan",a,{cttAuthInfo:c}))};
function tv(a,b){qv[b]=qv[b]||{count:0};var c=qv[b];c.count++;c.time=W();a.h||(a.h=um(function(){var d=W(),e;for(e in qv)qv[e]&&6E4<d-qv[e].time&&delete qv[e];a&&(a.h=0)},5E3));
return 5<c.count?(6===c.count&&1>1E5*Math.random()&&(c=new V("CSI data exceeded logging limit with key",b.split("_")),0<=b.indexOf("plev")||Us(c)),!0):!1}
;var uv=window;function vv(){this.timing={};this.clearResourceTimings=function(){};
this.webkitClearResourceTimings=function(){};
this.mozClearResourceTimings=function(){};
this.msClearResourceTimings=function(){};
this.oClearResourceTimings=function(){}}
function wv(){var a;if(T("csi_use_performance_navigation_timing")||T("csi_use_performance_navigation_timing_tvhtml5")){var b,c,d,e=null==Y?void 0:null==(a=Y.getEntriesByType)?void 0:null==(b=a.call(Y,"navigation"))?void 0:null==(c=b[0])?void 0:null==(d=c.toJSON)?void 0:d.call(c);e?(e.requestStart=xv(e.requestStart),e.responseEnd=xv(e.responseEnd),e.redirectStart=xv(e.redirectStart),e.redirectEnd=xv(e.redirectEnd),e.domainLookupEnd=xv(e.domainLookupEnd),e.connectStart=xv(e.connectStart),e.connectEnd=
xv(e.connectEnd),e.responseStart=xv(e.responseStart),e.secureConnectionStart=xv(e.secureConnectionStart),e.domainLookupStart=xv(e.domainLookupStart),e.isPerformanceNavigationTiming=!0,a=e):a=Y.timing}else a=Y.timing;return a}
function xv(a){return Math.round(yv()+a)}
function yv(){return(T("csi_use_time_origin")||T("csi_use_time_origin_tvhtml5"))&&Y.timeOrigin?Math.floor(Y.timeOrigin):Y.timing.navigationStart}
var Y=uv.performance||uv.mozPerformance||uv.msPerformance||uv.webkitPerformance||new vv;var zv=!1,Av=!1,Bv={'script[name="scheduler/scheduler"]':"sj",'script[name="player/base"]':"pj",'link[rel="preload"][name="player/embed"]':"pej",'link[rel="stylesheet"][name="www-player"]':"pc",'link[rel="stylesheet"][name="player/www-player"]':"pc",'script[name="desktop_polymer/desktop_polymer"]':"dpj",'link[rel="import"][name="desktop_polymer"]':"dph",'script[name="mobile-c3"]':"mcj",'link[rel="stylesheet"][name="mobile-c3"]':"mcc",'script[name="player-plasma-ias-phone/base"]':"mcppj",'script[name="player-plasma-ias-tablet/base"]':"mcptj",
'link[rel="stylesheet"][name="mobile-polymer-player-ias"]':"mcpc",'link[rel="stylesheet"][name="mobile-polymer-player-svg-ias"]':"mcpsc",'script[name="mobile_blazer_core_mod"]':"mbcj",'link[rel="stylesheet"][name="mobile_blazer_css"]':"mbc",'script[name="mobile_blazer_logged_in_users_mod"]':"mbliuj",'script[name="mobile_blazer_logged_out_users_mod"]':"mblouj",'script[name="mobile_blazer_noncore_mod"]':"mbnj","#player_css":"mbpc",'script[name="mobile_blazer_desktopplayer_mod"]':"mbpj",'link[rel="stylesheet"][name="mobile_blazer_tablet_css"]':"mbtc",
'script[name="mobile_blazer_watch_mod"]':"mbwj"};Xa(Y.clearResourceTimings||Y.webkitClearResourceTimings||Y.mozClearResourceTimings||Y.msClearResourceTimings||Y.oClearResourceTimings||Nd,Y);function Cv(a,b){if(!T("web_csi_action_sampling_enabled")||!ev(b).actionDisabled){var c=mv(b||"");iu(c.info,a);a.loadType&&(c=a.loadType,gv(b).loadType=c);iu(jv(b),a);c=kv(b);b=ev(b).cttAuthInfo;sv().info(a,c,b)}}
function Dv(){var a,b,c,d;return(null!=(d=null==Er().resolve(new yr(Wo))?void 0:null==(a=Xo())?void 0:null==(b=a.loggingHotConfig)?void 0:null==(c=b.csiConfig)?void 0:c.debugTicks)?d:[]).map(function(e){return Object.values(e)[0]})}
function Z(a,b,c){if(!T("web_csi_action_sampling_enabled")||!ev(c).actionDisabled){var d=kv(c),e;if(e=T("web_csi_debug_sample_enabled")&&d){(null==Er().resolve(new yr(Wo))?0:Xo())&&!Av&&(Av=!0,Z("gcfl",W(),c));var f,g,h;e=(null==Er().resolve(new yr(Wo))?void 0:null==(f=Xo())?void 0:null==(g=f.loggingHotConfig)?void 0:null==(h=g.csiConfig)?void 0:h.debugSampleWeight)||0;if(f=0!==e)b:{f=Dv();if(0<f.length)for(g=0;g<f.length;g++)if(a===f[g]){f=!0;break b}f=!1}if(f){for(g=f=0;g<d.length;g++)f=31*f+d.charCodeAt(g),
g<d.length-1&&(f%=Math.pow(2,47));e=0!==f%1E5%e;ev(c).debugTicksExcludedLogged||(f={},f.debugTicksExcluded=e,Cv(f,c));ev(c).debugTicksExcludedLogged=!0}else e=!1}if(!e){b||"_"===a[0]||(e=a,Y.mark&&(e.startsWith("mark_")||(e="mark_"+e),c&&(e+=" ("+c+")"),Y.mark(e)));e=mv(c||"");e.tick[a]=b||W();if(e.callback&&e.callback[a])for(e=v(e.callback[a]),f=e.next();!f.done;f=e.next())f=f.value,f();e=iv(c);e.gelTicks&&(e.gelTicks[a]=!0);f=hv(c);e=b||W();T("log_repeated_ytcsi_ticks")?a in f||(f[a]=e):f[a]=e;
f=ev(c).cttAuthInfo;"_start"===a?(a=sv(),tv(a,"baseline_"+d)||ln("latencyActionBaselined",{clientActionNonce:d},{timestamp:b,cttAuthInfo:f})):sv().tick(a,d,b,f);Ev(c);return e}}}
function Fv(){var a=document;if("visibilityState"in a)a=a.visibilityState;else{var b=Vq+"VisibilityState";a=b in a?a[b]:void 0}switch(a){case "hidden":return 0;case "visible":return 1;case "prerender":return 2;case "unloaded":return 3;default:return-1}}
function Gv(){function a(f,g,h){g=g.match("_rid")?g.split("_rid")[0]:g;"number"===typeof h&&(h=JSON.stringify(h));f.requestIds?f.requestIds.push({endpoint:g,id:h}):f.requestIds=[{endpoint:g,id:h}]}
for(var b={},c=v(Object.entries(S("TIMING_INFO",{}))),d=c.next();!d.done;d=c.next()){var e=v(d.value);d=e.next().value;e=e.next().value;switch(d){case "GetBrowse_rid":a(b,d,e);break;case "GetGuide_rid":a(b,d,e);break;case "GetHome_rid":a(b,d,e);break;case "GetPlayer_rid":a(b,d,e);break;case "GetSearch_rid":a(b,d,e);break;case "GetSettings_rid":a(b,d,e);break;case "GetTrending_rid":a(b,d,e);break;case "GetWatchNext_rid":a(b,d,e);break;case "yt_red":b.isRedSubscriber=!!e;break;case "yt_ad":b.isMonetized=
!!e}}return b}
function Hv(a,b){a=document.querySelector(a);if(!a)return!1;var c="",d=a.nodeName;"SCRIPT"===d?(c=a.src,c||(c=a.getAttribute("data-timing-href"))&&(c=window.location.protocol+c)):"LINK"===d&&(c=a.href);oc(window)&&a.setAttribute("nonce",oc(window));return c?(a=Y.getEntriesByName(c))&&a[0]&&(a=a[0],c=yv(),Z("rsf_"+b,c+Math.round(a.fetchStart)),Z("rse_"+b,c+Math.round(a.responseEnd)),void 0!==a.transferSize&&0===a.transferSize)?!0:!1:!1}
function Iv(){var a=window.location.protocol,b=Y.getEntriesByType("resource");b=gb(b,function(c){return 0===c.name.indexOf(a+"//fonts.gstatic.com/s/")});
(b=ib(b,function(c,d){return d.duration>c.duration?d:c},{duration:0}))&&0<b.startTime&&0<b.responseEnd&&(Z("wffs",xv(b.startTime)),Z("wffe",xv(b.responseEnd)))}
function Jv(a){var b=Kv("aft",a);if(b)return b;b=S((a||"")+"TIMING_AFT_KEYS",["ol"]);for(var c=b.length,d=0;d<c;d++){var e=Kv(b[d],a);if(e)return e}return NaN}
function Kv(a,b){if(a=hv(b)[a])return"number"===typeof a?a:a[a.length-1]}
function Ev(a){var b=Kv("_start",a),c=Jv(a);b&&c&&!zv&&(mp(pv,new ov(Math.round(c-b),a)),zv=!0)}
function Lv(){if(Y.getEntriesByType){var a=Y.getEntriesByType("paint");if(a=jb(a,function(b){return"first-paint"===b.name}))return xv(a.startTime)}a=Y.timing;
return a.Ae?Math.max(0,a.Ae):0}
;function Mv(a,b){Yk(function(){mv("").info.actionType=a;b&&Uk("TIMING_AFT_KEYS",b);Uk("TIMING_ACTION",a);var c=Gv();0<Object.keys(c).length&&Cv(c);c={isNavigation:!0,actionType:nv[S("TIMING_ACTION")]||"LATENCY_ACTION_UNKNOWN"};var d=S("PREVIOUS_ACTION");d&&(c.previousAction=nv[d]||"LATENCY_ACTION_UNKNOWN");if(d=S("CLIENT_PROTOCOL"))c.httpProtocol=d;if(d=S("CLIENT_TRANSPORT"))c.transportProtocol=d;(d=lt())&&"UNDEFINED_CSN"!==d&&(c.clientScreenNonce=d);d=Fv();if(1===d||-1===d)c.isVisible=!0;gv();fv();
c.loadType="cold";d=fv();var e=wv(),f=yv(),g=S("CSI_START_TIMESTAMP_MILLIS",0);0<g&&!T("embeds_web_enable_csi_start_override_killswitch")&&(f=g);f&&(Z("srt",e.responseStart),1!==d.prerender&&Z("_start",f,void 0));d=Lv();0<d&&Z("fpt",d);d=wv();d.isPerformanceNavigationTiming&&Cv({performanceNavigationTiming:!0},void 0);Z("nreqs",d.requestStart,void 0);Z("nress",d.responseStart,void 0);Z("nrese",d.responseEnd,void 0);0<d.redirectEnd-d.redirectStart&&(Z("nrs",d.redirectStart,void 0),Z("nre",d.redirectEnd,
void 0));0<d.domainLookupEnd-d.domainLookupStart&&(Z("ndnss",d.domainLookupStart,void 0),Z("ndnse",d.domainLookupEnd,void 0));0<d.connectEnd-d.connectStart&&(Z("ntcps",d.connectStart,void 0),Z("ntcpe",d.connectEnd,void 0));d.secureConnectionStart>=yv()&&0<d.connectEnd-d.secureConnectionStart&&(Z("nstcps",d.secureConnectionStart,void 0),Z("ntcpe",d.connectEnd,void 0));Y&&"getEntriesByType"in Y&&Iv();d=[];if(document.querySelector&&Y&&Y.getEntriesByName)for(var h in Bv)Bv.hasOwnProperty(h)&&(e=Bv[h],
Hv(h,e)&&d.push(e));if(0<d.length)for(c.resourceInfo=[],h=v(d),d=h.next();!d.done;d=h.next())c.resourceInfo.push({resourceCache:d.value});Cv(c);c=iv();c.preLoggedGelInfos||(c.preLoggedGelInfos=[]);h=c.preLoggedGelInfos;c=jv();d=void 0;for(e=0;e<h.length;e++)if(f=h[e],f.loadType){d=f.loadType;break}if("cold"===gv().loadType&&("cold"===c.loadType||"cold"===d)){d=hv();e=iv();e=e.gelTicks?e.gelTicks:e.gelTicks={};for(var k in d)if(!(k in e))if("number"===typeof d[k])Z(k,Kv(k));else if(T("log_repeated_ytcsi_ticks"))for(f=
v(d[k]),g=f.next();!g.done;g=f.next())g=g.value,Z(k.slice(1),g);k={};d=!1;h=v(h);for(e=h.next();!e.done;e=h.next())d=e.value,iu(c,d),iu(k,d),d=!0;d&&Cv(k)}D("ytglobal.timingready_",!0);k=S("TIMING_ACTION");E("ytglobal.timingready_")&&k&&Nv()&&Jv()&&Ev()})()}
function Ov(a,b,c){Yk(Cv)(a,b,void 0===c?!1:c)}
function Pv(a,b,c){return Yk(Z)(a,b,c)}
function Nv(){return Yk(function(){return"_start"in hv()})()}
function Qv(){Yk(function(){var a=kv();requestAnimationFrame(function(){setTimeout(function(){a===kv()&&Pv("ol",void 0,void 0)},0)})})()}
var Rv=window;Rv.ytcsi&&(Rv.ytcsi.infoGel=Ov,Rv.ytcsi.tick=Pv);var Sv="tokens consistency mss client_location entities adblock_detection response_received_commands store PLAYER_PRELOAD".split(" "),Tv=["type.googleapis.com/youtube.api.pfiinnertube.YoutubeApiInnertube.BrowseResponse","type.googleapis.com/youtube.api.pfiinnertube.YoutubeApiInnertube.PlayerResponse"];function Uv(a,b,c,d){this.v=a;this.aa=b;this.l=c;this.j=d;this.i=void 0;this.h=new Map;a.Ob||(a.Ob={});a.Ob=Object.assign({},dv,a.Ob)}
function Vv(a,b,c,d){if(void 0!==Uv.h){if(d=Uv.h,a=[a!==d.v,b!==d.aa,c!==d.l,!1,!1,!1,void 0!==d.i],a.some(function(e){return e}))throw new V("InnerTubeTransportService is already initialized",a);
}else Uv.h=new Uv(a,b,c,d)}
function Wv(a){var b={signalServiceEndpoint:{signal:"GET_DATASYNC_IDS"}};var c=void 0===c?Yl:c;var d=Uu(b,a.v);if(!d)return ke(new V("Error: No request builder found for command.",b));var e=d.v(b,void 0,c);return e?(Iu(e.input),new fe(function(f){var g,h,k;return A(function(l){if(1==l.h){h="cors"===(null==(g=e.ib)?void 0:g.mode)?"cors":void 0;if(a.l.ef){var n=e.config,p;n=null==n?void 0:null==(p=n.Tb)?void 0:p.sessionIndex;p=Xl(0,{sessionIndex:n});k=Object.assign({},Vu(h),p);return l.B(2)}return l.yield(Xv(e.config,
h),3)}2!=l.h&&(k=l.i);f(Yv(a,e,k));l.h=0})})):ke(new V("Error: Failed to build request for command.",b))}
function Zv(a,b,c){var d;if(b&&!(null==b?0:null==(d=b.sequenceMetaData)?0:d.skipProcessing)&&a.j){d=v(Sv);for(var e=d.next();!e.done;e=d.next())e=e.value,a.j[e]&&a.j[e].handleResponse(b,c)}}
function Yv(a,b,c){var d=void 0===d?function(){}:d;
var e,f,g,h,k,l,n,p,r,t,x,z,y,J,G,R,N,da,Ca,O,ea,ka,pa,Ga,Rg,Sg,pr,qr,rr;return A(function(ha){switch(ha.h){case 1:ha.B(2);break;case 3:if((e=ha.i)&&!e.isExpired())return ha.return(Promise.resolve(e.h()));case 2:if(!(null==(f=b)?0:null==(g=f.Ma)?0:g.context)){ha.B(4);break}h=b.Ma.context;ha.B(5);break;case 5:k=v([]),l=k.next();case 7:if(l.done){ha.B(4);break}n=l.value;return ha.yield(n.ig(h),8);case 8:l=k.next();ha.B(7);break;case 4:if(null==(p=a.i)||!p.mg(b.input,b.Ma)){ha.B(11);break}return ha.yield(a.i.eg(b.input,
b.Ma),12);case 12:return r=ha.i,T("kevlar_process_local_innertube_responses_killswitch")||Zv(a,r,b),ha.return(r);case 11:return(z=null==(x=b.config)?void 0:x.kg)&&a.h.has(z)?t=a.h.get(z):(y=JSON.stringify(b.Ma),R=null!=(G=null==(J=b.ib)?void 0:J.headers)?G:{},b.ib=Object.assign({},b.ib,{headers:Object.assign({},R,c)}),N=Object.assign({},b.ib),"POST"===b.ib.method&&(N=Object.assign({},N,{body:y})),(null==(da=b.config)?0:da.Le)&&Pv(b.config.Le),Ca=function(){return a.aa.fetch(b.input,N,b.config)},t=
Ca(),z&&a.h.set(z,t)),ha.yield(t,13);
case 13:if((O=ha.i)&&"error"in O&&(null==(ea=O)?0:null==(ka=ea.error)?0:ka.details))for(pa=O.error.details,Ga=v(pa),Rg=Ga.next();!Rg.done;Rg=Ga.next())Sg=Rg.value,(pr=Sg["@type"])&&-1<Tv.indexOf(pr)&&(delete Sg["@type"],O=Sg);z&&a.h.has(z)&&a.h.delete(z);(null==(qr=b.config)?0:qr.Me)&&Pv(b.config.Me);if(O||null==(rr=a.i)||!rr.Wf(b.input,b.Ma)){ha.B(14);break}return ha.yield(a.i.dg(b.input,b.Ma),15);case 15:O=ha.i;case 14:return Zv(a,O,b),d(),ha.return(O||void 0)}})}
function Xv(a,b){var c,d,e,f;return A(function(g){if(1==g.h){e=null==(c=a)?void 0:null==(d=c.Tb)?void 0:d.sessionIndex;var h=g.yield;var k=Xl(0,{sessionIndex:e});if(!(k instanceof fe)){var l=new fe(Nd);ge(l,2,k);k=l}return h.call(g,k,2)}f=g.i;return g.return(Promise.resolve(Object.assign({},Vu(b),f)))})}
;var $v=new xr("INNERTUBE_TRANSPORT_TOKEN");function aw(){}
w(aw,av);aw.prototype.j=function(){return Rt};
aw.prototype.i=function(a){return as(a,Lk)||void 0};
aw.prototype.h=function(a,b,c){c=void 0===c?{}:c;b.channelIds&&(a.channelIds=b.channelIds);b.siloName&&(a.siloName=b.siloName);b.params&&(a.params=b.params);c.botguardResponse&&(a.botguardResponse=c.botguardResponse);c.feature&&(a.clientFeature=c.feature)};
fa.Object.defineProperties(aw.prototype,{l:{configurable:!0,enumerable:!0,get:function(){return!0}}});function bw(){}
w(bw,av);bw.prototype.j=function(){return St};
bw.prototype.i=function(a){return as(a,Kk)||void 0};
bw.prototype.h=function(a,b){b.channelIds&&(a.channelIds=b.channelIds);b.siloName&&(a.siloName=b.siloName);b.params&&(a.params=b.params)};
fa.Object.defineProperties(bw.prototype,{l:{configurable:!0,enumerable:!0,get:function(){return!0}}});function cw(){}
w(cw,av);cw.prototype.j=function(){return Ot};
cw.prototype.i=function(a){return as(a,Fk)||void 0};
cw.prototype.h=function(a,b,c){a.feedbackTokens=[];b.feedbackToken&&a.feedbackTokens.push(b.feedbackToken);if(b=b.cpn||c.cpn)a.feedbackContext={cpn:b};a.isFeedbackTokenUnencrypted=!!c.is_feedback_token_unencrypted;a.shouldMerge=!1;c.extra_feedback_tokens&&(a.shouldMerge=!0,a.feedbackTokens=a.feedbackTokens.concat(c.extra_feedback_tokens))};
fa.Object.defineProperties(cw.prototype,{l:{configurable:!0,enumerable:!0,get:function(){return!0}}});function dw(){}
w(dw,av);dw.prototype.j=function(){return Pt};
dw.prototype.i=function(a){return as(a,Jk)||void 0};
dw.prototype.h=function(a,b){b.params&&(a.params=b.params);b.secondaryParams&&(a.secondaryParams=b.secondaryParams)};function ew(){}
w(ew,av);ew.prototype.j=function(){return Qt};
ew.prototype.i=function(a){return as(a,Ik)||void 0};
ew.prototype.h=function(a,b){b.actions&&(a.actions=b.actions);b.params&&(a.params=b.params);b.playlistId&&(a.playlistId=b.playlistId)};function fw(){}
w(fw,av);fw.prototype.j=function(){return Nt};
fw.prototype.i=function(a){return as(a,Hk)};
fw.prototype.h=function(a,b,c){c=void 0===c?{}:c;b.serializedShareEntity&&(a.serializedSharedEntity=b.serializedShareEntity);c.includeListId&&(a.includeListId=!0)};function gw(a,b){var c=B.apply(2,arguments);a=void 0===a?0:a;V.call(this,b,c);this.errorType=a;Object.setPrototypeOf(this,this.constructor.prototype)}
w(gw,V);var hw=new xr("NETWORK_SLI_TOKEN");function iw(a){this.h=a}
iw.prototype.fetch=function(a,b,c){var d=this,e;return A(function(f){e=jw(d,a,b);return f.return(fetch(e).then(function(g){return d.handleResponse(g,c)}).catch(function(g){Us(g);
if((null==c?0:c.ae)&&g instanceof gw&&1===g.errorType)return Promise.reject(g)}))})};
function jw(a,b,c){if(a.h){var d=zc(Ac(5,Kc(b,"key")))||"/UNKNOWN_PATH";a.h.start(d)}a=c;T("wug_networking_gzip_request")&&(a=Op(c));return new window.Request(b,a)}
iw.prototype.handleResponse=function(a,b){var c=a.text().then(function(d){if((null==b?0:b.te)&&a.ok)return Ag(b.te,d);d=d.replace(")]}'","");if((null==b?0:b.ae)&&d)try{var e=JSON.parse(d)}catch(g){throw new gw(1,"JSON parsing failed after fetch");}var f;return null!=(f=e)?f:JSON.parse(d)});
a.redirected||a.ok?this.h&&this.h.success():(this.h&&this.h.Zf(),c=c.then(function(d){Us(new V("Error: API fetch failed",a.status,a.url,d));return Object.assign({},d,{errorMetadata:{status:a.status}})}));
return c};
iw[wr]=[new yr(hw)];var kw=new xr("NETWORK_MANAGER_TOKEN");var lw;function mw(){var a,b,c;return A(function(d){if(1==d.h)return a=Er().resolve($v),a?d.yield(Wv(a),2):(Us(Error("InnertubeTransportService unavailable in fetchDatasyncIds")),d.return(void 0));if(b=d.i){if(b.errorMetadata)return Us(Error("Datasync IDs fetch responded with "+b.errorMetadata.status+": "+b.error)),d.return(void 0);c=b.Xf;return d.return(c)}Us(Error("Network request to get Datasync IDs failed."));return d.return(void 0)})}
;var nw=C.caches,ow;function pw(a){var b=a.indexOf(":");return-1===b?{sd:a}:{sd:a.substring(0,b),datasyncId:a.substring(b+1)}}
function qw(){return A(function(a){if(void 0!==ow)return a.return(ow);ow=new Promise(function(b){var c;return A(function(d){switch(d.h){case 1:return Aa(d,2),d.yield(nw.open("test-only"),4);case 4:return d.yield(nw.delete("test-only"),5);case 5:d.h=3;d.l=0;break;case 2:if(c=Ba(d),c instanceof Error&&"SecurityError"===c.name)return b(!1),d.return();case 3:b("caches"in window),d.h=0}})});
return a.return(ow)})}
function rw(a){var b,c,d,e,f,g,h;A(function(k){if(1==k.h)return k.yield(qw(),2);if(3!=k.h){if(!k.i)return k.return(!1);b=[];return k.yield(nw.keys(),3)}c=k.i;d=v(c);for(e=d.next();!e.done;e=d.next())f=e.value,g=pw(f),h=g.datasyncId,!h||a.includes(h)||b.push(nw.delete(f));return k.return(Promise.all(b).then(function(l){return l.some(function(n){return n})}))})}
function sw(){var a,b,c,d,e,f,g;return A(function(h){if(1==h.h)return h.yield(qw(),2);if(3!=h.h){if(!h.i)return h.return(!1);a=sm("cache contains other");return h.yield(nw.keys(),3)}b=h.i;c=v(b);for(d=c.next();!d.done;d=c.next())if(e=d.value,f=pw(e),(g=f.datasyncId)&&g!==a)return h.return(!0);return h.return(!1)})}
;function tw(){mw().then(function(a){a&&(Bo(a),rw(a),Fu(a))})}
function uw(){var a=new Gq;vi.oa(function(){var b,c,d,e;return A(function(f){switch(f.h){case 1:if(T("ytidb_clear_optimizations_killswitch")){f.B(2);break}b=sm("clear");if(b.startsWith("V")&&b.endsWith("||")){var g=[b];Bo(g);rw(g);Fu(g);return f.return()}c=Gu();return f.yield(sw(),3);case 3:return d=f.i,f.yield(Co(),4);case 4:if(e=f.i,!c&&!d&&!e)return f.return();case 2:a.wa()?tw():a.h.add("publicytnetworkstatus-online",tw,!0,void 0,void 0),f.h=0}})})}
;function vw(){this.state=1;this.h=null}
m=vw.prototype;m.initialize=function(a,b,c){if(a.program){var d,e=null!=(d=a.interpreterUrl)?d:null;if(a.interpreterSafeScript){var f=a.interpreterSafeScript;f?((f=f.privateDoNotAccessOrElseSafeScriptWrappedValue)?(f=(d=yb())?d.createScript(f):f,d=new pc,d.ud=f,f=d):f=null,d=f):d=null}else d=null!=(f=a.interpreterScript)?f:null;a.interpreterSafeUrl&&(e=vk(a.interpreterSafeUrl).toString());ww(this,d,e,a.program,b,c)}else Us(Error("Cannot initialize botguard without program"))};
function ww(a,b,c,d,e,f){var g=void 0===g?"trayride":g;c?(a.state=2,Xt(c,function(){window[g]?xw(a,d,g,e):(a.state=3,bu(c),Us(new V("Unable to load Botguard","from "+c)))},f)):b?(f=Sd("SCRIPT"),b instanceof pc?rc(f,b):f.textContent=b,f.nonce=oc(window),document.head.appendChild(f),document.head.removeChild(f),window[g]?xw(a,d,g,e):(a.state=4,Us(new V("Unable to load Botguard from JS")))):Us(new V("Unable to load VM; no url or JS provided"))}
m.isLoading=function(){return 2===this.state};
function xw(a,b,c,d){a.state=5;try{var e=new hi({program:b,je:c,Ie:T("att_web_record_metrics"),ze:"aGIf"});e.af.then(function(){a.state=6;d&&d(b)});
a.Qc(e)}catch(f){a.state=7,f instanceof Error&&Us(f)}}
m.invoke=function(a){a=void 0===a?{}:a;return this.Tc()?this.Jd({dd:a}):null};
m.dispose=function(){this.Qc(null);this.state=8};
m.Tc=function(){return!!this.h};
m.Jd=function(a){return this.h.Dd(a)};
m.Qc=function(a){Pc(this.h);this.h=a};var yw=[],zw=!1;function Aw(){if(!T("disable_biscotti_fetch_for_ad_blocker_detection")&&!T("disable_biscotti_fetch_entirely_for_all_web_clients")&&wt()){var a=S("PLAYER_VARS",{});if("1"!=rb(a)&&!xt(a)){var b=function(){zw=!0;"google_ad_status"in window?Uk("DCLKSTAT",1):Uk("DCLKSTAT",2)};
try{Xt("//static.doubleclick.net/instream/ad_status.js",b)}catch(c){}yw.push(vi.oa(function(){if(!(zw||"google_ad_status"in window)){try{cu("//static.doubleclick.net/instream/ad_status.js",b)}catch(c){}zw=!0;Uk("DCLKSTAT",3)}},5E3))}}}
function Bw(){var a=Number(S("DCLKSTAT",0));return isNaN(a)?0:a}
;function Cw(){var a=E("yt.abuse.playerAttLoader");return a&&["bgvma","bgvmb","bgvmc"].every(function(b){return b in a})?a:null}
;function Dw(){vw.apply(this,arguments)}
w(Dw,vw);Dw.prototype.Qc=function(a){var b;null==(b=Cw())||b.bgvma();a?(b={bgvma:a.dispose.bind(a),bgvmb:a.snapshot.bind(a),bgvmc:a.Dd.bind(a)},D("yt.abuse.playerAttLoader",b),D("yt.abuse.playerAttLoaderRun",function(c){return a.snapshot(c)})):(D("yt.abuse.playerAttLoader",null),D("yt.abuse.playerAttLoaderRun",null))};
Dw.prototype.Tc=function(){return!!Cw()};
Dw.prototype.Jd=function(a){return Cw().bgvmc(a)};function Ew(a){Nr.call(this,void 0===a?"document_active":a);var b=this;this.l=10;this.h=new Map;this.transitions=[{from:"document_active",to:"document_disposed_preventable",action:this.D},{from:"document_active",to:"document_disposed",action:this.v},{from:"document_disposed_preventable",to:"document_disposed",action:this.v},{from:"document_disposed_preventable",to:"flush_logs",action:this.m},{from:"document_disposed_preventable",to:"document_active",action:this.i},{from:"document_disposed",to:"flush_logs",
action:this.m},{from:"document_disposed",to:"document_active",action:this.i},{from:"document_disposed",to:"document_disposed",action:function(){}},
{from:"flush_logs",to:"document_active",action:this.i}];window.addEventListener("pagehide",function(c){b.transition("document_disposed",{event:c})});
window.addEventListener("beforeunload",function(c){b.transition("document_disposed_preventable",{event:c})})}
w(Ew,Nr);Ew.prototype.D=function(a,b){if(!this.h.get("document_disposed_preventable")){a(null==b?void 0:b.event);var c,d;if((null==b?0:null==(c=b.event)?0:c.defaultPrevented)||(null==b?0:null==(d=b.event)?0:d.returnValue)){b.event.returnValue||(b.event.returnValue=!0);b.event.defaultPrevented||b.event.preventDefault();this.h=new Map;this.transition("document_active");return}}this.h.set("document_disposed_preventable",!0);this.h.get("document_disposed")?this.transition("flush_logs"):this.transition("document_disposed")};
Ew.prototype.v=function(a,b){this.h.get("document_disposed")?this.transition("document_active"):(a(null==b?void 0:b.event),this.h.set("document_disposed",!0),this.transition("flush_logs"))};
Ew.prototype.m=function(a,b){a(null==b?void 0:b.event);this.transition("document_active")};
Ew.prototype.i=function(){this.h=new Map};function Fw(a){Nr.call(this,void 0===a?"document_visibility_unknown":a);var b=this;this.transitions=[{from:"document_visibility_unknown",to:"document_visible",action:this.i},{from:"document_visibility_unknown",to:"document_hidden",action:this.h},{from:"document_visibility_unknown",to:"document_foregrounded",action:this.m},{from:"document_visibility_unknown",to:"document_backgrounded",action:this.v},{from:"document_visible",to:"document_hidden",action:this.h},{from:"document_visible",to:"document_foregrounded",
action:this.m},{from:"document_visible",to:"document_visible",action:this.i},{from:"document_foregrounded",to:"document_visible",action:this.i},{from:"document_foregrounded",to:"document_hidden",action:this.h},{from:"document_foregrounded",to:"document_foregrounded",action:this.m},{from:"document_hidden",to:"document_visible",action:this.i},{from:"document_hidden",to:"document_backgrounded",action:this.v},{from:"document_hidden",to:"document_hidden",action:this.h},{from:"document_backgrounded",to:"document_hidden",
action:this.h},{from:"document_backgrounded",to:"document_backgrounded",action:this.v},{from:"document_backgrounded",to:"document_visible",action:this.i}];document.addEventListener("visibilitychange",function(c){"visible"===document.visibilityState?b.transition("document_visible",{event:c}):b.transition("document_hidden",{event:c})});
T("visibility_lifecycles_dynamic_backgrounding")&&(window.addEventListener("blur",function(c){b.transition("document_backgrounded",{event:c})}),window.addEventListener("focus",function(c){b.transition("document_foregrounded",{event:c})}))}
w(Fw,Nr);Fw.prototype.i=function(a,b){a(null==b?void 0:b.event);T("visibility_lifecycles_dynamic_backgrounding")&&this.transition("document_foregrounded")};
Fw.prototype.h=function(a,b){a(null==b?void 0:b.event);T("visibility_lifecycles_dynamic_backgrounding")&&this.transition("document_backgrounded")};
Fw.prototype.v=function(a,b){a(null==b?void 0:b.event)};
Fw.prototype.m=function(a,b){a(null==b?void 0:b.event)};function Gw(){this.l=new Ew;this.v=new Fw}
Gw.prototype.install=function(){var a=B.apply(0,arguments),b=this;a.forEach(function(c){b.l.install(c)});
a.forEach(function(c){b.v.install(c)})};function Hw(){this.l=[];this.i=new Map;this.h=new Map;this.j=new Set}
Hw.prototype.clickCommand=function(a,b,c){var d=a.clickTrackingParams;c=void 0===c?0:c;if(d)if(c=lt(void 0===c?0:c)){a=this.client;d=new dt({trackingParams:d});var e=void 0;if(T("no_client_ve_attach_unless_shown")){var f=Au(d,c);wu.set(f,!0);Bu(d,c)}e=e||"INTERACTION_LOGGING_GESTURE_TYPE_GENERIC_CLICK";f=zu({cttAuthInfo:nt(c)||void 0},c);d={csn:c,ve:d.getAsJson(),gestureType:e};b&&(d.clientData=b);"UNDEFINED_CSN"===c?Cu("visualElementGestured",f,d):a?Ms("visualElementGestured",d,a,f):ln("visualElementGestured",
d,f);b=!0}else b=!1;else b=!1;return b};
Hw.prototype.stateChanged=function(a,b,c){this.visualElementStateChanged(new dt({trackingParams:a}),b,void 0===c?0:c)};
Hw.prototype.visualElementStateChanged=function(a,b,c){c=void 0===c?0:c;if(0===c&&this.j.has(c))this.l.push([a,b]);else{var d=c;d=void 0===d?0:d;c=lt(d);a||(a=(a=ht(void 0===d?0:d))?new dt({veType:a,youtubeData:void 0,jspbYoutubeData:void 0}):null);var e=a;c&&e&&(a=this.client,d=zu({cttAuthInfo:nt(c)||void 0},c),b={csn:c,ve:e.getAsJson(),clientData:b},"UNDEFINED_CSN"===c?Cu("visualElementStateChanged",d,b):a?Ms("visualElementStateChanged",b,a,d):ln("visualElementStateChanged",b,d))}};
function Iw(a,b){if(void 0===b)for(var c=kt(),d=0;d<c.length;d++)void 0!==c[d]&&Iw(a,c[d]);else a.i.forEach(function(e,f){(f=a.h.get(f))&&yu(a.client,b,f,e)}),a.i.clear(),a.h.clear()}
;function Jw(){Gw.call(this);var a={};this.install((a.document_disposed={callback:this.h},a));T("combine_ve_grafts")&&(a={},this.install((a.document_disposed={callback:this.i},a)));a={};this.install((a.flush_logs={callback:this.j},a))}
w(Jw,Gw);Jw.prototype.j=function(){ln("finalPayload",{csn:lt()})};
Jw.prototype.h=function(){Ys(Zs)};
Jw.prototype.i=function(){var a=Iw;Hw.h||(Hw.h=new Hw);a(Hw.h)};function Kw(){}
function Lw(){var a=E("ytglobal.storage_");a||(a=new Kw,D("ytglobal.storage_",a));return a}
Kw.prototype.estimate=function(){var a,b,c;return A(function(d){a=navigator;return(null==(b=a.storage)?0:b.estimate)?d.return(a.storage.estimate()):(null==(c=a.webkitTemporaryStorage)?0:c.queryUsageAndQuota)?d.return(Mw()):d.return()})};
function Mw(){var a=navigator;return new Promise(function(b,c){var d;null!=(d=a.webkitTemporaryStorage)&&d.queryUsageAndQuota?a.webkitTemporaryStorage.queryUsageAndQuota(function(e,f){b({usage:e,quota:f})},function(e){c(e)}):c(Error("webkitTemporaryStorage is not supported."))})}
D("ytglobal.storageClass_",Kw);function jn(a,b){var c=this;this.handleError=a;this.h=b;this.i=!1;void 0===self.document||self.addEventListener("beforeunload",function(){c.i=!0});
this.j=Math.random()<=U("ytidb_transaction_ended_event_rate_limit_session",.2)}
jn.prototype.Jb=function(a){this.handleError(a)};
jn.prototype.logEvent=function(a,b){switch(a){case "IDB_DATA_CORRUPTED":T("idb_data_corrupted_killswitch")||this.h("idbDataCorrupted",b);break;case "IDB_UNEXPECTEDLY_CLOSED":this.h("idbUnexpectedlyClosed",b);break;case "IS_SUPPORTED_COMPLETED":T("idb_is_supported_completed_killswitch")||this.h("idbIsSupportedCompleted",b);break;case "QUOTA_EXCEEDED":Nw(this,b);break;case "TRANSACTION_ENDED":this.j&&Math.random()<=U("ytidb_transaction_ended_event_rate_limit_transaction",.1)&&this.h("idbTransactionEnded",
b);break;case "TRANSACTION_UNEXPECTEDLY_ABORTED":a=Object.assign({},b,{hasWindowUnloaded:this.i}),this.h("idbTransactionAborted",a)}};
function Nw(a,b){Lw().estimate().then(function(c){c=Object.assign({},b,{isSw:void 0===self.document,isIframe:self!==self.top,deviceStorageUsageMbytes:Ow(null==c?void 0:c.usage),deviceStorageQuotaMbytes:Ow(null==c?void 0:c.quota)});a.h("idbQuotaExceeded",c)})}
function Ow(a){return"undefined"===typeof a?"-1":String(Math.ceil(a/1048576))}
;function Pw(){this.i=[];this.isReady=!1;this.j={};var a=this.h=new Lt(!!S("WIDGET_ID_ENFORCE")),b=this.He.bind(this);a.l=b;a.m=null;this.h.channel="widget";if(a=S("WIDGET_ID"))this.h.sessionId=a}
m=Pw.prototype;m.He=function(a,b,c){"addEventListener"===a&&b?this.Dc(b[0],c):this.Wc(a,b,c)};
m.Wc=function(){};
m.wc=function(a){var b=this;return function(c){return b.sendMessage(a,c)}};
m.Dc=function(a,b){this.j[a]||"onReady"===a||(this.addEventListener(a,this.wc(a,b)),this.j[a]=!0)};
m.addEventListener=function(){};
m.de=function(){this.isReady=!0;this.sendMessage("initialDelivery",this.zc());this.sendMessage("onReady");fb(this.i,this.Ad,this);this.i=[]};
m.zc=function(){return null};
function Qw(a,b){a.sendMessage("infoDelivery",b)}
m.Ad=function(a){this.isReady?this.h.sendMessage(a):this.i.push(a)};
m.sendMessage=function(a,b){this.Ad({event:a,info:void 0===b?null:b})};
m.dispose=function(){this.h=null};var Rw={},Sw=(Rw["api.invalidparam"]=2,Rw.auth=150,Rw["drm.auth"]=150,Rw["heartbeat.net"]=150,Rw["heartbeat.servererror"]=150,Rw["heartbeat.stop"]=150,Rw["html5.unsupportedads"]=5,Rw["fmt.noneavailable"]=5,Rw["fmt.decode"]=5,Rw["fmt.unplayable"]=5,Rw["html5.missingapi"]=5,Rw["html5.unsupportedlive"]=5,Rw["drm.unavailable"]=5,Rw["mrm.blocked"]=151,Rw);var Tw=new Set("endSeconds startSeconds mediaContentUrl suggestedQuality videoId rct rctn".split(" "));function Uw(a){return(0===a.search("cue")||0===a.search("load"))&&"loadModule"!==a}
function Vw(a,b,c){if("string"===typeof a)return{videoId:a,startSeconds:b,suggestedQuality:c};b={};c=v(Tw);for(var d=c.next();!d.done;d=c.next())d=d.value,a[d]&&(b[d]=a[d]);return b}
function Ww(a,b,c,d){if(Ra(a)&&!Array.isArray(a)){b="playlist list listType index startSeconds suggestedQuality".split(" ");c={};for(d=0;d<b.length;d++){var e=b[d];a[e]&&(c[e]=a[e])}return c}b={index:b,startSeconds:c,suggestedQuality:d};"string"===typeof a&&16===a.length?b.list="PL"+a:b.playlist=a;return b}
;function Xw(a){Pw.call(this);this.listeners=[];this.l=!1;this.api=a;this.addEventListener("onReady",this.onReady.bind(this));this.addEventListener("onVideoProgress",this.Ve.bind(this));this.addEventListener("onVolumeChange",this.We.bind(this));this.addEventListener("onApiChange",this.Qe.bind(this));this.addEventListener("onPlaybackQualityChange",this.Se.bind(this));this.addEventListener("onPlaybackRateChange",this.Te.bind(this));this.addEventListener("onStateChange",this.Ue.bind(this));this.addEventListener("onWebglSettingsChanged",
this.Xe.bind(this))}
w(Xw,Pw);m=Xw.prototype;
m.Wc=function(a,b,c){if(this.api.isExternalMethodAvailable(a,c)){b=b||[];if(0<b.length&&Uw(a)){var d=b;if(Ra(d[0])&&!Array.isArray(d[0]))var e=d[0];else switch(e={},a){case "loadVideoById":case "cueVideoById":e=Vw(d[0],void 0!==d[1]?Number(d[1]):void 0,d[2]);break;case "loadVideoByUrl":case "cueVideoByUrl":e=d[0];"string"===typeof e&&(e={mediaContentUrl:e,startSeconds:void 0!==d[1]?Number(d[1]):void 0,suggestedQuality:d[2]});b:{if((d=e.mediaContentUrl)&&(d=/\/([ve]|embed)\/([^#?]+)/.exec(d))&&d[2]){d=
d[2];break b}d=null}e.videoId=d;e=Vw(e);break;case "loadPlaylist":case "cuePlaylist":e=Ww(d[0],d[1],d[2],d[3])}b.length=1;b[0]=e}this.api.handleExternalCall(a,b,c);Uw(a)&&Qw(this,this.zc())}};
m.Dc=function(a,b){"onReady"===a?this.api.logApiCall(a+" invocation",b):"onError"===a&&this.l&&(this.api.logApiCall(a+" invocation",b,this.errorCode),this.errorCode=void 0);this.api.logApiCall(a+" registration",b);Pw.prototype.Dc.call(this,a,b)};
m.wc=function(a,b){var c=this,d=Pw.prototype.wc.call(this,a,b);return function(e){"onError"===a?c.api.logApiCall(a+" invocation",b,e):c.api.logApiCall(a+" invocation",b);d(e)}};
m.onReady=function(){var a=this.h,b=this.de.bind(this);a.h=b;a=this.api.getVideoData();if(!a.isPlayable){this.l=!0;a=a.errorCode;var c=void 0===c?5:c;this.errorCode=a?Sw[a]||c:c;this.sendMessage("onError",this.errorCode.toString())}};
m.addEventListener=function(a,b){this.listeners.push({eventType:a,listener:b});this.api.addEventListener(a,b)};
m.zc=function(){if(!this.api)return null;var a=this.api.getApiInterface();kb(a,"getVideoData");for(var b={apiInterface:a},c=0,d=a.length;c<d;c++){var e=a[c];if(0===e.search("get")||0===e.search("is")){var f=0;0===e.search("get")?f=3:0===e.search("is")&&(f=2);f=e.charAt(f).toLowerCase()+e.substr(f+1);try{var g=this.api[e]();b[f]=g}catch(h){}}}b.videoData=this.api.getVideoData();b.currentTimeLastUpdated_=Date.now()/1E3;return b};
m.Ue=function(a){a={playerState:a,currentTime:this.api.getCurrentTime(),duration:this.api.getDuration(),videoData:this.api.getVideoData(),videoStartBytes:0,videoBytesTotal:this.api.getVideoBytesTotal(),videoLoadedFraction:this.api.getVideoLoadedFraction(),playbackQuality:this.api.getPlaybackQuality(),availableQualityLevels:this.api.getAvailableQualityLevels(),currentTimeLastUpdated_:Date.now()/1E3,playbackRate:this.api.getPlaybackRate(),mediaReferenceTime:this.api.getMediaReferenceTime()};this.api.getVideoUrl&&
(a.videoUrl=this.api.getVideoUrl());this.api.getVideoContentRect&&(a.videoContentRect=this.api.getVideoContentRect());this.api.getProgressState&&(a.progressState=this.api.getProgressState());this.api.getPlaylist&&(a.playlist=this.api.getPlaylist());this.api.getPlaylistIndex&&(a.playlistIndex=this.api.getPlaylistIndex());this.api.getStoryboardFormat&&(a.storyboardFormat=this.api.getStoryboardFormat());Qw(this,a)};
m.Se=function(a){Qw(this,{playbackQuality:a})};
m.Te=function(a){Qw(this,{playbackRate:a})};
m.Qe=function(){for(var a=this.api.getOptions(),b={namespaces:a},c=0,d=a.length;c<d;c++){var e=a[c],f=this.api.getOptions(e);a.join(", ");b[e]={options:f};for(var g=0,h=f.length;g<h;g++){var k=f[g],l=this.api.getOption(e,k);b[e][k]=l}}this.sendMessage("apiInfoDelivery",b)};
m.We=function(){Qw(this,{muted:this.api.isMuted(),volume:this.api.getVolume()})};
m.Ve=function(a){a={currentTime:a,videoBytesLoaded:this.api.getVideoBytesLoaded(),videoLoadedFraction:this.api.getVideoLoadedFraction(),currentTimeLastUpdated_:Date.now()/1E3,playbackRate:this.api.getPlaybackRate(),mediaReferenceTime:this.api.getMediaReferenceTime()};this.api.getProgressState&&(a.progressState=this.api.getProgressState());Qw(this,a)};
m.Xe=function(){var a={sphericalProperties:this.api.getSphericalProperties()};Qw(this,a)};
m.dispose=function(){Pw.prototype.dispose.call(this);for(var a=0;a<this.listeners.length;a++){var b=this.listeners[a];this.api.removeEventListener(b.eventType,b.listener)}this.listeners=[]};function Yw(a){H.call(this);this.h={};this.started=!1;this.connection=a;this.connection.subscribe("command",this.wd,this)}
w(Yw,H);m=Yw.prototype;m.start=function(){this.started||this.Z()||(this.started=!0,this.connection.jb("RECEIVING"))};
m.jb=function(a,b){this.started&&!this.Z()&&this.connection.jb(a,b)};
m.wd=function(a,b,c){if(this.started&&!this.Z()){var d=b||{};switch(a){case "addEventListener":"string"===typeof d.event&&this.addListener(d.event);break;case "removeEventListener":"string"===typeof d.event&&this.removeListener(d.event);break;default:this.api.isReady()&&this.api.isExternalMethodAvailable(a,c||null)&&(b=Zw(a,b||{}),c=this.api.handleExternalCall(a,b,c||null),(c=$w(a,c))&&this.jb(a,c))}}};
m.addListener=function(a){if(!(a in this.h)){var b=this.Re.bind(this,a);this.h[a]=b;this.addEventListener(a,b)}};
m.Re=function(a,b){this.started&&!this.Z()&&this.connection.jb(a,this.yc(a,b))};
m.yc=function(a,b){if(null!=b)return{value:b}};
m.removeListener=function(a){a in this.h&&(this.removeEventListener(a,this.h[a]),delete this.h[a])};
m.R=function(){this.connection.unsubscribe("command",this.wd,this);this.connection=null;for(var a in this.h)this.h.hasOwnProperty(a)&&this.removeListener(a);H.prototype.R.call(this)};function ax(a,b){Yw.call(this,b);this.api=a;this.start()}
w(ax,Yw);ax.prototype.addEventListener=function(a,b){this.api.addEventListener(a,b)};
ax.prototype.removeEventListener=function(a,b){this.api.removeEventListener(a,b)};
function Zw(a,b){switch(a){case "loadVideoById":return a=Vw(b),[a];case "cueVideoById":return a=Vw(b),[a];case "loadVideoByPlayerVars":return[b];case "cueVideoByPlayerVars":return[b];case "loadPlaylist":return a=Ww(b),[a];case "cuePlaylist":return a=Ww(b),[a];case "seekTo":return[b.seconds,b.allowSeekAhead];case "playVideoAt":return[b.index];case "setVolume":return[b.volume];case "setPlaybackQuality":return[b.suggestedQuality];case "setPlaybackRate":return[b.suggestedRate];case "setLoop":return[b.loopPlaylists];
case "setShuffle":return[b.shufflePlaylist];case "getOptions":return[b.module];case "getOption":return[b.module,b.option];case "setOption":return[b.module,b.option,b.value];case "handleGlobalKeyDown":return[b.keyCode,b.shiftKey,b.ctrlKey,b.altKey,b.metaKey,b.key,b.code]}return[]}
function $w(a,b){switch(a){case "isMuted":return{muted:b};case "getVolume":return{volume:b};case "getPlaybackRate":return{playbackRate:b};case "getAvailablePlaybackRates":return{availablePlaybackRates:b};case "getVideoLoadedFraction":return{videoLoadedFraction:b};case "getPlayerState":return{playerState:b};case "getCurrentTime":return{currentTime:b};case "getPlaybackQuality":return{playbackQuality:b};case "getAvailableQualityLevels":return{availableQualityLevels:b};case "getDuration":return{duration:b};
case "getVideoUrl":return{videoUrl:b};case "getVideoEmbedCode":return{videoEmbedCode:b};case "getPlaylist":return{playlist:b};case "getPlaylistIndex":return{playlistIndex:b};case "getOptions":return{options:b};case "getOption":return{option:b}}}
ax.prototype.yc=function(a,b){switch(a){case "onReady":return;case "onStateChange":return{playerState:b};case "onPlaybackQualityChange":return{playbackQuality:b};case "onPlaybackRateChange":return{playbackRate:b};case "onError":return{errorCode:b}}return Yw.prototype.yc.call(this,a,b)};
ax.prototype.R=function(){Yw.prototype.R.call(this);delete this.api};function bx(a,b,c){nu.call(this);this.j=a;this.i=b;this.id=c}
w(bx,nu);bx.prototype.jb=function(a,b){this.Z()||this.j.jb(this.i,this.id,a,b)};
bx.prototype.R=function(){this.i=this.j=null;nu.prototype.R.call(this)};function cx(a,b,c){H.call(this);this.h=a;this.origin=c;this.i=ar(window,"message",this.j.bind(this));this.connection=new bx(this,a,b);Rc(this,this.connection)}
w(cx,H);cx.prototype.jb=function(a,b,c,d){this.Z()||a!==this.h||(a={id:b,command:c},d&&(a.data=d),this.h.postMessage(JSON.stringify(a),this.origin))};
cx.prototype.j=function(a){if(!this.Z()&&a.origin===this.origin){var b=a.data;if("string"===typeof b){try{b=JSON.parse(b)}catch(d){return}if(b.command){var c=this.connection;c.Z()||c.l("command",b.command,b.data,a.origin)}}}};
cx.prototype.R=function(){cr(this.i);this.h=null;H.prototype.R.call(this)};var dx=new Dw;function ex(){return dx.Tc()}
function fx(a){a=void 0===a?{}:a;return dx.invoke(a)}
;function gx(a,b,c,d,e){H.call(this);var f=this;this.A=b;this.webPlayerContextConfig=d;this.pc=e;this.Pa=!1;this.api={};this.ga=this.m=null;this.V=new L;this.h={};this.ba=this.ta=this.elementId=this.Za=this.config=null;this.Y=!1;this.j=this.D=null;this.Ba={};this.qc=["onReady"];this.lastError=null;this.Qb=NaN;this.S={};this.ea=0;this.i=this.l=a;Rc(this,this.V);hx(this);c?this.ea=setTimeout(function(){f.loadNewVideoConfig(c)},0):d&&(ix(this),jx(this))}
w(gx,H);m=gx.prototype;m.getId=function(){return this.A};
m.loadNewVideoConfig=function(a){if(!this.Z()){this.ea&&(clearTimeout(this.ea),this.ea=0);var b=a||{};b instanceof Mt||(b=new Mt(b));this.config=b;this.setConfig(a);jx(this);this.isReady()&&kx(this)}};
function ix(a){var b;a.webPlayerContextConfig?b=a.webPlayerContextConfig.rootElementId:b=a.config.attrs.id;a.elementId=b||a.elementId;"video-player"===a.elementId&&(a.elementId=a.A,a.webPlayerContextConfig?a.webPlayerContextConfig.rootElementId=a.A:a.config.attrs.id=a.A);var c;(null==(c=a.i)?void 0:c.id)===a.elementId&&(a.elementId+="-player",a.webPlayerContextConfig?a.webPlayerContextConfig.rootElementId=a.elementId:a.config.attrs.id=a.elementId)}
m.setConfig=function(a){this.Za=a;this.config=lx(a);ix(this);if(!this.ta){var b;this.ta=mx(this,(null==(b=this.config.args)?void 0:b.jsapicallback)||"onYouTubePlayerReady")}this.config.args?this.config.args.jsapicallback=null:this.config.args={jsapicallback:null};var c;if(null==(c=this.config)?0:c.attrs)a=this.config.attrs,(b=a.width)&&this.i&&(this.i.style.width=pi(Number(b)||b)),(a=a.height)&&this.i&&(this.i.style.height=pi(Number(a)||a))};
function kx(a){if(a.config&&!0!==a.config.loaded)if(a.config.loaded=!0,!a.config.args||"0"!==a.config.args.autoplay&&0!==a.config.args.autoplay&&!1!==a.config.args.autoplay){var b;a.api.loadVideoByPlayerVars(null!=(b=a.config.args)?b:null)}else a.api.cueVideoByPlayerVars(a.config.args)}
function nx(a){var b=!0,c=ox(a);c&&a.config&&(b=c.dataset.version===px(a));return b&&!!E("yt.player.Application.create")}
function jx(a){if(!a.Z()&&!a.Y){var b=nx(a);if(b&&"html5"===(ox(a)?"html5":null))a.ba="html5",a.isReady()||qx(a);else if(rx(a),a.ba="html5",b&&a.j&&a.l)a.l.appendChild(a.j),qx(a);else{a.config&&(a.config.loaded=!0);var c=!1;a.D=function(){c=!0;var d=sx(a,"player_bootstrap_method")?E("yt.player.Application.createAlternate")||E("yt.player.Application.create"):E("yt.player.Application.create");var e=a.config?lx(a.config):void 0;d&&d(a.l,e,a.webPlayerContextConfig,a.pc);qx(a)};
a.Y=!0;b?a.D():(Xt(px(a),a.D),(b=tx(a))&&eu(b),ux(a)&&!c&&D("yt.player.Application.create",null))}}}
function ox(a){var b=Rd(a.elementId);!b&&a.i&&a.i.querySelector&&(b=a.i.querySelector("#"+a.elementId));return b}
function qx(a){if(!a.Z()){var b=ox(a),c=!1;b&&b.getApiInterface&&b.getApiInterface()&&(c=!0);if(c){a.Y=!1;if(!sx(a,"html5_remove_not_servable_check_killswitch")){var d;if((null==b?0:b.isNotServable)&&a.config&&(null==b?0:b.isNotServable(null==(d=a.config.args)?void 0:d.video_id)))return}vx(a)}else a.Qb=setTimeout(function(){qx(a)},50)}}
function vx(a){hx(a);a.Pa=!0;var b=ox(a);if(b){a.m=wx(a,b,"addEventListener");a.ga=wx(a,b,"removeEventListener");var c=b.getApiInterface();c=c.concat(b.getInternalApiInterface());for(var d=a.api,e=0;e<c.length;e++){var f=c[e];d[f]||(d[f]=wx(a,b,f))}}for(var g in a.h)a.h.hasOwnProperty(g)&&a.m&&a.m(g,a.h[g]);kx(a);a.ta&&a.ta(a.api);a.V.Ya("onReady",a.api)}
function wx(a,b,c){var d=b[c];return function(){var e=B.apply(0,arguments);try{return a.lastError=null,d.apply(b,e)}catch(f){if("sendAbandonmentPing"!==c)throw f.params=c,a.lastError=f,e=new V("PlayerProxy error in method call",{error:f,method:c,playerId:a.A}),e.level="WARNING",e;}}}
function hx(a){a.Pa=!1;if(a.ga)for(var b in a.h)a.h.hasOwnProperty(b)&&a.ga(b,a.h[b]);for(var c in a.S)a.S.hasOwnProperty(c)&&clearTimeout(Number(c));a.S={};a.m=null;a.ga=null;b=a.api;for(var d in b)b.hasOwnProperty(d)&&(b[d]=null);b.addEventListener=function(e,f){a.addEventListener(e,f)};
b.removeEventListener=function(e,f){a.removeEventListener(e,f)};
b.destroy=function(){a.dispose()};
b.getLastError=function(){return a.getLastError()};
b.getPlayerType=function(){return a.getPlayerType()};
b.getCurrentVideoConfig=function(){return a.Za};
b.loadNewVideoConfig=function(e){a.loadNewVideoConfig(e)};
b.isReady=function(){return a.isReady()}}
m.isReady=function(){return this.Pa};
m.addEventListener=function(a,b){var c=this,d=mx(this,b);d&&(0<=eb(this.qc,a)||this.h[a]||(b=xx(this,a),this.m&&this.m(a,b)),this.V.subscribe(a,d),"onReady"===a&&this.isReady()&&setTimeout(function(){d(c.api)},0))};
m.removeEventListener=function(a,b){this.Z()||(b=mx(this,b))&&this.V.unsubscribe(a,b)};
function mx(a,b){var c=b;if("string"===typeof b){if(a.Ba[b])return a.Ba[b];c=function(){var d=B.apply(0,arguments),e=E(b);if(e)try{e.apply(C,d)}catch(f){throw d=new V("PlayerProxy error when executing callback",{error:f}),d.level="ERROR",d;}};
a.Ba[b]=c}return c?c:null}
function xx(a,b){function c(d){var e=setTimeout(function(){if(!a.Z()){try{a.V.Ya(b,null!=d?d:void 0)}catch(h){var f=new V("PlayerProxy error when creating global callback",{error:h.message,event:b,playerId:a.A,data:d,originalStack:h.stack});f.level="WARNING";throw f;}f=a.S;var g=String(e);g in f&&delete f[g]}},0);
qb(a.S,String(e))}
return a.h[b]=c}
m.getPlayerType=function(){return this.ba||(ox(this)?"html5":null)};
m.getLastError=function(){return this.lastError};
function rx(a){a.cancel();hx(a);a.ba=null;a.config&&(a.config.loaded=!1);var b=ox(a);b&&(nx(a)||!ux(a)?a.j=b:(b&&b.destroy&&b.destroy(),a.j=null));if(a.l)for(a=a.l;b=a.firstChild;)a.removeChild(b)}
m.cancel=function(){this.D&&cu(px(this),this.D);clearTimeout(this.Qb);this.Y=!1};
m.R=function(){rx(this);if(this.j&&this.config&&this.j.destroy)try{this.j.destroy()}catch(b){var a=new V("PlayerProxy error during disposal",{error:b});a.level="ERROR";throw a;}this.Ba=null;for(a in this.h)this.h.hasOwnProperty(a)&&delete this.h[a];this.Za=this.config=this.api=null;delete this.l;delete this.i;H.prototype.R.call(this)};
function ux(a){var b,c;a=null==(b=a.config)?void 0:null==(c=b.args)?void 0:c.fflags;return!!a&&-1!==a.indexOf("player_destroy_old_version=true")}
function px(a){return a.webPlayerContextConfig?a.webPlayerContextConfig.jsUrl:(a=a.config.assets)?a.js:""}
function tx(a){return a.webPlayerContextConfig?a.webPlayerContextConfig.cssUrl:(a=a.config.assets)?a.css:""}
function sx(a,b){if(a.webPlayerContextConfig)var c=a.webPlayerContextConfig.serializedExperimentFlags;else{var d;if(null==(d=a.config)?0:d.args)c=a.config.args.fflags}return(c||"").split("&").includes(b+"=true")}
function lx(a){for(var b={},c=v(Object.keys(a)),d=c.next();!d.done;d=c.next()){d=d.value;var e=a[d];b[d]="object"===typeof e?tb(e):e}return b}
;var yx={},zx="player_uid_"+(1E9*Math.random()>>>0);function Ax(a,b){var c="player",d=!1;d=void 0===d?!0:d;c="string"===typeof c?Rd(c):c;var e=zx+"_"+Sa(c),f=yx[e];if(f&&d)return Bx(a,b)?f.api.loadVideoByPlayerVars(a.args||null):f.loadNewVideoConfig(a),f.api;f=new gx(c,e,a,b,void 0);yx[e]=f;f.addOnDisposeCallback(function(){delete yx[f.getId()]});
return f.api}
function Bx(a,b){return b&&b.serializedExperimentFlags?b.serializedExperimentFlags.includes("web_player_remove_playerproxy=true"):a&&a.args&&a.args.fflags?a.args.fflags.includes("web_player_remove_playerproxy=true"):!1}
;var Cx=null,Dx=null,Ex=null;
function Fx(){Qv();var a=hm(),b=km(119),c=1<window.devicePixelRatio;if(document.body&&Fi(document.body,"exp-invert-logo"))if(c&&!Fi(document.body,"inverted-hdpi")){var d=document.body;if(d.classList)d.classList.add("inverted-hdpi");else if(!Fi(d,"inverted-hdpi")){var e=Di(d);Ei(d,e+(0<e.length?" inverted-hdpi":"inverted-hdpi"))}}else!c&&Fi(document.body,"inverted-hdpi")&&Gi();if(b!=c){b="f"+(Math.floor(119/31)+1);d=lm(b)||0;d=c?d|67108864:d&-67108865;0===d?delete em[b]:(c=d.toString(16),em[b]=c.toString());
c=!0;T("web_secure_pref_cookie_killswitch")&&(c=!1);b=a.h;d=[];for(f in em)em.hasOwnProperty(f)&&d.push(f+"="+encodeURIComponent(String(em[f])));var f=d.join("&");am(b,f,63072E3,a.i,c)}}
function Gx(){Hx()}
function Ix(){Pv("ep_init_pr");Hx()}
function Hx(){var a=Cx.getVideoData(1);a=a.title?a.title+" - YouTube":"YouTube";document.title!==a&&(document.title=a)}
function Jx(){Cx&&Cx.sendAbandonmentPing&&Cx.sendAbandonmentPing();S("PL_ATT")&&dx.dispose();for(var a=vi,b=0,c=yw.length;b<c;b++)a.pa(yw[b]);yw.length=0;bu("//static.doubleclick.net/instream/ad_status.js");zw=!1;Uk("DCLKSTAT",0);Qc(Ex,Dx);Cx&&(Cx.removeEventListener("onVideoDataChange",Gx),Cx.destroy())}
;D("yt.setConfig",Uk);D("yt.config.set",Uk);D("yt.setMsg",Ut);D("yt.msgs.set",Ut);D("yt.logging.errors.log",Ts);
D("writeEmbed",function(){var a=S("PLAYER_CONFIG");if(!a){var b=S("PLAYER_VARS");b&&(a={args:b})}Ku(!0);"gvn"===a.args.ps&&(document.body.style.backgroundColor="transparent");a.attrs||(a.attrs={width:"100%",height:"100%",id:"video-player"});var c=document.referrer;b=S("POST_MESSAGE_ORIGIN");window!==window.top&&c&&c!==document.URL&&(a.args.loaderUrl=c);Mv("embed",["ol"]);c=S("WEB_PLAYER_CONTEXT_CONFIGS").WEB_PLAYER_CONTEXT_CONFIG_ID_EMBEDDED_PLAYER;if(!c.serializedForcedExperimentIds){var d=hl(window.location.href);
d.forced_experiments&&(c.serializedForcedExperimentIds=d.forced_experiments)}var e;(null==(e=a.args)?0:e.autoplay)&&Mv("watch",["pbs","pbu","pbp"]);Cx=Ax(a,c);Cx.addEventListener("onVideoDataChange",Gx);Cx.addEventListener("onReady",Ix);a=S("POST_MESSAGE_ID","player");S("ENABLE_JS_API")?Ex=new Xw(Cx):S("ENABLE_POST_API")&&"string"===typeof a&&"string"===typeof b&&(Dx=new cx(window.parent,a,b),Ex=new ax(Cx,Dx.connection));Aw();T("ytidb_create_logger_embed_killswitch")||hn();a={};Jw.h||(Jw.h=new Jw);
Jw.h.install((a.flush_logs={callback:function(){zs()}},a));
Sq();T("ytidb_clear_embedded_player")&&vi.oa(function(){var f,g;if(!lw){var h=Er();Ar(h,{kc:kw,Hd:iw});var k={cd:{feedbackEndpoint:Wu(cw),modifyChannelNotificationPreferenceEndpoint:Wu(dw),playlistEditEndpoint:Wu(ew),subscribeEndpoint:Wu(aw),unsubscribeEndpoint:Wu(bw),webPlayerShareEntityServiceEndpoint:Wu(fw)}},l=Tu(),n={};l&&(n.client_location=l);void 0===f&&(f=Wl());void 0===g&&(g=h.resolve(kw));Vv(k,g,f,n);Ar(h,{kc:$v,Id:Uv.h});lw=h.resolve($v)}uw()})});
D("yt.abuse.player.botguardInitialized",E("yt.abuse.player.botguardInitialized")||ex);D("yt.abuse.player.invokeBotguard",E("yt.abuse.player.invokeBotguard")||fx);D("yt.abuse.dclkstatus.checkDclkStatus",E("yt.abuse.dclkstatus.checkDclkStatus")||Bw);D("yt.player.exports.navigate",E("yt.player.exports.navigate")||Ju);D("yt.util.activity.init",E("yt.util.activity.init")||fr);D("yt.util.activity.getTimeSinceActive",E("yt.util.activity.getTimeSinceActive")||ir);
D("yt.util.activity.setTimestamp",E("yt.util.activity.setTimestamp")||gr);window.addEventListener("load",Yk(function(){Fx()}));
window.addEventListener("pageshow",Yk(function(a){a.persisted||Fx()}));
window.addEventListener("pagehide",Yk(function(a){T("embeds_web_enable_dispose_player_if_page_not_cached_killswitch")?Jx():a.persisted||Jx()}));
window.onerror=function(a,b,c,d,e){b=void 0===b?"Unknown file":b;c=void 0===c?0:c;var f=!1,g=Vk("log_window_onerror_fraction");if(g&&Math.random()<g)f=!0;else{g=document.getElementsByTagName("script");for(var h=0,k=g.length;h<k;h++)if(0<g[h].src.indexOf("/debug-")){f=!0;break}}f&&(f=!1,e?f=!0:("string"===typeof a?g=a:ErrorEvent&&a instanceof ErrorEvent?(f=!0,g=a.message,b=a.filename,c=a.lineno,d=a.colno):(g="Unknown error",b="Unknown file",c=0),e=new V(g),e.name="UnhandledWindowError",e.message=g,
e.fileName=b,e.lineNumber=c,isNaN(d)?delete e.columnNumber:e.columnNumber=d),f?Ts(e):Us(e))};
ve=Vs;window.addEventListener("unhandledrejection",function(a){Vs(a.reason)});
fb(S("ERRORS")||[],function(a){Ts.apply(null,a)});
Uk("ERRORS",[]);T("embeds_web_enable_scheduler_to_player_binary")&&Zm();}).call(this);
