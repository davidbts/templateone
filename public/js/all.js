/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/amigos.js":
/*!********************************!*\
  !*** ./resources/js/amigos.js ***!
  \********************************/
/***/ (() => {

document.addEventListener('DOMContentLoaded', function () {
  amigos();
  copiarAlPortapapeles();
});

function amigos() {
  var registro = document.querySelector('.invita-amigos');

  if (registro) {
    registro.addEventListener('click', function (e) {
      var modaluser = document.querySelector(".modal-user");
      modaluser.style.display = 'block';
      var modaluserreg = document.querySelector(".modal-amigos");
      modaluserreg.style.display = 'block';
    });
  }

  var afueraregistro = document.querySelector('.modal-user');

  if (afueraregistro) {
    afueraregistro.addEventListener('click', function (e) {
      //   e.preventDefault();
      var elemento;
      elemento = e.target;
      var modaluser = document.querySelector(".modal-user");

      if (elemento.classList.contains('modal-user')) {
        var modaluserreg = document.querySelector(".modal-amigos");
        modaluserreg.style.display = 'none';
        modaluser.style.display = 'none';
      }
    });
  }

  var cerrarregistro = document.querySelector('.cerrar-amigos');

  if (cerrarregistro) {
    cerrarregistro.addEventListener('click', function (e) {
      //   e.preventDefault();
      var modaluser = document.querySelector(".modal-user");
      var modaluserreg = document.querySelector(".modal-amigos");
      modaluserreg.style.display = 'none';
      modaluser.style.display = 'none';
    });
  }
}

function copiarAlPortapapeles() {
  var btnAmigos = document.querySelector('.btn-amigos');
  var codigoACopiar = document.getElementById('url-amigos');

  if (btnAmigos) {
    btnAmigos.addEventListener('click', function (e) {
      // Clear any current selection
      var selection = window.getSelection();
      selection.removeAllRanges(); // Select paragraph

      var range = document.createRange();
      range.selectNodeContents(codigoACopiar);
      selection.addRange(range);

      try {
        document.execCommand('copy');
      } catch (ex) {
        excepcion();
      }
    });
  }
}

/***/ }),

/***/ "./resources/js/configcuenta.js":
/*!**************************************!*\
  !*** ./resources/js/configcuenta.js ***!
  \**************************************/
/***/ (() => {

document.addEventListener('DOMContentLoaded', function () {
  dates('option');
  months('option');
  years('option', 1900, 2021); //  document.querySelector('.bear-dates').addEventListener('click', onClickHandler);
  //  document.querySelector('bear-dates').addEventListener('mousedown', onMouseDownHandler);
});

function onMouseDownHandler(e) {
  var el = e.currentTarget;

  if (el.hasAttribute('size') && el.getAttribute('size') == '1') {
    e.preventDefault();
  }
}

function onClickHandler(e) {
  var el = e.currentTarget;

  if (el.getAttribute('size') == '1') {
    el.className += " selectOpen";
    el.setAttribute('size', '4');
  } else {
    el.className = '';
    el.setAttribute('size', '1');
  }
}
/*!
 * Copyright (C) 2017 ProgrammersNG.  All rights reserved.
 * This file is an original work developed by ProgrammersNG
 */
//Calender start
//Date method


function dates(tags) {
  //If the dates('') paramenter is empty, add no tags
  if (tags == '') {
    var dates = "";
    var i;

    for (i = 1; i < 32; i++) {
      dates += i;
    }
  } //If the dates('option') has paramenter, add the tags to it
  else {
    var dates = "";
    var i;

    for (i = 1; i < 32; i++) {
      dates += "<" + tags + ">" + i + "</" + tags + ">";
    }
  } //You can call the class multiple times


  var multiple_list = document.getElementsByClassName("bear-dates");

  for (i = 0; i < multiple_list.length; i++) {
    multiple_list[i].innerHTML += dates;
  }
} //Days method


function days(tags) {
  //List all the Days with array
  var list_days = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabados', 'Domingo']; //If the days('') paramenter is empty, add no tags

  if (tags == '') {
    var i;

    for (i = 0, l = list_days.length, days = ""; i < l; i++) {
      days += list_days[i];
    }
  } //If the days('option') has paramenter, add the tags to it
  else {
    for (i = 0, l = list_days.length, days = ""; i < l; i++) {
      days += "<" + tags + ">" + list_days[i] + "</" + tags + ">";
    }
  } //You can call the class multiple times


  var multiple_list = document.getElementsByClassName("bear-days");

  for (i = 0; i < multiple_list.length; i++) {
    multiple_list[i].innerHTML = days;
  }
} //Short Days method


function short_days(tags) {
  //List all the Days with array
  var list_days = ['Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab', 'Dom']; //If the short_days('') paramenter is empty, add no tags

  if (tags == '') {
    var i;

    for (i = 0, l = list_days.length, days = ""; i < l; i++) {
      days += list_days[i];
    }
  } //If the days('option') has paramenter, add the tags to it
  else {
    for (i = 0, l = list_days.length, days = ""; i < l; i++) {
      days += "<" + tags + ">" + list_days[i] + "</" + tags + ">";
    }
  } //You can call the class multiple times


  var multiple_list = document.getElementsByClassName("bear-short-days");

  for (i = 0; i < multiple_list.length; i++) {
    multiple_list[i].innerHTML = days;
  }
} //Months method


function months(tags) {
  //List all the Days with array
  var list_months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']; //If the months('') paramenter is empty, add no tags

  if (tags == '') {
    var i;

    for (i = 0, l = list_months.length, months = ""; i < l; i++) {
      months += list_months[i];
    }
  } //If the months('option') has paramenter, add the tags to it
  else {
    for (i = 0, l = list_months.length, months = ""; i < l; i++) {
      months += "<" + tags + " value = " + (i + 1) + ">" + list_months[i] + "</" + tags + ">";
    }
  } //You can call the class multiple times


  var multiple_list = document.getElementsByClassName("bear-months");

  for (i = 0; i < multiple_list.length; i++) {
    multiple_list[i].innerHTML += months;
  }
} //Short Months method


function short_months(tags) {
  //List all the Months with array
  var list_months = ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']; //If the short_months('') paramenter is empty, add no tags

  if (tags == '') {
    var i;

    for (i = 0, l = list_months.length, months = ""; i < l; i++) {
      months += list_months[i];
    }
  } //If the months('option') has paramenter, add the tags to it
  else {
    for (i = 0, l = list_months.length, months = ""; i < l; i++) {
      months += "<" + tags + ">" + list_months[i] + "</" + tags + ">";
    }
  } //You can call the class multiple times


  var multiple_list = document.getElementsByClassName("bear-short-months");

  for (i = 0; i < multiple_list.length; i++) {
    multiple_list[i].innerHTML = months;
  }
} //Year method


function years(tags, startY, endY) {
  //If the years('') paramenter is empty, add no tags
  if (tags == '') {
    var years = "";

    for (i = startY; i < endY + 1; i++) {
      years += i;
    }
  } //If the years('option') has paramenter, add the tags to it
  else {
    var years = "";

    for (i = endY; i > startY + 1; i--) {
      years += "<" + tags + ">" + i + "</" + tags + ">";
    }
  } //You can call the class multiple times


  var multiple_list = document.getElementsByClassName("bear-years");

  for (i = 0; i < multiple_list.length; i++) {
    multiple_list[i].innerHTML += years;
  }
} //Calender end

/***/ }),

