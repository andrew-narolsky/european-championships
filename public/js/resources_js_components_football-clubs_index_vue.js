"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_football-clubs_index_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/football-clubs/index.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/football-clubs/index.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  created: function created() {
    var slug = this.$route.params.slug;
    this.getFootballClub(slug);
  },
  data: function data() {
    return {
      football_club: {},
      awards: {}
    };
  },
  methods: {
    getFootballClub: function getFootballClub(slug) {
      var _this = this;

      axios.post('/api/football-clubs/' + slug, {
        key: '53V363XcSVOEsqRtHjxW'
      }).then(function (response) {
        _this.football_club = response.data;
        _this.awards = response.data.awards;
      })["catch"](function (error) {
        console.log(error);
      });
    }
  }
});

/***/ }),

/***/ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/football-clubs/index.vue?vue&type=style&index=0&lang=css&":
/*!***********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/football-clubs/index.vue?vue&type=style&index=0&lang=css& ***!
  \***********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../../node_modules/css-loader/dist/runtime/api.js */ "./node_modules/css-loader/dist/runtime/api.js");
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__);
// Imports

var ___CSS_LOADER_EXPORT___ = _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default()(function(i){return i[1]});
// Module
___CSS_LOADER_EXPORT___.push([module.id, "\n.card-title.h6 {\n    text-align: left;\n}\n.sub_title {\n    padding-right: 10px;\n    text-align: left;\n}\n", ""]);
// Exports
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (___CSS_LOADER_EXPORT___);


/***/ }),

/***/ "./node_modules/css-loader/dist/runtime/api.js":
/*!*****************************************************!*\
  !*** ./node_modules/css-loader/dist/runtime/api.js ***!
  \*****************************************************/
/***/ ((module) => {



/*
  MIT License http://www.opensource.org/licenses/mit-license.php
  Author Tobias Koppers @sokra
*/
// css base code, injected by the css-loader
// eslint-disable-next-line func-names
module.exports = function (cssWithMappingToString) {
  var list = []; // return the list of modules as css string

  list.toString = function toString() {
    return this.map(function (item) {
      var content = cssWithMappingToString(item);

      if (item[2]) {
        return "@media ".concat(item[2], " {").concat(content, "}");
      }

      return content;
    }).join("");
  }; // import a list of modules into the list
  // eslint-disable-next-line func-names


  list.i = function (modules, mediaQuery, dedupe) {
    if (typeof modules === "string") {
      // eslint-disable-next-line no-param-reassign
      modules = [[null, modules, ""]];
    }

    var alreadyImportedModules = {};

    if (dedupe) {
      for (var i = 0; i < this.length; i++) {
        // eslint-disable-next-line prefer-destructuring
        var id = this[i][0];

        if (id != null) {
          alreadyImportedModules[id] = true;
        }
      }
    }

    for (var _i = 0; _i < modules.length; _i++) {
      var item = [].concat(modules[_i]);

      if (dedupe && alreadyImportedModules[item[0]]) {
        // eslint-disable-next-line no-continue
        continue;
      }

      if (mediaQuery) {
        if (!item[2]) {
          item[2] = mediaQuery;
        } else {
          item[2] = "".concat(mediaQuery, " and ").concat(item[2]);
        }
      }

      list.push(item);
    }
  };

  return list;
};

/***/ }),

/***/ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/football-clubs/index.vue?vue&type=style&index=0&lang=css&":
/*!***************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/football-clubs/index.vue?vue&type=style&index=0&lang=css& ***!
  \***************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! !../../../../node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js */ "./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js");
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! !!../../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./index.vue?vue&type=style&index=0&lang=css& */ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/football-clubs/index.vue?vue&type=style&index=0&lang=css&");

            

var options = {};

options.insert = "head";
options.singleton = false;

var update = _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default()(_node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_1__["default"], options);



/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_1__["default"].locals || {});

/***/ }),

