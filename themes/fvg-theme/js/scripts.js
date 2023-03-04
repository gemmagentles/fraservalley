/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/app.js":
/*!********************!*\
  !*** ./src/app.js ***!
  \********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ \"jquery\");\n/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _sass_main_scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./sass/main.scss */ \"./src/sass/main.scss\");\n/* harmony import */ var _sass_main_scss__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_sass_main_scss__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _components_header_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/header.js */ \"./src/components/header.js\");\n/* harmony import */ var _components_header_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_components_header_js__WEBPACK_IMPORTED_MODULE_2__);\n/* harmony import */ var _components_accordion_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components/accordion.js */ \"./src/components/accordion.js\");\n/* harmony import */ var _components_accordion_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_components_accordion_js__WEBPACK_IMPORTED_MODULE_3__);\n\n\n\n\n\n// Listen to tab events to enable outlines (accessibility improvement)\nfunction handleFirstTab(e) {\n    if (e.keyCode === 9) {\n        // the \"I am a keyboard user\" key\n        document.body.classList.add('user-is-tabbing');\n        window.removeEventListener('keydown', handleFirstTab);\n    }\n}\n\nwindow.addEventListener('keydown', handleFirstTab);\n\n//# sourceURL=webpack://fvg/./src/app.js?");

/***/ }),

/***/ "./src/components/accordion.js":
/*!*************************************!*\
  !*** ./src/components/accordion.js ***!
  \*************************************/
/***/ (function() {

eval("(function ($, root, undefined) {\n\n  $(function () {\n\n    'use strict';\n\n    var acc = document.getElementsByClassName(\"accordion-js\");\n    var i;\n\n    for (i = 0; i < acc.length; i++) {\n      acc[i].addEventListener(\"click\", function () {\n\n        this.classList.toggle(\"active\");\n        var panel = this.nextElementSibling;\n\n        if (panel.style.maxHeight) {\n          // close\n          panel.style.maxHeight = null;\n          panel.style[\"overflow\"] = \"hidden\";\n        } else {\n          // open\n          panel.style.maxHeight = panel.scrollHeight + \"px\";\n\n          // prevent overflow from being hidden once open\n          setTimeout(function () {\n            panel.style[\"overflow\"] = \"visible\";\n          }, 250);\n        }\n      });\n    }\n  });\n})(jQuery, this);\n\n//# sourceURL=webpack://fvg/./src/components/accordion.js?");

/***/ }),

/***/ "./src/components/header.js":
/*!**********************************!*\
  !*** ./src/components/header.js ***!
  \**********************************/
/***/ (function() {

eval("(function ($, root, undefined) {\n\n    $(function () {\n\n        'use strict';\n    });\n\n    $(document).ready(function () {\n\n        $(\".nav__hamburger-icon\").click(function () {\n            $(\".nav__hamburger-icon\").toggleClass(\"nav__open\");\n        });\n\n        $(\".header__nav--link\").click(function () {\n            $(this).toggleClass(\"active\");\n        });\n\n        // When the user scrolls down 80px from the top of the document, make the nav bar smaller\n        window.onscroll = function () {\n            scrollFunction();\n        };\n\n        function scrollFunction() {\n\n            var headingNavBar = document.getElementById(\"navbar-js\");\n\n            if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {\n                headingNavBar.classList.add(\"sticky\");\n            } else {\n                headingNavBar.classList.remove(\"sticky\");\n            }\n        }\n    });\n})(jQuery, this);\n\n//# sourceURL=webpack://fvg/./src/components/header.js?");

/***/ }),

/***/ "./src/sass/main.scss":
/*!****************************!*\
  !*** ./src/sass/main.scss ***!
  \****************************/
/***/ (() => {

eval("// extracted by mini-css-extract-plugin\n\n//# sourceURL=webpack://fvg/./src/sass/main.scss?");

/***/ }),

/***/ "jquery":
/*!*************************!*\
  !*** external "jQuery" ***!
  \*************************/
/***/ ((module) => {

"use strict";
module.exports = jQuery;

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
/******/ 		__webpack_modules__[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	__webpack_require__("./src/app.js");
/******/ 	var __webpack_exports__ = __webpack_require__("./src/sass/main.scss");
/******/ 	
/******/ })()
;