/***/ "./resources/js/like.js":
/*!******************************!*\
  !*** ./resources/js/like.js ***!
  \******************************/
/***/ (() => {

var url = 'http://127.0.0.1:8000'; // var url = 'http://upton4ever.com.mx';

window.addEventListener("load", function () {
  function like() {
    $('.like-2').unbind('click').click(function () {
      $(this).addClass('like').removeClass('like-2');
      $.ajax({
        url: url + '/producto/like/' + $(this).data('id'),
        type: 'GET',
        success: function success(response) {}
      });
      dislike();
    });
  }

  like();

  function dislike() {
    $('.like').unbind('click').click(function () {
      $(this).addClass('like-2').removeClass('like');
      $.ajax({
        url: url + '/producto/dislike/' + $(this).data('id'),
        type: 'GET',
        success: function success(response) {}
      });
      like();
    });
  }

  dislike();

  function like2() {
    $('.far').unbind('click').click(function () {
      $(this).addClass('fas').removeClass('far');
      $.ajax({
        url: url + '/producto/like/' + $(this).data('id'),
        type: 'GET',
        success: function success(response) {}
      });
      dislike2();
    });
  }

  like2();

  function dislike2() {
    $('.fas').unbind('click').click(function () {
      $(this).addClass('far').removeClass('fas');
      $.ajax({
        url: url + '/producto/dislike/' + $(this).data('id'),
        type: 'GET',
        success: function success(response) {}
      });
      like2();
    });
  }

  dislike2();
});

/***/ }),

/***/ "./resources/js/main.js":
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
/***/ (() => {

function myFuntion(smallImg) {
  var fullImg = document.querySelector("#producto-imagen");
  fullImg.src = smallImg.src;
}

var slider_index = 0;

function show_slide(index) {
  var slides = document.querySelectorAll('.cimg-01-carrusel');
  var dots = document.querySelectorAll('.dots');
  if (index >= slides.length) slider_index = 0;
  if (index < 0) slider_index = slides.length - 1;

  for (var i = 0; i < slides.length; i++) {
    slides[i].style.display = 'none';
    dots[i].classList.remove('active-dot');
  }

  if (slides.length > 0) {
    slides[slider_index].style.display = 'block';
    dots[slider_index].classList.add('active-dot');
  }
}

show_slide(slider_index);

if (document.querySelector('.prev')) {
  document.querySelector('.prev').addEventListener('click', function () {
    show_slide(--slider_index);
    console.log("1");
  });
}

if (document.querySelector('.next')) {
  document.querySelector('.next').addEventListener('click', function () {
    show_slide(++slider_index);
  });
}

if (document.querySelectorAll('.dots')) {
  document.querySelectorAll('.dots').forEach(function (element) {
    element.addEventListener('click', function () {
      var dot = Array.prototype.slice.call(this.parentElement.children);
      dot_index = dot.indexOf(element);
      show_slide(slider_index = dot_index);
    });
  });
}

setInterval(function () {
  return show_slide(++slider_index);
}, 10000);

/***/ }),