/***/ "./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js":
/*!****************************************************************************!*\
  !*** ./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js ***!
  \****************************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {



var isOldIE = function isOldIE() {
  var memo;
  return function memorize() {
    if (typeof memo === 'undefined') {
      // Test for IE <= 9 as proposed by Browserhacks
      // @see http://browserhacks.com/#hack-e71d8692f65334173fee715c222cb805
      // Tests for existence of standard globals is to allow style-loader
      // to operate correctly into non-standard environments
      // @see https://github.com/webpack-contrib/style-loader/issues/177
      memo = Boolean(window && document && document.all && !window.atob);
    }

    return memo;
  };
}();

var getTarget = function getTarget() {
  var memo = {};
  return function memorize(target) {
    if (typeof memo[target] === 'undefined') {
      var styleTarget = document.querySelector(target); // Special case to return head of iframe instead of iframe itself

      if (window.HTMLIFrameElement && styleTarget instanceof window.HTMLIFrameElement) {
        try {
          // This will throw an exception if access to iframe is blocked
          // due to cross-origin restrictions
          styleTarget = styleTarget.contentDocument.head;
        } catch (e) {
          // istanbul ignore next
          styleTarget = null;
        }
      }

      memo[target] = styleTarget;
    }

    return memo[target];
  };
}();

var stylesInDom = [];

function getIndexByIdentifier(identifier) {
  var result = -1;

  for (var i = 0; i < stylesInDom.length; i++) {
    if (stylesInDom[i].identifier === identifier) {
      result = i;
      break;
    }
  }

  return result;
}

function modulesToDom(list, options) {
  var idCountMap = {};
  var identifiers = [];

  for (var i = 0; i < list.length; i++) {
    var item = list[i];
    var id = options.base ? item[0] + options.base : item[0];
    var count = idCountMap[id] || 0;
    var identifier = "".concat(id, " ").concat(count);
    idCountMap[id] = count + 1;
    var index = getIndexByIdentifier(identifier);
    var obj = {
      css: item[1],
      media: item[2],
      sourceMap: item[3]
    };

    if (index !== -1) {
      stylesInDom[index].references++;
      stylesInDom[index].updater(obj);
    } else {
      stylesInDom.push({
        identifier: identifier,
        updater: addStyle(obj, options),
        references: 1
      });
    }

    identifiers.push(identifier);
  }

  return identifiers;
}

function insertStyleElement(options) {
  var style = document.createElement('style');
  var attributes = options.attributes || {};

  if (typeof attributes.nonce === 'undefined') {
    var nonce =  true ? __webpack_require__.nc : 0;

    if (nonce) {
      attributes.nonce = nonce;
    }
  }

  Object.keys(attributes).forEach(function (key) {
    style.setAttribute(key, attributes[key]);
  });

  if (typeof options.insert === 'function') {
    options.insert(style);
  } else {
    var target = getTarget(options.insert || 'head');

    if (!target) {
      throw new Error("Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.");
    }

    target.appendChild(style);
  }

  return style;
}

function removeStyleElement(style) {
  // istanbul ignore if
  if (style.parentNode === null) {
    return false;
  }

  style.parentNode.removeChild(style);
}
/* istanbul ignore next  */


var replaceText = function replaceText() {
  var textStore = [];
  return function replace(index, replacement) {
    textStore[index] = replacement;
    return textStore.filter(Boolean).join('\n');
  };
}();

function applyToSingletonTag(style, index, remove, obj) {
  var css = remove ? '' : obj.media ? "@media ".concat(obj.media, " {").concat(obj.css, "}") : obj.css; // For old IE

  /* istanbul ignore if  */

  if (style.styleSheet) {
    style.styleSheet.cssText = replaceText(index, css);
  } else {
    var cssNode = document.createTextNode(css);
    var childNodes = style.childNodes;

    if (childNodes[index]) {
      style.removeChild(childNodes[index]);
    }

    if (childNodes.length) {
      style.insertBefore(cssNode, childNodes[index]);
    } else {
      style.appendChild(cssNode);
    }
  }
}

function applyToTag(style, options, obj) {
  var css = obj.css;
  var media = obj.media;
  var sourceMap = obj.sourceMap;

  if (media) {
    style.setAttribute('media', media);
  } else {
    style.removeAttribute('media');
  }

  if (sourceMap && typeof btoa !== 'undefined') {
    css += "\n/*# sourceMappingURL=data:application/json;base64,".concat(btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap)))), " */");
  } // For old IE

  /* istanbul ignore if  */


  if (style.styleSheet) {
    style.styleSheet.cssText = css;
  } else {
    while (style.firstChild) {
      style.removeChild(style.firstChild);
    }

    style.appendChild(document.createTextNode(css));
  }
}