/***/ "./resources/js/menu.js":
/*!******************************!*\
  !*** ./resources/js/menu.js ***!
  \******************************/
/***/ (() => {

function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }

function _regeneratorRuntime() { "use strict"; /*! regenerator-runtime -- Copyright (c) 2014-present, Facebook, Inc. -- license (MIT): https://github.com/facebook/regenerator/blob/main/LICENSE */ _regeneratorRuntime = function _regeneratorRuntime() { return exports; }; var exports = {}, Op = Object.prototype, hasOwn = Op.hasOwnProperty, $Symbol = "function" == typeof Symbol ? Symbol : {}, iteratorSymbol = $Symbol.iterator || "@@iterator", asyncIteratorSymbol = $Symbol.asyncIterator || "@@asyncIterator", toStringTagSymbol = $Symbol.toStringTag || "@@toStringTag"; function define(obj, key, value) { return Object.defineProperty(obj, key, { value: value, enumerable: !0, configurable: !0, writable: !0 }), obj[key]; } try { define({}, ""); } catch (err) { define = function define(obj, key, value) { return obj[key] = value; }; } function wrap(innerFn, outerFn, self, tryLocsList) { var protoGenerator = outerFn && outerFn.prototype instanceof Generator ? outerFn : Generator, generator = Object.create(protoGenerator.prototype), context = new Context(tryLocsList || []); return generator._invoke = function (innerFn, self, context) { var state = "suspendedStart"; return function (method, arg) { if ("executing" === state) throw new Error("Generator is already running"); if ("completed" === state) { if ("throw" === method) throw arg; return doneResult(); } for (context.method = method, context.arg = arg;;) { var delegate = context.delegate; if (delegate) { var delegateResult = maybeInvokeDelegate(delegate, context); if (delegateResult) { if (delegateResult === ContinueSentinel) continue; return delegateResult; } } if ("next" === context.method) context.sent = context._sent = context.arg;else if ("throw" === context.method) { if ("suspendedStart" === state) throw state = "completed", context.arg; context.dispatchException(context.arg); } else "return" === context.method && context.abrupt("return", context.arg); state = "executing"; var record = tryCatch(innerFn, self, context); if ("normal" === record.type) { if (state = context.done ? "completed" : "suspendedYield", record.arg === ContinueSentinel) continue; return { value: record.arg, done: context.done }; } "throw" === record.type && (state = "completed", context.method = "throw", context.arg = record.arg); } }; }(innerFn, self, context), generator; } function tryCatch(fn, obj, arg) { try { return { type: "normal", arg: fn.call(obj, arg) }; } catch (err) { return { type: "throw", arg: err }; } } exports.wrap = wrap; var ContinueSentinel = {}; function Generator() {} function GeneratorFunction() {} function GeneratorFunctionPrototype() {} var IteratorPrototype = {}; define(IteratorPrototype, iteratorSymbol, function () { return this; }); var getProto = Object.getPrototypeOf, NativeIteratorPrototype = getProto && getProto(getProto(values([]))); NativeIteratorPrototype && NativeIteratorPrototype !== Op && hasOwn.call(NativeIteratorPrototype, iteratorSymbol) && (IteratorPrototype = NativeIteratorPrototype); var Gp = GeneratorFunctionPrototype.prototype = Generator.prototype = Object.create(IteratorPrototype); function defineIteratorMethods(prototype) { ["next", "throw", "return"].forEach(function (method) { define(prototype, method, function (arg) { return this._invoke(method, arg); }); }); } function AsyncIterator(generator, PromiseImpl) { function invoke(method, arg, resolve, reject) { var record = tryCatch(generator[method], generator, arg); if ("throw" !== record.type) { var result = record.arg, value = result.value; return value && "object" == _typeof(value) && hasOwn.call(value, "__await") ? PromiseImpl.resolve(value.__await).then(function (value) { invoke("next", value, resolve, reject); }, function (err) { invoke("throw", err, resolve, reject); }) : PromiseImpl.resolve(value).then(function (unwrapped) { result.value = unwrapped, resolve(result); }, function (error) { return invoke("throw", error, resolve, reject); }); } reject(record.arg); } var previousPromise; this._invoke = function (method, arg) { function callInvokeWithMethodAndArg() { return new PromiseImpl(function (resolve, reject) { invoke(method, arg, resolve, reject); }); } return previousPromise = previousPromise ? previousPromise.then(callInvokeWithMethodAndArg, callInvokeWithMethodAndArg) : callInvokeWithMethodAndArg(); }; } function maybeInvokeDelegate(delegate, context) { var method = delegate.iterator[context.method]; if (undefined === method) { if (context.delegate = null, "throw" === context.method) { if (delegate.iterator["return"] && (context.method = "return", context.arg = undefined, maybeInvokeDelegate(delegate, context), "throw" === context.method)) return ContinueSentinel; context.method = "throw", context.arg = new TypeError("The iterator does not provide a 'throw' method"); } return ContinueSentinel; } var record = tryCatch(method, delegate.iterator, context.arg); if ("throw" === record.type) return context.method = "throw", context.arg = record.arg, context.delegate = null, ContinueSentinel; var info = record.arg; return info ? info.done ? (context[delegate.resultName] = info.value, context.next = delegate.nextLoc, "return" !== context.method && (context.method = "next", context.arg = undefined), context.delegate = null, ContinueSentinel) : info : (context.method = "throw", context.arg = new TypeError("iterator result is not an object"), context.delegate = null, ContinueSentinel); } function pushTryEntry(locs) { var entry = { tryLoc: locs[0] }; 1 in locs && (entry.catchLoc = locs[1]), 2 in locs && (entry.finallyLoc = locs[2], entry.afterLoc = locs[3]), this.tryEntries.push(entry); } function resetTryEntry(entry) { var record = entry.completion || {}; record.type = "normal", delete record.arg, entry.completion = record; } function Context(tryLocsList) { this.tryEntries = [{ tryLoc: "root" }], tryLocsList.forEach(pushTryEntry, this), this.reset(!0); } function values(iterable) { if (iterable) { var iteratorMethod = iterable[iteratorSymbol]; if (iteratorMethod) return iteratorMethod.call(iterable); if ("function" == typeof iterable.next) return iterable; if (!isNaN(iterable.length)) { var i = -1, next = function next() { for (; ++i < iterable.length;) { if (hasOwn.call(iterable, i)) return next.value = iterable[i], next.done = !1, next; } return next.value = undefined, next.done = !0, next; }; return next.next = next; } } return { next: doneResult }; } function doneResult() { return { value: undefined, done: !0 }; } return GeneratorFunction.prototype = GeneratorFunctionPrototype, define(Gp, "constructor", GeneratorFunctionPrototype), define(GeneratorFunctionPrototype, "constructor", GeneratorFunction), GeneratorFunction.displayName = define(GeneratorFunctionPrototype, toStringTagSymbol, "GeneratorFunction"), exports.isGeneratorFunction = function (genFun) { var ctor = "function" == typeof genFun && genFun.constructor; return !!ctor && (ctor === GeneratorFunction || "GeneratorFunction" === (ctor.displayName || ctor.name)); }, exports.mark = function (genFun) { return Object.setPrototypeOf ? Object.setPrototypeOf(genFun, GeneratorFunctionPrototype) : (genFun.__proto__ = GeneratorFunctionPrototype, define(genFun, toStringTagSymbol, "GeneratorFunction")), genFun.prototype = Object.create(Gp), genFun; }, exports.awrap = function (arg) { return { __await: arg }; }, defineIteratorMethods(AsyncIterator.prototype), define(AsyncIterator.prototype, asyncIteratorSymbol, function () { return this; }), exports.AsyncIterator = AsyncIterator, exports.async = function (innerFn, outerFn, self, tryLocsList, PromiseImpl) { void 0 === PromiseImpl && (PromiseImpl = Promise); var iter = new AsyncIterator(wrap(innerFn, outerFn, self, tryLocsList), PromiseImpl); return exports.isGeneratorFunction(outerFn) ? iter : iter.next().then(function (result) { return result.done ? result.value : iter.next(); }); }, defineIteratorMethods(Gp), define(Gp, toStringTagSymbol, "Generator"), define(Gp, iteratorSymbol, function () { return this; }), define(Gp, "toString", function () { return "[object Generator]"; }), exports.keys = function (object) { var keys = []; for (var key in object) { keys.push(key); } return keys.reverse(), function next() { for (; keys.length;) { var key = keys.pop(); if (key in object) return next.value = key, next.done = !1, next; } return next.done = !0, next; }; }, exports.values = values, Context.prototype = { constructor: Context, reset: function reset(skipTempReset) { if (this.prev = 0, this.next = 0, this.sent = this._sent = undefined, this.done = !1, this.delegate = null, this.method = "next", this.arg = undefined, this.tryEntries.forEach(resetTryEntry), !skipTempReset) for (var name in this) { "t" === name.charAt(0) && hasOwn.call(this, name) && !isNaN(+name.slice(1)) && (this[name] = undefined); } }, stop: function stop() { this.done = !0; var rootRecord = this.tryEntries[0].completion; if ("throw" === rootRecord.type) throw rootRecord.arg; return this.rval; }, dispatchException: function dispatchException(exception) { if (this.done) throw exception; var context = this; function handle(loc, caught) { return record.type = "throw", record.arg = exception, context.next = loc, caught && (context.method = "next", context.arg = undefined), !!caught; } for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i], record = entry.completion; if ("root" === entry.tryLoc) return handle("end"); if (entry.tryLoc <= this.prev) { var hasCatch = hasOwn.call(entry, "catchLoc"), hasFinally = hasOwn.call(entry, "finallyLoc"); if (hasCatch && hasFinally) { if (this.prev < entry.catchLoc) return handle(entry.catchLoc, !0); if (this.prev < entry.finallyLoc) return handle(entry.finallyLoc); } else if (hasCatch) { if (this.prev < entry.catchLoc) return handle(entry.catchLoc, !0); } else { if (!hasFinally) throw new Error("try statement without catch or finally"); if (this.prev < entry.finallyLoc) return handle(entry.finallyLoc); } } } }, abrupt: function abrupt(type, arg) { for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i]; if (entry.tryLoc <= this.prev && hasOwn.call(entry, "finallyLoc") && this.prev < entry.finallyLoc) { var finallyEntry = entry; break; } } finallyEntry && ("break" === type || "continue" === type) && finallyEntry.tryLoc <= arg && arg <= finallyEntry.finallyLoc && (finallyEntry = null); var record = finallyEntry ? finallyEntry.completion : {}; return record.type = type, record.arg = arg, finallyEntry ? (this.method = "next", this.next = finallyEntry.finallyLoc, ContinueSentinel) : this.complete(record); }, complete: function complete(record, afterLoc) { if ("throw" === record.type) throw record.arg; return "break" === record.type || "continue" === record.type ? this.next = record.arg : "return" === record.type ? (this.rval = this.arg = record.arg, this.method = "return", this.next = "end") : "normal" === record.type && afterLoc && (this.next = afterLoc), ContinueSentinel; }, finish: function finish(finallyLoc) { for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i]; if (entry.finallyLoc === finallyLoc) return this.complete(entry.completion, entry.afterLoc), resetTryEntry(entry), ContinueSentinel; } }, "catch": function _catch(tryLoc) { for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i]; if (entry.tryLoc === tryLoc) { var record = entry.completion; if ("throw" === record.type) { var thrown = record.arg; resetTryEntry(entry); } return thrown; } } throw new Error("illegal catch attempt"); }, delegateYield: function delegateYield(iterable, resultName, nextLoc) { return this.delegate = { iterator: values(iterable), resultName: resultName, nextLoc: nextLoc }, "next" === this.method && (this.arg = undefined), ContinueSentinel; } }, exports; }

function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

document.addEventListener('DOMContentLoaded', function () {
  iniciarMenu();
  registro();
  login();
  recuperar();
  cargarsubmenu();
  cargarmenuusuarios();
  cargarnotificaciones(); // cuadroanuncio();
});

function iniciarMenu() {
  var menuPrincipal = document.querySelector('.acordeon-menu');

  if (menuPrincipal) {
    menuPrincipal.addEventListener('click', function (e) {
      var hmenu = document.querySelector('.down-header');
      var estadoMenu = document.querySelector('.menu-activado');

      if (estadoMenu) {
        estadoMenu.classList.remove('menu-activado');
      } else {
        hmenu.classList.add('menu-activado');
      }
    });
  }
}

function registro() {
  var registro = document.querySelector('.registrarse-header');

  if (registro) {
    registro.addEventListener('click', function (e) {
      var modaluser = document.querySelector(".modal-user");
      modaluser.style.display = 'block';
      var modaluserreg = document.querySelector(".modal-registro");
      modaluserreg.style.display = 'block';
    });
  }

  var afueraregistro = document.querySelector('.modal-user');

  if (afueraregistro) {
    afueraregistro.addEventListener('click', function (e) {
      //   e.preventDefault();
      var elemento;
      elemento = e.target;
      var modaluser = document.querySelector(".modal-user");

      if (elemento.classList.contains('modal-user')) {
        var modaluserreg = document.querySelector(".modal-registro");
        modaluserreg.style.display = 'none';
        modaluser.style.display = 'none';
      }
    });
  }

  var cerrarregistro = document.querySelector('.cerrar-registro');

  if (cerrarregistro) {
    cerrarregistro.addEventListener('click', function (e) {
      //   e.preventDefault();
      var modaluser = document.querySelector(".modal-user");
      var modaluserreg = document.querySelector(".modal-registro");
      modaluserreg.style.display = 'none';
      modaluser.style.display = 'none';
    });
  }
}