var singleton = null;
var singletonCounter = 0;

function addStyle(obj, options) {
  var style;
  var update;
  var remove;

  if (options.singleton) {
    var styleIndex = singletonCounter++;
    style = singleton || (singleton = insertStyleElement(options));
    update = applyToSingletonTag.bind(null, style, styleIndex, false);
    remove = applyToSingletonTag.bind(null, style, styleIndex, true);
  } else {
    style = insertStyleElement(options);
    update = applyToTag.bind(null, style, options);

    remove = function remove() {
      removeStyleElement(style);
    };
  }

  update(obj);
  return function updateStyle(newObj) {
    if (newObj) {
      if (newObj.css === obj.css && newObj.media === obj.media && newObj.sourceMap === obj.sourceMap) {
        return;
      }

      update(obj = newObj);
    } else {
      remove();
    }
  };
}

module.exports = function (list, options) {
  options = options || {}; // Force single-tag solution on IE6-9, which has a hard limit on the # of <style>
  // tags it will allow on a page

  if (!options.singleton && typeof options.singleton !== 'boolean') {
    options.singleton = isOldIE();
  }

  list = list || [];
  var lastIdentifiers = modulesToDom(list, options);
  return function update(newList) {
    newList = newList || [];

    if (Object.prototype.toString.call(newList) !== '[object Array]') {
      return;
    }

    for (var i = 0; i < lastIdentifiers.length; i++) {
      var identifier = lastIdentifiers[i];
      var index = getIndexByIdentifier(identifier);
      stylesInDom[index].references--;
    }

    var newLastIdentifiers = modulesToDom(newList, options);

    for (var _i = 0; _i < lastIdentifiers.length; _i++) {
      var _identifier = lastIdentifiers[_i];

      var _index = getIndexByIdentifier(_identifier);

      if (stylesInDom[_index].references === 0) {
        stylesInDom[_index].updater();

        stylesInDom.splice(_index, 1);
      }
    }

    lastIdentifiers = newLastIdentifiers;
  };
};

/***/ }),

/***/ "./resources/js/components/football-clubs/index.vue":
/*!**********************************************************!*\
  !*** ./resources/js/components/football-clubs/index.vue ***!
  \**********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _index_vue_vue_type_template_id_5508ed2b___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./index.vue?vue&type=template&id=5508ed2b& */ "./resources/js/components/football-clubs/index.vue?vue&type=template&id=5508ed2b&");
/* harmony import */ var _index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./index.vue?vue&type=script&lang=js& */ "./resources/js/components/football-clubs/index.vue?vue&type=script&lang=js&");
/* harmony import */ var _index_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./index.vue?vue&type=style&index=0&lang=css& */ "./resources/js/components/football-clubs/index.vue?vue&type=style&index=0&lang=css&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");



;


/* normalize component */

var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__["default"])(
  _index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _index_vue_vue_type_template_id_5508ed2b___WEBPACK_IMPORTED_MODULE_0__.render,
  _index_vue_vue_type_template_id_5508ed2b___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/football-clubs/index.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/football-clubs/index.vue?vue&type=script&lang=js&":
/*!***********************************************************************************!*\
  !*** ./resources/js/components/football-clubs/index.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./index.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/football-clubs/index.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/football-clubs/index.vue?vue&type=style&index=0&lang=css&":
/*!*******************************************************************************************!*\
  !*** ./resources/js/components/football-clubs/index.vue?vue&type=style&index=0&lang=css& ***!
  \*******************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_dist_cjs_js_node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/style-loader/dist/cjs.js!../../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./index.vue?vue&type=style&index=0&lang=css& */ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/football-clubs/index.vue?vue&type=style&index=0&lang=css&");


/***/ }),