function login() {
  var registro = document.querySelector('.login-header');

  if (registro) {
    registro.addEventListener('click', function (e) {
      var modaluser = document.querySelector(".modal-user");
      modaluser.style.display = 'block';
      var modaluserreg = document.querySelector(".modal-login");
      modaluserreg.style.display = 'block';
    });
  }

  var afueraregistro = document.querySelector('.modal-user');

  if (afueraregistro) {
    afueraregistro.addEventListener('click', function (e) {
      //   e.preventDefault();
      var elemento;
      elemento = e.target;
      var modaluser = document.querySelector(".modal-user");

      if (elemento.classList.contains('modal-user')) {
        var modaluserreg = document.querySelector(".modal-login");
        modaluserreg.style.display = 'none';
        modaluser.style.display = 'none';
      }
    });
  }

  var cerrarregistro = document.querySelector('.cerrar-login');

  if (cerrarregistro) {
    cerrarregistro.addEventListener('click', function (e) {
      //   e.preventDefault();
      var modaluser = document.querySelector(".modal-user");
      var modaluserreg = document.querySelector(".modal-login");
      modaluserreg.style.display = 'none';
      modaluser.style.display = 'none';
    });
  }
}

function recuperar() {
  var registro = document.querySelector('.recuperar-header');

  if (registro) {
    registro.addEventListener('click', function (e) {
      var modaluserlog = document.querySelector(".modal-login");
      modaluserlog.style.display = 'none'; // e.preventDefault();

      var modaluser = document.querySelector(".modal-user");
      modaluser.style.display = 'block';
      var modaluserreg = document.querySelector(".modal-recuperar");
      modaluserreg.style.display = 'block';
    });
  }

  var afueraregistro = document.querySelector('.modal-user');

  if (afueraregistro) {
    afueraregistro.addEventListener('click', function (e) {
      //   e.preventDefault();
      var elemento;
      elemento = e.target;
      var modaluser = document.querySelector(".modal-user");

      if (elemento.classList.contains('modal-user')) {
        var modaluserreg = document.querySelector(".modal-recuperar");
        modaluserreg.style.display = 'none';
        modaluser.style.display = 'none';
      }
    });
  }

  var cerrarregistro = document.querySelector('.cerrar-recuperar');

  if (cerrarregistro) {
    cerrarregistro.addEventListener('click', function (e) {
      //   e.preventDefault();
      var modaluser = document.querySelector(".modal-user");
      var modaluserreg = document.querySelector(".modal-login");
      modaluserreg.style.display = 'none';
      modaluser.style.display = 'none';
    });
  }
}

function cargarsubmenu() {
  return _cargarsubmenu.apply(this, arguments);
}

function _cargarsubmenu() {
  _cargarsubmenu = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee() {
    var cat, _loop, i;

    return _regeneratorRuntime().wrap(function _callee$(_context) {
      while (1) {
        switch (_context.prev = _context.next) {
          case 0:
            /*
            try{
              const resultado = await fetch('./subcategorias.json');
              const db = await resultado.json();
              const {Mujer, Hombre,Niña, Niño, Bebe}=db;
              let id=0;
                Mujer.forEach(element => {
                const itemCategoria = document.createElement('A');
                const itemDiv = document.createElement('DIV');
                if(typeof element !== 'object'){
                  itemCategoria.textContent = element;
                  itemCategoria.classList.add('subcategoria');
                    itemDiv.classList.add('div-subcategoria');
                  itemDiv.dataset.mujer = id++;
                  // Selecciona un servicio para la cita
                  itemDiv.onclick = selecionarServicio;
                    itemDiv.appendChild(itemCategoria);
                  // inyecta en el HTML
                  document.querySelector('.submenu-mujer').appendChild(itemDiv);
                }
                else{
                  let nombrecat = Object.keys(element)[0];
                  itemCategoria.textContent = nombrecat;
                  itemCategoria.classList.add('scategoria');
                    itemDiv.classList.add('div-scategoria');
                  itemDiv.onclick = selecionarServicio;
                  itemDiv.appendChild(itemCategoria);
                  document.querySelector('.submenu-mujer').appendChild(itemDiv);
                    const {[nombrecat]:foo} = element;
                  foo.forEach(subelement => {
                    const itemCategor = document.createElement('A');
                    const itemDi = document.createElement('DIV');
                    itemCategor.textContent = subelement;
                    itemCategor.classList.add('subcategoria');
                      itemDi.classList.add('div-subcategoria');
                    itemDi.dataset.mujer = id++;
                    itemDi.onclick = selecionarServicio;
                    itemDi.appendChild(itemCategor);
                    document.querySelector('.submenu-mujer').appendChild(itemDi);
                  });
                  }
              });
              Hombre.forEach(element => {
                const itemCategoria = document.createElement('A');
                const itemDiv = document.createElement('DIV');
                if(typeof element !== 'object'){
                  itemCategoria.textContent = element;
                  itemCategoria.classList.add('subcategoria');
                    itemDiv.classList.add('div-subcategoria');
                  itemDiv.dataset.mujer = id++;
                  // Selecciona un servicio para la cita
                  itemDiv.onclick = selecionarServicio;
                    itemDiv.appendChild(itemCategoria);
                  // inyecta en el HTML
                  document.querySelector('.submenu-hombre').appendChild(itemDiv);
                }
                else{
                  let nombrecat = Object.keys(element)[0];
                  itemCategoria.textContent = nombrecat;
                  itemCategoria.classList.add('scategoria');
                    itemDiv.classList.add('div-scategoria');
                  itemDiv.onclick = selecionarServicio;
                  itemDiv.appendChild(itemCategoria);
                  document.querySelector('.submenu-hombre').appendChild(itemDiv);
                    const {[nombrecat]:foo} = element;
                  foo.forEach(subelement => {
                    const itemCategor = document.createElement('A');
                    const itemDi = document.createElement('DIV');
                    itemCategor.textContent = subelement;
                    itemCategor.classList.add('subcategoria');
                      itemDi.classList.add('div-subcategoria');
                    itemDi.dataset.mujer = id++;
                    itemDi.onclick = selecionarServicio;
                    itemDi.appendChild(itemCategor);
                    document.querySelector('.submenu-hombre').appendChild(itemDi);
                  });
                  }
              });
              Niña.forEach(element => {
                const itemCategoria = document.createElement('A');
                const itemDiv = document.createElement('DIV');
                if(typeof element !== 'object'){
                  itemCategoria.textContent = element;
                  itemCategoria.classList.add('subcategoria');
                    itemDiv.classList.add('div-subcategoria');
                  itemDiv.dataset.mujer = id++;
                  // Selecciona un servicio para la cita
                  itemDiv.onclick = selecionarServicio;
                    itemDiv.appendChild(itemCategoria);
                  // inyecta en el HTML
                  document.querySelector('.submenu-niña').appendChild(itemDiv);
                }
                else{
                  let nombrecat = Object.keys(element)[0];
                  itemCategoria.textContent = nombrecat;
                  itemCategoria.classList.add('scategoria');
                    itemDiv.classList.add('div-scategoria');
                  itemDiv.onclick = selecionarServicio;
                  itemDiv.appendChild(itemCategoria);
                  document.querySelector('.submenu-niña').appendChild(itemDiv);
                    const {[nombrecat]:foo} = element;
                  foo.forEach(subelement => {
                    const itemCategor = document.createElement('A');
                    const itemDi = document.createElement('DIV');
                    itemCategor.textContent = subelement;
                    itemCategor.classList.add('subcategoria');
                      itemDi.classList.add('div-subcategoria');
                    itemDi.dataset.mujer = id++;
                    itemDi.onclick = selecionarServicio;
                    itemDi.appendChild(itemCategor);
                    document.querySelector('.submenu-niña').appendChild(itemDi);
                  });
                  }
              });
              Niño.forEach(element => {
                const itemCategoria = document.createElement('A');
                const itemDiv = document.createElement('DIV');
                if(typeof element !== 'object'){
                  itemCategoria.textContent = element;
                  itemCategoria.classList.add('subcategoria');
                    itemDiv.classList.add('div-subcategoria');
                  itemDiv.dataset.mujer = id++;
                  // Selecciona un servicio para la cita
                  itemDiv.onclick = selecionarServicio;
                    itemDiv.appendChild(itemCategoria);
                  // inyecta en el HTML
                  document.querySelector('.submenu-niño').appendChild(itemDiv);
                }
                else{
                  let nombrecat = Object.keys(element)[0];
                  itemCategoria.textContent = nombrecat;
                  itemCategoria.classList.add('scategoria');
                    itemDiv.classList.add('div-scategoria');
                  itemDiv.onclick = selecionarServicio;
                  itemDiv.appendChild(itemCategoria);
                  document.querySelector('.submenu-niño').appendChild(itemDiv);
                    const {[nombrecat]:foo} = element;
                  foo.forEach(subelement => {
                    const itemCategor = document.createElement('A');
                    const itemDi = document.createElement('DIV');
                    itemCategor.textContent = subelement;
                    itemCategor.classList.add('subcategoria');
                      itemDi.classList.add('div-subcategoria');
                    itemDi.dataset.mujer = id++;
                    itemDi.onclick = selecionarServicio;
                    itemDi.appendChild(itemCategor);
                    document.querySelector('.submenu-niño').appendChild(itemDi);
                  });
                  }
              });
              Bebe.forEach(element => {
                const itemCategoria = document.createElement('A');
                const itemDiv = document.createElement('DIV');
                if(typeof element !== 'object'){
                  itemCategoria.textContent = element;
                  itemCategoria.classList.add('subcategoria');
                    itemDiv.classList.add('div-subcategoria');
                  itemDiv.dataset.mujer = id++;
                  // Selecciona un servicio para la cita
                  itemDiv.onclick = selecionarServicio;
                    itemDiv.appendChild(itemCategoria);
                  // inyecta en el HTML
                  document.querySelector('.submenu-bebe').appendChild(itemDiv);
                }
                else{
                  let nombrecat = Object.keys(element)[0];
                  itemCategoria.textContent = nombrecat;
                  itemCategoria.classList.add('scategoria');
                    itemDiv.classList.add('div-scategoria');
                  itemDiv.onclick = selecionarServicio;
                  itemDiv.appendChild(itemCategoria);
                  document.querySelector('.submenu-bebe').appendChild(itemDiv);
                    const {[nombrecat]:foo} = element;
                  foo.forEach(subelement => {
                    const itemCategor = document.createElement('A');
                    const itemDi = document.createElement('DIV');
                    itemCategor.textContent = subelement;
                    itemCategor.classList.add('subcategoria');
                      itemDi.classList.add('div-subcategoria');
                    itemDi.dataset.mujer = id++;
                    itemDi.onclick = selecionarServicio;
                    itemDi.appendChild(itemCategor);
                    document.querySelector('.submenu-bebe').appendChild(itemDi);
                  });
                  }
              });
            }
            catch(error){
              }
            */
            cat = ["mujer", "hombre", "niñas", "niños", "bebes"];

            _loop = function _loop(i) {
              var submenuPrincipal = document.querySelector("[data-submenu=\"".concat(i, "\"]"));

              if (submenuPrincipal) {
                submenuPrincipal.addEventListener('click', function (e) {
                  console.log("hola");
                  var hmenu = document.querySelector(".submenu-".concat(cat[i - 1]));
                  var estadoMenu = document.querySelector('.submenu-activado');

                  if (estadoMenu) {
                    estadoMenu.classList.remove('submenu-activado');
                  } else {
                    hmenu.classList.add('submenu-activado');
                  }
                });
              }
            };

            for (i = 1; i <= cat.length; i++) {
              _loop(i);
            }

          case 3:
          case "end":
            return _context.stop();
        }
      }
    }, _callee);
  }));
  return _cargarsubmenu.apply(this, arguments);
}