/***/ "./resources/js/components/football-clubs/index.vue?vue&type=template&id=5508ed2b&":
/*!*****************************************************************************************!*\
  !*** ./resources/js/components/football-clubs/index.vue?vue&type=template&id=5508ed2b& ***!
  \*****************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_template_id_5508ed2b___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_template_id_5508ed2b___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_template_id_5508ed2b___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./index.vue?vue&type=template&id=5508ed2b& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/football-clubs/index.vue?vue&type=template&id=5508ed2b&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/football-clubs/index.vue?vue&type=template&id=5508ed2b&":
/*!********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/football-clubs/index.vue?vue&type=template&id=5508ed2b& ***!
  \********************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { attrs: { id: "main-wrapper" } }, [
    _c("div", { staticClass: "row" }, [
      _c("div", { staticClass: "col-md-3" }, [
        _c("div", { staticClass: "panel panel-white" }, [
          _c("div", { staticClass: "panel-body user-profile-panel" }, [
            _c("div", { staticClass: "card-header" }, [
              _c("h1", { staticClass: "card-title mb-0" }, [
                _c("strong", [_vm._v(_vm._s(_vm.football_club.name))]),
              ]),
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "card-body text-center" }, [
              _vm.football_club.image
                ? _c("img", {
                    staticClass: "img-fluid mb-2",
                    attrs: {
                      src: _vm.football_club.image,
                      alt: "Christina Mason",
                      width: "auto",
                      height: "150",
                    },
                  })
                : _vm._e(),
              _vm._v(" "),
              !_vm.football_club.image
                ? _c("img", {
                    staticClass: "img-fluid mb-2",
                    attrs: {
                      src: "/backend/img/no_image.jpg",
                      alt: "Christina Mason",
                      width: "auto",
                      height: "150",
                    },
                  })
                : _vm._e(),
            ]),
            _vm._v(" "),
            _c("hr", { staticClass: "my-0" }),
            _vm._v(" "),
            _c("div", { staticClass: "card-body" }, [
              _c(
                "div",
                { staticClass: "h6 card-title flex-wrap" },
                [
                  _c(
                    "svg",
                    {
                      staticClass: "feather feather-flag align-middle me-2",
                      attrs: {
                        xmlns: "http://www.w3.org/2000/svg",
                        width: "24",
                        height: "24",
                        viewBox: "0 0 24 24",
                        fill: "none",
                        stroke: "currentColor",
                        "stroke-width": "2",
                        "stroke-linecap": "round",
                        "stroke-linejoin": "round",
                      },
                    },
                    [
                      _c("path", {
                        attrs: {
                          d: "M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z",
                        },
                      }),
                      _c("line", {
                        attrs: { x1: "4", y1: "22", x2: "4", y2: "15" },
                      }),
                    ]
                  ),
                  _vm._v(" "),
                  _c("span", { staticClass: "sub_title" }, [
                    _vm._v("Country: "),
                  ]),
                  _vm._l(_vm.football_club.countries, function (country) {
                    return _c("span", [_vm._v(_vm._s(country))])
                  }),
                ],
                2
              ),
            ]),
            _vm._v(" "),
            _c("hr", { staticClass: "my-0" }),
            _vm._v(" "),
            _c("div", { staticClass: "card-body" }, [
              _c("div", { staticClass: "h6 card-title flex-wrap" }, [
                _c(
                  "svg",
                  {
                    staticClass: "feather feather-shield align-middle me-2",
                    attrs: {
                      xmlns: "http://www.w3.org/2000/svg",
                      width: "24",
                      height: "24",
                      viewBox: "0 0 24 24",
                      fill: "none",
                      stroke: "currentColor",
                      "stroke-width": "2",
                      "stroke-linecap": "round",
                      "stroke-linejoin": "round",
                    },
                  },
                  [
                    _c("path", {
                      attrs: {
                        d: "M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z",
                      },
                    }),
                  ]
                ),
                _vm._v(" "),
                _c("span", { staticClass: "sub_title" }, [_vm._v("Founded: ")]),
                _vm._v(
                  _vm._s(_vm.football_club.founded) +
                    "\n                        "
                ),
              ]),
            ]),
            _vm._v(" "),
            _vm.football_club.destroyed
              ? _c("hr", { staticClass: "my-0" })
              : _vm._e(),
            _vm._v(" "),
            _vm.football_club.destroyed
              ? _c("div", { staticClass: "card-body" }, [
                  _c("div", { staticClass: "h6 card-title flex-wrap" }, [
                    _c(
                      "svg",
                      {
                        staticClass:
                          "feather feather-shield-off align-middle me-2",
                        attrs: {
                          xmlns: "http://www.w3.org/2000/svg",
                          width: "24",
                          height: "24",
                          viewBox: "0 0 24 24",
                          fill: "none",
                          stroke: "currentColor",
                          "stroke-width": "2",
                          "stroke-linecap": "round",
                          "stroke-linejoin": "round",
                        },
                      },
                      [
                        _c("path", {
                          attrs: {
                            d: "M19.69 14a6.9 6.9 0 0 0 .31-2V5l-8-3-3.16 1.18",
                          },
                        }),
                        _c("path", {
                          attrs: {
                            d: "M4.73 4.73L4 5v7c0 6 8 10 8 10a20.29 20.29 0 0 0 5.62-4.38",
                          },
                        }),
                        _c("line", {
                          attrs: { x1: "1", y1: "1", x2: "23", y2: "23" },
                        }),
                      ]
                    ),
                    _vm._v(" "),
                    _c("span", { staticClass: "sub_title" }, [
                      _vm._v("Dissolved: "),
                    ]),
                    _vm._v(
                      _vm._s(_vm.football_club.destroyed) +
                        "\n                        "
                    ),
                  ]),
                ])
              : _vm._e(),
            _vm._v(" "),
            _vm.football_club.old_names
              ? _c("hr", { staticClass: "my-0" })
              : _vm._e(),
            _vm._v(" "),
            _vm.football_club.old_names
              ? _c("div", { staticClass: "card-body" }, [
                  _c("div", { staticClass: "h6 card-title flex-wrap" }, [
                    _c(
                      "svg",
                      {
                        staticClass: "feather feather-list align-middle me-2",
                        attrs: {
                          xmlns: "http://www.w3.org/2000/svg",
                          width: "24",
                          height: "24",
                          viewBox: "0 0 24 24",
                          fill: "none",
                          stroke: "currentColor",
                          "stroke-width": "2",
                          "stroke-linecap": "round",
                          "stroke-linejoin": "round",
                        },
                      },
                      [
                        _c("line", {
                          attrs: { x1: "8", y1: "6", x2: "21", y2: "6" },
                        }),
                        _c("line", {
                          attrs: { x1: "8", y1: "12", x2: "21", y2: "12" },
                        }),
                        _c("line", {
                          attrs: { x1: "8", y1: "18", x2: "21", y2: "18" },
                        }),
                        _c("line", {
                          attrs: { x1: "3", y1: "6", x2: "3.01", y2: "6" },
                        }),
                        _c("line", {
                          attrs: { x1: "3", y1: "12", x2: "3.01", y2: "12" },
                        }),
                        _c("line", {
                          attrs: { x1: "3", y1: "18", x2: "3.01", y2: "18" },
                        }),
                      ]
                    ),
                    _vm._v(" "),
                    _c("span", { staticClass: "sub_title" }, [
                      _vm._v("Old names: "),
                    ]),
                    _vm._v(
                      _vm._s(_vm.football_club.old_names) +
                        "\n                        "
                    ),
                  ]),
                ])
              : _vm._e(),
          ]),
        ]),
      ]),
      _vm._v(" "),
      _c(
        "div",
        { staticClass: "col-md-9" },
        [
          _vm.football_club.notice
            ? _c("div", { staticClass: "panel panel-white" }, [
                _c("div", { staticClass: "panel-body user-profile-panel" }, [
                  _vm._m(0),
                  _vm._v(" "),
                  _c("div", { staticClass: "card-body" }, [
                    _vm._v(
                      "\n                        " +
                        _vm._s(_vm.football_club.notice) +
                        "\n                    "
                    ),
                  ]),
                ]),
              ])
            : _vm._e(),
          _vm._v(" "),
          _vm._l(_vm.awards, function (award) {
            return _c("div", { staticClass: "panel panel-white" }, [
              _c("div", { staticClass: "card-header" }, [
                _c("h3", { staticClass: "card-title mb-0 text-left" }, [
                  _c("strong", [_vm._v(_vm._s(award.name))]),
                ]),
                _vm._v(" "),
                award.gold ? _c("hr", { staticClass: "my-0" }) : _vm._e(),
                _vm._v(" "),
                award.gold
                  ? _c(
                      "div",
                      { staticClass: "card-body text-left" },
                      [
                        _c("strong", [
                          _vm._v(
                            "Champion (" +
                              _vm._s(award.gold.years.length) +
                              "):"
                          ),
                        ]),
                        _vm._v(" "),
                        _vm._l(award.gold.years, function (gold, item) {
                          return _c("span", [
                            _vm._v(_vm._s(gold)),
                            item + 1 !== award.gold.years.length
                              ? _c("span", [_vm._v(", ")])
                              : _vm._e(),
                          ])
                        }),
                      ],
                      2
                    )
                  : _vm._e(),
                _vm._v(" "),
                award.silver ? _c("hr", { staticClass: "my-0" }) : _vm._e(),
                _vm._v(" "),
                award.silver
                  ? _c(
                      "div",
                      { staticClass: "card-body text-left" },
                      [
                        _c("strong", [
                          _vm._v(
                            "Runner up (" +
                              _vm._s(award.silver.years.length) +
                              "):"
                          ),
                        ]),
                        _vm._v(" "),
                        _vm._l(award.silver.years, function (silver, item) {
                          return _c("span", [
                            _vm._v(_vm._s(silver)),
                            item + 1 !== award.silver.years.length
                              ? _c("span", [_vm._v(", ")])
                              : _vm._e(),
                          ])
                        }),
                      ],
                      2
                    )
                  : _vm._e(),
                _vm._v(" "),
                award.bronze ? _c("hr", { staticClass: "my-0" }) : _vm._e(),
                _vm._v(" "),
                award.bronze
                  ? _c(
                      "div",
                      { staticClass: "card-body text-left" },
                      [
                        _c("strong", [
                          _vm._v(
                            "Third place (" +
                              _vm._s(award.bronze.years.length) +
                              "):"
                          ),
                        ]),
                        _vm._v(" "),
                        _vm._l(award.bronze.years, function (bronze, item) {
                          return _c("span", [
                            _vm._v(_vm._s(bronze)),
                            item + 1 !== award.bronze.years.length
                              ? _c("span", [_vm._v(", ")])
                              : _vm._e(),
                          ])
                        }),
                      ],
                      2
                    )
                  : _vm._e(),
                _vm._v(" "),
                award.winner ? _c("hr", { staticClass: "my-0" }) : _vm._e(),
                _vm._v(" "),
                award.winner
                  ? _c(
                      "div",
                      { staticClass: "card-body text-left" },
                      [
                        _c("strong", [
                          _vm._v(
                            "Winner (" +
                              _vm._s(award.winner.years.length) +
                              "):"
                          ),
                        ]),
                        _vm._v(" "),
                        _vm._l(award.winner.years, function (winner, item) {
                          return _c("span", [
                            _vm._v(_vm._s(winner)),
                            item + 1 !== award.winner.years.length
                              ? _c("span", [_vm._v(", ")])
                              : _vm._e(),
                          ])
                        }),
                      ],
                      2
                    )
                  : _vm._e(),
                _vm._v(" "),
                award.runner_up ? _c("hr", { staticClass: "my-0" }) : _vm._e(),
                _vm._v(" "),
                award.runner_up
                  ? _c(
                      "div",
                      { staticClass: "card-body text-left" },
                      [
                        _c("strong", [
                          _vm._v(
                            "Runner up (" +
                              _vm._s(award.runner_up.years.length) +
                              "):"
                          ),
                        ]),
                        _vm._v(" "),
                        _vm._l(
                          award.runner_up.years,
                          function (runner_up, item) {
                            return _c("span", [
                              _vm._v(_vm._s(runner_up)),
                              item + 1 !== award.runner_up.years.length
                                ? _c("span", [_vm._v(", ")])
                                : _vm._e(),
                            ])
                          }
                        ),
                      ],
                      2
                    )
                  : _vm._e(),
              ]),
            ])
          }),
        ],
        2
      ),
    ]),
  ])
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "card-header" }, [
      _c("h5", { staticClass: "card-title mb-0" }, [_vm._v("About")]),
    ])
  },
]
render._withStripped = true



/***/ })

}]);