function selecionarServicio(evt) {
  var elemento; // if(evt.target.tagName === 'P')
  //   elemento = evt.target.parentElement;
  // else
  //   elemento = evt.target;
  // if(elemento.classList.contains('selecionado')){
  //   elemento.classList.remove('selecionado');
  //   eliminarSercivio(elemento);
  // }
  // else{
  //   elemento.classList.add('selecionado');
  //   agregarServicio(elemento);
  // }
  //console.log(elemento);
}

function cargarmenuusuarios() {
  var menuusuario = document.querySelector('.link-menu-usuario');

  if (menuusuario) {
    menuusuario.addEventListener('click', function (e) {
      var hmenu = document.querySelector('.menu-usuario');
      var estadoMenu = document.querySelector('.menu-usuario-activado');

      if (estadoMenu) {
        estadoMenu.classList.remove('menu-usuario-activado');
      } else {
        hmenu.classList.add('menu-usuario-activado');
      }
    });
  }
}

function cargarnotificaciones() {
  var menuusuario = document.querySelector('.link-menu-notificacion');

  if (menuusuario) {
    menuusuario.addEventListener('click', function (e) {
      var hmenu = document.querySelector('.menu-notificaciones');
      var estadoMenu = document.querySelector('.menu-noti-activado');

      if (estadoMenu) {
        estadoMenu.classList.remove('menu-noti-activado');
      } else {
        hmenu.classList.add('menu-noti-activado');
      }
    });
  }
}
/* 
function cuadroanuncio(){
  const registro = document.querySelector('.mostrar-anuncio');
  if (registro){
    registro.addEventListener('click' ,  e => {
      const modalfoto = document.querySelector(".modal-anuncio");
      modalfoto.style.display = 'block';
    });

    const cerrarregistro = document.querySelector('.cerrar-anuncio');
    cerrarregistro.addEventListener('click' ,  e => {
    //   e.preventDefault();
      const modaluser = document.querySelector(".modal-anuncio");
      modaluser.style.display = 'none';

    });
  }
}

*/


function abre() {
  console.log();
  var modaluser = document.querySelector(".modal-user");
  modaluser.style.display = 'block';
  var modaluserreg = document.querySelector(".modal-login");
  modaluserreg.style.display = 'block';
} //forgot-password

/***/ }),

/***/ "./resources/js/misventas.js":
/*!***********************************!*\
  !*** ./resources/js/misventas.js ***!
  \***********************************/
/***/ (() => {

document.addEventListener('DOMContentLoaded', function () {
  cuadrofoto();
});

function cuadrofoto() {
  var registro = document.querySelector('.subirfoto-imagen');

  if (registro) {
    registro.addEventListener('click', function (e) {
      var modalfoto = document.querySelector(".modal-foto");
      modalfoto.style.display = 'block';
      console.log("ventana");
    });
    var cerrarregistro = document.querySelector('.cerrar-foto');
    cerrarregistro.addEventListener('click', function (e) {
      //   e.preventDefault();
      var modaluser = document.querySelector(".modal-foto");
      modaluser.style.display = 'none';
    });
  }
}

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!*****************************!*\
  !*** ./resources/js/all.js ***!
  \*****************************/
__webpack_require__(/*! ./main */ "./resources/js/main.js");

__webpack_require__(/*! ./menu */ "./resources/js/menu.js");

__webpack_require__(/*! ./misventas */ "./resources/js/misventas.js");

__webpack_require__(/*! ./configcuenta */ "./resources/js/configcuenta.js");

__webpack_require__(/*! ./like */ "./resources/js/like.js");

__webpack_require__(/*! ./amigos */ "./resources/js/amigos.js");
})();

/******/ })()
;